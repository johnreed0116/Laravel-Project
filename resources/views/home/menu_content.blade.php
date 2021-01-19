@extends('layouts.home')

@section('title', $menu->title)
@section('description', $menu->description)
@section('keywords', $menu->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title" style="background: url({{ Storage::url($menu->image) }}) no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> {{ $menu->title }} </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        @if(\App\Models\Menu::where('id','=',$menu->parent_id)->first() != null)
                            <span style="color: white;">{{ \App\Models\Menu::where('id','=',$menu->parent_id)->first()->title }}</span>
                        @else
                            <a href="{{ route('home') }} ">Home</a>
                        @endif
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
                                Posted on {{ $rs->created_at->format('Y-m-d') }} by <span style="color: dodgerblue;">{{ $rs->user->name }}</span>
                            </div>
                            <h2 class="card-title">{{ $rs->title }}</h2>
                            <p class="card-text">{{ $rs->description }}</p>
                            <a href="{{ route('content', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}" class="btn btn-primary">Continue &rarr;</a>
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

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
