<?php
/**
 * Featured Categories
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$featured_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'offset'         => 3,
	)
);

if ( $featured_query->have_posts() ) :
?>

<section class="featured-categories">

	<div class="container">

		<div class="featured-grid">

			<?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

				<article class="featured-card">

					<figure class="featured-image">

						<?php
						if ( has_post_thumbnail() ) {

							the_post_thumbnail(
								'cybersplash-featured',
								array(
									'alt' => esc_attr( get_the_title() ),
								)
							);

						}
						?>

					</figure>

					<div class="featured-content">

						<span class="featured-category">

							<?php echo esc_html( cybersplash_category() ); ?>

						</span>

						<h3>

							<a href="<?php the_permalink(); ?>">

								<?php the_title(); ?>

							</a>

						</h3>

						<p>

							<?php echo esc_html( cybersplash_excerpt( 18 ) ); ?>

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