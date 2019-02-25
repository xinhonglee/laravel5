export const UPDATE_USER_INFO = (state, userInfo) => {
  state.userInfo.id = userInfo.id ? userInfo.id : "";
  state.userInfo.email = userInfo.email ? userInfo.email : "";
  state.userInfo.name = userInfo.name ? userInfo.name : "";
  state.userInfo.role = userInfo.role ? userInfo.role : "";
  state.userInfo.verifiedAt = userInfo.verifiedAt ? userInfo.verifiedAt : null;
};

export const LOG_IN = (state, token) => {
  state.token = (token && token.accessToken) || '';
  state.tokenExpiresIn = (token && token.expiresIn) || '';
  state.refreshTokenExpiresIn = (token && token.refreshTokenExpiresIn) || '';
};

export const LOG_OUT = (state) => {
  state.token = null;
  state.tokenExpiresIn = null;
  state.refreshTokenExpiresIn = null;
  state.userInfo = {};
};

export const UPDATE_APP_TITLE = (state, title) => {
  state.app.title = title;
};

export const UPDATE_APP_EDITABLE = (state, editable) => {
  state.app.editable = editable;
};

export const UPDATE_AMP_STORY = (state, story) => {
  state.story.id = (story && story.id) ? story.id : '';
  state.story.data.publisher = (story && story.data.publisher) ? story.data.publisher : '';
  state.story.data.publisherLogoSrc = (story && story.data.publisherLogoSrc) ? story.data.publisherLogoSrc : '';
  state.story.data.posterPortraitSrc = (story && story.data.posterPortraitSrc) ? story.data.posterPortraitSrc : '';
  state.story.data.supportsLandscape = (story && story.data.supportsLandscape) ? story.data.supportsLandscape : '';
  state.story.data.backgroundAudio = (story && story.data.backgroundAudio) ? story.data.backgroundAudio : '';
  state.story.data.posterSquareSrc = (story && story.data.posterSquareSrc) ? story.data.posterSquareSrc : '';
  state.story.data.posterLandscapeSrc = (story && story.data.posterLandscapeSrc) ? story.data.posterLandscapeSrc : '';
  state.story.data.pages = (story && story.data.pages) ? story.data.pages : [];
};

export const SAVE_AMP_STORY = (state, story) => {
  let storyData = Vue.$store.state.story.data;
  let data = {
    "id": (story && story.id) ? story.id : Vue.$store.state.story.id,
    "name": Vue.$store.state.app.title,
    "data": {
      "publisher": (story && story.data.publisher) ? story.data.publisher : storyData.publisher,
      "publisher-logo-src": (story && story.data.publisherLogoSrc) ? story.data.publisherLogoSrc : storyData.publisherLogoSrc,
      "poster-portrait-src": (story && story.data.posterPortraitSrc) ? story.data.posterPortraitSrc : storyData.posterPortraitSrc,
      "supports-landscape": (story && story.data.supportsLandscape) ? story.data.supportsLandscape : storyData.supportsLandscape,
      "background-audio": (story && story.data.backgroundAudio) ? story.data.backgroundAudio : storyData.backgroundAudio,
      "poster-square-src": (story && story.data.posterSquareSrc) ? story.data.posterSquareSrc : storyData.posterSquareSrc,
      "poster-landscape-src": (story && story.data.posterLandscapeSrc) ? story.data.posterLandscapeSrc : storyData.posterLandscapeSrc,
      "pages": (story && story.data.pages) ? story.data.pages : storyData.pages,
    }
  };
  if (story.publish) {
    Vue.block();
    if (!_.isNil(Vue.$store.state.story.id) && !Vue.$store.state.story.new) {
      Vue.$http.put(`/story/update`, data).then((response) => {
        Vue.$store.dispatch('updateAMPStory', response.data);
        Vue.unBlock();
        Vue.alertBox({
          title: 'Success',
          text: "Successfully published this story!",
          type: 'success'
        });
      }, (error) => {
        console.log(error);
      }).catch(Vue.handleClientError);
    } else {
      Vue.$http.post(`/story/create`, data).then((response) => {
        Vue.$store.dispatch('updateAMPStory', response.data);
        Vue.$store.state.story.new = false;
        Vue.unBlock();
        Vue.alertBox({
          title: 'Success',
          text: "Successfully published this story!",
          type: 'success'
        });
      }, (error) => {
        console.log(error);
        Vue.unBlock();
      }).catch(Vue.handleClientError);
    }
  } else {
    if(_.isNil(Vue.$store.state.story.id)) {
      data.id = new Date();
      Vue.$store.state.story.new = true;
    }
    Vue.$http.post(`/story/redis/set`, data).then((response) => {
      Vue.$store.dispatch('updateAMPStory', response.data);
    }, (error) => {
      console.log(error);
    }).catch(Vue.handleClientError);
  }
};

export const DELETE_AMP_STORY_REDIS = (state) => {
  const data = {
    id: Vue.$store.state.story.id
  };
  Vue.$http.post(`/story/redis/delete`, data).then((response) => {
    console.log('DELETE STORY FROM REDIS', response);
    Vue.$store.dispatch('clearAMPStory');
  }, (error) => {
    console.log(error);
  }).catch(Vue.handleClientError);
};

export const SELECT_AMP_STORY = (state, selected) => {
  state.story.selected.page = selected.page;
  state.story.selected.layer = selected.layer;
  state.story.selected.element = selected.element;
};

export const CLEAR_AMP_STORY = (state) => {
  state.story = {
    id: null,
    data: {
      publisher: "Publisher",
      publisherLogoSrc: "logo image url",
      posterPortraitSrc: "portrait poster image url",
      supportsLandscape: true,
      backgroundAudio: "audio url",
      posterSquareSrc: "image url",
      posterLandscapeSrc: "image url",
      pages: [],
    },
    selected: {
      page: 0,
      layer: -1,
      element: -1,
    },
    new: false,
  }
};