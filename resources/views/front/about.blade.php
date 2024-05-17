@extends('layouts.app')


@section('title', 'Page Blog')

@section('pagename', 'Blog')

@section('content')
    <!-- page titler area start -->
    <section class="page-title-area section-spacing-top pb-55 adjust-header-space">
        <div class="container">
            <div class="page-title-wrappper">
                <div class="breadcrumb-menu mb-20">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items">
                            @if (isset($data->title))
                                <li class="trail-item trail-begin"><span>{{ $data->title }}</span></li>
                            @else
                                <li class="trail-item trail-begin"><span>About us</span></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <h2 class="page-title animation__word_come">We're a diverse, tight-knit team with big
                    hearts. And even bigger vision</h2>
            </div>
        </div>
    </section>
    <!-- page titler area end -->

    <!-- about us area start  -->
    <div class="about-area-1 section-spacing-bottom p-relative">
        <div class="container">
            <div class="about-us-main p-relative">
                <div class="about-us-thumb-2">
                    @if (isset($data->image))
                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}">
                    @else
                        <img src="assets/img/about/isteeekkk.png" alt="image not found">
                    @endif

                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about-us-thumb-1 mb-60">
                            @if (isset($data->image))
                                <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}">
                            @else
                                <img src="assets/img/about/isteeekkk.png" alt="image not found">
                            @endif
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="about-us-content">
                            <div class="about-us-text">
                                <span class="line__subtitle mb-50">Since 2016</span>
                                @if (isset($data->content))
                                    {!! $data->content !!}
                                @else
                                    Istek - это новый бренд оконных систем, чья главная миссия - обеспечить клиентам
                                    исполнение их желания о новых и качественных окнах по практич-ной стоимости. Логотип
                                    выполнен в виде графичес-кого элемента, состоящего из двух квадратов на плоскости.
                                    Графический элемент легко считывается и понятен, вызывает ассоциацию с современными
                                    стеклопакетами.

                                    Справа от графического элемента разработана уникальная надпись /STEK, выполненная на
                                    основе гротеск шрифта. Использование легкого, современного шрифта без засечек обосновано
                                    стремлением продемонстрировать технологичность и современность, минимализм и
                                    экспериментальность, отказ от ненужных условностей. Своим шрифтом бренд как бы говорит
                                    потребителям "ISTEK - это про технологичность и современность. ISTEK - это бренд про
                                    ощущения и эмоции. ISTEK - дарит вам только то, что вы хотите и что вам действительно
                                    нужно".
                                @endif
                            </div>
                            <div class="btn_wrapper">
                                <a class="c-button btn-moving" href="contact.html">
                                    <span class="c-button__border"></span>
                                    <span class="c-button__text">Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end  -->

    {{-- team --}}
    <section class="team-area primary-bg section-spacing-top">
        <div class="container">
            <div class="section__title-wrapper is-white tpl__item-center mb-60">
                <h2 class="section__title-inner title-anim" style="perspective: 400px;">
                    <div
                        style="display: block; text-align: center; position: relative; translate: none; rotate: none; scale: none; transform-origin: 705px 35.1px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                        Meet The Team</div>
                </h2>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="team-item-2-grid">
                        <div class="team-item-2 active">
                            <div class="team-thmb-2">
                                <a href="#">
                                    <img src="/assets/img/team/330px.jpg" alt="image not found">
                                </a>
                            </div>
                            <div class="team-info-2">
                                <h3><a href="team-details.html">Jahongir Xoliqov</a></h3>
                                <span>O'rnatuchi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- team --}}


    {{-- history --}}

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
                        <span class="section__inner-subtitle">Our History</span>
                        <h2 class="section__title-inner title-anim" style="perspective: 400px;">
                            <div
                                style="display: block; text-align: center; position: relative; translate: none; rotate: none; scale: none; transform-origin: 705px 35.1px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                It all began in . . .</div>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-8">
                    <div class="history-content p-relative z-index-1 text-center">
                        <h5>Milestone 01</h5>
                        <h2>198<span class="highlight">8</span></h2>
                        <p>Lift is a full-service, award-winning digital agency with expertise in brand &amp;
                            digital strategy, design, and user experience At vero eos et accusamus et iusto
                            odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                            corrupti cupiditate non provident.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="history-thumb-3">
                        <img src="assets/img/gallery/gallery-14.jpg" alt="image not found">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- history --}}

    {{-- why we us --}}
    <section class="why-area primary-bg section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__title-wrapper is-white mb-60">
                        <span class="section__inner-subtitle">why we us</span>
                        <h2 class="section__title-inner title-anim" style="perspective: 400px;">
                            <div
                                style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 705px 35.1px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                We’re a global <span class="font-highlight">creative agency</span> based in New </div>
                            <div
                                style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 705px 35.1px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                York</div>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="why-wrapper">
                        <div class="why-content">
                            <div class="why-thumb" data-background="assets/img/gallery/gallery-6.jpg"
                                style="background-image: url(&quot;assets/img/gallery/gallery-6.jpg&quot;);">
                            </div>
                            <div class="area__btn">
                                <a href="https://www.youtube.com/watch?v=CH_Kv7Y3fQw" class="circle-btn popup-video">
                                    <span class="icon-box" data-background="assets/img/gallery/gallery-8.jpg"
                                        style="background-image: url(&quot;assets/img/gallery/gallery-8.jpg&quot;);">
                                        <svg width="24" height="26" viewBox="0 0 24 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.1646 13L0.66455 25.9904L0.664551 0.00961778L23.1646 13Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                    <img src="assets/img/icons/play-text-white.png" alt="image not found"
                                        class="image-text">
                                </a>
                            </div>
                            <span class="line"></span>
                        </div>
                        <p class="xlarge">We’re a global creative agency based in New York, Amsterdam and
                            Toronto helping
                            brands overcome growth-limiting challenges with moonshot creativity in branding,
                            advertising and public relations.</p>
                        <div class="pin-spacer"
                            style="order: 0; place-self: auto; grid-area: auto; z-index: auto; float: none; flex-shrink: 1; display: block; margin: 0px 0px 0.001px; inset: auto; position: relative; flex-basis: auto; overflow: visible; box-sizing: border-box; width: 1410px; height: 343px; padding: 0px;">
                            <div class="why-accordion tp-accordion-fix"
                                style="translate: none; rotate: none; scale: none; inset: 0px auto auto 0px; margin: 0px; max-width: 1410px; width: 1410px; max-height: 342.8px; height: 342.8px; padding: 0px; transform: translate(0px, 0px);">
                                <div class="accordion" id="accordionExample-st-2">
                                    <div class="row g-5">
                                        <div class="col-lg-6">
                                            <div class="accordion-item mb-30">
                                                <h2 class="accordion-header" id="headingOne-st-2">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne-st-2"
                                                        aria-expanded="false" aria-controls="collapseOne-st-2">
                                                        Accessibility
                                                    </button>
                                                </h2>
                                                <div id="collapseOne-st-2" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne-st-2"
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
                                                <h2 class="accordion-header" id="headingTwo-st-2">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo-st-2"
                                                        aria-expanded="false" aria-controls="collapseTwo-st-2">
                                                        Audit &amp; Analyze
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo-st-2" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo-st-2"
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
        </div>
    </section>
    {{-- why we us  --}}


    {{-- brengin --}}

    <section class="brand-area section-spacing">
        <div class="container">
            <h4 class="brand-title text-center p-text mb-75" style="opacity: 1; visibility: inherit;">Trusted by
                industry-leading organizations
                including</h4>
            <div class="brand__inner">
                <div class="brand-wrapper brand-active slider-drag slick-initialized slick-slider">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 7200px; transform: translate3d(-2880px, 0px, 0px);">
                            <div class="brand-item slick-slide slick-cloned" data-slick-index="-5" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-1.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide slick-cloned" data-slick-index="-4" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-2.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide slick-cloned" data-slick-index="-3" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-3.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide slick-cloned" data-slick-index="-2" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-4.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide slick-cloned" data-slick-index="-1" id=""
                                aria-hidden="true" style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-5.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide" data-slick-index="0" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-1.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide" data-slick-index="1" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-2.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide" data-slick-index="2" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-3.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide" data-slick-index="3" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-4.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide" data-slick-index="4" aria-hidden="true"
                                style="width: 258px;" tabindex="-1">
                                <img src="assets/img/brand/brand-5.png" alt="image not found">
                            </div>
                            <div class="brand-item slick-slide slick-current slick-active" data-slick-index="5"
                                aria-hidden="false" style="width: 258px;" tabindex="0">
                                <img src="assets/img/brand/brand-1.png" alt="image not found">
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- brendig --}}


@endsection
