<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title') ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<a href="<?php bloginfo('url') ?>" class="logo">
			<img src="<?php bloginfo('template_url') ?>/build/images/logo.png" alt="<?php  bloginfo('name') ?>">
		</a>
		<div class="header_right_info">

			<div class="menu_btn">
				<div class="menu_txt">Меnu</div>
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

			<div class="wrap_btns">
				<a href="" class="link_skype">linguaseven</a>
				<a href="mailto:test@test.ru" class="link_email"></a>
			</div>
		</div>
	</div>
</header>

<div class="main_header_info">
	<div class="container">

		<?php 

			$home_page = new WP_Query(array('post_type'=>'page', 'page_id'=>12)); 

			if($home_page->have_posts()) : while($home_page->have_posts()) : $home_page->the_post();

				/*--------header top-------*/
				$title_header = get_field('title_header');
				$descript_top = get_field('descript_top');
				$places_left_today = get_field('places_left_today');

				/*--------private groupe-------*/
				$title_one_section = get_field('title_one_section');
				$description_learn_group = get_field('description_learn_group');
				$advantag_groupe_one = get_field('advantag_groupe_one');
				$advantag_groupe_two = get_field('advantag_groupe_two');

				$title_learn_private = get_field('title_learn_private');
				$description_learn_private = get_field('description_learn_private');
				$advantage_private_one = get_field('advantage_private_one');
				$advantag_private_two = get_field('advantag_private_two');

			endwhile; 
			endif; 
		?>

		<div class="main_header_bloc_txt">

			<?php if(!empty($title_header)){ ?>
				<h1 class="title_header_main"><?= $title_header ?></h1>
			<?php } ?>
			
			<?php if($descript_top){ ?>
			<div class="desction">
				<?= $descript_top; ?>
			</div>
			<?php } ?>

			<div class="wrap_button_block">
				
				<?php if($places_left_today){ ?>
					<div class="counter_block_wrap">
						<span class="info_txt">Places left today:</span>
						<div class="counter_counter"><?= $places_left_today ?></div>
					</div>
				<?php } ?>

				<div class="button_block">
					<a href="#order_vst" class="btn_default btn_join">Join free</a>
				</div>
			</div>
		</div><!--end main_header_bloc_txt-->

	</div>
</div>