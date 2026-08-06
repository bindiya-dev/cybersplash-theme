<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<header class="site-header">

    <div class="header-logo">

        <div class="container">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">

                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="<?php bloginfo( 'name' ); ?>">

            </a>

        </div>

    </div>

    <nav class="main-navigation">

        <div class="container">

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'main-menu',
                    'fallback_cb'    => false,
                )
            );
            ?>

        </div>

    </nav>

</header>