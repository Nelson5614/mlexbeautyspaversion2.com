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
                            <li><a href="{{ url('/') }}">Home</a></li>
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

                @if (Cart::count() > 0)
                    
                
                    <h4>{{ Cart::count() }} item(s) in the shopping cart</h4> <hr> <br> <br> <br>

                    <div class="col-12">
                        <div class="woocommerce--content">
                            <!-- Cart Form -->
                           
                            <div class="table-responsive">
                                <!-- Cart Table -->
                                <table class="shop_table cart_table responsive_table">
                                    <thead>
                                        <tr>
                                            <th class="product-name pt-0 text-start">Product name</th>
                                            <th class="product-price pt-0">Price/Unit</th>
                                            <th class="product-quantity pt-0">Quantity</th>
                                            {{-- <th class="product-subtotal pt-0">Total</th>
                                            <th class="product-remove pt-0">Remove</th> --}}
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach (Cart::content() as $item )
                                            <tr>
                                                <td class="product-name">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="assets/img/media/80x80.png" alt="">
                                                        </a>
                                                        <a href="{{ route('product_details', $item->model->slug) }}">{{ $item->model->name }}</a>
                                                    </div>
                                                </td>

                                                <td class="product-price">LSL{{ $item->model->price * $item->qty }}.00</td>

                                                <td class="product-quantity">
                                                    <!-- Quantity -->
                                                    {{-- <div class="">
                                                        <div class="input-group quantity">
                                                            <span class="minus">
                                                                <img src="assets/img/icon/minus.svg" alt="" class="svg">
                                                            </span>
                                                            <input type="text" class="input-text qty text" value="1">
                                                            <span class="plus">
                                                                <img src="assets/img/icon/plus2.svg" alt="" class="svg">
                                                            </span>
                                                        </div>
                                                    </div> --}}

                                                    
                                                    <select name="quantity" data-id="{{ $item->rowId }}"  class="quantity" style="width: 40px; margin-left: 70px;">

                                                        @for ($i=1; $i < 10 +1; $i++)
                                                        <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option> 
                                                        @endfor
                                                      
                                                        {{-- <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                                        <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                                        <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                                        <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option> --}}
                                                        
                                                    </select>
                                                   
                                                    <!-- End Quantity -->
                                                </td>

                                                {{-- <td class="product-subtotal">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>59.00</span>
                                                </td> --}}
                                                <form action="{{ route('cart.delete', $item->rowId) }}" method="POST" class="woocommerce-cart-form">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <td class="product-remove">
                                                        <button type="submit">
                                                            <img src="assets/img/icon/remove_2.svg" class="svg" alt="">
                                                        </button>
                                                    </td>
                                                </form>
                                            </tr>  
                                        @endforeach
                                        
                                        
                                        <tr>

                                            @if (!session()->has('coupon'))
                                                
                                            <td colspan="2" class="actions">
                                                <!-- Coupon -->
                                                <form action="{{ route('coupons.store') }}" method="POST">
                                                    @csrf
                                                    <div class="coupon">
                                                        <div class="form-group mb-0">
                                                            <input class="form-control" type="text" placeholder="Your Coupon" name="coupon_code" id="coupon_code">
                                                            <button type="submit" class="btn">
                                                                <span>Apply</span>
                                                                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- End Cupon -->
                                            </td>
                                            @endif

                                            {{-- <td colspan="3" class="pe-0">
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
                                            </td> --}}
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Cart Table -->
                            </div>
                            
                            <!-- End Cart Form -->
                            @if (session()->has('coupon'))
                                <br><br><br>
                            @endif
                            <!-- Cart Collaterals -->
                            
                            <div class="cart-collaterals">
                                <div class="cart_totals calculated_shipping">
                                    <table class="shop_table">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">LSL</span>{{ Cart::subtotal( ) }}</span>
                                                </td>
                                            </tr>
                                            @if (session()->has('coupon'))
                                                <tr class="cart-subtotal">

                                                    
                                                        
                                                    <th>Discount({{ session()->get('coupon')['name'] }}) 
                                                        <form action="{{ route('coupons.destroy') }}" method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">Remove</button>
                                                        
                                                        </form>
                                                    
                                                    </th>
                                                    <td>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">-LSL</span>{{ $discount }}

                                                            
                                                        </span>
                                                    </td>                                                    
                                                </tr>
                                            @endif

                                            @if (session()->has('coupon'))
                                            <tr class="cart-subtotal">
                                                <th>New Subtotal</th>
                                                <td>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">LSL</span>{{ $newsubtotal }}</span>
                                                </td>
                                            </tr>
                                            @endif

                                            <br><br><br>
                                            <tr class="cart-subtotal">
                                                <th>Tax(15%)</th>

                                                
                                                <td>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">LSL</span>{{ $newtax }}</span>
                                                </td>
                                            </tr>
                            
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">LSL</span>
                                                            {{ $newtotal }}
                                                        </span>
                                                    </strong> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">

                                        <div class="col-lg-6 wc-proceed-to-checkout ">
                                            <a href="{{ url('shop') }}" class="btn">
                                                <span>Continue Shopping</span>
                                                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                            </a>
                                        </div>

                                        <div class="col-lg-6 wc-proceed-to-checkout text-end">
                                            <a href="{{ url('checkout') }}" class="btn">
                                                <span>Proceed to checkout</span>
                                                <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cart Collaterals -->
                        </div>
                    </div>
                @else
                <h4>No items in cart!</h4> <br> <br> <br>   
                <a href="{{ url('/shop') }}" style="border: 1px solid black; padding: 8px; width: 180px;">Continue shoping</a>
                @endif
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
<script src="{{ asset('js/app.js') }}"></script>

<script>
    (function(){
        const className = document.querySelectorAll('.quantity')

        Array.from(className).forEach(function(element) {
            element.addEventListener('change', function(){
                const id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                    quantity: this.value
                })
                .then(function (response) {
                    // console.log(response);
                    window.location.href='{{ route('cart.index') }}'
                })
                .catch(function (error) {
                    console.log(error);
                });
            })
        });
    })();
</script>