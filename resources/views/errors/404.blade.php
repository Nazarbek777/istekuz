@extends('layouts.app')


@section('title', 'Page Blog')

@section('pagename', 'Blog')

@section('content')

<div class="error-area pt-200 section-spacing white-bg p-relative z-index-2 adjust-header-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-content-wrapper text-center">
                    <div class="error-img mb-65">
                        <img src="assets/img/bg/error-404.png" alt="img not found">
                    </div>
                    <div class="error-btn">
                        <a href="/about" class="border-btn">Back to Home<i class="flaticon-040-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- change this reogi git s --}}

@endsection