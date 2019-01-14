import Vue from 'vue'
import Router from 'vue-router'

// Containers
import Full from '../containers/Full'

// Views
import Videos from '../views/Videos'
import Stories from '../views/Stories'

import Page404 from '../views/Errors/page404';

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/backoffice',
      redirect: '/backoffice/videos',
      name: 'BackOffice',
      component: Full,
      children: [
        {
          path: 'videos',
          name: 'Videos',
          component: Videos
        },
        {
          path: 'stories',
          name: 'Stories',
          component: Stories
        },
        {
          path: '*',
          name: 'PageNotFound',
          component: Page404,
        }
      ]
    },
    {
      path: '/passport',
      name: 'Passport',
      component: Passport,
    }

  ]
})
