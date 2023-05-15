<!DOCTYPE html>
<?php 
	require_once('../config/connection.php');?>
<?php
$usernamErr = $passwordErr = "";
$username = $password = "";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST['username']))
		{
			$usernamErr=" Username is required";
		}
		else
		{
			$username=$_POST["username"];;
		}

		if(empty($_POST['password']))
		{
			$passwordErr=" Password is required";
		}
		else
		{
			$password=$_POST["password"];;
		}
		if(isset($_POST["username"]) && isset($_POST["password"]))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];

			if( $username !='' && $password !='')
			{
				$sql="select c_id,c_pass,c_name,c_email from customer
				where c_email='".$username."' and c_pass='".$password."' and is_admin = 1";
				//echo $sql;
				//
				//die;
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION["c_name"] = $row['c_id'];
					header('location:index.php');
				}
				else    
				{
					echo"invalid password";
				}
			}
			// else
			// {
			// 	echo "value not null";
			// }
		}
		else
		{
			echo "value not set";
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
					<center><img src="mylogo.jpeg" height="100" width="100"></center>
					<span class="login100-form-title p-b-34 p-t-27">
					 Log in 
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="USERNAME">
						<span class="error" >*<?php echo $usernamErr; ?></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="PASSWORD">	
						<span class="error" >*<?php echo $passwordErr; ?></span>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit">
							SUBMIT
						</button>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="forgetpassword.php">
							FORGOT PASSWORD?	
						</a>
					</div>
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