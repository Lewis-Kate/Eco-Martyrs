<?php /*Template Name: Show All */ ?>
<?php get_header(); ?>


<div class="galleryButton">
<?php
     $prev = get_adjacent_post(true,'',true); 
     $next = get_adjacent_post(true,'',false);

?>

<a href="<?php echo get_permalink($prev->ID);?>"><i class="fas fa-chevron-left fa-2x"></i></a>
<a href="<?php echo get_permalink($next->ID);?>" class="rightButton"><i class="fas fa-chevron-right fa-2x"></i></a>
</div>






<div class="showAll">
<div class="stats_and_player">
    <?php echo presentSlide();?>
    

    <div class="links">
   <p>Links for Further Reading: <span> <?php echo linkloop();?> </span></p> 

    </div>

   

        <div class="moreInfo">        
            <a href="http://rampages.us/eco-martyrs/contact/">Please click here to provide more information about this Ecomartyr.</a>
        </div>
</div>

  <div class="right_side">
<div class="fit_to_window">
    <?php  echo ecoImage();?>
  </div>

  <div class="audioPlayer">
            <?php echo ecoAudio() ?>
        </div>
</div>

</div>


  


<?php get_footer(); ?>

