<?php
include ("../header.php");
// include ("sider.php");
?>
<?php
$error = "";
$success = false;
$username = "";
$password = "";
$id = $_GET['id'];







if (isset($_POST['submit'])) {
  $success = false;
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sql = "UPDATE users SET username ='$username', password = '$password' where id = $id  ";
  if (mysqli_query($dbconn, $sql)) {
    header("Location:users.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
  }
  mysqli_close($dbconn);
}
$sql = " SELECT * FROM users WHERE id = $id ";

?>


    <!-- Navbar -->
   
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2" style="width:630px">
            <div class="col-sm-6 container-fluid" style="width:630px">
              <h1 class="m-0 p-3 ml-1 ">EDIT Page
              </h1>
            </div><!-- /.col -->
            
            <section class="content">
      <div class="container-fluid">
        <div class="row" style="width:630px">
          <!-- left column -->
          <div class="col-md-12" style="width:630px">
            <!-- jquery validation -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="" method="post" style="width:580px">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <hr>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
     
            <!-- /.card -->
          </div>
        </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->


  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- Default to the left -->

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  
</body>

</html>