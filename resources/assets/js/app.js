require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter);

const home = require('./components/HomeComponent.vue').default;
//Vue.component('headerComponent', require('./components/include/HeaderComponent.vue'));
import HeaderComponent from  './components/include/HeaderComponent.vue';

const routes = [
    {
        path: '/',
        component: home, 
    },
];

const router = new VueRouter({
    routes,
});

const app = new Vue({
    el: '#app',
    router,
    components: { 
    	'header-component': HeaderComponent
    },
});
