<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 <div class="sidebar-user">
		<div class="media sidebar-padding">
			<div class="media-left media-middle">
				<?php if(Auth::user()->user_icon): ?>
				 <img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->user_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle">			
				<?php else: ?>						
				 <img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle" width="60"/>
				<?php endif; ?>
			</div>
			<div class="media-body media-middle">
				 
				<a href="<?php echo e(URL::to('admin/profile')); ?>" class="h4 margin-none"><?php echo e(Auth::user()->name); ?></a>
				<ul class="list-unstyled list-inline margin-none">
					<li><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md-person-outline"></i></a></li>
					<?php if(Auth::User()->usertype=="Admin"): ?>
					<li><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md-settings"></i></a></li>
					<?php endif; ?>
					<li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="md-exit-to-app"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
               
               <?php if(Auth::user()->usertype=='Admin'): ?>
               
               		<li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
                
					<!--by imran-->
					
                    
                    <!--blog menu-->
	                <li class="submenu <?php echo e(classActivePath('blogs')); ?>">
                    <a href="#" <?php if(classActivePath('blogs') OR classActivePath('blog-categories')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Blogs'); ?> <span class="pull-right label label-primary"> </span>
                    </a>
	                    <ul <?php if(classActivePath('blogs') OR classActivePath('blog-categories')): ?> style="display: block" class="collapse in" <?php endif; ?>>
	                        <li class="<?php echo e(classActivePath('blogs')); ?>"><a href="<?php echo e(route('blogs')); ?>"><?php echo e(' Posts'); ?></a></li>
	                        <li class="<?php echo e(classActivePath('blog-categories')); ?>"><a href="<?php echo e(route('blog-categories')); ?>"><?php echo e('Categories'); ?></a></li>
	                         <li class="<?php echo e(classActivePath('blog-comments')); ?>"><a href="<?php echo e(route('comments')); ?>"><?php echo e('Comments'); ?></a></li>
							<li class="<?php echo e(classActivePath('blog-replies')); ?>"><a href="<?php echo e(route('replies')); ?>"><?php echo e('Replies'); ?></a></li>
	                    </ul>
                    </li>
                    <!--blog menu end-->

					  <!--Products menu-->
					  <li class="submenu <?php echo e(classActivePath('products')); ?>">
                    <a href="#" <?php if(classActivePath('products') OR classActivePath('products-categories')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Products'); ?> <span class="pull-right label label-primary"> </span>
                    </a>
	                    <ul <?php if(classActivePath('products') OR classActivePath('products-categories')): ?> style="display: block" class="collapse in" <?php endif; ?>>
	                        
	                        <li class="<?php echo e(classActivePath('products-categories')); ?>"><a href="<?php echo e(route('products-categories')); ?>"><?php echo e('Category'); ?></a></li>
							<li class="<?php echo e(classActivePath('brand-categories')); ?>"><a href="<?php echo e(route('brand-categories')); ?>"><?php echo e('Sub-Category'); ?></a></li>

							<li class="<?php echo e(classActivePath('products-brands')); ?>"><a href="<?php echo e(route('products-brands')); ?>"><?php echo e('Brand'); ?></a></li>
							<li class="<?php echo e(classActivePath('skus')); ?>"><a href="<?php echo e(route('skus')); ?>"><?php echo e('SKU'); ?></a></li>

	                       
	                    </ul>
                    </li>
                    <!--Products menu end-->





                    	                        <li class="<?php echo e(classActivePath('teams')); ?>"><a href="<?php echo e(route('teams')); ?>"><i class="md md-description"></i><?php echo e(' Teams'); ?></a></li>
                    	                        							<li class="<?php echo e(classActivePath('gallery')); ?>"><a href="<?php echo e(route('galleries')); ?>"><i class="md md-image"></i><?php echo e(' Gallery'); ?></a></li>
                    	                        							






					<li class="submenu <?php echo e(classActivePath('inquiries')); ?>">
                    <a href="#" <?php if(classActivePath('inquiries') OR classActivePath('hires') OR classActivePath('interest')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e('Inquiries'); ?>

                    </a>
	                   
                    </li>

					<!--by imran-->
				

					
			

					<!--by imran-->
					<li class="submenu <?php echo e(classActivePath('slider')); ?>">
                    <a href="#" <?php if(classActivePath('slider') OR classActivePath('promotionslider')): ?> class="open" <?php endif; ?>>
                    <i class="fa fa-picture-o"></i> <?php echo e('All Sliders'); ?>

                    </a>
	                    <ul  <?php if(classActivePath('slider') OR classActivePath('promotionslider')): ?> style="display: block" class="collapse in" <?php endif; ?>>
						<li class="<?php echo e(classActivePath('slider')); ?>"><a href="<?php echo e(URL::to('admin/slider')); ?>"><i class="fa fa-sliders"></i><?php echo e(trans('words.home_slider')); ?></a></li>
						<li class="<?php echo e(classActivePath('promotionslider')); ?>"><a href="<?php echo e(URL::to('admin/promotionslider')); ?>"><i class="fa fa-sliders"></i><?php echo e('Promotion Slider'); ?></a></li>
	                         
	                    </ul>
                    </li>

					<li class="<?php echo e(classActivePath('users')); ?>"><a href="<?php echo e(URL::to('admin/users')); ?>"><i class="fa fa-users"></i><?php echo e(trans('words.users')); ?></a></li>

					<li class="<?php echo e(classActivePath('front-design')); ?>"><a href="<?php echo e(URL::to('admin/front-design')); ?>"><i class="fa fa-bullhorn"></i>Banner Ads</a></li>
					
			
	               
	                
	                <li class="<?php echo e(classActivePath('settings')); ?>"><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i><?php echo e(trans('words.settings')); ?></a></li>

	                 <li class="submenu <?php echo e(classActivePath('about_page')); ?>">
                    <a href="#" <?php if(classActivePath('about_page') OR classActivePath('terms_page') OR classActivePath('privacy_policy_page') OR classActivePath('faq_page')): ?> class="open" <?php endif; ?>>
                    <i class="md md-description"></i> <?php echo e(trans('words.pages')); ?> <span class="pull-right label label-primary">4</span>
                    </a>
	                    <ul <?php if(classActivePath('about_page') OR classActivePath('terms_page') OR classActivePath('privacy_policy_page') OR classActivePath('faq_page')): ?> style="display: block" class="collapse in" <?php endif; ?>>
	                        <li class="<?php echo e(classActivePath('about_page')); ?>"><a href="<?php echo e(URL::to('admin/about_page')); ?>"><?php echo e(trans('words.about_us')); ?></a></li>
	                        <li class="<?php echo e(classActivePath('terms_page')); ?>"><a href="<?php echo e(URL::to('admin/terms_page')); ?>"><?php echo e(trans('words.terms_of_us')); ?></a></li>
	                        <li class="<?php echo e(classActivePath('privacy_policy_page')); ?>"><a href="<?php echo e(URL::to('admin/privacy_policy_page')); ?>"><?php echo e(trans('words.privacy_policy')); ?></a></li>
	                        <li class="<?php echo e(classActivePath('faq_page')); ?>"><a href="<?php echo e(URL::to('admin/faq_page')); ?>"><?php echo e(trans('words.faq')); ?></a></li>
	                         
	                    </ul>
                    </li>
               
               		   
             		<?php else: ?>
               		 <li class="<?php echo e(classActivePath('dashboard')); ?>"><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
               
               		 <li class="<?php echo e(classActivePath('inquiries')); ?>"><a href="<?php echo e(URL::to('admin/inquiries')); ?>"><i class="md md-send"></i><?php echo e(trans('words.inquiries')); ?></a></li>
               		 
               		 <li class="<?php echo e(classActivePath('admin')); ?>"><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md md-person-outline"></i> <?php echo e(trans('words.account')); ?></a></li>				  
              		 <?php endif; ?>
                  
 
			</ul>

			 
		</div>
	</div>
</div>
  <!-- // Sidebar -->

  <!-- Sidebar Right -->
  <div class="sidebar right-side" id="sidebar-right">
	<!-- Wrapper Reqired by Nicescroll -->
	<div class="nicescroll">
		<div class="wrapper">
			<div class="block-primary">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
							 <?php if(Auth::user()->image_icon): ?>
								<img src="<?php echo e(URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg')); ?>" width="60" alt="person" class="img-circle border-white">
							
							<?php else: ?>
								
							<img src="<?php echo e(URL::asset('admin_assets/images/guy.jpg')); ?>" alt="person" class="img-circle border-white" width="60"/>
							
							<?php endif; ?>
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="<?php echo e(URL::to('admin/profile')); ?>" class="h4"><?php echo e(Auth::user()->name); ?></a>
						<a href="<?php echo e(URL::to('admin/logout')); ?>" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="<?php echo e(URL::to('admin/profile')); ?>"><i class="md md-person-outline"></i> <?php echo e(trans('words.account')); ?></a></li>				 
				
				<?php if(Auth::user()->usertype=='Admin'): ?>
				
				<li><a href="<?php echo e(URL::to('admin/settings')); ?>"><i class="md md-settings"></i> <?php echo e(trans('words.settings')); ?></a></li>
				
				<?php endif; ?>
				
				<li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="md md-exit-to-app"></i> <?php echo e(trans('words.logout')); ?></a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->
<?php /**PATH C:\xampp\htdocs\dekko\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>