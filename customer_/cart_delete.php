<?php
 require_once('../config/connection.php');

 if(isset($_GET['id']))
 {
 	$c_id = $_GET['id'];
 	$sql = "DELETE FROM add_to_cart WHERE cart_id='".$c_id."'";

 	//echo $sql;
 	//die;    
 	$result=mysqli_query($conn,$sql);
 	 }
 	 header("location:cart.php");
?>