const posts=[];
let currentSlide = 0;


//connet to API and create console log the data ecomartrys
fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/ecomartyrs?&status=publish&per_page=99&_embed=true')
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

   
