@php
  $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<!-- Navigation -->
<header>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="social-media">
                        <ul>
                            @if($setting->facebook != null)<li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>@endif
                            @if($setting->instagram != null)<li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a></li>@endif
                            @if($setting->twitter != null)<li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>@endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-details">
                        <ul>
                            <li><i class="fas fa-phone fa-rotate-90"></i> {{ $setting->phone }}</li>
                            <li><i class="fas fa-map-marker-alt"></i> {{ $setting->address }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img width="200px" src="{{ asset('assets')}}/images/website_logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('references') }}">References</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>

                    <li class="nav-item">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b> {{ Auth::user()->name }} </b><i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                @include('user.usermenu')
                            </div>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="margin-left: 10px;" class="fas fa-user"></i><b> Login / Join </b><i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{ route('login') }}"><i style="margin-right: 20px;" class="fas fa-user-lock"></i><b>Login</b></a>
                                <a class="dropdown-item" href="{{ route('register') }}"><i style="margin-right: 20px;" class="fas fa-user-plus"></i><b>Register</b></a>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

</header>
