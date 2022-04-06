<?php
include '../lib/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="../css/login_signup.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
</head>

<body>
    <div class="sign_up mt-3">
        <p class="all_header">Affilino Login</p>
        <form action="" method="post">

            <?php
            if (isset($_SESSION['massage'])) {
                echo $_SESSION['massage'];
                unset($_SESSION['massage']);
            }
            admin_login();
            ?>
            <div class="input-group">
                <i class="fas fa-user-tie icons_signup"></i>
                <input type="text" name="username" class="input-box" placeholder="Username or Email" />
            </div>
            <div class="input-group">
                <i class="fas fa-unlock-alt icons_signup"></i>
                <input type="password" name="password" class="input-box" placeholder="Password" />
            </div>

            <input type="submit" class="sign-up-btn" name="login-btn" value="Login" />

        </form>
      

    </div>

    <!-- bootstrap js files here -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/font_awesome.min.js"></script>
</body>