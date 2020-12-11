<?php
include 'lib/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password | Affilino</title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/login_signup.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
</head>

<body>
    <div class="sign_up mt-3">
        <p class="all_header">Forgot Password</p>
        <form action="" method="post">
            <div class="input-group">
                <i class="far fa-envelope icons_signup"></i>
                <input type="email" name="user-email" class="input-box" placeholder="Enter your Email" />
            </div>
            <input type="submit" class="sign-up-btn" name="" value="Submit" />

        </form>

    </div>

    <!-- bootstrap js files here -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/font_awesome.min.js"></script>
</body>

</html>