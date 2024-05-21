@extends('layouts.app')


@section('title')
    @lang('main.title')
@endsection

@section('pagename', 'Blog')

@section('home', $posts[18]['content_' . session('lang')])
@section('about', $posts[19]['content_' . session('lang')])
@section('blog', $posts[20]['content_' . session('lang')])
@section('contact', $posts[21]['content_' . session('lang')])
@section('popular_products', $posts[26]['content_' . session('lang')])

@section('content')
    <!-- page titler area start -->
    <section class="page-title-area section-spacing-top pb-55 adjust-header-space">
        <div class="container">
            <div class="page-title-wrappper">
                <div class="breadcrumb-menu mb-20">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items">
                            <li class="trail-item trail-begin"><span>
                                    {{ $about_us['content_' . session('lang')] }}
                                </span></li>
                        </ul>
                    </nav>
                </div>
                <h2 class="page-title animation__word_come">{{ $campany['title_' . session('lang')] }}</h2>
            </div>
        </div>
    </section>
    <!-- page titler area end -->

    <!-- about us area start  -->
    <div class="about-area-1 section-spacing-bottom p-relative">
        <div class="container">
            <div class="about-us-main p-relative">
                <div class="about-us-thumb-2">
                    <img src="{{ asset('storage/' . $images[2]['url']) }}" alt="{{ $images[2]['title'] }}"
                        alt="image not found">
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about-us-thumb-1 mb-60">
                            <img src="{{ asset('storage/' . $campany['image']) }}" alt="image not found">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about-us-content">
                            <div class="about-us-text">
                                <span class="line__subtitle mb-50">ISTEK -
                                    {{ $about_mini_heding['content_' . session('lang')] }}</span>
                                <p>
                                    {{ $campany['text_' . session('lang')] }}
                                </p>
                            </div>
                            <div class="btn_wrapper">
                                <a class="c-button btn-moving" href="/contact">
                                    <span class="c-button__border"></span>
                                    <span class="c-button__text">{{ $posts[3]['content_' . session('lang')] }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end  -->

    <!-- team area start -->
    <section class="team-area primary-bg section-spacing-top">
        <div class="container">
            <div class="section__title-wrapper is-white tpl__item-center mb-60">
                <h2 class="section__title-inner title-anim">{{ $posts[4]['content_' . session('lang')] }}</h2>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="team-item-2-grid">
                        @foreach ($teams as $team)
                            <div class="team-item-2">
                                <div class="team-thmb-2">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $team['image']) }}" alt="image not found">
                                    </a>
                                </div>
                                <div class="team-info-2">
                                    <h3><a>{{ $team['title_' . session('lang')] }}</a></h3>
                                    <span>{{ $team['text_' . session('lang')] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end-->


    <!-- history area start -->
    <section class="history-area fix p-relative section-spacing">
        <div class="history-thumbs">
            <div class="history-thumb-1">
                <img src="assets/img/about/meeting1.png" alt="image not found">
            </div>
            <div class="history-thumb-2">
                <img src="assets/img/about/meeting2.png" alt="image not found">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper tpl__item-center section__title-wrapper-history">
                        <span class="section__inner-subtitle">ISTEK</span>
                        <h2 class="section__title-inner title-anim">{{ $about_service['title_' . session('lang')] }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-8">
                    <div class="history-content p-relative z-index-1 text-center">
                        <p>
                            {{ $about_service['text_' . session('lang')] }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="history-thumb-3">
                        <img src="{{ asset('storage/' . $about_service['image']) }}" alt="image not found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- history area end -->

    <!-- why area start -->
    <section class="why-area primary-bg section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title-wrapper is-white mb-60">
                        <span class="section__inner-subtitle">{{ $posts[5]['content_' . session('lang')] }}</span>
                        <h2 class="section__title-inner title-anim">
                            {{ $why_us['title_' . session('lang')] }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="why-wrapper">
                        <div class="why-content">
                            <div class="why-thumb" data-background="{{ asset('storage/' . $why_us['image']) }}">
                            </div>
                            <div class="area__btn">
                                <a href="https://www.youtube.com/watch?v=CH_Kv7Y3fQw" class="circle-btn popup-video">
                                    <span class="icon-box" data-background="assets/img/gallery/gallery-8.jpg">
                                        <svg width="24" height="26" viewBox="0 0 24 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.1646 13L0.66455 25.9904L0.664551 0.00961778L23.1646 13Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                    <img src="/assets/img/logo/logo-white.png" alt="image not found" class="image-text">
                                </a>
                            </div>
                            <span class="line"></span>
                        </div>
                        <p class="xlarge">
                            {{ $why_us['text_' . session('lang')] }}
                        </p>
                        <div class="why-accordion tp-accordion-fix">
                            <div class="accordion" id="accordionExample-st-2">
                                <div class="row g-5">
                                    <div class="col-lg-6">
                                        <div class="accordion-item mb-30">
                                            <h2 class="accordion-header" id="headingOne-st-2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne-st-2"
                                                    aria-expanded="false" aria-controls="collapseOne-st-2">
                                                    @lang('main.title')
                                                </button>
                                            </h2>
                                            <div id="collapseOne-st-2" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne-st-2" data-bs-parent="#accordionExample-st-2">
                                                <div class="accordion-body">
                                                    <div class="capabilities-list">
                                                        <div class="choose-accordion-content">
                                                            <p>Axil is data-driven and performance-focused,
                                                                paving
                                                                the way
                                                                for us to charge your business forward and
                                                                accelerate your
                                                                growth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo-st-2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo-st-2"
                                                    aria-expanded="false" aria-controls="collapseTwo-st-2">
                                                    Audit & Analyze
                                                </button>
                                            </h2>
                                            <div id="collapseTwo-st-2" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo-st-2" data-bs-parent="#accordionExample-st-2">
                                                <div class="accordion-body">
                                                    <div class="capabilities-list">
                                                        <div class="choose-accordion-content">
                                                            <p>Axil is data-driven and performance-focused,
                                                                paving
                                                                the way
                                                                for us to charge your business forward and
                                                                accelerate your
                                                                growth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="accordion-item mb-30">
                                            <h2 class="accordion-header" id="headingThree-st-2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree-st-2"
                                                    aria-expanded="false" aria-controls="collapseThree-st-2">
                                                    Marketing Expertise
                                                </button>
                                            </h2>
                                            <div id="collapseThree-st-2" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree-st-2"
                                                data-bs-parent="#accordionExample-st-2">
                                                <div class="accordion-body">
                                                    <div class="capabilities-list">
                                                        <div class="choose-accordion-content">
                                                            <p>Axil is data-driven and performance-focused,
                                                                paving
                                                                the way
                                                                for us to charge your business forward and
                                                                accelerate your
                                                                growth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour-st-2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour-st-2"
                                                    aria-expanded="false" aria-controls="collapseFour-st-2">
                                                    Growth Solutions
                                                </button>
                                            </h2>
                                            <div id="collapseFour-st-2" class="accordion-collapse collapse show"
                                                aria-labelledby="headingFour-st-2"
                                                data-bs-parent="#accordionExample-st-2">
                                                <div class="accordion-body">
                                                    <div class="capabilities-list">
                                                        <div class="choose-accordion-content">
                                                            <p>Axil is data-driven and performance-focused,
                                                                paving
                                                                the way
                                                                for us to charge your business forward and
                                                                accelerate your
                                                                growth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why area end -->


    {{-- brengin --}}

    <!-- brand area start  -->
    <section class="brand-area section-spacing">
        <div class="container">
            <h4 class="brand-title text-center p-text mb-75">Trusted by industry-leading organizations
                including</h4>
            <div class="brand__inner">
                <div class="brand-wrapper brand-active slider-drag">
                    @foreach ($brands as $brand)
                        <div class="brand-item">
                            <img src="{{ asset('storage/' . $brand['image']) }}" alt="image not found">
                        </div>
                    @endforeach
                    @foreach ($brands as $brand)
                        <div class="brand-item">
                            <img src="{{ asset('storage/' . $brand['image']) }}" alt="image not found">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end  -->
    {{-- brending --}}
@endsection
