<style>
.cat-head
{
font-family: 'Open Sans', sans-serif;
  font-style: normal;
      font-weight: 1600;

}


.author-image {
    width: 50px;
    height: 50px;

    float: left;
}

img {
    border-radius: 50%;
}

.authorname {
    float: left;
    margin-left: 15px;
}

.authorname>h4 {

    margin: 5px 0px;


}

.time {
    font-size: 11px;
    font-style: italic;
    color: #aaaa;
}





</style>


<?php $__env->startSection('head_title', stripslashes($blog->title) .' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_description', substr(strip_tags($blog->description),0,200)); ?>
<?php $__env->startSection('head_image', asset($blog->feature)); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
   


    
 <section class="main-container container">


  	
    <div class="col-sm-12">
 
        <div class="content-box" style="padding:0;
    background-color: rgba(0,0,0,0.0);">
       <div class="blog-thumbs">
				<br>
                <h1 class="blog-title" style="text-align:center;   margin-top:80px;margin-bottom:30px;;
    font-size: 34px;
    line-height: 50px;"><b><?php echo e($blog->title); ?></b></h1>
             <img src="<?php echo e(asset($blog->feature)); ?>" width="1600" height="836" alt="<?php echo e($blog->title); ?>" class="img-thumbnail">    
            </div>
  		 <div class="single-blog-posts-body">
           
			<br>
            <div class="blog-contents">
				<!-- <h1 class="blog-title" style="text-align:center;"><?php echo e($blog->title); ?></h1> -->
               <!-- <ul class="post-info-header list-inline">
                  
                  <li>Posted on:  <b><?php echo e($blog->created_at->format('d-m-y')); ?></b></li>
                </ul>-->
				
				<br>
			<?php if($blog->check == 1): ?>
<div class="author-box">
	<div class="row">
		<div class="col-md-3">
			<div class="author-img text-center">
				 <img src="<?php echo e(URL::asset('site_assets/img/dekko-logo.png')); ?>" class="rounded-circle" alt="author image" style=" height: 120px; ">
			</div>
		</div>
		<br>
		<div class="col-md-9">
			<div class="author-info" style="margin-top:50px;">
				<small><em>Written by,</em></small>
				<p><strong>Dekko Foods Ltd,</strong><br><small>Admin</small></p>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
<div class="author-box">
					<div class="row">
						<div class="col-md-3">
						<div class="author-img text-center">
								 <img src="<?php echo e(asset($blog->image)); ?>" class="rounded-circle" alt="author image" style=" height: 120px; ">
							</div>
						</div>
<br>
						<div class="col-md-9">
							<div class="author-info" style="margin-top:50px;">
								<small><em>Written by,</em></small>

								<p><strong><?php echo e($blog->name); ?></strong><br><small><?php echo e($blog->designation); ?>.</small></p>

			
							
							</div>
						</div>
					</div>
					
				</div>
<?php endif; ?>
                <span class="blog-description" style=" text-align: justify;">
                    <?php echo $blog->description; ?>

                </span>
            </div>


                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div>
                    <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>


                        <?php endif; ?>
                    </div>



<br>
                  
           
            <div class="related-post mt-3">
                <div class="heading">
                    <h4 class="heading-title">Related Posts</h4>
                </div>
                <div class="row" style="margin-bottom:20px;">
                    <?php $__currentLoopData = $related->where('status',1)->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card relatedpost">
                         <a href="<?php echo e(route('blog.single',['id'=> $row->id])); ?>">        
                          <img src="<?php echo e(asset($row->feature)); ?>" class="card-img-top img-thumbnail" alt="<?php echo e($row->title); ?>">
                          <div class="card-body">
                            <h4 class="card-title" style="color: #000;font-weight: bold;"><?php echo e($row->title); ?></h4>
                          </div>
                          </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

             </div> <!-- related-post-->
             
              
        </div>
   
    </div>
    </div>
  
  </section>

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dekko\resources\views/blogs/single-blog.blade.php ENDPATH**/ ?>