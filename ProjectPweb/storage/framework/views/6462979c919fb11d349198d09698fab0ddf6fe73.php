
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2><?php echo e($product->title); ?></h2>
            <p>Category: <a href="/product?category=<?php echo e($product->category->slug); ?>" class='text-decoration-none'><?php echo e($product->category->name); ?></a></p>
            <img src="https://source.unsplash.com/500x400?<?php echo e($product->category->name); ?>" alt="<?php echo e($product->category->name); ?>"></div>
            <div class="col-md-6 mt-5"><h3 class="mt-5">Price: Rp <?php echo e($product->price); ?>,00</h3>
                <?php echo $product->body; ?>

                <a href="/product" class='d-block mt-2'>Back to Main</a>
            </div>   
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views/1product.blade.php ENDPATH**/ ?>