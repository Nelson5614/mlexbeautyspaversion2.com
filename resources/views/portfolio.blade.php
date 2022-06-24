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
                        <h2>Our Portfolio</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('portfolio') }}">Home</a></li>
                            <li class="active">Our Portfolio</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Portfolio -->
    <div class="portfolio pt-120 pb-90">
        <div class="container">
            <div class="row">
                <!-- Grid Item -->
                <div class="col-lg-3 col-6 grid-item">
                    <a href="assets/img/media/IMG-20220622-WA0017.jpg" class="gallery-link">
                        <img src="assets/img/media/IMG-20220622-WA0017.jpg" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->

                <!-- Grid Item -->
                <div class="col-lg-3 col-6 grid-item">
                    <a href="assets/img/media/IMG-20220622-WA0012.jpg" class="gallery-link">
                        <img src="assets/img/media/IMG-20220622-WA0012.jpg" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->

                <!-- Grid Item -->
                <div class="col-lg-6 grid-item">
                    <a href="assets/img/media/IMG-20220622-WA0045.jpg" class="gallery-link">
                        <img src="assets/img/media/IMG-20220622-WA0045.jpg" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <!-- Grid Item -->
                        <div class="col-6 grid-item">
                            <a href="assets/img/media/IMG-20220622-WA0028.jpg" class="gallery-link">
                                <img src="assets/img/media/IMG-20220622-WA0028.jpg" data-rjs="2" alt="">
                            </a>
                        </div>
                        <!-- End Grid Item -->
        
                        <!-- Grid Item -->
                        <div class="col-6 grid-item">
                            <a href="assets/img/media/IMG-20220622-WA0043.jpg" class="gallery-link">
                                <img src="assets/img/media/IMG-20220622-WA0043.jpg" data-rjs="2" alt="">
                            </a>
                        </div>
                        <!-- End Grid Item -->
        
                        <!-- Grid Item -->
                        <div class="col-lg-12 grid-item">
                            <a href="assets/img/media/IMG-20220622-WA0023.jpg" class="gallery-link">
                                <img src="assets/img/media/IMG-20220622-WA0023.jpg" data-rjs="2" alt="">
                            </a>
                        </div>
                        <!-- End Grid Item -->
                    </div>
                </div>

                <!-- Grid Item -->
                <div class="col-lg-6 grid-item">
                    <a href="assets/img/media/IMG-20220622-WA0029.jpg" class="gallery-link">
                        <img src="assets/img/media/IMG-20220622-WA0029.jpg" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->
            </div>
            <div class="row">
                <!-- Grid Item -->
                <div class="col-lg-3 col-6 grid-item">
                    <a href="assets/img/media/portfolio_08@2x.png" class="gallery-link">
                        <img src="assets/img/media/portfolio_08.png" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->

                <!-- Grid Item -->
                <div class="col-lg-3 col-6 grid-item">
                    <a href="assets/img/media/portfolio_09@2x.png" class="gallery-link">
                        <img src="assets/img/media/portfolio_09.png" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->

                <!-- Grid Item -->
                <div class="col-lg-6 grid-item">
                    <a href="assets/img/media/IMG-20220622-WA0017.jpg" class="gallery-link">
                        <img src="assets/img/media/portfolio_10.png" data-rjs="2" alt="">
                    </a>
                </div>
                <!-- End Grid Item -->
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

    <!-- Footer -->
    @include('components.footer')
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