<!DOCTYPE html> <html lang="en"> <head> <!-- basic --> <base href="/public"> <?php echo $__env->make('home.homecss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </head>

<body> <!-- header section start -->
    <div class="header_section"> <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div> <!-- header section end --> <div style="text-align:
        center;" class="col-md-12"> <div> <img style="padding: 20px; height: 400px; width: 550px; margin: auto;"
        src="/postimage/<?php echo e($post->image); ?>">
        </div>

        <h3><b><?php echo e($post->title); ?></b></h3>
        <h4><?php echo e($post->description); ?></h4>

        <p>Post by <b><?php echo e($post->name); ?></b></p>
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

    </html><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/post_details.blade.php ENDPATH**/ ?>