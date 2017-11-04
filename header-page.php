<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title') ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header header-page">
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
