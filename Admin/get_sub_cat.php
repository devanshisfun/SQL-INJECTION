<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
$cat_name = ($_POST['category_id']);

$cat=mysqli_query($con,"select * from `sub_categeory` Where cat_name='$cat_name'");

if(mysqli_num_rows($cat)>0){
    $html='';
    while($row=mysqli_fetch_assoc($cat)){
        $html.= "<option value=".$row['code'].">".$row['name']."</option>";
    }
    echo $html;
}else{
    echo "<option>No Brand Found</option>";
}
?>	