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
                <div class="table-overflow">
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
                            <tr v-for="product in products" :key="product.id">
                                <td>
                                    <div class="checkbox">
                                        <input id="selectable2" type="checkbox">
                                        <label for="selectable2"></label>
                                    </div>
                                </td>
                                <td>{{ product.name }}</td>
                                <td><span class="badge badge-pill badge-warning">{{ product.status }}</span></td>
                                <td>{{ product.price }}</td>
                                <td>{{ product.old_price }}</td>
                                <td>{{ product.star }}</td>
                                <td>{{ product.view }}</td>
                                <td class="text-center">{{ product.is_trending }}</td>
                                <td>{{ product.detail }}</td>
                                <td>{{ product.post }}</td>
                                <td class="text-center font-size-18">
                                    <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                    <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';
    export default {
        name: 'ListProduct',
        data: function () {
            return {

            };
        },
        computed: {
            ...mapState(['products']),
        },
        created: function () {
            this.$store.dispatch('fetch');
        }
    }
</script>
