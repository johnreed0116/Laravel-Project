@foreach($children->sortBy('id') as $submenu)
    <a class="dropdown-item" href="{{ route($submenu->slug) }}">{{$submenu->title}}</a>
@endforeach
