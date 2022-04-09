<?php include('header.php');
include('../lib/function.php');


if (isset($_GET['id']) && isset($_GET['url'])) {
    $id = $_GET['id'];
    $url= $_GET['url'];
}
else{
    header("location:products.php");
}
?>

<style>
    .right-line {
        width: 100%;
        display: block;
        height: 25px;
        margin-top: 3px;
        background: #777;
        margin-top: 30px;
    }
</style>

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row ">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">All Products Products</h5>
                                    <span class="h2 font-weight-bold mb-0"> <?php echo CountProduct($conn, "approved") + CountProduct($conn, "pending"); ?> </span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Approved Products</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo CountProduct($conn, "approved"); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                                <span class="text-nowrap">Since last week</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pending Products</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo CountProduct($conn, "pending"); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                <span class="text-nowrap">Since Last Month</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<div class="container mt-5">

    <div style=" position:relative;">
        <div class="header_text" style="text-align: center; margin:0 auto; font-size:18px; font-weight:bolder;">Product Details </div>
        <a href="<?php echo $url; ?>" style="position: absolute; left:0%; top:-5px;" class="btn btn-danger btn-sm mb-1">Go Back</a>
    </div>
    <span class="right-line"></span>
    <?php
    $data = getProduct($conn, $id);

    ?>
    <div class="row">
        <div class="col-8">
            <div class="name">
                <div style="" class="my-2"> <b class="mb-2"> <?php echo $data['name']; ?></b> </div>
                <p style="text-align: justify;"><b>Objective : </b> <?php echo $data['smDescription']; ?> </p>
                <p style="text-align: justify;"><b>Description : </b> <?php echo $data['Description']; ?> </p>
            </div>
        </div>
        <div class="col-4">

            <div class="card mt-2" style="width: 18rem;">
                <img class="card-img-top" style="height: 200px;" src="../product/img/<?php echo $data['imgName'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">BY <?php echo getUserName($conn,$data['userId']); ?></h5>
                    <p class="card-text"> Price <span class="badge badge-warning"><del> <?php echo $data['price'] ?> BDT</del> </span> <span class="badge badge-success"> <?php echo $data['discountPrice'] ?> BDT </span> </p>
                    <p class="card-text">Category : <?php echo categoryName($conn, $data['categoryId']) ?></p>
                    <p class="card-text">Category : <?php echo $data['createdTime'] ?></p>
                    <?php

                    if (isVendor($conn, $username)) {
                        echo '<a href="editProduct.php?id=' . $id . '" class="btn btn-sm btn-warning">Edit</a>';
                        echo '<a href="MyProduct.php?id=' . $id . '" class="btn btn-sm btn-danger ml-2">Delete</a>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

</div>














<!-- Script -->
<!-- bootstrap js files here -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/font_awesome.min.js"></script>


</body>

</html>