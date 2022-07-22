<!-- Footer -->
<footer class="footer" data-bg-img="{{ asset('assets/img/bg/footer-bg.png') }}"> 
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
                                <li><a href="{{ url('shop') }}">Products</a></li>
                                <li><a href="p{{ url('shop') }}">Pricing</a></li>
                                <li><a href="{{ url('appointment') }}">Appointment</a></li>
                                
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
                                <li><a href="{{ url('about') }}">Mlexbeautyspa</a></li>
                                <li><a href="{{ url('contact') }}">Contact us</a></li>
                                <li><a href="{{ url('massage-services') }}">Our Services</a></li>
                                <li><a href="{{ url('contact') }}">Careers</a></li>
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
                                <li><a href="{{ url('contact') }}">Help center</a></li>
                                <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ url('blog') }}">Blog</a></li>
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
                            <p>Please dont hesitate to contact if you have anything to ask.</p>
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
                            <img src="{{ asset('assets/img/logo.png') }}" style="width: 80px;">
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