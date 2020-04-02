<template>
        <div class="app header-default side-nav-dark">
            <div class="layout">
                <admin-header></admin-header>
                <sidebar/>
                <div class="content-wrapper">
                    <div class="page-container">
                        <div class="main-content">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    import AdminHeader from "./AdminHeader";
    import Sidebar from "./Sidebar";
    import Dashboard from "./Dashboard";
    require('@/admin/modules/loading');

    export default {
        name: "Admin",
        components: {
            AdminHeader,
            Sidebar,
            Dashboard
        }
    }
</script>
