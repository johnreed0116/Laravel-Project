@extends('layouts.home')

@section('title', 'Services')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Services </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"> Services </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 style="text-align: center;" class="py-4">Our All Services</h1>
        <img class="img-fluid rounded mb-4" src="{{ asset('assets')}}/images/services-big.jpg" alt="">
    </div>
    <div class="services-bar">
        <div class="container">
            <!-- Services Section -->
            <div class="row">
                @foreach($servicelist as $rs)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="{{ Storage::url($rs->image) }}" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> {{ $rs->title }} </h4>
                            <p class="card-text"> {{ $rs->description }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
