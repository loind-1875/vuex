import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {RESOURCE_CATEGORY} from '../api/adminApi';

Vue.use(Vuex);

const categoryStore = {
    namespaced: true,
    state: {
        category: {},
        categories: [],
    },
    mutations: {
        FETCH (state, categories) {
            state.categories = categories;
        },
        FETCH_ONE (state, category) {
            state.category = category;
        }
    },
    actions: {
        fetch ({commit}) {
            return axios.get(RESOURCE_CATEGORY)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        fetchOne ({commit}, id) {
            return axios.get(`${RESOURCE_CATEGORY}/${id}`)
                .then(response => commit('FETCH_ONE', response.data))
                .catch()
        },
        fetchPage({ commit }, url) {
            return axios.get(url)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        addCategory ({}, category) {
            return axios.post(`${RESOURCE_CATEGORY}`, {
                name: category.name,
            }).then();
        },
        editCategory ({}, category) {
            return axios.put(`${RESOURCE_CATEGORY}/${category.id}`, {
                name: category.name
            })
                .then()
                .catch();
        },
        deleteCategory ({}, id) {
            return axios.delete(`${RESOURCE_CATEGORY}/${id}`)
                .then(() => this.dispatch('category/fetch'))
                .catch();
        },
        getAll ({commit}) {
            return axios.get(`${RESOURCE_CATEGORY}-all`)
                .then(response => commit('FETCH', response.data))
                .catch();
        }
    }
};

export default categoryStore;
