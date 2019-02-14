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
  let data = {
    "id": story.id,
    "name": Vue.$store.state.app.title,
    "data": {
      "publisher": story.data.publisher,
      "publisher-logo-src": story.data.publisherLogoSrc,
      "poster-portrait-src": story.data.posterPortraitSrc,
      "supports-landscape": story.data.supportsLandscape,
      "background-audio": story.data.backgroundAudio,
      "poster-square-src": story.data.posterSquareSrc,
      "poster-landscape-src": story.data.posterLandscapeSrc,
      "pages": story.data.pages,
    }
  };

  const api = Vue.$store.state.story.id ? 'update' : 'create';

  Vue.$http.put(`/story/${api}`, data).then((response) => {
    Vue.$store.dispatch('updateAMPStory', response.data);
  }, (error) => {
    console.log(error);
  }).catch(Vue.handleClientError);
};