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
                                            <input type="text" class="form-control" v-model="name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Status</label>
                                            <input type="text" class="form-control" v-model="status" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" v-model="price" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Old Price</label>
                                            <input type="number" class="form-control" v-model="old_price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <input type="text" class="form-control" v-model="color" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Detail</label>
                                        <textarea  class="form-control"  id="" cols="100" rows="5" v-model="detail" required></textarea>
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
    export default {
        name: 'CreateProduct',
        data: function () {
            return {
                name: null,
                status: null,
                price: null,
                old_price: null,
                detail: null,
                color: null
            }
        },
        methods: {
            add: function () {
                this.$store.dispatch('addProduct', {
                    name: this.name,
                    status: this.status,
                    price: this.price,
                    old_price: this.old_price,
                    detail: this.detail,
                    color: this.color
                });
                this.$router.push({name: 'products.index'});
            }
        }
    }
</script>
