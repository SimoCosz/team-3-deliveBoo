// import Vue from "vue";
// import VueRouter from "vue-router";

// Vue.use(VueRouter)

<<<<<<< HEAD
// import HomeComponent from '../Pages/HomeComponent.vue'

// const routes = [
//   {
//     path: 'home',
//     name: 'home',
//     component: HomeComponent
//   }
// ]

// export default new VueRouter({
//   routes
// })
=======
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
>>>>>>> 317fb9705f9c317952f76bbea0b7d3a4ab7431c9
