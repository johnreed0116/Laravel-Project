@extends('layouts.admin')

@section('title', 'Comments')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Comments</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Content</th>
                                    <th>User</th>
                                    <th>IP</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($commentlist->sortBy('id') as $rs)
                                    <tr class="tr-shadow">
                                        <td>{{ $rs->id }}</td>
                                        <td><a style="color: cornflowerblue;" href="{{ route('content', ['id' => $rs->content->id, 'slug'=>$rs->content->slug]) }}">{{ $rs->content->title }}</a></td>
                                        <td>
                                            <a style="color: cornflowerblue;" href="{{ route('admin_user_show', ['id' => $rs->user->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                                {{ $rs->user->name }}
                                            </a>
                                        </td>
                                        <td>{{ $rs->IP }}</td>
                                        <td>{{ $rs->comment }}</td>
                                        <td>{{ $rs->created_at }}</td>
                                        <td>
                                            <span class="status--process">{{ $rs->status }}</span>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{ route('admin_comment_show', ['id'=>$rs->id]) }}"  onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>
                                                <span style="margin-right: 20px;"></span>
                                                <a href="{{ route('admin_comment_delete', ['id'=>$rs->id]) }}" onclick="return confirm('You are deleting this comment! Are you sure?')">
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
