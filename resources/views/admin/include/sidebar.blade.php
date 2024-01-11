<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">
        <li class="d-none d-lg-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Поиск..."
                            id="top-search"
                        />
                        <button class="btn input-group-text" type="submit">
                            <i class="fe-search"></i>
                        </button>
                    </div>
                    {{--                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">--}}
                    {{--                        <!-- item-->--}}
                    {{--                        <div class="dropdown-header noti-title">--}}
                    {{--                            <h5 class="text-overflow mb-2">Found 22 results</h5>--}}
                    {{--                        </div>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <a--}}
                    {{--                            href="javascript:void(0);"--}}
                    {{--                            class="dropdown-item notify-item"--}}
                    {{--                        >--}}
                    {{--                            <i class="fe-home me-1"></i>--}}
                    {{--                            <span>Analytics Report</span>--}}
                    {{--                        </a>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <a--}}
                    {{--                            href="javascript:void(0);"--}}
                    {{--                            class="dropdown-item notify-item"--}}
                    {{--                        >--}}
                    {{--                            <i class="fe-aperture me-1"></i>--}}
                    {{--                            <span>How can I help you?</span>--}}
                    {{--                        </a>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <a--}}
                    {{--                            href="javascript:void(0);"--}}
                    {{--                            class="dropdown-item notify-item"--}}
                    {{--                        >--}}
                    {{--                            <i class="fe-settings me-1"></i>--}}
                    {{--                            <span>User profile settings</span>--}}
                    {{--                        </a>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <div class="dropdown-header noti-title">--}}
                    {{--                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="notification-list">--}}
                    {{--                            <!-- item-->--}}
                    {{--                            <a--}}
                    {{--                                href="javascript:void(0);"--}}
                    {{--                                class="dropdown-item notify-item"--}}
                    {{--                            >--}}
                    {{--                                <div class="d-flex align-items-start">--}}
                    {{--                                    <img--}}
                    {{--                                        class="d-flex me-2 rounded-circle"--}}
                    {{--                                        src="../assets/images/users/user-2.jpg"--}}
                    {{--                                        alt="Generic placeholder image"--}}
                    {{--                                        height="32"--}}
                    {{--                                    />--}}
                    {{--                                    <div class="w-100">--}}
                    {{--                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>--}}
                    {{--                                        <span class="font-12 mb-0">UI Designer</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}

                    {{--                            <!-- item-->--}}
                    {{--                            <a--}}
                    {{--                                href="javascript:void(0);"--}}
                    {{--                                class="dropdown-item notify-item"--}}
                    {{--                            >--}}
                    {{--                                <div class="d-flex align-items-start">--}}
                    {{--                                    <img--}}
                    {{--                                        class="d-flex me-2 rounded-circle"--}}
                    {{--                                        src="../assets/images/users/user-5.jpg"--}}
                    {{--                                        alt="Generic placeholder image"--}}
                    {{--                                        height="32"--}}
                    {{--                                    />--}}
                    {{--                                    <div class="w-100">--}}
                    {{--                                        <h5 class="m-0 font-14">Jacob Deo</h5>--}}
                    {{--                                        <span class="font-12 mb-0">Developer</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </form>
        </li>

        <li class="dropdown d-inline-block d-lg-none">
            <a
                class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="false"
                aria-expanded="false"
            >
                <i class="fe-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                <form class="p-3">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search ..."
                        aria-label="Recipient's username"
                    />
                </form>
            </div>
        </li>

        <li class="dropdown notification-list">
            <a
                href="javascript:void(0);"
                class="nav-link right-bar-toggle waves-effect waves-light"
            >
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
              <img src="{{asset('assets_admin/images/logo-sm.png')}}" alt="" height="22"/>
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets_admin/images/logo-light.png')}}" alt="" height="16"/>
            </span>
        </a>
        <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
              <img src="{{asset('assets_admin/images/logo-sm.png')}}" alt="" height="22"/>
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets_admin/images/logo-dark.png')}}" alt="" height="16"/>
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">@yield('title')</h4>
        </li>
    </ul>

    <div class="clearfix"></div>
</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
            <img
                src="{{asset('assets_admin/images/users/user-1.jpg')}}"
                alt="user-img"
                title="Admin"
                class="rounded-circle img-thumbnail avatar-md"
            />
            <div class="dropdown">
                <a
                    href="#"
                    class="user-name dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >Admin</a>
                <div class="dropdown-menu user-pro-dropdown">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>

            {{--            <p class="text-muted left-user-info">Admin</p>--}}

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-muted left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Меню</li>

                <li>
                    <a href="{{route('admin.genre.index')}}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Жанры</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.country.index')}}">
                        <i class="fe-map"></i>
                        <span>Страны</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.career.index')}}">
                        <i class="fe-user"></i>
                        <span>Карьера</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.creator_and_actor.index')}}">
                        <i class="fe-user"></i>
                        <span>Создатели и актеры</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.movie.index')}}">
                        <i class="fe-play"></i>
                        <span>Фильмы</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.user.index')}}">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>Пользователи</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
