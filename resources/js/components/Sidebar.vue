<template>
    <div class="side-nav expand-lg">
        <div class="side-nav-inner">
            <ul class="side-nav-menu scrollable">
                <li class="side-nav-header">
                    <span>Navigation</span>
                </li>
                <li class="nav-item dropdown open">
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
                <li class="nav-item dropdown">
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
                            <a href="email.html">List product</a>
                        </li>
                        <li>
                            <a href="calendar.html">Add news</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
									<i class="mdi mdi-vector-arrange-above"></i>
								</span>
                        <span class="title">UI Elements</span>
                        <span class="arrow">
									<i class="mdi mdi-chevron-right"></i>
								</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="alert.html">Alert</a>
                        </li>
                        <li>
                            <a href="badge.html">Badge</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="cards.html">Cards</a>
                        </li>
                        <li>
                            <a href="colors.html">Colors</a>
                        </li>
                        <li>
                            <a href="grid.html">Grid</a>
                        </li>
                        <li>
                            <a href="icons.html">Icons</a>
                        </li>
                        <li>
                            <a href="lists.html">Lists</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
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
