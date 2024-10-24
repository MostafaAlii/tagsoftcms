<!-- Start Header -->
<header class="app-bar header" id="header">
    <div class="container">
        <div class="header-content">
            <nav class="nav-logo">
                <button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-sm-down" id="mobile_menu" type="button">
                    <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                </button>
                <div class="logo scrollnav">
                    <a href="#home"><img src="{{asset('assets/website/resources/assets/images/agency-logo.png')}}" alt="logo" />Tag-Soft</a>
                </div>
            </nav>
            <nav class="nav-menu">
                <div class="scrollactive-nav show-md-up scrollnav">
                    <ul>
                        <li><a class="btn btn-flat anchor-link waves-effect" href="#">حول</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect" href="#">خدمات</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect" href="#">خبرتنا</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect" href="#">دراسات الحالة</a></li>
                        <li><a class="btn btn-flat anchor-link waves-effect" href="#">اتصل</a></li>
                    </ul>
                </div>
                <div class="menu-setting">
                    <div class="setting">
                        <button class="btn btn-icon waves-effect btn-small m-2 dropdown-trigger" data-target="dropdown_config" type="button" data-align="right">
                            <i class="icon material-icons" id="setting_icon">settings</i>
                        </button>
                        <div class="dropdown-content" id="dropdown_config">
                            <ul class="collection with-header">
                                <li class="collection-header">وضع السمة</li>
                                <li class="collection-item no-hover pl-4">
                                    <div class="flex-menu">
                                        <div class="switch">
                                            <label>ضوء<input id="theme_switcher" type="checkbox" /><span class="lever"></span>داكن</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="collection with-header lang-menu" id="lang_menu">
                                <li class="collection-header">{{ LaravelLocalization::getCurrentLocaleNative() }}</li>
                                <!-- <li class="collection-item lang-list waves-effect avatar">
                                    <a data-lang="ar" href="#">
                                        <div class="flag circle"><i class="ar"></i></div>
                                        <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿العربيّة</span>
                                    </a>
                                </li>
                                <li class="collection-item lang-list waves-effect avatar">
                                    <a data-lang="en" href="#">
                                        <div class="flag circle"><i class="en"></i></div>
                                        <span class="content lang-opt text-truncate">English</span>
                                    </a>
                                </li> -->
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="collection-item lang-list waves-effect avatar">
                                        <a data-lang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <div class="flag circle"><i class="{{ $localeCode }}"></i></div>
                                            <span class="content lang-opt text-truncate">{{ $properties['native'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End Header -->
