<?php
include('connection.php');
session_start();
@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php 
    include('login_navbar.php'); ?>
      <div id="content-wrapper">

        <div class="container-fluid">

           <!-- Breadcrumbs-->
          <ol class='breadcrumb'>
            <li class='breadcrumb-item'>
              <a href='welcome.php'>Dashboard</a>
            </li>
            <li class='breadcrumb-item active'>View Profile Details</li>
          </ol>




        <?php 
              $email=$_SESSION['email'];

              $result=mysqli_query($con,"select * from accounts where email='$email';");




              $data = mysqli_fetch_assoc($result);


              ?>

<div class="form-group ">
                            <div class="panel-heading btn-info">
                              <h4 class="panel-title">
                                </h4>
                              </div>
                                <div class="panel-body">

                                  <div class="form-group row">

<div class="container">

                                  <form action="updated_password.php" method="post" class="form-group">
                                    <h3>Changing Password</h3>
                                    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Current Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="pass1"  placeholder="Current password" required>
        </div>
      </div>


  <div class="form-group">
        <label class="control-label col-sm-4" for="email">Current Password again</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="pass2"  placeholder="Current password again" required>
        </div>
      </div>

        <div class="form-group">
        <label class="control-label col-sm-4" for="email">New Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="new_pass"  placeholder="New password" required>
        </div>
      </div>

        <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-8">
          <button type="submit" class="btn btn-default">Update Password</button>
        </div>
      </div>


                                  </form>



                                  </div>

</div>


                              </div>
                            </div>





        </div>
        <!-- /.container-fluid -->

   <?php include('footer_login.php'); ?>
    

      </div>
      <!-- /.content-wrapper -->

    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
