
/*ARCHIVE GALLERY*/
const fields=[];
let presentSlide = 0;


//connet to API and create console log the data archive
fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/archivegallery?&status=publish&per_page=99&_embed=true')
    .then(function(respond) {
        if (!respond.ok) {
            throw Error("Failure to Load");
        }
        return respond.json();
    }).then(function(json) {
      //this is where the data is
        console.log(json);
        json.forEach(element => {
          fields.push(element)
        });
        showView(presentSlide);    
    }).catch(function(error) {
      console.log(error);
    });


  //show the data on page-gallery-archive.php
  function showView(arrayIndex){
    //EcoMartyr Name 
      const post = fields[arrayIndex]
      let name = document.getElementById("archiveName");
      console.log(name);  
      name.style.color = '#F9F6EE';
      name.innerHTML = post.acf.archive_title;

      //Sex
      let sex = document.getElementById("archiveSex");
      sex.style.color = '#F9F6EE';
      sex.innerHTML = post.acf.archive_sex;

    //Country
     let country = document.getElementById("archiveCountry");
     country.style.color = '#F9F6EE';
     country.innerHTML = post.acf.archive_country;

     //Date of Death
     let dateOfDeath = document.getElementById("archiveDeath");
     dateOfDeath.style.color = '#F9F6EE';
     dateOfDeath.innerHTML = post.acf.archive_date_of_death;
     
     //Portrait Artist
     let portraitArtist = document.getElementById("archiveArtist");
     portraitArtist.style.color = '#F9F6EE';
     portraitArtist.innerHTML = post.acf.archive_portrait_artist;

     //Sound Artist
    // let soundArtist = document.getElementById("archiveSoundArtist");
    // soundArtist.style.color = '#F9F6EE';
    // soundArtist.innerHTML = post.acf.archive_sound_artist;

     //Ecomartyr Bio
     let ecomartyrBio = document.getElementById("archiveBio");
     ecomartyrBio.style.color = '#F9F6EE';
     ecomartyrBio.innerHTML = post.acf.archive_ecomartyr_bio;

     //Additional Links
   //  let additionalLinks = document.getElementById("archivelLinks");
     //const linkText = post.acf.archive_additional_links.map(link => `<a class="archiveLinks" href="${link.link_url}">${link.link_url}</a>`
     //).join('')
    // additionalLinks.innerHTML=linkText

    //Featured Image
    let image = document.getElementById("archiveImage");
    image.src = post._embedded['wp:featuredmedia']['0'].source_url;  

    //Audio   
    //let curr_track = document.getElementById("audio"); 
    //curr_track.src = post.acf.archive_audio_file;

    }


    //Loop to show posts on archive gallery
   // if(presentSlide + 1 > fields.length){
    //  presentSlide = 0;
   //  };

   //Show Next Slide
  /*(function nextSlide() {
    //increment presentSlide and then call showView again with the new value of presentSlide
    presentSlide++
    if(presentSlide + 1 > fields.length){
      presentSlide = 0
    }
    showView(presentSlide);
   }

  //Show Previous Slide
  function  previousSlide() {
    --presentSlide
    if(presentSlide < 0 ){
      presentSlide = fields.length - 1
    }
    showView(presentSlide);
  }*/

    

