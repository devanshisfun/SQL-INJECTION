<?php

// // Create connection
// $conn = mysqli_connect("localhost","root","","xxx");

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include('config.php');
// sql to delete a record
$sno = $_GET['id'];
$sql = "DELETE FROM product WHERE sno='$sno'";

if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
  header('location:productmanage');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

exit;
?>