<?php
include 'lib/function.php';
include 'admin/inc/admin.php';
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/dropdown.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/more_features.css" />
    <link rel="stylesheet" href="css/font-awesome.min.4.7.0.css" />

</head>

<body>

    <!-- Navber -->
    <!-- nav bar design for unlogged or un signed up user  -->
    <!-- navbar start from here  -->
    <div class="navbar" style="margin-top: -20px;">
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
                navbar_echo($_SESSION['username']);
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

    <!-- Breadcrumb -->
    <div class="container">
        <nav aria-label="breadcrumb mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <h3>Categories Marketplace </h3>
                </li>
            </ol>
        </nav>
    </div>
    <!-- Stop Breadcrumb -->

    <!-- table -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Digital products</th>
                </tr>
            </thead>
            <div class="container">
                <div class="col">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <?php
                                $data = GetAllCategory($conn);
                                for ($i = 0; $i < count($data); $i++) {
                                    if ($i % 4 == 0 && $i != 0) {
                                        echo '</tr><tr>';
                                    }
                                    echo '<td>' . $data[$i]['name'] . '</td>';
                                }
                                ?>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </table>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#2 Digital products</th>
                    </tr>
                </thead>
                <div class="container">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a href="#">Green Products</a></td>
                                    <td><a href="#">Home</a></td>
                                    <td><a href="#">Environment Protection</a></td>
                                    <td><a href="#">Garden</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Internet­marketing</a></td>
                                    <td><a href="#">E-Business</a></td>
                                    <td><a href="#">Job</a></td>
                                    <td><a href="#">Languages</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Personal development</a></td>
                                    <td><a href="#">Photography</a></td>
                                    <td><a href="#">Motion Picture</a></td>
                                    <td><a href="#">Services</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </table>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#3 Digital products</th>
                    </tr>
                </thead>
                <div class="container">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a href="#">Social Media</a></td>
                                    <td><a href="#">Software</a></td>
                                    <td><a href="#">Spiri­tua­lity and Esoterics</a></td>
                                    <td><a href="#">Sports</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Wordpress</a></td>
                                    <td><a href="#">Coaching / Consulting</a></td>
                                    <td><a href="#">Copywriting Services</a></td>
                                    <td><a href="#">JV / Launch Management</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </table>
    </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#4 Digital products</th>
                    </tr>
                </thead>
                <div class="container">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a href="#">Programming</a></td>
                                    <td><a href="#">Graphics</a></td>
                                    <td><a href="#">Video Creation</a></td>
                                    <td><a href="#">Social Media Management</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Support</a></td>
                                    <td><a href="#">Writing</a></td>
                                    <td><a href="#">SEO Services</a></td>
                                    <td><a href="#">Other</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </table>
    </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#5 Digital products</th>
                    </tr>
                </thead>
                <div class="container">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a href="#">Mark</a></td>
                                    <td><a href="#">Otto</a></td>
                                    <td><a href="#">mdo</a></td>
                                    <td><a href="#">twitter</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Jacob</a></td>
                                    <td><a href="#">Thornton</a></td>
                                    <td><a href="#">fat</a></td>
                                    <td><a href="#">twitter</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">twitter</a></td>
                                    <td><a href="#">twitter</a></td>
                                    <td><a href="#">twitter</a></td>
                                    <td><a href="#">twitter</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </table>
    </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#6 Digital products</th>
                    </tr>
                </thead>
                <div class="container">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a href="#">Mark</a></td>
                                    <td><a href="#">Otto</a></td>
                                    <td><a href="#">mdo</a></td>
                                    <td><a href="#">twitter</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Jacob</a></td>
                                    <td><a href="#">Thornton</a></td>
                                    <td><a href="#">fat</a></td>
                                    <td><a href="#">twitter</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">twitter</a></td>
                                    <td><a href="#">twitter</a></td>
                                    <td><a href="#">twitter</a></td>
                                    <td><a href="#">twitter</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </table>
    </div>
    </div>
    <!--Table stop -->


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