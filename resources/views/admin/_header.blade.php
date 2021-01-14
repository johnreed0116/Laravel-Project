    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <a style="color: cornflowerblue; font-size: 15pt;" href="{{ route('admin_home') }}"><i style="margin-right: 10px;" class="fas fa-shield-alt"></i> Admin Panel </a>
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
                @include('admin.adminmenu')
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

