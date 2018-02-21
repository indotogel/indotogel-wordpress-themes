<?php
/**
 * Theme's functions file.
 * 
 * Modify and extend theme's features in the framework.
 * 
 * @link https://github.com/indotogel/indotogel-wp-themes
 * @package Indotogel
 */

if ( ! function_exists( 'indotogel_setup' ) ) :
	function indotogel_setup() {
		load_theme_textdomain( 'indotogel', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Enable title-tag
		add_theme_support( 'title-tag' );
		// Enable post-thumbnails
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main-nav' => esc_html__( 'Primary', 'indotogel' ),
		) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'indotogel_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'indotogel_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function indotogel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'indotogel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'indotogel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'indotogel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function indotogel_scripts() {
    wp_enqueue_style( 'indotogel-style', get_template_directory_uri() . '/styles/app.css' );
	wp_enqueue_script( 'indotogel-navigation', get_template_directory_uri() . '/scripts/app.js', array(), '20180220', true );
}
add_action( 'wp_enqueue_scripts', 'indotogel_scripts' );

