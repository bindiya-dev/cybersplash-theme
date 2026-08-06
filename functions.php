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
			'comment-form',
			'comment-list',
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

function cybersplash_assets() {

	wp_enqueue_style(
		'cybersplash-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		'1.0'
	);

	wp_enqueue_script(
		'cybersplash-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		'1.0',
		true
	);
}

add_action( 'wp_enqueue_scripts', 'cybersplash_assets' );