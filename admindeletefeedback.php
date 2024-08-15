<?php
require_once("config.php");
error_reporting(0);
$id=$_GET['id'];
$sql="DELETE FROM feedback WHERE id = '$id'";
$data1=mysqli_query($conn,$sql);
if($data1){
    echo "Record Updated Successfully";
    header("Location: managefeedback.php");
}
else{
    echo "Failed to Updated Record:" . mysqli_error($conn);
}
?>