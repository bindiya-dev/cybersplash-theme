<?php
/**
 * Hero Section
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 3,
		'ignore_sticky_posts' => true,
	)
);

if ( $hero_query->have_posts() ) :
?>

<section class="hero-section">

	<div class="container">

		<div class="hero-grid">

			<?php
			while ( $hero_query->have_posts() ) :
				$hero_query->the_post();
			?>

				<article class="hero-card">

					<?php
					if ( has_post_thumbnail() ) {

						the_post_thumbnail(
							'cybersplash-hero',
							array(
								'class' => 'hero-image',
								'alt'   => esc_attr( get_the_title() ),
							)
						);

					}
					?>

					<div class="hero-overlay">

						<span class="hero-category">

							<?php echo esc_html( cybersplash_category() ); ?>

						</span>

						<h2>

							<a href="<?php the_permalink(); ?>">

								<?php the_title(); ?>

							</a>

						</h2>

						<p>

							<?php echo esc_html( cybersplash_excerpt( 15 ) ); ?>

						</p>

					</div>

				</article>

			<?php endwhile; ?>

		</div>

	</div>

</section>

<?php
	wp_reset_postdata();

endif;