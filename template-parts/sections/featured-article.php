<?php
/**
 * Featured Article
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$sticky = get_option( 'sticky_posts' );

if ( ! empty( $sticky ) ) :

	$featured_query = new WP_Query(
		array(
			'post__in'            => $sticky,
			'posts_per_page'      => 1,
			'ignore_sticky_posts' => 1,
		)
	);

	if ( $featured_query->have_posts() ) :
?>

<section class="featured-article">

	<div class="container">

		<?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

			<figure class="featured-article-image">

				<?php
				if ( has_post_thumbnail() ) {

					the_post_thumbnail(
						'full',
						array(
							'alt' => esc_attr( get_the_title() ),
						)
					);

				}
				?>

			</figure>

			<div class="featured-article-content">

				<?php cybersplash_post_meta(); ?>

				<h2>

					<a href="<?php the_permalink(); ?>">

						<?php the_title(); ?>

					</a>

				</h2>

				<p>

					<?php echo esc_html( cybersplash_excerpt( 35 ) ); ?>

				</p>

			</div>

		<?php endwhile; ?>

	</div>

</section>

<?php
	endif;

	wp_reset_postdata();

endif;