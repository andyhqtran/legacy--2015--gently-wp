<?php
/*
Template Name: Fluid Container w/ Sidebar Page
 */
get_header();?>

<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-8'>
		<?php if (have_posts()):
	while (have_posts()): the_post();
		the_content();
	endwhile;
endif;?>
	    </div>
	    <div class='col-md-4'>
	    	<?php get_sidebar();?>
	    </div>
    </div>
</div>

<?php get_footer();?>