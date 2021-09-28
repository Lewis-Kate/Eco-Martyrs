// wp.api.loadPromise.done(function(){
//   var post = new wp.api.models.Post( { id: 21 } );
//   post.fetch();
//   console.log(post);

//     // Get a collection of the post's categories (returns a promise)
//     // Uses _embedded data if available, in which case promise resolves immediately.
//     post.getCategories().done( function( postCategories ) {
//       console.log(postCategories);
//     } );

//   // Get a posts featured image Media model.
//   post.getFeaturedMedia().done(function(featuredmedia){
//   console.log('called');
//   console.log(featuredmedia);
//   });

// })


//fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/posts?_embed=true')
//.then(response => response.json())
//.then(data => console.log(data));
fetch('https://multisite.local/eco-martyrs/wp-json/wp/v2/posts?_embed=true')
    .then(function(response) {
        if (!response.ok) {
            throw Error("Failure to Load");
        }
        return response;
    }).then(function(response) {
        console.log(response.json());
    }).catch(function(error) {
        console.log(error);
    });


//fetch the image
  const image = document.getElementById('featuredImage');
  fetch('http://multisite.local/eco-martyrs/wp-content/uploads/sites/7/2021/04/4-Eduardo-Maxciel-Pereira-Dos-Santos.jpg')
  .then(response => response.blob())
  .then(blob => {
    const objectURL = URL.createObjectURL(blob);
    image.src = objectURL;
  });

  console.log(image);

