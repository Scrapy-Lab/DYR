@extends('layouts.app')
@section('content')
    <!--Info Back Drop-->
    <div class="info-back-drop"></div>

    <!-- Hidden Bar -->
    <section class="info-bar">
        <div class="inner-box">
            <div class="cross-icon"><span class="far fa-close"></span></div>
            <div class="logo-box">
                <a href="index.html" title="Delici - Restaurants HTML Template"><img
                        src="{{asset('images/logo.png')}}" alt="" title="Delici - Restaurants HTML Template"></a>
            </div>
            <div class="image-box"><img src="{{asset('images/resource/sidebar-logo.jpg')}}" alt="" title=""></div>

            <h2>Visit Us</h2>
            <ul class="info">
                <li> Chhatarpur, Delhi, India</li>
                <li>Open: 9:00 AM - 9:00 PM</li>
                <li><a href="mailto:booking@designyourrestaurant.com">booking@designyourrestaurant.com</a></li>
            </ul>
            <div class="separator"><span></span></div>
            <div class="booking-info">
                <div class="bk-title">Booking request</div>
                <div class="bk-no"><a href="tel:+919110150863">+91 911-015-0863</a></div>
            </div>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!-- Banner Section -->
    <section class="banner-section">

        <div class="banner-container">
            <div class="banner-slider">
                <div class="swiper-wrapper">
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer" style="background-image: url(images/main-slider/slider-1.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <div class="subtitle"><span>delightful experience</span></div>
                                            <div class="pattern-image"><img src="images/icons/separator.svg" alt=""
                                                    title=""></div>
                                            <h1><span>Unveil the Restaurant Design of Your Dreams<br> </span></h1>
                                            {{-- <div class="text"></div> --}}
                                            {{-- <div class="links-box wow fadeInUp" data-wow-delay="0ms"
                                                data-wow-duration="1500ms">
                                                <div class="link">
                                                    <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">view our Design</span>
                                                            <span class="text-two">view our Design</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer" style="background-image: url(images/main-slider/slider-2.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <div class="subtitle"><span>amazing & delicious</span></div>
                                            <div class="pattern-image"><img src="images/icons/separator.svg" alt=""
                                                    title=""></div>
                                            <h1><span>Where every design <br>tells a story</span></h1>
                                            {{-- <div class="text">Come with family & feel the joy of mouthwatering food</div> --}}
                                            {{-- <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="menu-list-2.html" class="theme-btn btn-style-two clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">view our menu</span>
                                                            <span class="text-two">view our menu</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer" style="background-image: url(images/main-slider/slider-3.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="content">
                                    <div class="clearfix">
                                        <div class="inner">
                                            <div class="subtitle"><span>Tradational & Hygine</span></div>
                                            <div class="pattern-image"><img src="images/icons/separator.svg" alt=""
                                                    title=""></div>
                                            <h1><span>Experience Impeccable Design</span></h1>
                                            <div class="text">Where Ambiance Meets Appetite</div>
                                            {{-- <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="menu-list-3.html" class="theme-btn btn-style-two clearfix">
                                                        <span class="btn-wrap">
                                                            <span class="text-one">view our menu</span>
                                                            <span class="text-two">view our menu</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"><span class="fal fa-angle-left"></span></div>
                <div class="swiper-button-next"><span class="fal fa-angle-right"></span></div>
            </div>
        </div>

        {{-- <div class="book-btn "><a href="#contact" class="theme-btn"><span class="icon"><img class="callIcon"
                        src="images/resource/book-icon-1.png" alt="" title=""></span><span class="txt">book
                    a call</span></a></div> --}}
    </section>
    <!--End Banner Section -->

    <!--We Offer Section-->
    <section class="we-offer-section">
        {{-- <div class="left-bot-bg"><img src="images/background/bg-1.png" alt="" title=""></div> --}}
        {{-- <div class="right-top-bg"><img src="images/background/bg-2.png" alt="" title=""></div> --}}
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>Design of royalty</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>From Concept to Reality !</h2>
                <div class="text">Making Stylish Restaurants Come Alive. <br>Enhancing Restaurants with Style.</div>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image"><a href="menu-list-1.html"><img src="images/resource/offer-image-1.jpg"
                                    alt=""></a></div>
                        {{-- <h3><a href="menu-list-1.html">Breakfast</a></h3>
                        <div class="more-link"><a href="menu-list-1.html">view menu</a></div> --}}
                    </div>
                </div>

                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image"><a href="menu-list-2.html"><img src="images/resource/offer-image-2.jpg"
                                    alt=""></a></div>
                        {{-- <h3><a href="menu-list-2.html">Appetizers</a></h3>
                        <div class="more-link"><a href="menu-list-2.html">view menu</a></div> --}}
                    </div>
                </div>

                <!--Block-->
                <div class="offer-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image"><a href="menu-list-3.html"><img src="images/resource/offer-image-3.jpg"
                                    alt=""></a></div>
                        {{-- <h3><a href="menu-list-3.html">Drinks</a></h3>
                        <div class="more-link"><a href="menu-list-3.html">view menu</a></div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Story Section-->
    <section class="story-section" id="about_us">
        {{-- <div class="bottom-image"><img src="images/resource/image-3.png" alt="" title=""></div> --}}
        {{-- <div class="left-bg"><img src="images/background/bg-3.png" alt="" title=""></div> --}}
        <div class="auto-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="text-col col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box centered">
                            <div class="subtitle"><span>Our story</span></div>
                            <div class="pattern-image"><img src="images/icons/separator.svg" alt=""
                                    title=""></div>
                            <h2>Every Design Tells a Story !</h2>
                            <div class="text">It reminds us that design is not
                                merely about aesthetics but about creating meaningful and purposeful experiences that touch
                                the lives of people. It highlights the importance of thoughtfulness, intentionality, and
                                creativity in the design process to craft stories that resonate and leave a lasting impact.
                            </div>
                        </div>
                        <div class="booking-info">
                            {{-- <div class="bk-title">Book Through Call</div> --}}
                            {{-- <div class="bk-no"><a href="tel:+919110150863">+91 911-015-0863</a></div> --}}

                            <div class="link-box">
                                <!-- Button trigger modal -->
                                <button type="button" class="theme-btn btn-style-one clearfix" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <span class="btn-wrap">
                                        <span class="text-one ">About Us</span>
                                        <span class="text-two ">About Us</span>
                                    </span>
                                </button>
                                {{-- <a href="tel:+919110150863" class="theme-btn btn-style-two clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one MobileNo">+91 911-015-0863</span>
                                        <span class="text-two MobileNo">+91 911-015-0863</span>
                                    </span>
                                </a> --}}
                            </div>

                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">About Us (DYR)</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="modal_exit" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Welcome to <b style="font-size: 20px">"Design Your Restaurant"</b> - A culinary sanctuary that merges exquisite
                                dining with
                                captivating aesthetics, creating an unforgettable gastronomic experience. Design Your
                                Restaurant is a haven for discerning food enthusiasts seeking both
                                indulgence and beauty.<br><br>

                                <b style="font-size: 20px">Exterior:</b>
                                Upon approach, you'll be greeted by an enchanting façade that seamlessly blends modern
                                architecture with natural elements. The exterior boasts a minimalist color palette,
                                featuring earthy tones and warm lighting that casts a gentle glow onto the entrance. A lush
                                vertical garden adorns one side, adding a touch of greenery to the urban landscape. The
                                restaurant's name is elegantly etched in gold script above the entrance, inviting you to
                                step inside.<br><br>

                                <b style="font-size: 20px">Interior:</b>
                                As you enter, the interior reveals an exquisite harmony of contemporary design and classic
                                sophistication. The foyer features a striking art installation, an ever-changing display of
                                local and international artwork, setting the tone for an aesthetic journey that parallels
                                the culinary experience.

                                The main dining area is a symphony of refined opulence. Dark oak floors contrast with ivory
                                walls, while plush velvet seating in jewel tones provides comfort and elegance. Illuminated
                                suspended sculptures dangle above each table, casting a soft, diffused light that
                                complements the table settings. Ambient instrumental music plays softly, creating an
                                ambiance that's perfect for intimate conversations or celebratory gatherings.<br><br>

                                <b style="font-size: 20px">Private Dining:</b>
                                Design Your Restaurant offers private dining rooms, each uniquely designed to reflect a different
                                culinary destination. From a Parisian-inspired chamber adorned with vintage wine barrels to
                                a futuristic Tokyo-themed room with sleek lines and minimalist décor, these private spaces
                                offer a sense of exclusivity while maintaining a cohesive connection to the restaurant's
                                overall aesthetic.<br><br>

                                <b style="font-size: 20px">Bar and Lounge:</b>
                                Adjacent to the main dining area, the bar and lounge area exudes modern flair. A
                                marble-topped bar with backlit shelves showcasing a curated selection of spirits takes
                                center stage. Plush barstools and low lounge seating encourage guests to savor handcrafted
                                cocktails and conversation in a relaxed setting.<br><br>

                                <b style="font-size: 20px">Open Kitchen:</b>
                                The open kitchen is a theater of culinary creativity, allowing diners to witness the
                                artistry that goes into crafting each dish. Chefs in crisp white attire move with precision
                                and passion, transforming fresh ingredients into edible masterpieces. A counter with high
                                stools provides a front-row seat to this gastronomic spectacle.<br><br>

                                <b style="font-size: 20px">Terrace Garden:</b>
                                For those who prefer to dine al fresco, the terrace garden offers a tranquil oasis amidst
                                the city's bustle. Overhead trellises adorned with fairy lights create an enchanting canopy,
                                while potted plants and comfortable seating complete the outdoor experience.<br><br>

                                Overall, Design Your Restaurant is a harmonious blend of aesthetics and gastronomy, where each
                                element is thoughtfully curated to create an immersive dining encounter that delights the
                                senses and nourishes the soul.

                            </div>

                        </div>
                    </div>
                </div>

                <!--Col-->
                <div class="image-col col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/resource/slider1.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="images/resource/slider2.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="images/resource/slider3.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="images/resource/image-1.jpg" class="d-block w-100" alt="">
                              </div>
                            </div>
                           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </button>
                          </div>


                        {{-- <div class="round-stamp"><img src="images/resource/badge-1.png" alt=""></div> --}}
                        {{-- <div class="images parallax-scene-1">
                            <div class="image" data-depth="0.15"><img src="images/resource/image-1.jpg" alt="">
                            </div> --}}
                            {{-- <div class="image" data-depth="0.30"><img src="images/resource/image-2.jpg" alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Special Dish Section-->
    {{-- <section class="special-dish">

        <div class="outer-container">
            <div class="row clearfix">
                <!--Col-->
                <div class="image-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div>
                        <div class="image"><img src="images/background/image-1.jpg" alt=""></div>
                    </div>
                </div>
                <!--Col-->
                <div class="content-col col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="right-bg"><img src="images/background/bg-4.png" alt="" title=""></div>
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="title-box">
                            <span class="badge-icon"><img src="images/resource/badge-2.png" alt=""
                                    title=""></span>
                            <div class="subtitle"><span>Special dish</span></div>
                            <div class="pattern-image"><img src="images/icons/separator.svg" alt=""
                                    title=""></div>
                            <h2>Lobster Tortellini</h2>
                            <div class="text">Lorem Ipsum is simply dummy text of the printingand typesetting industry
                                lorem Ipsum has been the industrys standard dummy text ever since the when an unknown
                                printer took a galley of type.</div>
                        </div>
                        <div class="price"><span class="old">$40.00</span> <span class="new">$20.00</span></div>
                        <div class="link-box">
                            <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">view all menu</span>
                                    <span class="text-two">view all menu</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    {{--
    BEst Design
    RIght pricing
    Acrtictuical consultancy
    End to end supprtt --}}

    <!--Menu Section-->
    <section class="menu-section" id="category_section">
        {{-- <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div> --}}
        <div class="auto-container">
            <div class="title-box centered">
                {{-- <div class="subtitle"><span>Special selection</span></div> --}}
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Categories</h2>
            </div>

            <div class="tabs-box menu-tabs">
                <div class="buttons">
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>Fine Dining</span></li>
                        <li class="tab-btn active-btn" data-tab="#tab-2"><span>Casual Dining</span></li>
                        {{-- <li class="tab-btn active-btn" data-tab="#tab-3"><span>Ethnic Cuisine</span></li> --}}
                        <li class="tab-btn active-btn" data-tab="#tab-4"><span>Cafés and Bistros</span></li>
                        <li class="tab-btn active-btn" data-tab="#tab-4"><span>Clubs</span></li>
                    </ul>
                </div>
                {{-- <div class="tabs-content">
                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Greek Salad</a></h5>
                                                </div>
                                                <div class="price"><span>$25.50</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                    cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                    </h5>
                                                </div>
                                                <div class="price"><span>$40.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Butternut Pumpkin</a></h5>
                                                </div>
                                                <div class="price"><span>$10.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem
                                                    Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Tokusen Wagyu <span
                                                                class="s-info">NEW</span></a></h5>
                                                </div>
                                                <div class="price"><span>$39.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Olivas Rellenas</a></h5>
                                                </div>
                                                <div class="price"><span>$25.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                    crab salad stuffed red bell pepper and green bell pepper.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Opu Fish</a></h5>
                                                </div>
                                                <div class="price"><span>$49.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Greek Salad</a></h5>
                                                </div>
                                                <div class="price"><span>$25.50</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                    cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                    </h5>
                                                </div>
                                                <div class="price"><span>$40.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Butternut Pumpkin</a></h5>
                                                </div>
                                                <div class="price"><span>$10.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem
                                                    Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Tokusen Wagyu <span
                                                                class="s-info">NEW</span></a></h5>
                                                </div>
                                                <div class="price"><span>$39.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Olivas Rellenas</a></h5>
                                                </div>
                                                <div class="price"><span>$25.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                    crab salad stuffed red bell pepper and green bell pepper.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Opu Fish</a></h5>
                                                </div>
                                                <div class="price"><span>$49.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Greek Salad</a></h5>
                                                </div>
                                                <div class="price"><span>$25.50</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                    cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                    </h5>
                                                </div>
                                                <div class="price"><span>$40.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Butternut Pumpkin</a></h5>
                                                </div>
                                                <div class="price"><span>$10.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem
                                                    Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Tokusen Wagyu <span
                                                                class="s-info">NEW</span></a></h5>
                                                </div>
                                                <div class="price"><span>$39.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Olivas Rellenas</a></h5>
                                                </div>
                                                <div class="price"><span>$25.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                    crab salad stuffed red bell pepper and green bell pepper.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Opu Fish</a></h5>
                                                </div>
                                                <div class="price"><span>$49.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="row clearfix">
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-5.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Greek Salad</a></h5>
                                                </div>
                                                <div class="price"><span>$25.50</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Tomatoes, green bell pepper, sliced
                                                    cucumber onion, olives, and feta cheese.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-6.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Lasagne <span class="s-info">SEASONAL</span></a>
                                                    </h5>
                                                </div>
                                                <div class="price"><span>$40.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-7.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Butternut Pumpkin</a></h5>
                                                </div>
                                                <div class="price"><span>$10.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Typesetting industry lorem Lorem
                                                    Ipsum is simply dummy text of the priand.</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-col col-lg-6 col-md-12 col-sm-12">
                                <div class="inner">
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-8.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Tokusen Wagyu <span
                                                                class="s-info">NEW</span></a></h5>
                                                </div>
                                                <div class="price"><span>$39.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices.</a></div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-9.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Olivas Rellenas</a></h5>
                                                </div>
                                                <div class="price"><span>$25.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Avocados with crab meat, red onion,
                                                    crab salad stuffed red bell pepper and green bell pepper. Cucumber</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Block-->
                                    <div class="dish-block">
                                        <div class="inner-box">
                                            <div class="dish-image"><a href="#"><img
                                                        src="images/resource/menu-image-10.png" alt=""></a></div>
                                            <div class="title clearfix">
                                                <div class="ttl clearfix">
                                                    <h5><a href="#">Opu Fish</a></h5>
                                                </div>
                                                <div class="price"><span>$49.00</span></div>
                                            </div>
                                            <div class="text desc"><a href="#">Vegetables, cheeses, ground meats,
                                                    tomato sauce, seasonings and spices</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="open-timing">
                <div class="hours">During winter daily from <span class="theme_color">7:00 pm</span> to <span
                        class="theme_color">9:00 pm</span></div>
                <div class="link-box">
                    <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">view all menu</span>
                            <span class="text-two">view all menu</span>
                        </span>
                    </a>
                </div>
            </div> --}}
        </div>
    </section>

    <!--Special Offer Section-->
    {{-- <section class="special-offer">
        <div class="outer-container">
            <div class="auto-container">
                <div class="title-box centered">
                    <div class="subtitle"><span>special offer</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title="">
                    </div>
                    <h2>Best Specialties</h2>
                </div>
                <div class="dish-gallery-slider owl-theme owl-carousel">
                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-11.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-1.html">Greek Salad</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad red bell pepper...</div>
                            <div class="price">$39.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-12.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-2.html">Tokusen Wagyu</a></h4>
                            <div class="text desc">Tomatoes, green bell pepper, sliced cucumber onion, olives...</div>
                            <div class="price">$45.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-13.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-3.html">Butternut Pumpkin</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad stuffed bell pepper...
                            </div>
                            <div class="price">$15.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-14.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-4.html">Opu Fish</a></h4>
                            <div class="text desc">Vegetables, cheeses, ground meats, tomato sauce, seasonings...</div>
                            <div class="price">$12.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-11.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-1.html">Greek Salad</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad red bell pepper...</div>
                            <div class="price">$39.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-12.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-2.html">Tokusen Wagyu</a></h4>
                            <div class="text desc">Tomatoes, green bell pepper, sliced cucumber onion, olives...</div>
                            <div class="price">$45.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-13.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-3.html">Butternut Pumpkin</a></h4>
                            <div class="text desc">Avocados with crab meat, red onion, crab salad stuffed bell pepper...
                            </div>
                            <div class="price">$15.00</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="offer-block-two margin-top">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="images/resource/menu-image-14.jpg"
                                        alt=""></a></div>
                            <h4><a href="menu-list-4.html">Opu Fish</a></h4>
                            <div class="text desc">Vegetables, cheeses, ground meats, tomato sauce, seasonings...</div>
                            <div class="price">$12.00</div>
                        </div>
                    </div>

                </div>

                <div class="lower-link-box text-center">
                    <a href="menu-list-1.html" class="theme-btn btn-style-two clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">view all menu</span>
                            <span class="text-two">view all menu</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section> --}}

    <!--Testimonials Section-->
    <section class="testimonials-section"id="contact_section">
        <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div>
        <div class="auto-container">
            <div class="carousel-box">
                <div class="testi-top owl-theme owl-carousel">
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner
                                the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner
                                the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner
                                the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner
                                the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner
                                the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="slide-content">
                            <div class="quotes">”</div>
                            <div class="text quote-text">I wanted to thank you for inviting me down for that amazing dinner
                                the other night. The food was extraordinary.</div>
                        </div>
                    </div>
                </div>
                <div class="separator"><span></span><span></span><span></span></div>
                <div class="thumbs-carousel-box" >
                    <div class="testi-thumbs owl-theme owl-carousel">
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-1.jpg" alt=""></div>
                            <div class="auth-title">Sam Jhonson</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-2.jpg" alt=""></div>
                            <div class="auth-title">Ian Botham</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-3.jpg" alt=""></div>
                            <div class="auth-title">Dan Bitson</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-1.jpg" alt=""></div>
                            <div class="auth-title">Sam Jhonson</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-2.jpg" alt=""></div>
                            <div class="auth-title">Ian Botham</div>
                        </div>
                        <div class="slide-item">
                            <div class="image"><img src="images/resource/author-thumb-3.jpg" alt=""></div>
                            <div class="auth-title">Dan Bitson</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Reservation Section-->
    <section class="reserve-section" >
        {{-- <livewire:contact-us/> --}}

        @livewire('contact-us')

    </section>

    <!--Why Us Section-->
    {{-- <div class="left-bg"><img src="images/background/bg-8.png" alt="" title=""></div>
    <div class="right-bg"><img src="images/background/bg-7.png" alt="" title=""></div> --}}
    {{-- <section class="why-us">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>why choose us</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Our Strength</h2>
            </div>
            <div class="row clearfix">
                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="icon-box"><img src="images/resource/why-icon-1.png" alt=""></div>
                        <h4>Hygienic Food</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="icon-box"><img src="images/resource/why-icon-2.png" alt=""></div>
                        <h4>Fresh Environment</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="icon-box"><img src="images/resource/why-icon-3.png" alt=""></div>
                        <h4>Skilled Chefs</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="why-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="900ms">
                        <div class="icon-box"><img src="images/resource/why-icon-4.png" alt=""></div>
                        <h4>Event & Party</h4>
                        <div class="text">Lorem Ipsum is simply dummy printing and typesetting.</div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!--Featured Links Section-->
    {{-- <section class="featured-links">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Block-->
                <div class="link-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="text-block">
                            <div class="bl-inner">
                                <div class="content">
                                    <div class="subtitle">best menu</div>
                                    <h3>Special Dishes</h3>
                                    <div class="text">Lorem Ipsum is simply dummy printing.</div>
                                    <div class="link"><a href="menu-list-1.html" class="theme-btn"><span>view
                                                menu</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url(images/resource/featured-1.jpg);"></div>
                            <div class="image"><img src="images/resource/featured-1.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="link-block alternate col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url(images/resource/featured-2.jpg);"></div>
                            <div class="image"><img src="images/resource/featured-2.jpg" alt=""></div>
                        </div>
                        <div class="text-block">
                            <div class="bl-inner">
                                <div class="content">
                                    <div class="subtitle">Latest</div>
                                    <h3>Upcoming Events</h3>
                                    <div class="text">Simply dummy printing and setting.</div>
                                    <div class="link"><a href="menu-list-2.html" class="theme-btn"><span>join
                                                event</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="link-block col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="text-block">
                            <div class="bl-inner">
                                <div class="content">
                                    <div class="subtitle">selected</div>
                                    <h3>Chef Choice</h3>
                                    <div class="text">Dummy printing lorem Ipsum simply.</div>
                                    <div class="link"><a href="menu-list-3.html" class="theme-btn"><span>view
                                                menu</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="image-box">
                            <div class="image-layer" style="background-image: url(images/resource/featured-3.jpg);"></div>
                            <div class="image"><img src="images/resource/featured-3.jpg" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!--Team Section-->
    {{-- <section class="team-section">
        <div class="left-bg"><img src="images/background/bg-21.png" alt="" title=""></div>
        <div class="right-bg"><img src="images/background/bg-9.png" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>experienced team</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h2>Meet Our Chef</h2>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                        <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                        <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3><a href="menu-list.html">Willium Joe</a></h3>
                        <div class="designation">Master chef</div>
                        <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has
                            been the industrys.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                        <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                        <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3><a href="menu-list.html">Steave Den</a></h3>
                        <div class="designation">Master chef</div>
                        <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has
                            been the industrys.</div>
                    </div>
                </div>

                <!--Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.twitter.com/" class="fab fa-twitter"></a></li>
                                        <li><a href="https://dribbble.com/" class="fab fa-dribbble"></a></li>
                                        <li><a href="https://www.linkedin.com/" class="fab fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3><a href="menu-list.html">Lily Sopy</a></h3>
                        <div class="designation">Master chef</div>
                        <div class="text desc">Lorem Ipsum is simply dummy printing and typeset industry lorem Ipsum has
                            been the industrys.</div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!--Intro Section-->
    {{-- <section class="intro-section">
        <div class="image-layer" style="background-image: url(images/background/image-3.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="title-box centered">
                    <div class="subtitle"><span>amazing experience</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title="">
                    </div>
                    <h2>Watch Our Video</h2>
                </div>
                <div class="play-btn"><a href="https://www.youtube.com/watch?v=ZETY_l3GVQg&autoplay=1"
                        class="lightbox-image theme-btn"><span class="icon fal fa-play"><i class="ripple"></i></span></a>
                </div>
                <div class="separator"><span></span><span></span><span></span></div>
                <h3>A modern restaurant with a menu that will make your mouth water.</h3>
                <div class="auth-title">Willium Joe - Master chef</div>
            </div>

            <div class="fact-counter">
                <div class="row clearfix">
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box"><span class="count-text" data-stop="150"
                                        data-speed="2000">0</span><i>+</i></div>
                            </div>
                            <div class="fact-title">daily <br>order</div>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box"><span class="count-text" data-stop="82"
                                        data-speed="1500">0</span><i>+</i></div>
                            </div>
                            <div class="fact-title">Special <br>Dishes</div>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box"><span class="count-text" data-stop="35"
                                        data-speed="1000">0</span><i>+</i></div>
                            </div>
                            <div class="fact-title">expert <br>chef</div>
                        </div>
                    </div>
                    <div class="fact-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner clearfix">
                            <div class="fact-count">
                                <div class="count-box"><span class="count-text" data-stop="10"
                                        data-speed="1000">0</span><i>+</i></div>
                            </div>
                            <div class="fact-title">awards <br>won</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    <!--Recnt Updates Section-->
    {{-- <section class="news-section">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle"><span>recent updates</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title="">
                </div>
                <h2>Upcoming Event</h2>
            </div>
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <div class="date"><span>15/09/2022</span></div>
                            <div class="image"><a href="#"><img src="images/resource/news-2.jpg"
                                        alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">Food, flavour</div>
                                <h4><a href="menu-list.html">Flavour so good you’ll try to eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <div class="date"><span>08/09/2022</span></div>
                            <div class="image"><a href="#"><img src="images/resource/news-1.jpg"
                                        alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">healthy food</div>
                                <h4><a href="menu-list.html">Flavour so good you’ll try to eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <div class="date"><span>03/09/2022</span></div>
                            <div class="image"><a href="#"><img src="images/resource/news-3.jpg"
                                        alt=""></a></div>
                            <div class="over-content">
                                <div class="cat">recipie</div>
                                <h4><a href="menu-list.html">Flavour so good you’ll try to eat with your eyes.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lower-link-box text-center">
                <a href="#" class="theme-btn btn-style-two clearfix">
                    <span class="btn-wrap">
                        <span class="text-one">view our blog</span>
                        <span class="text-two">view our blog</span>
                    </span>
                </a>
            </div>

        </div>
    </section> --}}
@endsection
