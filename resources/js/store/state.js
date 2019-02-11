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
    id: '',
    pages: [
      {
        layers: [
          {
            template: '',
            icon: '',
            styles: {},
            elements: [
              {
                slug: '',
                data: null,
                styles: {},
                animation: {},
              }
            ]
          }
        ]
      }
    ],
    selected: {
      page: null,
      children: null,
      element: null,
    }
  },
};

// Sync with local storage.
if (localStorage.getItem(STORAGE_KEY)) {
  syncedData = JSON.parse(localStorage.getItem(STORAGE_KEY));
}

// Merge data and export it.
export const state = Object.assign(syncedData, notSyncedData);
