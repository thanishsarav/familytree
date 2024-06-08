<?php
 $id = $_GET['id'];
 $error = "";
 $servername = 'localhost';
 $username = 'root';
 $dbname = 'login';
 $password = '';
 $dbconn = mysqli_connect($servername,$username,$password,$dbname);
 if (!$dbconn) {
   die("Connection failed: " . mysqli_connect_error());
 }
$sql = " DELETE  FROM family WHERE id = $id ";
$result = mysqli_query($dbconn, $sql);
header("Location:familymembers.php");

  mysqli_close($dbconn);
 ?>