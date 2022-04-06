<?php
include '../lib/function.php';
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin-Panel | Affilino</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>

<body>
    <!-- navbar start from here  -->
    <div class="navbar">
        <div class="container">
            <div class="left_section ">
                <div class="logo main_menu">
                    <a href="index.php">Affilino</a>
                </div>
                <div class="main_menu">
                    <div class="mm_menu"><a href="#">MarketPlace <i class="fas fa-angle-down nav_icon"></i></a></div>
                    <ul class="submenu">
                        <li><a href="category.php">Catagory</a></li>
                        <li><a href="launch_date.php">Launch Date</a></li>

                    </ul>

                </div>
                
                <div class="main_menu">
                    <div class="mm_menu"> <a href="#">User <i class="fas fa-angle-down nav_icon"></i></a></div>
                    <ul class="submenu">
                        <li><a href="Sales_Dashboard.php">Affliate</a></li>
                        <li><a href="#">Vendor</a></li>
                    </ul>

                </div>
                <div class="main_menu">
                    <div class="mm_menu"><a href="#">Product</a></div>
                    <!-- <ul class="submenu">
                    <li><a href="#">Product</a></li>'

                    </ul> -->

                </div>

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
















    <!-- bootstrap js files here -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/font_awesome.min.js"></script>
</body>

</html>