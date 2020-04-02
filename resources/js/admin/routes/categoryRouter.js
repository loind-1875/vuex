const routes = [
    {
        path: '/admin/categories',
        name: 'category.index',
        component: () => import(/* webpackChunkName: "admin/js/categoryIndex" */ '@/admin/components/Category/ListCategory')
    },
    {
        path: '/admin/categories/create',
        name: 'category.create',
        component: () => import(/* webpackChunkName: "admin/js/categoryCreate" */ '@/admin/components/Category/CreateCategory')
    },
    {
        path: '/admin/categories/edit/:id',
        name: 'category.edit',
        component: () => import(/* webpackChunkName: "admin/js/categoryEdit" */ '@/admin/components/Category/EditCategory')
    }
];

export default routes;
