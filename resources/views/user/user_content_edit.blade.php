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
                    <form action="{{ route('user_content_update', ['id' => $content->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label mb-1">Menu</label>
                            <select name="menu_id" id="select" class="form-control">
                                <option value="0">Main Menu</option>
                                @foreach ($menulist as $rs)
                                    <option value="{{ $rs->id }}" @if ($rs->id == $content->menu_id) selected="selected" @endif>{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Title</label>
                            <input name="title" type="text" class="form-control" value="{{ $content->title }}" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Type</label>
                            <select name="type" id="select" class="form-control">
                                <option selected="selected">{{ $content->type }}</option>
                                <option value="Menu">Menu</option>
                                <option value="Announcement">Announcement</option>
                                <option value="News">News</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Keywords</label>
                            <input name="keywords" type="text" class="form-control" value="{{ $content->keywords }}" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Description</label>
                            <input name="description" type="text" class="form-control" value="{{ $content->description }}" data-val="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Detail</label>
                            <textarea name="detail" id="detail">{{ $content->detail }}</textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Image</label>
                            <input name="image" type="file" class="form-control" data-val="true">
                            @if ($content->image)
                                <img src="{{ Storage::url($content->image) }}" style="margin-top: 25px;" height="240" alt="">
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-1">Slug</label>
                            <input name="slug" type="text" class="form-control" value="{{ $content->slug }}" data-val="true">
                        </div>
                        <div>
                            <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lg"></i>&nbsp;
                                <span>Update the Content</span>
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
