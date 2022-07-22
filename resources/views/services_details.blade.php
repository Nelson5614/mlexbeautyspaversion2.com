<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Page Title -->
        <title>mlexbeautyspa</title>
    
        <!-- Meta Data -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="" />
    
        <!-- Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
        <!-- ======= FontAwesome ======= -->
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    
        <!-- ======= Bootstrap ======= -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
       
    
        <!-- ======= Bootstrap ======= -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}" />
    
        <!-- ======= Bootstrap ======= -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/magnific-popup/magnific-popup.css') }}" />
    
        <!-- ======= Main Stylesheet ======= -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    
        <!-- ======= Custom Stylesheet ======= -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
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
    <div class="page-title-wrap" style=" background-image: url('{{ asset('assets/img/bg/pexels-rodnae-productions-6724351.jpg') }}');') ">
        <div class="container"> 
            <div class="row"> 
                <div class="col-12">
                    <div class="page-title"> 
                        <h2>Service Details</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/massage-services') }}">Services</a></li>
                            <li class="active">Service Details</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Message Therapy -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Therapy Thumb -->
                    <div class="therapy-thumb mb-5 mb-lg-0">
                        <img src="{{ asset('storage/'.$service->image) }}"/>
                    </div>
                    <!-- End Therapy Thumb -->
                </div>
                <div class="col-lg-6">
                    <!-- Therapy Content -->
                    <div class="therapy-content">
                        <h2>{{ $service->title }}</h2>
                        <p>{{ $service->details }}</p>
                       
                        
                    </div>
                    <!-- End Therapy Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Message Therapy -->

    <!-- Message Therapy -->
    <section class="pt-120 pb-120 section-bg mt-xl-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Therapy Content -->
                    <div class="therapy-content mb-5 mb-lg-0">
                        <h2>How does {{ $service->title }} work?</h2>
                        <p>{{ $service->details }}</p>
                        
                    </div>
                    <!-- End Therapy Content -->
                </div>
                <div class="col-lg-6">
                    <!-- Therapy Thumb -->
                    <div class="therapy-thumb style--two">
                        <img src="{{ asset('assets/img/media/therapy2.png') }}" data-rjs="2" alt="">

                        <a href="https://www.youtube.com/watch?v=k3Zr4zBJ5ho" class="mfp-iframe video-btn">
                            <img src="{{ asset('assets/img/icon/play-icon.svg') }}" alt="" class="svg">
                        </a>
                    </div>
                    <!-- End Therapy Thumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Message Therapy -->

    <!-- Quote -->
    {{-- <div class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Quote Image -->
                    <div class="service-quote-img">
                        <img src="assets/img/media/service-quote1.png" data-rjs="2" alt="">
                    </div>
                    <!-- End Quote Image -->
                </div>
                <div class="col-md-4">
                    <!-- Quote Image -->
                    <div class="service-quote-img">
                        <img src="assets/img/media/service-quote2.png" data-rjs="2" alt="">
                    </div>
                    <!-- End Quote Image -->
                </div>
                <div class="col-12">
                    <!-- Therapy Content -->
                    <div class="therapy-content">
                        <p>We are beauty premier skincare spa. At beauty ritual skincare, we specialize in transformative skin-care lashes and brows. We are also the area’s only face reality is acne specialists. do a hydrofacial treatment using our Bio-Brasion machine.Itis one of the most effective forms skins exfoliation systems on the market. the Bio-Brasion machine is equipped with five diamond tips.</p>
                        <p>At Beauty beautain Skincare, we specialise in transformative skincare, lashes and brows. we are also the area’s only face reality acne specialists. come in and results experience life-changing results! microneedling pen on the market, the SkinPen. An innovation in aesthetic medicine.</p>

                        <ul class="therapy-list">
                            <li>* Come in and experience life-changing results!</li>
                            <li>* flawless makeup application.</li>
                            <li>* This deep pore cleansing facial clears</li>
                        </ul>
                    </div>
                    <!-- End Therapy Content -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Quote -->

    <!-- Call To Action -->
    <section class="pt-120 pb-120" data-bg-img="{{ asset('assets/img/bg/cta-bg.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <!-- CTA Content -->
                    <div class="cta-content text-center">
                        <h4>Visit Us Now</h4>
                        <h2>Get 20% Off</h2>
                        <p>You can shop brands only sold in the Aus, compare prices on your favourites products
                            read reviews before you try something new, all without leaving your home!</p>
                        <a href="{{ url('/shop') }}" class="btn">
                            <span>Shop Now</span>
                            <img src="{{ asset('assets/img/icon/btn-arrow.svg') }}" alt="" class="svg">
                        </a>
                    </div>
                    <!-- End CTA Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->

    <!-- Pricing -->
  @include('components.pricing')
    <!-- End Pricing -->

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