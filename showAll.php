<?php /*Template Name: Show All */ ?>
<?php get_header(); ?>


<div class="showAll">
    <button onclick="showPreviousSlide()"><i class="fas fa-chevron-left"></i></button>
    <div class="stats_and_player">
        <div id="ecoStats">
            <p>Ecomartyr Name: <span id="ecoMartyrName"></span></p>
            <p>Sex: <span id="ecoMartyrSex"></span></p>
            <p>Country: <span id="ecoMartyrCountry"></span> </p>
            <p>Date of Death: <span id="dateOfDeath"></p>
            <p>Portrait Artist: <span id="portraitArtist"></p>
            <p>Sound Artists: <span id="soundArtist"></p>
            <p>Ecomartyr Bio: <span id="ecomartyrBio"></span></p>
            <p>Links for further reading: <span id="additionalLinks"></p><br />
        </div>

        <div class="audioPlayer">
            <audio controls autoplay loop id="audio"></audio>
        </div>

        <div class="moreInfo">
            <a href="http://multisite.local/eco-martyrs/contact/">Please click hear to provide more information about this Ecomartyr.</a>
        </div>
    </div>

    <div class="fit_to_window">
        <img id="featuredImage">
    </div>

    <button id="showNext" onclick="showNextSlide()"><i class="fas fa-chevron-right"></i></button>

</div>


<?php get_footer(); ?>