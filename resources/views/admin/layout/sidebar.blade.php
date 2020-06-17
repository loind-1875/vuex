<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
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
                        <span class="pcoded-mtext">Tin tức & tuyển dụng</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('posts.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('posts.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
