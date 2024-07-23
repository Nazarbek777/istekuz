<?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
?>
<x-layouts.frontend>
    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>{{ $news['name_'.App::getLocale()]}}</h1>
                <ul>
                    <li><a href="index.html">Istek</a></li>
                    <li>Yangiliklar</li>
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
            <!-- <div class="line_area"></div> -->
        </div>
    </section>
    <!-- End of Breadcrumbs section
	============================================= -->

    <!-- Start of Blog Details  section
	============================================= -->
    <section id="ori-blog-details" class="ori-blog-details-section position-relative">
        <div class="container">
            <div class="ori-blog-details-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ori-blog-details-text-wrapper">
                            <div class="ori-blog-feed-item">
                                <div class="ori-blog-img">
                                    <img src="/storage/{{$news->image}}" alt="">
                                </div>
                                <div class="ori-blog-text pera-content">
                                    <div class="blog-meta text-uppercase">
                                        <a class="blog-author" href="{{ route('blog')}}"><i class="fas fa-user"></i>Istek</a>
                                        <a class="blog-date" href="{{ route('blog')}}"><i class="fas fa-calendar-alt"></i>{{ $news->created_at->format('d-m-Y')}}</a>
                                    </div>
                                    <h3>{{ $news['name_'. App::getLocale()]}}</h3>
                                    <p>{!! $news['description_'.App::getLocale()] !!}</p>
                                    
                                </div>
                            </div>
                            <div class="ori-portfolio-details-tag-share d-flex justify-content-between align-items-center">
                                
                                <div class="ori-portfolio-details-share">
                                <a href="https://www.facebook.com/people/Istek/61557360990149/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://t.me/istek_uz" target="_blank"><i class="fab fa-telegram"></i></a>
                                <a href="https://www.instagram.com/istek.uz/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@istek_uz" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ori-blog-sidebar">
                            <div class="ori-blog-widget">
                                <div class="search-widget">
                                    <h3 class="widget-title">Qidirish</h3>
                                    <form action="{{ route('blog.search')}}" method="post">
                                        @csrf
                                        <input type="text" name="search" placeholder="Kalit so'zni qidiring">
                                        <button><i class="fal fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="ori-blog-widget">
                                <div class="recent-post-widget">
                                <h3 class="widget-title">{{__('main.blogs')}}</h3>
                                    @foreach($news2 as $tm)
                                        <div class="ori-recent-post-item d-flex align-items-center">
                                            <div class="recent-blog-img" style="width: 120px">
                                                <img style="width: 100%" src="{{ asset('storage/' . $tm->image2) }}" alt="">
                                            </div>
                                            <div class="recent-blog-text">
                                                {{ \Carbon\Carbon::parse($tm->created_at)->format('d-m-Y') }}
                                                <h3><a href="{{ route('singleBlog', ['blog' => $tm->id]) }}">{{ $tm['name_' . $lang] }}</a></h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ori-blog-widget">
                                <div class="service-widget ul-li-block">
                                    <h3 class="widget-title">{{__('main.category')}}</h3>
                                    <ul>
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('product') }}">{{ $category['name_' . $lang] }} <span>({{ $category->products->count() }})</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="ori-blog-widget">
                                <div class="gallery-widget ul-li">
                                    <h3 class="widget-title">{{__('main.blog1')}}</h3>
                                    <ul class="zoom-gallery">
                                        <li><a href="/assets/img/Artboard1K.jpg" data-source="assets/img/Artboard1.jpg"><img src="/assets/img/Artboard1.jpg" alt=""></a></li>
                                        <li><a href="/assets/img/Artboard2K.jpg" data-source="assets/img/Artboard2.jpg"><img src="/assets/img/Artboard2.jpg" alt=""></a></li>
                                        <li><a href="/assets/img/Artboard3K.jpg" data-source="assets/img/gallery/gl3.png"><img src="/assets/img/Artboard3.jpg" alt=""></a></li>
                                        <li><a href="/assets/img/Artboard4K.jpg" data-source="assets/img/gallery/gl4.png"><img src="/assets/img/Artboard4.jpg" alt=""></a></li>
                                        <li><a href="/assets/img/Artboard5K.jpg" data-source="assets/img/gallery/gl4.png"><img src="/assets/img/Artboard5.jpg" alt=""></a></li>
                                        <li><a href="/assets/img/Artboard6K.jpg" data-source="assets/img/gallery/gl4.png"><img src="/assets/img/Artboard6.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ori-blog-add-widget">
                                <a href="contact.html">
                                    <img src="assets/img/blog/blg-add.png" alt="">
                                </a>
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
    <!-- End of Blog Details  section
	============================================= -->
</x-layouts.frontend>