<?php
/**
 * Theme setup and assets.
 *
 * @package HW72_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports and navigation.
 */
function hw72_portfolio_setup() {
	load_theme_textdomain( '72hw-portfolio', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support(
		'html5',
		array( 'comment-form', 'comment-list', 'gallery', 'caption', 'search-form', 'style', 'script' )
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', '72hw-portfolio' ),
		)
	);
}
add_action( 'after_setup_theme', 'hw72_portfolio_setup' );

/**
 * Load the theme stylesheet.
 */
function hw72_portfolio_enqueue_styles() {
	wp_enqueue_style(
		'hw72-portfolio',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'hw72_portfolio_enqueue_styles' );
