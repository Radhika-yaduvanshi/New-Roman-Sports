<?php
//  require_once('config/connection.php');

//  if(isset($_GET['id']))
//  {
//  	$wid = $_GET['id'];
//  	$sql = "DELETE FROM wishlist WHERE w_id='".$wid."'  ";

//  	echo $sql;
//  	die;    
//  	$result=mysqli_query($conn,$sql);
//  	 }
//  	 header("location:wishlist.php");
?>




<?php
//  require_once('config/connection.php');

//  if(isset($_GET['id']))
//  {
//  	$wid = $_GET['id'];
//  	$sql = "DELETE FROM wishlist WHERE wishlit_id='".$wid."'";

//  	echo $sql;
//  	die;
//  	$result=mysqli_query($conn,$sql);
//  	 }
//  	 header("location:wishlist.php");
?>
<?php
 require_once('config/connection.php');

 if(isset($_GET['id']))
 {
 	$wid = $_GET['id'];
 	$sql = "DELETE FROM wishlist WHERE wishlist_id='".$wid."'";

 	// echo $sql;
 	// die;    
 	$result=mysqli_query($conn,$sql);
 	 }
 	 header("location:wishlist.php");
?>




