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
import Multiselect from 'vue-multiselect';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin', require('@/admin/components/Layout/Admin.vue'));
Vue.component('admin-header', require('@/admin/components/Layout/AdminHeader.vue'));
Vue.component('sidebar', require('@/admin/components/Layout/Sidebar.vue'));
Vue.component('dashboard', require('@/admin/components/Layout/Dashboard.vue'));
Vue.component('create-product', require ('@/admin/components/Product/CreateProduct'));
Vue.component('list-product', require ('@/admin/components/Product/ListProduct'));
Vue.component('multiselect', Multiselect);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Admin from '@/admin/components/Layout/Admin';
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from '@/admin/routes/routes';
import stores from '@/admin/store/stores';

Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: 'history',
});
window.events = new Vue();

const app = new Vue({
    el: '#app',
    template: '<Admin/>',
    render: h => h(Admin),
    router,
    store: stores,
});
