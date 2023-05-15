<?php // include('header.php');
require_once('../config/connection.php');

session_start();
$uid= $_SESSION['c_name'];
$sql ="select * from customer where c_id=$uid";

$result= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($result);
	
?>

<!DOCTYPE html>
<html>


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 08:34:30 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Spice Hotel | Bootstrap 5 Admin Dashboard Template + UI Kit</title>
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
				<form class="login100-form validate-form" method="POST">
					<center><img src="mylogo.jpeg" height="100" width="100"></center>
					<span class="login100-form-title p-b-34 p-t-27">
						Edit Profile
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate="Enter customer name">
						<input class="input100" type="text" value="<?php echo $row['c_name'];?>" name="cname" placeholder="Customer Name">
						<!-- <span class="focus-input100" data-placeholder="&#xf207;"></span> -->
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter customer address">
						<input class="input100" type="text" value="<?php echo $row['c_add'];?>" name="cadd" placeholder="Customer Address">
						<!-- <span class="focus-input100" data-placeholder="&#xf207;"></span> -->
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter customer email">
						<input class="input100" type="text" value="<?php echo $row['c_email'];?>" name="cemail" placeholder="Customer Email">
						<!-- <span class="focus-input100" data-placeholder="&#xf207;"></span> -->
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter customer contact no">
						<input class="input100" type="tel" value="<?php echo $row['c_contno'];?>" name="ccontno" placeholder="Customer Contact no" maxlength="10">
						<!-- <span class="focus-input100" data-placeholder="&#xf207;"></span> -->
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
					
				</form>
                <?php 

require_once('../config/connection.php');
?>


<?php
$cid=$_SESSION['c_name'];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if ( isset($_POST["cname"]))
	{
		
		$c_name=$_POST["cname"];
		$c_add=$_POST["cadd"];
		$c_email=$_POST["cemail"];
		$c_contno=$_POST["ccontno"];
		
		
		
		
	if($c_name!=""  )
	if($c_add!=""  )
	if($c_email!=""  )
	if($c_contno!=""  )
	
			
			{
					$query="update  customer set
					c_name='".$c_name."',
					c_add='".$c_add."',
			        c_email='".$c_email."',
					c_contno='".$c_contno."' where c_id=$uid";
				
						$result = mysqli_query($conn,$query);
						if($result)
							{
								echo "<meta http-equiv='refresh' content='0;url=index.php'>";
							}
							else
							{
								echo "ERROR:DATA NOT FOUND";
							}
			}
	}
	else{
				
				echo "ERROR:DATA NOT SET";
		}
}

      	
 ?>
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