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
			'supports' => array( 'title', 'thumbnail' )
 
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
            'rewrite' => array('slug' => 'gallery-archive'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array( 'title', 'thumbnail' )
 
        )
    );
	add_post_type_support( 'archive gallery', 'thumbnail' );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_archive');

//gallery archive loop
function presentSlide(){
	$args = array(
	  'posts_per_page' => -1,
	  'post_type'   => 'archivegallery',
	  'post_status' => 'publish',
	  'order' => 'ASC',
	  'orderby' => 'title',
	  );
	  $html = '';
	  $the_query = new WP_Query( $args );
					  if( $the_query->have_posts() ):
						while ( $the_query->have_posts() ) : $the_query->the_post();
						  $html .='<div class="archive_card">';
						  $html .= '<div class="archive_showAll">';
						  $html .= '<img src=' .  get_the_post_thumbnail_url($post_id, 'full')  . '>';
						  $html .= '<div class="archive_info">';
						  $html .= '<div id="ecoStats">'; 
						  $html .= '<p>Ecomartyr Name: <span>' . get_the_title() . '</span></p>';
						  $html .= '<p>Sex: <span> ' . get_field('archive_sex') . '</span></p>';
						  $html .= '<p>Country: <span> ' . get_field('archive_country') . '</span> </p>';
						  $html .= '<p>Date of Death:<span> ' . get_field('archive_date_of_death') . '</span> </p>';
						  $html .= '<p>Portrait Artist: <span> ' . get_field('archive_portrait_artist') . '</span> </p>';
						  $html .= '<p>Ecomartyr Bio: <span> ' . get_field('archive_ecomartyr_bio') . '</span> </p>';
						  $html .= '<hr>';
						  $html .= '</div>';
						  $html .= '</div>';
						  $html .= '</div>';
						
						endwhile;
					endif;
	wp_reset_query();  // Restore global post data stomped by the_post().
   return $html;
   }
						  
