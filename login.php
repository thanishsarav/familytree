<?php

$user = '';
$password = "";
$error = "";
$success = false;


if (isset($_POST['submit'])) {
  $success = false;
  $user = $_POST['login'];
  $password = $_POST['password'];
  $servername = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "login";
  // Create connection
  $conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //writing query for the user record
  $sql = "SELECT * FROM users WHERE username = '$user'";
  //sql query data storing
  $result = mysqli_query($conn, $sql);
  //record's count are storing
  $count = mysqli_num_rows($result);
  //if the count are greter than 0
  // in the result there are so much of records select one record and storing 
  if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
    //checking password if avaliable in the record
    if ($row['password'] == $password) {
      $success = true;
    } else {
      $error = "Invalid Password";
    }
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  if ($success) {
    header("Location:starter.php");
  }
}


// sql to delete a record

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

  <?php if ($error) { ?>
    <!-- Error box -->
    <div class="col-3">
      <div class="info-box bg-danger">
        <span class="info-box-icon"><i class="fas fa-comments"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"><?php echo $error ?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <!-- Error box -->
  <?php } ?>
  <!-- /.login-logo -->
  <div class="card col-3">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User name" name="login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-danger btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <!-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a> -->
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>