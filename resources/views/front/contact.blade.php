<x-layouts.frontend>
	<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>{{__('main.contact')}}</h1>
				<ul>
					<li><a href="{{route('index')}}">{{__('main.istek1')}}</a></li>
					<li>{{__('main.contact')}}</li>
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

	<!-- Start of  google map  section
	============================================= -->
	<div class="ori-google-map">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.206855257846!2d69.57971507654612!3d40.845382029438554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae2d5499925425%3A0x38f2392785f65321!2sistek%20rom%20fabrikasi!5e0!3m2!1sru!2sus!4v1716555180881!5m2!1sru!2sus" height="865"></iframe>
	</div>
	<!-- End of  google map  section
	============================================= -->

	<!-- Start of Contact form  section
	============================================= -->
	<section id="ori-contact-form" class="ori-contact-form-section position-relative">
		<div class="container">
			<div class="ori-contact-form-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ori-contact-form-text-info pera-content">
							<h3>{{__('main.contact2')}}</h3>
							<p>
								{{__('main.contact3')}}
							</p>
							<div class="ori-contact-form-item-info">
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="info-text pera-content">
										<h4>{{__('main.phone')}}</h4>
										<p>+998 (94)100 11 11 <span class="fw-bold ms-3"></span></p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="info-text pera-content">
										<h4>{{__('main.email')}}</h4>
										<p>info@istek.uz</p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="info-text pera-content">
										<h4>{{__('main.address')}}</h4>
										<p>{{__('main.contact4')}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ori-contact-form-wrap">
							<form action="javascript:sendMessage()" method="post">
								<label>{{__('main.name')}} *</label>
								<input type="text" id="name" style="color: white;" name="{{__('main.inputName')}}">
								<label>{{__('main.phone')}} *</label>
								<input name="form_phone" id="phone_number" type="text" style="color: white;" placeholder="+998 " required>
								<label>{{__('main.message')}} *</label>
								<textarea name="message" id="message" style="color: white;" placeholder="{{__('main.inputMessage')}}"></textarea>
								<button type="submit">{{__('main.send')}}</button>
							</form>
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
	<!-- End of Contact Form section
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