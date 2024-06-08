<?php

$servername = 'localhost';
$username = 'root';
$dbname = 'login';
$password = '';

$dbconn = mysqli_connect($servername,$username,$password,$dbname);
if (!$dbconn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>