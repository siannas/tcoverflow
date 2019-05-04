<!doctype html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg no-smil svgclippaths" lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TC~OverFlow</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->        
        <link href="https://kantor.ppdbsda.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
        
        <!-- Google Fonts
        ============================================ -->        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
        
        <!-- All css files are included here
        ============================================ -->    
        <!-- Bootstrap CSS
        ============================================ -->
        <link href="https://ruangtraining.net/jobhere/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <!-- Nice select css
        ============================================ -->
        <link href="https://ruangtraining.net/jobhere/css/nice-select.css" rel="stylesheet">
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link href="https://ruangtraining.net/jobhere/css/core.css" rel="stylesheet">
        
        <!-- Theme shortcodes/elements style
        ============================================ -->  
        <link href="https://ruangtraining.net/jobhere/css/shortcode/shortcodes.css" rel="stylesheet">
        
        <!--  Theme main style
        ============================================ -->  
        <link href="https://ruangtraining.net/jobhere/style.css" rel="stylesheet">
        
        <!-- Color CSS
        ============================================ -->
        <link href="https://ruangtraining.net/jobhere/css/plugins/color.css" rel="stylesheet">
        
        <!-- Responsive CSS
        ============================================ -->
        <link href="https://ruangtraining.net/jobhere/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Modernizr JS -->
        <script src="https://ruangtraining.net/jobhere/js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
        @media only screen and (max-width: 600px) {
            .logo-img{
                width: 100% !important;
            }
        }
        #kontakfooter:hover {
            color: blue;
        }
        #kontakfooter{
            color: #fff;
        }
        #kontak:hover {
            color: blue;
        }
        #kontak{
            color: #4c4c4c;
        }
        </style>
    </head>  
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->  

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start--><header class="header-area sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo"><a href="https://ppdbsda.net/"><img class="logo-img" alt="JobHere" src="https://kantor.ppdbsda.net/img/favicon.ico" style="max-height: 50px; max-width: 50px;"></a></div>
            </div>
            <div class="col-lg-9 d-none d-lg-block">
                <div class="pull-right">
                    <nav id="primary-menu">
                        <ul class="main-menu text-right">
                            @if (Route::has('login'))
                                @auth
                                    <li><a class="&#10;text-success" href="{{ url('/home') }}">Home</a>
                                    </li>
                            @else
                                <li><a class="&#10;" href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a class="&#10;" href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                @if (Route::has('login'))
                                    @auth
                                        <li><a class="&#10;text-success" href="{{ url('/home') }}">Home</a>
                                        </li>
                                @else
                                    <li><a class="&#10;" href="{{ route('login') }}">Login</a></li>
                                    @if (Route::has('register'))
                                        <li><a class="&#10;" href="{{ route('register') }}">Register</a></li>
                                    @endif
                                    @endauth
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>                <!-- End of Header Area -->    <!--Start of Slider Area-->
<div class="slider-area">
    <div class="preview-2">
        <div id="nivoslider" class="slides">
            <img src="http://foto2.data.kemdikbud.go.id/getImage/20251923/18.jpg" alt="" title="#slider-1-caption1" />
            <img src="http://foto2.data.kemdikbud.go.id/getImage/20251923/18.jpg" alt="" title="#slider-1-caption2" />
        </div>
        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
            <div class="banner-content slider-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-center">
                                    <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="3s"
                                        data-wow-delay="0s">SELAMAT DATANG DI</h4>
                                    <h1 class="title1 wow bounceInRight text-white mb-16" data-wow-duration="3s"
                                        data-wow-delay="0s" style="font-weight: bold;">TC~OverFlow</h1>
                                    <h2 class="sub-title wow bounceInRight text-white hidden-xs" data-wow-duration="3s"
                                        data-wow-delay="1s" style="font-weight:bold;">Sak-sak e</h2>
                                    <!-- <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="3s"
                                        data-wow-delay="2s">
                                        <a class="button slider-btn" href="">Tentang Dual Track</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
            <div class="banner-content slider-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content slide-2 text-center">
                                    <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="3s"
                                        data-wow-delay="0s">SELAMAT DATANG DI</h4>
                                    <h1 class="title1 wow flipInX text-white mb-16" data-wow-duration="1s"
                                        data-wow-delay="0s" style="font-weight:bold;">TC~OverFlow</h1>
                                    <h2 class="sub-title wow lightSpeedIn text-white hidden-xs" data-wow-duration="1s"
                                        data-wow-delay=".2s" style="font-weight:bold;"></h2>
                                    <!-- <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="1s"
                                        data-wow-delay=".6s">
                                        <a class="button slider-btn" href="">Tentang Dual Track</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Slider Area-->
    <!-- Working Aera Start -->
