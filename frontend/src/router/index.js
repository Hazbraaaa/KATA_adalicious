import { createRouter, createWebHistory } from 'vue-router';
import Home from '../pages/Home.vue';
import Ordering from '../pages/Ordering.vue';
import Tracking from '../pages/Tracking.vue';
import Kitchen from '../pages/Kitchen.vue';

const routes = [
  { path: '/', redirect: '/home' },
  { path: '/home', component: Home },
  { path: '/ordering', component: Ordering },
  { path: '/tracking/:id', name: "tracking", component: Tracking },
  { path: '/kitchen', component: Kitchen },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;