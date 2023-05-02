<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $sql_p = "SELECT * FROM products WHERE id={$id}";
        $query_p = mysqli_query($con, $sql_p);
        if (mysqli_num_rows($query_p) != 0) {
            $row_p = mysqli_fetch_array($query_p);
            $_SESSION['cart'][$row_p['id']] = array("quantity" => 1, "price" => $row_p['productPrice']);

        } else {
            $message = "Product ID is invalid";
        }
    }
    echo "<script>alert('Product has been added to the cart')</script>";
    echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description"
          content="Themesoptic Internet Communications Ltd is a private broadband internet service provider with 12 years of experience.Our ultrafast fiber, ultra-reliable and unlimited network can bring you broadband speed of up to 10Gbps. ">
    <meta name="author" content="Rumy Bhuyan">
    <meta name="keywords"
          content="shop online, fiber, Broadband,  Fiber UK base, Broadband in UK, UK internet service Provide, net service provide, internet provider, House network, office network UK, United Kingdom Fiber service, hosting.">
    <meta name="robots" content="all">

    <title>Fibre broadband deals with UK based customer support- Thamesoptic</title>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/icone.png">
    <script>
        (function (w, d, s, r, n) {
            w.TrustpilotObject = n;
            w[n] = w[n] || function () {
                (w[n].q = w[n].q || []).push(arguments)
            };
            a = d.createElement(s);
            a.async = 1;
            a.src = r;
            a.type = 'text/java' + s;
            f = d.getElementsByTagName(s)[0];
            f.parentNode.insertBefore(a, f)
        })(window, document, 'script', 'https://invitejs.trustpilot.com/tp.min.js', 'tp');
        tp('register', 'KZVKCVnhmtCmOD99');
    </script>
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const trustpilot_invitation = {
                recipientEmail: 'info@thamesoptic.com',
                recipientName: 'Thamesoptic',
                referenceId: 'Order_123',
                source: 'InvitationScript',
                productSkus: ['KZVKCVnhmtCmOD99', 'sku_2'],
                products: [{
                    sku: 'KZVKCVnhmtCmOD99',
                    productUrl: 'https://your_shop.com/product/1',
                    imageUrl: 'https://your_shop.com/product/images/1',
                    name: 'test_product_1',
                }, {
                    sku: 'sku_2',
                    productUrl: 'https://your_shop.com/product/2',
                    imageUrl: 'https://your_shop.com/product/images/2',
                    name: 'test_product_2',
                }],
                locationId: 'location_1',
            };
            tp('createInvitation', trustpilot_invitation);
        });
    </script>
    <style>
        .text {
            color: #ffffff;
            font-size: 15px;
            padding: 30px 40px 50px 12px;
            top: 60px;
            width: 100%;
            text-align: center;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .columns {
            float: left;
            width: 33.3%;
            padding: 8px;
        }

        .price {
            list-style-type: none;
            border: 1px solid #eee;
            margin: 0;
            padding: 0;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .price:hover {
            box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.3)
        }

        .price .header {
            background-color: #111;
            color: white;
            font-size: 25px;
        }

        .price li {
            border-bottom: 1px solid #eee;
            padding: 20px;
            text-align: center;
        }

        .price .grey {
            background-color: #eee;
            font-size: 20px;
        }

        .button {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .columns {
                width: 100%;
            }
        }

        .main-header {
            padding-bottom: 0 !important;
        }
    </style>
</head>
<body class="cnt-home">

<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
    <?php include('includes/main-header.php'); ?>
    <?php include('includes/menu-bar.php'); ?>
</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content" id="top-banner-and-menu">
    <div id="hero" class="homepage-slider3">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="full-width-slider">
                <div class="item full-width-slider"
                     style="background-image: url(assets/images/sliders/slider4.jpg);">
                    <div class="text">
                        <h4 class="text-white text-uppercase mb-md-3">Free Tree for Connection </h4>
                        <h1 class="display-3 text-white mb-md-4">start from £10 Full Fiber
                            Connection</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Call for Order
                            +4402081236644</a>
                    </div>
                </div><!-- /.item -->
            </div><!-- /.full-width-slider -->
            <div class="full-width-slider">
                <div class="item" style="background-image: url(assets/images/sliders/slider1.jpg);">
                    <!-- /.container-fluid -->
                    <div class="text">
                        <h4 class="text-white text-uppercase mb-md-3">Free Tree for Connection </h4>
                        <h1 class="display-3 text-white mb-md-4">Start from £10 Full Fiber
                            Connection.</h1>
                        <a href="" style="color:#003366;font-size:16px;"
                           class="btn btn-primary py-md-3 px-md-5 mt-2">Call for Order
                            +4402081236644</a>
                    </div>
                </div><!-- /.item -->
            </div><!-- /.full-width-slider -->

            <div class="full-width-slider">
                <div class="item full-width-slider"
                     style="background-image: url(assets/images/sliders/slider2.jpg);">
                    <div class="text">
                        <h4 class="text-white text-uppercase mb-md-3">Free Tree for Connection </h4>
                        <h1 class="display-3 text-white mb-md-4">start from £10 Full Fiber
                            Connection</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Call for Order
                            +4402081236644</a>
                    </div>
                </div><!-- /.item -->
            </div><!-- /.full-width-slider -->
        </div><!-- /.owl-carousel -->
    </div>

    <!--Postcode Check-->
    <?php include 'includes/postcode-check.php' ?>

    <div class="container">
        <div class="furniture-container homepage-container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 homebanner-holder">


                    <!-- ========================================= SECTION – HERO : END ========================================= -->
                    <!-- ============================================== INFO BOXES ============================================== -->
                    <div class="info-boxes wow fadeInUp">
                        <div class="info-boxes-inner">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box bg-img-1">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="fa fa-podcast" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h4 class="info-box-heading green">Broadband deals</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">£10 a month then £15 for one year contract limited time only ,
                                            Ends 30 th April.</h6>
                                    </div>
                                </div><!-- .col -->

                                <div class="hidden-md col-sm-4 col-lg-4">
                                    <div class="info-box bg-img-2">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="fa fa-address-card" aria-hidden="true"></i>

                                            </div>
                                            <div class="col-xs-10">
                                                <h4 class="info-box-heading orange">Hyperfast</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">100 meg to upto 1Gb monthly plans available! </h6>
                                    </div>
                                </div><!-- .col -->

                                <div class="col-md-6 col-sm-4 col-lg-4">
                                    <div class="info-box bg-img-3">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="icon fa fa-"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h4 class="info-box-heading red">full fibre</h4>
                                            </div>
                                        </div>
                                        <h6 class="text">All of our plans are full fibre and come with unlimited
                                            data</h6>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- /.row -->
                        </div><!-- /.info-boxes-inner -->

                    </div><!-- /.info-boxes -->
                    <!-- ============================================== INFO BOXES : END ============================================== -->
                </div><!-- /.homebanner-holder -->
            </div><!-- /.row -->

            <!--Trustpilot-->
            <div style="margin-bottom: 40px;">
                <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad"
                     data-businessunit-id="61941a00c6072dd796ab14ad" data-style-height="24px"
                     data-style-width="100%" data-theme="light" data-min-review-count="10"
                     data-without-reviews-preferred-string-id="1" data-style-alignment="center">
                    <a href="https://uk.trustpilot.com/review/thamesoptic.com" target="_blank" rel="noopener">Trustpilot</a>
                </div>
            </div>

            <!--Service-->
            <div id="service" class="service-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-box-area">
                                <img src="assets/images/about-img.png" alt="">
                                <div class="overlay-service">
                                    <h4>Sole operator on <br> 5G growth path</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-box-area">
                                <img src="assets/images/2.png" alt="">
                                <div class="overlay-service">
                                    <h4>Dedicated Pure-Data <br> provider</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-box-area">
                                <img src="assets/images/3.png" alt="">
                                <div class="overlay-service">
                                    <h4>Triple-play services <br> on the go</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-box-area">
                                <img src="assets/images/4.png" alt="">
                                <div class="overlay-service">
                                    <h4>Capability of providing <br> 100mbs wirelessly</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="feature" class="feature-area pdt-125px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title mb-50px text-center">
                                <span>Features</span>
                                <h1>Why we are Special</h1>
                            </div>
                        </div>
                    </div>
                    <div class="feature-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-item mb-30px">
                                    <img src="assets/images/feature-1.png" alt="">
                                    <h4>Unlimited Package</h4>
                                    <p>Our iconic 1Gb package is over 18x faster than the UK’s average broadband</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-item mb-30px">
                                    <img src="assets/images/feature-2.png" alt="">
                                    <h4>Symmetrical speeds</h4>
                                    <p>You can upload just as fast as you download on our 150Mbps+ packages</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-item mb-30px">
                                    <img src="assets/images/feature-3.png" alt="">
                                    <h4>No price hikes</h4>
                                    <p>We don’t raise prices during commitment periods.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-item mb-30px">
                                    <img src="assets/images/feature-1.png" alt="">
                                    <h4>Stable Connections</h4>
                                    <p>Thamesoptic is a Internet Communications Ltd is a private broadband internet
                                        service
                                        provider with 12 years of experience.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-item mb-30px">
                                    <img src="assets/images/feature-5.png" alt="">
                                    <h4>Buffer Free Browsing</h4>
                                    <p>Full Fibre is our most reliable and fastest ever broadband. Built to power busy
                                        online homes it delivers incredible speeds up to 500Mb.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-item mb-30px">
                                    <img src="assets/images/feature-6.png" alt="">
                                    <h4>24/7 Customer Support</h4>
                                    <p>Calls of up to an hour to UK landlines beginning with 01, 02, 03, 0845 and 0870
                                        numbers made Monday-Friday 7pm to 7am and any time Saturday or Sunday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- price list start  here -->
            <div class="order">
                <div class="container">
                    <h2 style="text-align:center">Package Pricing List</h2>
                    <p style="text-align:center">Chose your best Package Free Tree for a Connection
                    <p>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">50 Mb</li>
                            <li class="grey"> £25 / month</li>
                            <li>Average download speed 57Mbps</li>
                            <li>Average upload speed 5.7Mbps</li>
                            <li>Minimum speed 50Mbps</li>
                            <li>Price will be £25 per month after the end of the 24-month minimum commitment.</li>
                            <li class="grey"><a href="login.php" class="button">Order</a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header" style="background-color:#111">150 Mb</li>
                            <li class="grey"> £35 / month</li>
                            <li>Average download speed 158Mbps</li>
                            <li>Average upload speed 158Mbps</li>
                            <li>Minimum speed 150Mbps</li>
                            <li>Price will be £35 per month after the end of the 24-month minimum commitment.</li>
                            <li class="grey"><a href="login.php" class="button">Order</a></li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">500 Mb</li>
                            <li class="grey">£50 / month</li>
                            <li>Average download speed 522Mbps</li>
                            <li>Average upload speed 528Mbps</li>
                            <li>Minimum speed 500Mbps</li>
                            <li>Price will be £50 per month after the end of the 24-month minimum commitment.</li>
                            <li class="grey"><a href="login.php" class="button">Order</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- price End here   -->

            <!-- ============================================== SCROLL TABS ============================================== -->

            <!-- ============================================== TABS : END ============================================== -->


            <?php include('includes/brands-slider.php'); ?>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        });
    </script>
    <script src="assets/js/jquery-1.11.1.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/echo.min.js"></script>
    <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- For demo purposes – can be removed on production -->

    <script src="switchstylesheet/switchstylesheet.js"></script>

    <script>
        $(document).ready(function () {
            $(".changecolor").switchstylesheet({seperator: "color"});
            $('.show-theme-options').click(function () {
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function () {
            $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
    <!-- For demo purposes – can be removed on production : End -->


</body>
</html>