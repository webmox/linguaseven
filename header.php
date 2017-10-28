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
		<a href="" class="logo">
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

		<div class="main_header_bloc_txt">
			<h1 class="title_header_main">Learn languages with us</h1>
			<div class="desction">
				Thousands of students chose our methodology and 98% were satisfied with the results. Try and you! Sign up for a free 30 minute lesson!
			</div>
			<div class="wrap_button_block">
				<div class="counter_block_wrap">
					<span class="info_txt">Places left today:</span>
					<div class="counter_counter">
						<span>0</span>
						<span>3</span>
					</div>
				</div>
				<div class="button_block">
					<a href="" class="btn_default btn_join">Join free</a>
				</div>
			</div>
		</div><!--end main_header_bloc_txt-->

	</div>
</div>