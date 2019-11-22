<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function jnp_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu',
	) );
	register_nav_menus( array(
		'menu-2' => 'Footer Menu',
	) );
}
add_action( 'init', 'jnp_nav_init' );

/**
 * Register widget area.
 *
 */
function jnp_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jnp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jnp_scripts() {
	wp_enqueue_style( 'jnp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'jnp-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'jnp-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'jnp_scripts' );



add_action( 'wp_enqueue_scripts', 'enqueue_team_scripts' );
function enqueue_team_scripts(){
	wp_enqueue_script( 'teams-script', get_template_directory_uri() . '/assets/js/modal.js' );
}


	add_action( 'wp_enqueue_scripts', 'mobile_javascript' );
	function mobile_javascript(){
		wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js' );
	}

function jnp_create_events_custom_post() {
	register_post_type('event', 
		array(
		'labels' => array(
			'name' => __('Events', 'events'),
		),
		'menu_icon'    => 'dashicons-schedule',
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category'
		) 
	));
}

function jnp_create_game_custom_post() {
	register_post_type('game', 
		array(
		'labels' => array(
			'name' => __('Teams', 'teams'),
		),
		'menu_icon'    => 'dashicons-networking',
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));	
}


add_action('init', 'jnp_create_game_custom_post');
add_action('init', 'jnp_create_events_custom_post');  
// Add our work type



// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );



/* Custom Widget Areas */
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Footer Address Info',
        'id'            => 'footer-address-info',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => 'Social Media Footer',
        'id'            => 'social-media-footer',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );