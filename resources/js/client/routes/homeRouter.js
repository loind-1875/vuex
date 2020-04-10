const homeRouter = [
    {
        path: '/',
        component: () => import(/* webpackChunkName: "client/components/home" */ '@/client/components/Home/Home'),
        name: 'home'
    }
];

export default homeRouter;
