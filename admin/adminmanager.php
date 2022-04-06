<?php include('header.php');
if(isset($_POST["password"]))
  {
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $rpassword = mysqli_real_escape_string($conn, $_POST['rpassword']); 
      $admiid = mysqli_real_escape_string($conn, $_POST['admiid']);       
      $updatepassword = ChangePassword($conn,$admiid,$password,$rpassword);
  }

if(isset($_POST["newpassword"]))
  {
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']); 
      $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);       
      CreateAdmin($conn,$name,$email,$newpassword);
  }

 $deladmin =htmlentities($_GET['adid']);
  if($deladmin!=NULL){
  DeleteAdmin($conn,$deladmin); } 

 ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
         
         
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
         <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Admin Manager</h3>
                </div>
                <div class="col text-right">
                  <a href="#" data-toggle="modal" data-target="#newadmin" class="btn btn-sm btn-primary">Create New</a>
                </div>
              </div>
            </div>
            <?php
               if($updatepassword=='success')
               {
                   echo '<div class="alert alert-success container" role="alert">
                            <strong>Success!</strong> Password Updated !
                          </div> ';
               }
            ?>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Admin Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Joined</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $adminsdata= GetAdminList($conn); 
                    foreach($adminsdata as $adm) {
                    
                  ?>
                  <tr>
                    <th scope="row">
                     <?php echo $adm['name']; ?>
                    </th>
                    <td>
                      <?php echo $adm['email']; ?>
                    </td>
                    <td>
                      <?php echo $adm['created']; ?>
                    </td>
                    <td>
                     <a href="#" data-toggle="modal" data-target="#adminsetting<?php echo $adm['aid']; ?>"><i class="ni ni-settings text-info mr-2"></i></a>                     
                     <a href="?adid=<?php echo $adm['aid']; ?>" onclick="return confirm('Are You Sure ?');"><i class="ni ni-button-power text-warning"></i></a>

                    </td>
                  </tr>
                    
                     <!-- Modal -->
                    <div class="modal fade" id="adminsetting<?php echo $adm['aid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                           <form role="form" action="" method="post">
                          <div class="modal-body">                             
                                
                                <div class="form-group">
                                  <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control" name="password" placeholder="Password"  type="password">
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control" name="rpassword" placeholder="Re Password"  type="password">
                                  </div>
                                </div>
                                <input type="hidden" value="<?php echo $adm['aid']; ?>" name="admiid">
                               
                                
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          </form>

                        </div>
                      </div>
                    </div>

                  <?php } ?> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

                     <!-- Modal -->
                    <div class="modal fade" id="newadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                           <form role="form" action="" method="post">
                          <div class="modal-body">                             
                                
                                <div class="form-group">
                                  <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input  class="form-control" name="name" placeholder="Name"  type="text">
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input  class="form-control" name="email" placeholder="Email"  type="email">
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control" name="newpassword" placeholder="Re Password"  type="password">
                                  </div>
                                </div>                        
                               
                                
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                          </form>

                        </div>
                      </div>
                    </div>

<?php include('footer.php'); ?>    