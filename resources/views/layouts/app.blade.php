<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5RXND6JPC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T5RXND6JPC');
    </script>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JVZD3Q43G9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JVZD3Q43G9');
</script>

    @include('meta::manager', [
        'title' => 'DYR | Design Your Restaurant',
        'description' =>
            'It reminds us that design is not merely about aesthetics but about creating meaningful and purposeful experiences that touch the lives of people. It highlights the importance of thoughtfulness, intentionality, and creativity in the design process to craft stories that resonate and leave a lasting impact.',
        'image' => asset('images/logo.png'),
        'keywords' => 'design, restaurant, restaurants, bar, bars, cafe, cafes, pub, club, clubs, creativity, exterior, interior, private dining, dining, lounge, open kitchen, terrace garden, bistros, fine dining , causal dining , booking, dyr , design your restaurant '
    ])
    <meta charset="utf-8">
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    @livewireStyles()
    <script src="js/jquery.js"></script>

</head>

<body>


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                {{-- <div class="preloader-close">x</div> --}}
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <img class="loaderLogo" src="{{ asset('images/logo.png') }}" alt=""
                            title="Delici - Restaurants HTML Template">
                        <div class="spinner"></div>
                        {{-- <div class="txt-loading">
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                            <span data-text-preloader="Y" class="letters-loading">
                                Y
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <br>
                            <span class="name_dyr">Design Your Restaurant</span>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.header')
        <!-- Preloader End -->

        @yield('content')

        @include('layouts.footer')
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>



    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/custom-script.js"></script>
    @livewireScripts()


</body>

</html>
