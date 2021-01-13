<div class="card my-4">
    <h5 class="card-header">Menu</h5>
    <div class="card-body">
        <a class="dropdown-item" href="{{ route('menucontent', ['id'=>\App\Models\Menu::where('slug','=','announcements')->first()->id, 'slug'=>\App\Models\Menu::where('slug','=','announcements')->first()->slug]) }}"><i style="margin-right: 20px;" class="fas fa-bullhorn"></i><b>Announcements</b></a>
        <a class="dropdown-item" href="{{ route('menucontent', ['id'=>\App\Models\Menu::where('slug','=','events')->first()->id, 'slug'=>\App\Models\Menu::where('slug','=','events')->first()->slug]) }}"><i style="margin-right: 20px;" class="fas fa-calendar-alt"></i><b>Events</b></a>
        <a class="dropdown-item" href="{{ route('menucontent', ['id'=>\App\Models\Menu::where('slug','=','news')->first()->id, 'slug'=>\App\Models\Menu::where('slug','=','news')->first()->slug]) }}"><i style="margin-right: 20px;" class="fas fa-newspaper"></i><b>News</b></a>
    </div>
</div>
