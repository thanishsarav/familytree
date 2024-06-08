
<?php
$fromurl = $_SERVER["HTTP_REFERER"];

$error = "";
$success = false;
$username = "";
$password = "";
$sno = $_GET['id'];
$servername = 'localhost';
 $username = 'root';
 $dbname = 'login';
 $password = '';
 $dbconn = mysqli_connect($servername,$username,$password,$dbname);






if (isset($_POST['submit'])) {
  $success = false;
  $name = $_POST['name'];
  $phonenumber = $_POST['phone_number'];
  $location = $_POST['location'];
  $kulam = $_POST['kulam'];
  $koviel = $_POST['koviel'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $gender = $_POST['gender'];
  $servername = 'localhost';
 $username = 'root';
 $dbname = 'login';
 $password = '';
 $dbconn = mysqli_connect($servername,$username,$password,$dbname);
 if (!$dbconn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 
  $sql = "UPDATE family SET name ='$name', phone_number= '$phonenumber', location = '$location', kulam = '$kulam', 
  koviel = '$koviel',gender = '$gender',mother_name = '$mother',father_name = '$father' where id = $sno  ";
  
  //Redirect URL is stored in fromurl input tag.
  $redirectTo = $_POST['fromurl'];
  if (mysqli_query($dbconn, $sql)) {
   
    header("Location:". $redirectTo);
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
  }
 
}
$sql = " SELECT * FROM family WHERE id = $sno ";
$result = mysqli_query($dbconn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<?php
include ("header.php");
// include ("sider.php");
?>
    <!-- Navbar -->
   
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row" style="width:630px">
          <div class="col-md-42" style="width:630px">
            <div class="container-fluid">
              <h1 class="m-0 p-3 ml-1 ">Edit Page
            </div><!-- /.col -->
            <section class="content">
      <div class="container-fluid" style="width:630px">
        
        <div class="row" style="width:630px">
          <!-- left column -->
          <div class="col-md-42" style="width:630px" >
            <!-- jquery validation -->
            <div class="card card-primary col-42" style="width:630px" >
              
              <!-- /.card-header -->

            <div class="card-body" style="width:730px">
              <form  action="" method="POST" style="width:580px" >
               
                  <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name" value="<?php echo $row['name'] ?>">
                  </div></td></tr>
                   
                  <div class="form-group">
                  <label for="exampleInputEmail1">phone number</label>
                    <input type="text" name="phone number" class="form-control" id="exampleInputEmail1" placeholder="phone number" value="<?php echo $row['phone_number'] ?>">
                  </div></td></tr>
                   
                  <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                    <input type="text" name="location" class="form-control" id="exampleInputEmail1" placeholder="Location" value="<?php echo $row['location'] ?>">
                  </div>
                      <div class="form-group">
                    <label for="exampleInputEmail1">kulam</label>
                    <input type="text" name="kulam" class="form-control" id="exampleInputEmail1" placeholder="kulam" value="<?php echo $row['kulam'] ?>">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">koviel</label>
                    <input type="text" name="koviel" class="form-control" id="exampleInputPassword1" placeholder="koviel" value="<?php echo $row['koviel'] ?>">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">gender</label>
                    <input type="text" name="gender" class="form-control" id="exampleInputPassword1" placeholder="koviel" value="<?php echo $row['gender'] ?>">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">mother_name</label>
                    <input type="text" name="mother" class="form-control" id="exampleInputPassword1" placeholder="koviel" value="<?php echo $row['mother_name'] ?>">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">father_name</label>
                    <input type="text" name="father" class="form-control" id="exampleInputPassword1" placeholder="koviel" value="<?php echo $row['father_name'] ?>">
                  </div>
                   </div>
                <input type="hidden" name="fromurl" value="<?php echo $fromurl  ?>">
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
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <?php 


include 'footer.php';

?>