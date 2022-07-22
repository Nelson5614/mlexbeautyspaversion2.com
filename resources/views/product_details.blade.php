
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
                        <h2>Product Details</h2> 
                        <ul class="nav"> 
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/shop') }}">Shop</a></li>
                            <li class="active">Product Details</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!-- Shop Details -->
    <main class="section-bg2 pb-90 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-wrap">
                        <!-- Product Details -->
                        <div class="product-details mb-60">
                            <div class="row">
                                <div class="col-lg-6" style="padding: 24px;">
                                    <img src="{{ asset('storage/'.$product->Image) }}"/>
                                </div>
                                
                                <div class="col-lg-6">

                                    
                                    <!-- Product Details Content -->
                                    <div class="product-details-content">
                                        <div class="price-review d-flex align-items-center">
                                            <div class="price">LSL{{ $product->price }}.00</div>
                                            <div>
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p>13 Review</p>
                                            </div>
                                        </div>

                                        <!-- Product Title -->
                                        <h2 class="product_title">{{ $product->name }}</h2>
                                        <!-- End Product Title -->

                                        <p>{{ $product->descrption }}</p>

                                        
                        
                                        <!-- Add Form -->
                                        <form class="cart" action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <div class="d-inline-flex align-items-sm-center flex-column flex-sm-row mb-4">
                                                <div class="quantity">
                                                    <div class="d-flex align-items-center mb-3 mb-sm-0">
                                                        <h5>Quantity:</h5>
                                                        <div class="input-group">
                                                            <span class="minus">
                                                                <img src="{{ asset('assets/img/icon/minus.svg') }}" alt="" class="svg">
                                                            </span>

                                                            <input type="number" class="form-control" value="01">
                                                            
                                                            <span class="plus">
                                                                <img src="{{ asset('assets/img/icon/plus2.svg') }}" alt="" class="svg">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                
                                                <button type="submit" class=" btn" style="background-color: #F81781;">
                                                    <span>Add to cart</span>
                                                    <img src="{{ asset('assets/img/icon/btn-arrow.svg') }}" alt="" class="svg">
                                                </button>
                                               
                                                
                                            </div>
                                            <div class="buttons d-flex align-items-center">
                                                <a href="#" class="circle add_to_wishlist"><img src="{{ asset('assets/img/icon/heart.svg') }}" alt="" class="svg"></a>
                                                <a href="#" class="circle add_to_wishlist"><img src="{{ asset('assets/img/icon/compare2.svg') }}" alt="" class="svg"></a>
                                            </div>
                                        </form>
                                        <!-- End Form -->

                                       
                                    </div>
                                    <!-- End Product Details Content -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product Details -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <!-- Woocommerce Tabs -->
                    <div class="woocommerce-tabs wc-tabs-wrapper mb-60">
                        <!-- Tab Buttons -->
                        <div class="tab-btn">
                            <ul class="nav">
                                <li>
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button>
                                </li>
                                <li>
                                    <button data-bs-toggle="tab" data-bs-target="#faq">FAQ</button>
                                </li>
                                <li>
                                    <button data-bs-toggle="tab" data-bs-target="#review">Reviews (5)</button>
                                </li>
                            </ul>
                        </div>
                        <!-- End Tab Buttons -->

                        <!-- Tab Content -->
                        <div class="tab-content pt-2">
                            <!-- Product Description -->
                            <div class="tab-pane fade show active product-description" id="description">
                                <p>{{ $product->descrption }}</p>

                                
                            </div>
                            <!-- End Product Description -->

                            <!-- Additional Information -->
                            <div class="tab-pane fade product-faq" id="faq">
                                <!-- Single Faq -->
                                <div class="single-faq media">
                                    <h6 class="faq-count">01.</h6>
                                    <div class="media-body">
                                        <h5>As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party
                                        world.</h5>

                                        <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting ledwell ing
                                        confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. carrie dtion to be at
                                        offending elsewhere distrusts if.</p>
                                    </div>
                                </div>
                                <!-- End Single Faq -->

                                <!-- Single Faq -->
                                <div class="single-faq media">
                                    <h6 class="faq-count">02.</h6>
                                    <div class="media-body">
                                        <h5>As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party
                                        world.</h5>

                                        <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting ledwell ing
                                        confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. carrie dtion to be at
                                        offending elsewhere distrusts if.</p>
                                    </div>
                                </div>
                                <!-- End Single Faq -->

                                <!-- Single Faq -->
                                <div class="single-faq media">
                                    <h6 class="faq-count">03.</h6>
                                    <div class="media-body">
                                        <h5>As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party
                                        world.</h5>

                                        <p>Talent she for lively eat led sister. Entrance strongly packages she out rendered get quitting denoting ledwell ing
                                        confined improved it he no doubtful raptures. Several carried through an of up attempt gravity. carrie dtion to be at
                                        offending elsewhere distrusts if.</p>
                                    </div>
                                </div>
                                <!-- End Single Faq -->
                            </div>
                            <!-- End Additional Information -->

                            <!-- Reviews -->
                            <div class="tab-pane fade woocommerce-Reviews" id="review">
                                <ul class="review-list">
                                    <li class="review">
                                        <article class="single-review media align-items-center">
                                            <!-- Author Image -->
                                            <div class="author-image">
                                                <img alt="" src="assets/img/media/author_1.png">
                                            </div>
                                            <!-- End Author Image -->
                                        
                                            <!-- Review Content -->
                                            <div class="review-content media-body">
                                                <div class="d-flex flex-column flex-md-row align-items-md-center">
                                                    <h6 class="author_name">Kendra Ratzlayff</h6>

                                                    <span class="commented-on">
                                                        <time datetime="2012-09-03T10:18:04+00:00">August 14, 2019 at 11:35pm</time>
                                                    </span>

                                                    <div class="star-rating">
                                                        <span>
                                                            <strong class="rating"></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                        
                                                <p>We denounce with righteous so distrusts pronounce.</p>
                                            </div>
                                            <!-- End Review Content -->
                                        </article>
                                    </li>
                                    <li class="review">
                                        <article class="single-review media align-items-center">
                                            <!-- Author Image -->
                                            <div class="author-image">
                                                <img alt="" src="assets/img/media/author_2.png">
                                            </div>
                                            <!-- End Author Image -->
                                        
                                            <!-- Review Content -->
                                            <div class="review-content media-body">
                                                <div class="d-flex flex-column flex-md-row align-items-md-center">
                                                    <h6 class="author_name">Kendra Ratzlayff</h6>
                                                    <span class="commented-on">
                                                        <time datetime="2012-09-03T10:18:04+00:00">August 14, 2019 at 11:35pm</time>
                                                    </span>

                                                    <div class="star-rating">
                                                        <span>
                                                            <strong class="rating"></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                        
                                                <p>We denounce with righteous so distrusts pronounce.</p>
                                            </div>
                                            <!-- End Review Content -->
                                        </article>
                                    </li>
                                    <li class="review">
                                        <article class="single-review media align-items-center">
                                            <!-- Author Image -->
                                            <div class="author-image">
                                                <img alt="" src="assets/img/media/author_3.png">
                                            </div>
                                            <!-- End Author Image -->
                                        
                                            <!-- Review Content -->
                                            <div class="review-content media-body">
                                                <div class="d-flex flex-column flex-md-row align-items-md-center">
                                                    <h6 class="author_name">Kendra Ratzlayff</h6>
                                                    <span class="commented-on">
                                                        <time datetime="2012-09-03T10:18:04+00:00">August 14, 2019 at 11:35pm</time>
                                                    </span>

                                                    <div class="star-rating">
                                                        <span>
                                                            <strong class="rating"></strong>
                                                        </span>
                                                    </div>
                                                </div>
                                        
                                                <p>We denounce with righteous so distrusts pronounce.</p>
                                            </div>
                                            <!-- End Review Content -->
                                        </article>
                                    </li>
                                </ul>

                                <!-- Review Form -->
                                <div class="review-form">
                                    <div id="respond" class="comment-respond">
                                        <h3>Add a Review</h3>


                                        <form action="#" method="post" class="comment-form">
                                            <p class="comment-notes">
                                                <span>Your email address will not be published.</span> Required
                                                fields are marked <span class="required">*</span>
                                            </p>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="comment-form-rating d-flex align-items-center">
                                                        <label>Rate It</label>
                                                        
                                                        <!-- Rating -->
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <!-- End Product Rating -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" placeholder="Enter your name" required="">
                                                </div>

                                                <div class="col-lg-6">
                                                    <input class="form-control" type="email" placeholder="Enter your email" required="">
                                                </div>

                                                <div class="col-12">
                                                    <textarea class="form-control" placeholder="Write your comments" required=""></textarea>
                                                </div>
                                        
                                                <div class="col-12">
                                                    <p class="custom-checkbox">
                                                        <label>
                                                            <input type="checkbox">Save my name, email, and website in this browser for the next time I comment.
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                </div>

                                                
                                                <div class="col-12">
                                                    <button type="submit" class="btn">
                                                        <span>Post Review</span>
                                                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Review Form -->

                            </div>
                            <!-- End Reviews -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Woocommerce Tabs -->

                    <!-- Releted Product -->
                    <div class="releted-product pt-100">
                        <h3 class="related-product-title">Related Products</h3>

                        <div class="row">
                            @foreach ($relatedproducts as $relatedproduct )
                                
                            <div class="col-lg-4 col-sm-6">
                                <!-- Single Product -->
                                <div class="single-product">
                                    <div class="product-top">
                                        <a href="{{ route('product_details', $product->slug) }}" class="product-thumbnail">
                                            <img src="{{ asset('assets/img/media/'.$relatedproduct->slug.'.jpg') }}" data-rjs="2" alt="">
                                        </a>
            
                                        <div class="buttons">
                                            <a href="#" class="btn-circle">
                                                <img src="{{ asset('assets/img/icon/love.svg') }}" alt="" class="svg">
                                            </a>
                                            <a href="#" class="btn-circle">
                                                <img src="{{ asset('assets/img/icon/compare.svg') }}" alt="" class="svg">
                                            </a>
                                            <a href="{{ url('cart') }}" class="btn-circle">
                                                <img src="{{ asset('assets/img/icon/cart.svg') }}" alt="" class="svg">
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
                                        <a href="{{ route('product_details', $relatedproduct->slug) }}"><h4>{{ $relatedproduct->name }}</h4></a>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">LSL</span>
                                                {{ $relatedproduct->price }}. 00
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- End Single Product -->
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                    <!-- End Releted Product -->
                </div>
                <div class="col-lg-3">
                    <div class="sidebar mt-5 mt-lg-0">
                        <!-- Widget Popular Post -->
                        <div class="widget widget_recent_entries">
                            <h3 class="widget_title">Popular Posts</h3>
                            <ul>
                                <li>
                                    <div class="post-summary">
                                        <h5 class="post-title"><a href="#">Business strategy consulting for inveytors</a></h5>

                                        <span class="posted-by"><a href="#">by. Puchka Bolle</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-summary">
                                        <h5 class="post-title"><a href="#">Business strategy consulting for inveytors</a></h5>

                                        <span class="posted-by"><a href="#">by. Puchka Bolle</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-summary">
                                        <h5 class="post-title"><a href="#">Business strategy consulting for inveytors</a></h5>

                                        <span class="posted-by"><a href="#">by. Puchka Bolle</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-summary">
                                        <h5 class="post-title"><a href="#">Business strategy consulting for inveytors</a></h5>

                                        <span class="posted-by"><a href="#">by. Puchka Bolle</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Widget Popular Post -->

                        <!-- Widget -->
                        <div class="widget widget_add">
                            <img src="assets/img/media/add.png" alt="">
                        </div>
                        <!-- End Widget -->

                        <!-- Widget Social Links -->
                        <div class="widget widget_social_links">
                            <h3 class="widget_title">Follow Us</h3>
                            <!-- Social Links -->
                            <div class="socials">
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.pinterest.com">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                            <!-- End Social Links -->
                        </div>
                        <!-- End Widget Social Links -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Shop Details -->

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