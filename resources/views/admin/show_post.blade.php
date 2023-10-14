<!DOCTYPE html>
<html>
  <head> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')

    <style type="text/css">
        .title-deg{
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .table_deg{
            border: 1px solid white;
            width: 90%;
            text-align: center;
            margin-left: 70px;
        }

        .th_deg{
            background-color: skyblue;
            color: black;
        }

        .img_deg{
            height: 100px;
            width: 150px;
            padding: 10px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}
        </div>
        @endif 

        <h1 class="title-deg">All Posts</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th width="12px">Post Title</th>
                <th width="30%">Description</th>
                <th width="7%">Post By</th>
                <th width="7%">Post Status</th>
                <th width="7%">UserType</th>
                <th width="12%">Image</th>
                <th width="5%">Delete</th>
                <th width="5%">Edit</th>
                <th width="7%">Status Accept</th>
                <th width="7%">Status Reject</th>
            </tr>

            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td>
                    <img src="postimage/{{$post->image}}" alt="" class="img_deg">
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('delete_post', $post->id)}}" onclick="confirmation(event)">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{url('edit_page', $post->id)}}">Edit</a>
                </td>
                <td><a onclick="return confirm('Are you sure you want to accept this post?')" class="btn btn-outline-secondary" href="{{url('accept_post', $post->id)}}">Accept</a></td>
                <td><a onclick="return confirm('Are you sure you want to reject this post?')" class="btn btn-primary" href="{{url('reject_post', $post->id)}}">Reject</a></td>
            </tr>
            @endforeach
        </table>
      </div>

        @include('admin.footer')


    <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                title: "Are you sure you want to delete this?",
                text: "You won't be able to revert this delete.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel)=>
            {
                if(willCancel){
                    window.location.href=urlToRedirect;
                }
            });
        }
    </script>
  </body>
</html>