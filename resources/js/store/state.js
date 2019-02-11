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
};

const notSyncedData = {
    app: {
      title: '',
      editable: false,
    },
    story: {
      "publisher": "Publisher",
      "publisher-logo-src": "logo image url",
      "poster-portrait-src": "portrait poster image url",
      "supports-landscape": true,
      "background-audio": "audio url",
      "poster-square-src": "image url",
      "poster-landscape-src": "image url",
      "pages": [],
      selected: {
      }
    },
  };

// Sync with local storage.
if (localStorage.getItem(STORAGE_KEY)) {
  syncedData = JSON.parse(localStorage.getItem(STORAGE_KEY));
}

// Merge data and export it.
export const state = Object.assign(syncedData, notSyncedData);
