<?php get_header(); ?>
	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<?php
						if (have_posts()) : while (have_posts()) : the_post();
						endwhile; endif;
					?>
					<?php woocommerce_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
