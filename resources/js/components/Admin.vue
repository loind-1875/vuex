<template>
    <div class="wrapper">
        <div class="app header-default side-nav-dark">
            <div class="layout">
                <admin-header></admin-header>
                <sidebar></sidebar>
                <div class="content-wrapper">
<!--                    <section ></section>-->
                    <dashboard></dashboard>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import AdminHeader from "./AdminHeader";
    import Sidebar from "./Sidebar";
    import Dashboard from "./Dashboard";

    export default {
        name: "Admin",
        components: {
            AdminHeader,
            Sidebar,
            Dashboard
        }
    }
</script>
