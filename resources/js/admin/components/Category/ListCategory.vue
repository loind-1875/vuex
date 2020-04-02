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
                <div class="table-overflow" v-if="listCategory.length" >
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
                        <tr v-for="category in listCategory" :key="category.id">
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
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dt-opt_info" role="status" aria-live="polite">
                                Showing {{ from }} to {{ to }} of {{ total }} entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="paging_simple_numbers" id="dt-opt_paginate">
                                <ul class="pagination">
                                    <li
                                        :class="{'disabled': current_page === 1}"
                                        class="paginate_button page-item previous"
                                        id="dt-opt_previous"
                                    >
                                        <a @click="getCategoryByPage(prev_page_url)" aria-controls="dt-opt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item" :class="{'active disabled': current_page === 1}">
                                        <a @click="getCategoryByPage(first_page_url)" aria-controls="dt-opt" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li
                                        class="paginate_button page-item"
                                        :class="{'active disabled': current_page === 2}"
                                        v-if="last_page > 1"
                                    >
                                        <a @click="getCategoryByPage(path + '?page=2')" aria-controls="dt-opt" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li
                                        :class="{'disabled': last_page === current_page}"
                                        class="paginate_button page-item next"
                                        id="dt-opt_next"
                                    >
                                        <a @click="getCategoryByPage(next_page_url)" aria-controls="dt-opt" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- modal confirm delete -->
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

                <div v-else>
                    <p class="text-center">No data</p>
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
                listCategory: [],
                next_page_url: '',
                prev_page_url: '',
                first_page_url: '',
                last_page_url: '',
                current_page: null,
                last_page: null,
                to: null,
                from: null,
                total: null,
                path: '',
            };
        },
        computed: {
            ...mapState('category', {
                categories: 'categories'
            }),
        },
        created: function () {
            this.$store.dispatch('category/fetch')
                .then(() => this.makeData());
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
            },
            getCategoryByPage: function (url) {
                this.$store.dispatch('category/fetchPage', url)
                    .then(() => this.makeData());
            },
            makeData: function () {
                this.listCategory = this.categories.data;
                this.next_page_url = this.categories.next_page_url;
                this.prev_page_url = this.categories.prev_page_url;
                this.last_page_url = this.categories.last_page_url;
                this.first_page_url = this.categories.first_page_url;
                this.current_page = this.categories.current_page;
                this.last_page = this.categories.last_page;
                this.to = this.categories.to;
                this.from = this.categories.from;
                this.total = this.categories.total;
                this.path = this.categories.path;
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
