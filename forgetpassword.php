<?php 
require_once('../config/connection.php');
require_once('lib/function.php');
include('PHPMailer/PHPMailerAutoload.php');

$emailErr = "";
$email = $email ="";

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	if(empty($_POST["username"]))
	{
		$emailErr=" Email is required";
	}
	else{
		$email=$_POST["username"];
	}
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		
	if(isset($_POST['username']) && !empty($_POST['username']))
	{	
		$username = mysqli_real_escape_string($conn,$_POST['username']);			
		$query = "select * from customer where c_email = '".$username."'";
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		
		if (mysqli_num_rows($result) == 1)
			{
				$arr = array();
				$to = $row['c_email'];
				$arr = $row	;
				$otp = mt_rand(000000,999999);
				$query1 = "update customer set otp = ".$otp.", otpused = 0 where 
				c_email = '".$to."'";
				$result1 = mysqli_query($conn,$query1);
			
			if ($result1)
				{
					$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
					$subject = "Request For OTP";		
					$mailSent = send_mail($to, $message, $subject);
					
					if ($mailSent) 
					{
						session_start();
						$_SESSION['id'] = $to;
						echo "<script>
									window.location='reset.php';
							  </script>";
					} 
					else
					{
					
					}
				$array = array('status' => '200' , 'details' => $arr);
				}	
			
			}	
	}
	} 
	else
	{
		echo "asdasasdad"; die;
	}	 
}
?>
<html>



<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 08:34:30 GMT -->
<head>
	 <style>
		.error{color: red;}
	</style> 
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>New Roman Sports</title>
	<!-- icons -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="" method="POST">
					<br>
					<center><img src="mylogo.jpeg" height="100" width="100"></center>
						
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
					 Reset Password 
					</span>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="USERNAME">
						<!-- <span class="focus-input100" data-placeholder="&#xf207;"></span> -->
						<span class="error" >*<?php echo $emailErr; ?></span>
					</div>
					<!-- <span class="error">*<?php echo $usernamErr;?></span> -->
					
					<br>
					<!-- <span class="error">*<?php echo $passwordErr;?></span> -->
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit">
							SUBMIT
						</button>
					</div>
					<br>
					<br><br>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 08:34:30 GMT -->
</html>