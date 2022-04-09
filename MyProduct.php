<?php
include 'lib/function.php';
include 'admin/inc/admin.php';
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:index.php');
}
if (isset($_GET['id'])) {
    removeProduct($conn, $_GET['id'], $username);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Product | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- jquery css -->
    <!-- css files here -->
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/myproduct.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
</head>

<body>

    <!-- navbar start -->
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
                    <div class="mm_menu"><a href="#"><?php echo $username; ?> <i class="fas fa-angle-down nav_icon"></i></a></div>

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

    <!-- product heading -->
    <div class="container mt-2 mb-3">
        <div class="product-heading">

            <div class="p-heading-title ">My Products</div>
            <div class="new_product_add"><a href="newproduct.php"><i class="fas fa-plus-circle"></i> New Product</a></div>
        </div>
    </div>
    <!-- straight line -->
    <div class="container mt-2 mb-2">
        <div class="straigt-line">

        </div>
    </div>


    <!-- select date design -->

    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Creted TIme</th>
                    <th scope="col">status</th>

                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $data = getAllProduct($conn, $username);
                for ($i = 0; $i < count($data); $i++) {
                    echo '<tr>';
                    echo '<td>' . $data[$i]['id'] . '</td>';
                    echo '<td>' . $data[$i]['name'] . '</td>';
                    echo '<td>' . categoryName($conn, $data[$i]['categoryId']) . '</td>';
                    echo '<td>' . $data[$i]['discountPrice'] . '</td>';
                    echo '<td>' . $data[$i]['createdTime'] . '</td>';
                    echo '<td>' . $data[$i]['status'] . '</td>';
                    echo '<td>';
                    echo '<a href="productDetails.php?id=' . $data[$i]['id'] . '" class="btn btn-sm btn-info">View</a>';
                    echo '<a href="editProduct.php?id=' . $data[$i]['id'] . '" class="btn btn-sm btn-warning">Edit</a>';
                    echo '<a href="MyProduct.php?id=' . $data[$i]['id'] . '" class="btn btn-sm btn-danger">Delete</a>';
                    echo '</td>';

                    echo '</tr>';
                }

                ?>


            </tbody>
        </table>
    </div>



    <div class="container">
        <table>
            <tr>

            </tr>
        </table>
    </div>



















    <!-- footer design -->
    <footer class="site-footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Time is money - so we provide all of the tools necessary to quickly and
                        easily sell
                        and deliver your products instantly to customers worldwide.
                        Jumpstart your success by utilizing our army of marketing partners to generate sales to your own
                        digital
                        products and services without the headache.
                        Thousands of educational and software products to help you grow your own business and/or promote
                        as an
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
    </footer>
    <!-- bootstrap js files here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>


</body>

</html>