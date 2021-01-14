<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a style="color: cornflowerblue; font-size: 15pt;" href="{{ route('admin_home') }}"><i style="margin-right: 10px;" class="fas fa-shield-alt"></i> Admin Panel </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
            @include('admin.adminmenu')
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
