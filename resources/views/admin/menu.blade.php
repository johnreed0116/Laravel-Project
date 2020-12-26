@extends('layouts.admin')

@section('title', 'Menu Page')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Menu</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i><a style="color:white;" href="{{ route('admin_menu_add') }}">Add Menu</a></button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Parent Id</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($menulist as $rs)
                                    <tr class="tr-shadow">
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->parent_id }}</td>
                                        <td>{{ $rs->title }}</td>
                                        <td>
                                            <span class="status--process">{{ $rs->status }}</span>
                                        </td>
                                        <td>{{ $rs->keywords }}</td>
                                        <td class="desc">{{ $rs->description }}</td>
                                        <td>{{ $rs->image }}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <a href="{{ route('admin_menu_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this menu! Are you sure?')">
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