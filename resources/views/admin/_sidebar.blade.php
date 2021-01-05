<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('admin_home') }}">
            <img src="{{ asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
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
                        <i class="fas fa-table"></i>Menu</a>
                </li>
                <li>
                    <a class="js-arrow" href="{{ route('admin_content') }}">
                        <i class="fas fa-chart-bar"></i>Content</a>
                </li>
                <li>
                    <a class="js-arrow" href="{{ route('admin_setting') }}">
                        <i class="fas fa-wrench"></i>Setting</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
