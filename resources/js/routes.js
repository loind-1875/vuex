import CreateProduct from './components/Product/CreateProduct'
// import EditUser from './components/EditUser'
// import UserList from './components/UserList'

const routes = [
    // {
    //     path: '/',
    //     component: UserList,
    //     name: 'users.index',
    // },
    {
        path: '/product/create',
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
