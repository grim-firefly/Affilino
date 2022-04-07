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
                $status="approved";
                if($role!="affliate")
                {
                    $status="pending";
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
                if ($flag && $row['status']=="approved") {
                    $_SESSION['username'] = $username;
                    $role = $row['role'];
                    $_SESSION['role'] = $role;
                    header('location:home.php');
                }
                else if($row['status']=="pending")
                {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is not approved yet!</div>';
                }
                else if($row['status']=="banned")
                {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is banned!</div>';
                }
                
                else {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Incorrect username or password!</div>';
                }
            } else if (mysqli_num_rows($result2) > 0) {
                // $row = $result2->fetch_row();
                $row = mysqli_fetch_assoc($result2);
                $hash = $row['password'];
                $flag = password_verify($pass, $hash);
                if ($flag && $row['status']=="approved") {
                    $user = $row['username'];
                    $_SESSION['username'] = $user;
                    header('location:home.php');
                }
                else if($row['status']=="pending")
                {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is not approved yet!</div>';
                }
                else if($row['status']=="banned")
                {
                    echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Your account is banned!</div>';
                }
                else {
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
        } else if($value=='affliate') {
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

function addProduct($username)
{
    if (isset($_POST['addProduct'])) {
        $Pname = $_POST['Pname'];

        $pImg_name = $_FILES['pImg']['name'];
        $pImg_tmp = $_FILES['pImg']['tmp_name'];

        $dImg_name = $_FILES['dImg']['name'];
        $dImg_tmp = $_FILES['dImg']['tmp_name'];

        $pCat = $_POST['pCat'];
        $pPrice = $_POST['pPrice'];
        $pdiscount = $_POST['pdiscount'];
        $pavailable = $_POST['pavailable'];

        if (empty($Pname) || empty($pImg_name) || empty($dImg_name) ||  empty($pCat) || empty($pPrice) || empty($pdiscount) || empty($pavailable)) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-warning" role="alert">No Field can\'t be Empty!</div>';

            return;
        }
        $pid =  uniqid();
        $sql = " INSERT INTO productlist( pid, username, pname, pimg, dimg, pcat, price, available, pdis) VALUES ('$pid','$username', '$Pname', '$pImg_name', '$dImg_name', '$pCat', '$pPrice', '$pavailable', '$pdiscount'  ) ";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if ($result) {
            move_uploaded_file($pImg_tmp, "productImg/Pimg/" . $pImg_name);
            move_uploaded_file($dImg_tmp, "productImg/Dimg/" . $dImg_name);
            echo '<script> location.replace("MyProduct.php"); </script>';
        }
    }
}
