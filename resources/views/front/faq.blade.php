<x-layouts.frontend>

    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>FAQ</h1>
                <ul>
                    <li><a href="{{ route('index')}}">{{__('main.main')}}</a></li>
                    <li>FAQ</li>
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
    <!-- Start of Faq section -->
    <section id="ori-faq" class="ori-faq-section position-relative">
        <div class="container">
            <div class="ori-faq-content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ori-faq-tab-btn">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">{{__('main.faq_aboutservices')}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">{{__('main.faq_subsaccount')}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">{{__('main.faq_returnpolic')}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab" aria-controls="support" aria-selected="false">{{__('main.faq_support')}}</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ori-faq-text-wrapper-content">
                            <div class="ori-inner-section-title">
                                <span class="sub-title text-uppercase">{{__('main.faq1')}}</span>
                                <h2>{{__('main.faq2')}}</h2>
                            </div>
                            <div class="ori-faq-accordion-area">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane animated fadeInUp show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="ori-faq-accordion-item-area">
                                            <div class="accordion" id="accordionExample_2">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            {{__('main.faq3')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.faq4')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            {{__('main.faq5')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.faq6')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            {{__('main.faq7')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.faq8')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            {{__('main.faq9')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.faq10')}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="ori-faq-accordion-item-area">
                                            <div class="accordion" id="accordionExample_3">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading5">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                            {{__('main.faq11')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="heading5" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.faq12')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading6">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                            {{__('main.faq13')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.faq14')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading7">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                            {{__('main.faq15')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.faq16')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading8">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                                            {{__('main.faq17')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.faq18')}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="ori-faq-accordion-item-area">
                                            <div class="accordion" id="accordionExample_31">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading10">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                            {{__('main.faq19')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="heading10" data-bs-parent="#accordionExample_31">
                                                        <div class="accordion-body">
                                                            {{__('main.faq20')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading12">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                            {{__('main.faq21')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample_31">
                                                        <div class="accordion-body">
                                                            {{__('main.faq22')}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane animated fadeInUp" id="support" role="tabpanel" aria-labelledby="support-tab">
                                        <div class="ori-faq-accordion-item-area">
                                            <div class="accordion" id="accordionExample_4">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading13">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                                            {{__('main.faq23')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse13" class="accordion-collapse collapse show" aria-labelledby="heading13" data-bs-parent="#accordionExample_4">
                                                        <div class="accordion-body">
                                                            {{__('main.faq24')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading14">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                                            {{__('main.faq25')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample_4">
                                                        <div class="accordion-body">
                                                            {{__('main.faq26')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading15">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                                            {{__('main.faq27')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample_4">
                                                        <div class="accordion-body">
                                                            {{__('main.faq28')}}
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
    <!-- End of Faq section -->



    <!-- Start of Faq price section
	============================================= -->
    <!-- <section id="ori-faq-price" class="ori-faq-price-section position-relative">
        <div class="container">
            <div class="ori-inner-section-title">
                <span class="sub-title text-uppercase">PRICING PLANS</span>
                <h2>Our Affordable Pricing Plans</h2>
            </div>
            <div class="ori-faq-price-content">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="ori-faq-price-inner-item">
                            <div class="ori-faq-price-title">
                                <span class="price-plan text-uppercase">STANDARD</span>
                                <h3>$160.00 <span>Per month</span></h3>
                            </div>
                            <div class="ori-faq-price-slug">
                                Perfect for Professional
                            </div>
                            <div class="ori-faq-price-list ul-li-block">
                                <ul>
                                    <li>Up to 100 keyphrases otimized</li>
                                    <li>Custom dashboards: 4</li>
                                    <li>Digital marketing expert</li>
                                    <li>Content, and link monitoring</li>
                                    <li>Content marketing assets: 4</li>
                                    <li>Upload your document</li>
                                    <li>Export PDF</li>
                                </ul>
                            </div>
                            <div class="ori-faq-price-btn text-center text-uppercase">
                                <a href="#">purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ori-faq-price-inner-item">
                            <div class="ori-faq-price-title">
                                <span class="price-plan text-uppercase">ultra</span>
                                <h3>$180.00 <span>Per month</span></h3>
                            </div>
                            <div class="ori-faq-price-slug">
                                Perfect for Professional
                            </div>
                            <div class="ori-faq-price-list ul-li-block">
                                <ul>
                                    <li>Up to 100 keyphrases otimized</li>
                                    <li>Custom dashboards: 4</li>
                                    <li>Digital marketing expert</li>
                                    <li>Content, and link monitoring</li>
                                    <li>Content marketing assets: 4</li>
                                    <li>Upload your document</li>
                                    <li>Export PDF</li>
                                </ul>
                            </div>
                            <div class="ori-faq-price-btn text-center text-uppercase">
                                <a href="#">purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ori-faq-price-inner-item">
                            <div class="ori-faq-price-title">
                                <span class="price-plan text-uppercase">premium</span>
                                <h3>$210.00 <span>Per month</span></h3>
                            </div>
                            <div class="ori-faq-price-slug">
                                Perfect for Professional
                            </div>
                            <div class="ori-faq-price-list ul-li-block">
                                <ul>
                                    <li>Up to 100 keyphrases otimized</li>
                                    <li>Custom dashboards: 4</li>
                                    <li>Digital marketing expert</li>
                                    <li>Content, and link monitoring</li>
                                    <li>Content marketing assets: 4</li>
                                    <li>Upload your document</li>
                                    <li>Export PDF</li>
                                </ul>
                            </div>
                            <div class="ori-faq-price-btn text-center text-uppercase">
                                <a href="#">purchase now</a>
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
    </section> -->
    <!-- End of Faq Price section
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
                                <img src="/assets/img/sponsor/dora.png" alt="">
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