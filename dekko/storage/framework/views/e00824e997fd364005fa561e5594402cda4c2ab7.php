<?php $__env->startSection('head_title', trans('Team Member').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>
<style>


    </style>
<?php $__env->startSection("content"); ?>
<!--Breadcrumb Section-->
  <section class="breadcrumb-box" data-parallax="scroll" >
    <div class="inner-container container">
      
    </div>
  </section>
  <!--Breadcrumb Section--> 

  <section class="main-container container agent-box-container">
    <div class="title-box clearfix">
      <h2 class="hsq-heading type-1">Team Members</h2>
      <div class="subtitle">&nbsp;</div>
    </div>


<div class="col-sm-12">
        <div class="content-box">
  		 <div class="single-blog-posts-body">
    <div class="blog-thumbs">
				<br>
             <img src="<?php echo e(asset($teams->image)); ?>" alt="<?php echo e($teams->title); ?>" class="img-thumbnile" style=" display: block; margin-left: auto;
  margin-right: auto;">    
            </div>
</div>
</div>
</div>

<div class="content-box">
  		 <div class="single-blog-posts-body">
    <div class="blog-thumbs">
				<br>
             <h1 class="agent-name" style="text-align: center;"> <?php echo e($teams->name); ?></h1>
            </div>
           
				
				<h3 class="agent-name" style="text-align: center;"><i><?php echo e($teams->designation); ?> , SIKI Realtor</i></h3>
			
           		<p class="agent-name" style="text-align: center;"><i>Email: <?php echo e($teams->email); ?> </i></p>

				<p class="agent-name" style="text-align: center;"><i>Linkdn Profile: <?php echo e($teams->linkdn); ?> </i></p>
		

</div>
</div>

<div class="content-box">
  		 <div class="single-blog-posts-body">
   
           
				
			
           
				
				<p class="agent-name" style="text-align: center;"><i><b>Quotation:</b> "<?php echo e($teams->description); ?>" </i></p>
		

</div>
</div>
<br><br><br>


  </section>


  <?php $__env->stopSection(); ?>

  
  <?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/pages/teams_single.blade.php ENDPATH**/ ?>