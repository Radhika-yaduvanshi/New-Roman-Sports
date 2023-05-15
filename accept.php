<?php
session_start();
require_once("../config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if(isset($_GET['id']) && isset($_GET['email']))
{
	
	$id=$_GET["id"];
	
		$sql="update `order_master` set o_status='1'
		where o_id = '".$id."'";
		//echo $sql;
		//die;
		
			$result=mysqli_query($conn,$sql);
			$c_name =mysqli_real_escape_string($conn,$_GET['email']);
			$subject = "New Roman Sports";
			$message = "your order is accepted";
			$mailsent =  send_mail($c_name,$message,$subject);
			
			if($mailsent)
			{
				
				echo"<script> window.location='index.php';</script>";
				
				
			}
			else
			{
				echo"mail not sent";
			}
			if($result)
			{
				echo "<meta http-equiv='refresh' content='3;url=indexone.php'>";
			}
}
else
{
	echo "value not set";
}

?>