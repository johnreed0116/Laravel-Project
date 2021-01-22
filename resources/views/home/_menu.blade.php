@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList();
@endphp

<style>

    @media only screen and (max-width: 960px) {
        .navbar-nav{
            flex-direction: column;
        }

        .container{
            width: 100%;
        }

        .navbar-expand-lg{
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .menuctoggler{
            background-color: cornflowerblue;
        }

        .menuctoggler span{
            color:white;
        }

        .menuctoggler:hover{
            background-color: #FF0055;
        }

    }

    @media only screen and (min-width: 960px) {
        .navbar-nav{
            flex-direction: row;
        }

        .container{
            width: 100%;
        }

        .navbar-expand-lg{
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .menuctoggler{
            background-color: cornflowerblue;
        }

        .menuctoggler span{
            color:white;
        }

        .menuctoggler:hover{
            background-color: #FF0055;
        }

    }

</style>

<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <div class="container">
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
                                </a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button style="display: flex; margin-left: 70%; width: 150px" class="menuctoggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span style="margin-left: auto; margin-right: auto;">
                <span style="margin-right: 5px;" class="navbar-toggler-icon"></span> Menu
            </span>
        </button>
    </nav>

</div>
