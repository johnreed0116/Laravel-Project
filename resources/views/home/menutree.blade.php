@foreach($children->sortBy('id') as $submenu)
    <a class="dropdown-item" href="{{ route('menucontent', ['id'=>$submenu->id, 'slug'=>$submenu->slug]) }}">{{$submenu->title}}</a>
@endforeach
