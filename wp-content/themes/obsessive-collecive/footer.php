<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer class="site-footer" role="contentinfo">
			<div class="container">
				<!-- Address Info -->
				<div class="footer-address">
				<?php
					if ( is_active_sidebar( 'footer-address-info' ) ) : ?>
						<div class="widget-area widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-address-info' ); ?>
						</div>
						
					<?php endif; ?>
				</div>
				<!-- Footer Menu -->
				<nav>
				<?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'footer-menu',
                        ) );
                    ?>
				</nav>
				<!-- Social Media icons -->
				<div class="social-icons">
					
					<?php 
					if ( is_active_sidebar( 'social-media-footer' ) ) : ?>
						<div class="widget-area widget-area" role="complementary">
						<?php dynamic_sidebar( 'social-media-footer' ); ?>
						</div>
						
					<?php endif; ?>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>