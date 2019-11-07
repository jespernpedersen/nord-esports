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
					<a href="callto:+4512344556" class="tel" title="You can call us here">+45 12 34 45 56</a>
					<a href="mailto:knes@gmail.com" class="email" title="You can mail us here">knes@gmail.com</a>
					<address>Skolevej 7, 4600 Køge</address>
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
					<ul>
						<li class="facebook-icon"><a href="#" title="View our Facebook here"></a></li>
						<li class="twitter-icon"><a href="#" title="View our Twitter here"></a></li>
						<li class="youtube-icon"><a href="#" title="View our YouTube here"></a></li>
					</ul>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>