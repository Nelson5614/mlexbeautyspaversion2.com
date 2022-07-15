  <!-- Header -->
  <header class="header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="info-bar">
                        <ul class="hz-list justify-content-center justify-content-lg-start">
                            <li><span>Opening Time: </span> Mon - Fri: 6 am to 7 pm</li>
                            <li><span>Sat - Sun: </span> 6 am to 3pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="hz-list justify-content-center justify-content-lg-end">
                        <li><a href="tel:94857568" class="number">(+266) 56 230 279 / 63 209 170</a></li>
                        <li>
                            <!-- Social Links -->
                            <div class="social-links">
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <!-- End Social Links -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Main -->
    <div class="header-main love-sticky bg-white">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-3 col-sm-5 col-7">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="assets/img/logo.png" style="width: 100px;" alt="">
                            
                        </a>
                    </div>
                    <!-- End of Logo -->
                </div>

                <div class="col-lg-9 col-sm-7 col-5 d-flex align-items-center justify-content-end position-static">
                    <div class="nav-wrapper">
                        <div class="nav-wrap-inner">
                            <!-- Nav -->
                            <ul class="nav">
                                <li>
                                    <a class="current-menu-parent" href="{{ url('/') }}">Home</a>
                                   
                                </li>
                              
                                <li>
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('massage-services') }}">Massage Service</a></li>
                                        <li><a href="{{ url('body-services') }}">Body Servies</a></li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('shop') }}">Shop</a></li>
                                        <li><a href="{{ url('cart') }}">Cart</a></li>
                                        <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                    </ul>
                                </li>
                               

                                @if (Route::has('login'))

                                        @auth
                                        <li><a href="{{ url('my-appointments') }}" style="background-color: green; color: white; padding-left: 4px; padding-right: 4px; border-radius: 20px;">My Appointments</a></li>    
                                        <x-app-layout></x-app-layout>
                                            
                                        @else
                                        <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                        <li>
                                            <a href="{{ url('blog') }}">Blog</a>
                                            
                                        </li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>

                                        <a href="{{ route('login') }}" style="border: solid 1px #F81781; width: 80px; margin-top: 11px; padding-top: 4px; padding-left: 14px; height: 35px;">
                                            <span>Login</span>                                       
                                        </a>
                                        <a href="{{ route('register') }}" style="background-color: #F81781; color: white; width: 90px; margin-top: 11px; padding-top: 4px; margin-left: 15px; padding-left: 14px; height: 35px;">
                                            <span>Register</span>                                       
                                        </a>

                                        @endauth
                                    @endif
                            </ul>
                            <!-- End Nav -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Main -->
</header>
<!-- End Header -->