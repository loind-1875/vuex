import productRouter from '@/admin/routes/productRouter';
import categoryStore from '@/admin/routes/categoryRouter';

const routes = [
    ...productRouter,
    ...categoryStore,
];

export default routes;
