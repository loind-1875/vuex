<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu {{ Request::segment(2) === 'products' ? 'pcoded-trigger' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-product-hunt"></i></span>
                        <span class="pcoded-mtext">Sản phẩm</span>
                    </a>
                    <ul class="pcoded-submenu" style="{{ Request::segment(2) === 'products' ? 'display: block' : '' }}">
                        <li class="">
                            <a href="{{ route('products.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('products.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ Request::segment(2) === 'categories' ? 'pcoded-trigger' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                        <span class="pcoded-mtext">Danh mục</span>
                    </a>
                    <ul class="pcoded-submenu" style="{{ Request::segment(2) === 'categories' ? 'display: block' : '' }}">
                        <li class="">
                            <a href="{{ route('categories.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('categories.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ Request::segment(2) === 'posts' ? 'pcoded-trigger' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-newspaper-o"></i></span>
                        <span class="pcoded-mtext">Tin tức & tuyển dụng</span>
                    </a>
                    <ul class="pcoded-submenu" style="{{ Request::segment(2) === 'posts' ? 'display: block' : '' }}">
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
                <li class="{{ Request::segment(2) === 'contacts' ? 'pcoded-trigger' : '' }}">
                    <a href="{{ route('contacts.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                        <span class="pcoded-mtext">Danh sách liên hệ</span>
                    </a>
                </li>
                <li class="{{ Request::segment(2) === 'settings' ? 'pcoded-trigger' : '' }}">
                    <a href="{{ route('settings.show') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-cogs"></i></span>
                        <span class="pcoded-mtext">Cài đặt chung</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu {{ Request::segment(2) === 'sliders' ? 'pcoded-trigger' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-sliders"></i></span>
                        <span class="pcoded-mtext">Cài đặt slider</span>
                    </a>
                    <ul class="pcoded-submenu" style="{{ Request::segment(2) === 'sliders' ? 'display: block' : '' }}">
                        <li class="">
                            <a href="{{ route('sliders.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('sliders.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{ Request::segment(2) === 'sliders' ? 'pcoded-trigger' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-comments-o"></i></span>
                        <span class="pcoded-mtext">Phản hồi</span>
                    </a>
                    <ul class="pcoded-submenu" style="{{ Request::segment(2) === 'reviews' ? 'display: block' : '' }}">
                        <li class="">
                            <a href="{{ route('reviews.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('reviews.create') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
