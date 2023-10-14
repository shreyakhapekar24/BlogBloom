<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog Posts </h1>
            <p class="services_text">Discover captivating content from diverse bloggers, stay informed ,inspired, and engaged with our ever-growing collection of blog posts.</p>
            <div class="services_section_2">
               <div class="row">

                  <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <div class="col-md-4" style="padding: 30px">
                     <div><img style="margin-bottom: 20px; height: 200px" width="350px" src="/postimage/<?php echo e($post->image); ?>" class="services_img"></div>

                     <h4><?php echo e($post->title); ?></h4>

                     <p>Post by <b><?php echo e($post->name); ?></b></p>

                     <div class="btn_main"><a href="<?php echo e(url('post_details', $post->id)); ?>">Read More</a></div>
                  </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
               </div>
            </div>
         </div>
      </div><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/services.blade.php ENDPATH**/ ?>