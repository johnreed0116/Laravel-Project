<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Berke Kiran">
    <title> {{ $user->name }} </title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">

</head>
    <body style="background-color: #E5E5E5;">
        <!-- MAIN CONTENT-->
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">User Detail</h3>
                    <hr>
                </div>
                <div style="text-align: center;">
                    @if ($user->profile_photo_path)
                        <img src="{{ Storage::url($user->profile_photo_path) }}" height="150" alt="">
                    @endif
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Id</label>
                    <input class="form-control" value="{{ $user->id }}" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Name</label>
                    <input class="form-control" value="{{ $user->name }}" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Email</label>
                    <input class="form-control" value="{{ $user->email }}" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Phone</label>
                    <input class="form-control" value="{{ $user->phone }}" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Address</label>
                    <input class="form-control" value="{{ $user->address }}" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Created At</label>
                    <input class="form-control" value="{{ $user->created_at }}" disabled>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Roles</label>
                    <table>
                        <tr>
                            @foreach($user->roles as $row)
                                <td> {{ $row->name }} </td>
                                <td>
                                    <a href="{{ route('admin_user_role_delete', ['userid'=>$user->id, 'roleid'=>$row->id]) }}" onclick="return confirm('You are removing this role from the user! Are you sure?')">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Remove">
                                            <i style="margin-right:15px; margin-left: 5px; font-size: 30px; color: indianred;" class="zmdi zmdi-delete"></i>
                                        </button>
                                    </a>
                                </td>
                                <td></td>
                            @endforeach
                        </tr>
                    </table>
                </div>
                <hr>
                <form action="{{ route('admin_user_role_add', ['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select class="form-control" name="roleid">
                            @foreach($rolelist as $rs)
                                <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lg"></i>&nbsp;
                            <span>Add Role</span>
                        </button>
                    </div>
                </form>
                <hr>
            </div>
        </div>

        <div style="margin-top: 10px; margin-left: 30px;">@include('home.message')</div>
        <div class="copyright">
            <p>© 2020 Berke Kiran</p>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->

    <!-- Jquery JS-->
    <script src="{{ asset('assets')}}/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets')}}/admin/vendor/slick/slick.min.js">
    </script>
    <script src="{{ asset('assets')}}/admin/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/animsition/animsition.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{ asset('assets')}}/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{ asset('assets')}}/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('assets')}}/admin/js/main.js"></script>

    </body>
</html>
