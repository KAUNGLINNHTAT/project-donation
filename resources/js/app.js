

import router from './router';

window.Vue = require('vue').default;
window.axios = require('axios');
Vue.prototype.$http = window.axios;

import HeaderComponent from './components/HeaderComponent.vue';
Vue.component('header-component', HeaderComponent).default;
const app = new Vue({
    el: '#app',
    router: router
});
