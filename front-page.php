<?php get_header(); ?>

<div class="galleryButton">
    <button onclick="location.href='https://multisite.local/eco-martyrs/showall/'" type="button"><i
            class="fas fa-chevron-left fa-2x"></i></button>

    <button class="rightButton" onclick="location.href='https://multisite.local/eco-martyrs/showall/'" type="button"><i
            class="fas fa-chevron-right fa-2x"></i></button>
</div>

<?php 
$args = array(
'post_type'        => 'ecomartyrs',
'posts_per_page'   => -1
);
$query = new WP_Query( $args ); 

?>
<div class="container">

    <?php 
if($query->have_posts()):
    while ($query->have_posts(  )):
        $query->the_post();
?>

    <div class="imageGrid">
        <a href="https://multisite.local/eco-martyrs/showall/"><img
                src="<?php echo get_the_post_thumbnail_url( );?>"></a>
        <h3><?php the_title();?></h3>
    </div>


    <?php 
endwhile;
endif;
wp_reset_query(); 
?>


</div>
<?php get_footer(); ?>