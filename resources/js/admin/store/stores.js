import productStore from "./productStore";
import categoryStore from "./categoryStore";
import Vuex from 'vuex';

const stores = new Vuex.Store({
    modules: {
        product: productStore,
        category: categoryStore
    }
});

export default stores;
