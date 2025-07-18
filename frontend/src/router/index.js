import { createRouter, createWebHistory } from 'vue-router';
import LogIn from '../pages/Login.vue';
import Home from '../pages/Home.vue';
// import Admin from '../pages/Admin.vue';
// import Account from '../pages/Account.vue';
import Cart from '../pages/Cart.vue';
import Catalogue from '../pages/Catalogue.vue';
// import Register from '../pages/Register.vue';
import FurnitureDetails from '../pages/FurnitureDetails.vue';

const routes = [
  { path: '/', redirect: '/home' },
  { path: '/login', component: LogIn },
  { path: '/home', component: Home },
  // { path: '/admin', component: Admin },
  // { path: '/account', component: Account },
  { path: '/cart', component: Cart },
  { path: '/catalogue', component: Catalogue },
  // { path: '/register', component: Register },
  { path: '/furniture-details/:id', name: "furniture-details", component: FurnitureDetails },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;