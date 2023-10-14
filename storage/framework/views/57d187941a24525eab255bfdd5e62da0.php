<!DOCTYPE html> <html lang="en"> <head>
<!-- basic -->

<?php echo $__env->make('home.homecss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style type="text/css">
.post_dg{
padding: 30px;
text-align: center;
background-color: black;
}

.title_deg{
font-size: 30px;
font-weight: bold;
padding: 15px;
/* color: #DAA520; */
-webkit-text-stroke: 1px #000; /* Width and color of the border */
color: #fff; /* Inner text color */
display: inline;
}

.description_deg{
font-size: 18px;
font-weight: bold;
padding: 15px;
color: white;
}

.img_deg{
height: 200px;
width: 300px;
padding: 30px;
margin: auto;
}
</style>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(session()->has('message')): ?>
      <div class="alert alert-success">
         <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>

         <?php echo e(session()->get('message')); ?>

      </div>
      <?php endif; ?>

      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="post_dg">
         <img class="img_deg" src="/postimage/<?php echo e($post->image); ?>" alt="">
         <h4 class="title_deg"><?php echo e($post->title); ?></h4>
         <p class="description_deg"><?php echo e($post->description); ?></p>
         <a onclick="return confirm('Are you sure you want to delete this?')" href="<?php echo e(url('my_post_del', $post->id)); ?>"
            class="btn btn-danger">Delete</a>
         <a href="<?php echo e(url('post_update_page', $post->id)); ?>" class="btn btn-primary">Update</a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      <!-- header section end -->



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

</html><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/my_post.blade.php ENDPATH**/ ?>