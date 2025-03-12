@extends('layouts.app')

@section('content')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (sessionStorage.getItem("scrollPosition")) {
                window.scrollTo(0, sessionStorage.getItem("scrollPosition"));
                sessionStorage.removeItem("scrollPosition");
            }

            document.querySelectorAll("form").forEach(form => {
                form.addEventListener("submit", function() {
                    sessionStorage.setItem("scrollPosition", window.scrollY);
                });
            });
        });

        function onChangeDate() {
            var checkIn = document.getElementById('check-in-input').value;
            var checkOut = document.getElementById('check-out-input');

            if (checkIn) {
                var date = new Date(checkIn);
                date.setDate(date.getDate() + 1);
                var checkOutDate = date.toISOString().split("T")[0];
            }
            checkOut.min = checkOutDate;
        }
    </script>
    <header class="header">
        <nav class="nav">
            <div class="nav__container">
                <div class="nav__container nav__container__menu">
                    <div class="nav__container__menu nav__container__menu--burger">
                        <img id="mobileMenuBurguer" src="{{ asset('assets/icons/menu.svg') }}" alt="Menu icon">
                    </div>
                    <div class="nav__container__menu nav__container__menu--logo">
                        <div class="nav__container__menu--logo nav__container__menu--logo--favicon">
                            <span>H</span>
                        </div>
                        <a href="{{ route('index') }}">
                            <img class="nav__container__menu--logo nav__container__menu--logo--title"
                                src="{{ asset('assets/icons/logo.svg') }}" alt="Hotel Title">
                        </a>
                    </div>
                </div>
                <div class="nav__menu">
                    <a href="{{ route('about') }}" class="nav__itzem">About Us</a>
                    <a href="{{ route('rooms') }}" class="nav__item">Rooms</a>
                    <a href="{{ route('offers') }}" class="nav__item">Offers</a>
                    <a href="{{ route('contact') }}" class="nav__item">Contact</a>
                </div>
                <div>
                    <div class="nav__container nav__container__functionalities">
                        @if (Auth::check())
                            <span>Welcome, <p>{{ auth()->user()->name }}</p></span>
                            <a href="{{ route('logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                        strokeWidth="2">
                                        <path strokeDasharray="48" strokeDashoffset="48"
                                            d="M16 5v-1c0 -0.55 -0.45 -1 -1 -1h-9c-0.55 0 -1 0.45 -1 1v16c0 0.55 0.45 1 1 1h9c0.55 0 1 -0.45 1 -1v-1">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s"
                                                values="48;0" />
                                        </path>
                                        <path strokeDasharray="12" strokeDashoffset="12" d="M10 12h11">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s"
                                                dur="0.2s" values="12;0" />
                                        </path>
                                        <path strokeDasharray="6" strokeDashoffset="6" d="M21 12l-3.5 -3.5M21 12l-3.5 3.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.9s"
                                                dur="0.2s" values="6;0" />
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        @else
                        <a class="auth" href="{{ route('login') }}">Login</a>
                        <a class="auth" href="{{ route('register') }}">Register</a>

                        <div class="auth-mobile">
                            <a href="{{ route('login') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em"
                                    viewBox="0 0 2048 2048">
                                    <path fill="currentColor"
                                        d="M1728 1152q26 0 45 19t19 45t-19 45t-45 19t-45-19t-19-45t19-45t45-19m-603-19q-79-54-170-81t-187-28q-88 0-170 23t-153 64t-129 100t-100 130t-65 153t-23 170H0q0-117 35-229t101-207t157-169t203-113q-56-36-100-83t-76-103t-47-118t-17-130q0-106 40-199t109-163T568 40T768 0t199 40t163 109t110 163t40 200q0 67-16 129t-48 119t-75 103t-101 83q81 29 156 80zM384 512q0 80 30 149t82 122t122 83t150 30q79 0 149-30t122-82t83-122t30-150q0-79-30-149t-82-122t-123-83t-149-30q-80 0-149 30t-122 82t-83 123t-30 149m1280 384q79 0 149 30t122 82t83 123t30 149q0 80-30 149t-82 122t-123 83t-149 30q-65 0-128-23v151h-128v128h-128v128H896v-282l395-396q-11-46-11-90q0-79 30-149t82-122t122-83t150-30m0 640q53 0 99-20t82-55t55-81t20-100q0-53-20-99t-55-82t-81-55t-100-20q-53 0-99 20t-82 55t-55 81t-20 100q0 35 9 64t21 61l-414 413v102h128v-128h128v-128h128v-91l93-92q40 23 77 39t86 16" />
                                </svg>
                            </a>
                            <a href="{{ route('register') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 512a256 256 0 1 0 0-512a256 256 0 1 0 0 512m-96-360c0-13.3 10.7-24 24-24h88c44.2 0 80 35.8 80 80c0 28-14.4 52.7-36.3 67l34.1 75.1c5.5 12.1.1 26.3-11.9 31.8s-26.3.1-31.8-11.9l-37.2-82H208v72c0 13.3-10.7 24-24 24s-24-10.7-24-24zm48 88h64c17.7 0 32-14.3 32-32s-14.3-32-32-32h-64z" />
                                </svg>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <main>

        <section class="subheaderSection">
            <p class="tourSection__container--subtitleDesktop">
                We Make You Feel Comfortable
            </p>
            <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="subheaderSection__title">Ultimate Room</h1>
            <div class="subheaderSection__navigation">
                <a href="{{ route('index') }}">
                    <p class="subheaderSection__navigation__page">Home</p>
                </a>
                <p class="subheaderSection__navigation__page--active">Room Details</p>
            </div>
        </section>



        <section class="roomSection">
            <p class="roomSection__subtitle">DOUBLE BED</p>
            <h1 class="roomSection__title">{{ $room['bed_type'] }}</h1>
            <p class="roomSection__price">${{ $room['price'] }}<span class="roomSection__price--perNight">/Night</span></p>
            <img class="roomSlider__slides--roomImg" src="{{ asset($room['photo']) }}" alt="Hotel room" />
        </section>
        <section class="roomSectionDesktop">
            <div class="roomSectionDesktop__container">
                <div class="roomSectionDesktop__container__subcontainer">
                    <p class="roomSectionDesktop__container__subcontainer__subtitle">DOUBLE BED</p>
                    <h1 class="roomSectionDesktop__container__subcontainer__title">{{ $room['bed_type'] }}</h1>
                </div>
                <p class="roomSectionDesktop__container__price">${{ $room['price'] }}<span
                        class="roomSectionDesktop__container__price--perNight">/Night</span>
                </p>
            </div>

            <img class="roomSectionDesktop__roomImg" src="{{ asset($room['photo']) }}" alt="Hotel room" />
            <p class="roomSectionDesktop__text">
                {{ $room['facilities'] }}
            </p>
        </section>

        <section class="singleRoomAvailabilitySection">
            <p class="singleRoomAvailabilitySection__subtitle">
                Check Availability
            </p>
            @if (session('available') === false)
                <div class="Unsuccess">
                    The room is already occupied on these dates
                </div>
            @endif
            <form class="singleRoomAvailabilitySection__form"
                action="{{ route('check', ['room' => $room['room_number']]) }}" method="POST">
                @csrf
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="check-in-input">Check In</label>
                    <input id="check-in-input" type="date" name="checkIn" value="{{ session('checkIn') }}"
                        min="{{ date('Y-m-d') }}" onchange="onChangeDate()" />
                </div>
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="check-out-input">Check Out</label>
                    <input id="check-out-input" type="date" name="checkOut" value="{{ session('checkOut') }}" />
                </div>
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="price">Price</label>
                    <input type="text" name="price"
                        value=" {{ session('available') ? session('price') : $room['price'] }} " readonly>
                </div>
                <button class="btn btn--light" type="submit">
                    CHECK AVAILABILITY
                </button>
                @if (session('available') === true)
                    <input type="hidden" value="{{ $room['price'] }}" name="price">

                    <button class="btn btn--green" type="submit"
                        formaction="{{ route('create.booking', ['room' => $room['room_number']]) }}">
                        BOOK
                    </button>
                @endif
            </form>

            <p class="singleRoomAvailabilitySection__text">
                {{ $room['facilities'] }}
            </p>
        </section>



        <section class="amenitiesSection">
            <h1 class="amenitiesSection__title">Amenities</h1>
            <div class="amenitiesSection__separation"></div>
            <div class="amenitiesSection__container">
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/air-conditioner.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Air conditioner
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/wifi.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        High speed WiFi
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/lunch.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Breakfast
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/kitchen.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Kitchen
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/cleaning.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Cleaning
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/shower.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Shower
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/grocery.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Grocery
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="{{ asset('assets/icons/bed.svg') }}"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Single bed
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/shop.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Shop near
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/towel.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Towels
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/online-support.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        24/7 Online Support
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="{{ asset('assets/icons/key.svg') }}"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Strong Locker
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/security.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Smart security
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/expert-team.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Expert Team
                    </p>
                </div>
            </div>
        </section>



        <section class="employeeSection">
            <div class="employeeSection__container">
                <div class="employeeSection__container__imgContainer">
                    <img class="employeeSection__container__imgContainer__portrait"
                        src="{{ asset('assets/imgs/fotocvMiguel.jpg') }}" alt="Employee image" />
                    <div class="employeeSection__container__imgContainer__checkContainer">
                        <img class="employeeSection__container__imgContainer__checkContainer__check"
                            src="{{ asset('assets/icons/check.svg') }}" alt="Check mark image" />
                    </div>
                </div>
                <h1 class="employeeSection__container__name">Miguel Covarrubias</h1>
                <p class="employeeSection__container__position">FOUNDER, CEO.</p>
                <p class="employeeSection__container__text">
                    I am a web developer actively seeking new opportunities to apply my skills and expertise. Passionate
                    about creating innovative and user-friendly websites, I am eager to contribute to projects that
                    challenge my abilities and allow me to grow professionally.
                </p>
            </div>
        </section>



        <section class="cancellationSection amenitiesSection singleRoomAvailabilitySection">
            <h1 class="amenitiesSection__title">Cancellation</h1>
            <div class="amenitiesSection__separation"></div>
            <p class="cancellationSection__text singleRoomAvailabilitySection__text" style="padding-top: 0">
                If you have any further questions or need assistance with rescheduling, please don't hesitate to contact us.
                We hope to welcome you in the future.
            </p>
            <p class="cancellationSection__text singleRoomAvailabilitySection__text" style="padding-top: 0">
                Cancel up to 14 days to get a full refund.
            </p>
        </section>



        <section class="relatedRoomsSection amenitiesSection singleRoomAvailabilitySection">
            <h1 class="amenitiesSection__title">Related Rooms</h1>
            <div class="amenitiesSection__separation"></div>
            <div class="swiper roomSlider__slides">
                <div class="swiper-wrapper">
                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <div style="position: relative">
                                <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                                    alt="Room extras" />
                                <img class="roomSlider__slides--roomImg" src="{{ asset($room['photo']) }}"
                                    alt="Hotel room" />
                                <h1 class="roomSlider__slides--title">{{ $room['bed_type'] }}</h1>
                                <p class="roomSlider__slides--description">
                                    {{$room['facilities']}}
                                </p>
                                <div class="roomSlider__slides__container">
                                    <p class="roomSlider__slides__container--price">
                                        ${{ $room['price'] }}<span
                                            class="roomSlider__slides__container--price--perNight">/Night</span>
                                    </p>
                                    <a href="{{ route('details', ['id' => $room['id']]) }}"
                                        class="roomSlider__slides__container--bookNow">Book
                                        now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="relatedRoomsSection__desktopContainer">
                @foreach ($rooms as $room)
                    <div class="relatedRoomsSection__swiper__slide">
                        <div style="position: relative">
                            <img class="relatedRoomsSection__swiper__slide__extras"
                                src="{{ asset('assets/imgs/room-info.svg') }}" alt="Room extras" />
                            <img class="relatedRoomsSection__swiper__slide__roomImg" src="{{ asset($room['photo']) }}"
                                alt="Hotel room" />
                            <h1 class="relatedRoomsSection__swiper__slide__title">{{ $room['bed_type'] }}</h1>
                            <p class="relatedRoomsSection__swiper__slide__description">
                                {{ $room['facilities'] }}
                            </p>
                            <div class="relatedRoomsSection__swiper__slide__container">
                                <p class="relatedRoomsSection__swiper__slide__container__price">${{ $room['price'] }}
                                    <span
                                        class="relatedRoomsSection__swiper__slide__container__price--perNight">/Night</span>
                                </p>
                                <a href="{{ route('details', ['id' => $room['id']]) }}">
                                    <p class="relatedRoomsSection__swiper__slide__container__bookNow">
                                        Book now
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>


    </main>


    <footer class="footer">
        <div class="footer__container1">
            <div class="footer__container1__subcontainer1">
                <div class="footer__container1__subcontainer1__header">
                    <h1>H</h1>
                    <img src="{{ asset('assets/icons/logo.svg') }}" alt="Hotel name" />
                </div>
                <p class="footer__container1__subcontainer1__description">
                    Our hotel offers a welcoming and comfortable atmosphere, perfect for both business and leisure
                    travelers. Located in a prime area, we provide modern amenities, exceptional service, and a relaxing
                    environment to make your stay enjoyable. Whether you're here for a short visit or an extended stay, our
                    cozy rooms and convenient location will meet all your needs.
                </p>
                <div class="footer__container1__subcontainer1__icons">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="{{ asset('assets/icons/facebook.svg') }}" alt="Logo" />
                    </a>
                    <svg width="24" height="38" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z"
                            fill="#777777" />
                    </svg>
                    <a href="https://www.behance.net/" target="_blank">
                        <img src="{{ asset('assets/icons/behance.svg') }}" alt="Logo" />
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="{{ asset('assets/icons/linkedin.svg') }}" alt="Logo" />
                    </a>

                    <a href="https://www.youtube.com/" target="_blank">
                        <img src="{{ asset('assets/icons/youtube.svg') }}" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="footer__container1__subcontainer2">
                <h2 class="footer__container1__subcontainer2__title">Services.</h2>
                <div class="footer__container1__subcontainer2__services">
                    <div class="footer__container1__subcontainer2__services__1">
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Restaurant & Bar
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Swimming Pool
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Wellness & Spa
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Restaurant
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Conference Room
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Cocktail Party House
                        </p>
                    </div>
                    <div class="footer__container1__subcontainer2__services__2">
                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Gaming Zone
                        </p>

                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Marriage Party
                        </p>

                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Party Planning
                        </p>

                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Tour Consultancy
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer__container1__subcontainer3">
                <h2 class="footer__container1__subcontainer3__title">Contact Us.</h2>
                <div class="footer__container1__subcontainer3__contact">
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/phone.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Phone Number
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                +34 690 86 56 69
                            </p>
                        </div>
                    </div>
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/mail.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Email
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                miigueel9219@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/location.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Our Location
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                Madrid, Spain
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__container2">
            <div>
                <p class="footer__container2__copyright">
                    Copyright by Miguel Covarrubias - 2025
                </p>
            </div>
            <div class="footer__container2__links">
                <a href="#">Termns of use | </a>
                <a href="#">Privacy Environmental Policy</a>
            </div>
        </div>
    </footer>
@endsection
