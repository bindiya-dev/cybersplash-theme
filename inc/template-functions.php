<?php
/**
 * Template Functions
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Display post meta.
 */
if ( ! function_exists( 'cybersplash_post_meta' ) ) {

	function cybersplash_post_meta() {
		?>

		<div class="post-meta">

			<span class="post-date">

				<?php echo esc_html( cybersplash_posted_on() ); ?>

			</span>

			<?php if ( cybersplash_category() ) : ?>

				<span class="post-category">

					<?php echo esc_html( cybersplash_category() ); ?>

				</span>

			<?php endif; ?>

		</div>

		<?php
	}

}