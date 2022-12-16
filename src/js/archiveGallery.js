const psts = [];
let slide = 0;


//connet to API and create console log the data archive gallery
fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/archivegallery?_embed=true')
    .then(function(response) {
        if (!response.ok) {
            throw Error("Failure to Load");
        }
        return response.json();
    }).then(function(json) {
      //this is where the data is
        console.log(json);
        json.forEach(element => {
          psts.push(element)
        });
        renderView(slide);    
    }).catch(function(error) {
      console.log(error);
    });


  //show the data on page-archive-gallery.php
  function renderView(arrayIndex){
    //EcoMartyr Name 
      const p = psts[arrayIndex]
      let name = document.getElementById("archiveName");
      name.style.color = '#F9F6EE';
      name.innerHTML = p.acf.title;

      //Sex
      let sex = document.getElementById("archiveSex");
      sex.style.color = '#F9F6EE';
      sex.innerHTML = p.acf.sex;

    //Country
     let country = document.getElementById("archiveCountry");
     country.style.color = '#F9F6EE';
     country.innerHTML = p.acf.country;

     //Date of Death
     let dateOfDeath = document.getElementById("archiveDeath");
     dateOfDeath.style.color = '#F9F6EE';
     dateOfDeath.innerHTML = p.acf.date_of_death;
     
     //Portrait Artist
     let portraitArtist = document.getElementById("archiveArtist");
     portraitArtist.style.color = '#F9F6EE';
     portraitArtist.innerHTML = p.acf.portrait_artist;

     //Sound Artist
     let soundArtist = document.getElementById("archiveArtist");
     soundArtist.style.color = '#F9F6EE';
     soundArtist.innerHTML = p.acf.sound_artist;

     //Ecomartyr Bio
     let ecomartyrBio = document.getElementById("archiveBio");
     ecomartyrBio.style.color = '#F9F6EE';
     ecomartyrBio.innerHTML = p.acf.ecomartyr_bio;

     
    //Featured Image
    let image = document.getElementById("archiveImage");
    image.src = p._embedded['wp:featuredmedia']['0'].source_url; 

     //Additional Links
     let additionalLinks = document.getElementById("archiveLinks");
     const linkText = p.acf.additional_links.map(link => `<a class="archiveLinks" href="${link.link_url}">${link.link_url}</a>`
     ).join('')
    additionalLinks.innerHTML=linkText
 

    //Audio   
    let curr_track = document.getElementById("audio"); 
    curr_track.src = p.acf.audio_file;

    }

    
   //Show Next slide
  function nextslide() {
    //increment slide and then call renderView again with the new value of slide
    slide++
    if(slide + 1 > p.length){
      slide = 0
    }
  renderView(slide);
   }

  //Show Previous slide
  function previousslide() {
    --slide
    if(slide < 0 ){
      slide = p.length - 1
    }
    renderView(slide);
  }

    

