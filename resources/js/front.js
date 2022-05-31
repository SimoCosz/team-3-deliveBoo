
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import App from './views/App.vue';
import router from './router'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const app = new Vue({
  el: '#root',
  render: h => h(App),
  router
});
