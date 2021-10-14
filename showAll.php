<?php /*Template Name: Show All */ ?>
<?php get_header(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Load FontAwesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="showAll">
    <button onclick="showPreviousSlide()"><i class="fas fa-chevron-left"></i></button>
    <div class="stats_and_player">
        <div id="ecoStats">
            <p>Ecomartyr Name: <span id="ecoMartyrName"></span></p>
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
    </div>

    <div class="fit_to_window">
        <img id="featuredImage">
    </div>

    <button id="showNext" onclick="showNextSlide()"><i class="fas fa-chevron-right"></i></button>

</div>


<?php get_footer(); ?>