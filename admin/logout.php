<?php
session_start();
$isLogOut = $_GET['isLogout'];

if ($isLogOut == 1) {
    session_unset();
    session_destroy();
    header('location:../index.php');
}
