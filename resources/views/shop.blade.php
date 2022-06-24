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
                        <h2>Mlexbeautyspa Shop</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Mlexbeautyspa Shop</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!-- Product -->
    <section class="pt-120 pb-120">
        <div class="container">
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
                            <a href="{{ url('product-details') }}"><h4>Flat Tummy Solution</h4></a>
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
                            <a href="shop-details.html"><h4>Guava Leaves</h4></a>
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
                            <a href="shop-details.html"><h4>Yoni Steaming Herbs </h4></a>
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
               
            </div>
           
        </div>
    </section>
    <!-- End Product -->

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