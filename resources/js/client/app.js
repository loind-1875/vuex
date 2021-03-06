/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
// import Multiselect from 'vue-multiselect';

Vue.component('client', require('@/client/components/Layout/Client.vue'));
Vue.component('client-header', require('@/client/components/Layout/ClientHeader.vue'));
Vue.component('client-footer', require ('@/client/components/Layout/ClientFooter.vue'));
// Vue.component('multiselect', Multiselect);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';
import Client from './components/Layout/Client';
import routes from './routes/routes';
// import stores from './admin/store/stores';


Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: 'history',
});
window.events = new Vue();

// const app = new Vue({
//     el: '#app',
//     template: '<Admin/>',
//     render: h => h(Admin),
//     router,
//     store: stores,
// });

const client = new Vue({
    el: '#client',
    template: '<Client/>',
    render: h => h(Client),
    router,
});
