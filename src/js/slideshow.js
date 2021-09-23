let state = {
    posts: [],
    baseUrl: 'http://multisite.local/eco-marytrs/wp-json/wp/v2/posts',
    perPage: '?per_page=10',
    wpFetchHeaders: {
      headers: {
        'Access-Control-Allow-Origin': '*',
        'Access-Control-Expose-Headers': 'x-wp-total'
      }
    }
  }

var post = new wp.api.models.Post( { id: 19 } );
 post.fetch();

// Get a collection of the post's categories (returns a promise)
// Uses _embedded data if available, in which case promise resolves immediately.
post.getCategories().done( function( postCategories ) {
  // ... do something with the categories.
  // The new post has an single Category: Uncategorized
  console.log( postCategories[0].name );
  // response -> "Uncategorized"
} );

// Get a posts featured image Media model.
post.getFeaturedMedia().done( function( image ){
  // ... do something with image
  console.log( image );
} );
 