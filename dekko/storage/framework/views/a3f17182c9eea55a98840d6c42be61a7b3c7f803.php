<?php $__env->startSection("content"); ?>

<?php if(getcong('home_properties_layout')=='slider'): ?>

<?php echo $__env->make("_particles.slider", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

<?php echo $__env->make("_particles.mapsearch", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<style>
  .round-image-container {
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto;
}

.round-image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
  </style>


<h1 class="category-heading" style="text-align:center; font-size:50px;font-family:times new roman;
  color: #646464;
"><b>Categories</b></h1>

<nav class="brandlinks">
<?php     $all_cats = \App\Productscategory::orderBy('name', 'asc')->get();
 ?>
<?php $__currentLoopData = $all_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="<?php echo e(route('category.single',['slug'=>$result->slug])); ?>" class="<?php echo e($result->slug == $result->slug ? 'active' : ''); ?>" style="font-size:20px;"><b><?php echo e($result->name); ?></b></a>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</nav>

<!-- Recent Properties -->

  <section class="Home-page-section boxed-view clearfix">
 
    <div class="inner-container container">
      <div class="row">
  
    </div> <!--container-->
		<!--#propmotions-slider-->
   
		<section id="propmotions-slider" class="boxed-view clearfix" style="border-radius: 10px; background:#f9f9f9;  position: relative;">
  <div class="inner-container container">
    <div class="owl-carousel-ads-slider owl-theme" style="margin-right: 15px; margin-left: -1px;">
      <?php $__currentLoopData = \App\Productscategory::orderBy('name', 'asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $category->productsbrand->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="items">
            <a href="<?php echo e(route('brand.single', ['id' => $slide->id])); ?>">
              <div class="round-image-container">
                <img class="lazyOwl" data-src="<?php echo e(URL::asset($slide->image)); ?>" alt="">
              </div>
            </a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<!--#propmotions-slider-->


<h4 class="title"  style="font-size: clamp(32px,calc(32px + ((1vw - 3.75px) * 1.8122977346)),60px); text-align:center;
    line-height: clamp(40px,calc(40px + ((1vw - 3.75px) * 2.5889967638)),80px);
    color: #646464;
    margin-bottom: 1.5rem; animation: showup 7s infinite; margin-top:30px;  "><?php echo e(getcong('footer_widget1_title')); ?></h4>
    
	  



<div class="inner-container container" style="margin-top: 50px;
  margin-bottom: 50px;">
      <div class="top-section clearfix">
	  <?php
    $result = \App\Blog::latest()->first();
?>
<?php if($result): ?>
<div class="col-xs-12 col-md-6 col-sm-12">
	  <img src="<?php echo e(URL::asset($result->feature)); ?>" class="lazyOwl" alt="<?php echo e($result->title); ?>" style="max-width: 100%; height: auto; border-radius:15px;"> 
</div>
	  <div class="col-xs-12 col-md-6 col-sm-12"">
	  <h1> <?php echo e($result->title); ?></h1>
	  <p style="color: rgb(170, 170, 170);"> <?php echo e($result->created_at->format('j-F-Y')); ?></p>



	<p class="details" style="max-width: 75rem;
    margin: 0 auto clamp(30px,calc(30px + ((1vw - 3.75px) * 1.2944983819)),50px);
    font-size: clamp(16px,calc(16px + ((1vw - 3.75px) * .5177993528)),24px);
    color: #2b2b2b; text-align: justify; opacity: 10; font-variant: small-caps;" > <?php echo Str::limit($result->description,350); ?>

  </p>
  <a href="<?php echo e(route('blog.single',['id'=> $result->id])); ?>" class="btn more-link" >Read More</a>

</div>
<?php endif; ?>
       
        
      </div>

      
    </div>
	

        </div>
      </div>

<section>
<section id="propmotions-slider" class="boxed-view clearfix" style="background:#fafafa;  position: relative;">

<div class="inner-container container">
		<div class="owl-carousel-ads-slider owl-theme">

              <?php $__currentLoopData = \App\Blog::orderBy('id','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="items" >
	          <a href="<?php echo e(route('blog.single',['id'=> $result->id])); ?>" >
			  <p style="color: rgb(170, 170, 170);"> <?php echo e($result->created_at->format('j-F-Y')); ?></p>

	            <img src="<?php echo e(URL::asset($result->feature)); ?>" class="lazyOwl" alt="<?php echo e($result->title); ?>"  style=" height: 250px;
  width: 350px;" >

	         
	          </a>
			  <a href="<?php echo e(route('blog.single',['id'=> $result->id])); ?>" class="title" style="font-size:14px; color:black;"><?php echo e(Str::limit($result->title,80)); ?></a>

	         
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
       
            
    
        
    

</section>
</section>





    
  </section>
  <!-- End of Recent Properties -->



  

<?php $__env->stopSection(); ?>



<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/pages/index.blade.php ENDPATH**/ ?>