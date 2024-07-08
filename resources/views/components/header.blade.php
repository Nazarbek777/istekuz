<?php

use App\Models\Category;

$lang = \Illuminate\Support\Facades\App::getLocale();
$categories = Category::all();
?>
<div id="preloader"></div>
<div class="up">
    <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>
<div class="cursor"></div>
<!-- Start of header section
	============================================= -->
<header id="ori-header" class="ori-header-section header-style-one">
    <div class="ori-header-content-area">
        <div class="ori-header-content d-flex align-items-center justify-content-between">
            <div class="brand-logo">
                <a href="{{ route('index')}}"><img src="/assets/img/logo/logo1.png" alt=""></a>
            </div>
            <div class="ori-main-navigation-area">
                <nav class="ori-main-navigation clearfix ul-li">
                    <ul id="main-nav" class="nav navbar-nav clearfix">
                        <li class="ori-megamenu">
                            <a href="{{ route('index')}}">{{__('main.main')}}</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('about')}}">{{__('main.istek1')}}</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{route('about')}}">{{__('main.about')}}</a></li>
                                <li><a href="{{route('mission')}}">{{__('main.about48')}}</a></li>
                                <!-- <li><a href="404">{{__('main.history')}}</a></li> -->
                                <li><a href="{{ route('partner')}}">{{__('main.partner')}}</a></li>
                                <li><a href="{{ route('team')}}">{{__('main.about33')}}</a></li>
                                <li><a href="{{ route('faq')}}">FAQ</a></li>

                            </ul>
                        </li>
                        <li class="dropdown" style="z-index: 9999 !important;">
                            <a href="{{ route('product') }}">{{ __('main.products') }}</a>
                            <ul class="dropdown-menu clearfix" style="z-index: 9999 !important;">
                                @foreach ($categories as $category)
                                <li class="dropdown" style="z-index: 9999 !important;">
                                    <a href="{{ route('product') }}">{{ $category['name_' . $lang] }}</a>
                                    <ul class="dropdown-menu clearfix" style="z-index: 9999 !important;">
                                        @foreach ($category->products as $product)
                                        <li><a href="{{ route('singleProduct', $product->id) }}">{{ $product['name_' . $lang] }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a class="" href="{{ route('blog')}}">{{__('main.blog')}}</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('calculate')}}">{{__('main.calculator')}}</a>
                        </li>
                        <li>
                            <a href="{{ route('contact')}}">{{__('main.contact')}}</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">{{__('main.language')}}</a>
                            <ul class="dropdown-menu">
                                <li><a href="/uz">Uzbek (uz)</a></li>
                                <li><a href="/ru">Russian (ru)</a></li>
                                <li><a href="/en">English (en)</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="ori-header-sidebar-search d-flex align-items-center">
                <!-- <div class="ori-search-btn">
                    <button class="search-box-outer"><i class="fal fa-search"></i></button>
                </div> -->
                <div class="ori-sidenav-btn navSidebar-button">
                    <button><i class="fal fa-bars"></i></button>
                </div>
            </div>
        </div>
        <div class="mobile_menu position-relative">
            <div class="mobile_menu_button open_mobile_menu">
                <i class="fal fa-bars"></i>
            </div>
            <div class="mobile_menu_wrap">
                <div class="mobile_menu_overlay open_mobile_menu"></div>
                <div class="mobile_menu_content">
                    <div class="mobile_menu_close open_mobile_menu">
                        <i class="fal fa-times"></i>
                    </div>
                    <div class="m-brand-logo">
                        <a href="/"><img src="assets/img/logo/logo1.png" alt=""></a>
                    </div>
                    <nav class="mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="nav navbar-nav clearfix">
                            <li class="ori-megamenu">
                                <a href="{{ route('index')}}">{{__('main.main')}}</a>
                            </li>

                            <li class="dropdown">
                                <a href="{{ route('about')}}">{{__('main.istek1')}}</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{route('about')}}">{{__('main.about')}}</a></li>
                                    <li><a href="{{route('mission')}}">Mission</a></li>
                                    <!-- <li><a href="404">{{__('main.history')}}</a></li> -->
                                    <li><a href="{{ route('partner')}}">{{__('main.partner')}}</a></li>
                                    <li><a href="{{ route('team')}}">Team</a></li>
                                    <li><a href="{{ route('faq')}}">FAQ</a></li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="{{route('product')}}">{{__('main.products')}}</a>
                                <ul class="dropdown-menu clearfix">
                                    @foreach ($categories as $category)
                                <li class="dropdown" style="z-index: 9999 !important;">
                                    <a href="{{ route('product') }}">{{ $category['name_' . $lang] }}</a>
                                    <ul class="dropdown-menu clearfix" style="z-index: 9999 !important;">
                                        @foreach ($category->products as $product)
                                        <li><a href="{{ route('singleProduct', $product->id) }}">{{ $product['name_' . $lang] }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                </ul>
                            </li>

                            <li><a class="active" href="{{ route('blog')}}">{{__('main.blog')}}</a></li>
                            <li><a href="{{route('contact')}}">{{__('main.contact')}}</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{__('main.language')}} </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/uz">Uzbek (uz)</a></li>
                                    <li><a href="/ru">Russian (ru)</a></li>
                                    <li><a href="/en">English (en)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /Mobile-Menu -->
        </div>
    </div>
