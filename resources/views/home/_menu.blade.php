@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div>
            <ul class="navbar-nav ml-auto">

                @foreach($parentMenus->sortBy('id') as $rs)

                    @if(count($rs->children->where('status','=','True'))==0)
                        <li class="nav-item" style="margin-right: 10px;">
                            <a class="nav-link" href="{{ route('menucontent', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}"><div class="hover-item">{{$rs->title}}</div></a>
                        </li>
                    @endif

                    @if(count($rs->children->where('status','=','True'))!=0)
                    <li class="nav-item dropdown" style="margin-right: 10px;">
                        <a class="nav-link" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"> <div class="hover-item">{{$rs->title}} <i style="margin-left: 5px;" class="fas fa-sort-down"></i></div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            @if(count($rs->children->where('status','=','True')))
                                @foreach($rs->children->sortBy('id') as $submenu)
                                    <a class="dropdown-item" href="{{ route('menucontent', ['id'=>$submenu->id, 'slug'=>$submenu->slug]) }}"><div class="hover-item-dark">{{$submenu->title}}</div></a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    @endif

                @endforeach

            </ul>
        </div>
    </div>
</nav>


