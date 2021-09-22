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
    <a href="">Show All</a>
    <a href="">Africa</a>
    <a href="">North America</a>
    <a href="">South America</a>
	<span>&copy;2021 <a href="https://rampages.us/ecomartyrs/">The Eco Martyrs</a></span>
</div>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

<style>
    .footer{
        display: flex;
        flex-flow: row nowrap;
}

.footer a{
		color: white;
		text-decoration: none;
		padding-right: .5em;
	}
.footer a:hover{
		color: red;
		text-decoration: underline;
	}

.footer p{
	font-size: 1em;
	color: #939699;
    padding-right: .5em;
}
</style>


</html>


