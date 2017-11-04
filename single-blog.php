<?php get_header('page') ?>
<?php
    setPostViews(get_the_ID());
?>

<div class="main_container">
	<div class="container">
		<section class="content-section">
			<h1 class="title-page">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
			<div class="row">
				<div class="col-md-9">
					<div class="content">
						<div class="text_style">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque blanditiis adipisci qui vitae sed repellat rerum asperiores earum porro, dolore, quasi fuga optio facilis ipsam quia dolor architecto natus placeat.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="sidebar">
						<div class="widget">
							<img src="<?php  bloginfo('template_url') ?>/build/images/sidebar_img.png" alt="">
						</div>
						<div class="widget text-sidebar">
							<div class="widget_inner">
								<p>In English lessons, you hear a lot of new words. It is clear that it is impossible to remember all the new vocabulary, </p>
								<div class="wrap_btn"><a href="" class="read_more btn_default">Read more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="wrap-form-subscribe">
			<h2 class="title-subscribe">Subscribe to newsletter</h2>
			<div class="descript-subscribe">Get the latest news about our courses and lessons</div>
			<?php if(dynamic_sidebar('subscribe')) ?>
			<p class="info-subsc">Already subscribed — <span>167 890</span> people</p>
		</div>

		<div class="button_block_img"></div>
	</div>
</div>
<?php get_footer() ?>