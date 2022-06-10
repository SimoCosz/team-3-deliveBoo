
import Vue from "vue";
import VueRouter from "vue-router";


Vue.use(VueRouter)

import HomeComponent from '../Pages/HomeComponent.vue'
import NotFound from '../Pages/404.vue'
import CategoriesIndex from '../components/CategoriesIndex.vue'
import Payments from '../components/Payments.vue'
import SearchPage from '../Pages/SearchPage.vue'
import MenuPage from '../Pages/MenuPage.vue'
import Succesfull from '../Pages/SuccesfullPayment.vue'

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
    component: Payments,
  },
  {
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
    path: '/payments/succesfull',
    name: 'payments.succesfull',
    component: Succesfull
  },
  {
    path: '/*',
    name: 'notFound',
    component: NotFound
  },
];

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

export default router
