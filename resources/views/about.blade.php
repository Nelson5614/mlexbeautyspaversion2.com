<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>MLexbeautyspa</title>

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
                        <h2>About us</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
 <!-- About -->
 <section class="pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Image -->
                <div class="about-img">
                    <img src="assets/img/media/about.png" data-rjs="2" alt="">
                </div>
                <!-- End About Image -->
            </div>
            <div class="col-lg-6">
                <!-- About Content -->
                <div class="about-content">
                    <!-- Section Title -->
                    <div class="section-title style--two mb-0">
                        <span class="subtitle">About beauty spa</span>
                        <h2>2+ Years Work <br /> Experiences</h2>
                        <p>Mlex Beauty Spa started as an ambitious idea to promoting the good health and building the body shape, retaining self confidence and reclaiming your youth. As the business flourish our efforts has been successfully supported by the same community we love, and it has been a wonderful journey as we strive to provide the highest level of service to our supporters</p>

                        <div class="meta-wrap">
                            <div class="meta-info">
                                <h3>Mlex Mpasi</h3>
                                <p>CEO Of Mlexbeautyspa</p>
                            </div>
                            <div class="sign">
                                <img src="assets/img/icon/signature.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End Section Title -->
                </div>
                <!-- End About Content -->
            </div>
        </div>
    </div>
</section>
<!-- End About -->

  <!-- More About -->
  <section class="pt-120 pb-70 section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!-- Section Title -->
                <div class="section-title">
                    <span class="subtitle">About Us</span>
                    <h2>Why Choose Us?</h2>
                    <p>Becuase we always strive to be the best in everything we do <br> and the satisfactory of our customers come first</p>
                </div>
                <!-- End Section Title -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <!-- More About -->
                <div class="more-about">
                    <div class="thumb">
                        <img src="assets/img/post/post1.png" data-rjs="2" alt="">
                    </div>
                    <div class="content">
                        <h3 class="post-title">Our Mission</h3>
                        <p>With pilates you train the core muscles around your spine. The focus of pilates is solely on you and we will make sure that you are.</p>
                    </div>
                </div>
                <!-- End More About -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- More About -->
                <div class="more-about">
                    <div class="thumb">
                        <img src="assets/img/post/post2.png" data-rjs="2" alt="">
                    </div>
                    <div class="content">
                        <h3 class="post-title">Our Philosophy</h3>
                        <p>With pilates you train the core muscles around your spine. The focus of pilates is solely on you and we will make sure that you are.</p>
                    </div>
                </div>
                <!-- End More About -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- More About -->
                <div class="more-about">
                    <div class="thumb">
                        <img src="assets/img/post/post3.png" data-rjs="2" alt="">
                    </div>
                    <div class="content">
                        <h3>Our Vision</h3>
                        <p>With pilates you train the core muscles around your spine. The focus of pilates is solely on you and we will make sure that you are.</p>
                    </div>
                </div>
                <!-- End More About -->
            </div>
        </div>
    </div>
</section>
<!-- End More About -->
 <br> <br> <br>
 @include('components.pricing')
   
@include('components.specialists')
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