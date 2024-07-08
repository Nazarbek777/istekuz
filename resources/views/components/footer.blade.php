<?php

use App\Models\Product;

$products = Product::take(5)->get();

?>

<!-- Start of Footer section
	============================================= -->
<footer id="ori-footer" class="ori-footer-section footer-style-one">
	<div class="container">
		<div class="ori-footer-title text-center text-uppercase">
			<h2>{{__('main.istek1')}} <span>{{__('main.index4')}}</span> <i class="fas fa-arrow-right"></i></h2>
		</div>
		<div class="ori-footer-widget-wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="logo-widget">
							<a href="{{ route('index') }}"><img src="assets/img/logo/logo1.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="menu-location-widget ul-li-block">
							<h2 class="widget-title text-uppercase">{{__('main.products')}}</h2>
							<ul>
								@foreach ($products as $product)
								<li><a href="{{ route('singleProduct', ['product' => $product->id])}}">{{ $product['name_'.App::getLocale()]}}</a></li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="contact-widget ul-li-block">
							<h2 class="widget-title text-uppercase">{{__('main.contact')}}</h2>
							<div class="contact-info">
								<span>{{__('main.contact4')}}</span>
								<span>+998 (94) 100 11 11</span>
								<a href="mailto:info@istek.uz">info@istek.uz</a>
								<span>{{__('main.footer1')}}: 09:00 - 18:00</span>
								<span>{{__('main.footer2')}}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="newslatter-widget ul-li-block">
							<h2 class="widget-title text-uppercase">{{__('main.contact1')}}</h2>
							<div class="newslatter-form">
							<form action="javascript:sendPhoneNumber()" method="post">
									<input name="form_phone" id="phone_number" type="text" style="color: white;" placeholder="+998 " required>
									<button type="submit">{{__('main.send')}} <i class="fas fa-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ori-footer-copyright d-flex justify-content-between">
			<div class="ori-copyright-text">
				© 2024 Barcha huquqlar himoyalanadi - ISTEK - <a href="https://dora.uz/" target="_blank">Dora</a>.
			</div>
			<div class="ori-copyright-social">
				<a href="https://www.facebook.com/people/Istek/61557360990149/" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="https://t.me/istek_uz" target="_blank"><i class="fab fa-telegram"></i></a>
				<a href="https://www.instagram.com/istek.uz/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/@istek_uz" target="_blank"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End of Footer section
	============================================= -->

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
	function sendPhoneNumber() {
		const phoneNumber = document.getElementById('phone_number').value;

		if (!phoneNumber) {
			alert('Please fill all fields.');
			return;
		}

		const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY';
		const telegramChatId = '1347969244';
		const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

		const data = {
			chat_id: telegramChatId,
			text: `Bog'lanish uchun telefon Raqam Qoldirilidi:\n\nTelefon: ${phoneNumber}`
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