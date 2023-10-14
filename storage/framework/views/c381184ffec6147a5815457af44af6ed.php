<!DOCTYPE html>
<html>
  <head> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            <?php echo e(session()->get('message')); ?>

        </div>
        <?php endif; ?> 

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

            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->description); ?></td>
                <td><?php echo e($post->name); ?></td>
                <td><?php echo e($post->post_status); ?></td>
                <td><?php echo e($post->usertype); ?></td>
                <td>
                    <img src="postimage/<?php echo e($post->image); ?>" alt="" class="img_deg">
                </td>
                <td>
                    <a class="btn btn-danger" href="<?php echo e(url('delete_post', $post->id)); ?>" onclick="confirmation(event)">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success" href="<?php echo e(url('edit_page', $post->id)); ?>">Edit</a>
                </td>
                <td><a onclick="return confirm('Are you sure you want to accept this post?')" class="btn btn-outline-secondary" href="<?php echo e(url('accept_post', $post->id)); ?>">Accept</a></td>
                <td><a onclick="return confirm('Are you sure you want to reject this post?')" class="btn btn-primary" href="<?php echo e(url('reject_post', $post->id)); ?>">Reject</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
      </div>

        <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
</html><?php /**PATH C:\xampp\htdocs\blogbloom\resources\views/admin/show_post.blade.php ENDPATH**/ ?>