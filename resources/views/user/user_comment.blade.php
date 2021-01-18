@extends('layouts.home')

@section('title', 'My Comments')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> My Comments </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('user_profile') }}">My Profile</a>
                    </li>
                    <li class="breadcrumb-item active">My Comments</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>
                                <th>Content</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($commentlist->sortBy('id') as $rs)
                                <tr class="tr-shadow">
                                    <td><a style="text-decoration: none;" href="{{ route( 'content', ['id'=>\App\Models\Content::where('id','=',$rs->content_id)->first()->id, 'slug'=>\App\Models\Content::where('id','=',$rs->content_id)->first()->slug]) }}">{{ \App\Models\Content::where('id','=',$rs->content_id)->first()->title }}</a></td>
                                    <td>{{ $rs->comment }}</td>
                                    <td>
                                        <span class="status--process">{{ $rs->status }}</span>
                                    </td>
                                    <td>{{ $rs->created_at }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('user_comment_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this comment! Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div>@include('home.message')</div>

                    </div>
                    <!-- END DATA TABLE -->
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
        </div>
        <!-- /.container -->
    </div>

@endsection
