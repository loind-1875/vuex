<template>
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">List Category</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Category</a>
                    <span class="breadcrumb-item active">List</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info-gradient" v-if="message">
                    <div class="d-flex align-items-center justify-content-start">
                        <span class="alert-icon">
                            <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                        <span><strong>Success!</strong> {{ message }}</span>
                    </div>
                </div>
                <div class="table-overflow" v-if="categories.length" >
                    <table class="table table-xl border">
                        <thead class="thead-light">
                        <tr>
                            <th>
                                <div class="checkbox">
                                    <input id="select_all" type="checkbox" class="checkAll" name="checkAll">
                                    <label for="select_all"></label>
                                </div>
                            </th>
                            <th scope="col">Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="category in categories" :key="category.id">
                            <td>
                                <div class="checkbox">
                                    <input :id="`selectone${category.id}`" type="checkbox">
                                    <label :for="`selectone${category.id}`"></label>
                                </div>
                            </td>
                            <td>{{ category.name }}</td>
                            <td class="text-center font-size-18">
                                <router-link class="text-gray m-r-5" :to="`/admin/categories/edit/${category.id}`"><i class="ti-pencil"></i></router-link>
                                <a data-toggle="modal" data-target="#modal-sm" @click="getCategory(category)"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div v-else>
                        <p class="text-center">No data</p>
                    </div>
                    <div class="modal fade" id="modal-sm">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="m-b-15">Are you sure?</h4>
                                    <p>Delete category {{ name }}</p>
                                    <div class="m-t-20 text-right">
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" data-dismiss="modal" @click="deleteCategory">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        name: 'ListCategory',
        data: function () {
            return {
                name: '',
                id: null,
                message: '',
            };
        },
        computed: {
            ...mapState('category', {
                categories: 'categories'
            }),
        },
        created: function () {
            this.$store.dispatch('category/fetch');
        },
        methods: {
            deleteCategory: function () {
                this.$store.dispatch('category/deleteCategory', this.id)
                    .then(() => {
                        this.message = 'Deleted ' + this.name;
                    })
            },
            getCategory: function (product) {
                this.name = product.name;
                this.id = product.id;
            }
        }
    }
</script>

<style>
    a {
        cursor: pointer;
    }
    #dt-opt_paginate {
        overflow: auto;
    }
    ul.pagination {
        float: right;
    }
</style>
