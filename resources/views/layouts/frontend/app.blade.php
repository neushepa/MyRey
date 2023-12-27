<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog - Fathforce Starter Kits Pro</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/frontend/img/favicon.png" rel="icon">
    <link href="../assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="../assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light"><a href="/"><span>FATHFORCE</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <!-- .navbar -->
            @include('layouts.frontend.nav')
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Blog Breadcrumb ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Blog Breadcrumb -->

        <!-- ======= Blog Entry ======= -->
        <section id="blog" class="blog">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">

                    <!-- Start blog entries list -->
                    @yield('content')
                    <!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <!-- start sidebar categories-->
                            <x-category-post />

                            <!-- End sidebar categories-->

                            <!-- Start sidebar recent posts-->
                            <x-recent-post />
                            <!-- End sidebar recent posts-->

                            <!-- Start sidebar tags-->
                            {{-- @include('layouts.frontend.tag') --}}
                            <!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.frontend.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="assets/frontend/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/frontend/vendor/aos/aos.js"></script>
    <script src="../assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/frontend/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/frontend/js/main.js"></script>

    <script>
        if (window.self == window.top) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }
    </script>
    <script src="../assets/frontend/magnific-popup/jquery.magnific-popup.min.js?v=1"></script>
    <script>
        $(document).ready(function() {
            $('.popup-image').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    shorizontalFit: true,
                }
            });
        });
    </script>
</body>

</html>
