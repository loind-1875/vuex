<template>
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">List Product</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Product</a>
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
                <div class="table-overflow" v-if="listProducts.length" >
                    <table class="table table-xl border">
                        <thead class="thead-light">
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                        <label for="selectable1"></label>
                                    </div>
                                </th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Old Price</th>
                                <th scope="col">Star</th>
                                <th scope="col">View</th>
                                <th scope="col">Trending</th>
                                <th class="text-center" scope="col">Detail</th>
                                <th scope="col">Post</th>
                                <th class="text-center" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="product in listProducts" :key="product.id">
                                <td>
                                    <div class="checkbox">
                                        <input id="selectable2" type="checkbox">
                                        <label for="selectable2"></label>
                                    </div>
                                </td>
                                <td>{{ product.name }}</td>
                                <td><span class="badge badge-pill badge-warning">{{ product.status }}</span></td>
                                <td>{{ Until.formatNumber(product.price) }}</td>
                                <td>{{ Until.formatNumber(product.old_price) }}</td>
                                <td>{{ product.star }}</td>
                                <td>{{ Until.formatNumber(product.view) }}</td>
                                <td class="text-center">{{ product.is_trending }}</td>
                                <td>{{ product.detail }}</td>
                                <td>{{ product.post }}</td>
                                <td class="text-center font-size-18">
                                    <router-link class="text-gray m-r-5" :to="`/admin/products/edit/${product.id}`"><i class="ti-pencil"></i></router-link>
                                    <a data-toggle="modal" data-target="#modal-sm" @click="getProduct(product)"><i class="ti-trash"></i></a>
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
                                        <a @click="getProductByPage(prev_page_url)" aria-controls="dt-opt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item" :class="{'active disabled': current_page === 1}">
                                        <a @click="getProductByPage(first_page_url)" aria-controls="dt-opt" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item" :class="{'active disabled': current_page === 2}">
                                        <a @click="getProductByPage(path + '?page=2')" aria-controls="dt-opt" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li
                                        :class="{'disabled': last_page === current_page}"
                                        class="paginate_button page-item next"
                                        id="dt-opt_next"
                                    >
                                        <a @click="getProductByPage(next_page_url)" aria-controls="dt-opt" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- modal confirm -->
                    <div class="modal fade" id="modal-sm">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="m-b-15">Are you sure?</h4>
                                    <p>Delete product {{ name }}</p>
                                    <div class="m-t-20 text-right">
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" data-dismiss="modal" @click="deleteProduct">Delete</button>
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
    import { Until } from "../../helper/until";

    export default {
        name: 'ListProduct',
        data: function () {
            return {
                name: '',
                id: null,
                message: '',
                Until,
                listProducts: [],
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
            ...mapState('product', {
                products: 'products'
            }),
        },
        created: function () {
            this.$store.dispatch('product/fetch')
                .then(() => this.makeData());
        },
        methods: {
            deleteProduct: function () {
                this.$store.dispatch('product/deleteProduct', this.id)
                    .then(() => {
                        this.message = 'Deleted ' + this.name;
                    })
            },
            getProduct: function (product) {
                this.name = product.name;
                this.id = product.id;
            },
            getProductByPage: function (url) {
                this.$store.dispatch('product/fetchPage', url)
                    .then(() => this.makeData());
            },
            makeData: function () {
                this.listProducts = this.products.data;
                this.next_page_url = this.products.next_page_url;
                this.prev_page_url = this.products.prev_page_url;
                this.last_page_url = this.products.last_page_url;
                this.first_page_url = this.products.first_page_url;
                this.current_page = this.products.current_page;
                this.last_page = this.products.last_page;
                this.to = this.products.to;
                this.from = this.products.from;
                this.total = this.products.total;
                this.path = this.products.path;
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
