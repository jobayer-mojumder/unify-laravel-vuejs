require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter);

const Home = require('./components/HomeComponent.vue');
const About = require('./components/AboutComponent.vue');

Vue.component('header-component', require('./components/include/HeaderComponent.vue'));
Vue.component('footer-component', require('./components/include/FooterComponent.vue'));

const routes = [
    {
        path: '/',
        component: Home, 
    },
    {
        path: '/about',
        component: About, 
    },
];

const router = new VueRouter({
    routes,
});

const app = new Vue({
    el: '#app',
    router,
});
