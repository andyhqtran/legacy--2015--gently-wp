<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
		<script src="//use.typekit.net/xyl8bgh.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<?php wp_head();?>
	</head>
	<body <?php body_class();?>>
		<nav class='navbar navbar-fixed-top'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-12'>
						<div class='navbar-header'>
							<button class='navbar-toggle collapsed' data-target='#navbar-collapse' data-toggle='collapse' type='button'>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
							</button>
							<a class='navbar-brand' href='<?php echo esc_url(home_url('/'));?>'>
								<?php bloginfo('name');?>
							</a>
						</div>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'navbar-collapse collapse', 'container_id' => 'navbar-collapse', 'menu_class' => 'nav navbar-nav navbar-right'));?>
					</div>
				</div>
			</div>
		</nav>
		<?php if (is_front_page()): ?>
		<section class='hero'>
		  <div class='container'>
			<div class='row'>
			  <div class='col-md-12 text-center'>
				<h1><?php $page_title_value = get_post_custom_values('page_title');foreach ($page_title_value as $key => $value) {echo "$value";}?></h1>
				<p><?php $secondary_title_value = get_post_custom_values('secondary_title');foreach ($secondary_title_value as $key => $value) {echo "$value";}?></p>
				<div class='btn-group'>
				  <a class='btn btn-hero' href='#featured'></a>
				  <a href='#featured'>See our case studies</a>
				</div>
			  </div>
			</div>
		  </div>
		</section>
		<?php else: ?>
		<section class='page-header'>
		 	<div class='container'>
		    	<div class='row'>
		      		<div class='col-md-12'>
		        		<h1><?php $page_title_value = get_post_custom_values('page_title');foreach ($page_title_value as $key => $value) {echo "$value";}?></h1>
		        		<p><?php $secondary_title_value = get_post_custom_values('secondary_title');foreach ($secondary_title_value as $key => $value) {echo "$value";}?></p>
		      		</div>
		    	</div>
		  	</div>
		</section>
		<?php endif;?>