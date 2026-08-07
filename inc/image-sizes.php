<?php
/**
 * Image Sizes
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'cybersplash_image_sizes' ) ) {

	function cybersplash_image_sizes() {

		add_image_size(
			'cybersplash-hero',
			900,
			1200,
			true
		);

		add_image_size(
			'cybersplash-featured',
			700,
			500,
			true
		);

		add_image_size(
			'cybersplash-story',
			600,
			800,
			true
		);

		add_image_size(
			'cybersplash-square',
			600,
			600,
			true
		);

	}

}

add_action(
	'after_setup_theme',
	'cybersplash_image_sizes'
);