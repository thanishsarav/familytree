<?php
include ("db.php");

$error = "";
$success = false;
$username = "";
$password = "";

$id = $_GET['id'];
$action = $_GET['action'];
$gender = isset($_GET['gender']) ? $_GET['gender']  : ''  ;
if (isset($_POST['submit'])) {
  $success = false;
  $name = $_POST['name'];
  $phonenumber = $_POST['phone_number'];
  $location = $_POST['location'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $kulam = $_POST['kulam'];
  $koviel = $_POST['koviel'];
  $gender_1 = $_POST['gender'];
  $servername = 'localhost';

  
  $sql = "INSERT INTO family(`name`,`phone_number`,`location`,`kulam`,`koviel`,`gender`,`mother_name`,`father_name`)
   VALUES ( '$name','$phonenumber','$location','$kulam','$koviel','$gender_1','$mother','$father' );";


  if (mysqli_query($dbconn, $sql)) {
    $last_id = mysqli_insert_id($dbconn);
    if ($action == 'addchild') {
      if ($gender == 'male') {
        $sql = "UPDATE family set father_id = '$id' where id = '$last_id' ;";
        $result = mysqli_query($dbconn, $sql);
        header("Location:view.php");
      } elseif ($gender == 'female') {
        $sql = "UPDATE family set mother_id = '$id' where id = '$last_id' ;";
        $result = mysqli_query($dbconn, $sql);
       
      }
    } elseif ($action == 'addmother') {
      $sql = "UPDATE family set mother_id = '$last_id' where id = '$id' ;";
      $result = mysqli_query($dbconn, $sql);
     
    } elseif ($action == 'addfather') {
      $sql = "UPDATE family set father_id = '$last_id' where id = '$id' ;";
      $result = mysqli_query($dbconn, $sql);
      
    } 

    header("Location: view.php?id=$id");
    // }elseif($relation == 'father'){

    // }
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
  }
  mysqli_close($dbconn);
}

?>
<?php
include ("header.php");
// include ("sider.php");
?>

<!-- Navbar -->

<!-- /.navbar -->

<!-- Main Sidebar Container -->


<!-- SidebarSearch Form -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
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
                    <form action="" method="POST" style="width:580px">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">name</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            placeholder="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">phone number</label>
                          <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1"
                            placeholder="phone number">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Location</label>
                          <input type="text" name="location" class="form-control" id="exampleInputEmail1"
                            placeholder="Location">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">kulam</label>
                          <input type="text" name="kulam" class="form-control" id="exampleInputEmail1"
                            placeholder="kulam">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">koviel</label>
                          <input type="text" name="koviel" class="form-control" id="exampleInputPassword1"
                            placeholder="koviel">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">gender</label>
                          <input type="text" name="gender" class="form-control" id="exampleInputPassword1"
                            placeholder="koviel">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">father-name</label>
                          <input type="text" name="father" class="form-control" id="exampleInputPassword1"
                            placeholder="koviel">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">mother-name</label>
                          <input type="text" name="mother" class="form-control" id="exampleInputPassword1"
                            placeholder="koviel">
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

      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container-fluid -->