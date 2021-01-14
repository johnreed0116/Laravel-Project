@extends('layouts.admin')

@section('title', 'Add Content')

@section('javascript')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

@endsection

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center title-2">Content</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('admin_content_store') }}" method="post" enctype="multipart/form-data">
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
                                            <textarea name="detail"  id="detail"></textarea>
                                            <script>
                                                $('#detail').summernote({
                                                    tabsize: 2,
                                                    height: 100,
                                                    dialogsInBody: true
                                                });
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
                                        <div class="form-group">
                                            <label class="control-label mb-1">Status</label>
                                            <select name="status" id="select" class="form-control">
                                                <option value="False">False</option>
                                                <option value="True">True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lg"></i>&nbsp;
                                                <span>Add a new Content</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© 2020 Berke Kiran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
@endsection
