<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Berke Kiran">
    <title> Add Image </title>

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
                    <h3 class="text-center title-2">Content : {{ $content->title }}</h3>
                </div>
                <hr>
                <form action="{{ route('user_image_store', ['content_id' => $content->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label mb-1">Title</label>
                        <input name="title" type="text" class="form-control" value="" data-val="true">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Image</label>
                        <input name="image" type="file" class="form-control" value="" data-val="true">
                    </div>
                    <div>
                        <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lg"></i>&nbsp;
                            <span>Add Image</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($images as $rs)
                <tr class="tr-shadow">
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->title }}</td>
                    <td>
                        @if ($rs->image)
                            <img src="{{ Storage::url($rs->image) }}" height="30" alt="" >
                        @endif
                    </td>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{ route('user_image_delete', ['id' => $rs->id, 'content_id' => $content->id]) }}" onclick="return confirm('You are deleting this image! Are you sure?')">
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
