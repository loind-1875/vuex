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
                <div class="table-overflow">
                    <table class="table table-xl border" v-if="products.length" >
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
                            <tr v-for="product in products" :key="product.id">
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
                    <div v-else>
                        <p class="text-center">No data</p>
                    </div>
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
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';
    import { Until } from "../../until";

    export default {
        name: 'ListProduct',
        data: function () {
            return {
                name: '',
                id: null,
                message: '',
                Until,
            };
        },
        computed: {
            ...mapState('product', {
                products: 'products'
            }),
        },
        created: function () {
            this.$store.dispatch('product/fetch');
        },
        methods: {
            deleteProduct: function () {
                this.$store.dispatch('product/deleteProduct', this.id)
                    .then(() => {
                        this.message = "Deleted " + this.name;
                    })
            },
            getProduct: function (product) {
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
</style>
