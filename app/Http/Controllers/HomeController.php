<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $post = Post::where('post_status', '=', 'active')->get();
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage', compact('post'));
            } else if ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $post = Post::where('post_status', '=', 'active')->get();
        return view('home.homepage', compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);

        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post(Request $request)
    {
        $user = Auth()->user();
        $userid = $user->id;
        $username = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;
        $post->name = $username;
        $post->usertype = $usertype;
        $post->post_status = 'pending';

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }

        $post->save();
        // success, info 
        Alert::success('Congrats', 'You have added the data successfully.');
        return redirect()->back();
    }

    public function my_post()
    {
        $user = Auth::user();
        $userid = $user->id;
        $post = Post::where('user_id', '=', $userid)->get();


        return view('home.my_post', compact('post'));
    }

    public function my_post_del($id)
    {
        $post = Post::find($id);

        // Delete the associated image file(s)
        $image = $post->image;
        if ($image) {
            $imagePath = public_path('postimage/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $post->delete();

        return redirect()->back()->with('message', 'Post Deleted Successfully');
    }

    public function post_update_page($id){
        $post = Post::find($id);

        return view('home.post_update_page', compact('post'));
    }

    public function update_post_data(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }
        $post->save();
        return redirect()->back()->with('message', 'Post Updated Successfully');
    }

    public function aboutUs(){
        return view('home.aboutUs');
    }

    public function contact(){
        return view('home.contact');
    }
}