<?php

include('header.php');

?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");


    .center {
        position: relative;
        padding: 50px 50px;
        background: #fff;
        border-radius: 10px;
    }

    .center h1 {
        font-size: 2em;
        border-left: 5px solid dodgerblue;
        padding: 10px;
        color: #000;
        letter-spacing: 5px;
        margin-bottom: 60px;
        font-weight: bold;
        padding-left: 10px;
    }

    .center .inputbox {
        position: relative;
        width: 300px;
        height: 50px;
        margin-bottom: 50px;
    }

    .center .inputbox input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        border: 2px solid #000;
        outline: none;
        background: none;
        padding: 10px;
        border-radius: 10px;
        font-size: 1.2em;
    }

    .center .inputbox:last-child {
        margin-bottom: 0;
    }

    .center .inputbox span {
        position: absolute;
        top: 14px;
        left: 20px;
        font-size: 1em;
        transition: 0.6s;
        font-family: sans-serif;
    }

    .center .inputbox input:focus~span,
    .center .inputbox input:valid~span {
        transform: translateX(-13px) translateY(-35px);
        font-size: 1em;
    }

    .center .inputbox [type="button"] {
        width: 50%;
        background: dodgerblue;
        color: #fff;
        border: #fff;
    }

    .center .inputbox:hover [type="button"] {
        background: linear-gradient(45deg, greenyellow, dodgerblue);
    }
</style>

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"> Vendor</h5>
                                    <span class="h2 font-weight-bold mb-0"> <?php echo count_user($conn, "vendor"); ?> </span>
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
            </div>
        </div>
    </div>
</div>













<!-- create new category -->
<div class="container-fluid">
    <div class="row mt-2 mb-2">
        <div style="width: 400px; margin:0 auto;">
            <div class="center">
                <h1>Create New Category</h1>
                <form method="POST">
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Category Name</span>
                    </div>

                    <div class="inputbox">
                        <input type="button" name="createCategory" value="Create">
                        <a href="category.php" class="btn btn-primary btn-lg  float-right mr-5">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>