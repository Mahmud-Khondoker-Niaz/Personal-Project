<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Create new Sub-Category</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('brandcategory.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>



                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category *</label>

                    <select class="form-control" id="category_id" name="productscategory_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="formGroupExampleInput">Sub-Category Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Sub-category Name">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="store category" id="formGroupExampleInput2" placeholder="Another input">
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/brandcats/create.blade.php ENDPATH**/ ?>