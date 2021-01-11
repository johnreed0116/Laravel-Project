@extends('layouts.home')

@section('title', 'Contact')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> Contact </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> Contact </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8 mb-4 contact-left">
                    <h3>Send us a Message</h3>
                    <form name="sentMessage" id="contactForm" action="{{ route('sendmessage') }}" method="post" novalidate>
                    @csrf
                        <div class="control-group form-group">
                            <div class="controls">
                                <input name="name" type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input name="phone" type="tel" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input name="email" type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input name="subject" type="text" placeholder="Subject" class="form-control" id="subject" required data-validation-required-message="Please enter the subject.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea name="message" rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success">@include('home.message')</div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" style="margin-top: 15px;" id="sendMessageButton">Send Message</button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-lg-4 mb-4 contact-right">
                    {!! $setting->contact !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection
