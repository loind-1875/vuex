<template>
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Create Category</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Category</a>
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
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="text-sm-right">
                                                <button type="submit" class="btn btn-gradient-success">Create Category</button>
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
        name: 'CreateCategory',
        data: function () {
            return {
                name: null,
            }
        },
        methods: {
            add: function () {
                this.$store.dispatch('category/addCategory', {
                    name: this.name,
                });
                this.$router.push({name: 'category.index'});
            }
        }
    }
</script>

<style>
    .form-control {
        margin-bottom: 5px;
    }
</style>
