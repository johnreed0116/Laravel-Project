@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')

<style>
    #owl-demo .item, #owl-demo-1 .item{
        background: #3fbf79;
        padding: 30px 0px;
        margin: 10px;
        color: #FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;
        width: 190px;
    }
    .customNavigation{
        text-align: center;
    }
    .customNavigation a{
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
</style>

@endsection
@section('content')

    @include('home._slider')

    <!-- Page Content -->
    <div class="container">
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                <div style="margin-top: 50px; margin-bottom: 25px; " class="col-lg-16">
                    {!! $setting->homepage !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="blog-slide">
        <div class="container">
            <br>
            <h2>Announcements</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div id="announcements" class="owl-carousel">
                        @foreach($announcement as $rs)
                            <div class="post-slide">
                                <a style="text-decoration: none;" href="{{ route('content', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}">
                                    <div class="post-header">
                                        <h6 style="color: #161616" class="title">
                                            {{ $rs->title }}
                                        </h6>
                                        <ul class="post-bar">
                                            <li ><img src="{{ $rs->user->profile_photo_url }}" alt=""><span style="margin-left: 5px;">{{ $rs->user->name }}</span></li>
                                            <li><i class="fa fa-calendar"></i>{{ $rs->created_at->format('Y-m-d') }}</li>
                                        </ul>
                                    </div>
                                    <div class="pic">
                                        <img src="{{ Storage::url($rs->image) }}" alt="">
                                    </div>
                                    <p class="post-description">{{ $rs->description }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="blog-slide">
        <div class="container">
            <br>
            <h2>News</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div id="news" class="owl-carousel">
                        @foreach($news as $rs2)
                            <div class="post-slide">
                                <a style="text-decoration: none;" href="{{ route('content', ['id'=>$rs2->id, 'slug'=>$rs2->slug]) }}">
                                    <div class="post-header">
                                        <h6 style="color: #161616" class="title">
                                            {{ $rs2->title }}
                                        </h6>
                                        <ul class="post-bar">
                                            <li ><img src="{{ $rs2->user->profile_photo_url }}" alt=""><span style="margin-left: 5px;">{{ $rs2->user->name }}</span></li>
                                            <li><i class="fa fa-calendar"></i>{{ $rs2->created_at->format('Y-m-d') }}</li>
                                        </ul>
                                    </div>
                                    <div class="pic">
                                        <img src="{{ Storage::url($rs2->image) }}" alt="">
                                    </div>
                                    <p class="post-description">{{ $rs2->description }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="javascript">

    </script>
    <!-- /.container -->

@endsection
