<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bayarSPP | FreedomCode</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/bayarSPP-5.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/bayarSPP-5.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="plugins/gimpo-icons/style.css">

    <!-- template styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="preloader "><span></span></div><!-- /.preloader -->
    <div class="page-wrapper ">
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix ">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="images/bayarSPP-6.png" class="main-logo" width="260" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" one-page-scroll-menu navigation-box">
                            <li>
                            <li>
                            <li>
                            <li>
                            <li class="current scrollToLink">
                                <a href="#banner">Beranda</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#features">Manfaat</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#pricing">Pembayaran</a>
                            </li>
                            <li class="scrollToLink mx-5">
                                <a href="#about">About</a>
                                <ul class="sub-menu">
                                </ul><!-- /.sub-menu -->
                            </li>
    
                            <li>
                            <li>
                            <li>
                            @auth
                            <li class="dropdown">
                                <a class="dropdown" role="button">
                                    Welcome back, {{ auth()->user()->name }}
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="/admin/dashboard">Dashboard</a></li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown">Logout</button>
                                    </li>
                            @else
                            <li class="dropdown">
                                <a href="#">Login</a>
                                <ul class="sub-menu">
                                    <li><a href="/loginn">Login User</a></li>
                                    <li><a href="/login">Login Admin</a></li>
                            </ul><!-- /.sub-menu -->
                            </li>
                            @endauth
                                    
                            
                        </ul>
              
                    </div><!-- /.navbar-collapse -->
                    
                </div>

                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        <section class="banner-one" id="banner">
            <div class="container">
                <div class="banner-one__moc">
                    <img src="images/foto2.png" class="moc-image" alt="">
                    <img src="images/banner-line.png" class="banner-one__line" alt="">
                </div><!-- /.banner-one__moc -->
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-one__content">

                            <h3 class="banner-one__title">bayarSPP<br>
                                </h3><!-- /.banner-one__title -->
                            <p class="banner-one__text">Pembayaran SPP dengan mudah dan cepat.
                                <br> Pastinya aman dan nyaman tanpa datang ke sekolah <br> mudah dan praktis dengan sekali klik.</p>
                            <!-- /.banner-one__text -->
                            <a href="/register" class="banner-one__btn thm-btn ">REGISTER</a><!-- /.thm-btn -->
                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->
        <section class="service-one">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">Keunggulan
                    </p><!-- /.block-title__tag-line -->
                    <h2 class="block-title__title">Layanan Kami</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="service-one__content-wrap">
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-responsive"></i>
                            <h3 class="service-one__title"><a href="#">Fitur <br> Pengingat</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-computer-graphic "></i>
                            <h3 class="service-one__title"><a href="#">Akses <br> Cepat</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-development"></i>
                            <h3 class="service-one__title"><a href="#">Mengelola <br> User</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-development1"></i>
                            <h3 class="service-one__title"><a href="#">Keamanan <br> Terjamin</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                    <div class="service-one__single">
                        <div class="service-one__inner">
                            <i class="gimpo-icon-app-development"></i>
                            <h3 class="service-one__title"><a href="#">Selalu <br> Update</a></h3>
                            <!-- /.service-one__title -->
                        </div><!-- /.service-one__inner -->
                    </div><!-- /.service-one__single -->
                </div><!-- /.service-one__content-wrap -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section class="cta-two" id="features">
            <div class="container">
                <div class="cta-two__image">
                    <img src="images/cta-line-1-1.png" class="cta-two__line" alt="">
                    <img src="images/k.png" alt class="illustration" width="625" height="550">
                </div><!-- /.cta-two__image -->
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-7">
                        <div class="cta-two__content">
                            <div class="block-title text-left">
                                <p class="block-title__tag-line">Fitur Pembayaran

                                </p><!-- /.block-title__tag-line -->
                                <h2 class="block-title__title">Manfaat<br>
                                    Dengan bayarSPP</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="cta-two__tagline">Kemudahan dalam pembayaran dapat
                                membantu anda ketika sedang sibuk atau tidak sempat datang langsung.</p><!-- /.cta-two__tagline -->
                            <ul class="list-unstyled cta-two__list">
                                <li>
                                    <i class="cta-two__list-icon fa fa-check"></i>
                                    <!-- /.cta-two__list-icon fa fa-check -->
                                    <p>Kemudahan akses pengguna untuk semua kalangan.</p>
                                </li>
                                <li>
                                    <i class="cta-two__list-icon fa fa-check"></i>
                                    <!-- /.cta-two__list-icon fa fa-check -->
                                    <p>Tidak perlu bertemu, pembayaran secara digital 
                                        melalui DANA, OVO, atau E-Banking.</p>
                                </li>
                            </ul><!-- /.list-unstyled -->
                            <a href="/registerr" class="thm-btn cta-two__btn">Daftar Segera!</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->


        <section class="cta-three">
            <div class="container">
                <div class="cta-three__image">
                    <img src="images/cta-line-1-2.png" class="cta-three__line" alt="">
                    <img src="images/img_productknowledge_school_payment.png" width="645" height="680" alt="">    
                </div><!-- /.cta-two__image -->
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="cta-three__content">
                            <div class="block-title text-left">
                                </p><!-- /.block-title__tag-line -->
                                <h2 class="block-title__title">Benefit Untuk Sekolah &<br>
                                    Yayasan</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="cta-three__text">Semua tagihan seperti SPP, Uang Buku, Sumbangan dan lain-lain, akan lebih mudah diinformasikan dan dibayarkan oleh orang tua siswa.</p><!-- /.cta-two__tagline -->
                            <a href="/register" class="thm-btn cta-three__btn">Daftar Segera!</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->

        <section class="fact-one">
            <div class="container">
                <div class="inner-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-1">
                                <h3 class="fact-one__title counter">7842 </h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">Downloads</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-2">
                                <h3 class="fact-one__title counter">6020</h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">Likes</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-3">
                                <h3 class="fact-one__title counter">360</h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">5 Star Rating</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="fact-one__single color-4">
                                <h3 class="fact-one__title counter">200</h3><!-- /.fact-one__title -->
                                <p class="fact-one__text">Awards</p><!-- /.fact-one__text -->
                            </div><!-- /.fact-one__single -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.fact-one -->
        <section class="pricing-one" id="pricing">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tag-line">Info Pembayaran
                    </p><!-- /.block-title__tag-line -->
                   <h2 class="block-title__title">Pengelola Dapat Mengatur Opsi Pembayaran</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pricing-one__single color-1 wow fadeInDown" data-wow-duration="1500ms">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__amount">Rp. 100.000,00 </h3><!-- /.pricing-one__amount -->
                                <p class="pricing-one__name">Per-Bulan</p><!-- /.pricing-one__name -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="list-unstyled pricing-one__list">
                                <li>Pembayaran Standar</li>
                            </ul><!-- /.list-unstyled pricing-one__list -->
                            <a href="#" class="thm-btn pricing-one__btn">Bayar</a><!-- /.thm-btn pricing-one__btn -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="pricing-one__single color-2 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__amount">Rp. 600.000,00 </h3><!-- /.pricing-one__amount -->
                                <p class="pricing-one__name">Per-Semester</p><!-- /.pricing-one__name -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="list-unstyled pricing-one__list">
                                <li>Pembayaran Menengah</li>
                            </ul><!-- /.list-unstyled pricing-one__list -->
                            <a href="#" class="thm-btn pricing-one__btn">Bayar</a><!-- /.thm-btn pricing-one__btn -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="pricing-one__single color-3 wow fadeInDown" data-wow-duration="1500ms">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__amount">Rp. 1.200.000,00 </h3><!-- /.pricing-one__amount -->
                                <p class="pricing-one__name">Per-Tahun</p><!-- /.pricing-one__name -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="list-unstyled pricing-one__list">
                                <li>Pembayaran Full & Lunas</li>
                            </ul><!-- /.list-unstyled pricing-one__list -->
                            <a href="#" class="thm-btn pricing-one__btn">Bayar</a><!-- /.thm-btn pricing-one__btn -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

        <section class="cta-one">
            <div class="container text-center">
                <h3 class="block-title__title">Gunakan Sekarang!!<br>
                   bayarSPP </h3><!-- /.block-title__title -->
                <p class="cta-one__text">Sistem Pembayaran Yang Mudah Cepat Dan Aman</p>
                <!-- /.cta-one__text -->
                <a href="/register" class="thm-btn cta-one__btn">Join Sekarang</a><!-- /.thm-btn -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
        <footer class="site-footer">
            <div class="site-footer__bubble-1"></div><!-- /.site-footer__bubble-1 -->
            <div class="site-footer__line"></div><!-- /.site-footer__line -->
            <div class="site-footer__bubble-2"></div><!-- /.site-footer__bubble-2 -->
            <div class="site-footer__upper">
                <div class="container" id="about">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="footer-widget footer-widget__about">
                                <img src="images/bayarSPP-6.png" width="250" alt="" class="footer-widget__logo">
                                <p class="footer-widget__contact">Membayar dengan mudah cepat dan aman</p>
                                <!-- /.footer-widget__contact -->
                                <!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-6 d-flex justify-content-between footer-widget__links-wrap">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title"></h3>
                                <!-- /.footer-widget__title -->
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Quick Links</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">Beranda </a></li>
                                    <li><a href="#">Kontak </a></li>
                                    <li><a href="#">Fitur </a></li>
                                    <li><a href="#">Daftar</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Tentang</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links list-unstyled">
                                    <li><a href="#">Help </a></li>
                                    <li><a href="#">Support </a></li>
                                    <li><a href="#">Clients </a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul><!-- /.footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget__mailchimp">
                                <h3 class="footer-widget__title">Masukan Untuk Kami</h3><!-- /.footer-widget__title -->
                                <form action="#" class="footer-widget__mc-form mc-form"
                                    data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                                    <input type="email" id="mc-email" class="formInput" placeholder="Email address">
                                    <button type="submit"><i class="fa fa-location-arrow"></i>
                                        <!-- /.fa fa-paper-plane --></button>
                                </form><!-- /.footer-widget__mc-form -->
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container">
                        <p class="site-footer__copy">&copy; Copyright 2022 by <a href="#">bayarSPP</a></p>
                        <!-- /.site-footer__copy -->
                        <div class="site-footer__social">
                            <a href="#" class="fa fa-facebook-square"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-pinterest-p"></a>
                        </div><!-- /.site-footer__social -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- template scripts -->
    <script src="js/theme.js"></script>
</body>

</html>