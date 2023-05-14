

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10 ">
            <h1 classs="mb-3 text-center"><?php echo e($post->title); ?></h1>
            <p>Author: <a href="/posts?author=<?php echo e($post->author->id); ?>" class="text-decoration-none"><?php echo e($post->author->name); ?></a> Category : <a href="/posts?category=<?php echo e($post->category->slug); ?>" class="text-decoration-none"><?php echo e($post->category->name); ?></a></p>
            <div class="text-center">
                <?php if($post->image): ?>
                <div style="max-height: 350px; overflow:hidden;">
                    <img class="img-fluid  " src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="<?php echo e($post->category->name); ?>" >
                </div>
                <?php else: ?>
                <img class="img-fluid  " src="https://source.unsplash.com/666x250/?<?php echo e($post->category->name); ?>" alt="<?php echo e($post->category->name); ?>" >
                <?php endif; ?>
            </div>
           
            <article class="my-2">
                <?php echo $post->content; ?> 
            </article>
        <a href="/posts" class="d-block mt-3">Back to posts</a>
        </div>
    </div>
</div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Application\task-5\resources\views/post.blade.php ENDPATH**/ ?>