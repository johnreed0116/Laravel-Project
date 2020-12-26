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
                                    <i class="zmdi zmdi-plus"></i>Add Menu</button>
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
                                        <td>{{ $rs->parentid }}</td>
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
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
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
            </div>
        </div>
    </div>
@endsection
