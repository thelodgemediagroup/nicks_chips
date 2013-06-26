<?php get_header(); ?>

			<div class="container">
				<div class="page-content">

					<h2>Thank you for visiting Nicks Snack Foods website!</h2>

					<h1>Enter our WIN $150 Instagram Contest</h1>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contest-img.jpg" alt="Enter our WIN $150 Instagram Contest" />

					<p>Just follow us at Instagram@NicksChips and submit a photo of yourself with any bag of Nicks Snacks using the hashtag #luvNicksChips</p>

					<p>One winner will be picked at the end of each month from June-December 2013! ENTER NOW!</p>

					<footer>

						<div class="social-media">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.jpg" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.jpg" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.jpg" />
						</div><!--/ .social-media -->
						
						<p class="copyright">&copy; <?php echo date('Y'); ?>, Nicks Chips LLC. All rights reserved.</p>

					</footer>					

				</div><!--/ .page-content -->

				<?php get_sidebar('right'); ?>

			</div><!--/ .container -->

		</section><!--/ .main-content -->	

		<?php get_sidebar('main'); ?>

<?php get_footer(); ?>