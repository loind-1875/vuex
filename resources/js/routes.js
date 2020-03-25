import productRouter from '@/routes/productRouter';
import categoryStore from '@/routes/categoryRouter';

const routes = [
    ...productRouter,
    ...categoryStore,
];

export default routes;
