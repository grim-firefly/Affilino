<?php
session_start();
$host = 'localhost';
$user = 'root';
$host_pass = '';
$db_name = 'affilino';
$conn = new mysqli($host, $user, $host_pass, $db_name);


function signup()
{
    // echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>';
    if (isset($_POST['signup-btn'])) {
        $username = $_POST['username'];
        $email = $_POST['useremail'];
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
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
                $qinsert = "INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$username','$pass','$email')";
                mysqli_query($conn, $qinsert);
                $_SESSION['massage'] = '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-success" role="alert">Successfully Registerd!</div>';
                header('location:login.php');
            }
        }
    }
}



function login()
{
    if (isset($_POST['login-btn'])) {
        // unset($_SESSION['massage']);
        $username = $_POST['username'];
        $email = $_POST['username'];
        $pass = md5($_POST['password']);
        if (empty($username) || empty($pass)) {
            echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">No field can\'t be empty!</div>';
        } else {
            global $conn;
            $qusername = "SELECT * FROM user WHERE username='$username' AND password='$pass'";
            $quseremail = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
            $result = mysqli_query($conn, $qusername);
            $result2 = mysqli_query($conn, $quseremail);
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $username;
                header('location:home.php');
            } else if (mysqli_num_rows($result2) > 0) {
                // $row = $result2->fetch_row();
                $row = mysqli_fetch_assoc($result2);
                $user = $row['username'];
                $_SESSION['username'] = $user;
                header('location:home.php');
            } else {
                echo '<div style="margin-bottom:0px; margin-top:-5px" class="alert alert-danger" role="alert">Incorrect username or password!</div>';
            }
        }
    }
}
