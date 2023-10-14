<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }

    public function add_post(Request $request)
    {
        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;


        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        $post->user_id = $userid;
        $post->name = $name;
        $post->usertype = $usertype;

        $image = $request->image;
        if ($image) {
            // to keep the image in the folder
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);

            // to keep the image in the database table 
            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back()->with('message', 'Post Added Successfully');
    }

    public function show_post(){
        $post = Post::all();

        return view('admin.show_post', compact('post'));
    }

    public function delete_post($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('message', 'Post Deleted Successfully');
    }

    public function edit_page($id){
        $post = Post::find($id);

        return view('admin.edit_page', compact('post'));
    }

    public function update_post(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;

        $image = $request->image;
        if($image){
            // to keep the image in the folder
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);

            // to keep the image in the database table 
            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back()->with('message', 'Post Updated Successfully');
    }

    public function accept_post($id){
        $post = Post::find($id);
        $post->post_status = 'active';
        $post->save();
        return redirect()->back()->with('message', 'Post Status changed to active Successfully.');
    }

    public function reject_post($id){
        $post = Post::find($id);
        $post->post_status = 'rejected';
        $post->save();
        return redirect()->back()->with('message', 'Post Status changed to rejected Successfully.');
    }

}