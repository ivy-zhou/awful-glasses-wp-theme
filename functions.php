<?php

function resources() {
	
	wp_register_style('fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:400,300,300italic,700');
	wp_enqueue_style( 'fonts');
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'resources');

// add support for theme
function setup() {

	// register navigation menus
	register_nav_menus(array('primary' => __( 'Primary Menu'),));

	// add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('post-banner', 400, 600, true);
	add_image_size('page-banner', 812, 600, true);
}

add_action('after_setup_theme', 'setup');









