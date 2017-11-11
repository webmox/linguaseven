<?php get_header(); ?>

<div class="main_container">
	<section class="lessons_type">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 left_block">
							<?php 

								$home_page = new WP_Query(array('post_type'=>'page', 'page_id'=>12)); 

								if($home_page->have_posts()) : while($home_page->have_posts()) : $home_page->the_post();

									/*--------private groupe-------*/
									$title_one_section = get_field('title_one_section');
									$description_learn_group = get_field('description_learn_group');
									$advantag_groupe_one = get_field('advantag_groupe_one');
									$advantag_groupe_two = get_field('advantag_groupe_two');

									$title_learn_private = get_field('title_learn_private');
									$description_learn_private = get_field('description_learn_private');
									$advantage_private_one = get_field('advantage_private_one');
									$advantag_private_two = get_field('advantag_private_two');

									/*--------section method--------*/
									$title_section = get_field('title_section');
									$description_section = get_field('description_section');
									$advantages_method = get_field('advantages_method');

									/*----serction informationi-----*/
									$items_info = get_field('items_info');

								endwhile; 
								endif; 
							?>

					<div class="block_info_type">
						<?php if($title_one_section){ ?>
							<h2><?= $title_one_section ?></h2>
						<?php } ?>	
						<div class="wrap_btn">
							<a href="#order_vst" class="btn_default order_event">Join free</a>
						</div>
					</div>
					<div class="img_big groupe_block_img">
						<?php if($description_learn_group){ ?>
							<span class="text_inner_img"><?= $description_learn_group ?></span>
						<?php } ?>
					</div>
					<div class="black_blocks">
						<?php if($advantag_groupe_one){ ?>
							<div class="block_black">
								<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_1.png" alt=""></span>
								<span class="txt"><?= $advantag_groupe_one ?></span>
							</div>
						<?php } ?>
						<?php if($advantag_private_two){ ?>
							<div class="block_black">
								<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_2.png" alt=""></span>
								<span class="txt"><?= $advantag_private_two ?></span>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-sm-6 right_block">
					<div class="black_blocks">
					<?php if($advantage_private_one){ ?>
							<div class="block_black">
								<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_3.png" alt=""></span>
								<span class="txt"><?= $advantage_private_one ?></span>
							</div>
						<?php } ?>
						<?php if($advantag_private_two){ ?>
						<div class="block_black">
							<span class="pic"><img src="<?php bloginfo('template_url') ?>/build/images/icon_4.png" alt=""></span>
							<span class="txt"><?= $advantag_private_two ?></span>
						</div>
						<?php } ?>
					</div>
					<div class="img_big private_block_img">
						<?php if($description_learn_private){ ?>
							<span class="text_inner_img"><?= $description_learn_private ?></span>
						<?php } ?>
					</div>
					<div class="block_info_type">
						<?php if($title_learn_private){ ?>
							<h2><?= $title_learn_private ?></h2>
						<?php } ?>
						<div class="wrap_btn">
							<a href="#order_vst" class="btn_default order_event">Submit application</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--end lessons_type-->

	<section class="about_method">
		<div class="container">
			<div class="descript_block">
			<?php if($title_section){ ?>
				<h2 class="title_about"><?= $title_section ?></h2>
			<?php } ?>
			<?php if($description_section){ ?>
				<p><?= $description_section ?></p>
			<?php } ?>
			</div>
			
		</div>
		<?php if($advantages_method){ ?>
		<div class="container">
			<div class="row">
				<?php foreach($advantages_method as $item_block){ ?>
					<div class="col-sm-4">
						<div class="item">
							<i class="icon" style="background:url('<?= $item_block['icon_block']  ?>') no-repeat center center;"></i>
							<h4><?= $item_block['title_block']; ?></h4>
							<p><?= $item_block['description_block']; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
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

				<?php 

					$args = array(
						'taxonomy'      => array('language' ), // название таксономии с WP 4.5
						'orderby'       => 'id', 
						'order'         => 'ASC',
						'hide_empty'    => true, 
						'object_ids'    => null, // 
						'include'       => array(),
						'exclude'       => array(), 
						'exclude_tree'  => array(), 
						'number'        => '', 
						'fields'        => 'all', 
						'count'         => false,
						'slug'          => '', 
						'parent'         => '',
						'hierarchical'  => true, 
						'child_of'      => 0, 
						'get'           => '', // ставим all чтобы получить все термины
						'name__like'    => '',
						'pad_counts'    => false, 
						'offset'        => '', 
						'search'        => '', 
						'cache_domain'  => 'core',
						'name'          => '', // str/arr поле name для получения термина по нему. C 4.2.
						'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
						'update_term_meta_cache' => true, // подгружать метаданные в кэш
						'meta_query'    => '',
					); 

					$langs = get_terms( $args );

				?>	
				  
			<?php if(!is_wp_error($langs)){ ?>
				<div class="tabs">
					  
					  <ul class="tabs__caption">
					  	<?php foreach($langs as $lang){ ?>
					    	<li><?= $lang->name ?></li>
					    <?php } ?>
					  </ul>
					
					 <?php foreach($langs as $lang){ ?>

					  <div class="tabs__content">

					  	<?php $query = new WP_Query(array(
					  	'post_type'=>'blog',
					  	'posts_per_page'=>3,
					  	'tax_query' => array(
								array(
									'taxonomy' => 'language',
									'field'    => 'id',
									'terms'    => $lang->term_id
								)
							)
					  	));

					  	 ?>
					  	 
						    <div class="row">
						    	<?php while($query->have_posts()) : $query->the_post()?>
						    	<div class="col-sm-4">
						    		<div class="item_post">
						    			<?php if(has_post_thumbnail()){ ?>
							    			<div class="img_block">
							    				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('300x160'); ?></a>
							    			</div>
						    			<?php } ?>
						    			<div class="inner_item_post">
						    				<h3 class="title_item_post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						    				<?php if(has_excerpt()){ ?>
						    				<div class="item_post_descript">
						    					<?php the_excerpt(); ?>
						    				</div>
						    				<?php } ?>
						    				<div class="wrap_read">
						    					<a href="<?php the_permalink() ?>" class="read_more">Read</a>
						    				</div>
						    				<div class="item_post_meta">
						    					<span class="views"><?php  echo getPostViews(get_the_ID()); ?></span>
						    				</div>
						    			</div>
						    		</div>
						    	</div>
								<?php endwhile ?>
						    </div>
						
				    	<div class="wrap_all_posts">
				    		<a href="<?= get_bloginfo('url') ?>/blog?lang=<?= $lang->term_id?>" class="all_post">View all posts<i class="fa fa-angle-down" aria-hidden="true"></i></a>
				    	</div>
					  </div>
					<?php } ?>
				</div><!-- .tabs-->
			<?php } ?>
 		</div>
	</div><!--end section-blog-->




	<section class="section-reviews">
		<div class="container">
			<?php if($items_info){ ?>
			<div class="list_about_platform">
				<?php foreach($items_info as $item){ ?>
					<div class="item_el">
						<?php if($item['image_element']){ ?> 
							<div class="img_blc"><img src="<?= $item['image_element'] ?>" alt="teachers"></div>
						<?php } ?>
						<?php if($item['number_field']){ ?> 
							<p class="counter"><?= $item['number_field'] ?></p>
						<?php } ?>
						<?php if($item['description_item']){ ?> 
							<p class="txt"><?= $item['description_item'] ?></p>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<?php } ?>
			
			<?php $reviews = new WP_Query(array('post_type'=>'review', 'posts_per_page'=>3)); ?>

			<?php if($reviews->found_posts) : ?>
				<div class="wrap-reviews-carousel">
					<div class="owl-carousel owl-theme">
						<?php while($reviews->have_posts()) : $reviews->the_post() ?>
						    <div class="item">
						    	<div class="inner_item">
						    		<div class="review-txt">
						    			<?php the_excerpt() ?>
						    		</div>
						    		<div class="review-metainfo">
							    		<div class="author-review">
							    			<?php if(has_post_thumbnail()){ $img_url = get_the_post_thumbnail_url($post->ID) ?>
												<div class="author-img"><img src="<?= $img_url ?>" alt=""></div>
											<?php } ?>
											<span class="autor-name"><?php the_title(); ?></span>
											<?php $profession = get_field('profession'); ?>
											<?php if($profession){ ?>
												<span class="status"><?= $profession ?></span>
											<?php } ?>
										</div>
						    		</div>
						    	</div>
						    </div>
						<?php endwhile ?>

					</div>
				</div><!--end wrap-reviews-carousel-->
			<?php endif ?>


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