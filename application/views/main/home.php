<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-Commerce Adidas | <?= $title; ?></title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/shop.css" type="text/css" media="screen" property="" />
    <link href="assets/css/style7.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" href="assets/images/adidas-logo.png">
    <!-- font-awesome-icons -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="banner_top" id="home">
        <div class="wrapper_top_w3layouts">

            <div class="header_agileits">
                
                <div class="overlay overlay-contentpush">
                    <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <nav>
                        <ul>
                            <li><a href="<?= base_url() ?>" class="active text-secondary">Beranda</a></li>
                            <li><a href="<?= base_url() ?>about">Tentang Kami</a></li>
                            <li><a href="<?= base_url() ?>contact">Kontak</a></li>
                            <li><a class="btn-shop" href="<?= base_url() ?>shop">Belanja Sekarang</a></li>
                            <?php if($user == "home"){?>
                            <li><a class="btn-shop" href="<?= base_url() ?>login/logincust">Login Customer</a></li>
                            <li><a class="btn-shop" href="<?= base_url() ?>login/loginadmin">Login Admin</a></li>
                            <?php }else{?>
                            <li><a class="btn-shop" href="<?= base_url() ?>login/logoutcust">Logout</a></li>
                            <?php }?>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-nav-button">
                    <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                <!-- search -->
                <div class="search_w3ls_agileinfo">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <a href="<?= base_url() ?>shop"><button id="trigger-overlay" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>
                        </ul>
                    </div>
                </div>
                <!-- //search -->

            </div>
            <!-- /slider -->
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">

                        <li>
                            <div class="banner-top2">
                                <div class="banner-info-wthree">

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top3">
                                <div class="banner-info-wthree">

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top">
                                <div class="banner-info-wthree">

                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url()?>shop">
                            <div class="banner-top1">
                                <div class="banner-info-wthree">
                                </div>
                            </div>
                            </a>
                        </li>
                        <li>
                            <div class="banner-top4">
                                <div class="banner-info-wthree">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //banner -->

    <!-- /girds_bottom2-->
    <div class="grids_sec_2 col-lg-12">
        <div class="style-grids_main">
            <div class="col-lg-6 grids_sec_2_left">
                <div class=" grid_sec_info">
                    <div class="style-grid-2-text_info">
                        <h3>Ultraboost 20 Shoes</h3>
                        <p>IDR 1.800.000,-</p>
                        <div class="shop-button">
                            <a href="<?= base_url() ?>checkout/index/1">Belanja Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="style-image-2">
                    <img src="assets/images/Banner/ul20.jpg" alt="shoe">
                    <div class="style-grid-2-text">
                        <h3>Ultraboost 20</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grids_sec_2_left">

                <div class="style-image-2">
                    <img src="assets/images/Banner/terrex.jpg" alt="shoe">
                    <div class="style-grid-2-text">
                        <h3>Terrex Urban Low Hiking</h3>
                    </div>
                </div>
                <div class="grid_sec_info last">
                    <div class="style-grid-2-text_info">
                        <h3>Terrex Urban Low Hiking</h3>
                        <p>IDR 2.000.000,-</p>
                        <div class="shop-button two rounded">
                            <a href="<?= base_url() ?>checkout/index/2">Belanja Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //grids_bottom2-->
    <!-- /Properties -->
    <div class="mid_slider_w3lsagile">
        <div class="col-md-4 mid_slider_text">
            <h5>Sepatu Lainnya</h5>
        </div>
        <div class="col-md-8 mid_slider_info">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 10.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 3.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 5.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 4.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 1.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 2.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 4.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                <div class="thumbnail"><img src="assets/images/product/Sepatu 6.jpg" alt="Image" style="max-width:100%;">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- The Modal -->

            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <!--//banner -->


    <!-- footer -->
    <div class="footer_agileinfo_w3">
        <div class="footer_inner_info_w3ls_agileits">
            <div class="col-md-3 footer-left">
                <h4><a href="index.html"><span><img class="navbar-brand" src=" assets/images/adidas-logo-white.png" alt=""></span>E-Commerce
                        Adidas </a></h4>
                <p><strong>Adidas</strong> merupakan global desainer, developer, dan marketer alas kaki atletik,
                    apparel,
                    dan aksesoris
                    dengan misi menjadi
                    brand sport terdepan di dunia. Brand adidas adalah bagian dari adidas Group, korporasi yang juga
                    memiliki brand seperti
                    Reebok dan TaylorMade.
                </p>
                <ul class="social-nav model-3d-0 footer-social social two">
                    <li>
                        <a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-9 footer-right">
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Informasi <span>Kami</span> </h4>
                        <ul>
                            <li><a href="<?php base_url() ?>">Beranda</a></li>
                            <li><a href="<?php base_url() ?>about">Tentang Kami</a></li>
                            <li><a href="<?php base_url() ?>shop">Katalog</a></li>
                            <li><a href="<?php base_url() ?>contact">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 sign-gd-two">
                        <h4>Kontak <span>Toko</span></h4>
                        <div class="address">
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Hubungi Kami</h6>
                                    <p>+62 83854010322</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Email</h6>
                                    <p>Email :<a href="mailto:fahimsyakenza29@gmail.com">fahimsyakenza29@gmail.com</a>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Kantor</h6>
                                    <p>Jl. Klampis Aji Tengah II/46</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

            <p class="copy-right-w3ls-agileits">&copy 2018 E-Commerce Adidas | Design by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
        </div>
    </div>
    </div>
    <!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
        </span></a>
    <!-- js -->
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- /nav -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!-- //nav -->
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        shoe.render();

        shoe.cart.on('shoe_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!--search-bar-->
    <script src="assets/js/search.js"></script>
    <!--//search-bar-->
    <script src="assets/js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- js for portfolio lightbox -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="assets/js/move-top.js"></script>
    <script type="text/javascript" src="assets/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->

    <script type="text/javascript" src="assets/js/bootstrap-3.1.1.min.js"></script>


</body>

</html>