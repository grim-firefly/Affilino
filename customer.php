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
    <title>Customer | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/customer.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />

</head>

<body>
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <div class="left_section ">
                <div class="logo main_menu">
                    <a href="home.php">Affilino</a>
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

    <!-- My customer
    <div class="container">
        <div style="font-size: 27px;font-weight: bolder;" class="mt-2 mb-1">My Customer</div>
        <div style="border-bottom: 2px solid #cccccc;" class="mb-4"></div>
    </div> -->

    <!-- my customer cards -->
    <div class="container mb-5 mt-3">
        <h3>My Customer</h3>
        <hr>
        <div class="__row">
            <div class="__card">
                <div class="card__header">
                    Customer Value
                    <h6 class="semi_card_header">
                        Average
                    </h6>
                </div>
                <div class="card__body">

                    <h5><span style="font-size: 30px;">৳</span> 160.00</h5>
                </div>
            </div>

            <div class="__card">
                <div class="card__header">
                    Purchases Per Customer
                    <h6 class="semi_card_header">
                        Average
                    </h6>
                </div>
                <div class="card__body">

                    <h5>1</h5>
                </div>
            </div>

            <div class="__card">
                <div class="card__header">
                    # Of Customers
                    <h6 class="semi_card_header">New / Returning</h6>

                </div>
                <div class="card__body">
                    <h5><span style="color: green;">1</span> / 2</h5>
                </div>
            </div>

            <div class="__card">
                <div class="card__header">
                    Customers
                    <h6 class="semi_card_header">
                        On A Recurring Plan
                    </h6>
                </div>
                <div class="card__body">

                    <h5>2</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- customer table  -->
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Purchases</th>
                    <th scope="col">Refunds</th>
                    <th scope="col">Recurring</th>
                    <th scope="col">Amount Spent</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Badsha Faysal</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                    <td>100</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Muhtad Mumin</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                    <td>220</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <th>Total</th>
                    <th>3</th>
                    <th>0</th>
                    <th><span style="font-size: 22px;">৳</span> 0.00</th>
                    <th><span style="font-size: 22px;">৳</span> 320.00</th>
                </tr>
            </tbody>
        </table>
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