<?php
/**
 * Helper Functions
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return formatted post date.
 */
if ( ! function_exists( 'cybersplash_posted_on' ) ) {

	function cybersplash_posted_on() {

		return esc_html(
			get_the_date( 'F j, Y' )
		);

	}

}

/**
 * Return first category name.
 */
if ( ! function_exists( 'cybersplash_category' ) ) {

	function cybersplash_category() {

		$categories = get_the_category();

		if ( ! empty( $categories ) ) {

			return esc_html(
				$categories[0]->name
			);

		}

		return '';

	}

}

/**
 * Return trimmed excerpt.
 */
if ( ! function_exists( 'cybersplash_excerpt' ) ) {

	function cybersplash_excerpt( $length = 22 ) {

		return wp_trim_words(
			get_the_excerpt(),
			$length,
			'...'
		);

	}

}