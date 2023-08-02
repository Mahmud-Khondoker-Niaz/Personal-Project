<?php $__env->startSection('head_title', trans('Our Team').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" data-image-src="<?php if(getcong('title_bg')): ?>  <?php endif; ?>">
    <div class="inner-container container">
      
    </div>
  </section>
  <!--Breadcrumb Section--> 

  <section class="main-container container agent-box-container">
    <div class="title-box clearfix">
      <h2 class="hsq-heading type-1">Team Members</h2>
      <div class="subtitle">&nbsp;</div>
    </div>

  

  


  <div class="view-all-agents">
     <?php $__currentLoopData = $teams->where('status',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="col-xs-6 col-sm-4 col-md-3">
        <div class="agent-item">
            <div class="agent-profile">       
              <?php if($team->image): ?>
                <img src="<?php echo e(URL::asset($team->image)); ?>" alt="<?php echo e($team->name); ?>">
              <?php else: ?>
              <img src="<?php echo e(URL::asset('site_assets/img/avatar.png')); ?>" alt="<?php echo e($team->name); ?>">
              <?php endif; ?>                       
            </div>

             <div class="agent-info">

                <h3 class="agent-name" style="text-align:center;"> <a href="<?php echo e(url('team/'.$team->id)); ?>"><?php echo e($team->name); ?></a></h3>
                
                <div class="container">
                  <p>Designation:<b><?php echo e($team->designation); ?></b></p>
                  <p>Email:<i><?php echo e($team->email); ?></i> </p>
                  <!--<p>Linkdn Profile : <b><?php echo e($team->linkdn); ?></b></p>-->
                  
                </div>
              </div>

             
        </div>

      
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>  <!--view-all-agents-->

  </section>


  <?php $__env->stopSection(); ?>

  
  <?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.js')); ?>"></script>

    <script>
        <?php if(Session::has('success')): ?>
		    	toastr.success("<?php echo e(Session::get('success')); ?>")
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
		    	toastr.info("<?php echo e(Session::get('info')); ?>")
        <?php endif; ?>

        <?php if(Session::has('danger')): ?>
		    	toastr.danger("<?php echo e(Session::get('danger')); ?>")
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/pages/teams.blade.php ENDPATH**/ ?>