  <!-- Main Header-->
  <header class="main-header header-down">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <ul class="top-info clearfix">
                        <li><i class="icon far fa-map-marker-alt"></i> Chhatarpur, Delhi, India</li>
                        <li><i class="icon far fa-clock"></i> Daily : 09.00 AM to 09.00 PM</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="top-info clearfix">
                        <li><a href="tel:+918603526364"><i class="icon far fa-phone"></i>  +91 860-352-6364</a></li>
                        <li><a href="mailto:booking@designyourrestaurant.com"><i class="icon far fa-envelope"></i> booking@designyourrestaurant.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!--Logo-->
                <div class="logo-box">
                     <div class="logo"><a  title="DYR"><img src="{{asset('images/logo.png')}}" alt="DYR" title="DYR"></a></div>
                </div>

                <div class="nav-box clearfix">
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <ul class="navigation clearfix">
                                {{-- id="home" --}}
                                <li  class="scroll-to-target {{Route::currentRouteName() == 'home' ?  'current' : '' }} " data-target="html" ><a href="{{route('home')}}" >Home</a>
                                </li>
                                {{-- <li class="dropdown has-mega-menu"><a href="menu-list.html">Menus</a>
                                    <ul>
                                        <li>
                                            <div class="mega-menu">
                                                <div class="menu-inner">
                                                    <div class="auto-container">
                                                        <div class="row clearfix">
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="menu-list-1.html"><img src="images/resource/menu-image-1.jpg" alt=""></a></div>
                                                                <div class="title"><a href="menu-list-1.html">Menu list 1</a></div>
                                                            </div>
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="menu-list-2.html"><img src="images/resource/menu-image-2.jpg" alt=""></a></div>
                                                                <div class="title"><a href="menu-list-2.html">Menu list 2</a></div>
                                                            </div>
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="menu-list-3.html"><img src="images/resource/menu-image-3.jpg" alt=""></a></div>
                                                                <div class="title"><a href="menu-list-3.html">Menu list 3</a></div>
                                                            </div>
                                                            <div class="menu-block col-lg-3 col-md-6 col-sm-6">
                                                                <div class="image"><a href="menu-list-4.html"><img src="images/resource/menu-image-4.jpg" alt=""></a></div>
                                                                <div class="title"><a href="menu-list-4.html">Menu list 4</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> --}}
                                {{-- id="aboutUs" --}}
                                <li class="navBar {{Route::currentRouteName() == 'aboutUs' ?  'current' : '' }}"  ><a href="{{route('aboutUs')}}">About Us</a></li>
                                <li class="navBar" id="categoriesTab"><a href="#category_section">Category</a></li>
                                {{-- <li><a href="our-chef.html">Our chefs</a></li> --}}
                                {{-- <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="#">Dropdown Menu 1</a></li>
                                        <li><a href="#">Dropdown Menu 2</a></li>
                                        <li><a href="#">Dropdown Menu 3</a></li>
                                        <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                                            <ul>
                                                <li><a href="#">Dropdown Menu level 2</a></li>
                                                <li><a href="#">Dropdown Menu level 2</a></li>
                                                <li><a href="#">Dropdown Menu Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dropdown Lorem 5</a></li>
                                    </ul>
                                </li> --}}
                                {{-- #contact_section --}}
                                <li  class="  {{Route::currentRouteName() == 'aboutUs' ?  'current' : '' }}"><a href="{{route('contactUs')}}" >Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->

                    <div class="links-box clearfix">
                        <div class="link link-btn">
                            <a   class="theme-btn btn-style-one clearfix contactLink">
                                <span class="btn-wrap">
                                    <span class="text-one">book a call</span>
                                    <span class="text-two">book a call</span>
                                </span>
                            </a>
                        </div>
                        <div class="link info-toggler">
                            <button class="info-btn">
                                <span class="hamburger">
                                    <span class="top-bun"></span>
                                    <span class="meat"></span>
                                    <span class="bottom-bun"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener">
                            <span class="hamburger">
                                <span class="top-bun"></span>
                                <span class="meat"></span>
                                <span class="bottom-bun"></span>
                            </span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</header>
<!--End Main Header -->

<!--Menu Backdrop-->
<div class="menu-backdrop"></div>

<!-- Hidden Navigation Bar -->
<section class="hidden-bar">
    <!-- Hidden Bar Wrapper -->
    <div class="inner-box">
        <div class="cross-icon hidden-bar-closer"><span class="far fa-close"></span></div>
        <div class="logo-box"><a  title="DYR"><img src="images/resource/sidebar-logo.png" alt="" title="Delici - Restaurants HTML Template"></a></div>

        <!-- .Side-menu -->
        <div class="side-menu">
             <ul class="navigation clearfix">
                <li class="current"><a >Home</a>
                </li>
                {{-- <li class="dropdown"><a href="menu-list.html">Menus</a>
                    <ul>
                        <li><a href="menu-list-1.html">Menu List 1</a></li>
                        <li><a href="menu-list-2.html">Menu List 2</a></li>
                        <li><a href="menu-list-3.html">Menu List 3</a></li>
                        <li><a href="menu-list-4.html">Menu List 4</a></li>
                    </ul>
                </li> --}}

                {{-- <li><a href="our-chef.html">Our chefs</a></li> --}}
                {{-- <li class="dropdown"><a href="#">Pages</a>
                    <ul>
                        <li><a href="#">Dropdown Menu 1</a></li>
                        <li><a href="#">Dropdown Menu 2</a></li>
                        <li><a href="#">Dropdown Menu 3</a></li>
                        <li class="dropdown"><a href="#">Dropdown Menu 4</a>
                            <ul>
                                <li><a href="#">Dropdown Menu level 2</a></li>
                                <li><a href="#">Dropdown Menu level 2</a></li>
                                <li><a href="#">Dropdown Menu Level 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown Lorem 5</a></li>
                    </ul>
                </li> --}}
                <li class="navBar" ><a href="{{route('aboutUs')}}">About Us</a></li>
                <li class="navBar" ><a href="#category_section">Category</a></li>
                <li  class=" "><a href="#contact_section" >Contact</a></li>
            </ul>
        </div><!-- /.Side-menu -->

        <h2>Visit Us</h2>
        <ul class="info">
            <li>Chhatarpur, Delhi, India</li>
            <li>Open : 09:00 AM - 09:00 PM</li>
            <li><a href="mailto:booking@domainname.com">booking@designyourrestaurant.com</a></li>
        </ul>
        <div class="separator"><span></span></div>
        <div class="booking-info">
            <div class="bk-title">Booking request</div>
            <div class="bk-no"><a href="tel:+918603526364">Booking Request : +91 860-352-6364 </a></div>
        </div>

    </div><!-- / Hidden Bar Wrapper -->
</section>
<!-- / Hidden Bar -->
