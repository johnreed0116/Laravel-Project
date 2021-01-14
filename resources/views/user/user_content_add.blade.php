@extends('layouts.home')

@section('title', 'Add Content')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

@endsection

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Add Content </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('user_content') }}">My Contents</a>
                    </li>
                    <li class="breadcrumb-item active">Add Content</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">
                    <form action="{{ route('user_content_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label mb-1">Menu</label>
                            <select name="menu_id" id="select" class="form-control">
                                @foreach ($menulist as $rs)
                                    <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Title</label>
                            <input name="title" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Type</label>
                            <select name="type" id="select" class="form-control">
                                <option value="Menu">Menu</option>
                                <option value="Announcement">Announcement</option>
                                <option value="News">News</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Keywords</label>
                            <input name="keywords" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Description</label>
                            <input name="description" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Detail</label>
                            <textarea name="detail" id="detail"></textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Image</label>
                            <input name="image" type="file" class="form-control" value="" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Slug</label>
                            <input name="slug" type="text" class="form-control" value="" data-val="true">
                        </div>
                        <div>
                            <button id="add-button" type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-square"></i>&nbsp;
                                <span>Add a new Content</span>
                            </button>
                        </div>
                    </form>
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
