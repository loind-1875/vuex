<template>
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Edit Product</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Product</a>
                    <span class="breadcrumb-item active">Edit</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <form @submit.prevent="edit">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" v-model="product.name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Status</label>
                                            <input type="text" class="form-control" v-model="product.status" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" v-model="product.price" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Old Price</label>
                                            <input type="number" class="form-control" v-model="product.old_price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <input type="text" class="form-control" v-model="product.color" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Detail</label>
                                        <textarea  class="form-control"  id="" cols="100" rows="5" v-model="product.detail" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <label class="control-label">Images</label>
                                            <input type="file" class="form-control" @change="uploadFile" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <multiselect
                                            v-model="product.categories"
                                            :options="categories"
                                            :multiple="true"
                                            :searchable="true"
                                            :close-on-select="false"
                                            :allow-empty="false"
                                            placeholder="Select categories"
                                            label="name"
                                            track-by="name"
                                            :clear-on-select="false"
                                            :preselect-first="true"
                                        >
                                        </multiselect>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="text-sm-right">
                                                <button type="submit" class="btn btn-gradient-success">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        name: 'EditProduct',
        data: function () {
            return {
            }
        },
        beforeCreate() {
            this.$store.dispatch('product/fetchOne', this.$route.params.id);
            this.$store.dispatch('category/getAll');
        },
        computed: {
            ...mapState('product', {
                product: 'product'
            }),
            ...mapState('category', {
                categories: 'categories'
            })
        },
        methods: {
            edit: function () {
                this.$store.dispatch('product/editProduct', this.product);
                this.$router.push({name: 'products.index'});
            },
            uploadFile: function (event) {
                this.product.image = event.target.files[0];
            }
        }
    }
</script>
