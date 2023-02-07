<?php /*Template Name: Show All */ ?>
<?php get_header(); ?>


<div class="galleryButton">
<button onclick="showPreviousSlide()"><i class="fas fa-chevron-left fa-2x"></i></button>
<button id="showNext" class="rightButton" onclick="showNextSlide()"><i class="fas fa-chevron-right fa-2x"></i></button>
</div>

<div class="showAll">
<div class="stats_and_player">'
    <?php echo presentSlide();?>
    

    <div class="audioPlayer">
            <?php echo ecoAudio() ?>
        </div>

        <div class="moreInfo">
            <a href="http://rampages.us/eco-martyrs/contact/">Please click here to provide more information about this Ecomartyr.</a>
        </div>
</div>

  
<div class="fit_to_window">
    <?php  echo ecoImage();?>
  </div>
</div>



  


<?php get_footer(); ?>


<script>
const posts=[];
let currentSlide = 0;

   //Show Next Slide
  function showNextSlide() {
    //increment currentSlide and then call renderView again with the new value of currentSlide
    currentSlide++
    if(currentSlide + 1 > posts.length){
      currentSlide = 0
    }
  renderView(currentSlide);
   }

  //Show Previous Slide
  function showPreviousSlide() {
    --currentSlide
    if(currentSlide < 0 ){
      currentSlide = posts.length - 1
    }
    renderView(currentSlide);
  }

    </script>