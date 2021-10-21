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

    <div class="header">
        <h1><a href="http://multisite.local/eco-martyrs/">The Eco Martyrs</a><img
                src="/wp-content/themes/eco-martyrs/src/img/globe.svg"></h1>
        <p>Visual and sound artists pay tribute to the fallen from around the globe</p>

        <!-- <nav>
            <a href="http://multisite.local/eco-martyrs/showall/">Show All</a>
            <a href="http://multisite.local/eco-martyrs/category/africa/">Africa</a>
            <a href="http://multisite.local/eco-martyrs/category/north-america/">North America</a>
            <a href="http://multisite.local/eco-martyrs/category/south-america/">South America</a>
        </nav> -->

        <?php
  wp_nav_menu(
    array(
      'menu'            => 'primary',
      'theme_location'  => 'primary_menu',
      'container_class' => 'collapse navbar-collapse',
      'container_id'    => 'primary_menuNavDropdown',
      'menu_class'      => 'navbar-nav',
      'fallback_cb'     => '',
      'menu_id'         => 'primary_menu',
      'depth'           => '2',
      'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
    )
  );
?>

    </div>