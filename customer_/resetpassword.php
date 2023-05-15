
<?php
// require("includes/header.php");
require_once('config/connection.php');
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');
?>
<?php

$otpErr=$npassErr=$cpassErr="";
$otp=$npass=$cpass="";

if($_SERVER['REQUEST_METHOD']=="POST")
{

if(empty($_POST['otp']))
{
    $otpErr="Please Enter Your Valid otp";
}
else
{
    $otp=$_POST['otp'];
}

if(empty($_POST['npass']))
{
    $npassErr="Please Enter new password";
}
else
{
    $npass=$_POST['npass'];
}

if(empty($_POST['cpass']))
{
    $cpassErr="Please Enter confirm password";
}
else
{
    $cpass=$_POST['cpass'];
}





}


?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	//$id=$_SESSION['id'];
	$otp=$_POST['otp'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];

	$query = "update customer set otpused = 1,c_pass = '".$npass."' where otp = '".$otp."'";

	//echo $query;
	//die; 
	$result = mysqli_query($conn,$query);
	if ($result){

		echo "<meta http-equiv='refresh' content='0;url=login1.php'>";
	}
	else
	{
		echo"invalid password";
	}
}
?>
 
 <style>
    .error{color:red;}
    body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
	background: #E8F0F8;
}
    </style>
 
<div class="section-padding-sm"> 
			<div class="container">
				<div class="row mb-n30">

                   
                    
                    <div class="col-lg-6 col-12 mb-30" align="center">
                        <div class="block-title">
                            <h3 class="title">Already registered?</h3>
                        </div>
                        <form method="POST">
                            <div class="row mb-n20">
                               

                                <div class="wrap-input100 validate-input" data-validate="OTP">
						            <input class="input100" type="text" name="otp" placeholder="OTP">
						            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                    <span class="error" >*<?php echo $otpErr; ?></span>
					            </div><br>

					            <div class="wrap-input100 validate-input" data-validate="New password">
						            <input class="input100" type="password" name="npass" placeholder="New password">
						            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                    <span class="error" >*<?php echo $npassErr; ?></span>
					            </div><br>

					            <div class="wrap-input100 validate-input" data-validate="Confirm password">
						            <input class="input100" type="password" name="cpass" placeholder="Confirm Password">
						            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                    <span class="error" >*<?php echo $cpassErr; ?></span>
					            </div>
                                <br><br>
                              
                                <div class="col-12 mb-20">					
                                    <button class="btn" type="submit">Submit</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    
				</div>
			</div>
</div> 

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <style>
    .pass_show{position: relative} 

    .pass_show .ptxt { 

    position: absolute; 

    top: 50%; 

    right: 10px; 

    z-index: 1; 

    color: #f36c01; 

    margin-top: -10px; 

    cursor: pointer; 

    transition: .3s ease all; 

    } 

    .pass_show .ptxt:hover{color: #333333;} 
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		    
		    <label>Current Password</label>
		    <div class="form-group pass_show"> 
                <input type="password" value="faisalkhan@123" class="form-control" placeholder="Current Password"> 
            </div> 
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" value="faisal.khan@123" class="form-control" placeholder="New Password"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" value="faisal.khan@123" class="form-control" placeholder="Confirm Password"> 
            </div> 

            <div class="col-12 mb-20">					
                 <button class="btn" type="submit">Submit</button>
            </div>
            
		</div>  
	</div>
</div>

<script>
      
    $(document).ready(function(){
    $('.pass_show').append('<span class="ptxt">Show</span>');  
    });
  

    $(document).on('click','.pass_show .ptxt', function(){ 

    $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

    $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

    });  
</script> -->