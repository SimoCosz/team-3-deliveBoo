
import Vue from "vue";
import VueRouter from "vue-router";


Vue.use(VueRouter)

import HomeComponent from '../Pages/HomeComponent.vue'
import NotFound from '../Pages/404.vue'
import UserShow from '../Pages/UserShow.vue'
const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeComponent
  },
  {
    path: '/users/:slug',
    name: 'users.show',
    component: UserShow
  },
  {
    path: '/*',
    name: 'notFound',
    component: NotFound
  }
  
];

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

export default router
