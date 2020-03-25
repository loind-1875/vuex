<template>
    <div class="side-nav expand-lg">
        <div class="side-nav-inner">
            <ul class="side-nav-menu scrollable">
                <li class="side-nav-header">
                    <span>Navigation</span>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                        <span class="title">Dashboard</span>
                        <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="active">
                            <a href="index.html">Default</a>
                        </li>
                        <li>
                            <a href="index-analytical.html">Analytical</a>
                        </li>
                        <li>
                            <a href="index-bank.html">Bank</a>
                        </li>
                        <li>
                            <a href="index-saas.html">Saas</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown" :class="['open', {active: $route.name === 'products.*'}]">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="mdi mdi-image-filter-drama"></i>
                        </span>
                        <span class="title">Product</span>
                        <span class="arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <router-link class="nav-link" :to="{name: 'products.index'}">List product</router-link>
                        </li>
                        <li>
                            <router-link class="nav-link" :to="{name: 'products.create'}">Add new</router-link>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown" :class="['open', {active: $route.name === 'category.*'}]">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="mdi mdi-vector-arrange-above"></i>
                        </span>
                        <span class="title">Category</span>
                        <span class="arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <router-link class="nav-link" :to="{name: 'category.index'}">List Category</router-link>
                        </li>
                        <li>
                            <router-link class="nav-link" :to="{name: 'category.create'}">Add New</router-link>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Sidebar",
    }
</script>
