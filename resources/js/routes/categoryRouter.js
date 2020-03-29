const routes = [
    {
        path: '/admin/categories',
        name: 'category.index',
        component: () => import(/* webpackChunkName: "admin/js/categoryIndex" */ '@/components/Category/ListCategory')
    },
    {
        path: '/admin/categories/create',
        name: 'category.create',
        component: () => import(/* webpackChunkName: "admin/js/categoryCreate" */ '@/components/Category/CreateCategory')
    },
    {
        path: '/admin/categories/edit/:id',
        name: 'category.edit',
        component: () => import(/* webpackChunkName: "admin/js/categoryEdit" */ '@/components/Category/EditCategory')
    }
];

export default routes;
