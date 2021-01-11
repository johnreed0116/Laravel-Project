@extends('layouts.admin')

@section('title', 'Services')

@section('content')
    <!-- MAIN service-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Services</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i><a style="color:white;" href="{{ route('admin_service_add') }}">Add Service</a></button>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($servicelist->sortBy('id') as $rs)
                                    <tr class="tr-shadow">
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->title }}</td>
                                        <td>{{ $rs->description }}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="" >
                                            @endif
                                        </td>
                                        <td>
                                            <span class="status--process">{{ $rs->status }}</span>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('admin_service_edit', ['id'=>$rs->id]) }}">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <span style="margin-right: 20px;"></span>
                                                <a href="{{ route('admin_service_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this service! Are you sure?')">
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
    <!-- END MAIN service-->
    <!-- END PAGE CONTAINER-->
@endsection
