<?php
/**
 * Theme Setup
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'cybersplash_theme_setup' ) ) {

	function cybersplash_theme_setup() {

		load_theme_textdomain(
			'cybersplash',
			get_template_directory() . '/languages'
		);

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

		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );

		add_theme_support( 'custom-background' );

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'cybersplash' ),
				'footer'  => __( 'Footer Menu', 'cybersplash' ),
				'social'  => __( 'Social Menu', 'cybersplash' ),
			)
		);
	}

}

add_action( 'after_setup_theme', 'cybersplash_theme_setup' );