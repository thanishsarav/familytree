<?php
include ("../header.php");
// include ("sider.php");
?><?php
$error = "";
$success = false;
$username = "";
$password = "";


if (isset($_POST['submit'])) {
  $success = false;
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sql = "INSERT INTO users(`username`,`password`)
   VALUES ( '$username','$password' );";

  echo $sql;
  if (mysqli_query($dbconn, $sql)) {
    header("Location:users.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
  }
  mysqli_close($conn);
}

?>


    <!-- Navbar -->
    <?php
    include ("../header.php");
    // include ("sider.php");
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    

      <!-- SidebarSearch Form -->
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 container-fluid">
              <h1 class="m-0 p-3 ml-1 ">Add Page
              
            </div><!-- /.col -->
            <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
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
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
            <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  
    <?php
    include ("../footer.php");
    
    ?>