import productStore from "./store/productStore";
import categoryStore from "./store/categoryStore";
import Vuex from 'vuex';

const stores = new Vuex.Store({
    modules: {
        product: productStore,
        category: categoryStore
    }
});

export default stores;
