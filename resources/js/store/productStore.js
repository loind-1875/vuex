import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {RESOURCE_PRODUCT} from '../adminApi';

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
        editProduct({}, product) {
            axios.put(`${RESOURCE_PRODUCT}/${product.id}`, {
                name: product.name,
                status: product.status,
                price: product.price,
                old_price: product.old_price,
                star: product.star,
                detail: product.detail,
                color: product.color,
                view: product.view,
                is_trending: product.is_trending,
                categories: product.categories,
            })
                .then(() => this.dispatch('fetch'));
        },
        addProduct({}, product) {
            axios.post(`${RESOURCE_PRODUCT}`, {
                name: product.name,
                status: product.status,
                price: product.price,
                old_price: product.old_price,
                star: product.star,
                detail: product.detail,
                color: product.color,
                categories: product.categories,
            })
                .then();
        }
    }
};

export default productStore;
