import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue';
import ListePaysView from '@/views/ListePaysView.vue';
import FichePays from '@/views/FichePays.vue';

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
      component: ListePaysView,
      name: 'pays'
    },
    {
      path: '/fiche-pays/:pays',
      component: FichePays,
      name: 'fichepays'
    },
    {

    }
  ]
})

export default router
