
<?php
include ("../header.php");
// include ("sider.php");
?><?php
 $id = $_GET['id'];
 echo $id;
 $error = "";
$success = false;
$username = "";
$password = "";
$id = $_GET['id'];
echo $id;

$sql = " DELETE  FROM users WHERE id = $id ";
header("Location:users.php");
$result = mysqli_query($dbconn, $sql);

  mysqli_close($conn);
 ?>