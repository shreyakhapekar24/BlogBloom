<div class="header_main"> <div class="mobile_menu"> <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="logo_mobile"><a href="<?php echo e(url('/')); ?>"><img src="images/logo.png"></a></div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?php echo e(url('about')); ?>">About</a>
      </li>
      <li class="nav-item">
         <a class="nav-link " href="<?php echo e(url('contact')); ?>">Contact Us</a>
      </li>
   </ul>
</div>
</nav>
</div>
<div class="container-fluid">
   <div class="logo"><a href="<?php echo e(url('/')); ?>"><img src="images/logo.png"></a></div>
   <div class="menu_main">
      <ul>
         <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
         <li><a href="<?php echo e(url('about')); ?>">About</a></li>

         <?php if(Route::has('login')): ?>
         <?php if(auth()->guard()->check()): ?>
         <li>
            <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
         </li>

         <li><a href="<?php echo e(url('my_post')); ?>">My Posts</a></li>

         <li><a href="<?php echo e(url('create_post')); ?>">Create Post</a></li>

         <?php else: ?>
         <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
         <li><a href="<?php echo e(route('register')); ?>">Register</a></li>

         <?php endif; ?>
         <?php endif; ?>

         <li><a href="<?php echo e(url('contact')); ?>">Contact Us</a></li>
      </ul>
   </div>
</div>
</div><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/home/header.blade.php ENDPATH**/ ?>