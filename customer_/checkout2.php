<?php
session_start();
require_once("config/connection.php");
$uid=$_SESSION['c_id'];
$sql="select * from add_to_cart where c_id='".$uid."'";
$result=mysqli_query($conn,$sql);

$d= Date("y-m-d");
$t=$_GET['total_amount'];
$q=$_GET['cart_qty'];

$sql1="insert into `order_master`(o_date,o_status,c_id) values('".$d."',0,'".$uid."')";
//echo $sql1;
//die;
$result1=mysqli_query($conn,$sql1);
$oid=mysqli_insert_id($conn);
//echo $oid;
//die;
while($row=mysqli_fetch_array($result))
{
	$pid=$row['p_id'];
	$qty=$row['cart_qty'];
	$total=$row['total_amount'];
	$sql2="insert into order_detail(od_quantity,o_id,p_id,od_amount,od_date)values('".$qty."','".$oid."','".$pid."','".$total."','".$d."')";
	//echo $sql2;
	//die;

	$result2=mysqli_query($conn,$sql2);
}
$sql3="delete from add_to_cart where c_id='".$uid."'";
$result3=mysqli_query($conn,$sql3);

if($result3)
{
echo "<meta http-equiv='refresh' content='0;url=checkout.php?id=$oid&total_amount=$t&cart_qty=$q'>";
}
?>