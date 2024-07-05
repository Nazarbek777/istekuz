<x-layouts.frontend>
    <?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
    ?>

        <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>{{__('main.news')}}</h1>
                <ul>
                    <li><a href="index.html">{{__('main.istek1')}}</a></li>
                    <li>{{__('main.news')}}</li>
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

    <!-- Start of Blog Feed section
	============================================= -->
    <section id="ori-blog-feed" class="ori-blog-feed-section position-relative">
        <div class="container">
            <div class="ori-blog-feed-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ori-blog-sidebar">
                            <div class="ori-blog-widget">
                                <div class="search-widget">
                                    <h3 class="widget-title">{{__('main.search')}}</h3>
                                    <form action="#">
                                        <input type="text" name="search" placeholder="{{__('main.search1')}}">
                                        <button><i class="fal fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="ori-blog-widget">
                                <div class="recent-post-widget">
                                    <h3 class="widget-title">{{__('main.blogs')}}</h3>
                                    @foreach($news as $tm)
                                        <div class="ori-recent-post-item d-flex align-items-center">
                                            <div class="recent-blog-img">
                                                <img src="{{ asset('storage/' . $tm->image2) }}" alt="">
                                            </div>
                                            <div class="recent-blog-text">
                                                {{ \Carbon\Carbon::parse($tm->created_at)->format('F d, Y') }}
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
                                        <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl1.png" alt=""></a></li>
                                        <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl2.png" alt=""></a></li>
                                        <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl3.png" alt=""></a></li>
                                        <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl4.png" alt=""></a></li>
                                        <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl5.png" alt=""></a></li>
                                        <li><a href="assets/img/blog/blg-f5.png" data-source="assets/img/blog/blg-f5.png"><img src="assets/img/gallery/gl6.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ori-blog-feed-post-content">
                            <div class="ori-blog-feed-post-item-wrap">
                                @foreach($news as $tm)
                                    <div class="ori-blog-feed-item">
                                        <div class="ori-blog-img">
                                            <img src="assets/img/blog/blg-f1.png" alt="">
                                        </div>
                                        <div class="ori-blog-text pera-content">
                                            <div class="blog-meta text-uppercase">
                                                <a class="blog-cate" href="{{route('blog')}}"><i class="fas fa-file"></i> business</a>
                                                <a class="blog-author" href="{{route('blog')}}"><i class="fas fa-user"></i> Istek</a>
                                                <a class="blog-date" href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>  {{ \Carbon\Carbon::parse($tm->created_at)->format('F d, Y') }}</a>
                                                <a class="blog-comment" href="#"><i class="fas fa-comment"></i> 05</a>
                                            </div>
                                            <h3><a href="{{ route('singleBlog', ['blog' => $tm->id]) }}">{{$tm['name_' . $lang]}}</a></h3>
                                            <p>{{$tm['description_'.$lang]}}</p>
                                            <a class="blog-more text-uppercase" href="{{ route('singleBlog', ['blog' => $tm->id]) }}">{{__('main.continue')}} <i class="fal fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div >
                                 {{ $news->links('pagination') }}
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
    <!-- End of Blog Feed section
	============================================= -->
</x-layouts.frontend>
