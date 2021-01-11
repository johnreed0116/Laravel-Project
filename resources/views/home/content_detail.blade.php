@extends('layouts.home')

@section('title', $content->title)
@section('description', $content->description)
@section('keywords', $content->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> {{ $content->title }} </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $content->title }}</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-entries">
                    <img class="img-fluid rounded" src="{{ Storage::url($content->image) }}" alt="" />
                    <hr>
                    <!-- Date/Time -->
                    <p>Posted on January 1, 2018 at 18:00 PM</p>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead">{{$content->description}}</p>
                    <p>{!! $content->detail !!}</p>

                    @foreach($imagelist as $rs)
                        <img style="margin-bottom: 20px;" class="img-fluid rounded" src="{{ Storage::url($rs->image) }}" alt="" />
                    @endforeach

                    <hr>
                    <div class="blog-right-side">
                        <!-- Comments Form -->
                        <div class="card my-4">
                            <h5 class="card-header">Leave a Comment:</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Comment -->
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="images/testi_01.png" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4 blog-right-side">

                    <div class="card mb-4">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <form action="{{ route('getcontent') }}" method="post">
                                    @csrf
                                    @livewire('search')
                                </form>
                                @livewireScripts
                            </div>
                        </div>
                    </div>

                    <div class="card my-4">
                        <h5 class="card-header">Menu</h5>
                        <div class="card-body">
                            <a class="dropdown-item" href=""><i style="margin-right: 20px;" class="fas fa-bullhorn"></i><b>Announcements</b></a>
                            <a class="dropdown-item" href=""><i style="margin-right: 20px;" class="fas fa-calendar-alt"></i><b>Events</b></a>
                            <a class="dropdown-item" href=""><i style="margin-right: 20px;" class="fas fa-newspaper"></i><b>News</b></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
