

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

<?php if(session()->has('success')): ?>
<div class="alert alert-success col-lg-6" role="alert">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="table-responsive">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table table-striped table-sm col-lg-8">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($category->name); ?></td>
          <td>
            <a href="/dashboard/categories/<?php echo e($category->slug); ?>"  class="btn shadow-none " ><i class="bi bi-eye text-info"></i></a>
            <a href="/dashboard/categories/<?php echo e($category->slug); ?>/edit" class="btn shadow-none "><i class="bi bi-pencil text-warning"></i></a>
            <form action="/dashboard/categories/<?php echo e($category->slug); ?>" method="post" class="d-inline">
            <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button class="btn shadow-none " onclick="return confirm('Are you sure?')">
                <i class="bi bi-x-circle text-danger"></i>
              </button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Application\task-5\resources\views/dashboard/categories/index.blade.php ENDPATH**/ ?>