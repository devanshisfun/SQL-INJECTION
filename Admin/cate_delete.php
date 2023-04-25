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
$sql = "DELETE FROM categeory WHERE code='$sno'";

if (mysqli_query($con, $sql)) 
{
    $sql1 = "DELETE FROM product WHERE c_code='$sno'";
        if (mysqli_query($con, $sql1)) 
        { 
            header('location:cate');
        }
   
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

exit;
?>