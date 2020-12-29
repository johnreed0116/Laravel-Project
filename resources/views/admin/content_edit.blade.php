@extends('layouts.admin')

@section('title', 'Update Content Page')

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
                                    <form action="{{ route('admin_content_update', ['id' => $content->id]) }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label mb-1">Parent Id</label>
                                            <select name="parent_id" id="select" class="form-control">
                                                <option value="0">Main Menu</option>
                                                @foreach ($menulist as $rs)
                                                <option value="{{ $rs->id }}" @if ($rs->id == $content->menu_id) selected="selected" @endif>{{ $rs->title }}</option>
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
                                                <option value="Haber">Haber</option>
                                                <option value="Duyuru">Duyuru</option>
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
                                            <input name="detail" type="text" class="form-control" value="{{ $content->detail }}" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Image</label>
                                            <input name="image" type="text" class="form-control" value="{{ $content->image }}" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Status</label>
                                            <select name="status" id="select" class="form-control">
                                                <option selected="selected">{{ $content->status }}</option>
                                                <option value="False">False</option>
                                                <option value="True">True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lg"></i>&nbsp;
                                                <span>Update the Content</span>
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
