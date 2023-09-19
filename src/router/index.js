import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue';
import PaysView from '@/views/ListePaysView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },
    {
      path: '/pays',
      name: 'pays',
      component: PaysView
    },
    {
        path: '/pays/:id',
        name: 'Fichepays',
        component: PaysView
    }
  ]
})

export default router
