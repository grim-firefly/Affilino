<?php
include 'lib/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/login_signup.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
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
            login();
            ?>
            <div class="input-group">
                <i class="fas fa-user-tie icons_signup"></i>
                <input type="text" name="username" class="input-box" placeholder="Username or Email" />
            </div>
            <div class="input-group">
                <i class="fas fa-unlock-alt icons_signup"></i>
                <input type="password" name="password" class="input-box" placeholder="Password" />
            </div>

            <div class="toggle_option">
                <div class="create_new_account"><a href="Signup.php">Create a new account?</a></div>
                <div class="forget_password"><a href="forget.php">Forgot Password?</a></div>
            </div>
            <div class="already_account"><a href="index.php">Return Home</a></div>

            <input type="submit" class="sign-up-btn" name="login-btn" value="Login" />

        </form>
        <p>Or Connect Using</p>
        <div class="alternative_signup">
            <div class="others_method facebook"><a href="#"> <i class=" fab fa-facebook-f api_method"></i></a></div>
            <div class="others_method twitter"><a href="#"><i class=" fab fa-twitter api_method"></i></a></div>
            <div class="others_method google"><a href="#"> <i class=" fab fa-google api_method"></i></a></div>
        </div>

    </div>

    <!-- bootstrap js files here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>
</body>