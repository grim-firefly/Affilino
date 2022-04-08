<?php
session_start();
$host = 'localhost';
$user = 'root';
$host_pass = '';
$db_name = 'affilino';
$conn = new mysqli($host, $user, $host_pass, $db_name);
//signups
function signup()
{
    // echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>';
    if (isset($_POST['signup-btn'])) {
        $username = $_POST['username'];
        $email = $_POST['useremail'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];
        $role = $_POST['role'];
        if (empty($username) || empty($email) || empty($pass) || empty($cpass)) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">No field can\'t be empty!</div>';
        } else if ($pass != $cpass) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Password not Matched!</div>';
        } else {
            global $conn;
            $qusername = "SELECT `username` FROM `user` WHERE `username`='$username'";
            $quseremail = "SELECT `email` FROM `user` WHERE `email`='$email'";
            $result = mysqli_query($conn, $qusername);
            $result2 = mysqli_query($conn, $quseremail);
            if (mysqli_num_rows($result) > 0 or mysqli_num_rows($result2) > 0) {
                echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">username or email is already taken!</div>';
            } else {
                // echo "$pass";
                $e_pass = password_hash($pass, PASSWORD_BCRYPT);
                $status = "approved";
                if ($role != "affliate") {
                    $status = "pending";
                }
                $qinsert = "INSERT INTO `user`(`username`, `password`, `email`,`role`,`status`,`createdtime`) VALUES ('$username','$e_pass','$email','$role','$status',Now() )";
                mysqli_query($conn, $qinsert);
                $_SESSION['massage'] = '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-success" role="alert">Successfully Registerd!</div>';
                header('location:login.php');
            }
        }
    }
}

//authorization
function login()
{
    if (isset($_POST['login-btn'])) {
        $username = $_POST['username'];
        $email = $_POST['username'];
        $pass = $_POST['password'];
        if (empty($username) || empty($pass)) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">No field can\'t be empty!</div>';
        } else {
            global $conn;
            $qusername = "SELECT * FROM user WHERE username='$username'";
            $quseremail = "SELECT * FROM user WHERE email='$email'";
            $result = mysqli_query($conn, $qusername);
            $result2 = mysqli_query($conn, $quseremail);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $hash = $row['password'];
                $flag = password_verify($pass, $hash);
                if ($flag && $row['status'] == "approved") {
                    $_SESSION['username'] = $username;
                    $role = $row['role'];
                    $_SESSION['role'] = $role;
                    header('location:home.php');
                } else if ($row['status'] == "pending") {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is not approved yet!</div>';
                } else if ($row['status'] == "banned") {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is banned!</div>';
                } else {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Incorrect username or password!</div>';
                }
            } else if (mysqli_num_rows($result2) > 0) {
                // $row = $result2->fetch_row();
                $row = mysqli_fetch_assoc($result2);
                $hash = $row['password'];
                $flag = password_verify($pass, $hash);
                if ($flag && $row['status'] == "approved") {
                    $user = $row['username'];
                    $_SESSION['username'] = $user;
                    header('location:home.php');
                } else if ($row['status'] == "pending") {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is not approved yet!</div>';
                } else if ($row['status'] == "banned") {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is banned!</div>';
                } else {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Incorrect username or password!</div>';
                }
            } else {
                echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Incorrect username or password!</div>';
            }
        }
    }
}

//navbar for diffrent roles

