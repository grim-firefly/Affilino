<?php
include 'lib/function.php';
include 'admin/inc/admin.php';
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
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
    <link rel="stylesheet" href="css/newProduct.css">

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
                    <div class="mm_menu"><a href="#">MarketPlace <i class="fas fa-angle-down nav_icon"></i></a></div>
                    <ul class="submenu">
                        <li><a href="home.php">Home</a></li>
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
    <div class="container mt-5">

        <div style=" position:relative;">
            <div class="header_text" style="text-align: center; margin:0 auto; font-size:18px; font-weight:bolder;">Product Details </div>
            <a href="MyProduct.php" style="position: absolute; left:0%; top:-5px;" class="btn btn-danger btn-sm mb-1">Go Back</a>
        </div>
        <span class="right-line"></span>
        <?php
        $data = getProduct($conn, $id);

        ?>
        <div class="row">
            <div class="col-8">
                <div class="name">
                    <div style="text-align: center;"> <b class="mb-2"> <?php echo $data['name']; ?></b> </div>
                    <p style="text-align: justify;"><b>Objective : </b> <?php echo $data['smDescription']; ?> </p>
                    <p style="text-align: justify;"><b>Description : </b> <?php echo $data['Description']; ?> </p>
                </div>
            </div>
            <div class="col-4">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="product/img/<?php echo $data['imgName'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BY <?php echo $username; ?></h5>
                        <p class="card-text"> Price <span class="badge badge-warning"><del> <?php echo $data['price'] ?> BDT</del> </span> <span class="badge badge-success"> <?php echo $data['discountPrice'] ?> BDT </span> </p>
                        <p class="card-text">Category : <?php echo categoryName($conn, $data['categoryId']) ?></p>
                        <p class="card-text">Category : <?php echo $data['createdTime'] ?></p>
                        <?php
                        echo '<a href="editProduct.php?id=' . $id . '" class="btn btn-sm btn-warning">Edit</a>';
                        echo '<a href="MyProduct.php?id=' . $id . '" class="btn btn-sm btn-danger ml-2">Delete</a>';
                        ?>
                    </div>
                </div>
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