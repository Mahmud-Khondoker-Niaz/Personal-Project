<?php $__env->startSection('head_title', trans('Legal').' | '.getcong('site_name') ); ?>
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
      <h2 class="hsq-heading type-1">Legal Section</h2>
      <div class="subtitle">&nbsp;</div>
    </div>

    <?php $__currentLoopData = $legal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-12">
        <div class="content-box">
  		 <div class="single-blog-posts-body">
    <div class="blog-thumbs">
    
    

           
             <img src="<?php echo e(asset($object->image_page)); ?>"  class="img-thumbnile">   
             
            </div>

</div>
</div>
</div>



<div class="content-box">
  		 <div class="single-blog-posts-body">
   
           
				
			
           
				
				<p class="agent-name" style="text-align: center;">"  <?php echo $object->description; ?>" </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>



  </section>


  <?php $__env->stopSection(); ?>

  
  <?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(URL::asset('site_assets/alert-toastr/toastr.css')); ?> " rel="stylesheet">
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/pages/legal_details.blade.php ENDPATH**/ ?>