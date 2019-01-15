export const UPDATE_USER_INFO = (state, userInfo) => {
  state.userInfo = userInfo;
};

export const LOG_IN = (state, token) => {
  state.token = token;
};

export const LOG_OUT = (state) => {
  state.token = null;
  state.userInfo = {};
};