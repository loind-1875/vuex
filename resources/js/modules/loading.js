import axios from 'axios';

class loading {
    constructor () {
        axios.interceptors.request.use((config) => {
            const view = '<div class="loading"><div class="lds-ripple"><div></div><div></div></div></div>';
            $('.app').prepend(view);
            return config;
        }, (error) => {
            $('.app').find('.loading').remove();
            return Promise.reject(error);
        });

        axios.interceptors.response.use((response) => {
            $('.app').find('.loading').remove();
            return response;
        }, (error) => {
            $('.app').find('.loading').remove();
            return Promise.reject(error);
        });
    }
}

export default new loading();
