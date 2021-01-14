@extends('layouts.home')

@section('title', 'My Profile')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> My Profile </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> My Profile </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">
                    @include('profile.show')
                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4 blog-right-side">

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Menu</h5>
                        <div class="card-body">
                            @include('user.usermenu')
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
