const routes = [
    {
        path: '/admin/products',
        component: () => import (/* webpackChunkName: "admin/js/productIndex" */ '@/admin/components/Product/ListProduct'),
        name: 'products.index',
    },
    {
        path: '/admin/products/create',
        component: () => import (/* webpackChunkName: "admin/js/productCreate" */ '@/admin/components/Product/CreateProduct'),
        name: 'products.create',
    },
    {
        path: '/admin/products/edit/:id',
        component: () => import (/* webpackChunkName: "admin/js/productEdit" */ '@/admin/components/Product/EditProduct'),
        name: 'products.edit',
    },
];

export default routes;
