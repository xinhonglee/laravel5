export const login = ({ commit }, token) => {
  commit('LOG_IN', token);
};

export const logout = ({ commit }) => {
  commit('LOG_OUT');
};

export const updateUserInfo = ({ commit }, userInfo) => {
  commit('UPDATE_USER_INFO', userInfo);
};

export const updateAppTitle = ({ commit }, title) => {
  commit('UPDATE_APP_TITLE', title);
};

export const updateAppEditable = ({ commit }, editable) => {
  commit('UPDATE_APP_EDITABLE', editable);
};
