<?php $__env->startSection('content'); ?>
                   

<div id="main">
<br>
 <div>
<?php if(session()->has('success')): ?>
  <div class="alert alert-success">
  <?php echo e(session()->get('success')); ?>

    
  <?php endif; ?> 
</div>
    <div class="page-header">
        
        <div class="pull-right">
            <a href="<?php echo e(route('gallery-create')); ?>" class="btn btn-primary">Add New Image <i class="fa fa-plus"></i></a>
        </div>


        <h2>All Images</h2>
    </div>

        
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
	<div class="pull-right">
        </div>
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
          
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                       
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($loop->iteration); ?></td>
                                <td><img src="<?php echo e(asset($gallery->image)); ?>" alt="<?php echo e($gallery->name); ?>" width="50px" height="50px"> </td>
                                <td><?php echo e($gallery->caption); ?></td>
                                <td><?php echo e($gallery->created_at); ?></td>
                             
                                <td><?php echo e($gallery->description); ?></td>
                               
                                <td class="text-center">
                                    <?php if($gallery->status==1): ?>
                                        <span class="icon-circle bg-green">
                                            <i class="md md-check"></i>
                                        </span>
                                    <?php else: ?>
                                        <span class="icon-circle bg-orange">
                                            <i class="md md-close"></i>
                                        </span>
                                    <?php endif; ?>
                            </td> 

                            <td>
                                
                                <div class="btn-group">
                                <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo e(trans('words.action')); ?> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu"> 
                                
                                    <li><a href="<?php echo e(route('gallery.edit',['id'=>$gallery->id])); ?>" target="_blank"><i class="md md-edit"></i> <?php echo e(trans('words.edit')); ?></a></li>
                                    
                                    
                                    
                                    <li>
                                        <?php if($gallery->status==1): ?>                   
                                        <a href="<?php echo e(url('admin/gallery/status/'.Crypt::encryptString($gallery->id))); ?>"><i class="md md-close"></i> <?php echo e(trans('words.unpublish')); ?></a>
                                        <?php else: ?>
                                        <a href="<?php echo e(url('admin/gallery/status/'.Crypt::encryptString($gallery->id))); ?>"><i class="md md-check"></i> <?php echo e(trans('words.publish')); ?></a>
                                        <?php endif; ?>
                                    </li>

                                    <li><a href="<?php echo e(route('gallery.delete',['id'=>$gallery->id])); ?>" onclick="return confirm('<?php echo e(trans('Are you send it Trash')); ?>')"><i class="md md-delete"></i> <?php echo e('Trash'); ?></a></li>


                                </ul>
                            </div> 

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

<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/gallery/index.blade.php ENDPATH**/ ?>