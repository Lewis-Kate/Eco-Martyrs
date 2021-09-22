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


  async function getImage(){
        var postsImage = new wp.api.collections.Posts();
        postsCollection.fetch();
  }