<!DOCTYPE html> <html lang="en"> <head>
<!-- basic -->

<base href="/public">
@include('home.homecss')

<style type="text/css">
    .div_deg {
        text-align: center;
        background-color: black;
    }

    .img_deg {
        height: 150px;
        width: 250px;
        margin: auto;
    }

    label {
        display: inline-block;
        font-size: 18px;
        font-weight: bold;
        width: 200px;
        color: white;

    }

    .input_deg {
        padding: 30px;
    }

    .title_deg {
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
        color: white;
    }
</style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

        <div class="div_deg">

            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>

                {{session()->get('message')}}
            </div>
            @endif

            <h1 class="title_deg">Update Post</h1>
            <form action="{{url('update_post_data', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input_deg">
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{$post->title}}">
                </div>

                <div class="input_deg">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" height="100px"
                        width="200px">{{$post->description}}</textarea>
                </div>

                <div class="input_deg">
                    <label for="">Current Image</label>
                    <img src="/postimage/{{$post->image}}" class="img_deg" alt="">
                </div>

                <div class="input_deg">
                    <label for="">Change Current Image</label>
                    <input type="file" name="image">
                </div>

                <div class="input_deg">
                    <input type="submit" class="btn btn-outline-secondary">
                </div>
            </form>
        </div>

        <!-- header section end -->



        <!-- footer section start -->
        @include('home.footer')
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://www.quora.com/profile/Shreya-Khapekar-4">Ms. Shreya Khapekar</a></p>
            </div>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript -->
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>