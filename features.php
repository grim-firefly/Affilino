<?php
include 'lib/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Features | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/more_features.css" />
    <link rel="stylesheet" href="css/font-awesome.min.4.7.0.css" />

</head>

<body>

    <!-- Navber -->
    <!-- nav bar design for unlogged or un signed up user  -->
    <div class="nav_bar" style="margin-top: -20px;">
        <div class="container">
            <div class="nav">
                <div class="logo">Affilino</div>
                <div>
                    <div class="nav_link"><a class="link_a" href="home.php">Home</a></div>
                    <div class="nav_link"><a class="link_a" href="features.php">Features</a></div>
                    <?php
                    if (!isset($_SESSION['username'])) {
                        echo ' <div class="nav_link"><a class="link_a" href="login.php">Login</a></div>';
                        echo ' <div class="nav_link"><a class="colorful_signup" href="Signup.php">Free Signup</a></div>';
                    }
                    ?>
                    <!-- <div class="nav_link"><a class="link_a" href="login.php">Login</a></div> -->
                    <!-- <div class="nav_link"><a class="colorful_signup" href="Signup.php">Free Signup</a></div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive images -->

    <img src="image/features.png" class="img-fluid" alt="...">

    <div class="container mb-5">
    </div>
    <div class="container mb-5">

        <div class="row">
            <div class="col">
                <div class="card-body">
                    <p class="card-text">
                        <h1>Limitless Sales Funnels</h1>
                        <p></p>At WarriorPlus, we don’t believe in limits. No matter how many products or pages you have in
                        your
                        offer, we’ve got you covered. You can do it all...
                    </p>
                    <ul>
                        <li>- Unlimited Upsells and Downsells</li>
                        <li>- Unlimited Products per Page</li>
                        <li>- Multiple Payment Providers</li>
                        <li>- Dynamic Pricing</li>
                        <li>- Split Tests</li>
                    </ul>
                    <p>quickly integrate with email services, membership sites, custom software, and a lot more. We
                        handle all the tech behind the scenes, so you don’t have to.</p>
                    <div class="nav_link"><a class="colorful_signup" href="html/Signup.html">GET STARTED</a></div>
                </div>
            </div>
            <div class="col">
                <img src="image/features_image1.png" class="card-img-top" width="100%" alt="...">
            </div>
        </div>
    </div>
    </div>

    <!--container 2-->
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <img src="image/features_image2.png" class="card-img-top" width="100%" alt="...">
            </div>
            <div class="col">
                <div class="card-body">
                    <p class="card-text">
                        <h1>Tracking, Stats, Pixels... Oh My!</h1>
                        With our powerful, multi-faceted tracking system, both Vendors and Affiliates can track just about
                        everything! Track clicks, hops, sales, specific leads, and a whole lot more. Our members tell us
                        that WarriorPlus has the best stats & tracking features and capabilities. That makes us proud.
                        <ul>
                            <li>- Easily add sub IDs to your Vendor and/or Affiliate links, allowing you to better
                                understand your traffic sources and how they convert</li>
                            <li>- Track unique leads across the purchase process, seeing when they click, start checkout and
                                complete their purchase. Both Vendors and Affiliates can know exactly who is purchasing from
                                them, how often they visit, and more...</li>
                        </ul>
                    </p>
                    <div class="nav_link"><a class="colorful_signup" href="../html/Signup.html">GET STARTED</a></div>
                </div>
            </div>
        </div>
    </div>

    <!--container 2-->
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card-body">
                    <p class="card-text">
                        <h3>Know Your Customers</h3>
                        Your data, when you need it. Manage your customers, buyers and subscribers easily. See an overview
                        of your stats and hone in wherever needed. See exactly what your customers are buying, how much they
                        spend, your average customer value, and more... It’s your data and it should be easy for you to
                        access. That’s our goal.
                    </p>
                    <div class="nav_link"><a class="colorful_signup" href="html/Signup.html">GET STARTED</a></div>
                </div>
            </div>
            <div class="col">
                <img src="image/features_image3.png" class="card-img-top" width="100%" alt="...">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <img src="image/features_image4.png" class="card-img-top" width="100%" alt="...">
            </div>
            <div class="col">
                <div class="card-body">
                    <p class="card-text">
                        <h1>Tracking, Stats, Pixels... Oh My!</h1>
                        With our powerful, multi-faceted tracking system, both Vendors and Affiliates can track just about
                        everything! Track clicks, hops, sales, specific leads, and a whole lot more. Our members tell us
                        that WarriorPlus has the best stats & tracking features and capabilities. That makes us proud.
                        <ul>
                            <li>- Easily add sub IDs to your Vendor and/or Affiliate links, allowing you to better
                                understand your traffic sources and how they convert</li>
                            <li>- Track unique leads across the purchase process, seeing when they click, start checkout and
                                complete their purchase. Both Vendors and Affiliates can know exactly who is purchasing from
                                them, how often they visit, and more...</li>
                        </ul>
                    </p>
                    <div class="nav_link"><a class="colorful_signup" href="html/Signup.html">GET STARTED</a></div>
                </div>
            </div>
        </div>
    </div>


    <!-- More Features -->
    <div class="container mb-5">
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <section class="container pt-3 mb-3">
        <h2 class="h3 block-title text-center">Even More Features</h2>
        <div class="row pt-5 mt-30">
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user fa-3x head-icon"></i>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Vendor Profiles</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user-circle-o fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1"> Pre-Launch</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-address-book fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Easy Ad Placement</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-icon"></i>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Launch Calendar</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Purchase History</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-image fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Coupon Codes</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- our patner -->
    <div class="container text-center">
        <h2 class="h3 block-title text-center">Our Partners</h2>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img src="image/Partners_1.png" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 1</p>
            </div>
            <div class="col-sm-2">
                <img src="image/Partners_2.png" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 2</p>
            </div>
            <div class="col-sm-2">
                <img src="image/Partners_3.png" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 3</p>
            </div>
            <div class="col-sm-2">
                <img src="image/Partners_4.png" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 4</p>
            </div>
            <div class="col-sm-2">
                <img src="image/Partners_5.png" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 5</p>
            </div>
            <div class="col-sm-2">
                <img src="image/Partners_6.png" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 6</p>
            </div>
        </div>
    </div><br>


    <!--footer-->
    <footer class="site-footer">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">Time is money - so we provide all of the tools necessary to quickly and
                            easily
                            sell
                            and deliver your products instantly to customers worldwide.
                            Jumpstart your success by utilizing our army of marketing partners to generate sales to your
                            own
                            digital
                            products and services without the headache.
                            Thousands of educational and software products to help you grow your own business and/or
                            promote as an
                            affiliate - our marketplace has you covered.
                        </p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <!-- <h6>Categories</h6> -->
                        <ul class="footer-links">
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Contribute</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">All developed by
                            <a href="#">Dream Developers</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>
</body>

</html>