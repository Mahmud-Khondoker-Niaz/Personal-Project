<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Update Sub-Category: <?php echo e($brandcategory->name); ?></h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('brandcategory.update',['id'=>$brandcategory->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category</label>

                    <select class="form-control" id="productscategory_id" name="productscategory_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"

                                    <?php if($brandcategory->productscategory && $brandcategory->productscategory->id == $category->id): ?>

                                    
    selected
<?php endif; ?>

                            ><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Cate name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($brandcategory->name); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update category" id="formGroupExampleInput2" placeholder="Another input">
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/brandcats/edit.blade.php ENDPATH**/ ?>