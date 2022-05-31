import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

import HomeComponent from '../Pages/HomeComponent.vue'
import NotFound from '../Pages/404.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeComponent
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