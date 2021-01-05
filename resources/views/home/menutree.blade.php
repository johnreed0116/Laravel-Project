@foreach($children->sortBy('id') as $submenu)
    <a class="dropdown-item" href="">{{$submenu->title}}</a>
@endforeach
