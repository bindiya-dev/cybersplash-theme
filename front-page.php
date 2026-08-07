<?php
get_header();
?>

<main class="site-main">
<?php get_template_part( 'template-parts/sections/hero' ); ?>
<?php get_template_part( 'template-parts/sections/featured-categories' ); ?>
<?php get_template_part( 'template-parts/sections/featured-article' ); ?>
<?php get_template_part( 'template-parts/sections/latest-stories' ); ?>
<?php get_template_part( 'template-parts/sections/explore-more' ); ?>
<?php get_template_part( 'template-parts/sections/style-categories' ); ?>
</main>

<?php
get_footer();