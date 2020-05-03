<template>
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Create Product</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Product</a>
                    <span class="breadcrumb-item active">Create</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 offset-sm-2">
                                <form @submit.prevent="add">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Name</label>
                                            <ValidationProvider rules="required" v-slot="{ errors }">
                                                <input type="text" class="form-control" placeholder="product name" v-model="name" required>
                                                <span class="text-danger help">{{ errors[0] }}</span>
                                            </ValidationProvider>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Status</label>
                                            <ValidationProvider rules="required" v-slot="{ errors }">
                                                <input type="text" class="form-control" placeholder="product status" v-model="status" required>
                                                <span class="text-danger help">{{ errors[0] }}</span>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Price</label>
                                            <ValidationProvider rules="required|numeric" v-slot="{ errors }">
                                                <input type="number" class="form-control" placeholder="product price" v-model="price" required>
                                                <span class="text-danger help" v-for="err in errors">{{ err }}</span>
                                            </ValidationProvider>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Old Price</label>
                                            <ValidationProvider rules="required|numeric" v-slot="{ errors }">
                                                <input type="number" class="form-control" placeholder="product old price" v-model="old_price" required>
                                                <span class="text-danger help" v-for="err in errors">{{ err }}</span>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <ValidationProvider rules="required" v-slot="{ errors }">
                                            <input type="text" class="form-control" placeholder="product color" v-model="color" required>
                                            <span class="text-danger help">{{ errors[0] }}</span>
                                        </ValidationProvider>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Detail</label>
                                        <ValidationProvider rules="required" v-slot="{ errors }">
                                            <textarea  class="form-control" placeholder="product detail" id="" cols="100" rows="5" v-model="detail" required></textarea>
                                            <span class="text-danger help">{{ errors[0] }}</span>
                                        </ValidationProvider>
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
                                                v-model="product_category"
                                                :options="categories"
                                                :multiple="true"
                                                :searchable="true"
                                                :close-on-select="false"
                                                :allow-empty="false"
                                                placeholder="Select categories"
                                                label="name"
                                                track-by="name"
                                            >
                                            </multiselect>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="text-sm-right">
                                                <button type="submit" class="btn btn-gradient-success">Create Product</button>
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
    import { ValidationProvider } from 'vee-validate';
    import { extend } from 'vee-validate';
    import { required, numeric } from 'vee-validate/dist/rules';
    import { mapState } from 'vuex';

    extend('required', required);
    extend('numeric', numeric);
    extend('required', {
        ...required,
        message: 'This field is required'
    });

    export default {
        components: {
            ValidationProvider,
        },
        name: 'CreateProduct',
        data: function () {
            return {
                name: null,
                status: null,
                price: null,
                old_price: null,
                detail: null,
                color: null,
                image: null,
                product_category: null,
                categoryIds: [],
            }
        },
        computed: {
            ...mapState('category', {
                categories: 'categories'
            })
        },
        beforeCreate() {
            this.$store.dispatch('category/getAll');
        },
        methods: {
            add: function () {
                this.getIdCategory();
                const formData = this.appendForm();
                this.$store.dispatch('product/addProduct', formData);
                this.$router.push({name: 'products.index'});
            },

            uploadFile: function (event, index) {
                this.image = event.target.files[0];
            },

            getIdCategory: function () {
                this.product_category.map(($item) => {
                    this.categoryIds.push($item.id);
                });
            },

            appendForm: function () {
                const form = new FormData();
                form.append('image', this.image);
                form.append('name', this.name);
                form.append('status', this.status);
                form.append('price', this.price);
                form.append('old_price', this.old_price);
                form.append('star', this.star);
                form.append('detail', this.detail);
                form.append('color', this.color);
                form.append('categories', this.categoryIds);
                form.append('image', this.image);

                return form;
            },
        }
    }
</script>

<style>
</style>
