<x-layouts.frontend>
    <?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
    ?>

    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>{{__('main.index6')}}</h1>
                <ul>
                    <li><a href="{{ route('index')}}">{{__('main.main')}}</a></li>
                    <li>{{__('main.index6')}}</li>
                </ul>
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
    <!-- End of Breadcrumbs section
	============================================= -->

    <!-- Start of Team post feed  section
	============================================= -->
    <section id="ori-team-post-feed" class="ori-team-post-feed-section position-relative">
        <div class="container">
            <div class="ori-team-post-feed-content">
                <div class="row">
                    <div class="row">
                        @foreach($teams as $tm )
                        <div class="col-lg-4">
                            <div class="ori-team-inner-item position-relative">
                                <div class="ori-team-img">
                                    <img src="/storage/{{ $tm->image}}" alt="">
                                </div>
                                <div class="ori-team-text text-center position-absolute">
                                    <h3><a href="{{ route('singleTeam', ['team' => $tm->id]) }}">{{$tm->full_name}}</a>
                                    </h3>
                                    <span>{{ $tm->job }}</span>
                                </div>
                                <div class="ori-team-social text-center position-absolute">
                                    <a href="{{ $tm->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $tm->telegram_link}}"><i class="fab fa-telegram"></i></a>
                                    <a href="{{ $tm->instagram_link}}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $tm->YouTube_link}}"><i class="fab fa-youtube"></i></a>
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
    <!-- End of Team post feed   section
	============================================= -->

    <!-- Start of Testimonial section
	============================================= -->
    <section id="ori-testimonial-1" class="ori-testimonial-section-1 position-relative">
        <div class="ori-vector-bg position-absolute">
            <img src="assets/img/vector/tst-vector1.png" alt="">
        </div>
        <div class="container">
            <div class="ori-testimonial-content-1 position-relative">
                <div class="ori-testimonial-title text-center text-uppercase">
                    <h3>{{__('main.team1')}}</h3>
                </div>
                <div class="ori-testimonial-slider-1">
                    <div class="ori-testimonial-item-area">
                        <div class="ori-testimonial-item-1">
                            <div class="ori-testimonial-text text-center pera-content">
                                <p>{{__('main.team2')}}</p>
                                <div class="ori-testimonial-author text-center text-uppercase">
                                    <h4>Ismoil Usmonov</h4>
                                    <span>CEO, Tech Innovators</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ori-testimonial-item-area">
                        <div class="ori-testimonial-item-1">
                            <div class="ori-testimonial-text text-center pera-content">
                                <p>{{__('main.team3')}}</p>
                                <div class="ori-testimonial-author text-center text-uppercase">
                                    <h4>Samariddion Nurmamatov</h4>
                                    <span>Me'mor, Design Works</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ori-testimonial-item-area">
                        <div class="ori-testimonial-item-1">
                            <div class="ori-testimonial-text text-center pera-content">
                                <p>{{__('main.team4')}}</p>
                                <div class="ori-testimonial-author text-center text-uppercase">
                                    <h4>Jalilov Quvonchbek</h4>
                                    <span>Menejer, Creative Solutions</span>
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
</x-layouts.frontend>