@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Users</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Roles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($userlist->sortBy('id') as $rs)
                                    <tr class="tr-shadow">
                                        <td>{{ $rs->id }}</td>
                                        <td>
                                            @if ($rs->profile_photo_path)
                                                <img src="{{ Storage::url($rs->profile_photo_path) }}" height="30" alt="" >
                                            @endif
                                        </td>
                                        <td>
                                            <a style="color: cornflowerblue;" href="{{ route('admin_user_show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                                {{ $rs->name }}
                                            </a>
                                        </td>
                                        <td>{{ $rs->email }}</td>
                                        <td>{{ $rs->phone }}</td>
                                        <td>{{ $rs->address }}</td>
                                        <td>
                                            @foreach($rs->roles as $row)
                                                {{ $row->name }}
                                            @endforeach

                                        </td>
                                        <td>
                                            <a href="{{ route('admin_user_roles', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Add Roles">
                                                    <i style="font-size: 30px; color: grey;" class="zmdi zmdi-plus-circle"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('admin_user_edit', ['id'=>$rs->id]) }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <span style="margin-right: 20px;"></span>
                                                <a href="{{ route('admin_user_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this user! Are you sure?')">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
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
                        <div style="margin-top: 10px;">@include('home.message')</div>
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
