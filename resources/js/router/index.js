import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

import HomeComponent from '../Pages/HomeComponent.vue'

const routes = [
  {
    path: 'home',
    name: 'home',
    component: HomeComponent
  }
]

export default new VueRouter({
  routes
})