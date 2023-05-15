<?php
require("header.php");
require_once('config/connection.php');

?>
<br><BR><BR><BR>
<!-- 
// session_start();
// error_reporting(0);
// $customer_session=$_SESSION['c_id'];
?> -->
<?php 
    // if ($_SERVER["REQUEST_METHOD"] == "POST")
    // {
        // if ( isset($_POST["c_pass"]) && isset($_POST["n_pass"]) && isset($_POST["con_pass"]))
        if (isset ($_POST['update']))
        {
            // $c_pass=$_POST["c_pass"];
            // $n_pass=$_POST["n_pass"];
            // $con_pass=$_POST['con_pass'];
            $uid=$_SESSION['c_id'];
            $cpass=$_POST['c_pass'];
            $npass=$_POST['n_pass'];
            $conpass=$_POST['con_pass'];
            $que1="select c_pass from customer where c_id='$uid'";
            $sql1=mysqli_query($conn,$que1);
            $row=mysqli_fetch_assoc($sql1);
            // $pass=$row['c_pass'];
            
            if( $row['c_pass'] && $cpass )
            {

            
            $que="update customer set c_pass='$conpass' where c_id='$uid'";
            $sql=mysqli_query($conn,$que);
            if(!$sql)
            {
                echo "data is not updated";
            }
            echo "<meta http-equiv='refresh' content='0;url=index1.php'>";
        }
        }            
            // if($c_pass!='' && $n_pass!='' && $con_pass!='')
            // {
                // $sql7= "update customer set c_pass='".$con_pass."' where c_id ='$customer_session'";
                //echo $sql
                //die;
                // $result7=mysqli_query($conn,$sql7);
                // if($row = mysqli_fetch_assoc($result7))
                // {
                //     $userId = $row['id'];
                //     if($row > 0)
                //     {
                //         session_start();
                //         //$_SESSION['loggedin'] = true;
                //         $_SESSION["c_id"] = $row['c_id'];
                //         $_SESSION["c_name"] = $row['c_name'];
                //         echo "<meta http-equiv='refresh' content='0;url=index1.php'>";
                //     }
                
                // }
                // if($result7)
                // {
                    // echo "<meta http-equiv='refresh' content='0;url=index1.php'>";
                // }
    //             else
    //             {
    //                 echo "check your result";
    //             }

    //         }
    //     }
    //     else
    //     {
    //         echo "value not set";
    //     }
    // }
?>

<div class="container">
    
        
    <div class="row justify-content-left">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <!-- <div class="text-primary p-4"> -->
                <!-- <h5 class="cl13 f">YOUR PROFILE</h5> -->
                <!-- <script>
                    (function() {
                
                    // Create input element for testing
                    var inputs = document.createElement('input');
                    
                    // Create the supports object
                    var supports = {};
                    
                    supports.autofocus   = 'autofocus' in inputs;
                    supports.required    = 'required' in inputs;
                    supports.placeholder = 'placeholder' in inputs;
                
                    // Fallback for autofocus attribute
                    if(!supports.autofocus) {
                        
                    }
                    
                    // Fallback for required attribute
                    if(!supports.required) {
                        
                    }
                
                    // Fallback for placeholder attribute
                    if(!supports.placeholder) {
                        
                    }
                    
                    // Change text inside send button on submit
                    var send = document.getElementById('register-submit');
                    if(send) {
                        send.onclick = function () {
                            this.innerHTML = '...Sending';
                        }
                    }
                
			 	    })();
			    </script> -->
            <!-- </div>   -->
            <div class="card-body pt-0"> 
                <div class="auth-logo">
                    <div class="p-2">
                        <form action="" method="POST" >
                            <h4 align="center">Change Password</h4>
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="text" name="cpass" value="" class="form-control" placeholder="Enter Current password" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="text" name="n_pass" value="" class="form-control" placeholder="Enter New password" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="text" name="con_pass" value="" class="form-control" placeholder="Enter Confirm password" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            <div class="mt-3 d-grid">
                                <button class="btn bg1 cl0" name="update" value="update" type="submit">Update</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php
require("footer.php");

?>