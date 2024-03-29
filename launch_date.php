<?php
include 'lib/function.php';
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Launch Calender | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />

    <style>
        .wow_calender {
            /* border-bottom: 1px solid #cccccc; */
            box-shadow: 0px 0px 25px #cccccc;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <div class="left_section ">
                <div class="logo main_menu">
                    <a href="#">Affilino</a>
                </div>
                <div class="main_menu">
                    <div class="mm_menu"><a href="AffliateProduct.php">MarketPlace <i class="fas fa-angle-down nav_icon"></i></a></div>
                    <ul class="submenu">
                        <li><a href="AffliateProduct.php">Home</a></li>
                        <li><a href="dashboard.php">Top product</a></li>
                        <li><a href="category.php">Catagory</a></li>

                    </ul>

                </div>
                <?php
                   navbar_echo($_SESSION['role']);
                ?>
            </div>
            <div class="right_section">
                <div class="notify"> <a href="#"><i class="fas fa-bell nav_icon"></i></a></div>
                <div class="username">
                    <div class="mm_menu"><a href="#"><?php echo $_SESSION['username']; ?> <i class="fas fa-angle-down nav_icon"></i></a></div>

                    <ul class="submenu">
                        <li><a class="pl-2" href="#"><i class="fas fa-heart"></i> Favourite</a></li>
                        <li><a class="pl-2" href="#"><i class="fas fa-history"></i> Histroy</a></li>
                        <li><a class="pl-2" href="#"><i class="fas fa-wallet"></i> Wallet</a></li>
                        <li><a class="pl-2" href="#"><i class="fas fa-user-tie"></i> My Account</a></li>
                        <li><a class="pl-2" href="logout.php?isLogout=1"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <!-- google calender launch date -->
    <div class="container mt-3">
        <div style="font-size: 27px;font-weight: bolder;" class="mt-2 mb-1">Launch Calendar</div>
        <div style="border-bottom: 2px solid #cccccc;" class="mb-4"></div>
        <iframe class="wow_calender" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FDhaka&amp;src=aGM4bmo2aWlqcjIycjNuamFnZDZlcDNlYWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4uYmQjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2xhc3Nyb29tMTAzODUwMzg3NzYzNjEyNzk5NjIxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23EF6C00&amp;color=%230B8043&amp;color=%23202124" width="100%" height="550" frameborder="0" scrolling="no"></iframe>
    </div>
    <!-- footer  -->
    <footer class="site-footer mt-5">
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
    <!-- bootstrap js files here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>
</body>

</html>