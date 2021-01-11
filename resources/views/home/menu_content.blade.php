@extends('layouts.home')

@section('title', $menu->title)
@section('description', $menu->description)
@section('keywords', $menu->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Blog </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"> Blog </a>
                    </li>
                    <li class="breadcrumb-item active">{{ $menu->title }}</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8 blog-entries">

                    @foreach($menucontent as $rs)
                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ Storage::url($rs->image) }}" alt="Card image Blog" />
                        <div class="card-body">
                            <div class="by-post">
                                Posted on January 1, 2018 by <a href="#">Zonebiz</a>
                            </div>
                            <h2 class="card-title">{{ $rs->title }}</h2>
                            <p class="card-text">{{ $rs->description }}</p>
                            <a href="{{ route('content', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}" class="btn btn-primary">Continue &rarr;</a>
                        </div>
                    </div>
                    @endforeach

                    <div class="pagination_bar_arrow">
                        <!-- Pagination -->
                        <ul class="pagination justify-content-center mb-4">
                            <li class="page-item">
                                <a class="page-link" href="#">&larr; Older</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Newer &rarr;</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4 blog-right-side">

                    <div class="card mb-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
									<button class="btn btn-secondary" type="button">Go!</button>
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="card my-4">
                        <h5 class="card-header">Menu</h5>
                        <div class="card-body">
                            <a class="dropdown-item" href="{{ route('menucontent', ['id'=>$menu->id, 'slug'=>$menu->slug]) }}"><i style="margin-right: 20px;" class="fas fa-bullhorn"></i><b>Announcements</b></a>
                            <a class="dropdown-item" href="{{ route('menucontent', ['id'=>$menu->id, 'slug'=>$menu->slug]) }}"><i style="margin-right: 20px;" class="fas fa-calendar-alt"></i><b>Events</b></a>
                            <a class="dropdown-item" href="{{ route('menucontent', ['id'=>$menu->id, 'slug'=>$menu->slug]) }}"><i style="margin-right: 20px;" class="fas fa-newspaper"></i><b>News</b></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
