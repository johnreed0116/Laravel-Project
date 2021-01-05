<!-- Navigation -->

@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
    <div class="container">
        <a class="navbar-brand" href="index.html">
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

            </ul>
        </div>
    </div>
</nav>
