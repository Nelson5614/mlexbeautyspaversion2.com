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
    {{-- <div class="preloader">              
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- End Preloader -->

    <!-- Header -->
    @include('components.header')
    <!-- End Header -->

    <br> <br> <br> <br>
    <!-- My appointment table -->
    <div align="center" style="padding: 70px;">

        <table>
            <tr>
                <th>Service</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
            @foreach ($appoint as $appoints )
            <tr>
                <td>{{ $appoints->service }}</td>
                <td>{{ $appoints->date }}</td>
                <td>{{ $appoints->message }}</td>
                <td>{{ $appoints->status }}</td>
                <td><a href="{{ url('cancel-appointment',$appoints->id) }}" class="btn btn-danger" onclick=" return confirm('Do you want to delete this appointment?')">cancel</a></td>
            </tr>
            @endforeach
        </table>
    </div>

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