function navbar_echo($value)
{
    if (isset($value)) {
        if ($value == 'vendor') {
            echo '<div class="main_menu">';
            echo '<div class="mm_menu"><a href="#">Vendor <i class="fas fa-angle-down nav_icon"></i></a></div>';
            echo '<ul class="submenu">';
            echo '<li><a href="Sales_Dashboard.php">Dashboard</a></li>';
            echo '<li><a href="MyProduct.php">My Product</a></li>';
            echo '<li><a href="customer.php">Customer</a></li>';
            echo '';
            echo '</ul>';
            echo '';
            echo '</div>';
        } else if ($value == 'affliate') {
            echo '<div class="main_menu">';
            echo '<div class="mm_menu"> <a href="home.php">Affiliate <i class="fas fa-angle-down nav_icon"></i></a></div>';
            echo '<ul class="submenu">';
            echo '<li><a href="Sales_Dashboard.php">Dashboard</a></li>';
            echo '<li><a href="#">Offers</a></li>';
            echo '<li><a href="launch_date.php">Launch Date</a></li>';
            echo '</ul>';
            echo '';
            echo '</div>';
        }
    }
}
//get user id
function getUserId($conn, $username)
{
    $sqlq = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sqlq);
    $row = mysqli_fetch_assoc($result);
    return $row['id'];
}
//upload product
function addProduct($conn, $username)
{
    if (isset($_POST['addProduct'])) {
        $userid = getUserId($conn, $username);
        $Pname = $_POST['Pname'];
        $catogoryid = $_POST['category_id'];
        $pPrice = $_POST['pPrice'];
        $pdiscount = $_POST['pdiscount'];
        $smDescription = $_POST['smDescription'];
        $Description = $_POST['Description'];

        $pImg = $_FILES['pImg']['name'];
        $pImg_ext = pathinfo($pImg, PATHINFO_EXTENSION);
        $pImg_name = uniqid('P', true) . '.' . $pImg_ext;
        // $pImg_tmp = $_FILES['pImg']['tmp_name'];

        $files = $_FILES['files']['name'];
        $files_ext = pathinfo($pImg, PATHINFO_EXTENSION);
        $files_name = uniqid('F', true) . '.' . $files_ext;
        // $dImg_tmp = $_FILES['files']['tmp_name'];
        if (empty($Pname) || empty($pImg_name) || empty($files) ||  empty($catogoryid) || empty($pPrice) || empty($pdiscount)) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-warning" role="alert">No Field can\'t be Empty!</div>';

            return;
        }

        $sqlq = "INSERT INTO product(name,price,discountPrice,smDescription,Description,userId,categoryId,imgName,fileName,createdTime,status)
        VALUES('$Pname','$pPrice','$pdiscount','$smDescription','$Description','$userid','$catogoryid','$pImg_name','$files_name',now(),'pending')";
        $result = mysqli_query($conn, $sqlq);
        if ($result) {
            move_uploaded_file($_FILES['pImg']['tmp_name'], 'product/img/' . $pImg_name);
            move_uploaded_file($_FILES['files']['tmp_name'], 'product/files/' . $files_name);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo '<strong>Success!!</strong>Product Added Successfully.';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
            echo '<strong>Error!!</strong>Something went wrong.';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        }
    }
}
//get all product by user id
function getAllProduct($conn, $username)
{
    $userid = getUserId($conn, $username);
    $sqlq = "SELECT * FROM product WHERE userId='$userid'";
    $result = mysqli_query($conn, $sqlq);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}
//delete product
function removeProduct($conn, $id, $username)
{
    $userid = getUserId($conn, $username);
    $sqlq = "SELECT * FROM product WHERE id='$id' AND userId='$userid'";
    $result = mysqli_query($conn, $sqlq);
    $row = mysqli_fetch_assoc($result);
    $imgName = $row['imgName'];
    $files_name = $row['fileName'];
    if (file_exists('product/img/' . $imgName)) {
        unlink('product/img/' . $imgName);
    }
    if (file_exists('product/files/' . $files_name)) {
        unlink('product/files/' . $files_name);
    }
    $sqlq = "DELETE FROM product WHERE id='$id' AND userId='$userid'";
    $result = mysqli_query($conn, $sqlq);
}

//get single product
function getProduct($conn, $id)
{
    $sqlq = "SELECT * FROM product WHERE id='$id'";
    $result = mysqli_query($conn, $sqlq);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
//update product
function updateProduct($conn, $id)
{
    
    if (isset($_POST['updateProduct'])) {
        $prev=getProduct($conn,$id);

        $Pname = $_POST['Pname'];
        $catogoryid = $_POST['category_id'];
        $pPrice = $_POST['pPrice'];
        $pdiscount = $_POST['pdiscount'];
        $smDescription = $_POST['smDescription'];
        $Description = $_POST['Description'];

        $pImg = $_FILES['pImg']['name'];
        $pImg_ext = pathinfo($pImg, PATHINFO_EXTENSION);
        $pImg_name = uniqid('P', true) . '.' . $pImg_ext;
        // $pImg_tmp = $_FILES['pImg']['tmp_name'];

        $files = $_FILES['files']['name'];
        $files_ext = pathinfo($pImg, PATHINFO_EXTENSION);
        $files_name = uniqid('F', true) . '.' . $files_ext;
        // $dImg_tmp = $_FILES['files']['tmp_name'];
        if (empty($Pname) ||  empty($catogoryid) || empty($pPrice) || empty($pdiscount)) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-warning" role="alert">No Field can\'t be Empty!</div>';

            return;
        }
        if(empty($pImg)){
            $pImg=$prev['imgName'];
        }
        if(empty($files)){
            $files=$prev['fileName'];
        }
        // $sqlq = "INSERT INTO product(name,price,discountPrice,smDescription,Description,categoryId,imgName,fileName,createdTime,status)
        // VALUES('$Pname','$pPrice','$pdiscount','$smDescription','$Description','$catogoryid','$pImg_name','$files_name',now(),'pending')";
        $sqlq="UPDATE product SET name='$Pname',price='$pPrice',discountPrice='$pdiscount',smDescription='$smDescription',Description='$Description',categoryId='$catogoryid',imgName='$pImg_name',fileName='$files_name' WHERE id='$id'";
        $result = mysqli_query($conn, $sqlq);
        if ($result) {
            move_uploaded_file($_FILES['pImg']['tmp_name'], 'product/img/' . $pImg_name);
            move_uploaded_file($_FILES['files']['tmp_name'], 'product/files/' . $files_name);
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo '<strong>Success!!</strong>Product Updated Successfully.';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
            echo '<strong>Error!!</strong>Something went wrong.';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
        }
    }
}
