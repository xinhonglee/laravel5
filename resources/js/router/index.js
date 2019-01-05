import Vue from 'vue'
import Router from 'vue-router'

// Containers
import Full from '../containers/Full'

// Views
import Video from '../views/Video'
import Story from '../views/Story'

import Page404 from '../views/Errors/page404';

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/backoffice',
      redirect: '/backoffice/video',
      name: 'BackOffice',
      component: Full,
      children: [
        {
          path: 'video',
          name: 'Video',
          component: Video
        },
        {
          path: 'story',
          name: 'Story',
          component: Story
        },
        {
          path: '*',
          name: 'PageNotFound',
          component: Page404,
        }
      ]
    },

  ]
})
