
<?php $__env->startSection('container'); ?>

<h1>Product Category: <?php echo e($category); ?></h1>
<a href="/product">Back to Main</a>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2>
            <a href="/product/<?php echo e($product->slug); ?>"><?php echo e($product->title); ?></a>
        </h2>
        <h3>Price: <?php echo e($product->price); ?></h3>
        <p><?php echo e($product->excerpt); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views/category.blade.php ENDPATH**/ ?>