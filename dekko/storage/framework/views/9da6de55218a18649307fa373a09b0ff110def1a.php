<?php $__env->startSection('content'); ?>

<div id="main">
    <div class="page-header">
        
        <div class="pull-right">
            <a href="<?php echo e(route('productsbrand.create')); ?>" class="btn btn-primary">Add brand <i class="fa fa-plus"></i></a>
        </div>
        <h2>All brands</h2>
    </div>

     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>  
                              
                    <th>Brand</th>
                    <th scope="col">Category</th>  
                    <th scope="col"> SUb-Category</th>

                    <th scope="col">Image</th>
                  
                     
                    <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
                </tr>
            </thead>

            <tbody>
           
                <?php $__currentLoopData = $productsbrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                 
                <td><?php echo e($brand->name); ?></td>
                <td>
               
                <?php if($brand->productscategory): ?>
    <?php echo e($brand->productscategory->name); ?>

<?php endif; ?>
         

                </td>
 <td>
                    
                    <?php $__currentLoopData = $brandcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($brand->brandcategory && $brand->brandcategory->id == $category->id): ?>
            <?php echo e($category->name); ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
                    </td>
               

                <td><img src="<?php echo e(asset($brand->image)); ?>" alt="<?php echo e($brand->title); ?>" width="50px" height="50px"> </td>
                
                <td class="text-center">

                    <a href="<?php echo e(route('productsbrand.edit',['id'=>$brand->id])); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                    <a href="<?php echo e(route('productsbrand.delete',['id'=>$brand->id])); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>

                
                
            </td>
                
            </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 
             
            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/productsbrands/index.blade.php ENDPATH**/ ?>