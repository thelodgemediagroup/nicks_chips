<?php get_header(); ?>

			<div class="container">
				<div class="page-content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>

					<footer>

						<div class="social-media">
							<a href="http://twitter.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.jpg" /></a>
							<a href="http://facebook.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.jpg" /></a>
							<a href="http://instagram.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.jpg" /></a>
						</div><!--/ .social-media -->
						
						<p class="copyright">&copy; <?php echo date('Y'); ?>, Nicks Chips LLC. All rights reserved.</p>

					</footer>					

				</div><!--/ .page-content -->

				<?php get_sidebar('right'); ?>

			</div><!--/ .container -->

		</section><!--/ .main-content -->	

		<?php get_sidebar('main'); ?>

<?php get_footer(); ?>