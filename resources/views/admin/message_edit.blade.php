<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Berke Kiran">
    <title> Update Message </title>

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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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
                                <h3 class="text-center title-2">Message</h3>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="control-label mb-1">Name</label>
                                <input class="form-control" value="{{ $message->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">E-Mail</label>
                                <input class="form-control" value="{{ $message->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Phone</label>
                                <input class="form-control" value="{{ $message->phone }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Subject</label>
                                <input class="form-control" value="{{ $message->subject }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Message</label>
                                <input class="form-control" value="{{ $message->message }}" disabled>
                            </div>
                            <form action="{{ route('admin_message_update', ['id' => $message->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-1">Admin Note</label>
                                    <textarea name="note" id="note">{{ $message->note }}</textarea>
                                    <script>
                                        $('#note').summernote({
                                            tabsize: 2,
                                            height: 100,
                                            dialogsInBody: true
                                        });
                                    </script>
                                </div>
                                <div style="margin-bottom: 15px;" id="success">@include('home.message')</div>
                                <div>
                                    <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-lg"></i>&nbsp;
                                        <span>Update the Message</span>
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
