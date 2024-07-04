<x-layouts.frontend>

    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>{{ $product['name_'.App::getLocale()]}}</h1>
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

    <!-- Start of Service Details  section
        ============================================= -->
    <section id="ori-service-details" class="ori-service-details-section position-relative">
        <div class="container">
            <div class="ori-service-details-content-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ori-service-details-content">
                            <div class="ori-about-play-area position-relative">
                                <div class="ori-about-play-img">
                                    <img src="{{asset('storage/' . $product->image)}}" alt="">
                                </div>
                                <div class="about-play-btn position-absolute">
                                    <a class="text-uppercase d-flex align-items-center justify-content-center" href="#">{{ __('main.')}}</a>
                                </div>
                            </div>
                            <div class="ori-service-details-text pera-content">
                                <h2>{{$product['name_'. $lang]}}</h2>
                                <p>

                                    {{$product['description_'. $lang]}}
                                </p>
                                <h2 class="mt-3">Tizimning montaj chuqurligi uni ko'plab tuzilmalarda qo'llash imkonini
                                    beradi: </h2>
                                <div class="ori-service-details-outcome ul-li-block">
                                    <ul>
                                        <li>Turar-joy binolarida, ofis binolarida va turli jamoat va sanoat binolarida
                                        </li>
                                        <li>Arxitektura yoki konstruktiv talablar tufayli boshqa materiallardan
                                            foydalanish mumkin bo'lmagan rom va eshik konstruktsiyalari
                                        </li>
                                        <li>Issiqlik va ovoz izolyatsiyasiga yuqori talablar qo‘yiladigan rom
                                            konstruksiyalari
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    Engelberg 80 - interyeringizga ajoyib ko‘rinish baxsh etadi va dizayn
                                    yechimingizning o'ziga xosligini ta'kidlaydi.
                                </p>


                                <div class="ori-service-details-process ul-li-block">
                                    <h2>Xizmat haqida</h2>
                                    <div class="ori-service-process-item-wrap d-flex flex-wrap">
                                        <div class="ori-service-process-item pera-content">
                                            <h3><span>01</span> Bepul o'lchash </h3>
                                            <p>Creative analysis is important. It is common for marketers to measure
                                                campaign performance at a superficial level. But to fully understand
                                                it, </p>
                                        </div>
                                        <div class="ori-service-process-item pera-content">
                                            <h3><span>02</span> Tezlik </h3>
                                            <p>Creative analysis is important. It is common for marketers to measure
                                                campaign performance at a superficial level. But to fully understand
                                                it, </p>
                                        </div>
                                        <div class="ori-service-process-item pera-content">
                                            <h3><span>03</span> Sifat </h3>
                                            <p>Creative analysis is important. It is common for marketers to measure
                                                campaign performance at a superficial level. But to fully understand
                                                it, </p>
                                        </div>
                                        <div class="ori-service-process-item pera-content">
                                            <h3><span>04</span> Kafolat </h3>
                                            <p>Creative analysis is important. It is common for marketers to measure
                                                campaign performance at a superficial level. But to fully understand
                                                it, </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="ori-service-details-result">
                                    <h2>Natija</h2>
                                    <div class="ori-service-details-result-item-wrap d-flex justify-content-between">
                                        <div class="ori-about-circle-progress-item">
                                            <div class="counter-boxed text-center headline position-relative">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="180" data-height="180" data-linecap="round" value="90">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="4500"></span>%
                                                    </div>
                                                </div>
                                                <h3 class="text-uppercase"> Sifatli</h3>
                                            </div>
                                        </div>
                                        <div class="ori-about-circle-progress-item">
                                            <div class="counter-boxed text-center headline position-relative">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="180" data-height="180" data-linecap="round" value="90">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="4500"></span>%
                                                    </div>
                                                </div>
                                                <h3 class="text-uppercase"> Shovqinga chidamli</h3>
                                            </div>
                                        </div>
                                        <div class="ori-about-circle-progress-item">
                                            <div class="counter-boxed text-center headline position-relative">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#FF7425" data-bgColor="#fff" data-width="180" data-height="180" data-linecap="round" value="90">
                                                    <div class="inner-text count-box"><span class="count-text" data-stop="90" data-speed="4500"></span>%
                                                    </div>
                                                </div>
                                                <h3 class="text-uppercase">Haroratni meyorda <br> tutadi</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ori-service-details-sidebar-widget-area">
                            <div class="ori-service-details-widget ul-li-block">
                                <div class="category-widget">
                                    <h3 class="widget-title">{{__('main.closeProducts')}}</h3>
                                    <ul>
                                        @foreach($categories as $category)
                                        @if($category->id == $product->category_id)
                                        <ul>
                                            @foreach($category->products as $product)
                                            <li>
                                                <a href="{{ route('singleProduct', $product->id) }}">
                                                    <span>0{{ $loop->parent->index * $loop->count + $loop->iteration }}</span> {{ $product['name_' . $lang] }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            <div class="ori-service-details-widget ul-li-block">
                                <div class="quote-widget">
                                    <h3 class="widget-title">{{__('main.contact1')}}</h3>
                                    <form action="javascript:sendMessage()" method="post">
                                        <input type="text" id="name" style="color: white;" placeholder="{{__('main.inputName')}}">
                                        <input name="form_phone" id="phone_number" type="text" style="color: white;" placeholder="+998 " required>
                                        <textarea name="message" id="message" style="color: white;" placeholder="{{__('main.inputMessage')}}"></textarea>
                                        <button class="ori-submit-btn1  text-uppercase" type="submit">{{__('main.send')}}</button>
                                    </form>
                                </div>
                            </div>
                            <div class="ori-service-details-widget ul-li-block">
                                <div class="company-profile-widget">
                                    <h3 class="widget-title">Kompaniya haqida</h3>
                                    <div class="profile-download-btn text-center text-uppercase">
                                        <a href="#">Katalogni yuklab olish</a>
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


    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const phoneInput = document.getElementById('phone_number');
            const pattern = /^\+998[- ]?(90|91|93|94|95|98|99|33|97|71)[- ]?(\d{3})[- ]?(\d{2})[- ]?(\d{2})$/;

            // Set initial value to +998
            phoneInput.value = '+998 ';

            phoneInput.addEventListener('input', (e) => {
                let value = e.target.value;

                // Ensure the value always starts with +998
                if (!value.startsWith('+998 ')) {
                    value = '+998 ' + value.replace(/^\+998\s*/, '');
                }

                // Remove invalid characters
                value = value.replace(/[^\d+]/g, '');

                // Format value according to the pattern
                let match = value.match(/^\+998\s?(90|91|93|94|95|98|99|33|97|71)?\s?(\d{0,3})?\s?(\d{0,2})?\s?(\d{0,2})?/);
                if (match) {
                    let formattedValue = '+998 ';
                    if (match[1]) formattedValue += match[1] + ' ';
                    if (match[2]) formattedValue += match[2] + (match[2].length === 3 ? ' ' : '');
                    if (match[3]) formattedValue += match[3] + (match[3].length === 2 ? ' ' : '');
                    if (match[4]) formattedValue += match[4];
                    value = formattedValue;
                }

                e.target.value = value.trim();
            });

            phoneInput.addEventListener('keydown', (e) => {
                const value = e.target.value;
                // Allow user to clear the input completely
                if (e.key === 'Backspace' && value.length <= 5) {
                    phoneInput.value = ''; // Clear the input field
                }
            });

            document.getElementById('phone-form').addEventListener('submit', (e) => {
                if (!pattern.test(phoneInput.value)) {
                    e.preventDefault();
                    alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
                }
            });
        });
    </script>


    <script>
        function sendMessage() {
            const name = document.getElementById('name').value;
            const phoneNumber = document.getElementById('phone_number').value;
            const message = document.getElementById('message').value;

            if (!name || !phoneNumber || !message) {
                alert('Please fill all fields.');
                return;
            }

            const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY';
            const telegramChatId = '1347969244';
            const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

            const data = {
                chat_id: telegramChatId,
                text: `Yangi Habar:\n\nIsm: ${name}\nTelefon: ${phoneNumber}\nHabar: ${message}`
            };

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        alert("Habar Jo'natildi!");
                        document.getElementById('contact_form').reset();
                    } else {
                        alert('Xatolik yuz berdi qayta urunib koring.');
                    }
                })

        }
    </script>
</x-layouts.frontend>