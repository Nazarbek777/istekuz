
<x-layouts.frontend>
    <!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Maxsulotlar</h1>
				<ul>
					<li><a href="home.html">Home</a></li>
					<li>Maxsulotlar</li>
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
                                                        <a href="{{route('product' , $tm->id)}}">Batafsil</a>
                                                    </div>
                                                </div>
                                                <div class="shop-text">
                                                    <h3><a href="">{{$tm->name_uz}}</a></h3>
                                                    <span class="pro_price">{{$tm->price}}</span>
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
									<h3 class="widget-title">Kategoriyalar</h3>
									<ul>
										<li><a href="#">Plastik romlar<span>(3)</span></a></li>
										<li><a href="#">Alyumin romlar<span>(7)</span> </a></li>
										<li><a href="#">Surilma tizimlari<span>(5)</span></a> </li>
										<li><a href="#">Import tizimlari<span>(2)</span></a></li>
										<li><a href="#">Fasad tizimlari<span>(8)</span></a></li>
										<li><a href="#">Rollet tizimlari<span>(4)</span></a></li>
										<li><a href="#">Aksessuarlar<span>(5)</span></a></li>
										<li><a href="#">Oynali to‘siqlar<span>(8)</span></a></li>
									</ul>
								</div>
							</div>

							<div class="ori-shop-sidebar-widget">
								<div class="best-seller-widget ul-li-block">
									<h3 class="widget-title">Yangiliklar</h3>
									<div class="best-seller-item-wrap">
										<div class="best-seller-item d-flex align-items-center">
											<div class="best-sell-img">
												<img src="assets/img/shop/shop4.png" alt="">
											</div>
											<div class="best-sell-text">
												<h3><a href="product-single.html">Running Fitness..</a></h3>
											</div>
										</div>
										<div class="best-seller-item d-flex align-items-center">
											<div class="best-sell-img">
												<img src="assets/img/shop/shop2.png" alt="">
											</div>
											<div class="best-sell-text">
												<h3><a href="product-single.html">Air Force Shoe</a></h3>
											</div>
										</div>
										<div class="best-seller-item d-flex align-items-center">
											<div class="best-sell-img">
												<img src="assets/img/shop/shop3.png" alt="">
											</div>
											<div class="best-sell-text">
												<h3><a href="product-single.html">Table Chair Couch</a></h3>
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
<!-- End of Shop Feed Post  section
	============================================= -->
</x-layouts.frontend>
