// How to get an access token:
// http://jelled.com/instagram/access-token

// TODO:
// - improve UI
// - make it easy to copy and paste image url

// {{model.user.username}}, {{likes}} likes

var galleryFeed = new Instafeed({
  get: "user",
  userId: 500894807,
  accessToken: "500894807.1677ed0.be014c02ca4d41d1ba7065b87b3ce603",
  resolution: "standard_resolution",
  useHttp: "true",
  limit: 8,
  template: '<div class="insta-feed"><a href="{{link}}" target="blank"><div class="img-featured-container"><div class="img-backdrop"></div><div class="description-container"><p class="caption">{{caption}}</p><span class="likes"><i class="icon ion-heart"></i> {{likes}}</span><span class="comments"><i class="icon ion-chatbubble"></i> {{comments}}</span></div><img src="{{image}}" class="img-responsive"></div></a></div>',
  target: "instafeed-gallery-feed",
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      btnInstafeedLoad.setAttribute('disabled', 'disabled');
    }
  },
});
galleryFeed.run();
