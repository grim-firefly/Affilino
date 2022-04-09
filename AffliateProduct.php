<?php
include 'lib/function.php';
include 'admin/inc/admin.php';
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:index.php');
}
$id = getUserId($conn, $_SESSION['username']);

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
    <link rel="stylesheet" href="css/newProduct.css">

    <style>
        .right-line {
            width: 100%;
            display: block;
            height: 25px;
            margin-top: 3px;
            background: #777;
            margin-top: 30px;
        }
    </style>
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

    <div class="container mt-2">
        <div class="header_text" style="text-align: center;  margin:0 auto;margin-top:30px; font-size:18px; font-weight:bolder;">All Products</div>

        <div class="form_header">
            <span class="right-line mb-3"></span>

        </div>
        <div class="row">
            <div class="card-deck">

                <?php
                $data = allProduct($conn, "approved");
                for ($i = 0; $i < count($data); $i++) {
                    if ($i % 3 == 0 && $i != 0) {
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="row">';
                        echo '<div class="card-deck">';
                    }
                    echo '<div class="card" style="height:450px; margin-top:10px;">';
                    echo '<img class="card-img-top" style="height:200px" src="product/img/' . $data[$i]['imgName'] . '" alt="Card image cap">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title"> ' . $data[$i]['name'] . '</h5>';
                    echo '<h5 class="card-text">BY ' . $username . '</h5>';
                    echo '<p class="card-text"> Price <span class="badge badge-warning"><del> ' . $data[$i]['price'] . 'BDT</del> </span> <span class="badge badge-success">' . $data[$i]['discountPrice'] . ' BDT </span> </p>';
                    echo '<p class="card-text">Category :' . categoryName($conn, $data[$i]['categoryId']) . '</p>';
                    echo '<p class="card-text">CreatedTime :' . $data[$i]['createdTime'] . '</p>';
                    echo '<a href="productDetails.php?id=' . $data[$i]['id'] . '" class="btn btn-sm btn-info">View</a>';

                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

        </div>
    </div>












    <!-- Script -->
    <!-- bootstrap js files here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>


</body>

</html>