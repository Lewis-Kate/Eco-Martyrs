const posts = [];
let currentSlide = 0;

//connet to API and create console log the data
fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/ecomartyrs?_embed=true')
    .then(function(response) {
        if (!response.ok) {
            throw Error("Failure to Load");
        }
        return response.json();
    }).then(function(json) {
      //this is where the data is
        console.log(json);
        json.forEach(element => {
          posts.push(element)
        });
      renderView(currentSlide);
    }).catch(function(error) {
        console.log(error);
    });

  //show the data on showAll.php
  function renderView(arrayIndex){

    //EcoMartyr Name 
      const post = posts[arrayIndex]
      let name = document.getElementById("ecoMartyrName");
      name.style.color = '#F9F6EE';
      name.innerHTML = post.acf.title;

    //Country
     let country = document.getElementById("ecoMartyrCountry");
     country.style.color = '#F9F6EE';
     country.innerHTML = post.acf.country;

     //Date of Death
     let dateOfDeath = document.getElementById("dateOfDeath");
     dateOfDeath.style.color = '#F9F6EE';
     dateOfDeath.innerHTML = post.acf.date_of_death;
     
     //Portrait Artist
     let portraitArtist = document.getElementById("portraitArtist");
     portraitArtist.style.color = '#F9F6EE';
     portraitArtist.innerHTML = post.acf.portrait_artist;

     //Sound Artist
     let soundArtist = document.getElementById("soundArtist");
     soundArtist.style.color = '#F9F6EE';
     soundArtist.innerHTML = post.acf.sound_artist;

     //Ecomartyr Bio
     let ecomartyrBio = document.getElementById("ecomartyrBio");
     ecomartyrBio.style.color = '#F9F6EE';
     ecomartyrBio.innerHTML = post.acf.ecomartyr_bio;

     //Additional Links
     let additionalLinks = document.getElementById("additionalLinks");
     const linkText = post.acf.additional_links.map(link => `<a class="additionalLinks" href="${link.link_url}">${link.link_url}</a>`
     ).join('')
     console.log(linkText)
     additionalLinks.innerHTML=linkText

    //Featured Image
    let image = document.getElementById("featuredImage");
    image.src = post._embedded['wp:featuredmedia']['0'].source_url;  
   }

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

//**************************//
//////// AUDIO PLAYER ///////
//**************************//

// Select all the elements in the HTML page and assign them to a variable
//let now_playing = document.querySelector(".now-playing");
//let track_name = document.querySelector(".track-name");
//let track_artist = document.querySelector(".track-artist");
let playpause_btn = document.querySelector(".playpause-track");
let seek_slider = document.querySelector(".seek_slider");
let volume_slider = document.querySelector(".volume_slider");
let curr_time = document.querySelector(".current-time");
let total_duration = document.querySelector(".total-duration");

// Specify globally used values
let track_index = 0;
let isPlaying = true;
let updateTimer;

// Create the audio element for the player
let curr_track = document.createElement('audio');

// Define the list of tracks that have to be played
//let track_list = posts.acf.audio_file;

function loadTrack(track_index) {
// Clear the previous seek timer
clearInterval(updateTimer);
resetValues();

// Load a new track
curr_track.src = posts.acf.audio_file;
curr_track.load();
console.log(posts.acf.audio_file)

// Set an interval of 1000 milliseconds
// for updating the seek slider
updateTimer = setInterval(seekUpdate, 1000);

// Construct a color withe the given values
//let bgColor = "rgb(" + red + ", " + green + ", " + blue + ")";

// Set the background to the new color
//document.body.style.background = bgColor;
}

// Function to reset all values to their default
function resetValues() {
curr_time.textContent = "00:00";
total_duration.textContent = "00:00";
seek_slider.value = 0;
}

function playpauseTrack() {
// Switch between playing and pausing
// depending on the current state
if (!isPlaying) playTrack();
else pauseTrack();
}

function playTrack() {
// Play the loaded track
curr_track.play();
isPlaying = true;

// Replace icon with the pause icon
playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
}

function pauseTrack() {
// Pause the loaded track
curr_track.pause();
isPlaying = false;

// Replace icon with the play icon
playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
}

// function nextTrack() {
// // Go back to the first track if the
// // current one is the last in the track list
// if (track_index < track_list.length - 1)
// 	track_index += 1;
// else track_index = 0;

// // Load and play the new track
// loadTrack(track_index);
// playTrack();
// }

// function prevTrack() {
// // Go back to the last track if the
// // current one is the first in the track list
// if (track_index > 0)
// 	track_index -= 1;
// else track_index = track_list.length - 1;
	
// // Load and play the new track
// loadTrack(track_index);
// playTrack();
// }
function seekTo() {
// Calculate the seek position by the
// percentage of the seek slider
// and get the relative duration to the track
seekto = curr_track.duration * (seek_slider.value / 100);

// Set the current track position to the calculated seek position
curr_track.currentTime = seekto;
}

function setVolume() {
// Set the volume according to the
// percentage of the volume slider set
curr_track.volume = volume_slider.value / 100;
}

function seekUpdate() {
let seekPosition = 0;

// Check if the current track duration is a legible number
if (!isNaN(curr_track.duration)) {
	seekPosition = curr_track.currentTime * (100 / curr_track.duration);
	seek_slider.value = seekPosition;

	// Calculate the time left and the total duration
	let currentMinutes = Math.floor(curr_track.currentTime / 60);
	let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
	let durationMinutes = Math.floor(curr_track.duration / 60);
	let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

	// Add a zero to the single digit time values
	if (currentSeconds < 10) { currentSeconds = "0" + currentSeconds; }
	if (durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
	if (currentMinutes < 10) { currentMinutes = "0" + currentMinutes; }
	if (durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }

	// Display the updated duration
	curr_time.textContent = currentMinutes + ":" + currentSeconds;
	total_duration.textContent = durationMinutes + ":" + durationSeconds;
}
}

// Load the first track in the tracklist
loadTrack(curr_track);
