@extends('layouts.app')


@section('title', 'Page Blog')

@section('pagename', 'Blog')

@section('content')

@section('home', $posts[18]['content_' . session('lang')])
@section('about', $posts[19]['content_' . session('lang')])
@section('blog', $posts[20]['content_' . session('lang')])
@section('contact', $posts[21]['content_' . session('lang')])
@section('popular_products', $posts[26]['content_' . session('lang')])

    <!-- page title area start -->
    <section class="page-title-area section-spacing p-relative adjust-header-space">
        <div class="page-title-shapes">
            <img class="shape-2" src="assets/img/shapes/circle-line-2.png" alt="image not found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-10">
                    <div class="page-title-wrappper">
                        <div class="breadcrumb-menu mb-25">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><span>Case Studies</span></li>
                                </ul>
                            </nav>
                        </div>
                        <h2 class="page-title mb-35 animation__word_come_long">
                            <div
                                style="position: absolute; display: block; left: 61px; top: 174px; width: 315px; height: 76px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 48px; height: 76px;">
                                    a</div>
                                <div
                                    style="position: absolute; display: block; left: 47px; top: 0px; width: 58px; height: 76px;">
                                    m</div>
                                <div
                                    style="position: absolute; display: block; left: 104px; top: 0px; width: 48px; height: 76px;">
                                    a</div>
                                <div
                                    style="position: absolute; display: block; left: 151px; top: 0px; width: 43px; height: 76px;">
                                    z</div>
                                <div
                                    style="position: absolute; display: block; left: 193px; top: 0px; width: 21px; height: 76px;">
                                    i</div>
                                <div
                                    style="position: absolute; display: block; left: 213px; top: 0px; width: 50px; height: 76px;">
                                    n</div>
                                <div
                                    style="position: absolute; display: block; left: 262px; top: 0px; width: 53px; height: 76px;">
                                    g</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 388px; top: 174px; width: 314px; height: 76px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 45px; height: 76px;">
                                    s</div>
                                <div
                                    style="position: absolute; display: block; left: 44px; top: 0px; width: 43px; height: 76px;">
                                    t</div>
                                <div
                                    style="position: absolute; display: block; left: 86px; top: 0px; width: 53px; height: 76px;">
                                    o</div>
                                <div
                                    style="position: absolute; display: block; left: 137px; top: 0px; width: 48px; height: 76px;">
                                    r</div>
                                <div
                                    style="position: absolute; display: block; left: 185px; top: 0px; width: 21px; height: 76px;">
                                    i</div>
                                <div
                                    style="position: absolute; display: block; left: 204px; top: 0px; width: 45px; height: 76px;">
                                    e</div>
                                <div
                                    style="position: absolute; display: block; left: 249px; top: 0px; width: 45px; height: 76px;">
                                    s</div>
                                <div
                                    style="position: absolute; display: block; left: 293px; top: 0px; width: 21px; height: 76px;">
                                    !</div>
                            </div>
                        </h2>
                        <p class="page-title-paragraph xlarge p-text" style="opacity: 1; visibility: inherit;">We showcased
                            how our skilled hands and
                            creative minds turn a concept into a fully-functional product. Here, you will
                            discover satisfied clients with amazing stories!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- project works area start -->
    <div class="project-works-area section-spacing primary-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="projects-wrapper is-white">
                        @if (count($blogs))
                            @foreach ($blogs as $blog)
                                <div class="project-box">
                                    <div class="project-box__thumb order-sm-1">
                                        <div class="animate-image"
                                            style="translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: translate(0px, 10px); opacity: 1;">
                                            <a href="case-details.html"><img class="topylo-tilt"
                                                    src="{{ asset('storage/' . $blog['image']) }}"
                                                    alt="{{ $blog['title_' . session('lang')] }}"
                                                    style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"></a>
                                        </div>
                                    </div>
                                    <div class="project-box-content order-sm-0">
                                        <div class="bdFadeLeft"
                                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                                            <h4 class="project__title">
                                                <a href="case-details.html">{{ $blog['title_' . session('lang')] }}<span
                                                        class="icon-box"><i class="flaticon-next"></i></span></a>
                                            </h4>
                                            <p>
                                                {{ $blog['text_' . session('lang')] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif
                    </div>
                </div>
                <div class="col-lg-4 bd-position-sticky">
                    <div class="pin-spacer"
                        style="order: 0; place-self: auto; grid-area: auto; z-index: auto; float: none; flex-shrink: 1; display: block; margin: 0px; inset: auto; position: relative; flex-basis: auto; overflow: visible; box-sizing: border-box; width: 450px; height: 330px; padding: 0px;">
                        <div class="column two"
                            style="translate: none; rotate: none; scale: none; inset: 0px auto auto 0px; margin: 0px; max-width: 449.987px; width: 449.987px; max-height: 330px; height: 330px; padding: 0px; transform: translate(0px, 0px);">
                            <div class="project-social-wrappper">
                                <div class="project-social">
                                    <a href="https://www.youtube.com/@istek_uz/featured%20%7C" target="_blank">
                                        <div class="social-round-item">
                                            <div class="social-round-content">
                                                <img src="assets/img/icons/dribbble.png" alt="image not found">
                                                <h3 class="project-social-title">Dribbble</h3>
                                            </div>
                                            <div class="social-round-link">
                                                <span><i class="fa-light fa-angle-right"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="project-social">
                                    <a href="https://t.me/istek_uz" target="_blank">
                                        <div class="social-round-item">
                                            <div class="social-round-content">
                                                <img src="https://banner2.cleanpng.com/20180715/wqp/kisspng-telegram-computer-icons-logo-instant-messaging-logo-telegram-5b4bacc39c7ab2.140787891531686083641.jpg"
                                                    alt="image not found">
                                                <h3 class="project-social-title">Telgramm</h3>
                                            </div>
                                            <div class="social-round-link">
                                                <span><i class="fa-light fa-angle-right"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="project-social">
                                    <a href="https://www.instagram.com/istek.uz/" target="_blank">
                                        <div class="social-round-item">
                                            <div class="social-round-content">
                                                <img src="assets/img/icons/instagram.png" alt="image not found">
                                                <h3 class="project-social-title">Instagram</h3>
                                            </div>
                                            <div class="social-round-link">
                                                <span><i class="fa-light fa-angle-right"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project works area end -->

    <!-- brand area start -->
    <section class="brand-area section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper section-title-spacing">
                        <h2 class="section__title-inner animation__word_come" style="height: 140px;">
                            <div
                                style="position: absolute; display: block; left: 61px; top: 120px; width: 185px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 41px; height: 70px;">
                                    S</div>
                                <div
                                    style="position: absolute; display: block; left: 40px; top: 0px; width: 18px; height: 70px;">
                                    i</div>
                                <div
                                    style="position: absolute; display: block; left: 57px; top: 0px; width: 45px; height: 70px;">
                                    n</div>
                                <div
                                    style="position: absolute; display: block; left: 101px; top: 0px; width: 44px; height: 70px;">
                                    c</div>
                                <div
                                    style="position: absolute; display: block; left: 144px; top: 0px; width: 41px; height: 70px;">
                                    e</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 257px; top: 120px; width: 157px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 36px; height: 70px;">
                                    1</div>
                                <div
                                    style="position: absolute; display: block; left: 35px; top: 0px; width: 36px; height: 70px;">
                                    9</div>
                                <div
                                    style="position: absolute; display: block; left: 69px; top: 0px; width: 36px; height: 70px;">
                                    8</div>
                                <div
                                    style="position: absolute; display: block; left: 104px; top: 0px; width: 36px; height: 70px;">
                                    8</div>
                                <div
                                    style="position: absolute; display: block; left: 138px; top: 0px; width: 19px; height: 70px;">
                                    ,</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 426px; top: 120px; width: 182px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 52px; height: 70px;">
                                    m</div>
                                <div
                                    style="position: absolute; display: block; left: 51px; top: 0px; width: 48px; height: 70px;">
                                    o</div>
                                <div
                                    style="position: absolute; display: block; left: 98px; top: 0px; width: 44px; height: 70px;">
                                    r</div>
                                <div
                                    style="position: absolute; display: block; left: 141px; top: 0px; width: 41px; height: 70px;">
                                    e</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 619px; top: 120px; width: 169px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 38px; height: 70px;">
                                    t</div>
                                <div
                                    style="position: absolute; display: block; left: 37px; top: 0px; width: 45px; height: 70px;">
                                    h</div>
                                <div
                                    style="position: absolute; display: block; left: 81px; top: 0px; width: 44px; height: 70px;">
                                    a</div>
                                <div
                                    style="position: absolute; display: block; left: 124px; top: 0px; width: 45px; height: 70px;">
                                    n</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 798px; top: 120px; width: 105px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 36px; height: 70px;">
                                    1</div>
                                <div
                                    style="position: absolute; display: block; left: 35px; top: 0px; width: 36px; height: 70px;">
                                    7</div>
                                <div
                                    style="position: absolute; display: block; left: 69px; top: 0px; width: 36px; height: 70px;">
                                    0</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 914px; top: 120px; width: 257px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 43px; height: 70px;">
                                    b</div>
                                <div
                                    style="position: absolute; display: block; left: 42px; top: 0px; width: 44px; height: 70px;">
                                    r</div>
                                <div
                                    style="position: absolute; display: block; left: 85px; top: 0px; width: 44px; height: 70px;">
                                    a</div>
                                <div
                                    style="position: absolute; display: block; left: 128px; top: 0px; width: 45px; height: 70px;">
                                    n</div>
                                <div
                                    style="position: absolute; display: block; left: 172px; top: 0px; width: 45px; height: 70px;">
                                    d</div>
                                <div
                                    style="position: absolute; display: block; left: 216px; top: 0px; width: 41px; height: 70px;">
                                    s</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 1181px; top: 120px; width: 168px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 45px; height: 70px;">
                                    h</div>
                                <div
                                    style="position: absolute; display: block; left: 44px; top: 0px; width: 44px; height: 70px;">
                                    a</div>
                                <div
                                    style="position: absolute; display: block; left: 86px; top: 0px; width: 41px; height: 70px;">
                                    v</div>
                                <div
                                    style="position: absolute; display: block; left: 127px; top: 0px; width: 41px; height: 70px;">
                                    e</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 61px; top: 190px; width: 286px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 38px; height: 70px;">
                                    t</div>
                                <div
                                    style="position: absolute; display: block; left: 37px; top: 0px; width: 44px; height: 70px;">
                                    r</div>
                                <div
                                    style="position: absolute; display: block; left: 80px; top: 0px; width: 44px; height: 70px;">
                                    u</div>
                                <div
                                    style="position: absolute; display: block; left: 124px; top: 0px; width: 41px; height: 70px;">
                                    s</div>
                                <div
                                    style="position: absolute; display: block; left: 164px; top: 0px; width: 38px; height: 70px;">
                                    t</div>
                                <div
                                    style="position: absolute; display: block; left: 201px; top: 0px; width: 41px; height: 70px;">
                                    e</div>
                                <div
                                    style="position: absolute; display: block; left: 241px; top: 0px; width: 45px; height: 70px;">
                                    d</div>
                            </div>­ <div
                                style="position: absolute; display: block; left: 358px; top: 190px; width: 102px; height: 70px; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div
                                    style="position: absolute; display: block; left: 0px; top: 0px; width: 44px; height: 70px;">
                                    u</div>
                                <div
                                    style="position: absolute; display: block; left: 43px; top: 0px; width: 41px; height: 70px;">
                                    s</div>
                                <div
                                    style="position: absolute; display: block; left: 83px; top: 0px; width: 19px; height: 70px;">
                                    .</div>
                            </div>­
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-wrapper">
            <div
                class="swiper-container swiper-round-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-f710bd831012ecabb9" aria-live="polite"
                    style="transition-duration: 0ms; transform: translate3d(-3676.8px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                        aria-label="1 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-4.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                        aria-label="2 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-5.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group"
                        aria-label="3 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-1.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group"
                        aria-label="4 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-2.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" role="group"
                        aria-label="5 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-3.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group"
                        aria-label="6 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-1.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group"
                        aria-label="7 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-2.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group"
                        aria-label="8 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-3.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="9 / 18"
                        style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-4.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="10 / 18"
                        style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-5.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="11 / 18"
                        style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-1.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="12 / 18"
                        style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-2.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="13 / 18"
                        style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-3.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="0"
                        role="group" aria-label="14 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-1.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="1"
                        role="group" aria-label="15 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-2.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="2"
                        role="group" aria-label="16 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-3.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                        aria-label="17 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-4.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                        aria-label="18 / 18" style="width: 306.4px;">
                        <div class="brand-round-item">
                            <div class="brand-round-thumb">
                                <img src="assets/img//brand/brand-5.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <!-- brand area start -->

@endsection
