// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import './bootstrap';
import Vue from 'vue'
import store from './store'
import BootstrapVue from 'bootstrap-vue'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'

import Index from './Index'
import router from './router'

Vue.use(BootstrapVue);
Vue.use(VueMaterial)
/* eslint-disable no-new */
new Vue({
  el: '#app',
  created: function () {
    window.Vue = this;
    window.VueGlobal = Vue;
  },
  router,
  store,
  template: '<Index/>',
  components: {
    Index
  }
})