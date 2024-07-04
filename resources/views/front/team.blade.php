<x-layouts.frontend>
    <?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
    ?>


<!-- Search PopUp -->
<div class="search-popup">
    <button class="close-search style-two"><span class="fal fa-times"></span></button>
    <button class="close-search"><span class="fa fa-arrow-up"></span></button>
    <form method="post" action="blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
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
                            <a href="index-1.html"
                            ><img src="assets/img/logo/logo1.png" alt=""></a>
                        </div>
                        <div class="content-box">
                            <h5>About Us</h5>
                            <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                        </div>
                        <div class="gallery-box ul-li">
                            <h5>Gallery</h5>
                            <ul class="zoom-gallery">
                                <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl1.png" alt=""></a></li>
                                <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl2.png" alt=""></a></li>
                                <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl3.png" alt=""></a></li>
                                <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl4.png" alt=""></a></li>
                                <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl5.png" alt=""></a></li>
                                <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl6.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="content-box">
                            <h5>Social Account</h5>
                            <ul class="social-box">
                                <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
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

<!-- Start of Breadcrumbs  section
	============================================= -->
<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
    <div class="container">
        <div class="ori-breadcrumb-content text-center ul-li">
            <h1>Team</h1>
            <ul>
                <li><a href="index.html">orixy</a></li>
                <li>Team</li>
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
                                    <span>GRAPHIC DESIGNER</span>
                                </div>
                                <div class="ori-team-social text-center position-absolute">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
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
                <h3>What our Client say</h3>
            </div>
            <div class="ori-testimonial-slider-1">
                <div class="ori-testimonial-item-area">
                    <div class="ori-testimonial-item-1">
                        <div class="ori-testimonial-text text-center pera-content">
                            <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                            </p>
                            <div class="ori-testimonial-author text-center text-uppercase">
                                <h4>Hahimlam Dirat</h4>
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
                                <h4>Hahimlam Dirat</h4>
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
                                <h4>Hahimlam Dirat</h4>
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
</x-layouts.frontend>
