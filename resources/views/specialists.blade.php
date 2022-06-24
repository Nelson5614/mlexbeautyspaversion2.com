<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>Mlexbeautyspa</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

    <!-- Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- ======= FontAwesome ======= -->
    <link rel="stylesheet" href="assets/css/all.min.css" />

    <!-- ======= Bootstrap ======= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- ======= Bootstrap ======= -->
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css" />

    <!-- ======= Bootstrap ======= -->
    <link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.css" />

    <!-- ======= Main Stylesheet ======= -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- ======= Custom Stylesheet ======= -->
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">              
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    @include('components.header')
    <!-- End Header -->

    <!-- Breadcrumb -->
    <div class="page-title-wrap" data-bg-img="assets/img/bg/pexels-rodnae-productions-6724351.jpg">
        <div class="container"> 
            <div class="row"> 
                <div class="col-12">
                    <div class="page-title"> 
                        <h2>Our Specialist</h2> 
                        <ul class="nav"> 
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Our Specialist</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Specialist -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Specialist -->
                    <div class="single-specialist">
                        <img src="assets/img/media/founder.jpg" data-rjs="2" alt="">

                        <div class="content">
                            <h3>Mlex Mpasi</h3>
                            <p>Spa CEO</p>
                        </div>
                    </div>
                    <!-- End Single Specialist -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Specialist -->
                    <div class="single-specialist active">
                        <img src="assets/img/media/IMG-20220217-WA0024.jpg" data-rjs="2" alt="">

                        <div class="content">
                            <h3>Deekay Lephema </h3>
                            <p>Beauty Specialist </p>
                        </div>
                    </div>
                    <!-- End Single Specialist -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Specialist -->
                    <div class="single-specialist">
                        <img src="assets/img/media/IMG-20220217-WA0022.jpg" data-rjs="2" alt="">

                        <div class="content">
                            <h3>Tshepy Lerama</h3>
                            <p>Beauty specialist</p>
                        </div>
                    </div>
                    <!-- End Single Specialist -->
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Specialist -->

    <!-- Fucfact -->
    @include('components.fucfact')
    <!-- End Fucfact -->


    <!-- Footer -->
    <footer class="footer" data-bg-img="assets/img/bg/footer-bg.png"> 
        <!-- Footer Main -->
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Widget About -->
                        <div class="widget widget_about">
                            <h3 class="widget-title">About Beautain</h3>
                            <div class="menu-container">
                                <p>I have been a beauty beautain from march beautain.</p>

                                <!-- Socials -->
                                <div class="socials">
                                    <a href="https://www.facebook.com">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.instagram.com">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.pinterest.com">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </div>
                                <!-- End Socials -->
                            </div>
                        </div>
                        <!-- End Widget About -->
                    </div>

                    <div class="col-lg-2 col-sm-3">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">Products</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="appointment.html">Appointment</a></li>
                                    <li><a href="contact.html">Request us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>

                    <div class="col-lg-2 col-sm-3">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">About us</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="about.html">Beautain</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="service.html">Our Services</a></li>
                                    <li><a href="contact.html">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>

                    <div class="col-lg-2 col-sm-4 order-1 order-lg-0">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">Resources</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="contact.html">Help center</a></li>
                                    <li><a href="appointment.html">Book a demo</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- Widget Nav Menu -->
                        <div class="widget widget_contact_info">
                            <h3 class="widget-title">Get in Touch</h3>
                            <div class="menu-container">
                                <p>I have been a beauty beautain from march beautain have.</p>
                                <ul class="contact-list">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        85 Royal Street, Sydney <br />SD, Australia.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Nav Menu -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Main -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="footer-bottom-content justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <div class="footer-logo">
                                <img src="assets/img/footer-logo.svg" class="svg" alt="">
                            </div>
                            <div class="copyright-text">
                                Copyright © 2021. All right reserved.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="accept-cards text-center text-lg-end">
                            <img src="assets/img/media/cards.png" data-rjs="2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    

    <!-- ======= jQuery Library ======= -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- ======= Bootstrap Js ======= -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- ======= Bootstrap Js ======= -->
    <script src="assets/js/menu.min.js"></script>

    <!-- ======= Owlcarousel Js ======= -->
    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- ======= Magnific Popup Js ======= -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- ======= Ratina Js ======= -->
    <script src="assets/plugins/retinajs/retina.min.js"></script>

    <!-- ======= Waypoints Js ======= -->
    <script src="assets/plugins/counterup/waypoints.min.js"></script>

    <!-- ======= Counter Up Js ======= -->
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- ======= Countdown Timer Js ======= -->
    <script src="assets/plugins/countdown-timer/countdown.min.js"></script>

    <!-- ======= Isotope Js ======= -->
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- ======= Packery Js ======= -->
   <script src="assets/plugins/isotope/packery-mode.pkgd.min.js"></script>

   <!-- ======= Elevate Zoom Js ======= -->
   <script src="assets/plugins/elevatezoom/jquery.elevateZoom-3.0.8.min.js"></script>

   <!-- ======= Google API ======= -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>

    <!-- ======= Main JS ======= -->
    <script src="assets/js/main.js"></script>

    <!-- ======= Custom JS ======= -->
    <script src="assets/js/custom.js"></script>
</body>

</html>