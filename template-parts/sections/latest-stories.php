<?php
/**
 * Latest Stories
 *
 * @package CyberSplash
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$stories_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 6,
		'offset'              => 6,
		'post__not_in'        => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => true,
	)
);

if ( $stories_query->have_posts() ) :
?>

<section class="latest-stories">

	<div class="container">

		<div class="section-heading">

			<span class="section-subtitle">
				Latest Updates
			</span>

			<h2 class="section-title">
				Latest Stories
			</h2>

		</div>

		<div class="stories-grid">

			<?php
			$count = 1;

			while ( $stories_query->have_posts() ) :
				$stories_query->the_post();

				$card_class = 'story-card';

				if ( 1 === $count ) {
					$card_class .= ' story-card--large';
				} elseif ( 5 === $count ) {
					$card_class .= ' story-card--tall';
				}
			?>

				<article class="<?php echo esc_attr( $card_class ); ?>">

					<figure class="story-image">

						<?php
						if ( has_post_thumbnail() ) {

							the_post_thumbnail(
								'cybersplash-story',
								array(
									'alt' => esc_attr( get_the_title() ),
								)
							);

						}
						?>

					</figure>

					<div class="story-content">

						<?php cybersplash_post_meta(); ?>

						<h3>

							<a href="<?php the_permalink(); ?>">

								<?php the_title(); ?>

							</a>

						</h3>

						<?php if ( 1 === $count ) : ?>

							<p>

								<?php echo esc_html( cybersplash_excerpt( 18 ) ); ?>

							</p>

						<?php endif; ?>

					</div>

				</article>

			<?php
				$count++;
			endwhile;
			?>

		</div>

	</div>

</section>

<?php
	wp_reset_postdata();
endif;