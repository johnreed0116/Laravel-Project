@extends('layouts.home')

@section('title', 'FAQ')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3"> FAQ </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"> FAQ </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 style="text-align: center;" class="py-4">Frequently Asked Questions</h1>
    </div>
    <div class="faq-main">
        <div class="container">
            <div class="accordion" id="accordionExample">

            <div class="card accordion-single">
                <div class="card-header" id="1">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $faqlist->first()->position }}" aria-expanded="true" aria-controls="collapse{{ $faqlist->first()->position }}">
                            {{ $faqlist->first()->question }}
                        </button>
                    </h5>
                </div>
                <div id="collapse{{ $faqlist->first()->position }}" class="collapse show" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! $faqlist->first()->answer !!}
                    </div>
                </div>
            </div>

            @foreach($faqlist->skip(1) as $rs)
                <div class="card accordion-single">
                    <div class="card-header" id="1">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $rs->position }}" aria-expanded="false" aria-controls="collapse{{ $rs->position }}">
                                {{ $rs->question }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse{{ $rs->position }}" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            {!! $rs->answer !!}
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>

@endsection
