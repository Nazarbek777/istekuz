
<x-layouts.frontend>
    <?php
    $lang = \Illuminate\Support\Facades\App::getLocale();
    ?>
    <!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>{{__('main.products')}}</h1>
				<ul>
					<li><a href="{{ route('index')}}">{{__('main.main')}}</a></li>
					<li>{{__('main.products')}}</li>
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

<!-- Start of Shop Feed Post section
	============================================= -->
	<section id="ori-shop-feed" class="ori-shop-feed-section">
		<div class="container">
			<div class="ori-shop-feed-content">
				<div class="row">
					<div class="col-lg-9">
						<div class="ori-shop-feed-post-content">
							<div class="ori-shop-feed-post-items">
								<div class="row">
									 @foreach($products as $tm )
                                        <div class="col-md-4">
                                            <div class="ori-shop-inner-item text-center">
                                                <div class="shop-img-cart-btn position-relative">
                                                    <div class="shop-img">
                                                        <img src="/storage/{{ $tm->image}}" alt="rasm yo'q">
                                                    </div>
                                                    <div class="add-cart-btn text-uppercase text-center">
                                                        <a href="{{route('singleProduct' , $tm->id)}}">{{__('main.readMore')}}</a>
                                                    </div>
                                                </div>
                                                <div class="shop-text">
                                                    <h3><a href="">{{$tm->name_uz}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
									 @endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="ori-shop-sidebar-wrap">
							<div class="ori-shop-sidebar-widget">
								<div class="category-widget ul-li-block">
									<h3 class="widget-title">{{__('main.category')}}</h3>
                                    <ul>
											<li><a href="{{ route('product')}}">{{__('main.all')}}</a></li>
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('product.category', ['category' => $category->id]) }}">{{ $category['name_' . $lang] }} <span>({{ $category->products->count() }})</span></a></li>
                                        @endforeach
                                    </ul>
								</div>
							</div>

							<div class="ori-shop-sidebar-widget">
								<div class="best-seller-widget ul-li-block">
									<h3 class="widget-title">{{__('main.news')}}</h3>
									<div class="best-seller-item-wrap">
										@foreach($news as $tm )
                                            <div class="best-seller-item d-flex align-items-center">
                                                <div class="best-sell-img">
                                                    <img src="{{asset('storage/' . $tm->image2)}}" alt="">
                                                </div>
                                                <div class="best-sell-text">
                                                    <h3><a href="{{ route('singleBlog', ['blog' => $tm->id]) }}">{{$tm['name_' . $lang]}}</a></h3>
                                                </div>
                                            </div>
										@endforeach
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Shop Feed Post  section
	============================================= -->
</x-layouts.frontend>
