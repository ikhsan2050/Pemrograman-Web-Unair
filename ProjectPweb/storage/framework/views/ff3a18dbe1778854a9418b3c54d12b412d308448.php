
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Add New Product</h1>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="mb-4">
                            <label for="title" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-4">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock">
                        </div>
                        <div class="mb-4">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image">
                        </div>
                        <div class="mb-4">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price">
                        </div>
                        <div class="mb-4">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name='category_id'>
                                <option selected>-</option>
                                <option value="1">Kulkas</option>
                                <option value="2">TV</option>
                                <option value="3">Laptop</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProjectPWeb\resources\views//dashboard/products/create.blade.php ENDPATH**/ ?>