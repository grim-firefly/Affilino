<?php

include('header.php');

?>

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



<!-- data table -->

<div class="row mt-2">
    <div class="container-fluid ">
        <a href="createnewcategory.php" class="btn btn-warning btn-sm float-right">Create New Category</a>

    </div>
</div>
<div class="row mt-2">
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created Time</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = GetAllCategory($conn);
                for ($i = 0; $i < count($data); $i++) {
                    echo "<tr>";
                    echo '<td>' . $data[$i]['id'] . '</td>';
                    echo '<td>' . $data[$i]['Name'] . '</td>';
                    echo '<td>' . $data[$i]['createdtime'] . '</td>';
                    echo '<td>
                   
                    <a  class="btn btn-warning btn-sm" href="users.php?id=' . $data[$i]['id'] . '&command=ban">edit</a>
                    <a  class="btn btn-danger btn-sm" href="users.php?id=' . $data[$i]['id'] . '&command=remove">Remove</a>
                    
                    </td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</div>






<?php include('footer.php'); ?>