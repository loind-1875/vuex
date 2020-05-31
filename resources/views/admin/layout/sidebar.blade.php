<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="index.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Default</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">CRM</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Analytics</span>
                                <span class="pcoded-badge label label-info ">NEW</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-product-hunt"></i></span>
                        <span class="pcoded-mtext">Sản phẩm</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('products.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách sản phẩm</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('products.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới sản phẩm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                        <span class="pcoded-mtext">Danh mục</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('categories.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách danh mục</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('categories.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới danh mục</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-newspaper-o"></i></span>
                        <span class="pcoded-mtext">Tin tức</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('news.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách tin tức</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('news.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới tin tức</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-newspaper-o"></i></span>
                        <span class="pcoded-mtext">Tin tuyển dụng</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('recruitment.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách tin tuyển dụng</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('recruitment.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới tin tuyển dụng</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
