<x-layouts.frontend>

    <!-- Start of Breadcrumbs  section
        ============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>{{__('main.mission1')}}</h1>
                <ul>
                    <li><a href="{{ route('index')}}">{{__('main.main')}}</a></li>
                    <li>{{__('main.mission1')}}</li>
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

    <!-- Start of Mission Accordion  section
        ============================================= -->
    <section id="ori-mission" class="ori-mission-section position-relative">
        <div class="container">
            <div class="ori-mission-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ori-mission-title-text">
                            <div class="ori-inner-section-title">
                                <span class="sub-title text-uppercase">{{__('main.mission17')}}</span>
                                <h2>{{__('main.mission18')}}</h2>
                                <p>{{__('main.mission16')}}</p>
                            </div>
                            <div class="ori-btn-1 text-uppercase">
                                <a href="{{ route('contact')}}">{{__('main.contact1')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ori-mission-accordion position-relative">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{__('main.mission2')}}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{__('main.mission3')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{__('main.mission4')}}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{__('main.mission5')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {{__('main.mission6')}}
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{__('main.mission7')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            {{__('main.mission8')}}
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{__('main.mission9')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- End of Mission Accordion  section
        ============================================= -->

    <!-- Start of Vission section
        ============================================= -->
    <section id="ori-vission" class="ori-vission-section position-relative">
        <div class="container">
            <div class="ori-vission-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ori-vission-text-area">
                            <div class="ori-service-why-choose-text">
                                <div class="ori-inner-section-title">
                                    <span class="sub-title text-uppercase">{{__('main.mission10')}}</span>
                                    <h2>{{__('main.mission11')}}</h2>
                                </div>
                                <div class="ori-service-why-choose-list-item ul-li-block">
                                    <ul>
                                        <li>{{__('main.mission12')}}</li>
                                        <li>{{__('main.mission13')}}</li>
                                    </ul>
                                </div>
                                <div class="ori-vission-more-btn text-uppercase">
                                    <a href="{{route('about')}}">{{__('main.readMore')}} <i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ori-about-play-area position-relative">
                            <div class="ori-about-play-img">
                                <img src="assets/img/about/istek-play.jpg" alt="">
                            </div>
                            <div class="about-play-btn position-absolute">
                                <a class="text-uppercase video_box d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=sAnapTqdieo">{{__('main.see')}}</a>
                            </div>
                        </div>
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
    <!-- End of Vission  section
        ============================================= -->

    <!-- Start of Sponsor section
        ============================================= -->
    <section id="ori-sponsor-1" class="ori-sponsor-section-1 inner-sponsor position-relative">
        <div class="container">
            <div class="ori-sponsor-title text-uppercase text-center">
                <h3><i></i><span>{{__('main.partner')}}</span><i></i></h3>
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
                                <img src="/assets/img/sponsor/dora.png" alt="">
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
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="/assets/img/sponsor/dora.png" alt="">
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
</x-layouts.frontend>