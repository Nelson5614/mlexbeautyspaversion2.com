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
                        <h2>Massage Service</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Massage Service</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Service -->
    <section class="service pt-120 pb-90" data-bg-img="assets/img/bg/service-bg.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle"> Service</span>
                        <h2>Quality Service</h2>
                        <p>We offer wide variety of massage services that you can choose from.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-md-4 text-lg-end">
                    <a href="{{ url('appointment') }}" class="btn mb-60 res-mt">
                        <span>Appointment</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row">
             
                @foreach ($services as $service )
                    
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Service -->
                    <div class="single-service service-box active">
                        <div class="icon">
                            <img src="{{ asset('storage/'.$service->icon) }}" data-rjs="2" alt="">
                        </div>
                        <div class="content">
                            <a href="{{ route('showservice', $service->slug) }}"><h3>{{ $service->title }}</h3></a>
                            <p>{{ $service->shotdec }}</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
                @endforeach
               
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Video -->
    <section class="video-section pb-120 pt-120" data-bg-img="assets/img/bg/video-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Content -->
                    <div class="video-content text-center">
                        <h4>Your beauty is our profession</h4>
                        <h2>Skin Care</h2>
                        <a href="https://www.youtube.com/watch?v=k3Zr4zBJ5ho" class="mfp-iframe video-btn">
                            <img src="assets/img/icon/play-icon.svg" alt="" class="svg">
                        </a>
                    </div>
                    <!-- End Video Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Video -->
    <br> <br> <br>
    <!-- Pricing -->
    @include('components.pricing')
    <!-- End Pricing -->

    <!-- Fucfact -->
    @include('components.fucfact')
    <!-- End Fucfact -->
    
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
                    <!-- Contact Form Wrapper -->
                    <div class="appointment-form-wrap" data-bg-img="assets/img/bg/contact-form-bg.png">
                        <h3>Book Your Appointment</h3>
                        <form action="sendmail.php" class="appointment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="beautain-select">
                                        <div class="input-group style--two">
                                            <select name="aa_service" id="appointment-treatment" class="form-control">
                                                <option value="Swedish Massage">Swedish Massage</option>
                                                <option value="Cupping Massage">Cupping Massage</option>
                                                <option value="Reflexiology Massage">Reflexiology Massage</option>
                                                <option value="Deep Tissue">Deep Tissue</option>
                                                <option value="Aromatherapy Massage">Aromatherapy Massage</option>
                                                <option value="Sports Massage">Sports Massage</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="beautain-select">
                                        <div class="input-group style--two">
                                            <select name="aa_visited" id="visited" class="form-control">
                                                <option value="">Have You Visited Us Before*</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="aa_date" class="form-control" placeholder="Appointment Date*" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="aa_name" class="form-control" placeholder="Your Name*" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="aa_email" class="form-control" placeholder="Email Address*" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="aa_number" class="form-control" placeholder="Phone Number*" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control" name="aa_message" placeholder="Your Messages" required></textarea>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <button type="submit" class="btn">
                                            <span>Send Now</span>
                                            <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                        </button>
                                        <div class="form-response"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form Wrapper -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

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