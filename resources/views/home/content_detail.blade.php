@extends('layouts.home')

@section('title', $content->title)
@section('description', $content->description)
@section('keywords', $content->keywords)

@section('css')

    <style>

        @media only screen and (max-width: 1200px) {
            .imgslider{
                max-height: 400px;
            }
        }

        @media only screen and (min-width: 1200px) {
            .imgslider{
                max-height: 600px;
            }
        }

    </style>

@endsection

@section('content')

    <!-- full Title -->
    @if($content->menu_id != '0')
        <div class="full-title" style="background: url({{ Storage::url(\App\Models\Menu::where('id','=',$content->menu_id)->first()->image) }}) no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    @else
        <div class="full-title">
    @endif
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> {{ $content->title }} </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        @if($content->menu_id != '0')
                            <a href="{{ route('menucontent', ['id'=>$content->menu_id, 'slug'=>\App\Models\Menu::where('id','=',$content->menu_id)->first()->slug]) }} ">{{ \App\Models\Menu::where('id','=',$content->menu_id)->first()->title }}</a>
                        @else
                            <a href="{{ route('home') }}">Home</a>
                        @endif
                    </li>
                    <li class="breadcrumb-item active">{{ $content->title }}</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <div class="col-md-16 blog-entries">

                    <div id="Indicators" class="imgslider carousel slide" data-ride="carousel">

                        @if($imagelist->count() != 0)
                        <ul class="carousel-indicators">
                            <li data-target="#Indicators" data-slide-to="0" class="active"></li>
                            @php
                              $count = 0;
                            @endphp
                            @while($count < $imagelist->count())
                                <li data-target="#Indicators" data-slide-to="$count"></li>
                                @php $count++ @endphp
                            @endwhile
                        </ul>
                        @endif

                        <div class="carousel-inner" style="z-index: -1;">

                            <div class="carousel-item active">
                                <img style="min-width: 100%; height: 100%;" class="imgslider d-block w-100" src="{{ Storage::url($content->image) }}" alt="" />
                            </div>

                            @if($imagelist->count() != 0)
                                @foreach($imagelist as $rs)
                                <div class="carousel-item">
                                    <img style="min-width: 100%; height: 100%;" class="imgslider d-block w-100" src="{{ Storage::url($rs->image) }}" alt="" />
                                </div>
                                @endforeach
                            @endif

                        </div>

                        @if($imagelist->count() != 0)
                            <a  class="carousel-control-prev" href="#Indicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#Indicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        @endif
                    </div>

                    <script type="javascript">
                        $('.carousel').carousel()
                    </script>

                    <hr>
                    <!-- Date/Time -->
                    <p>Posted on {{ $content->created_at }} by <span style="color: dodgerblue;">{{ $content->user->name }}</span></p>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead">{{$content->description}}</p>
                    <p>{!! $content->detail !!}</p>

                    <hr>
                    @livewire('comment', ['id' => $content->id])

                    <div>@include('home.message')</div>

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

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
