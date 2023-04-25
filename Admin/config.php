<?php
// $con = mysqli_connect("localhost","vysoxnyu_sql","harshit@123","vysoxnyu_sql");
$con = mysqli_connect("localhost","root","","vysoxnyu_sql");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?> 