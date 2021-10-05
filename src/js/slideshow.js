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
      const post = posts[arrayIndex]
      let name = document.getElementById("ecoMartyrName");
      name.style.color = 'white';
      name.innerHTML = post.title.rendered;


    // //Country
    // //https://multisite.local/eco-martyrs/wp-json/wp/v2/posts?categories=9
    //  let country = document.getElementById("ecoMartyrCountry");
    //  country.style.color = 'white';
    //  country.innerHTML = post.categories.name;
    //  console.log(post.categories);


    //Featured Image
    let image = document.getElementById("featuredImage");
    //const featuredmedia = posts._embedded['wp:featuredmedia'];
    image.src = post._embedded['wp:featuredmedia']['0'].source_url;
    //console.log(image.src);

   }





