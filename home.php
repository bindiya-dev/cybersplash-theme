<?php
/**
 * Blog Home
 *
 * @package CyberSplash
 */

get_header();
?>

<main class="site-main">

	<section class="blog-page">

		<div class="container">

			<div class="section-heading">

				<span class="section-subtitle">
					Latest Articles
				</span>

				<h1 class="section-title">
					Our Blog
				</h1>

			</div>

			<div class="stories-grid">

				<?php
				if ( have_posts() ) :

					while ( have_posts() ) :
						the_post();
				?>

						<article class="story-card">

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

								<p>

									<?php echo esc_html( cybersplash_excerpt( 18 ) ); ?>

								</p>

							</div>

						</article>

				<?php
					endwhile;

					the_posts_pagination();

				else :
				?>

					<p>No posts found.</p>

				<?php endif; ?>

			</div>

		</div>

	</section>

</main>

<?php
get_footer();