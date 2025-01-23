<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SREE SREE RADHABALLAVCHAK KHARGESWAR JEW MANDIR</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/slick.css">
        <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
        <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">

        <!-- Icon Fonts -->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
        <!-- Template Style sheet -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- partial -->
        @stack('css')
    </head>
    <body>
        <!-- Preloader Start -->
        <div class="sigma_preloader">
          <img src="assets/img/om.svg" alt="preloader">
        </div>
        <!-- Preloader End -->
        @include('layouts.nav-bar')
        @include('layouts.banner')
        @yield('content')
        @include('layouts.footer')
        <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
        <script src="assets/js/plugins/popper.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/plugins/imagesloaded.min.js"></script>
        <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins/jquery.countdown.min.js"></script>
        <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
        <script src="assets/js/plugins/jquery.counterup.min.js"></script>
        <script src="assets/js/plugins/jquery.zoom.min.js"></script>
        <script src="assets/js/plugins/jquery.inview.min.js"></script>
        <script src="assets/js/plugins/jquery.event.move.js"></script>
        <script src="assets/js/plugins/wow.min.js"></script>
        <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
        <script src="assets/js/plugins/slick.min.js"></script>
        <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- partial -->
        @stack('js')
        <script>
            let text = "SreeSreeRadhaballavchakKhargeswarJewMandir"
            console.log(text.toLowerCase());
            
        </script>
    </body>
</html>
