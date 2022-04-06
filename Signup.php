<?php
include 'lib/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp | Affilino </title>
    <!-- bootstrap css files her -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- css files here -->
    <link rel="stylesheet" href="css/login_signup.css" />
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="../css/all.min.css" /> -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />

</head>

<body>
    <div class="sign_up mt-3">
        <p class="all_header">Affilino Signup</p>
        <form action="" method="POST">
            <?php
            signup();
            ?>
            <div class="input-group">
                <i class="fas fa-user-tie icons_signup"></i>
                <input type="text" name="username" class="input-box" placeholder="User Name" />
            </div>
            <div class="input-group">
                <i class="far fa-envelope icons_signup"></i>
                <input type="email" name="useremail" class="input-box" placeholder="Email" />
            </div>
            <div class="input-group">
                <i class="fas fa-unlock-alt icons_signup"></i>
                <input type="password" name="password" class="input-box" placeholder="Password" />
            </div>
            <div class="input-group">
                <i class="fas fa-unlock-alt icons_signup"></i>
                <input type="password" name="cpassword" class="input-box" placeholder="Confirm Password" />
            </div>


            <div class="input-group">
                <span class="mr-2">I am a </span>
                <label class="role mr-2">
                    <input type="radio" checked="checked" name="role" value="affliate">
                    <span class="checkmark"></span>
                    Affliate

                </label>
                <label class="role">

                    <input type="radio" name="role" value="vendor">
                    <span class="checkmark"></span>
                    Vendor
                </label>
            </div>
            <div class="already_account"><a href="login.php">Already have account?</a></div>
            <div class="already_account"><a href="index.php">Go Back To Home?</a></div>
            <input type="submit" class="sign-up-btn" name="signup-btn" value="Signup" />
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

</html>