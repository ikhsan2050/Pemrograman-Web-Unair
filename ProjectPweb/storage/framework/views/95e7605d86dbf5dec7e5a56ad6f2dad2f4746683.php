
<?php $__env->startSection('container'); ?>
<h2 class="ms-2"><?php echo e($title); ?></h2>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3 ms-2">
            <form action="/product">
                <?php if(request('category')): ?>
                    <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                <?php endif; ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..", name="search" value="<?php echo e(request('search')); ?>">
                    <button class="btn btn-dark" type="submit">Search</button>
                  </div>                  
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <?php echo e($product->links()); ?>

    </div>
    <div class="container">
        <div class="row">
            <?php if($product->count()): ?>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <a href="/product/<?php echo e($product->slug); ?>">
                    <img src="https://source.unsplash.com/500x400?<?php echo e($product->category->name); ?>" class="card-img-top" alt="<?php echo e($product->category->name); ?>"></a>
                    <div class="card-body">
                        <p href="/product/<?php echo e($product->slug); ?>"class="card-title fs-5"><?php echo e($product->title); ?></p>
                        <p class="card-text"><?php echo e($product->excerpt); ?></p>
                    <div class="card-footer mt-4">
                        <a href="/product/<?php echo e($product->slug); ?>" class="btn btn-primary">See more</a>
                    </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
            <?php else: ?>
            <p class="text-center fs-4">No product found</p>
            <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views/product.blade.php ENDPATH**/ ?>