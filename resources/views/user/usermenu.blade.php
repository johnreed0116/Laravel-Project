<a class="dropdown-item" href="{{ route('user_profile') }}"><i style="margin-right: 20px;" class="fas fa-user-cog"></i><b>My Profile</b></a>
@php
    use Illuminate\Support\Facades\Auth;
    $userRoles = Auth::user()->roles->pluck('name');
@endphp
@auth
    @if($userRoles->contains('admin'))
        <a class="dropdown-item" href="{{ route('admin_home') }}"><i style="margin-right: 20px;" class="fas fa-shield-alt"></i><b>Admin Panel</b></a>
    @endif
@endauth
<a class="dropdown-item" href="{{ route('user_content') }}"><i style="margin-right: 20px;" class="fas fa-clone"></i><b>My Contents</b></a>
<a class="dropdown-item" href="{{ route('user_comment') }}"><i style="margin-right: 20px;" class="fas fa-comments"></i><b>My Comments</b></a>
<form method="POST" action="{{ route('logout') }}">@csrf<button style="cursor:pointer; outline:none;" class="dropdown-item" href="" type="submit"><i style="margin-right: 20px;" class="fas fa-user-times"></i><b>Logout</b></button></form>
