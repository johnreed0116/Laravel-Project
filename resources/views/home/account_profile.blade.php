@extends('layouts.home')

@section('title', 'User Profile')
@section('description', '')
@section('keywords', '')

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> My Account </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> My Account </li>
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
                @include('home.accountmenu')
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

    <!-- Contact Us -->
    <div class="touch-line">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-secondary btn-block" href="#"> Contact Us </a>
                </div>
            </div>
        </div>
    </div>

@endsection
