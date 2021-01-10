@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"> Blog Detail </h1>
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active"> Blog Detail </li>
            </ol>
        </div>
    </div>
</div>

<div class="blog-main">
    <div class="container">
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">

            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4 blog-right-side">

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>

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
                <a class="btn btn-lg btn-secondary btn-block" href="#"> Contact Us </a>
            </div>
        </div>
    </div>
</div>

@endsection
