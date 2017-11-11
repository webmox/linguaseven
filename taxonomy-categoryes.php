<?php 


	if(isset($_GET['lang']) && !empty($_GET['lang'])){
		$current_lagn = $_GET['lang'];
		$_SESSION['my_lang'] = $current_lagn;

		$curent_url = substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],'?'));
		$url_params = get_bloginfo('url').$curent_url;
	}else{
		if(isset($_SESSION['my_lang']) && !empty($_SESSION['my_lang'])){
			 $current_lagn = $_SESSION['my_lang'];
		}
	}


	// vars
	$queried_object = get_queried_object(); 
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;  


	

?>


<?php get_header('page') ?>

<?php get_template_part('components/breadcrumbs'); ?>

<?php get_template_part_with_data('components/category-description'); ?>

<div class="main_container">
	<div class="container">

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

		<?php if($langs){ ?>
			<div class="list-lang">
				<ul class="list">
					<?php foreach($langs as $lang){   ?>
						<li class="cat_el cat_id_<?= $lang->term_id ?>"><a class="link_cat <?php if($current_lagn == $lang->term_id){ echo 'current'; } ?>" href="<?=  $url_params."?lang=".$lang->term_id ?>"><?= $lang->name ?></a></li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>

		<div class="wrap_container_posts">
			<div class="main_top_section">
				<div class="row">
					<div class="col-sm-4">
						<?php get_sidebar(); ?>
					</div>

					<div class="col-sm-8">
						
						<?php 

							$args = array(
							 	'post_type'=>'blog', 
							 	'posts_per_page'=>4,
							 	'tax_query' => array(
							 		'relation' => 'AND',
									array(
										'taxonomy' => 'language',
										'field'    => 'id',
										'terms'    => $current_lagn
									),
									array(
										'taxonomy' => $taxonomy,
										'field'    => 'id',
										'terms'    => $term_id
									)
							));

							 //print_array($args);

							 $query = new WP_Query($args);	

						 ?>
						<?php if($query->found_posts){ ?>
						<div class="right_container">	
							<div class="row">
								<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post() ?>
									<div class="col-sm-6">
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
							    					<a href="<?php the_permalink(); ?>" class="read_more">Read</a>
							    				</div>
							    				<div class="item_post_meta">
							    					<span class="views"><?php  echo getPostViews(get_the_ID()); ?></span>
							    				</div>
							    			</div>
							    		</div>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
						<?php }else{ ?>
							<p>Нет записей по указаным параметрам.</p>
						<?php } ?> 
					</div>
				</div>
			</div>

				<?php 
					$args['offset'] = 4;
					$args['posts_per_page'] = 6;
					//print_array($args);
					$query = new WP_Query($args);
				?>
				<?php if($query->found_posts){ ?>
					<div class="main_bottom_section">
						<div class="row">
							<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post() ?>
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
						    					<a href="<?php the_permalink(); ?>" class="read_more">Read</a>
						    				</div>
						    				<div class="item_post_meta">
						    					<span class="views"><?php  echo getPostViews(get_the_ID()); ?></span>
						    				</div>
						    			</div>
						    		</div>
								</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
			<?php }  ?>
			<?php if($query->found_posts > 11){ ?>
				<div class="wrap_all_posts">
		    		<a href="" class="all_post more_posts">More posts<i class="fa fa-angle-down" aria-hidden="true"></i></a>
		    	</div>
	    	<?php } ?>
		</div>
	</div>

	<div class="button_block_img"></div>

</div>
<?php get_footer() ?>