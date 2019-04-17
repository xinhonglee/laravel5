// Set the key we'll use in local storage.
// Go to Chrome dev tools, application tab, click "Local Storage" and "http://localhost:8080"
// and you'll see this key set below (if logged in):
export const STORAGE_KEY = 'poss';

let syncedData = {
  token: null,
  tokenExpiresIn: null, // timestamp
  refreshTokenExpiresIn: null, // timestamp
  refreshTokenAlreadyExpired: false,
  userInfo: {
    id: "",
    email: "",
    name: "",
    role: "",
    verifiedAt: null,
  },
  cloudinary: {
    cloudName: '',
    userName: '',
    timestamp: '',
    signature: '',
    apiKey: '',
  }
};

const notSyncedData = {
  app: {
    title: '',
    editable: false,
  },
  story: {
    id: null,
    slug: null,
    data: {
      publisher: "Publisher",
      publisherLogoSrc: "logo image url",
      posterPortraitSrc: "portrait poster image url",
      supportsLandscape: true,
      backgroundAudio: "audio url",
      posterSquareSrc: "image url",
      posterLandscapeSrc: "image url",
      pages: [],
      bookend: {},
      css: "",
    },
    selected: {
      page: 0,
      layer: -1,
      gridArea: -1,
      element: -1,
    },
    new: false,
  },
  cloudinary: {
    cloudName: '',
    userName: '',
    timestamp: '',
    signature: '',
    apiKey: '',
  }
};

// Sync with local storage.
if (localStorage.getItem(STORAGE_KEY)) {
  syncedData = JSON.parse(localStorage.getItem(STORAGE_KEY));
}

// Merge data and export it.
export const state = Object.assign(syncedData, notSyncedData);
