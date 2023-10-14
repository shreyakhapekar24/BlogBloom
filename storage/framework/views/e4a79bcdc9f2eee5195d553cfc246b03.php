<!DOCTYPE html> <html lang="en"> <head>
<!-- basic -->

<style type="text/css">
    .div_deg {
        text-align: center;
    }

    .title_deg {
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 30px;
    }

    label {
        display: inline-block;
        width: 200px;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    .field_deg {
        padding: 25px;
    }
</style>

<?php echo $__env->make('home.homecss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- header section start -->
    <div class="header_section">
        <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- header section end -->

        <div class="div_deg">
            <h3 class="title_deg">Add Post</h3>
            <form action="<?php echo e(url('user_post')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                <div class="field_deg">
                    <label for="">Title</label>
                    <input type="text" name="title">
                </div>
                <div class="field_deg">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="field_deg">
                    <label for="">Add Image</label>
                    <input type="file" name="image">
                </div>
                <div class="field_deg">
                    <input type="submit" value="Add Post" class="btn btn-outline-secondary">
                </div>
            </form>
        </div>

        <!-- footer section start -->
        <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">2023 All Rights Reserved. Design by <a
                        href="https://www.quora.com/profile/Shreya-Khapekar-4">Ms. Shreya Khapekar</a></p>
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

</html><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/create_post.blade.php ENDPATH**/ ?>