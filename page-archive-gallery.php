<?php /*Template Name: Archive Gallery */ ?>
<?php get_header(); ?>

<h1 class="archive">Archive Gallery</h1>
<div class="galleryButton">
<button onclick="showPreviousSlide()"><i class="fas fa-chevron-left fa-2x"></i></button>
<button id="showNext" class="rightButton" onclick="showNextSlide()"><i class="fas fa-chevron-right fa-2x"></i></button>
</div>

<div class="showAll">
   
    <div class="stats_and_player">
        <div id="ecoStats">
 
            <p>Ecomartyr Name: <span id="archiveName"></span></p>
            <p>Sex: <span id="archiveSex"></span></p>
            <p>Country: <span id="archiveCountry"></span> </p>
            <p>Date of Death: <span id="archiveDeath"></p>
            <p>Portrait Artist: <span id="archiveArtist"></p>
            <p>Sound Artists: <span id="archiveArtist"></p>
            <p>Ecomartyr Bio: <span id="archiveBio"></span></p>
            <p>Links for further reading: <span id="archiveLinks"></p><br />
        </div>

        <div class="audioPlayer">
            <audio controls autoplay loop id="audio"></audio>
        </div>

        <div class="moreInfo">
            <a href="http://multisite.local/eco-martyrs/contact/">Please click here to provide more information about this Ecomartyr.</a>
        </div>
    </div>

    <div class="fit_to_window">
        <img id="archiveImage">
    </div>

  

</div>


<?php get_footer(); ?>