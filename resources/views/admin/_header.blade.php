    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{ asset('assets')}}/admin/images/icon/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li>
                        <a class="js-arrow" href="{{ route('home') }}">
                            <i class="fas fa-home"></i>Home</a>
                    </li>
                    <li class="active">
                        <a class="js-arrow" href="{{ route('admin_home') }}">
                            <i class="fas fa-chart-line"></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="js-arrow" href="{{ route('admin_menu') }}">
                            <i class="fas fa-table"></i>Menus</a>
                    </li>
                    <li>
                        <a class="js-arrow" href="{{ route('admin_content') }}">
                            <i class="fas fa-chart-bar"></i>Contents</a>
                    </li>
                    <li>
                        <a class="js-arrow" href="{{ route('admin_service') }}">
                            <i class="fas fa-pencil-alt"></i>Services</a>
                    </li>
                    <li>
                        <a class="js-arrow" href="{{ route('admin_message') }}">
                            <i class="fas fa-envelope"></i>Messages</a>
                    </li>
                    <li>
                        <a class="js-arrow" href="{{ route('admin_setting') }}">
                            <i class="fas fa-wrench"></i>Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

