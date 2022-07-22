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
    {{-- <div class="preloader">              
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
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
                        <h2>Appointment</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Appointment</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('message') }}

            </div>
        @endif
    <!-- Contact -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                  <!-- Quick Contact -->
                  <div class="quick-contact" data-bg-img="assets/img/bg/quick-contact-bg.png">
                    <h3>Quick Contact</h3>
                    <p>We are the number beauty spa in town.</p>

                    <ul class="quick-contact-list pt-2">
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:02094857568">(+266) 56 230 279 / 63 209 170</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@beautain.com">mlex@mlexbeautyspa.co.ls</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            Police Europa <br />Maseru 100.
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            Mon - Fri: 6 am to 7 pm
                            <span>Sat - Sun: 9am - 3pm</span>
                        </li>
                    </ul>

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
                        
                    </div>
                    <!-- End Socials -->
                </div>
                <!-- End Quick Contact -->
                </div>
                <div class="col-lg-8">
                    @include('components.appointment')
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Call To Action -->
    <section class="pt-120 pb-120" data-bg-img="assets/img/bg/cta-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <!-- CTA Content -->
                    <div class="cta-content text-center">
                        <h4>For Your First Visit</h4>
                        <h2>Get 20% Off</h2>
                        <p>You can shop brands only sold in the Aus, compare prices on your favourites products
                            read reviews before you try something new, all without leaving your home!</p>
                        <a href="{{ url('shop') }}" class="btn">
                            <span>Shop Now</span>
                            <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                        </a>
                    </div>
                    <!-- End CTA Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->


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