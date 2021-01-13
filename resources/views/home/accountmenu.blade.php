<!-- Sidebar Widgets Column -->
<div class="col-md-4 blog-right-side">

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Menu</h5>
        <div class="card-body">
            <a class="dropdown-item" href="{{ route('profile') }}"><i style="margin-right: 20px;" class="fas fa-user-cog"></i><b>My Account</b></a>
            <a class="dropdown-item" href=""><i style="margin-right: 20px;" class="fas fa-clone"></i><b>My Contents</b></a>
            <a class="dropdown-item" href="{{ route('comment') }}"><i style="margin-right: 20px;" class="fas fa-comments"></i><b>My Comments</b></a>
            <a class="dropdown-item" href="{{ route('admin_logout') }}"><i style="margin-right: 20px;" class="fas fa-user-times"></i><b>Logout</b></a>
        </div>
    </div>

</div>
