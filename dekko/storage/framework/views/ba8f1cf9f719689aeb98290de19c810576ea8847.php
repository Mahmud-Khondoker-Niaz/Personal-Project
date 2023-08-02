<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="main">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Create new member</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('team.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Type Name">
                        </div>
                    
                  
                    
   
   
                 
                        <div class="form-group">
                            <label for="formGroupExampleInput">Member Image *</label> <br>
                            <div class="form-group user_prfile">
                                <input type="file" class="form-control" name="image">
                                
                            </div>
                        </div>
                  

               
                <div class="form-group">
                    <label for="formGroupExampleInput2">Designation * </label>
                    <input type="text" name="designation" id="designation" class="form-control" placeholder="Type Designtaion" >
                 
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Type Email" >
                 
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Linkdn </label>
                    <input type="text" name="linkdn" id="linkdn" class="form-control" placeholder="Type linkdn link" >
                 
                </div>
                <div class="form-group">
                <label for="formGroupExampleInput2">Description  </label>
                    <textarea type="text" name="description" id="p-desc" class="form-control" placeholder="Please type description" row="10"></textarea>
                 
                </div>
                <div class="form-group">
                    <div class="google-ads" style="width: 100%; max-height: 100px;">

                    </div>
                    <div class="submit-btn">
                        <input type="submit"  class="btn btn-success" value="Click To Submit" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                </div>   
</div>



            </form>
        </div>
    </div>
 </div>




 
 
 


<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.admin_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/teams/create.blade.php ENDPATH**/ ?>