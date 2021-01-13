@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    @include('home._slider')

    <!-- Page Content -->
    <div class="container">
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Welcome to Zonebiz</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                    <h5>Our smart approach</h5>
                    <ul>
                        <li>Sed at tellus eu quam posuere mattis.</li>
                        <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="{{ asset('assets')}}/images/about-img.jpg" alt="" />
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="services-bar">
        <div class="container">
            <h1 style="text-align: center;" class="py-4">Our Best Services</h1>
            <!-- Services Section -->
            <div class="row">
                @foreach($service as $rs)
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

    <div class="blog-slide">
        <div class="container">
            <br>
            <h2>Our Blog</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div id="blog-slider" class="owl-carousel">

                        @foreach($content as $rs)
                        <div class="post-slide">
                            <div class="post-header">
                                <h4 class="title">
                                    <a href="{{ route('content', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}">{{ $rs->title }}</a>
                                </h4>
                                <ul class="post-bar">
                                    <li ><img src="{{ $rs->user->profile_photo_url }}" alt=""><span style="margin-left: 5px;">{{ $rs->user->name }}</span></li>
                                    <li><i class="fa fa-calendar"></i>{{ $rs->created_at->format('Y-m-d') }}</li>
                                </ul>
                            </div>
                            <div class="pic">
                                <img src="{{ Storage::url($rs->image) }}" alt="">
                                <ul class="post-category">
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="">{{ $rs->type }}</a></li>
                                </ul>
                            </div>
                            <p class="post-description">{{ $rs->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container -->

@endsection
