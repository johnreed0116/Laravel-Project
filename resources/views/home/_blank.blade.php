@extends('layouts.home')

@section('title', 'About Us')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> About Us </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> About Us </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-16">

                </div>
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
                    <a class="btn btn-lg btn-secondary btn-block" href="{{ route('contact') }}"> Contact Us </a>
                </div>
            </div>
        </div>
    </div>

@endsection
