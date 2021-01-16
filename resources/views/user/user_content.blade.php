@extends('layouts.home')

@section('title', 'My Contents')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> My Contents </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('user_profile') }}">My Profile</a>
                    </li>
                    <li class="breadcrumb-item active">My Contents</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row" style="width: 115%;">
                <!-- Post Content Column -->
                <div class="col-lg-9">
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <a style="text-decoration:none; color:white;" href="{{ route('user_content_add') }}">
                                <button class="btn btn-primary">
                                    <i style="margin-right: 10px;" class="fas fa-plus-square"></i> Add Content
                                </button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Menu</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($contentlist->sortBy('id') as $rs)
                                <tr class="tr-shadow">
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        @if($rs->menu_id != '0')
                                            {{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu, $rs->menu->title) }}
                                        @else
                                            Home Page
                                        @endif
                                    </td>
                                    <td><a style="text-decoration: none;" href="{{ route('content', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}">{{ $rs->title }}</a></td>
                                    <td>{{ $rs->type }}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{ Storage::url($rs->image) }}" height="30" alt="" >
                                        @endif
                                    </td>
                                    <td>
                                        <a style="opacity: 50%;" href="{{ route('user_image_add', ['content_id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')"><img height="25" src="{{ asset('assets/admin/images/') }}/images-icon.svg"></a>
                                    </td>
                                    <td>
                                        <span class="status--process">{{ $rs->status }}</span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{ route('user_content_edit', ['id'=>$rs->id]) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <span style="margin-right: 20px;"></span>
                                            <a href="{{ route('user_content_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this content! Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-3 blog-right-side">
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
