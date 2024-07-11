<x-layouts.frontend>
    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>{{__('main.about')}}</h1>
                <ul>
                    <li><a href="{{ route('index')}}">{{__('main.ISTEK')}}</a></li>
                    <li>{{__('main.about')}}</li>
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

    <!-- Start of About Play  section
	============================================= -->
    <section id="ori-about-play" class="ori-about-play-section position-relative">
        <div class="container">
            <div class="ori-about-play-top-content d-flex justify-content-between align-items-center">
                <div class="ori-inner-section-title">
                    <span class="sub-title text-uppercase">{{__('main.about1')}}</span>
                    <h2>{{__('main.istek1')}} - {{__('main.index4')}}</h2>
                </div>
                <div class="ori-about-play-top-text">
                    {{__('main.about2')}}
                </div>
            </div>
            <div class="ori-about-play-area position-relative">
                <div class="ori-about-play-img">
                    <img src="assets/img/about/play-bg.png" alt="">
                </div>
                <div class="about-play-btn position-absolute">
                    <a class="text-uppercase video_box d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=CH_Kv7Y3fQw">{{__('main.see')}}</a>
                </div>
            </div>
            <div class="ori-about-counter-area">
                <div class="ori-about-counter-item-wrap d-flex justify-content-between">
                    <div class="ori-about-counter-item pera-content">
                        <h3><span class="counter">15</span>+</h3>
                        <p class="text-uppercase"><span>//</span> {{__('main.about3')}}</p>
                    </div>
                    <div class="ori-about-counter-item pera-content">
                        <h3><span class="counter">861</span>+</h3>
                        <p class="text-uppercase"><span>//</span> {{__('main.about4')}}</p>
                    </div>
                    <div class="ori-about-counter-item pera-content">
                        <h3><span class="counter">1000</span>+</h3>
                        <p class="text-uppercase"><span>//</span> {{__('main.about5')}}</p>
                    </div>
                    <div class="ori-about-counter-item pera-content">
                        <h3><span class="counter">98</span>+</h3>
                        <p class="text-uppercase"><span>//</span> {{__('main.about6')}}</p>
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
    <!-- End of About Play   section
	============================================= -->
    <!--FAQ-->
    <section id="ori-faq" class="ori-faq-section position-relative">
        <div class="container">
            <div class="ori-faq-content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ori-faq-tab-btn">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">{{__('main.about47')}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">{{__('main.about48')}}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">{{__('main.about49')}}</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ori-faq-text-wrapper-content">
                            <div class="ori-inner-section-title">
                                <span class="sub-title text-uppercase">{{__('main.about')}}</span>
                                <!-- <h2>{{__('main.about7')}}</h2> -->
                            </div>
                            <div class="ori-faq-accordion-area">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane animated fadeInUp show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="ori-faq-accordion-item-area">
                                            <div class="accordion" id="accordionExample_2">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            {{__('main.about8')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.about9')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            {{__('main.about10')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.about11')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            {{__('main.about12')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.about13')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            {{__('main.about14')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample_2">
                                                        <div class="accordion-body">
                                                            {{__('main.about15')}}
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
                                                            {{__('main.about16')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="heading5" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.about17')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading6">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                            {{__('main.about18')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.about19')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading7">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                            {{__('main.about20')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.about21')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading8">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                                            {{__('main.about22')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample_3">
                                                        <div class="accordion-body">
                                                            {{__('main.about23')}}
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
                                                            {{__('main.about24')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="heading10" data-bs-parent="#accordionExample_31">
                                                        <div class="accordion-body">
                                                            {{__('main.about25')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading12">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                            {{__('main.about26')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample_31">
                                                        <div class="accordion-body">
                                                            {{__('main.about27')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading13">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                            {{__('main.about28')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample_31">
                                                        <div class="accordion-body">
                                                            {{__('main.about29')}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading15">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                                            {{__('main.about30')}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample_31">
                                                        <div class="accordion-body">
                                                            {{__('main.about31')}}
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
    <!--FAQ
=====================-->

    <!-- Start About Istek --
<section id="ori-team-1" class="ori-team-section-1 position-relative">
	<div class="ori-team-content-area">
		<div class="container">
			<div class="ori-team-top-content-1 d-flex justify-content-between align-items-center">
				<div class="ori-section-title-1 text-uppercase">
					<h2 class="d-flex">ISTEK haqida</h2>
					<br>
					<p>Istek - bu deraza tizimlarining yangi brendi bo'lib, uning asosiy vazifasi mijozlarning yangi va yuqori sifatli derazalarga bo'lgan istaklarini amaliy xarajatlar bilan ta'minlashdir. Logotip tekislikdagi ikkita kvadratdan iborat grafik element shaklida qilingan. Grafik elementni o'qish va tushunish oson, bu zamonaviy ikki oynali oynalar bilan bog'lanishga olib keladi.
					Grafik elementning o'ng tomonida grotesk shrift asosida yaratilgan noyob ISTEK yozuvi mavjud. Engil, zamonaviy sans-serif shriftdan foydalanish texnologiya va zamonaviylikni, minimalizm va eksperimentni namoyish qilish istagi va keraksiz konventsiyalarni rad etish bilan oqlanadi. Brend o'zining shrifti bilan iste'molchilarga "ISTEK - bu texnologiya va zamonaviylik haqida ISTEK - bu sizga faqat siz xohlagan va sizga kerak bo'lgan narsalarni beradi".
					Yillar davomida ISTEK o'zini ishonchli va mas'uliyatli ishlab chiqaruvchi sifatida namoyon etib, uning mahsulotlariga ishonch hosil qilishingiz mumkinligini ko’rsatdi. Bugungi kunda korxona Markaziy Osiyodagi eng yirik avtomatlashtirilgan ishlab chiqarish zavodlaridan biriga ega</p>
					<br>
					<h2>Missiya</h2>
					<br>
					<p>Hayot tarzini yaxshilash, unga qulaylik va afzallikni olib keluvchi yangi standart va yo‘nalishlarni yaratish. Mamlakat sanoatini rivojlantirish hamda o‘z maqsadlarimizga erishish va zimmamizdagi burchni ado etish yo‘lidagi bosilgan har bir taraqqiyot qadamlari uchun mas’ul bo‘lish.
					Biznesni yuritish va o‘zaro hamkorlik olib borishning an’anaviy uslublarini o‘zgartirish va ishga yangicha yondashishni tatbiq etish. Mijozlarimiz e’tiborini qozonish, xodimlarimiz va hamkorlarimiz manfaatlarini himoya qilish va jamiyat taraqqiyoti yo‘lida kompaniya samaradorligini doimo oshirib borish.</p>
					<br>
					<h2>ISTEK kompaniyasida ishlash</h2>
					<br>
					<p>Biz faoliyatni endi boshlayotgan ham, malakali mutaxassislaimizga ham katta "karyeraviy o‘sish" imkoniyatlarini taqdim etamiz. Hozirgi tajribangiz yoki malaka darajangizdan qat'i nazar, bizda professional maqsadlaringizga erishishingizga yordam beradigan o'quv va rivojlanish dasturlarimiz mavjud.
					Biz har bir xodimda o'ziga xos ehtiyojlari va ambitsiyalari borligini tushunamiz. Shu munosabat bilan, biz xodimlarning individual rivojlanishiga e'tibor qaratamiz.
					Bizning asosiy maqsadimiz — barcha xodimlarni karyeraviy o‘sish uchun barcha zarur vositalar va resurslar bilan ta'minlashdir. Biz xodimlarimiz bilan faxrlanamiz! Siz o‘z salohiyatingizni ro‘yobga chiqarishingiz va kayrerangizda yangi cho‘qqilarni zabt etishingiz mumkin bo‘lgan ilhomlantiruvchi va qo‘llab-quvvatlovchi muhit yaratishga intilamiz.</p>
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
 End About Istek 
	==============================================-->

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
                                <img src="assets/img/sponsor/dora.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="assets/img/sponsor/akfa.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="assets/img/sponsor/englber.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="#">
                                <img src="assets/img/sponsor/imzo.png" alt="">
                            </a>
                        </div>
                    </div>
                    @foreach ( $logos as $logo)
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">
                            <a href="{{ route('index')}}">
                                <img src="/storage/{{$logo->image}}" alt="">
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

    <!-- Start of Team section
	============================================= -->
    <section id="ori-team-1" class="ori-team-section-1 position-relative">
        <div class="ori-team-content-area">
            <div class="container">
                <div class="ori-team-top-content-1 d-flex justify-content-between align-items-center">
                    <div class="ori-section-title-1 text-uppercase">
                        <h2 class="d-flex">{{__('main.about32')}} <br>{{__('main.about33')}}</h2>
                    </div>
                    <div class="ori-btn-1 text-uppercase">
                        <a href="team.html">{{__('main.seeAll')}}</a>
                    </div>
                </div>
                <div class="ori-team-content-1">
                    <div class="row">
                        @foreach ($teams as $team)

                        <div class="col-lg-4">
                            <div class="ori-team-inner-item position-relative">
                                <div class="ori-team-img">
                                    <img src="/storage/{{$team->image}}" alt="">
                                </div>
                                <div class="ori-team-text text-center position-absolute">
                                    <h3><a href="team-single.html">{{$team->full_name}}</a></h3>
                                    <span>{{ $team->job }}</span>
                                </div>
                                <div class="ori-team-social text-center position-absolute">
                                    <a href="{{ $team->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $team->telegram_link}}"><i class="fab fa-telegram"></i></a>
                                    <a href="{{ $team->instagram_link}}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $team->youtube_link}}"><i class="fab fa-youtube"></i></a>
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
    <!-- Start of Achievement History section
	============================================= -->
    <section id="ori-achivement-history" class="ori-achivement-history-section position-relative mt-5">
        <div class="container">
            <div class="ori-inner-section-title text-center">
                <span class="sub-title text-uppercase">
                    {{__('main.about34')}}</span>
                <h2>{{__('main.about35')}}</h2>
            </div>
            <div class="ori-achivement-history-content">
                <div class="ori-achivement-history-item-wrapper position-relative">
                    <div class="ori-achivement-history-item-area">
                        <div class="ori-achivement-history-item pera-content position-relative">
                            <div class="achive-year position-absolute">
                                2019
                            </div>
                            <div class="achivement-text">
                                <h3>{{__('main.about36')}}</h3>
                                <p>{{__('main.about37')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="ori-achivement-history-item-area">
                        <div class="ori-achivement-history-item pera-content position-relative">
                            <div class="achive-year position-absolute">
                                2020
                            </div>
                            <div class="achivement-text">
                                <h3>{{__('main.about38')}}</h3>
                                <p>{{__('main.about39')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="ori-achivement-history-item-area">
                        <div class="ori-achivement-history-item pera-content  position-relative">
                            <div class="achive-year position-absolute">
                                2021
                            </div>
                            <div class="achivement-text">
                                <h3>{{__('main.about40')}} </h3>
                                <p>{{__('main.about41')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="ori-achivement-history-item-area">
                        <div class="ori-achivement-history-item pera-content  position-relative">
                            <div class="achive-year position-absolute">
                                2022
                            </div>
                            <div class="achivement-text">
                                <h3>{{__('main.about42')}}</h3>
                                <p>{{__('main.about43')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="ori-achivement-history-item-area">
                        <div class="ori-achivement-history-item pera-content  position-relative">
                            <div class="achive-year position-absolute">
                                2023
                            </div>
                            <div class="achivement-text">
                                <h3>{{__('main.about44')}} </h3>
                                <p>{{__('main.about45')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="ori-achivement-history-item-area">
                        <div class="ori-achivement-history-item pera-content  position-relative">
                            <div class="achive-year position-absolute">
                                2024
                            </div>
                            <div class="achivement-text">
                                <h3>{{__('main.partner2')}}</h3>
                                <p>{{__('main.about46')}}</p>
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
    <!-- End of Achievement History section
	============================================= -->
</x-layouts.frontend>