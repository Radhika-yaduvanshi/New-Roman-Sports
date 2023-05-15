<?php
session_start();
require_once("config/connection.php");
$cart_date = date("y-m-d");
$c_id=$_SESSION['c_id'];
$p_id=$_GET['p_id'];
$cart_qty=$_GET['cart_qty'];
$sql1= "select p_price from product where p_id = '".$p_id."'";
//echo $sql1;
//die;
	$result1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_array($result1);
	$amount = $row1['p_price']; 	

	$total =$amount*$cart_qty;

	// $sql="INSERT INTO add_to_cart (p_id ,cart_qty, c_id, total_amount,	cart_date) VALUES ('$p_id',
	// 	'$cart_qty','$c_id','$total_amount','$cart_date')";
	$sql="INSERT INTO add_to_cart (p_id,c_id, cart_qty, cart_date, total_amount) VALUES ('$p_id','$c_id','$cart_qty','$cart_date','$total')";
	// echo $sql;
	//die;

	$result=mysqli_query($conn,$sql);
	if($result)	
	{
		//echo "<meta http-equip='refresh' content='0;url=Cart2.php'>";
		header("location:cart.php");
	}
	else
{
	echo "check your result";
}
?>