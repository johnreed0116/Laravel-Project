
<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap" style="float: right;">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            @auth
                            <div class="image">
                                <img style="height: 100%; width: 100%;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <img style="height: 100%; width: 100%;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('user_profile') }}">
                                            <i class="zmdi zmdi-account"></i>My Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('admin_setting') }}">
                                            <i class="zmdi zmdi-settings"></i>Settings</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('admin_logout') }}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->
