<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function cybersplash_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'cybersplash' ),
		)
	);
}

add_action( 'after_setup_theme', 'cybersplash_setup' );

function cybersplash_enqueue_assets() {

	wp_enqueue_style(
		'cybersplash-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'cybersplash-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}

add_action( 'wp_enqueue_scripts', 'cybersplash_enqueue_assets' );