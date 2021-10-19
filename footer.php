<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="footer">
   	<span>&copy;2021 <a href="http://multisite.local/eco-martyrs/">The Eco Martyrs</a></span>
</div>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


