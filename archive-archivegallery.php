<?php /*Template Name: Gallery Archive */ 
get_header(); ?>

<h1 class="archive-title">Archive Gallery</h1>
<!-- <div class="galleryButton">
<button onclick="previousSlide()"><i class="fas fa-chevron-left fa-2x"></i></button>
<button id="showNext" class="rightButton" onclick="nextSlide()"><i class="fas fa-chevron-right fa-2x"></i></button>
</div>-->

<div class="archive_grid">


 
    
<?php echo presentSlide();?>
          
</div>  
            
            

<?php get_footer(); ?> 