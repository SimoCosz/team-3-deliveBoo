
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import App from './views/App.vue';
import router from './router'

// IMPORTAZIONE VEEVALIDATE
import { ValidationProvider } from 'vee-validate/dist/vee-validate.full.esm';
import {ValidationObserver} from 'vee-validate';
Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const app = new Vue({
  el: '#root',
  render: h => h(App),
  router
});
