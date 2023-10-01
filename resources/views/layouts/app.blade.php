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
    <script type="text/javascript">
        ! function() {
            "use strict";
            ! function(e, t) {
                var n = e.amplitude || {
                    _q: [],
                    _iq: {}
                };
                if (n.invoked) e.console && console.error && console.error("Amplitude snippet has been loaded.");
                else {
                    var r = function(e, t) {
                            e.prototype[t] = function() {
                                return this._q.push({
                                    name: t,
                                    args: Array.prototype.slice.call(arguments, 0)
                                }), this
                            }
                        },
                        s = function(e, t, n) {
                            return function(r) {
                                e._q.push({
                                    name: t,
                                    args: Array.prototype.slice.call(n, 0),
                                    resolve: r
                                })
                            }
                        },
                        o = function(e, t, n) {
                            e[t] = function() {
                                if (n) return {
                                    promise: new Promise(s(e, t, Array.prototype.slice.call(arguments)))
                                }
                            }
                        },
                        i = function(e) {
                            for (var t = 0; t < m.length; t++) o(e, m[t], !1);
                            for (var n = 0; n < g.length; n++) o(e, g[n], !0)
                        };
                    n.invoked = !0;
                    var u = t.createElement("script");
                    u.type = "text/javascript", u.integrity =
                        "sha384-x0ik2D45ZDEEEpYpEuDpmj05fY91P7EOZkgdKmq4dKL/ZAVcufJ+nULFtGn0HIZE", u.crossOrigin =
                        "anonymous", u.async = !0, u.src =
                        "https://cdn.amplitude.com/libs/analytics-browser-2.0.0-min.js.gz", u.onload = function() {
                            e.amplitude.runQueuedFunctions || console.log("[Amplitude] Error: could not load SDK")
                        };
                    var a = t.getElementsByTagName("script")[0];
                    a.parentNode.insertBefore(u, a);
                    for (var c = function() {
                            return this._q = [], this
                        }, p = ["add", "append", "clearAll", "prepend", "set", "setOnce", "unset", "preInsert",
                            "postInsert", "remove", "getUserProperties"
                        ], l = 0; l < p.length; l++) r(c, p[l]);
                    n.Identify = c;
                    for (var d = function() {
                            return this._q = [], this
                        }, f = ["getEventProperties", "setProductId", "setQuantity", "setPrice", "setRevenue",
                            "setRevenueType", "setEventProperties"
                        ], v = 0; v < f.length; v++) r(d, f[v]);
                    n.Revenue = d;
                    var m = ["getDeviceId", "setDeviceId", "getSessionId", "setSessionId", "getUserId", "setUserId",
                            "setOptOut", "setTransport", "reset", "extendSession"
                        ],
                        g = ["init", "add", "remove", "track", "logEvent", "identify", "groupIdentify", "setGroup",
                            "revenue", "flush"
                        ];
                    i(n), n.createInstance = function(e) {
                        return n._iq[e] = {
                            _q: []
                        }, i(n._iq[e]), n._iq[e]
                    }, e.amplitude = n
                }
            }(window, document)
        }();

        amplitude.init('25d55fbcce66c27379603952442d53c6');
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
