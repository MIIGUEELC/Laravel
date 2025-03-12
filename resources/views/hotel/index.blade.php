@extends('layouts.app')

@section('content')
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
                        <a href="{{ route('index') }}"> <img
                                class="nav__container__menu--logo nav__container__menu--logo--title"
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
        <section class="tourSection">
            <div class="tourSection__container">
                <p class="tourSection__container--subtitleDesktop">
                    We Make You Feel Comfortable
                </p>
                <p class="tourSection__container--subtitle">
                    THE ULTIMATE LUXURY EXPERIENCE
                </p>
                <h1 class="tourSection__container--title">
                    The Perfect Base For You
                </h1>
                <div class="tourSection__container__buttons">
                    <a class="tourSection__container_buttons tourSection__container__buttons--tour btn"
                        href="{{ route('about') }}">
                        TAKE A TOUR
                    </a>
                    <a class="tourSection__container_buttons tourSection__container__buttons--learn btn"
                        href="{{ route('offers') }}">
                        LEARN MORE
                    </a>
                </div>
            </div>
        </section>



        <section class="aboutSection">
            <div class="aboutSection__info">
                <p class="aboutSection__info--subtitle">ABOUT US</p>
                <h1 class="aboutSection__info--title">Discover Our Underground.</h1>
                <p class="aboutSection__info--paragraph">
                    A hidden gem beneath the surface. Explore our exclusive underground facilities, offering a unique and
                    intimate atmosphere. Whether it’s our stylish lounge, private dining area, or our relaxing spa, this
                    underground retreat provides the perfect escape from the ordinary. Unveil a new experience and enjoy a
                    world of luxury and tranquility beneath the surface.
                </p>
                <a class="aboutSection__info--button btn" href="{{ route('rooms') }}">BOOK NOW</a>
            </div>
            <div class="aboutSection__cards">
                <div class="aboutSection__cards__team">
                    <img class="aboutSection__cards__team--img" src="{{ asset('assets/imgs/team.jpg') }}" alt="team" />
                    <div class="aboutSection__cards__team--container">
                        <div class="aboutSection__cards__team--container--icons">
                            <img class="aboutSection__cards__team--container--icons--small"
                                src="{{ asset('assets/icons/strong-team.svg') }}" alt="" />
                            <img class="aboutSection__cards__team--container--icons--big"
                                src="{{ asset('assets/icons/strong-team-transparent.svg') }}" alt="Strong team" />
                        </div>
                        <h2 class="aboutSection__cards__team--container--title">
                            Strong Team
                        </h2>
                        <p class="aboutSection__cards__team--container--paragraph">
                            Our strong team is the backbone of our success. Committed, dedicated, and skilled,
                        </p>
                    </div>
                </div>
                <div class="aboutSection__cards__room">
                    <img class="aboutSection__cards__room--img" src="{{ asset('assets/imgs/luxury.jpg') }}"
                        alt="Luxury room" />
                    <div class="aboutSection__cards__room--container">
                        <div class="aboutSection__cards__room--container--icons">
                            <img class="aboutSection__cards__room--container--icons--small"
                                src="{{ asset('assets/icons/calendar.svg') }}" alt="Luxury room" />
                        </div>
                        <h2 class="aboutSection__cards__room--container--title">
                            Luxury Room
                        </h2>
                        <p class="aboutSection__cards__room--container--paragraph">
                            Indulge in the ultimate comfort and elegance of our luxury room.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section class="roomSlider">
            <p class="roomSlider__subtitle">ROOMS</p>
            <h1 class="roomSlider__title">Hand Picked Rooms</h1>
            <div class="swiper roomSlider__slides">
                <div class="swiper-wrapper">
                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                                alt="Room extras" />
                            <img class="roomSlider__slides--roomImg" src="{{ asset($room['photo']) }}"
                                alt="Hotel room" />
                            <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                            <p class="roomSlider__slides--description">
                                {{ $room['facilities'] }}
                            </p>
                            <p class="roomSlider__slides--price">${{ $room['price'] }}<span
                                    class="roomSlider__slides--price--perNight">/Night</span></p>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>


        <section class="videoSection">
            <p class="videoSection__subtitle">INTRO VIDEO</p>
            <h1 class="videoSection__title">Meet With Our Luxury Place.</h1>
            <p class="videoSection__description">
                Relax and unwind at our hotel’s sparkling outdoor pool. Surrounded by lush greenery, the pool offers a
                serene atmosphere, perfect for a refreshing swim or lounging by the water. Whether you want to soak up the
                sun on our comfortable loungers or enjoy a leisurely dip, our pool provides the ideal setting for relaxation
                and rejuvenation.
            </p>

            <div class="videoSection__videoContainer">
                <video autoplay muted loop controls>
                    <source src="{{ asset('assets/video/video-hotel.mp4') }}" type="video/mp4">
                </video>
            </div>

            <a href="{{ route('rooms') }}"><button class="videoSection__button btn">BOOK NOW</button><a
                    href=""></a>
        </section>




        <section class="featuresSection">
            <p class="featuresSection__subtitle">FACILITIES</p>
            <h1 class="featuresSection__title">Core Features</h1>
            <div class="swiperFeatures featuresSection__slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/rating.svg') }}" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number"
                                src="{{ asset('assets/imgs/01.jpg') }}" alt="Number one" />
                        </div>

                        <h1 class="featuresSection__slides--title">Have High Rating</h1>

                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/hours.svg') }}" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number"
                                src="{{ asset('assets/imgs/02.jpg') }}" alt="Number two" />
                        </div>

                        <h1 class="featuresSection__slides--title">Quiet Hours</h1>

                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/locations.svg') }}" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number"
                                src="{{ asset('assets/imgs/03.jpg') }}" alt="Number three" />
                        </div>

                        <h1 class="featuresSection__slides--title">Best Locations</h1>

                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/cancellation.svg') }}" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number"
                                src="{{ asset('assets/imgs/04.jpg') }}" alt="Number four" />
                        </div>

                        <h1 class="featuresSection__slides--title">Free Cancellation</h1>

                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/payment.svg') }}" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number"
                                src="{{ asset('assets/imgs/05.jpg') }}" alt="Number five" />
                        </div>

                        <h1 class="featuresSection__slides--title">Payment Options</h1>

                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/offers.svg') }}" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number"
                                src="{{ asset('assets/imgs/06.jpg') }}" alt="Number six" />
                        </div>

                        <h1 class="featuresSection__slides--title">Special Offers</h1>

                    </div>
                </div>
                <div class="swiperFeatures-pagination"></div>
            </div>
        </section>



        <section class="menuSection">
            <div class="wrapper">
                <img class="menuSection__icon" src="{{ asset('assets/icons/donut.svg') }}" alt="Food icon" />
                <p class="menuSection__subtitle">MENU</p>
                <h1 class="menuSection__title">Our Foods Menu</h1>
                <div class="swiperMenu menuSection__slides">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="{{ asset('assets/imgs/egg&bacon.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Egg & Bacon
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Classic eggs and bacon, served with perfectly cooked eggs to your preference and
                                        crispy, savory bacon. A hearty and satisfying breakfast to start your day right.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="{{ asset('assets/imgs/coffee.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Tea or Coffee
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Enjoy a warm and comforting cup of tea or coffee, brewed to perfection.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="{{ asset('assets/imgs/fruits.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        A refreshing assortment of fresh, seasonal fruits, including juicy berries, crisp
                                        apples, ripe bananas, and tropical delights.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="{{ asset('assets/imgs/salad.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Fresh Salad
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        A light and refreshing small salad, featuring a mix of crisp greens, cherry
                                        tomatoes, cucumber, and a light dressing. Perfect as a starter or a healthy side
                                        dish.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="{{ asset('assets/imgs/steak.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Delicious Steak
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        A perfectly cooked steak, grilled to your liking and served with a rich, flavorful
                                        crust. Tender and juicy on the inside.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="{{ asset('assets/imgs/food2.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        A refreshing assortment of fresh, seasonal fruits, including juicy berries, crisp
                                        apples, ripe bananas, and tropical delights.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="{{ asset('assets/imgs/egg&bacon.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Egg & Bacon
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Classic eggs and bacon, served with perfectly cooked eggs to your preference and
                                        crispy, savory bacon. A hearty and satisfying breakfast to start your day right.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="{{ asset('assets/imgs/coffee.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Tea or Coffee
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Enjoy a warm and comforting cup of tea or coffee, brewed to perfection.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="{{ asset('assets/imgs/fruits.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        A refreshing assortment of fresh, seasonal fruits, including juicy berries, crisp
                                        apples, ripe bananas, and tropical delights.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="{{ asset('assets/imgs/salad.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Fresh Salad
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        A light and refreshing small salad, featuring a mix of crisp greens, cherry
                                        tomatoes, cucumber, and a light dressing. Perfect as a starter or a healthy side
                                        dish.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="{{ asset('assets/imgs/steak.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Delicious Steak
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        A perfectly cooked steak, grilled to your liking and served with a rich, flavorful
                                        crust. Tender and juicy on the inside.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="{{ asset('assets/imgs/food2.jpg') }}" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        A refreshing assortment of fresh, seasonal fruits, including juicy berries, crisp
                                        apples, ripe bananas, and tropical delights.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow"
                                    src="{{ asset('assets/imgs/goldenArrow.png') }}" alt="Golden arrow" />
                            </div>
                        </div>
                    </div>
                    <div class="swiperMenu-button-prev">&#60;</div>
                    <div class="swiperMenu-button-next">&#62;</div>
                </div>
                <div class="swiperMenuImages menuSection__images">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/food2.jpg') }}"
                                alt="Food image" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/food.jpg') }}"
                                alt="Food image" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/food3.jpg') }}"
                                alt="Food image" />
                        </div>
                    </div>
                    <div class="swiperMenuImages-pagination"></div>
                </div>
                <div class="menuSection__imagesDesktop">
                    <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/food2.jpg') }}" alt="Food image" />
                    <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/food.jpg') }}" alt="Food image" />
                    <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/food3.jpg') }}" alt="Food image" />
                </div>
            </div>
        </section>



        <section class="statsSection">
            <div class="statsSection__container">
                <div class="statsSection__container__stat">
                    <img src="{{ asset('assets/icons/rocket.svg') }}" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        84k<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Projects are completed
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="{{ asset('assets/icons/team.svg') }}" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        10M<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Active Backers Around World
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="{{ asset('assets/icons/economy.svg') }}" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        02k<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Categories Served
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="{{ asset('assets/icons/book.svg') }}" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        100M<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Idea Raised Funds
                    </p>
                </div>
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
                                +34 634 91 43 22
                            </p>
                        </div>
                    </div>
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/mail.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Mail
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
