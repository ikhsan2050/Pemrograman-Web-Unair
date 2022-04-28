<?php $__env->startSection('container'); ?>
  <div class="container">
    <div class="row justify-content-center mt-3">
      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h4 class="text-center"><?php echo e($category->name); ?></h4>
        <?php for($i = 0; $i < 1; $i++): ?>
              <?php $__currentLoopData = $category->product->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="/img/<?php echo e($p->title); ?>.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo e($p->title); ?></h5>
              </div>
            </div>
          </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endfor; ?>
          <div class="d-flex justify-content-center">
            <a href="/product?category=<?php echo e($p->category->slug); ?>" class="btn btn-primary mt-3 mb-4">View More</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views/home.blade.php ENDPATH**/ ?>