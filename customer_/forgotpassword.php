

 <?php
// require("includes/header.php");
require_once('config/connection.php');
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');
?>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") 
    {
        
        if(isset($_POST['email']) )
        {
            
            
            $Emailaddress= mysqli_real_escape_string($conn,$_POST['email']);
            
            
            $query = "select * from customer where c_email = '".$Emailaddress."'";
            //echo $query;
            //die;
            $result = mysqli_query($conn, $query);
            $row=mysqli_fetch_array($result);
            
            if (mysqli_num_rows($result) == 1)
            {
                    $arr = array();
                    $to = $row['c_email'];
                    
                    $arr = $row ;
                    $otp = mt_rand(000000,999999);
                    $query1 = "update customer
                    set otp = ".$otp.", otpused = 0 where 
                    c_email = '".$to."'";
                    //echo $query1;
                    //die;
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
                                        window.location='resetpassword.php';
                                </script>";
                        } 
                        else
                        {
                        
                        }
                    $array = array('status' => '200' , 'details' => $arr);
                    }   
                
            }   
        }
        
        else
        {
            echo "asdasasdad"; 
			die;
        }
	}

?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
.form-gap {
padding-top: 70px;
}
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
<div class="form-gap"></div>
<div class="container">
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
		  <div class="panel-body">
			<div class="text-center">
			  <h3><i class="fa fa-lock fa-4x"></i></h3>
			  <h2 class="text-center">Forgot Password?</h2>
			  <p>You can reset your password here.</p>
			  <div class="panel-body">

				<form  method="post">

				  <div class="form-group">
					<div class="input-group">
					  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
					  <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
					  
					</div>
				  </div>
				  <div class="form-group">
					<!-- <a href="resetpassword.php"> -->
					<a href="resetpassword.php"> <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit" >
				  </div>
				  
				  <!-- <input type="hidden" class="hide" name="token" id="token" value="">  -->
				  
				</form>

			  </div>
			</div>
		  </div>
		</div>
	  </div>
</div>
</div>