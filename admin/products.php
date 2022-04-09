<?php include('header.php');
include('../lib/function.php');
if(isset($_GET['id']) && isset($_GET['command'])){
    productCommand($conn);
}

?>
<!-- Header -->
<!-- Header -->
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





<div class="row mt-2">
    <div class="container-fluid ">
        <a href="pendingProducts.php" class="btn btn-info btn-sm  float-right ">Pending Products</a>

    </div>
</div>


<div class="row mt-2">
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">By</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created Time</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = allProduct($conn, "approved");
                for ($i = 0; $i < count($data); $i++) {
                    echo '<tr>';
                    echo '<td>' . $data[$i]['id'] . '</td>';
                    echo '<td>' . $data[$i]['name'] . '</td>';
                    echo '<td>' . categoryName($conn, $data[$i]['categoryId']) . '</td>';
                    echo '<td>' . getUserName($conn, $data[$i]['userId']) . '</td>';
                    echo '<td>' . $data[$i]['discountPrice'] . '</td>';
                    echo '<td>' . $data[$i]['createdTime'] . '</td>';
                    echo '<td>';
                    echo '<a href="productDetails.php?id=' . $data[$i]['id'] . '&url=products.php" class="btn btn-sm btn-info">View</a>';
                    echo '<a href="products.php?id=' . $data[$i]['id'] . '&command=reject" class="btn btn-sm btn-danger">Delete</a>';
                    echo '</td>';

                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

</div>









<?php include('footer.php'); ?>