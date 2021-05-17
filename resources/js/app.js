

//import router from './router';
window.Vue = require('vue').default;
window.axios = require('axios');
Vue.prototype.$http = window.axios;

import HeaderComponent from './components/HeaderComponent.vue';
import NavbarComponent from './components/NavbarComponent.vue';

Vue.component('header-component', HeaderComponent).default;
Vue.component('navbar-component', NavbarComponent).default;

import BackButtonComponent from './components/button/BackButtonComponent.vue';
Vue.component('backbutton-component', BackButtonComponent).default;

import SuccessModal from './components/modal/SuccessModal.vue';
Vue.component('modal-success', SuccessModal).default;

const app = new Vue({
    el: '#app',
    //router: router
});
