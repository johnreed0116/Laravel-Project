@extends('layouts.admin')

@section('title', 'Update User')

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
                                        <h3 class="text-center title-2">User</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('admin_user_update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label mb-1">Name</label>
                                            <input name="name" type="text" class="form-control" value="{{ $user->name }}" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Email</label>
                                            <input name="email" type="email" class="form-control" value="{{ $user->email }}" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Phone</label>
                                            <input name="phone" type="text" class="form-control" value="{{ $user->phone }}" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Address</label>
                                            <input name="address" type="text" class="form-control" value="{{ $user->address }}" data-val="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-1">Image</label>
                                            <input name="image" type="file" class="form-control" data-val="true">
                                            @if ($user->profile_photo_path)
                                                <img src="{{ Storage::url($user->profile_photo_path) }}" style="margin-top: 25px;" height="100" alt="">
                                            @endif
                                        </div>
                                        <div>
                                            <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lg"></i>&nbsp;
                                                <span>Update the User</span>
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
