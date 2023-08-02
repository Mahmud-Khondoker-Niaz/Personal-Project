<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <div id="main">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Edit Sku</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('sku.update',['id'=>$sku->id])); ?>"  method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" name="name" value=" <?php echo e($sku->name); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>
          

                <div class="form-group">
                    <label for="formGroupExampleInput">imaged Image</label>
                    <input type="file" class="form-control" name="image"  value="<?php echo e($sku->image); ?>" id="formGroupExampleInput" placeholder="Example input">
                    <img src="<?php echo e(asset($sku->image)); ?>" width="100">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Brand</label>

                    <select class="form-control" id="productsbrand_id" name="productsbrand_id">
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($brand->id); ?>"
                                    <?php if($sku->productsbrand_id==$brand->id): ?>
                                    selected
                                    <?php endif; ?>;

                            ><?php echo e($brand->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">weight</label>
                    <input type="text" class="form-control" name="weight" value="<?php echo e($sku->weight); ?>" id="formGroupExampleInput" placeholder="Example input">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">description</label>
                    <textarea class="form-control" id="p-desc" name="description"  value="<?php echo e($sku->description); ?>"><?php echo e($sku->description); ?></textarea>
                    
                   
                </div>
                
               
         

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit" id="formGroupExampleInput2" placeholder="Another input">
                </div>
                </form>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo e(URL::asset('site_assets/ckeditor/ckeditor.js')); ?>"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/skus/edit.blade.php ENDPATH**/ ?>