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

    <!-- Header -->
    @include('components.header')
    <!-- End Header -->

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
                        <div class="section-title style--two">
                            <span class="subtitle">About mlex beauty spa</span>
                            <h2>2+ Years Work <br /> Experiences</h2>
                            <p>Mlex Beauty Spa started as an ambitious idea to promoting the good health and building the body shape, retaining self confidence and reclaiming your youth. As the business flourish our efforts has been successfully supported by the same community we love, and it has been a wonderful journey as we strive to provide the highest level of service to our supporters</p>
                        </div>
                        <!-- End Section Title -->

                        <a href="about.html" class="btn">
                            <span>Learn More</span>
                            <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                        </a>
                    </div>
                    <!-- End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

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
            <div class="shop-category-single">
                <img src="assets/img/media/flat-tummy-solution_800x500.jpg" data-rjs="2" alt="">

                <div class="content">
                    <h2>Flat-tummy-solutions</h2>
                    <a href="shop.html" class="btn btn-white">
                        <span>View products</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <!-- End Shop Category Single Slide -->

            <!-- Shop Category Single Slide -->
            <div class="shop-category-single">
                <img src="assets/img/media/mpesu_800x500.jpg" data-rjs="2" alt="">

                <div class="content">
                    <h2>Mpesu Lebido booster</h2>
                    <a href="shop.html" class="btn btn-white">
                        <span>View products</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <!-- End Shop Category Single Slide -->

            <!-- Shop Category Single Slide -->
            <div class="shop-category-single">
                <img src="assets/img/media/guava-leaves_800x500.jpg" data-rjs="2" alt="">

                <div class="content">
                    <h2>Guava-leaves</h2>
                    <a href="shop.html" class="btn btn-white">
                        <span>View products</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <!-- End Shop Category Single Slide -->
        </div>
        <!-- End Shop Category Carousel -->
    </section>
    <!-- End Shop Category -->

    <!-- Pricing -->
    <section class="pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle">Pricing</span>
                        <h2>Pricing Plan</h2>
                        <p>Check out our prices on some of our popular products.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-md-4 text-lg-end">
                    <a href="pricing.html" class="btn mb-60 res-mt">
                        <span>See all plan</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Price -->
                    <div class="single-price">
                        <div class="price-head">
                            <h3>Massage Therapy</h3>
                            <h4>Starting From $25</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>Sports massage[1hr] ………. LSL350</li>
                                <li>Swedish Massage[1hr] ………. LSL350</li>
                                <li>Cupping Massages[1hr] ………. LSL400</li>
                                <li>Aromatherapy message[1hr] ………. LSL350</li>
                                <li>Reflexiology Massage ………. LSL150</li>
                            </ul>
                            <a href="appointment.html" class="btn">
                                <span>Appointment</span>
                                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                            </a>
                        </div>
                    </div>
                    <!-- End Single Price -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Price -->
                    <div class="single-price active">
                        <div class="price-head">
                            <h3>Waxing Therapy</h3>
                            <h4>Starting From $25</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>Eyebrows Waxing ………. $25</li>
                                <li>Back Waxing ………. $35</li>
                                <li>Leg Waxing ………. $50</li>
                                <li>Custom Waxing ………. $60</li>
                                <li>Full Waxing ………. $65</li>
                            </ul>
                            <a href="appointment.html" class="btn">
                                <span>Appointment</span>
                                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                            </a>
                        </div>
                    </div>
                    <!-- End Single Price -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Price -->
                    <div class="single-price">
                        <div class="price-head">
                            <h3>Body Services</h3>
                            <h4>Starting From $25</h4>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li>Foot Detox[30min] ………. LSL150</li>
                                <li>Butt Enlargement ………. LSL400</li>
                                <li>Tummy Reduction ………. LSL1000</li>
                                <li>Chubaba Removal  ………. LSL2000</li>
                                <li>Virginal Tightening ………. LSL100</li>
                                <li>Breast Firming ………. LSL100</li>
                            </ul>
                            <a href="appointment.html" class="btn">
                                <span>Appointment</span>
                                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                            </a>
                        </div>
                    </div>
                    <!-- End Single Price -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

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

    <!-- Specialist -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <!-- Section Title -->
                    <div class="section-title">
                        <span class="subtitle">Specialist</span>
                        <h2>Our Specialist</h2>
                        <p>Click the button on the right and know our beloved team of specialists.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-md-4 text-lg-end">
                    <a href="specialist.html" class="btn mb-60 res-mt">
                        <span>See all Specialist</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Specialist -->
                    <div class="single-specialist">
                        <img src="assets/img/media/specialists1.png" data-rjs="2" alt="">

                        <div class="content">
                            <h3>Maria Peterson</h3>
                            <p>Pilates instructor</p>
                        </div>
                    </div>
                    <!-- End Single Specialist -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Specialist -->
                    <div class="single-specialist active">
                        <img src="assets/img/media/specialists2.png" data-rjs="2" alt="">

                        <div class="content">
                            <h3>Undrea Nancy</h3>
                            <p>Specialist Beautician </p>
                        </div>
                    </div>
                    <!-- End Single Specialist -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Specialist -->
                    <div class="single-specialist">
                        <img src="assets/img/media/specialists3.png" data-rjs="2" alt="">

                        <div class="content">
                            <h3>Yvette Goodman</h3>
                            <p>Yoga Therapist</p>
                        </div>
                    </div>
                    <!-- End Single Specialist -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Specialist -->

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
                    <a href="shop.html" class="btn mb-60 res-mt">
                        <span>See all Products</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Product -->
                    <div class="single-product">
                        <div class="product-top">
                            <a href="shop-details.html" class="product-thumbnail">
                                <img src="assets/img/media/flat-tummy-solution_800x500.jpg" data-rjs="2" alt="">
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
                            
                            <a href="shop-details.html"><h4>Flat-tummy-solutions</h4></a>

                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">LSL</span>
                                    100.00
                                </span>
                            </span>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Product -->
                    <div class="single-product">
                        <div class="product-top">
                            <a href="shop-details.html" class="product-thumbnail">
                                <img src="assets/img/media/guava-leaves_800x500.jpg" data-rjs="2" alt="">
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
                            <a href="shop-details.html"><h4>Guava-leaves</h4></a>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">LSL</span>
                                    50.00
                                </span>
                            </span>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Product -->
                    <div class="single-product">
                        <div class="product-top">
                            <a href="shop-details.html" class="product-thumbnail">
                                <img src="assets/img/media/mpesu_800x500.jpg" data-rjs="2" alt="">
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
                            <a href="shop-details.html"><h4>Mpesu Lebido Booster </h4></a>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">LSL</span>
                                    50
                                </span>
                            </span>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Product -->
                    <div class="single-product">
                        <div class="product-top">
                            <a href="shop-details.html" class="product-thumbnail">
                                <img src="assets/img/media/mpesu_800x500.jpg" data-rjs="2" alt="">
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
                            <a href="shop-details.html"><h4>Yoni Steaming Herbs </h4></a>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">LSL</span>
                                    50
                                </span>
                            </span>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Product -->

    <!-- Newsletter -->
    <section class="newsletter pt-120 pb-120" data-bg-img="assets/img/bg/newsletter-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Newsletter Content -->
                    <div class="newsletter-content text-center">
                        <h2>Newsletter</h2>
                        <p>Please leave us your email address so we can update you on specials and promotions</p>

                        <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" class="newsletter-form">
                            <div class="theme-input-group">
                                <input class="form-control" type="email" placeholder="Enter your email here"> <button type="submit" class="submit-btn btn"><span>Submit now</span></button>
                            </div>
                        </form>
                    </div>
                    <!-- End Newsletter Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter -->

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

    <!-- Footer -->
    <footer class="footer" data-bg-img="assets/img/bg/footer-bg.png"> 
        <!-- Footer Main -->
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Widget About -->
                        <div class="widget widget_about">
                            <h3 class="widget-title">About Mlexbeautyspa</h3>
                            <div class="menu-container">
                                <p>Thank you for stoping by, you are about to explore more about us and get to know more about what we do.</p>

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
                                    <li><a href="about.html">Mlexbeautyspa</a></li>
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
                                <p>Thank you for stoping by, you are about to explore more about us and get to know more about what we do.</p>
                                <ul class="contact-list">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Police Europa, Maseru 100 <br />Platinum Building room 7
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
                                Copyright © 2021. All right reserved. Designed with love by Nelson Mathebeng
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
