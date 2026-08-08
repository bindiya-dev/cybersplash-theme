<?php
/**
 * Single Post
 *
 * @package CyberSplash
 */

get_header();
?>

<main class="site-main">

	<section class="single-post">

		<div class="container">

			<?php
			while ( have_posts() ) :
				the_post();
			?>

				<article <?php post_class(); ?>>

					<?php if ( has_post_thumbnail() ) : ?>

						<div class="single-post-image">

							<?php
							the_post_thumbnail(
								'full',
								array(
									'alt' => esc_attr( get_the_title() ),
								)
							);
							?>

						</div>

					<?php endif; ?>

					<header class="single-post-header">

						<?php cybersplash_post_meta(); ?>

						<h1 class="single-post-title">

							<?php the_title(); ?>

						</h1>

					</header>

					<div class="single-post-content">

						<?php the_content(); ?>

					</div>

				</article>

			<?php endwhile; ?>

		</div>

	</section>

</main>

<?php
get_footer();