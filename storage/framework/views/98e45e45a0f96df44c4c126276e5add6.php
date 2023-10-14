<!DOCTYPE html> <html lang="en"> <head>
<!-- basic -->

<base href="/public">
<?php echo $__env->make('home.homecss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
        <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="div_deg">

            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>

                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>

            <h1 class="title_deg">Update Post</h1>
            <form action="<?php echo e(url('update_post_data', $post->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="input_deg">
                    <label for="">Title</label>
                    <input type="text" name="title" value="<?php echo e($post->title); ?>">
                </div>

                <div class="input_deg">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" height="100px"
                        width="200px"><?php echo e($post->description); ?></textarea>
                </div>

                <div class="input_deg">
                    <label for="">Current Image</label>
                    <img src="/postimage/<?php echo e($post->image); ?>" class="img_deg" alt="">
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
        <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

</html><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/post_update_page.blade.php ENDPATH**/ ?>