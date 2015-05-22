<?php
/*
	Template Name: Home Page
 */
get_header();?>

<section id='featured'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<div class='section-header'>
					<h2>This is what we do and we <i class='fa fa-heart'></i> it.</h2>
				</div>
			</div>
		</div>
		<?php
			$i = 1;
			$args = array(
				'post_type' => 'product',
				'meta_key' => '_featured',
				'meta_value' => 'yes',
				'posts_per_page' => 3,
				'order' => 'ASC',
				'orderby' => 'ID',
			);

			$featured_query = new WP_Query($args);
				if ($featured_query->have_posts()):
					while ($featured_query->have_posts()):
						$featured_query->the_post();
						$product = get_product($featured_query->post->ID);
		?>
		<div class='row'>
	  		<div class='col-md-12'>

		        <?php if (is_int($i / 2)) { ?>
				<div class='featured-project'>
					<div class='row'>
						<div class='col-md-7'>
							<div class='featured-project-thumbnail'>
								<div class='browser'>
									<div class='screen'>
										<?php the_post_thumbnail('large', array('class' => 'img-responsive'));?>
									</div>
								</div>
							</div>
						</div>
						<div class='col-md-5'>
							<h3 class='project-title'><?php the_title(); ?></h3>
							<?php
					            $size = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
					            echo $product->get_categories( ', ', '<div class="project-meta">' . _n( '', '', $size, 'woocommerce' ) . ' ', '</div>' );
				    		?>
							<div class='project-description'>
								<?php
									$content = get_the_content();
										if (strlen($content) > 250) {
											echo substr($content, 0, 250) . "...";
										} else {
												the_content();
										}
								?>
							</div>
						  	<a class='btn project-btn' href='<?php the_permalink();?>'>View Project</a>
						</div>
					</div>
				</div>
		        <?php } else { ?>
				<div class='featured-project'>
					<div class='row'>
						<div class='col-md-7 col-md-push-5'>
							<div class='featured-project-thumbnail'>
								<div class='macbook'>
									<div class='screen'>
										<?php the_post_thumbnail('large', array('class' => 'img-responsive'));?>
									</div>
								</div>
							</div>
						</div>
						<div class='col-md-5 col-md-pull-7'>
							<h3 class='project-title'><?php the_title(); ?></h3>
							<?php
					            $size = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
					            echo $product->get_categories( ', ', '<div class="project-meta">' . _n( '', '', $size, 'woocommerce' ) . ' ', '.</div>' );
				    		?>
							<div class='project-description'>
								<?php
									$content = get_the_content();
										if (strlen($content) > 250) {
											echo substr($content, 0, 250) . "...";
										} else {
												the_content();
										}
								?>
							</div>
						  	<a class='btn project-btn' href='<?php the_permalink();?>'>View Project</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
			<?php
				$i++;
				endwhile;
			endif;
			wp_reset_query();
			?>
	</div>
</section>

<?php get_footer();?>