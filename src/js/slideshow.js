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
      name.innerHTML = post.title.rendered;

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

    //Featured Image
    let image = document.getElementById("featuredImage");
    image.src = post._embedded['wp:featuredmedia']['0'].source_url;
  

   }





