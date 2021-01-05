<!-- Navigation -->

@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets')}}/images/logo.png" alt="logo" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                @foreach($parentMenus->sortBy('id') as $rs)

                @if(count($rs->children)==0)
                    <li class="nav-item">
                        <a class="nav-link" href="">{{$rs->title}}</a>
                    </li>
                @endif

                @if(count($rs->children)!=0)
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{$rs->title}} <i class="fas fa-sort-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            @if(count($rs->children))
                                @include('home.menutree',['children'=> $rs->children])
                            @endif
                        </div>
                    </li>
                @endif

                @endforeach

                    <li class="nav-item">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b> {{ Auth::user()->name }} </b><i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{ route('admin_logout') }}"><i style="margin-right: 20px;" class="fas fa-user-times"></i><b>Logout</b></a>
                            </div>
                        </li>
                        @endauth
                        @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="margin-right: 20px;" class="fas fa-user"></i><b> Login / Join </b><i class="fas fa-sort-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                    <a class="dropdown-item" href="{{ route('admin_login') }}"><i style="margin-right: 20px;" class="fas fa-user-lock"></i><b>Login</b></a>
                                    <a class="dropdown-item" href=""><i style="margin-right: 20px;" class="fas fa-user-plus"></i><b>Register</b></a>
                                </div>
                            </li>
                        @endguest
                    </li>

            </ul>
        </div>
    </div>
</nav>
