<x-layouts.frontend>
    <!-- Start of Calculate section -->

    <div class="container">
        <div class="all-border">
            <form action="{{ route('order.store') }}" method="POST">
                <div class="configurator__item-content">
                    @csrf
                    <div class="configurator__item-content-aside">

                        <div class="aside-serias">
                            <div class="text-tmp title-18">
                                <label class="mt-5">{{__('main.calculator1')}}</label>
                            </div>
                            <div class="input">
                                <div class="select-custom select-serias-9699_js select-serias_js">
                                    <select id="shirt-select" name="seriya">
                                        <option value="Trio 60">Trio 60</option>
                                        <option value="Quattro 60">Quattro 60</option>
                                        <option value="Engelberg 70">Engelberg 70</option>
                                        <option value="Engelberg 80">Engelberg 80</option>
                                    </select>

                                    <div class="select-custom__field" id="selected-shirt">Trio 60</div>
                                    <div class="select-custom__list">
                                        <ul id="shirt-list" style="margin-bottom: 0 !important;">
                                            <li class="select-custom__item active" data-option-value="Trio 60" data-option-var="null">Trio 60</li>
                                            <li class="select-custom__item" data-option-value="Quattro 60" data-option-var="null">Quattro 60</li>
                                            <li class="select-custom__item" data-option-value="Engelberg 70" data-option-var="null">Engelberg 70</li>
                                            <li class="select-custom__item" data-option-value="Engelberg 80" data-option-var="null">Engelberg 80</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Select element and visible div
                            const selectElement = document.getElementById('shirt-select');
                            const selectedShirtDiv = document.getElementById('selected-shirt');
                            const shirtItems = document.querySelectorAll('#shirt-list .select-custom__item');

                            // Function to update the select element and visible div
                            function updateSelection(item) {
                                const selectedValue = item.getAttribute('data-option-value');
                                selectElement.value = selectedValue;
                                selectedShirtDiv.textContent = item.textContent;

                                // Remove 'active' class from all items and add to the clicked one
                                shirtItems.forEach(i => i.classList.remove('active'));
                                item.classList.add('active');
                            }

                            // Add event listener to each item in the custom dropdown list
                            shirtItems.forEach(item => {
                                item.addEventListener('click', () => updateSelection(item));
                            });

                            // Initial selection
                            const firstSelectedItem = document.querySelector('#shirt-list .select-custom__item.active');
                            if (firstSelectedItem) {
                                updateSelection(firstSelectedItem);
                            }
                        </script>
                        <div class="options-cotainer">
                            <div class="aside-options">
                                <div class="text-tmp title-18">
                                    <label class="aside-options-title_js">{{__('main.calculator2')}}</label>
                                </div>
                                <div class="input">
                                    <div class="select-custom select-serias-6462_js">
                                        <select name="type" id="type-select">
                                            <option value="Standart">{{__('main.calculator3')}}</option>
                                            <option value="Energiyani tejash">{{__('main.calculator4')}}</option>
                                            <option value="Quyoshdan himoya qilish">{{__('main.calculator5')}}</option>
                                        </select>
                                        <div class="select-custom__field" id="selected-type">{{__('main.calculator3')}}</div>
                                        <div class="select-custom__list">
                                            <ul data-name="type" id="type-list" style="margin-bottom: 0 !important;">
                                                <li class="select-custom__item active" data-option-value="Standart" data-option-var="null">{{__('main.calculator3')}}</li>
                                                <li class="select-custom__item" data-option-value="Energiyani tejash" data-option-var="null">{{__('main.calculator4')}}</li>
                                                <li class="select-custom__item" data-option-value="Quyoshdan himoya qilish" data-option-var="null">{{__('main.calculator5')}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                // Select element and visible div
                                const selectElementType = document.getElementById('type-select');
                                const selectedTypeDiv = document.getElementById('selected-type');
                                const typeItems = document.querySelectorAll('#type-list .select-custom__item');

                                // Function to update the select element and visible div
                                function updateTypeSelection(item) {
                                    const selectedValue = item.getAttribute('data-option-value');
                                    selectElementType.value = selectedValue;
                                    selectedTypeDiv.textContent = item.textContent;

                                    // Remove 'active' class from all items and add to the clicked one
                                    typeItems.forEach(i => i.classList.remove('active'));
                                    item.classList.add('active');
                                }

                                // Add event listener to each item in the custom dropdown list
                                typeItems.forEach(item => {
                                    item.addEventListener('click', () => updateTypeSelection(item));
                                });

                                // Initial selection
                                const firstSelectedTypeItem = document.querySelector('#type-list .select-custom__item.active');
                                if (firstSelectedTypeItem) {
                                    updateTypeSelection(firstSelectedTypeItem);
                                }
                            </script>

                            <div class="aside-options">
                                <label for="height_size" class="form-label">{{__('main.calculator6')}}</label>
                                <input type="text" id="height_size" class="form-control" style="background-color: black; color:white;" name="height_size">
                            </div>
                            <div class="aside-options">
                                <label for="weight_size" class="form-label">{{__('main.calculator7')}}</label>
                                <input type="text" id="weight_size" class="form-control" style="background-color: black; color:white;" name="weight_size">
                            </div>
                            <div class="aside-options">
                                <label for="full_name" class="form-label">{{__('main.calculator8')}}</label>
                                <input type="text" id="full_name" placeholder="{{__('main.calculator8')}}" class="form-control" style="background-color: black; color:white;" name="full_name">
                            </div>
                            <div class="aside-options">
                                <label for="phone" class="form-label">{{__('main.calculator9')}}</label>
                                <input type="text" id="phone_number" placeholder="+998" value="+998" class="form-control" style="background-color: black; color:white;" name="phone_number">
                            </div>
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
                        </div>
                        <div class="aside-components">
                            <div class="text-tmp title-18">
                                <h4 class="aside-components-title_js">{{__('main.calculator10')}}</h4>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox__label">
                                    <input class="checkbox__input checkbox-components_js" type="checkbox" name="complect[]" value="Podokonnik">
                                    <span class="checkbox__content">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0806 0L5.75806 9.20833L1.91935 5.41667L0 7.3125L5.75806 13L17 1.89583L15.0806 0Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <p>{{__('main.calculator11')}}</p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox__label">
                                    <input class="checkbox__input checkbox-components_js" type="checkbox" name="complect[]" value="Chivinga qarshi to‘r">
                                    <span class="checkbox__content">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0806 0L5.75806 9.20833L1.91935 5.41667L0 7.3125L5.75806 13L17 1.89583L15.0806 0Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <p>{{__('main.calculator12')}}</p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="checkbox__label">
                                    <input class="checkbox__input checkbox-components_js" type="checkbox" name="complect[]" value="Otliv">
                                    <span class="checkbox__content">
                                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0806 0L5.75806 9.20833L1.91935 5.41667L0 7.3125L5.75806 13L17 1.89583L15.0806 0Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <p>{{__('main.calculator13')}}</p>
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="wrapper">
                        <!-- window -->
                        <div class="window-cotnainer">
                            <div class="window-cotnainer__inner" style="position: relative;">
                                <div class="aside-lamination pro" style="background: #000000;">
                                    <h4 class="profilWord" style="color: #fff;">{{__('main.calculator14')}}</h4>
                                    <div class="aside-lamination__btns">
                                        <div class="profile active" id="6" data-name="Mokko emani">
                                            <img src="https://imzo.uz/uploads/colors/e76be692729f.jpg">
                                        </div>
                                        <div class="profile" id="1" data-name="Oq">
                                            <img src="https://imzo.uz/uploads/colors/225bb0d3eea0.jpg">
                                        </div>
                                        <div class="profile" id="18" data-name="Kulrang SW 306 G">
                                            <img src="https://imzo.uz/uploads/colors/8fdcf9ef4b7c.jpg">
                                        </div>
                                        <div class="profile" id="9" data-name="Oltin eman">
                                            <img src="https://imzo.uz/uploads/colors/efc70dd53af2.jpg">
                                        </div>
                                        <div class="profile" id="12" data-name="Solod emani">
                                            <img src="https://imzo.uz/uploads/colors/3fdc56b04eb2.jpg">
                                        </div>
                                        <input type="hidden" name="profile_color" id="profile-color" value="Mokko emani">
                                    </div>
                                </div>

                                <script>
                                    // Select elements and buttons
                                    const profileButtons = document.querySelectorAll('.profile');
                                    const hiddenProfileInput = document.getElementById('profile-color');

                                    // Function to update the hidden input and active class
                                    function updateProfileSelection(button) {
                                        const selectedProfileColor = button.getAttribute('data-name');
                                        hiddenProfileInput.value = selectedProfileColor;

                                        // Remove 'active' class from all buttons and add to the clicked one
                                        profileButtons.forEach(btn => btn.classList.remove('active'));
                                        button.classList.add('active');
                                    }

                                    // Add event listener to each profile button
                                    profileButtons.forEach(button => {
                                        button.addEventListener('click', () => updateProfileSelection(button));
                                    });

                                    // Initial selection (if there's an active button)
                                    const firstSelectedProfileButton = document.querySelector('.profile.active');
                                    if (firstSelectedProfileButton) {
                                        updateProfileSelection(firstSelectedProfileButton);
                                    }
                                </script>
                                <div class="window-cotnainer__img">
                                    <img src="/assets/img/a2.svg">
                                    <div class="window-cotnainer__lamination">
                                        <img src="https://imzo.uz/uploads/colors/e76be692729f.jpg">
                                    </div>
                                </div>
                                <div class="aside-lamination lam" style="background: #000000;">
                                    <h4 class="laminatWord" style="color: #fff;">{{__('main.calculator15')}}</h4>
                                    <div class="aside-lamination__btns">
                                        <div class="aside-lamination__btn active" id="6" data-name="Mokko emani">
                                            <img src="https://imzo.uz/uploads/colors/e76be692729f.jpg">
                                        </div>
                                        <div class="aside-lamination__btn" id="1" data-name="Oq">
                                            <img src="https://imzo.uz/uploads/colors/225bb0d3eea0.jpg">
                                        </div>
                                        <div class="aside-lamination__btn" id="18" data-name="Kulrang SW 306 G">
                                            <img src="https://imzo.uz/uploads/colors/8fdcf9ef4b7c.jpg">
                                        </div>
                                        <div class="aside-lamination__btn" id="9" data-name="Oltin eman">
                                            <img src="https://imzo.uz/uploads/colors/efc70dd53af2.jpg">
                                        </div>
                                        <div class="aside-lamination__btn" id="12" data-name="Solod emani">
                                            <img src="https://imzo.uz/uploads/colors/3fdc56b04eb2.jpg">
                                        </div>
                                    </div>
                                    <input type="hidden" name="laminate_color" id="selected-color" value="Mokko emani">
                                </div>

                                <script>
                                    // Select elements and buttons
                                    const laminationButtons = document.querySelectorAll('.aside-lamination__btn');
                                    const hiddenColorInput = document.getElementById('selected-color');

                                    // Function to update the hidden input and active class
                                    function updateColorSelection(button) {
                                        const selectedColor = button.getAttribute('data-name');
                                        hiddenColorInput.value = selectedColor;

                                        // Remove 'active' class from all buttons and add to the clicked one
                                        laminationButtons.forEach(btn => btn.classList.remove('active'));
                                        button.classList.add('active');
                                    }

                                    // Add event listener to each lamination button
                                    laminationButtons.forEach(button => {
                                        button.addEventListener('click', () => updateColorSelection(button));
                                    });

                                    // Initial selection (if there's an active button)
                                    const firstSelectedButton = document.querySelector('.aside-lamination__btn.active');
                                    if (firstSelectedButton) {
                                        updateColorSelection(firstSelectedButton);
                                    }
                                </script>

                            </div>
                            <div class="window-sections">
                                <div class="background"></div>
                                <style>
                                    .background.active {
                                        position: fixed;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100% !important;
                                        background-size: cover;
                                        background-position: center;
                                        z-index: 2; /* Ensure it is behind other elements */
                                        background-color: #000000db;
                                    }
                                </style>
                                <!-- Single Window -->
                                <div class="window-sections__item" data-variations-img="https://imzo.uz/uploads/configurator/single/scheme_1_1.svg">
                                    <div class="window-sections__field-wrap" style="width: 100%; text-align: center; padding: 1px;">
                                        <div class="window-sections__field" id="77">
                                            <div>
                                                <h5>{{__('main.calculator16')}}</h5>
                                            </div>
                                        </div>
                                        <div class="window-sections__variations-container">
                                            <div class="window-sections__variations-item active" id="164" data-name="Глухое" data-url="/assets/img/1stravka.svg">
                                                <img src="https://imzo.uz/uploads/configurator/single/scheme_1_1.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="249" data-name="Поворотное - левое открывание" data-url="/assets/img/a2.svg">
                                                <img src="https://imzo.uz/uploads/configurator/single/scheme_1_3.svg">
                                            </div>
                                            <!-- <div class="window-sections__variations-item" id="162" data-name="Поворотно-откидное - правое открывание" data-url="https://imzo.uz/uploads/configurator/single/image_1_2.svg">
                                                <img src="https://imzo.uz/uploads/configurator/single/scheme_1_4.svg">
                                            </div> -->
                                            <div class="window-sections__variations-item" id="165" data-name="Поворотное - левое открывание" data-url="/assets/img/1tomonlama2.svg">
                                                <img src="https://imzo.uz/uploads/configurator/single/scheme_1_2.svg">
                                            </div>
                                            <!-- <div class="window-sections__variations-item" id="161" data-name="Поворотно-откидное - левое открывание" data-url="https://imzo.uz/uploads/configurator/single/image_1_3.svg">
                                                <img src="https://imzo.uz/uploads/configurator/single/scheme_1_5.svg">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Double Window -->
                                <div class="window-sections__item" data-variations-img="https://imzo.uz/uploads/configurator/double/scheme_2_1.svg">
                                    <div class="window-sections__field-wrap" style="width: 100%; text-align: center; padding: 1px;">
                                        <div class="window-sections__field" id="83">
                                            <div>
                                                <h5>{{__('main.calculator17')}}</h5>
                                            </div>
                                        </div>
                                        <div class="window-sections__variations-container rig">
                                            <div class="window-sections__variations-item" id="179" data-name="Глухое, Глухое" data-url="/assets/img/2tomonlama1.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_1.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="178" data-name="Поворотное, Глухое" data-url="/assets/img/2tomonlama2.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_2.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="180" data-name="Поворотно-откидное, Глухое" data-url="/assets/img/2tomonlama3.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_2_1.svg">
                                            </div>
                                            <!-- <div class="window-sections__variations-item" id="176" data-name="Глухое, Поворотное" data-url="https://imzo.uz/uploads/configurator/double/image_2_3.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_3.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="177" data-name="Глухое, Поворотно-откидное" data-url="https://imzo.uz/uploads/configurator/double/image_2_3.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_3_1.svg">
                                            </div> -->
                                            <div class="window-sections__variations-item" id="172" data-name="Поворотное, Поворотное" data-url="/assets/img/2tomonlama4.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_4.svg">
                                            </div>
                                            <!-- <div class="window-sections__variations-item" id="174" data-name="Поворотное, Поворотно-откидное" data-url="https://imzo.uz/uploads/configurator/double/image_2_4.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_4_2.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="175" data-name="Поворотно-откидное, Поворотное" data-url="https://imzo.uz/uploads/configurator/double/image_2_4.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_4_1.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="173" data-name="Поворотно-откидное, Поворотно-откидное" data-url="https://imzo.uz/uploads/configurator/double/image_2_4.svg">
                                                <img src="https://imzo.uz/uploads/configurator/double/scheme_2_4_4.svg">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Triple Window -->
                                <div class="window-sections__item" data-variations-img="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_1.svg">
                                    <div class="window-sections__field-wrap" style="width: 100%; text-align: center; padding: 1px;">
                                        <div class="window-sections__field" id="84">
                                            <div>
                                                <h5>{{__('main.calculator18')}}</h5>
                                            </div>
                                        </div>
                                        <div class="window-sections__variations-container rig2">
                                            <div class="window-sections__variations-item" id="194" data-name="Глухое" data-url="/assets/img/3tomonlama1.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_1.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="192" data-name="Поворотное, Глухое, Поворотное" data-url="/assets/img/3tomonlama2.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_2.svg">
                                            </div>
                                            <!-- <div class="window-sections__variations-item" id="193" data-name="Поворотно-откидное, Глухое, Поворотно-откидное" data-url="https://imzo.uz/uploads/configurator/tricuspid/image_3_2.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_2_1.svg">
                                            </div> -->
                                            <div class="window-sections__variations-item" id="190" data-name="Глухое, Поворотное, Глухое" data-url="/assets/img/3tomonlama3.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_3.svg">
                                            </div>
                                            <!-- <div class="window-sections__variations-item" id="191" data-name="Глухое, Поворотно-откидное, Глухое" data-url="https://imzo.uz/uploads/configurator/tricuspid/image_3_3.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_3_1.svg">
                                            </div> -->
                                            <div class="window-sections__variations-item" id="189" data-name="Поворотное, Поворотное, Поворотное" data-url="/assets/img/3tomonlama4.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_4.svg">
                                            </div>
                                            <div class="window-sections__variations-item" id="188" data-name="Поворотно-откидное, Поворотно-откидное, Поворотно-откидное" data-url="/assets/img/3tomonlama5.svg">
                                                <img src="https://imzo.uz/uploads/configurator/tricuspid/scheme_3_4_4.svg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="window_type" id="window-type" value="">
                            </div>

                            <script>
                                // Select elements and buttons
                                const windowTypeButtons = document.querySelectorAll('.window-sections__variations-item');
                                const hiddenWindowTypeInput = document.getElementById('window-type');

                                // Function to update the hidden input and active class
                                function updateWindowTypeSelection(button) {
                                    const selectedWindowType = button.getAttribute('data-name');
                                    hiddenWindowTypeInput.value = selectedWindowType;

                                    // Remove 'active' class from all buttons and add to the clicked one
                                    windowTypeButtons.forEach(btn => btn.classList.remove('active'));
                                    button.classList.add('active');
                                }

                                // Add event listener to each window type button
                                windowTypeButtons.forEach(button => {
                                    button.addEventListener('click', () => updateWindowTypeSelection(button));
                                });

                                // Initial selection (if there's an active button)
                                const firstSelectedWindowTypeButton = document.querySelector('.window-sections__variations-item.active');
                                if (firstSelectedWindowTypeButton) {
                                    updateWindowTypeSelection(firstSelectedWindowTypeButton);
                                }
                            </script>

                            <div class="aside-types">
                                <h4 class="mt-5">{{__('main.calculator19')}}</h4>
                                <div class="aside-types__btns mt-2 mb-4">
                                    <div class="btn-custom aside-types-btn_js active" id="75" data-name="PVX">{{__('main.calculator20')}}</div>
                                    <style>
                                        .btn-custom.active {
                                            border: #198754;
                                            background: #198754 !important;
                                            color: white !important;
                                        }
                                    </style>
                                    <div class="btn-custom aside-types-btn_js" id="76" data-name="Alyumin">{{__('main.calculator21')}}</div>
                                </div>
                                <input type="hidden" name="profile_type" id="profile-type" value="PVX">
                            </div>

                            <script>
                                // Select elements and buttons
                                const profileTypeButtons = document.querySelectorAll('.aside-types-btn_js');
                                const hiddenProfileTypeInput = document.getElementById('profile-type');

                                // Function to update the hidden input and active class
                                function updateProfileTypeSelection(button) {
                                    const selectedProfileType = button.getAttribute('data-name');
                                    hiddenProfileTypeInput.value = selectedProfileType;

                                    // Remove 'active' class from all buttons and add to the clicked one
                                    profileTypeButtons.forEach(btn => btn.classList.remove('active'));
                                    button.classList.add('active');
                                }

                                // Add event listener to each profile type button
                                profileTypeButtons.forEach(button => {
                                    button.addEventListener('click', () => updateProfileTypeSelection(button));
                                });

                                // Initial selection (if there's an active button)
                                const firstSelectedProfileTypeButton = document.querySelector('.aside-types-btn_js.active');
                                if (firstSelectedProfileTypeButton) {
                                    updateProfileTypeSelection(firstSelectedProfileTypeButton);
                                }
                            </script>

                            <div class="aside-types">
                                <h4 class="mt-5">{{__('main.calculator22')}}</h4>
                                <div class="input  mt-3">
                                    <input class="quanty-input_js" name="quantity" type="text" min="1" style="color: white;">
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit" style="width: 100%; margin-top: 20px;">{{__('main.calculator23')}}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- End of Calculate section
     ========================================== -->





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function addSuffixMM(input) {
                input.addEventListener('input', function () {
                    const value = input.value.replace(/\D/g, ''); // faqat sonlarni qoldiring
                    input.value = value ? `${value} sm` : '';
                });

                input.addEventListener('focus', function () {
                    const value = input.value.replace(/\D/g, ''); // faqat sonlarni qoldiring
                    input.value = value;
                });

                input.addEventListener('blur', function () {
                    const value = input.value.replace(/\D/g, ''); // faqat sonlarni qoldiring
                    input.value = value ? `${value} sm` : '';
                });
            }

            // Apply the function to the specific inputs
            const heightInput = document.getElementById('weight_size');
            const lengthInput = document.getElementById('height_size');

            addSuffixMM(heightInput);
            addSuffixMM(lengthInput);

            const output = document.getElementById("valueDisplay");

            const variationsItems = document.querySelectorAll(".window-sections__variations-item");

            // Barcha window-sections__field elementlarini topish
            const fields = document.querySelectorAll('.window-sections__field');

            // Har bir field elementiga klik event qo'shish
            fields.forEach(field => {
                field.addEventListener('click', () => {
                    // Hozirgi active klassiga ega elementni topish va undan klassni olib tashlash
                    const activeField = document.querySelector('.window-sections__field.active');
                    if (activeField) {
                        activeField.classList.remove('active');
                    }

                    // Klik qilingan elementga active klassini qo'shish
                    field.classList.add('active');
                });
            });

            function handleVariationsClick() {
                const background = document.querySelector('.background');
                document.querySelectorAll('.window-sections__field-wrap').forEach(function(fieldWrap) {
                    fieldWrap.addEventListener('click', function() {
                        // Toggle 'active' class for the variations container
                        const variationsContainer = fieldWrap.querySelector('.window-sections__variations-container');
                        const isActive = variationsContainer.classList.toggle('active');

                        // Toggle 'active' class for the background
                        if (isActive) {
                            background.classList.add('active');
                        } else {
                            background.classList.remove('active');
                        }

                        // Remove 'active' class from all other variations containers except the clicked one
                        document.querySelectorAll('.window-sections__variations-container').forEach(function(container) {
                            if (container !== variationsContainer) {
                                container.classList.remove('active');
                            }
                        });
                    });
                });
            }

            // Function to handle click on lamination buttons
            function handleLaminationClick() {
                const laminationButtons = document.querySelectorAll('.aside-lamination__btn');
                const laminationImage = document.querySelector('.window-cotnainer__lamination img');
                const profiile = document.querySelectorAll('.profile')

                profiile.forEach(function(button) {
                    button.addEventListener('click', function() {
                        profiile.forEach(function(btn) {
                            btn.classList.remove('active');
                        });
                        button.classList.add('active');
                    });
                });
                laminationButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        laminationButtons.forEach(function(btn) {
                            btn.classList.remove('active');
                        });
                        button.classList.add('active');
                        const imgSrc = button.querySelector('img').getAttribute('src');
                        laminationImage.setAttribute('src', imgSrc);
                    });
                });
            }

            // Function to handle click on window sections variations items
            function handleVariationsItemClick() {
                const variationsItems = document.querySelectorAll('.window-sections__variations-item');

                variationsItems.forEach(function(item) {
                    item.addEventListener('click', function() {
                        variationsItems.forEach(function(item) {
                            item.classList.remove('active');
                        });
                        item.classList.add('active');
                        const dataUrl = item.getAttribute('data-url');
                        const imageElement = document.querySelector('.window-cotnainer__img img');
                        imageElement.setAttribute('src', dataUrl);
                    });
                });
            }

            // Function to handle click on select-custom fields
            function handleSelectCustomClick() {
                document.querySelectorAll('.select-custom').forEach(function(selectCustom) {
                    const selectList = selectCustom.querySelector('.select-custom__list');
                    const selectField = selectCustom.querySelector('.select-custom__field');

                    // Toggle select list visibility on click
                    selectField.addEventListener('click', function() {
                        selectList.classList.toggle('active'); // Toggle the 'active' class for visibility
                    });

                    // Toggle 'active' class on select-custom__item click
                    selectCustom.querySelectorAll('.select-custom__item').forEach(function(item) {
                        item.addEventListener('click', function() {
                            // Remove 'active' class from all items
                            selectCustom.querySelectorAll('.select-custom__item').forEach(function(item) {
                                item.classList.remove('active');
                            });
                            // Add 'active' class to the clicked item
                            item.classList.add('active');
                            // Update selectField text with clicked item text
                            selectField.textContent = item.textContent.trim();
                            // Hide selectList
                            selectList.classList.remove('active');
                        });
                    });

                    // Close the select list when clicking outside
                    document.addEventListener('click', function(event) {
                        const isClickInside = selectCustom.contains(event.target);
                        if (!isClickInside) {
                            selectList.classList.remove('active');
                        }
                    });

                });
            }

            // Initialize all event listeners
            handleVariationsClick();
            handleLaminationClick();
            handleVariationsItemClick();
            handleSelectCustomClick();
        });

    </script>
</x-layouts.frontend>