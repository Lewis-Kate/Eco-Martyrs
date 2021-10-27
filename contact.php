<?php /*Template Name: Contact */ ?>
<?php get_header(); ?>

<div class="contactForm">
    <?php 
        gravity_form( 1, true, true, true, '', false ); 
    ?>
</div>

<?php get_footer(); ?>