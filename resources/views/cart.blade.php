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
                        <h2>Cart</h2> 
                        <ul class="nav"> 
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Cart</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- cart -->
    <div class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="woocommerce--content">
                        <!-- Cart Form -->
                        <form action="#" class="woocommerce-cart-form">
                            <div class="table-responsive">
                                <!-- Cart Table -->
                                <table class="shop_table cart_table responsive_table">
                                    <thead>
                                        <tr>
                                            <th class="product-name pt-0 text-start">Product name</th>
                                            <th class="product-price pt-0">Price/Unit</th>
                                            <th class="product-quantity pt-0">Quantity</th>
                                            <th class="product-subtotal pt-0">Total</th>
                                            <th class="product-remove pt-0">Remove</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="product-name">
                                                <div class="d-flex align-items-center">
                                                    <a href="#">
                                                        <img src="assets/img/media/80x80.png" alt="">
                                                    </a>
                                                    <a href="#">Woven Throw Pillow</a>
                                                </div>
                                            </td>

                                            <td class="product-price">$25</td>

                                            <td class="product-quantity">
                                                <!-- Quantity -->
                                                <div class="quantity">
                                                    <div class="input-group">
                                                        <span class="minus">
                                                            <img src="assets/img/icon/minus.svg" alt="" class="svg">
                                                        </span>
                                                        <input type="text" class="input-text qty text" value="1">
                                                        <span class="plus">
                                                            <img src="assets/img/icon/plus2.svg" alt="" class="svg">
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Quantity -->
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>59.00</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#">
                                                    <img src="assets/img/icon/remove_2.svg" class="svg" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-name">
                                                <div class="d-flex align-items-center">
                                                    <a href="#">
                                                        <img src="assets/img/media/80x80.png" alt="">
                                                    </a>
                                                    <a href="#">Woven Throw Pillow</a>
                                                </div>
                                            </td>

                                            <td class="product-price">$25</td>

                                            <td class="product-quantity">
                                                <!-- Quantity -->
                                                <div class="quantity">
                                                    <div class="input-group">
                                                        <span class="minus">
                                                            <img src="assets/img/icon/minus.svg" alt="" class="svg">
                                                        </span>
                                                        <input type="text" class="input-text qty text" value="1">
                                                        <span class="plus">
                                                            <img src="assets/img/icon/plus2.svg" alt="" class="svg">
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Quantity -->
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>59.00</span>
                                            </td>
                                            
                                            <td class="product-remove">
                                                <a href="#">
                                                    <img src="assets/img/icon/remove_2.svg" class="svg" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-name">
                                                <div class="d-flex align-items-center">
                                                    <a href="#">
                                                        <img src="assets/img/media/80x80.png" alt="">
                                                    </a>
                                                    <a href="#">Woven Throw Pillow</a>
                                                </div>
                                            </td>

                                            <td class="product-price">$25</td>

                                            <td class="product-quantity">
                                                <!-- Quantity -->
                                                <div class="quantity">
                                                    <div class="input-group">
                                                        <span class="minus">
                                                            <img src="assets/img/icon/minus.svg" alt="" class="svg">
                                                        </span>
                                                        <input type="text" class="input-text qty text" value="1">
                                                        <span class="plus">
                                                            <img src="assets/img/icon/plus2.svg" alt="" class="svg">
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- End Quantity -->
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>59.00</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#">
                                                    <img src="assets/img/icon/remove_2.svg" class="svg" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="actions">
                                                <!-- Coupon -->
                                                <div class="coupon">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control" type="text" placeholder="Your Coupon">
                                                        <button type="submit" class="btn">
                                                            <span>Apply</span>
                                                            <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- End Cupon -->
                                            </td>

                                            <td colspan="3" class="pe-0">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <div class="cart-subtotal-wrap me-5 d-none d-lg-block">
                                                        <span class="cart-subtotal">Cart Subtotal:</span>
                                                        $299.66
                                                    </div>
                                                    <button type="submit" class="btn">
                                                        <span>Update cart</span>
                                                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Cart Table -->
                            </div>
                        </form>
                        <!-- End Cart Form -->

                        <!-- Cart Collaterals -->
                        <div class="cart-collaterals">
                            <div class="cart_totals calculated_shipping">
                                <table class="shop_table">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>125</span>
                                            </td>
                                        </tr>
                        
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        210.00
                                                    </span>
                                                </strong> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        
                                <div class="wc-proceed-to-checkout text-end">
                                    <a href="checkout.html" class="btn">
                                        <span>Proceed to checkout</span>
                                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Cart Collaterals -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

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