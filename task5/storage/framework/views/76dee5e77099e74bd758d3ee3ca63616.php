

<?php $__env->startSection('container'); ?>
<h1 class="mb-5">Post Category:<?php echo e($category); ?></h1>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class=" mb-5">
    <h2><a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></h2>
    <div class="text-center">
    <img class="img-fluid img-thumbnail" src="<?php echo e($post->image); ?>" alt="Responsive image" width=30% >
    </div>
    <p><?php echo e($post->content); ?></p>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Application\task-5\resources\views/category.blade.php ENDPATH**/ ?>