const posts = [];
let currentSlide = 0;

//connet to API and create console log the data
fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/posts?_embed=true')
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
      const ecoMartyrName = posts.find(post => post.id === 21);
      let name = document.getElementById("ecoMartyrName");
      name.innerHTML = ecoMartyrName.title.rendered;
     //console.log(ecoMartyrName.title);

    // //Country
    //  const ecoMartyrCountry = posts.find(post => post.id === 21);
    //  console.log(ecoMartyrCountry);
    //  let country = document.getElementById("ecoMartyrCountry");
    //  country.innerHTML = ecoMartyrCountry.categories;


    //Featured Image
    const featuredImage = posts.find(post => post.id === 21);
    console.log(featuredImage);
    let image = document.getElementById("featuredImage");
    image.innerHTML = featuredImage._links.featuredmedia;
    console.log(featuredImage._links.wp.featuredmedia);
  }


            

// //fetch the image from the API
//   const image = document.getElementById('featuredImage');
//   fetch('http://multisite.local/eco-martyrs/wp-content/uploads/sites/7/2021/04/4-Eduardo-Maxciel-Pereira-Dos-Santos.jpg')
//   .then(response => response.blob())
//   .then(blob => {
//     const objectURL = URL.createObjectURL(blob);
//     image.src = objectURL;
//   });



