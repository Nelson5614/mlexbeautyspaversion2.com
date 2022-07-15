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
                        <h2>Checkout</h2> 
                        <ul class="nav"> 
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Checkout</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Checkout -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="woocommerce--content">
                        <!-- Checkout Form -->
                        <form class="checkout woocommerce-checkout" action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Billing Fields -->
                                    <div class="woocommerce-billing-fields">
                                        <h4 class="billing-details-title">Billing Details</h4>
    
                                        <div class="woocommerce-billing-fields__field-wrapper">
                                            <p>
                                                <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="name" readonly>
                                            </p>
                                            <p>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                            </p>
                                          
                                            <p>
                                                <input type="tel" class="form-control" name="phone" value="{{ auth()->user()->phone }}" readonly>
                                            </p>
                                            <p>
                                                <input type="email" class="form-control" name="email"  value="{{ auth()->user()->email }}" readonly>
                                            </p>
                                            <p>
                                                <select class="form-control">
                                                    <option value="" disabled="" selected="">Country</option>
                                                    <option>Lesotho</option>
                                                    <option>South Africa</option>
                                                    
                                                </select>
                                            </p>
                                           
                                            
                                            
                                            <p>
                                                <input type="text" class="form-control" name="district" placeholder="District">
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <!-- End Billing Fields -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Additional Fields -->
                                    <div class="woocommerce-additional-fields mt-5 mt-lg-0">
                                        <h4 class="billing-details-title">Additional Key Notes</h4>

                                        <div class="woocommerce-additional-fields__field-wrapper">
                                            <p class="notes">
                                                <textarea class="form-control" placeholder="Order notes (optional)"></textarea>
                                            </p>
                                        </div>
                                    
                                    
                                    </div>
                                    <!-- End Additional Fields -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Order Details -->
                                    <div class="order-details mt-5 pt-2">
                                        <h4 class="billing-details-title pb-4 mb-3">Your Order</h4>

                                        <!-- CheckOut Table -->
                                        <table class="table shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name pl-0">
                                                        Products
                                                    </th>
                                                    <th class="product-subtotal">
                                                        Subtotal
                                                    </th>
                                                </tr>
                                            </thead>
                                    
                                            <tbody>
                                                @foreach (Cart::content() as $item )
                                                    <tr class="cart_item">
                                                        <th class="product-name">
                                                            {{ $item->model->name }} <span class="product-quantity">x {{ $item->qty }}</span>
                                                        </th>
                                                        <td class="product-total">
                                                            LSL{{ $item->model->price }}.00
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                    
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>
                                                        Subtotal :
                                                    </th>
                                                    <td>
                                                        LSL{{ Cart::subtotal( ) }}
                                                    </td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <th>
                                                        Tax :
                                                    </th>
                                                    <td>
                                                        LSL{{ Cart::tax( ) }}
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>
                                                        Total :
                                                    </th>
                                                    <td>
                                                        LSL{{ Cart::total( ) }}
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- End CheckOut Table -->

                                       
                                    </div>
                                    <!-- End Order Details -->
                                </div>
                            </div>

                            <br> <br> <br> <br>

                            <div class="col-lg-6 woocommerce-billing-fields">
                                <h4 class="billing-details-title">Payment Details</h4>

                                <div class="woocommerce-billing-fields__field-wrapper">
                                    <p>
                                        <input type="text" class="form-control" placeholder="Name on card">
                                    </p>
                                    <p>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </p>
                                    <p>
                                        <input class="form-control" type="text" placeholder="Credit card number">
                                    </p>

                                    <div class="row">

                                        
                                        <div class="col-lg-6">
                                            <p>
                                                <input class="form-control" type="date" placeholder="Expiry">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>
                                                <input class="form-control" type="text" placeholder="CVC code">
                                            </p>
                                        </div>
                                        
                                    </div>
                                    
                                   

                                    <div class="mt-30 text-end">
                                        <button class="btn" type="submit">
                                            <span>Place Order</span>
                                            <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                        </button>
                                    </div>

                                   
                                    
                                </div>
                            </div>
                        </form>
                        <!-- End Checkout Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout -->

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