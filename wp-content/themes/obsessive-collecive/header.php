<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.typekit.net/lbk0riy.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="site-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-wrapper">
                    <a href="/nord-esports/" title="Go to frontpage">
                        <img src="/nord-esports/wp-content/uploads/2019/11/512x200.png" alt="logo" title="Køge Nord eSports" class="site-logo" />
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation" role="navigation">	
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                    ?>
                </nav><!-- #site-navigation -->

                <div id="cta-player-coach">
                    <span>Become a:</span>
                    <a href="#" class="btn-player" title="">Player</a>
                    <a href="#" class="btn-coach" title="">Coach</a>
                </div>
            </div>
        </div><!-- .container -->
	</header><!-- #masthead -->

	<div id="main" class="wrapper">