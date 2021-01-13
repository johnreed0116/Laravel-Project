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
                    <p>Posted on {{ $content->created_at }} by <span style="color: dodgerblue;">{{ $content->user->name }}</span></p>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead">{{$content->description}}</p>
                    <p>{!! $content->detail !!}</p>

                    @foreach($imagelist as $rs)
                        <img style="margin-bottom: 20px;" class="img-fluid rounded" src="{{ Storage::url($rs->image) }}" alt="" />
                    @endforeach

                    <hr>
                    @livewire('comment', ['id' => $content->id])

                    <div id="success">@include('home.message')</div>

                    <br>
                    @foreach($comment as $rs)
                    <!-- Comment -->
                    <div class="media mb-4">
                        <img style="height: 75px; width: 75px;" class="d-flex mr-3 rounded-circle" src="{{ \App\Models\User::where('id','=',$rs->user_id)->first()->profile_photo_url }}" alt="">
                        <div class="media-body">
                            <h5 class="mt-0"></h5>
                            <p>Commented on {{ $rs->created_at }} by <span style="color: dodgerblue;">{{ $rs->user->name }}</span></p>
                            {{ $rs->comment }}
                            <hr>
                        </div>
                    </div>
                    @endforeach
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

                    @include('home.blogmenu')
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
