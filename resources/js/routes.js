import CreateProduct from './components/Product/CreateProduct'
import EditProduct from './components/Product/EditProduct'
import ListProduct from './components/Product/ListProduct'

const routes = [
    {
        path: '/admin/products',
        component: ListProduct,
        name: 'products.index',
    },
    {
        path: '/admin/products/create',
        component: CreateProduct,
        name: 'products.create',
    },
    {
        path: '/admin/products/edit/:id',
        component: EditProduct,
        name: 'products.edit',
    },
];

export default routes;
