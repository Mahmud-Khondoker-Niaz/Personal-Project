<?php $__env->startSection('content'); ?>

<div id="main">
    <div class="page-header">
        
        <div class="pull-right">
            <a href="<?php echo e(route('sku-post')); ?>" class="btn btn-primary">Add Sku <i class="fa fa-plus"></i></a>
        </div>
        <h2>All Skus</h2>
    </div>

     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
                <tr>  
                              
                    <th>SKU</th>
                    <th scope="col">Brand</th>  
       
                    <th>weight</th>
                    <th scope="col">Image</th>
                  
                     
                    <th class="text-center width-100"><?php echo e(trans('words.action')); ?></th>
                </tr>
            </thead>

            <tbody>
           
         <?php $__currentLoopData = $skus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                 
                <td><?php echo e($sku->name); ?></td>

                <td>
                 
                <?php if($sku->productsbrand): ?>
    <?php echo e($sku->productsbrand->name); ?>

<?php endif; ?>
        
<td><?php echo e($sku->weight); ?> gm</td>
                   
                <td><img src="<?php echo e(asset($sku->image)); ?>" alt="<?php echo e($sku->title); ?>" width="50px" height="50px"> </td>
                
                <td class="text-center">

                    <a href="<?php echo e(route('sku.edit',['id'=>$sku->id])); ?>" class="btn btn-icon waves-effect waves-light btn-success m-b-5 m-r-5" data-toggle="tooltip" title="<?php echo e(trans('words.edit')); ?>"> <i class="fa fa-edit"></i> </a>
                    <a href="<?php echo e(route('sku.delete',['id'=>$sku->id])); ?>" class="btn btn-icon waves-effect waves-light btn-danger m-b-5" onclick="return confirm('<?php echo e(trans('words.dlt_warning_text')); ?>')" data-toggle="tooltip" title="<?php echo e(trans('words.remove')); ?>"> <i class="fa fa-remove"></i> </a>

                
                
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

<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/skus/index.blade.php ENDPATH**/ ?>