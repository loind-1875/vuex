<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="25" src="client/img/logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                    @if (Session::get('website_language') === 'cn')
                                       <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('client/img/blank.gif') }}" class="flag flag-cn" alt="China" />
                                            China
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                    @elseif (Session::get('website_language') === 'en')
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('client/img/blank.gif') }}" class="flag flag-us" alt="English" />
                                            English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                    @else
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('client/img/blank.gif') }}" class="flag flag-vn" alt="Việt Nam" />
                                            Việt Nam
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                    @endif
                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                        <a class="dropdown-item" href="{!! route('client.change_language', ['vi']) !!}">
                                            <img src="{{ asset('client/img/blank.gif') }}" class="flag flag-vn" alt="Việt Nam" />
                                            Việt Nam
                                        </a>
                                        <a class="dropdown-item" href="{!! route('client.change_language', ['en']) !!}">
                                            <img src="{{ asset('client/img/blank.gif') }}" class="flag flag-us" alt="English" />
                                            English
                                        </a>
                                        <a class="dropdown-item" href="{!! route('client.change_language', ['cn']) !!}">
                                            <img src="{{ asset('client/img/blank.gif') }}" class="flag flag-cn" alt="China" />
                                            China
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-nav-features">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="{{ route('client.search') }}" method="GET">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="keyword" type="search" value="" placeholder="Search..." required>
                                            <span class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="/">
                                                {{ __('home.header.home') }}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('client.about') }}">
                                                {{ __('home.header.about') }}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('client.category', parseLink($chemistry)) }}">
                                                {{ $chemistry->name }}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('client.category', parseLink($engine)) }}">
                                                {{ $engine->name }}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('client.recruitment') }}">
                                                {{ __('home.header.recruitment') }}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('client.post') }}">
                                                {{ __('home.header.news') }}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('client.contact') }}">
                                                {{ __('home.header.contact') }}
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