<div class="woring-area pt-130 pb-100 pt-sm-60 pb-sm-30">
    <div class="container">
        <!-- Section Title Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center ">
                    <h2>Apa itu TC~OverFlow?</h2>
                    <!-- <p>Lakukan 4 langkah berikut.</p> -->
                </div>
            </div>
        </div>
        <!-- Section Title End -->
        <div class="row work-shap">
            <div class="col-md-3">
                <div class="work-item">
                    <div class="img-icon">
                        <img alt="" src="https://ruangtraining.net/jobhere/images/icons/wrk1.png">
                    </div>
                    <h5>Data Awal</h5>
                    <!-- <p>Semua proses pendaftaran dilakukan oleh pihak sekolah ada di <a href="https://admindt.net/">www.admindt.net</a></p> -->
                </div> 
            </div>
            <div class="col-md-2">
                <div class="work-item">
                    <div class="img-icon">
                        <img alt="" src="https://ruangtraining.net/jobhere/images/icons/wrk2.png">
                    </div>
                    <h5>Latihan dan Simulasi</h5>
                    <!-- <p>Segala tutorial untuk menunjang pembelajaran siswa ada di <a href="https://ruangtraining.net">www.ruangtraining.net</a></p> -->
                </div> 
            </div>
            <div class="col-md-2">
                <div class="work-item">
                    <div class="img-icon">
                        <img alt="" src="https://ruangtraining.net/jobhere/images/icons/wrk2.png">
                    </div>
                    <h5>Seleksi</h5>
                    <!-- <p>Proses sertifikasi melalui serangkaian ujian yang ada di <a href="https://ruangujian.net">www.ruangujian.net</a></p> -->
                </div> 
            </div>
            <div class="col-md-2">
                <div class="work-item">
                    <div class="img-icon">
                        <img alt="" src="https://ruangtraining.net/jobhere/images/icons/wrk2.png">
                    </div>
                    <h5>Verifikasi</h5>
                    <!-- <p>Proses sertifikasi melalui serangkaian ujian yang ada di <a href="https://ruangujian.net">www.ruangujian.net</a></p> -->
                </div> 
            </div>
            <div class="col-md-3">
                <div class="work-item">
                    <div class="img-icon">
                        <img alt="" src="https://ruangtraining.net/jobhere/images/icons/wrk3.png">
                    </div>
                    <h5>Pengumuman</h5>
                    <!-- <p>Peserta yang menyelesaikan proses akan terdata di <a href="https://ruangkarir.net">www.ruangkarir.net</a></p> -->
                </div> 
            </div>
        </div>                        
    </div>
</div>
<!-- Working Aera End -->
                <!--Start of Footer Widget-area-->    <footer class="footer-area">
    <div class="footer-widget-area ptb-80 pb-sm-30 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-5"></div>
                <div class="col-lg-4 col-md-5">
                    <div class="single-footer-widget">
                        <h3 class="text-white mb-26">Hubungi Kami</h3>
                            <span class="text-white mb-10"><a id="kontakfooter" href="https://api.whatsapp.com/send?phone=031-8921219"><i class="fa fa-phone"></i>031-8921219 </a></span>
                            <span class="text-white mb-10"><a id="kontakfooter" href="mailto:pendidikan@sidoarjokab.go.id" target="_blank"><i class="fa fa-envelope"></i>pendidikan@sidoarjokab.go.id</a></span>
                            <span class="text-white mb-10"><i class="fa fa-globe"></i>http://dispendik.sidoarjokab.go.id</span>
                            <span class="text-white mb-10"><i class="fa fa-map-marker"></i><p> Jl. Pahlawan No.4, Kec.Sidoarjo Kabupaten 
    Sidoarjo <br> Kab. Sidoarjo. Prov. Jawa Timur. 
    Indonesia. 61213</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Footer Widget-area-->
    <!-- Start of Footer area -->
    <div class="copyright-area text-center ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text">
                        <span class="text-white block">Copyright© <a href="httpS://ppdbsda.net/">TC~OverFlow 2019</a>. All right reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
                <!-- End of Footer area -->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area-->    
        <!--Start of Login Form-->
        <!--End of Login Form-->
        <!--Start of Login Form-->
        <!--End of Login Form-->
       
        
        <!-- jquery latest version
        ========================================================= -->
        <script src="https://ruangtraining.net/jobhere/js/vendor/jquery-1.12.4.min.js"></script>
        
        <!-- Bootstrap framework js
        ========================================================= -->          
        <script src="https://ruangtraining.net/jobhere/js/bootstrap.min.js"></script>
        <script src="https://ruangtraining.net/jobhere/js/popper.js"></script>
        
        <!-- Owl Carousel js
        ========================================================= -->       
        <script src="https://ruangtraining.net/jobhere/js/owl.carousel.min.js"></script>
            
        <!-- Jquery nice select js 
        ========================================================= -->   
        <script src="https://ruangtraining.net/jobhere/js/jquery.nice-select.min.js"></script>
        
        <!-- nivo slider js
        ========================================================= -->       
        <script src="https://ruangtraining.net/jobhere/lib/nivo-slider/js/jquery.nivo.slider.js"></script>
        <script src="https://ruangtraining.net/jobhere/lib/nivo-slider/home.js"></script>
        
        <!-- Js plugins included in this file
        ========================================================= -->   
        <script src="https://ruangtraining.net/jobhere/js/plugins.js"></script>
        
        <!-- Video Player JS
        ========================================================= -->           
        <script src="https://ruangtraining.net/jobhere/js/jquery.mb.YTPlayer.js"></script>
        
        <!-- AJax Mail JS
        ========================================================= -->           
        <script src="https://ruangtraining.net/jobhere/js/ajax-mail.js"></script>
        
        <!-- Mail Chimp JS
        ========================================================= -->           
        <script src="https://ruangtraining.net/jobhere/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Waypoint Js
        ========================================================= -->   
        <script src="https://ruangtraining.net/jobhere/js/waypoints.min.js"></script>
        
        <!-- Main js file contents all jQuery plugins activation
        ========================================================= -->       
        <script src="https://ruangtraining.net/jobhere/js/main.js"></script><a id="scrollUp" style="display: none; position: fixed; z-index: 2147483647;" href="#top"><i class="fa fa-angle-up"></i></a>
</body></html>