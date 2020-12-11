<?php
include 'lib/function.php';
if (!isset($_SESSION['username'])) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home | Affilino</title>

  <!----------CSS-------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!----------CSS-------------->


  <!----------CUSTOM CSS-------------->

  <link rel="stylesheet" href="css/index.css">

  <!----------CUSTOM CSS END-------------->

</head>

<body>

  <div class="LandingpageBg">
    <img src="img/111.jpg" alt="" />
  </div>
  <div class="LandingpageBgBlur"></div>
  <!----Header--------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light landingpageNav" id="navbar">
    <a class="navbar-brand ml-5 nav_logo_text text-light font-weight-bold " href="home.php">Affilino</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light font-weight-bold" href="features.php">Features</a>
        </li>
      </ul>
    </div>
    <div class="justify-content-end pl-1">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn  rounded-pill text-light pl-3 pr-3 mr-5" style="border-radius: 50px;background-color: #3498db;" href="dashboard.php">Dashboard</a>
        </li>
      </ul>
    </div>
  </nav>
  <!----Header END--------->

  <!----TopSection--------->

  <div class="LandingPageHeroSection">
    <div class="LandingPageHeroSectionX">
      <img src="img/111.jpg" class="topSectionPic" alt="" />
      <div class="topSectionPicBlur">
        <div class="landingpageitemcontainer container">
          <div class="row">
            <div class="col landingpageTxtContainer">
              <div class="landingpageTxt">
                <h1>Your Profit is Our Business</h1>
                <p>Best-in-class sales & marketing automation platform and marketplace for digital business owners and
                  online marketers</p>
                <div class="row pl-3">
                  <button class="btn btn-info topsectionbtn mr-3"><span>Learn More</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!----TopSection END--------->

  <!----Second Component-->

  <div class="ScoundElement_body">
    <div class="container ScoundElement">
      <div class="row">
        <!-- Card Start -->
        <div class="col">
          <div class="card">
            <div class="card-body">
              <i class="fa fa-cogs card__icons text-danger" aria-hidden="true"></i>
              <h5>Sales Automation</h5>
              <p style='font-size:.9rem'>Time is money - so we provide all of the tools necessary to quickly and
                easily sell and deliver your products instantly to customers worldwide.
                <a href="#" class="pl-1">Learn more..</a> </p>
            </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col">
          <div class="card">
            <div class="card-body">
              <i class="fa fa-users card__icons text-info" aria-hidden="true"></i>
              <h5>Thousands Of Affiliates</h5>
              <p style="font-size: .9rem">umpstart your success by utilizing our army of marketing partners to
                generate sales to your own digital products and services without the headache.
                <a href="#" class="pl-1">Learn more..</a> </p>
            </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col">
          <div class="card">
            <div class="card-body">
              <i class="fa fa-id-card card__icons text-primary" aria-hidden="true"></i>
              <h5>Top-Notch Products</h5>
              <p style="font-size: .9rem">Thousands of educational and software products to help you grow your own
                business and/or promote as an affiliate - our marketplace has you covered.
                <a href="#" class="pl-1">Learn more..</a></p>
            </div>
          </div>
        </div>
        <!-- Card End -->

        <!-- Card Start -->
        <div class="col">
          <div class="card">
            <div class="card-body">

              <i class="fa fa-truck card__icons text-success" aria-hidden="true"></i>
              <h5>Powerful Tracking</h5>
              <p style="font-size: .9rem">Always know your stats. People say we have the best tracking and
                reporting system they have ever used - and we have to agree.
                <a href="#" class="pl-1">Learn more..</a></p>
            </div>
          </div>
        </div>
        <!-- Card End -->

      </div>
    </div>
  </div>

  <!----Second Component End-->

  <!----LandingPageSpace-->

  <div style="background: #fff; display: block; margin-top: 0px; padding: 80px 0; ">
    <div class="container">
      <div class="lps_list_body">
        <div class="lps_list_text_body">
          <div class="lps_list_text">
            <h4>An established, thriving community sharing success</h4>
            <p>Since 2006, Affilino has brought together the leaders in online digital product creation and
              marketing. We’ve established a thriving and dynamic community where great minds share great products for
              greater success. We are committed to serving YOU and being a part of your journey to help others build
              their own profitable online business.</p>
          </div>
        </div>
        <div class="lpS-left_img_body">
          <img src="img/follower.svg" alt="" class="lpS-left_img" />
        </div>
      </div>

      <div class="lps_list_body">
        <div class="lpS-left_img_body">
          <img src="img/i.svg" alt="" class="lpS-left_img" />
        </div>
        <div class="lps_list_text_body">
          <div class="lps_list_text">
            <h4>An established, thriving community sharing success</h4>
            <p>Since 2006, Affilino has brought together the leaders in online digital product creation and
              marketing. We’ve established a thriving and dynamic community where great minds share great products for
              greater success. We are committed to serving YOU and being a part of your journey to help others build
              their own profitable online business.</p>
          </div>
        </div>
      </div>


      <div class="lps_list_body">
        <div class="lps_list_text_body">
          <div class="lps_list_text">
            <h4>An established, thriving community sharing success</h4>
            <p>Since 2006, Affilno has brought together the leaders in online digital product creation and
              marketing. We’ve established a thriving and dynamic community where great minds share great products for
              greater success. We are committed to serving YOU and being a part of your journey to help others build
              their own profitable online business.</p>
          </div>
        </div>
        <div class="lpS-left_img_body">
          <img src="img/e.svg" alt="" class="lpS-left_img" />
        </div>
      </div>

      <div class="lps_list_body">
        <div class="lpS-left_img_body">
          <img src="img/mobile.svg"" class=" lpS-left_img" />
        </div>
        <div class="lps_list_text_body">
          <div class="lps_list_text">
            <h4>An established, thriving community sharing success</h4>
            <p>Since 2006, Affilino has brought together the leaders in online digital product creation and
              marketing. We’ve established a thriving and dynamic community where great minds share great products for
              greater success. We are committed to serving YOU and being a part of your journey to help others build
              their own profitable online business.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!----LandingPageSapce End-->
  <!----LandingPageShowCase-->

  <div class="LandingpageShowCase">
    <div class="landingpageshowCaseTitle">
      <h2 class="text-light">Our Customers Say It Best</h2>
      <p class="text-light">Take a look what people think about WarriorPlus…</p>
      <span></span>
    </div>
    <div class=" container pt-5">
      <div class="row">
        <!-- FeedBack Box -->
        <div class="col">
          <div class="feedback__box_container">
            <div class="feedback__box">
              <p>
                “Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                you’re
                going to launch a product, you must make sure the network you use is solid from the top down. The only
                place in the market today you’ll find that is here at WarriorPlus.”
              </p>
              <div></div>
            </div>
            <div class="feedback__bottom">
              <div class="feedback__box_img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL8gPRDx9iWXZx2GcScvJ2EDW6BoESX-KzdA&usqp=CAU" alt="">
              </div>
              <div class="feedback__box_title_container">
                <h5>Matt Bacak</h5>
                <p>Affilino User & internet Veteran</p>
              </div>
            </div>
          </div>
        </div>
        <!-- FeedBack Box End -->

        <!-- FeedBack Box -->
        <div class="col">
          <div class="feedback__box_container">
            <div class="feedback__box">
              <p>
                “Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                you’re
                going to launch a product, you must make sure the network you use is solid from the top down. The only
                place in the market today you’ll find that is here at WarriorPlus.”
              </p>
              <div></div>
            </div>
            <div class="feedback__bottom">
              <div class="feedback__box_img">
                <img src="https://wsbb.cesargdm.com/content/images/2020/06/Cesar-avatar_Con-compu-1.png" alt="">
              </div>
              <div class="feedback__box_title_container">
                <h5>David Perdew</h5>
                <p>Affilino User & NAMS Founder</p>
              </div>
            </div>
          </div>
        </div>
        <!-- FeedBack Box End -->

        <!-- FeedBack Box -->
        <div class="col">
          <div class="feedback__box_container">
            <div class="feedback__box">
              <p>
                “Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                you’re
                going to launch a product, you must make sure the network you use is solid from the top down. The only
                place in the market today you’ll find that is here at WarriorPlus.”
              </p>
              <div></div>
            </div>
            <div class="feedback__bottom">
              <div class="feedback__box_img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTixlJF4i1aprDaX6yEfTBhiB-3jZ_kfmvAjg&usqp=CAU" alt="">
              </div>
              <div class="feedback__box_title_container">
                <h5>Art Flair</h5>
                <p>Affilino User & Cool Dude</p>
              </div>
            </div>
          </div>
        </div>
        <!-- FeedBack Box End -->

      </div>
    </div>
  </div>
  <!----LandingPageShowCase End-->


  <!-- Landing page Steps-->

  <div class="LandingpageSteps">
    <div class="landingpageStepsTitle">
      <h2 class="text-dark">Easy to get started. 3 Step process.</h2>
      <p class="text-dark" style="font-size: 14px;">We won’t waste your time</p>
      <span></span>
    </div>
    <div class="container pt-5">
      <div class="row">
        <!-- card body -->
        <div class="col">
          <h5 style="color: #333333;">Create your Free Account</h5>
          <p style="color: #585858; font-size: 14px;">
            Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If you’re
            going to launch a product, you must make sure the network you use is solid from the top down. The only
          </p>
        </div>
        <!-- card body end -->

        <!-- card body -->
        <div class="col">
          <h5 style="color: #333333;">Create your Free Account</h5>
          <p style="color: #585858; font-size: 14px;">
            Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If you’re
            going to launch a product, you must make sure the network you use is solid from the top down. The only
          </p>
        </div>
        <!-- card body end -->

        <!-- card body -->
        <div class="col">
          <h5 style="color: #333333;">Create your Free Account</h5>
          <p style="color: #585858; font-size: 14px;">
            Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If you’re
            going to launch a product, you must make sure the network you use is solid from the top down. The only
          </p>
        </div>
        <!-- card body end -->
      </div>
    </div>
  </div>
  <!--Landing page Steps End-->

  <!-- landing page Features  -->

  <div class="landingpagefeatures">
    <div class="landingpagefeaturesTitle">
      <h2 class="text-light">Easy to get started. 3 Step process.</h2>
      <p class="text-light" style="font-size: 14px;">We won’t waste your time</p>
      <span class="bg-light"></span>
    </div>

    <div class="container">
      <div class="row">

        <div class="col">
          <div class="stable_left">

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-hashtag text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-life-ring text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-registered text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container ">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-life-ring text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->
          </div>
        </div>

        <div class="col">
          <div class="stable_left">

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-hashtag text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-life-ring text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
              </div>
            </div>
            <!-- Features body End-->

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-registered text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container ">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->

            <!-- Features body -->
            <div class="stable">
              <div class="stable-icons">
                <i class="fa fa-life-ring text-light" aria-hidden="true"></i>
              </div>
              <div class="stable-text-container">
                <h5>Stable</h5>
                <p>
                  Over the last 18 years, I’ve done more launches than I can remember. There’s one thing I know: If
                  you’re going to launch a product
                </p>
              </div>
            </div>
            <!-- Features body End-->
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- landing page Features  End -->

  <footer>
    <div class="landingpageFooter">
      <div class="container">
        <div class="row">

          <div class="col footer-brand">
            <h1 class="text-light">Affilino</h1>
          </div>

          <div class="col footer-quickLink">
            <h6 class="text-light">Quick Link</h6>
            <ul style="list-style: none;">
              <li><a class="text-light" href="home.php">Home</a></li>
              <li><a class="text-light" href="features.php">Features</a></li>
              <li><a class="text-light" href="#">Login</a></li>
              <li><a class="text-light" href="#">Free Signup</a></li>
            </ul>
          </div>

          <div class="col footer-quickLink pt-3">
            <ul style="list-style: none;">
              <li><a class="text-light" href="#">Help & Support</a></li>
              <li><a class="text-light" href="#">Advertise</a></li>
              <li><a class="text-light" href="#">Terms</a></li>
              <li><a class="text-light" href="#">Api</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <footer>
    <div style="
        display: block;
        text-align: center;
        background-color: #fff;
        width: 100%;
        font-size: 12px;
        padding: 5px;
        font-weight: 500;
      ">
      Affilino &copy; 2020
    </div>
  </footer>


  <!-- Script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




  <script>
    window.onscroll = function() {
      myFunction()
    };

    var header = document.getElementById("navbar");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>





  <!-- Script End -->

</body>

</html>