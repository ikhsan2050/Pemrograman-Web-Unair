
<?php $__env->startSection('content'); ?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo e($product->id); ?></th>
        <td><?php echo e($product->title); ?></td>
        <td><?php echo e($product->category->name); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td class="text-center">                  
          <a class="btn btn-sm btn-warning" href="/dashboard/products/edit"><i class="fa fa-pen"></i></a>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views//dashboard/products/all.blade.php ENDPATH**/ ?>