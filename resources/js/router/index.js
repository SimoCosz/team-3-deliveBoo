
import Vue from "vue";
import VueRouter from "vue-router";


Vue.use(VueRouter)

import HomeComponent from '../Pages/HomeComponent.vue'
import NotFound from '../Pages/404.vue'
import UserShow from '../Pages/UserShow.vue'
import CategoriesIndex from '../components/CategoriesIndex.vue'
import Payments from '../components/Payments.vue'
import SearchPage from '../Pages/SearchPage.vue'
import MenuPage from '../Pages/MenuPage.vue'

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
    path: '/categories',
    name: 'categories.index',
    component: CategoriesIndex
  },
  {
    path: '/payments',
    name: 'payments',
    component: Payments,
    path: '/search',
    name: 'search.restaurant',
    component: SearchPage
  },
  {
    path: '/menu/:slug',
    name: 'menu.restaurant',
    component: MenuPage
  },
  {
    path: '/*',
    component: NotFound
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
