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
    <link rel="shortcut icon" href="logo.png" />

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

@include('components.header')

    <!-- Banner -->
    <div class="banner">
        <div class="banner-slider owl-carousel">
            <div class="banner-single-slide" data-bg-img="assets/img/bg/banner-bg.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <!-- Banner Content -->
                            <div class="banner-content">
                                <h4>Your magic begins here!</h4>
                                <h1>Welcome to <br /> Mlexbeautyspa</h1>
                                <p>Thank you for stoping by, you are about to explore more about us and <br> get to know more about what we do.</p>
                                
                                <a href="{{ url('appointment') }}" class="btn">
                                    <span>Appointment</span>
                                    <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                </a>
                            </div>
                            <!-- End Banner Content -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-single-slide" data-bg-img="assets/img/bg/banner-bg2.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <!-- Banner Content -->
                            <div class="banner-content">
                                <h4>Your magic begins here!</h4>
                                <h1>Relax Renew <br> Refresh</h1>
                                <p>After owning two successful beauty locations they decided to <br /> their passion to the small town of documentary to convince <br /> audience to buy into any one.</p>
                                
                                <a href="appointment.html" class="btn">
                                    <span>Appointment</span>
                                    <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                </a>
                            </div>
                            <!-- End Banner Content -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-single-slide" data-bg-img="assets/img/bg/banner-bg3.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <!-- Banner Content -->
                            <div class="banner-content">
                                <h4>Or magic begins here!</h4>
                                <h1>Some Shine in <br /> Your Life.</h1>
                                <p>After owning two successful beauty locations they decided to <br /> their passion to the small town of documentary to convince <br /> audience to buy into any one.</p>
                                
                                <a href="appointment.html" class="btn">
                                    <span>Appointment</span>
                                    <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                </a>
                            </div>
                            <!-- End Banner Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

   @include('components.about')

    <!-- Service -->
    <section class="service pt-120 pb-90" data-bg-img="assets/img/bg/service-bg.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle">Service</span>
                        <h2>Quality Service</h2>
                        <p>Below is a few list of the services we offer, browse to the services <br> page for more details we are the best in town</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-md-4 text-lg-end">
                    <a href="service.html" class="btn mb-60 res-mt">
                        <span>all Services</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Service -->
                    <div class="single-service service-box">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon1.svg" alt="" class="svg">
                        </div>
                        <div class="content">
                            <a href="service-details.html"><h3>Massage Care</h3></a>
                            <p>sports massage, swedish, deep tissue, this are only few of the many massages services that we offer.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Service -->
                    <div class="single-service service-box active">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon2.svg" alt="" class="svg">
                        </div>
                        <div class="content">
                            <a href="service-details.html"><h3>Hot Waxing</h3></a>
                            <p>We also provide hot waxing and many other body services you will love.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Service -->
                    <div class="single-service service-box">
                        <div class="icon">
                            <img src="assets/img/icon/service-icon3.svg" alt="" class="svg">
                        </div>
                        <div class="content">
                            <a href="service-details.html"><h3>Body Treatment</h3></a>
                            <p>Foot detox, verginal tightning, tummy reduction ect are the body services that we offer.</p>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
               
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Shop Category -->
    <section class="shop-category pb-120">
        <!-- Shop Category Carousel -->
        <div class="shop-category-carousel owl-carousel bt-carousel" data-owl-autoplay="true" data-owl-items="3" data-owl-margin="30" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "540": {"items": "2"}, "992": {"items": "3"}}'>
            <!-- Shop Category Single Slide -->

            @foreach ($products as $product )

            <div class="shop-category-single">
                <img src="{{ asset('assets/img/media/'.$product->slug.'.jpg') }}" data-rjs="2" alt="">

                <div class="content">
                    <h2>{{ $product->name }}</h2>
                    <a href="{{ url('shop') }}" class="btn btn-white">
                        <span>View products</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
                
            @endforeach
        
            

         
        </div>
        <!-- End Shop Category Carousel -->
    </section>
    <!-- End Shop Category -->

  @include('components.pricing')

    <!-- Video -->
    <section class="video-section pb-120 pt-120" data-bg-img="assets/img/bg/video-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Content -->
                    <div class="video-content text-center">
                        <h4>Your beauty is our profession</h4>
                        <h2>Body Care</h2>
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

   @include('components.specialists')

    <!-- Testimonial -->
    <section class="testimonial pt-120 pb-120" data-bg-img="assets/img/bg/testimonial-bg.png">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle">Clients</span>
                        <h2>Clients Say</h2>
                        <p>See what our clients say about our service.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-xl-9 col-lg-8">
                    <!-- Testimonial Carousel -->
                    <div class="testimonial-carousel owl-carousel bt-carousel" data-owl-margin="30" data-owl-nav="true" data-owl-autoplay="false" data-owl-responsive='{"0": {"autoWidth": false, "items": 1}, "420": {"autoWidth": true}}'>
                        <!-- Single Testimonial Carousel -->
                        <div class="single-testimonial-carousel">
                            <div class="avatar">
                                <img src="assets/img/media/testimonial1.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Before you get ready for starting your own beauty salon, it most important to prepare yourself in terms of business.</h4>

                                <div class="meta-info">
                                    <h3>Natalie Portman</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Carousel -->

                        <!-- Single Testimonial Carousel -->
                        <div class="single-testimonial-carousel">
                            <div class="avatar">
                                <img src="assets/img/media/testimonial2.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Beautician and have guts to care the beauty better then its a very good business opportunity to earn handsome profits.</h4>

                                <div class="meta-info">
                                    <h3>Kat Dennings</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Carousel -->

                        <!-- Single Testimonial Carousel -->
                        <div class="single-testimonial-carousel">
                            <div class="avatar">
                                <img src="assets/img/media/testimonial3.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Create a business plan and stick to it for Better Growth.You should have the skills, the time business and then make</h4>

                                <div class="meta-info">
                                    <h3>Joshua Rene</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Carousel -->
                        
                        <!-- Single Testimonial Carousel -->
                        <div class="single-testimonial-carousel">
                            <div class="avatar">
                                <img src="assets/img/media/testimonial2.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Beautician and have guts to care the beauty better then its a very good business opportunity to earn handsome profits.</h4>

                                <div class="meta-info">
                                    <h3>Kat Dennings</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Carousel -->
                    </div>
                    <!-- End Testimonial Carousel -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->

    <!-- Product -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle">Products</span>
                        <h2>Popular Product</h2>
                        <p>Here is a list of our most popular products</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-md-4 text-lg-end">
                    <a href="{{ url('shop') }}" class="btn mb-60 res-mt">
                        <span>See all Products</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product )
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Product -->                    
                        <div class="single-product">
                                <div class="product-top">
                                    <a href="{{ url('product-details') }}" class="product-thumbnail">
                                        <img src="{{ asset('assets/img/media/'.$product->slug.'.jpg') }}" data-rjs="2" alt="">
                                    </a>

                                    <div class="buttons">
                                        <a href="#" class="btn-circle">
                                            <img src="assets/img/icon/love.svg" alt="" class="svg">
                                        </a>
                                        <a href="#" class="btn-circle">
                                            <img src="assets/img/icon/compare.svg" alt="" class="svg">
                                        </a>
                                        <a href="#" class="btn-circle">
                                            <img src="assets/img/icon/cart.svg" alt="" class="svg">
                                        </a>
                                    </div>
                                </div>

                                <div class="product-summary">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    
                                    <a href="{{ url('product-details') }}"><h4>{{ $product->name }}</h4></a>

                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">LSL</span>
                                            {{ $product->price }}.00
                                        </span>
                                    </span>
                                </div>
                            </div>
                        
                        
                        <!-- End Single Product -->
                    </div>
                    @endforeach
                
            </div>
        </div>
    </section>
    <!-- End Product -->

    @include('components.newsletter')

    <!-- Blog -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle">News</span>
                        <h2>Updating News</h2>
                        <p>Here are some exciting news from Mlexbeautyspa, you can also visit our facebook page for more.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-md-4 text-lg-end">
                    <a href="blog.html" class="btn mb-60 res-mt">
                        <span>See all news</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single post -->
                    <div class="single-post">
                        <div class="post-thumb-wrap">
                            <a href="blog-details.html" class="post-thumbnail">
                                <img src="assets/img/post/post1.png" data-rjs="2" alt="">
                            </a>
                            <div class="posted-on"><a href="#" class="posted"><span class="day">24</span> Feb</a></div>
                        </div>
                        <div class="post-content">
                            <a href="blog-details.html"><h3 class="post-title">How to Using Hot Stone?</h3></a>
                            <div class="post-summary">
                                <p>Owning two successful salon locations  electronic typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single post -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single post -->
                    <div class="single-post">
                        <div class="post-thumb-wrap">
                            <a href="blog-details.html" class="post-thumbnail">
                                <img src="assets/img/post/post2.png" data-rjs="2" alt="">
                            </a>
                            <div class="posted-on"><a href="#" class="posted"><span class="day">24</span> Feb</a></div>
                        </div>
                        <div class="post-content">
                            <a href="blog-details.html"><h3 class="post-title">2021 Face Mask Style</h3></a>
                            <div class="post-summary">
                                <p>Owning two successful salon locations  electronic typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single post -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single post -->
                    <div class="single-post">
                        <div class="post-thumb-wrap">
                            <a href="blog-details.html" class="post-thumbnail">
                                <img src="assets/img/post/post3.png" data-rjs="2" alt="">
                            </a>
                            <div class="posted-on"><a href="#" class="posted"><span class="day">24</span> Feb</a></div>
                        </div>
                        <div class="post-content">
                            <a href="blog-details.html"><h3 class="post-title">Massage Queen Arts</h3></a>
                            <div class="post-summary">
                                <p>Owning two successful salon locations  electronic typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single post -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

    @include('components.footer')

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