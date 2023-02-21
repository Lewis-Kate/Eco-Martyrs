<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<h1 class="single_title" style="text-align:center"><?php echo get_the_title() ?> </h1>

<div class="wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	

						<div class="leftSide">
						<!--<p>Ecomartyr Name: <span><?php echo get_the_title() ?><span></p>-->
						<p>Sex: <span><?php echo get_field('sex') ?><span></p>
						<p>Country: <span><?php echo get_field('country') ?><span></p>
						<p>Date of Death: <span><?php echo get_field('date_of_death') ?><span></p>
						<p>Portrait Artist: <span><?php echo get_field('portrait_artist') ?><span></p>
						<p>Sound Artist: <span><?php echo get_field('sound_artist') ?><span></p>
						<p>Ecomartyr Bio: <span><?php echo get_field('ecomartyr_bio') ?><span></p>
						</div>

						<div class="rightSide">
							<img id="featuredImage" src="<?php echo get_the_post_thumbnail_url($post_id, 'full' )?>" >
							<audio controls autoplay loop id="audio" src="<?php echo get_field('audio_file')?>"></audio>
							<p>Additional Links:</p>
							<a href="<?php echo get_sub_field('link_url', get_the_ID())?>" target="_blank">
								<div class="moreInfo">
									<a href="https://rampages.us/eco-martyrs/contact/">Please click here to provide more information about this Ecomartyr.</a>
								</div>

						</div>	

				
			
		</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();