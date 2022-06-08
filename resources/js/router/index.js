import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

import HomeComponent from '../Pages/HomeComponent.vue'
import NotFound from '../Pages/404.vue'
import CategoriesIndex from '../components/CategoriesIndex.vue'
import Payments from '../components/Payments.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeComponent
  },
  {
    path: '/categories',
    name: 'categories.index',
    component: CategoriesIndex
  },
  {
    path: '/payments',
    name: 'payments',
    component: Payments
  },
  {
    path: '/*',
    component: NotFound
  },
];

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

export default router
