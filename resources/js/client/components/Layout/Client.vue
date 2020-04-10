<template>
    <div>
        <div id="loader-wrapper">
            <div id="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <div class="tt-promo-fixed">
            <button class="tt-btn-close"></button>
            <div class="tt-img">
                <a href="product.html"><img  src="client/images/loader.svg" data-src="client/images/product/product-14.jpg" alt=""></a>
            </div>
            <div class="tt-description">
                <div class="tt-box-top">
                    <p>
                        Someone purchsed a
                    </p>
                    <p>
                        <a href="#">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit...
                        </a>
                    </p>
                </div>
                <div class="tt-info">
                    14 Minutes ago from  New York, USA
                </div>
            </div>
        </div>
        <client-header></client-header>
        <div id="tt-pageContent">
            <router-view></router-view>
        </div>
        <client-footer></client-footer>
    </div>
</template>
<script>
    import ClientHeader from './ClientHeader';
    import ClientFooter from './ClientFooter';

    export default {
        name: 'Client',
        components: {
            ClientHeader,
            ClientFooter
        }
    }
</script>
