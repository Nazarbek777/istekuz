<x-layouts.frontend>
    <?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>

    <!-- Start of Slider section
	============================================= -->
    <section id="ori-slider-1" class="ori-slider-section-1 position-relative">
        <div class="ori-slider-content-wrapper-1 postion-relative">
            <div class="ori-slider-social position-absolute text-uppercase ul-li">
                <ul>
                    <li><a href="https://www.facebook.com/people/Istek/61557360990149/" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="https://www.youtube.com/@istek_uz" target="_blank"><i class="fab fa-youtube"></i> Youtube</a></li>
                    <li><a href="https://www.instagram.com/istek.uz/" target="_blank"><i class="fab fa-instagram"></i>Instagram</a></li>
                </ul>
            </div>
            <div class="ori-slider-wrap-1">
                <div class="ori-slider-content-1 position-relative">
                    <div class="ori-slider-text text-center  text-uppercase">
                        <h1>{{__('main.index1')}} <span>TRIO 6000</span>
                            <i class="fas fa-arrow-right"></i>
                        </h1>
                        <div class="slider-play-btn">
                            <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="https://www.youtube.com/watch?v=sAnapTqdieo">{{__('main.see')}}</a>
                        </div>
                        <div class="ori-slider-img position-absolute">
                            <img src="assets/img/slider/slider-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="ori-slider-content-1 position-relative">
                    <div class="ori-slider-text text-center  text-uppercase">
                        <h1>{{__('main.index2')}} <span>Thermo 70 </span>
                            <i class="fas fa-arrow-right"></i>
                        </h1>
                        <div class="slider-play-btn">
                            <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="https://www.youtube.com/watch?v=sAnapTqdieo">{{__('main.see')}}</a>
                        </div>
                        <div class="ori-slider-img position-absolute">
                            <img src="assets/img/slider/slider-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="ori-slider-content-1 position-relative">
                    <div class="ori-slider-text text-center  text-uppercase">
                        <h1>{{__('main.index3')}} <span>BKT 57</span>
                            <i class="fas fa-arrow-right"></i>
                        </h1>
                        <div class="slider-play-btn">
                            <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="https://www.youtube.com/watch?v=sAnapTqdieo">{{__('main.see')}}</a>
                        </div>
                        <div class="ori-slider-img position-absolute">
                            <img src="assets/img/slider/slider-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="line_animation">
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
            </div>
        </div>
        <div class="ori-slider-scroll position-absolute text-uppercase">
            <span>SCrool </span>
            <div class="scroll-mouse">
                <i class="fal fa-mouse"></i>
            </div>
        </div>
    </section>
    <!-- End of Slider section
	============================================= -->
    <!-- Start of Service section
	============================================= -->
    <section id="ori-service-1" class="ori-service-section-1">
        <div class="ori-service-wrapper-1">
            <div class="container">
                <div class="ori-service-top-content-1 d-flex justify-content-between align-items-center">
                    <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2>{{__('main.index4')}} <span> {{__('main.ISTEK')}}</span></h2>
                    </div>
                    <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <a href="tel: +998935135324">{{__('main.contact1')}}</a>
                    </div>
                </div>
                <div class="ori-service-content-1">
                    <div class="row">
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="ori-service-inner-item position-relative">
                                <div class="ori-service-more position-absolute">
                                    <a href="{{route('about')}}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="ori-service-img-title position-relative">
                                    <div class="ori-service-img">
                                        <img src="assets/img/service/ser1.png" alt="">
                                    </div>
                                    <div class="ori-service-title text-center position-absolute">
                                        <h3>{{__('main.about')}} <i class="fal fa-arrow-right"></i></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="ori-service-inner-item position-relative">
                                <div class="ori-service-more position-absolute">
                                    <a href="{{ route('mission')}}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="ori-service-img-title position-relative">
                                    <div class="ori-service-img">
                                        <img src="assets/img/service/ser2.png" alt="">
                                    </div>
                                    <div class="ori-service-title text-center position-absolute">
                                        <h3>{{__('main.about48')}}<i class="fal fa-arrow-right"></i></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                            <div class="ori-service-inner-item position-relative">
                                <div class="ori-service-more position-absolute">
                                    <a href="{{ route('partner')}}"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="ori-service-img-title position-relative">
                                    <div class="ori-service-img">
                                        <img src="assets/img/service/ser3.png" alt="">
                                    </div>
                                    <div class="ori-service-title text-center position-absolute">
                                        <h3>{{__('main.partners')}} <i class="fal fa-arrow-right"></i></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service section
	============================================= -->

    <!-- Start of Sponsor section
	============================================= -->
    <section id="ori-sponsor-1" class="ori-sponsor-section-1 position-relative">
        <div class="container">
            <div class="ori-sponsor-title text-uppercase text-center">
                <h3><i></i> <span>{{__('main.partner2')}}</span> <i></i> </h3>
            </div>
            <div class="ori-sponsor-content">
                <div class="ori-sponsor-slider">
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="/assets/img/sponsor/dora.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="/assets/img/sponsor/akfa.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="/assets/img/sponsor/englber.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="/assets/img/sponsor/imzo.png" alt="">
                            </a>
                        </div>
                    </div>
                    @foreach ($logos as $logo )

                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="/storage/{{ $logo->image }}" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Sponsor section
	============================================= -->

    <!-- Start of Project section
	============================================= -->
    <section id="ori-project-1" class="ori-project-section-1 position-relative">
        <div class="container">
            <div class="ori-project-content-1 position-relative">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ori-project-tab-btn-content">
                            <div class="ori-section-title-1 text-uppercase wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <h2>{{__('main.ISTEK')}} <span> {{__('main.products')}}</span></h2>
                            </div>
                            <div class="ori-project-tab-btn ul-li-block text-uppercase wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    @foreach($categories as $index => $category)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{ $index == 0 ? 'active' : '' }}" id="category-tab-{{ $category->id }}" data-bs-toggle="pill" data-bs-target="#category-{{ $category->id }}" type="button" role="tab" aria-controls="category-{{ $category->id }}" aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                                {{ $category['name_'. $lang] }}
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ori-project-tab-content wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="tab-content" id="pills-tabContent">
                                @foreach($categories as $index => $category)
                                    <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="category-tab-{{ $category->id }}">
                                        @php $products = $category->products->take(2); @endphp
                                        @foreach($products as $product)
                                            <div class="ori-project-item-1 position-relative">
                                                <div class="ori-project-img">
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product['name_'.$lang] }}">
                                                </div>
                                                <div class="ori-project-text position-absolute">
                                                    <h3><a href="{{ route('singleProduct', $product->id) }}">{{ $product['name_'.$lang] }}</a></h3>
                                                    <span class="text-uppercase project-category"><a href="#">{{__('main.ISTEK')}} - {{__('main.index4')}}</a></span>
                                                </div>
                                                <div class="ori-project-link position-absolute">
                                                    <a href="{{ route('singleProduct', $product->id) }}"><i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ori-btn-1 position-absolute text-uppercase wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <a href="{{route('product')}}">{{__('main.seeAll')}}</a>
                </div>
            </div>

        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Project section
	============================================= -->

    <!-- Start of Text scroll section
	============================================= -->
    <section id="ori-text-scroll-1" class="ori-text-scroll-section-1 position-relative">
        <div class="ori-text-scroll-content">
            <div class="ori-text-scroll-item-1 text-uppercase">
                <h3>{{__('main.index4')}}<span> {{__('main.istek1')}}</span></h3>
                <span class="ori-text-scroll-icon"><img src="./assets/img/new/logo-star.svg" width="84px" /></span>
                <h3>{{__('main.index4')}}<span> {{__('main.istek1')}}</span></h3>
                <span class="ori-text-scroll-icon"><img src="./assets/img/new/logo-star.svg" width="84px" /></span>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Text scroll section
	============================================= -->

    <!-- Start of Team section
	============================================= -->
    <section id="ori-team-1" class="ori-team-section-1 position-relative">
        <div class="ori-team-content-area">
            <div class="container">
                <div class="ori-team-top-content-1 d-flex justify-content-between align-items-center">
                    <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2>{{__('main.index5')}} <span>{{__('main.index6')}}</span></h2>
                    </div>
                    <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <a href="team.html">{{__('main.seeAll')}}</a>
                    </div>
                </div>
                <div class="ori-team-content-1">
                    <div class="row">
                        @foreach ($teams as $team )

                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="ori-team-inner-item position-relative">
                                <div class="ori-team-img">
                                    <img src="/storage/{{ $team->image }}" alt="">
                                </div>
                                <div class="ori-team-text text-center position-absolute">
                                    <h3><a href="team-single.html">{{ $team->full_name }}</a></h3>
                                    <span>{{$team->job}}</span>
                                </div>
                                <div class="ori-team-social text-center position-absolute">
                                    <a href="{{ $team->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $team->telegram_link}}"><i class="fab fa-telegram"></i></a>
                                    <a href="{{ $team->istagram_link}}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $team->youtube_link }}"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Team section
	============================================= -->

    <!-- Start of Testimonial section
	============================================= -->
    <section id="ori-testimonial-1" class="ori-testimonial-section-1 position-relative">
        <div class="ori-vector-bg position-absolute wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
            <img src="assets/img/vector/tst-vector1.png" alt="">
        </div>
        <div class="container">
            <div class="ori-testimonial-content-1 position-relative">
                <div class="ori-testimonial-title text-center text-uppercase">
                    <h3>{{__('main.index7')}}</h3>
                </div>
                <div class="ori-testimonial-slider-1">
                    <div class="ori-testimonial-item-area">
                        <div class="ori-testimonial-item-1">
                            <div class="ori-testimonial-text text-center pera-content">
                                <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                                </p>
                                <div class="ori-testimonial-author text-center text-uppercase">
                                    <h4>Suhrob Baxtiyorov</h4>
                                    <span>ui/ux Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ori-testimonial-item-area">
                        <div class="ori-testimonial-item-1">
                            <div class="ori-testimonial-text text-center pera-content">
                                <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                                </p>
                                <div class="ori-testimonial-author text-center text-uppercase">
                                    <h4>Suhrob Baxtiyorov</h4>
                                    <span>ui/ux Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ori-testimonial-item-area">
                        <div class="ori-testimonial-item-1">
                            <div class="ori-testimonial-text text-center pera-content">
                                <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                                </p>
                                <div class="ori-testimonial-author text-center text-uppercase">
                                    <h4>Suhrob Baxtiyorov</h4>
                                    <span>ui/ux Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="testi-left_arrow"><img src="assets/img/vector/prev.png" alt=""></button>
                    <button type="button" class="testi-right_arrow"><img src="assets/img/vector/next.png" alt=""></button>
                </div>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Testimonial section
	============================================= -->

    <!-- Start of Text scroll section
	============================================= -->
    <section id="ori-text-scroll-2" class="ori-text-scroll-section-2 position-relative">
        <div class="ori-text-scroll-content">
            <div class="ori-text-scroll-item-2 clearfix text-uppercase">
                <h3>{{__('main.index4')}} <span> {{__('main.istek1')}}</span></h3>
                <span class="ori-text-scroll-icon"><img src="./assets/img/new/logo-star.svg" width="84px" /></span>
                <h3>{{__('main.index4')}} <span> {{__('main.istek1')}}</span></h3>
                <span class="ori-text-scroll-icon"><img src="./assets/img/new/logo-star.svg" width="84px" /></span>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Text scroll section
	============================================= -->

    <!-- Start of Blog section
	============================================= -->
    <section id="ori-blog-1" class="ori-blog-section-1 position-relative">
        <div class="container">
            <div class="ori-blog-top-content-1 d-flex justify-content-between align-items-center">
                <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h2><span>{{__('main.istek1')}}</span> {{__('main.news')}} </h2>
                </div>
                <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <a href="blog.html">{{__('main.seeAll')}}</a>
                </div>
            </div>
            <div class="ori-blog-content-1">
                <div class="row">
                    @foreach ($news as $new)

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ori-blog-inner-item">
                            <div class="blog-inner-img">
                                <img src="/storage/{{ $new->image }}" alt="">
                            </div>
                            <div class="blog-inner-text">
                                <h3><a href="{{ route('singleBlog', ['blog' => $new->id])}}">{{$new['name_'.App::getLocale()]}}</a></h3>
                                <a class="read-more text-uppercase" href="{{ route('singleBlog', ['blog' => $new->id])}}">{{__('main.readMore')}}<i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Blog section
	============================================= -->
</x-layouts.frontend>
