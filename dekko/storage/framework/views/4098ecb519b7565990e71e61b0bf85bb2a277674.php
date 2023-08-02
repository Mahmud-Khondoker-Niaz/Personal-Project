<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Update brand: <?php echo e($productsbrand->name); ?></h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('productsbrand.update',['id'=>$productsbrand->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
    <label for="formGroupExampleInput">Select a Category *</label>
    <select class="form-control" id="category_id" name="productscategory_id">
        <option value="" disabled>Select a Category</option>    
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>" <?php if($category->id == $productsbrand->productscategory_id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label for="formGroupExampleInput">Select a Sub-Category *</label>
    <select class="form-control" id="brandcategory_id" name="brandcategory_id">
        <option value="" selected>Select a Sub-Category</option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $category->brandcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($subcategory->id); ?>" data-category="<?php echo e($category->id); ?>" <?php if($subcategory->id == $productsbrand->brandcategory_id): ?> selected <?php endif; ?>><?php echo e($subcategory->name); ?></option>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($category->brandcategory->isEmpty()): ?>
            <option value="" data-category="<?php echo e($category->id); ?>">No subcategories</option>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Brand name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($productsbrand->name); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">imaged Image</label>
                    <input type="file" class="form-control" name="image"  value="<?php echo e($productsbrand->image); ?>" id="formGroupExampleInput" placeholder="Example input">
                    <img src="<?php echo e(asset($productsbrand->image)); ?>" width="100">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Description * </label>
                    <textarea class="form-control" id="p-desc" name="description"  value="<?php echo e($productsbrand->description); ?>"><?php echo e($productsbrand->description); ?></textarea>
                 
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Featured Image</label>
                    <input type="file" class="form-control" name="feature"  value="<?php echo e($productsbrand->feature); ?>" id="formGroupExampleInput" placeholder="Example input">
                    <img src="<?php echo e(asset($productsbrand->feature)); ?>" width="100">
                </div>


                <div class="form-group" style="margin-bottom:100px;">
                    <input type="submit" class="btn btn-success" value="Update brand" id="formGroupExampleInput2" placeholder="Another input">
                </div>

            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
    <script>CKEDITOR.replace( 'p-desc' );</script>
    <script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
    <script>CKEDITOR.replace( 'p-desc' );</script>

    <script>
    document.getElementById('category_id').addEventListener('change', function () {
        var selectedCategoryId = this.value;
        var subCategoryOptions = document.getElementById('brandcategory_id').options;

        for (var i = 0; i < subCategoryOptions.length; i++) {
            var subCategoryOption = subCategoryOptions[i];

            if (subCategoryOption.dataset.category === selectedCategoryId) {
                subCategoryOption.style.display = '';
            } else {
                subCategoryOption.style.display = 'none';
            }
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/productsbrands/edit.blade.php ENDPATH**/ ?>