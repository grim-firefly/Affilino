<?php
include 'lib/function.php';
include 'admin/inc/admin.php';
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:index.php');
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


    <div class="container pt-5">
        <div class="header_text" style="text-align: center; margin:0 auto; font-size:18px; font-weight:bolder;">Add Product</div>

        <div class="form_header">
            <span class="right-line"></span>

        </div>
        <form action="" method="post" enctype='multipart/form-data' class="form__container col-6 offset-3 mt-3">
            <?php addProduct($conn, $username); ?>
            <table>
                <div class="form-group mb-2">
                    <tr>
                        <td>
                            <Label>Product name:</Label>
                        </td>
                        <td>
                            <input type="text" name="Pname" class="form-control">
                        </td>
                    </tr>
                </div>

                <div class="form-group mb-2">
                    <tr>
                        <td>
                            <Label>Product image:</Label>
                        </td>
                        <td>
                            <input type="file" name="pImg" class="form-control-file" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

                <div class="form-group mt-3">
                    <tr>
                        <td>
                            <Label>Download File:</Label>
                        </td>
                        <td>
                            <input type="file" name="files" class="form-control-file" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Category:</Label>
                        </td>
                        <td>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_id" required>
                                <option selected disabled>__Choose__</option>
                                <?php
                                $data = GetAllCategory($conn);
                                for ($i = 0; $i < count($data); $i++) {
                                    echo '<option value="' . $data[$i]['id'] . '">' . $data[$i]['name'] . '</option>';
                                }

                                ?>

                            </select>
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Regular Price:</Label>
                        </td>
                        <td>
                            <input type="text" name="pPrice" class="form-control" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Discount:</Label>
                        </td>
                        <td>
                            <input type="text" name="pdiscount" class="form-control" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Small Description:</Label>
                        </td>
                        <td>
                            <textarea name="smDescription" class="form-control" id="exampleFormControlFile1" cols="30" rows="3"></textarea>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Description:</Label>
                        </td>
                        <td>
                            <textarea name="Description" class="form-control" id="exampleFormControlFile1" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                </div>


            </table>

            <button type="submit" name="addProduct" class="btn btn-success  mt-3">
                <i class="fas fa-plus-circle"></i>
                Add Product
            </button>
            <a href="MyProduct.php" style="color: #fff;" class=" btn btn-warning mt-3">Cancel</a>
        </form>


    </div>

    <!-- Script -->
    <!-- bootstrap js files here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>


</body>

</html>