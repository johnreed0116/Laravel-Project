<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Berke Kiran">
    <title> Update Comment </title>

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
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Comment</h3>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label mb-1">Content</label>
                                <input class="form-control" value="{{ $comment->content->title }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">User</label>
                                <input class="form-control" value="{{ $comment->user->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">IP</label>
                                <input type="text" class="form-control" value="{{ $comment->IP }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Comment</label>
                                <textarea class="form-control" disabled>{{ $comment->comment }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Date</label>
                                <input class="form-control" value="{{ $comment->created_at }}" disabled>
                            </div>
                            <form action="{{ route('admin_comment_update', ['id' => $comment->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-1">Status</label>
                                    <select name="status" id="select" class="form-control">
                                        <option selected="selected">{{ $comment->status }}</option>
                                        <option value="False">False</option>
                                        <option value="True">True</option>
                                    </select>
                                </div>
                                <div style="margin-bottom: 15px; margin-left: 30px;" id="success">@include('home.message')</div>
                                <div>
                                    <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-lg"></i>&nbsp;
                                        <span>Update the Comment</span>
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

<!-- Jquery JS-->
<script src="{{ asset('assets')}}/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/popper.min.js"></script>
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
