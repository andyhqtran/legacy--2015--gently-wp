		</div>
		<footer class='footer'>
		  <div class='container'>
				<div class='row'>
				  <div class='col-md-12'>
						<div class='footer-text'>
						  <h2>Got a question for us?</h2>
						  <p>Don't worry, we don't bite! So... What are you waiting for?</p>
						  <a class='btn footer-btn' href='<?php echo esc_url(home_url('/'));?>'>
								<i class='fa fa-comments'></i>
								Let's Chat
						  </a>
						</div>
				  </div>
				</div>
		  </div>
		  <div class='footer-bottom'>
			<p class='copyright'>
			  <?php printf(__('Proudly powered by %s', 'gently'), '<b>WordPress</b>');?>  &middot; Copyright &copy; 2015 <a href='<?php echo esc_url(home_url('/'));?>'>Gently.io</a> &middot; All Rights Reserved
			</p>
		  </div>
		</footer>
		<?php wp_footer();?>
	</body>
</html>