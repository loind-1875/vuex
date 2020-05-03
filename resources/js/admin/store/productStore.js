import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {RESOURCE_PRODUCT} from '../api/adminApi';

Vue.use(Vuex);

const productStore = {
    namespaced: true,
    state: {
        products: [],
        product: {},
    },
    mutations: {
        FETCH(state, products) {
            state.products = products;
        },
        FETCH_ONE(state, product) {
            state.product = product;
        },
    },
    actions: {
        fetch({ commit }) {
            return axios.get(RESOURCE_PRODUCT)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        fetchOne({ commit }, id) {
            axios.get(`${RESOURCE_PRODUCT}/${id}`)
                .then(response => commit('FETCH_ONE', response.data))
                .catch();
        },
        fetchPage({ commit }, url) {
            return axios.get(url)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        deleteProduct({}, id) {
            axios.delete(`${RESOURCE_PRODUCT}/${id}`)
                .then(() => this.dispatch('product/fetch'))
                .catch();
        },
        editProduct({}, formData) {
            console.log(formData.get('id'));
            //edit product image
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            };
            axios.put(`${RESOURCE_PRODUCT}/${formData.get('id')}`, formData, config)
                .then();
        },
        addProduct({}, formData) {
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            };

            axios.post(`${RESOURCE_PRODUCT}`, formData, config)
                .then();
        },
    }
};

export default productStore;
