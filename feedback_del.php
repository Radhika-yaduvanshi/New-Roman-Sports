<?php
 require_once('../config/connection.php');

 if(isset($_GET['id']))
 {
 	$uid = $_GET['id'];
 	$sql = "DELETE FROM feedback WHERE f_id='".$uid."'";

 	//echo $sql;
 	//die;
 	$result=mysqli_query($conn,$sql);
 	 }
 	 header("location:feedback.php");
?>