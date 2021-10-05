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
</head>

<div class="showAll">
<div class="stats_and_player">
   <div id="ecoStats">
        <p>Ecomartyr Name: <span id="ecoMartyrName"></span></p>
        <p>Country: <span id="ecoMartyrCountry"></span> </p>
        <p>Date of Death:</p>
        <p>Portrait Artist:</p>
        <p>Sound Artists:</p>
        <p>Ecomartyr Bio:</p>
        <p>Links for further reading:</p><br />
    </div>

    <div class="audioPlayer">
        <div class="player">
            <!-- Define the section for displaying details 
	<div class="details">
	<div class="now-playing"></div>
	<div class="track-art"></div>
	<div class="track-name"></div>
	<div class="track-artist"></div>
	</div>-->

            <!-- Define the section for displaying play button -->
            <div class="playpause-track" onclick="playpauseTrack()">
                <i class="fa fa-play-circle fa-5x"></i>
            </div>


            <!-- Define the section for displaying the seek slider-->
            <div class="slider_container">
                <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration">00:00</div>
            </div>

            <!-- Define the section for displaying the volume slider-->
            <div class="slider_container">
                <i class="fa fa-volume-down"></i>
                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                <i class="fa fa-volume-up"></i>
            </div>
        </div>
    </div>
    </div>

  
   
            <img id="featuredImage">
       

 
</div>


<?php get_footer(); ?>