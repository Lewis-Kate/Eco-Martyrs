<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

function load_scripts(){
	wp_enqueue_script( 'wp-api' );
	wp_enqueue_script( 'slideshow', get_template_directory_uri(  ) . '/src/js/slideshow.js', array( 'wp-api' ) , '1.0.0', true);
	//wp_enqueue_script( 'secondGallery', get_template_directory_uri(  ) . '/src/js/secondGallery.js', array( 'wp-api' ) , '1.0.0', true);
	wp_enqueue_style( 'styles', get_template_directory_uri(  ) . '/src/style/styles.css', array(), '1.0.0');
	gravity_form_enqueue_scripts( 1, true );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Our custom post type function
function create_posttype() {
 
    register_post_type( 'ecomartyrs',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Ecomartyrs' ),
                'singular_name' => __( 'Ecomartyr' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'ecomartyrs'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-admin-site',
			'supports' => array( 'thumbnail' )
 
        )
    );
	add_post_type_support( 'ecomartyrs', 'thumbnail' );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Our custom post type function
function create_archive() {
 
    register_post_type( 'archive gallery',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Archive Gallery' ),
                'singular_name' => __( 'Archive Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'archive gallery'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array( 'title', 'thumbnail' )
 
        )
    );
	add_post_type_support( 'archive gallery', 'thumbnail' );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_archive' );
