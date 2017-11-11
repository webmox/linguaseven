
<?php 

	$params = array(
		'taxonomy'      => array('categoryes' ), // название таксономии с WP 4.5
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

	$cats = get_terms( $params );

	// vars
	$queried_object = get_queried_object(); 
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;  

	if(is_term($term_id)){
		$cur_cat =  $queried_object;
	}

?>

<div class="left_sidebar">

	<?php if($cats){ ?>
		<div class="wrap_left_menu_category">
			<ul class="left_menu_category">
				<?php foreach($cats as $cat_item){ ?>
					<li class="menu_item <?php if($cur_cat->term_id == $cat_item->term_id){ echo 'current'; } ?>"><a href="<?= get_category_link($cat_item->term_id) ?>"><?= $cat_item->name ?></a></li>
				<?php } ?>
			</ul>
		</div><!--end wrap_left_menu_category-->
	<?php } ?>

	<div class="search-form">
		<form id="searchform" action="<?php echo home_url( '/' ) ?>" method="GET" >
			<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Enter the title" />	
			<input id="searchsubmit" type="submit" value="поиск">
		</form>
	</div><!--end search-form-->
</div>