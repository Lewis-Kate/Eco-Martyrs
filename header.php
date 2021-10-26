<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Load FontAwesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <div id="wrapper-navbar" class="header">

        <a class="skip-link sr-only sr-only-focusable"
            href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">

            <h1><a href="http://multisite.local/eco-martyrs/">The Eco Martyrs</a><img
                    src="/wp-content/themes/eco-martyrs/src/img/globe.svg"></h1>

            <h2 id="main-nav-label" class="sr-only">
                <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
            </h2>

            <!-- <?php if ( 'container' === $container ) : ?>
            <div class="container">
                <?php endif; ?>

                <!-- Your site title as branding in the menu -->
            <?php if ( ! has_custom_logo() ) { ?>

            <?php if ( is_front_page() && is_home() ) : ?>

            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

            <?php else : ?>

            <!-- <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    itemprop="url"><?php bloginfo( 'name' ); ?></a> -->

            <?php endif; ?>

            <?php
					} else {
						the_custom_logo();
					}
					?>
            <!-- end custom logo -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- The WordPress Menu goes here -->
            <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
            <?php if ( 'container' === $container ) : ?>


    </div><!-- .container -->
    <?php endif; ?>

    </nav><!-- .site-navigation -->


    </div><!-- #wrapper-navbar end -->

    <div class="subHead">
        <h5>Visual and sound artists pay tribute to the fallen from around the globe</h5>
    </div>