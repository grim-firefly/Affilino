<?php
include 'lib/function.php';
if (!isset($_SESSION['username'])) {
  header('location:index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dashboard | Affilino</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <!-- css files here -->
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/dropdown.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<body>
  <!-- navbar start from here  -->
  <div class="navbar">
    <div class="container">
      <div class="left_section ">
        <div class="logo main_menu">
          <a href="home.php">Affilno</a>
        </div>
        <div class="main_menu">
          <div class="mm_menu"><a href="#">MarketPlace <i class="fas fa-angle-down nav_icon"></i></a></div>
          <ul class="submenu">
            <li><a href="home.php">Home</a></li>
            <li><a href="dashboard.php">Top product</a></li>
            <li><a href="category.php">Catagory</a></li>

          </ul>

        </div>
        <div class="main_menu">
          <div class="mm_menu"><a href="#">Vendor <i class="fas fa-angle-down nav_icon"></i></a></div>
          <ul class="submenu">
            <li><a href="Sales_Dashboard.php">Dashboard</a></li>
            <li><a href="MyProduct.php">My Product</a></li>
            <li><a href="customer.php">Customer</a></li>

          </ul>

        </div>
        <div class="main_menu">
          <div class="mm_menu"> <a href="home.php">Affiliate <i class="fas fa-angle-down nav_icon"></i></a></div>
          <ul class="submenu">
            <li><a href="Sales_Dashboard.php">Dashboard</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="launch_date.php">Launch Date</a></li>
          </ul>

        </div>
      </div>
      <div class="right_section">
        <div class="notify"> <a href="#"><i class="fas fa-bell nav_icon"></i></a></div>
        <div class="username">
          <div class="mm_menu"><a href="#"><?php echo $_SESSION['username']; ?> <i class="fas fa-angle-down nav_icon"></i></a></div>
          
          <ul class="submenu">
            <li><a class="pl-2" href="#"><i class="fas fa-heart"></i> Favourite</a></li>
            <li><a class="pl-2" href="#"><i class="fas fa-history"></i> Histroy</a></li>
            <li><a class="pl-2" href="#"><i class="fas fa-wallet"></i> Wallet</a></li>
            <li><a class="pl-2" href="#"><i class="fas fa-user-tie"></i> My Account</a></li>
            <li><a class="pl-2"  href="logout.php?isLogout=1"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
          </ul>

        </div>

      </div>
    </div>
  </div>

  <!-- Breadcrumb -->
  <div class="container">
    <nav aria-label="breadcrumb mb-5">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Top Products</li>
      </ol>
    </nav>
  </div>
  <!-- button start from here -->
  <div class="container">
    <a href="" class="btn btn-secondary">Today</a>
    <a href="" class="btn btn-secondary">Yesterday</a>
    <a href="" class="btn btn-secondary">Last 7 Days</a>
    <a href="" class="btn btn-secondary">Last 30 Days</a>
  </div>


  <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product / Vendor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>STACKER - $2 GRAND MID LAUNCH CONTEST STARTS TODAY AT 9 AM EST</li>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>ProfitDrive * Deal of the Week *</td>
        <tr>
          <th scope="row">3</th>
          <td>Morbi leo risus</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>STACKER - $2 GRAND MID LAUNCH CONTEST STARTS TODAY AT 9 AM EST</li>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>ProfitDrive * Deal of the Week *</td>
        <tr>
          <th scope="row">6</th>
          <td>Morbi leo risus</td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>STACKER - $2 GRAND MID LAUNCH CONTEST STARTS TODAY AT 9 AM EST</li>
          </td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>ProfitDrive * Deal of the Week *</td>
        <tr>
          <th scope="row">9</th>
          <td>Morbi leo risus</td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Morbi leo risus</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--stop list item -->
  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Time is money - so we provide all of the tools necessary to quickly and easily sell
            and deliver your products instantly to customers worldwide.
            Jumpstart your success by utilizing our army of marketing partners to generate sales to your own digital
            products and services without the headache.
            Thousands of educational and software products to help you grow your own business and/or promote as an
            affiliate - our marketplace has you covered.
          </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <!-- <h6>Categories</h6> -->
          <ul class="footer-links">
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contribute</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">All developed by
            <a href="#">Dream Developers</a>
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- bootstrap js files here -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/font_awesome.min.js"></script>
</body>

</html>