</header><!-- /header -->
<style>
    .js-marquee {
        display: flex;
        align-items: center;
    }
</style>
<!-- Search PopUp -->
<div class="search-popup">
    <button class="close-search style-two"><span class="fal fa-times"></span></button>
    <button class="close-search"><span class="fa fa-arrow-up"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Qidirish" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- Sidebar sidebar Item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black">
        <div class="row loader-area">
            <div class="col-3 preloader-wrap">
                <div class="loader-bg"></div>
            </div>
            <div class="col-3 preloader-wrap">
                <div class="loader-bg"></div>
            </div>
            <div class="col-3 preloader-wrap">
                <div class="loader-bg"></div>
            </div>
            <div class="col-3 preloader-wrap">
                <div class="loader-bg"></div>
            </div>
        </div>
    </div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">

                <div class="sidebar-info-contents headline pera-content">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="index-1.html"><img src="assets/img/logo/logo1.png" alt=""></a>
                        </div>
                        <div class="content-box">
                            <h5>About Us</h5>
                            <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                        </div>
                        <div class="gallery-box ul-li">
                            <h5>Gallery</h5>
                            <ul class="zoom-gallery">
                                <li><a href="assets/img/gallery/gl1.png" data-source="assets/img/gallery/gl1.png"><img src="assets/img/gallery/gl1.png" alt=""></a></li>
                                <li><a href="assets/img/gallery/gl2.png" data-source="assets/img/gallery/gl2.png"><img src="assets/img/gallery/gl2.png" alt=""></a></li>
                                <li><a href="assets/img/gallery/gl3.png" data-source="assets/img/gallery/gl3.png"><img src="assets/img/gallery/gl3.png" alt=""></a></li>
                                <li><a href="assets/img/gallery/gl4.png" data-source="assets/img/gallery/gl4.png"><img src="assets/img/gallery/gl4.png" alt=""></a></li>
                                <li><a href="assets/img/gallery/gl5.png" data-source="assets/img/gallery/gl4.png"><img src="assets/img/gallery/gl5.png" alt=""></a></li>
                                <li><a href="assets/img/gallery/gl6.png" data-source="assets/img/gallery/gl4.png"><img src="assets/img/gallery/gl6.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h5>Social Account</h5>
                            <ul class="social-box">
                                <a href="https://www.facebook.com/people/Istek/61557360990149/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://t.me/istek_uz"><i class="fab fa-telegram"></i></a>
                                <a href="https://www.instagram.com/istek.uz/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@istek_uz"><i class="fab fa-youtube"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of header section
	============================================= -->