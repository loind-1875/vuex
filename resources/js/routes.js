import CreateProduct from './components/Product/CreateProduct'
// import EditUser from './components/EditUser'
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
    }
    // {
    //     path: '/users/edit/:id',
    //     component: EditUser,
    //     name: 'users.edit',
    // },
];

export default routes;
