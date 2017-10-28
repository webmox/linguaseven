<?php get_header(); ?>

<div class="main_container">
	<section class="lessons_type">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 left_block">
					<div class="block_info_type">
						<h2>Learn in groups</h2>
						<div class="wrap_btn">
							<a href="" class="btn_default">Join free</a>
						</div>
					</div>
					<div class="img_big groupe_block_img">
						<span class="text_inner_img">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
					</div>
					<div class="black_blocks">
						<div class="block_black">
							<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_1.png" alt=""></span>
							<span class="txt">Individual methodology</span>
						</div>
						<div class="block_black">
							<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_2.png" alt=""></span>
							<span class="txt">Your wishes and interests</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6 right_block">
					<div class="black_blocks">
						<div class="block_black">
							<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_3.png" alt=""></span>
							<span class="txt">Learn private</span>
						</div>
						<div class="block_black">
							<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_4.png" alt=""></span>
							<span class="txt">Your wishes and interests</span>
						</div>
					</div>
					<div class="img_big private_block_img">
						<span class="text_inner_img">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					</div>
					<div class="block_info_type">
						<h2>Learn private</h2>
						<div class="wrap_btn">
							<a href="" class="btn_default">Submit application</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--end lessons_type-->

	<section class="about_method">
		<div class="container">
			<div class="descript_block">
				<h2 class="title_about">About method of teaching</h2>
				<p>Only top-class specialists work in our team</p>
			</div>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="item">
						<i class="icon one_blc"></i>
						<h4>Specialized Higher Education</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="item">
						<i class="icon two_blc"></i>
						<h4>High level of language</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="item">
						<i class="icon three_blc"></i>
						<h4>Methodical literacy</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-blog p-t-80 p-b-60">
		<div class="container">
			<h2 class="title-section">Learn by yourself</h2>

				<div class="search-form">
					<form id="searchform" action="<?php echo home_url( '/' ) ?>" method="GET" >
						<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Enter the title" />	
						<input id="searchsubmit" type="submit" value="поиск">
					</form>
				</div>

			<div class="tabs">
				  <ul class="tabs__caption">
				    <li class="active">English</li>
				    <li>German</li>
				    <li>French</li>
				  </ul>

				  <div class="tabs__content active">
				    <div class="row">
				    	<div class="col-sm-4">
				    		<div class="item_post">
				    			<div class="img_block">
				    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog.jpg" alt=""></a>
				    			</div>
				    			<div class="inner_item_post">
				    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
				    				<div class="item_post_descript">
				    					Let's consider the basic rules Application of suffixes - ent and - ant
				    				</div>
				    				<div class="wrap_read">
				    					<a href="#" class="read_more">Read</a>
				    				</div>
				    				<div class="item_post_meta">
				    					<span class="views">230</span>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    	<div class="col-sm-4">
				    		<div class="item_post">
				    			<div class="img_block">
				    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog2.jpg" alt=""></a>
				    			</div>
				    			<div class="inner_item_post">
				    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
				    				<div class="item_post_descript">
				    					Let's consider the basic rules Application of suffixes - ent and - ant
				    				</div>
				    				<div class="wrap_read">
				    					<a href="#" class="read_more">Read</a>
				    				</div>
				    				<div class="item_post_meta">
				    					<span class="views">230</span>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    	<div class="col-sm-4">
				    		<div class="item_post">
				    			<div class="img_block">
				    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog3.jpg" alt=""></a>
				    			</div>
				    			<div class="inner_item_post">
				    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
				    				<div class="item_post_descript">
				    					Let's consider the basic rules Application of suffixes - ent and - ant
				    				</div>
				    				<a href="#" class="read_more">Read</a>
				    				<div class="item_post_meta">
				    					<span class="views">230</span>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
			    	<div class="wrap_all_posts">
			    		<a href="" class="all_post">View all posts<i class="fa fa-angle-down" aria-hidden="true"></i></a>
			    	</div>
				  </div>

				  <div class="tabs__content">
					  <div class="row">
					  	<div class="col-sm-4">
				    		<div class="item_post">
				    			<div class="img_block">
				    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog.jpg" alt=""></a>
				    			</div>
				    			<div class="inner_item_post">
				    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
				    				<div class="item_post_descript">
				    					Let's consider the basic rules Application of suffixes - ent and - ant
				    				</div>
				    				<div class="wrap_read">
				    					<a href="#" class="read_more">Read</a>
				    				</div>
				    				<div class="item_post_meta">
				    					<span class="views">230</span>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    	<div class="col-sm-4">
				    		<div class="item_post">
				    			<div class="img_block">
				    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog3.jpg" alt=""></a>
				    			</div>
				    			<div class="inner_item_post">
				    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
				    				<div class="item_post_descript">
				    					Let's consider the basic rules Application of suffixes - ent and - ant
				    				</div>
				    				<div class="wrap_read">
				    					<a href="#" class="read_more">Read</a>
				    				</div>
				    				<div class="item_post_meta">
				    					<span class="views">230</span>
				    				</div>
				    			</div>
				    		</div>

				    	</div>
				    	<div class="col-sm-4">
				    		<div class="item_post">
				    			<div class="img_block">
				    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog.jpg" alt=""></a>
				    			</div>
				    			<div class="inner_item_post">
				    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
				    				<div class="item_post_descript">
				    					Let's consider the basic rules Application of suffixes - ent and - ant
				    				</div>
				    				<a href="#" class="read_more">Read</a>
				    				<div class="item_post_meta">
				    					<span class="views">230</span>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
					  </div>
					   <div class="wrap_all_posts">
				    		<a href="" class="all_post">View all posts</a>
				    	</div>
				  </div>

				  <div class="tabs__content">
					  <div class="row">
					  	<div class="col-sm-4">
					    		<div class="item_post">
					    			<div class="img_block">
					    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog3.jpg" alt=""></a>
					    			</div>
					    			<div class="inner_item_post">
					    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
					    				<div class="item_post_descript">
					    					Let's consider the basic rules Application of suffixes - ent and - ant
					    				</div>
					    				<div class="wrap_read">
					    					<a href="#" class="read_more">Read</a>
					    				</div>
					    				<div class="item_post_meta">
					    					<span class="views">230</span>
					    				</div>
					    			</div>
					    		</div>
					    	</div>
					    	<div class="col-sm-4">
					    		<div class="item_post">
					    			<div class="img_block">
					    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog.jpg" alt=""></a>
					    			</div>
					    			<div class="inner_item_post">
					    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
					    				<div class="item_post_descript">
					    					Let's consider the basic rules Application of suffixes - ent and - ant
					    				</div>
					    				<div class="wrap_read">
					    					<a href="#" class="read_more">Read</a>
					    				</div>
					    				<div class="item_post_meta">
					    					<span class="views">230</span>
					    				</div>
					    			</div>
					    		</div>
					    	</div>
					    	<div class="col-sm-4">
					    		<div class="item_post">
					    			<div class="img_block">
					    				<a href="#"><img src="<?php bloginfo('template_url') ?>/build/images/img_blog2.jpg" alt=""></a>
					    			</div>
					    			<div class="inner_item_post">
					    				<h3 class="title_item_post"><a href="">English sports verbs</a></h3>
					    				<div class="item_post_descript">
					    					Let's consider the basic rules Application of suffixes - ent and - ant
					    				</div>
					    				<a href="#" class="read_more">Read</a>
					    				<div class="item_post_meta">
					    					<span class="views">230</span>
					    				</div>
					    			</div>
					    		</div>
					    	</div>
					  </div>
			    	<div class="wrap_all_posts">
			    		<a href="" class="all_post">View all posts</a>
			    	</div>
				  </div>
			</div><!-- .tabs-->
		</div>
	</div><!--end section-blog-->


	<section class="section-reviews">
		<div class="container">
			<div class="list_about_platform">
				<div class="item_el">
					<div class="img_blc"><img src="<?php bloginfo('template_url') ?>/build/images/teachers.png" alt="teachers"></div>
					<p class="counter">1520</p>
					<p class="txt">Teachers in the stale</p>
				</div>
				<div class="item_el">
					<div class="img_blc"><img src="<?php bloginfo('template_url') ?>/build/images/students.png" alt="teachers"></div>
					<p class="counter">12522</p>
					<p class="txt">Teachers in the stale</p>
				</div>
				<div class="item_el">
					<div class="img_blc"><img src="<?php bloginfo('template_url') ?>/build/images/lessons.png" alt="teachers"></div>
					<p class="counter">1523420</p>
					<p class="txt">Lessons are over</p>
				</div>
			</div>
			<div class="wrap-reviews-carousel">
				<div class="owl-carousel owl-theme">
				    <div class="item">
				    	<div class="inner_item">
				    		<div class="review-txt">
				    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, explicabo officia ad in maxime voluptatibus odio distinctio nisi fugit aperiam.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, explicabo officia ad in maxime voluptatibus odio distinctio nisi fugit aperiam.
				    		</div>
				    		<div class="review-metainfo">
					    		<div class="author-review">
									<div class="author-img"><img src="<?php bloginfo('template_url') ?>/build/images/author_img.jpg" alt=""></div>
									<span class="autor-name">Oliver</span>
									<span class="status">Student</span>
								</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="inner_item">
				    		<div class="review-txt">
				    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, explicabo officia ad in maxime voluptatibus odio distinctio nisi fugit aperiam.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, explicabo officia ad in maxime voluptatibus odio distinctio nisi fugit aperiam.
				    		</div>
				    		<div class="review-metainfo">
					    		<div class="author-review">
									<div class="author-img"><img src="<?php bloginfo('template_url') ?>/build/images/author_img.jpg" alt=""></div>
									<span class="autor-name">Oliver</span>
									<span class="status">Student</span>
								</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="inner_item">
				    		<div class="review-txt">
				    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, explicabo officia ad in maxime voluptatibus odio distinctio nisi fugit aperiam.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore unde, expedita deserunt? Et laborum commodi dolor, tempore possimus, explicabo officia ad in maxime voluptatibus odio distinctio nisi fugit aperiam.
				    		</div>
				    		<div class="review-metainfo">
					    		<div class="author-review">
									<div class="author-img"><img src="<?php bloginfo('template_url') ?>/build/images/author_img.jpg" alt=""></div>
									<span class="autor-name">Oliver</span>
									<span class="status">Student</span>
								</div>
				    		</div>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>


	<section class="section-form-application p-t-80">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">		
					<h2 class="title-form">Still have questions?</h2>
					<div class="from-register">
						<?php echo do_shortcode('[contact-form-7 id="4" title="Форма заявки"]'); ?>
						<div class="info_form">
							Your data is securely protected <br/> 
							And will not be transferred to third partie
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<img src="<?php bloginfo('template_url') ?>/build/images/right_img.png" alt="" class="right_img">
				</div>
			</div>
		</div>
	</section>


	<div class="button_block_img"></div>	

</div>

<?php get_footer(); ?>