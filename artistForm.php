<?php /*Template Name: Artist Form */ ?>
<?php get_header(); ?>

<div class="artistForm">
    <?php 
        gravity_form( 2, true, true, true, '', false ); 
    ?>
</div>

<?php get_footer(); ?>