
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8 ">
            <h1 classs="mb-3 text-center"><?php echo e($post->title); ?></h1>
            <a href="" class="btn btn-success"> <span data-feather="arrow-left"> Back to my posts</span></a>
            <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="btn btn-warning"> <span data-feather="edit">Edit</span></a>
            <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                  <?php echo csrf_field(); ?>
                  <button class="btn btn-danger " onclick="return confirm('Are you sure?')">
                   Delete
                  </button>
            </form> 
            </div>
     
        <div class="col-lg-8 ">
            <img class="img-fluid p-4 mt-3 " src="https://source.unsplash.com/666x250/?<?php echo e($post->category->name); ?>" alt="<?php echo e($post->category->name); ?>" >
        </div>
            <article class="col-lg-8 my-2">
                <?php echo $post->content; ?> 
            </article>
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Application\task-5\resources\views/dashboard/posts/show.blade.php ENDPATH**/ ?>