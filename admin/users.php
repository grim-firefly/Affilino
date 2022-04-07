<?php include('header.php');
if (isset($_GET['id']) && isset($_GET['command'])) {

    user_command($conn);
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
                                    <h5 class="card-title text-uppercase text-muted mb-0"> Current Users</h5>
                                    <span class="h2 font-weight-bold mb-0"> <?php echo count_user($conn, "vendor") + count_user($conn, "vendor"); ?> </span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pending</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo count_user_status($conn, "pending"); ?></span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Banned</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo count_user_status($conn, "banned"); ?></span>
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
        <a href="bannedUser.php" class="btn btn-warning btn-sm float-right ml-2">Banned User</a>
        <a href="pendingUser.php" class="btn btn-info btn-sm  float-right ">Pending User</a>

    </div>
</div>


<div class="row mt-2">
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created Time</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $data = GetAllUsers($conn, "approved");
                for ($i = 0; $i < count($data); $i++) {
                    echo "<tr>";
                    echo '<td>' . $data[$i]['id'] . '</td>';
                    echo '<td>' . $data[$i]['username'] . '</td>';
                    echo '<td>' . $data[$i]['email'] . '</td>';
                    echo '<td>' . $data[$i]['createdtime'] . '</td>';
                    echo '<td>
                   
                    <a  class="btn btn-warning btn-sm" href="users.php?id=' . $data[$i]['id'] . '&command=ban">Ban</a>
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