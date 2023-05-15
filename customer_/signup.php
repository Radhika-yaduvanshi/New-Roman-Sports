<?php
//session_start();

// require("header.php");
require_once('config/connection.php');

?>
<?php

$nameErr=$contactErr=$emailErr=$addressErr=$passErr="";
$name=$contact=$email=$address=$pass="";

if($_SERVER['REQUEST_METHOD']=="POST")
{
if(empty($_POST['name']))
    {
        $nameErr="Please Enter Your Name";
    }
    else
    {
        $name=$_POST['name'];
    }

if(empty($_POST['contact']))
{
    $contactErr="Please Enter Your contact Number";
}
else
{
    $contact=$_POST['email'];
}

if(empty($_POST['email']))
{
    $emailErr="Please Enter Your Valid email";
}
else
{
    $email=$_POST['email'];
}

if(empty($_POST['address']))
{
    $addressErr="Please Enter Your address";
}
else
{
    $address=$_POST['address'];
}

if(empty($_POST['password']))
{
    $passErr="Please Enter password";
}
else
{
    $pass=$_POST['password'];
}

}

?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST["name"]) && isset($_POST["contact"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["password"]))
        {
            $name=$_POST['name'];
            $contact=$_POST['contact'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            

        if($name!='' && $contact!='' && $address!='' && $email!='' && $password!='')
        {
            $sql = "insert into customer(c_name,c_contno,c_add,c_email,c_pass)
            values('".$name."','".$contact."','".$address."','".$email."','".$password."')";
            //echo $sql;
            // die;
            $result=mysqli_query($conn,$sql);

            if($result)
            {
                echo "<meta http-equiv='refresh' content='0;url=login1.php'>";
            }
            else
            {
                echo "check your result";
            }
        }
        
        }
    }   
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <title>NEW ROMAN SPORTS</title>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="icon" type="image/png" href="images/icons/lawntennis9.jpg" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
                      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
                  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
                  *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins',sans-serif;
                  }
                  html, body{
                    display: grid;
                    height: 100vh;
                    width: 100%;
                    place-items: center;
                    background: linear-gradient(to right, #607B9B 0%, #CEE0F4 100%);
                  }
                  ::selection{
                    background: #ff80bf;

                  }
                  .container{
                    background: #fff;
                    max-width: 350px;
                    width: 100%;
                    padding: 25px 30px;
                    border-radius: 5px;
                    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
                  }
                  .container form .title{
                    font-size: 30px;
                    font-weight: 600;
                    margin: 20px 0 10px 0;
                    position: relative;
                  }
                  .container form .title:before{
                    content: '';
                    position: absolute;
                    height: 4px;
                    width: 33px;
                    left: 0px;
                    bottom: 3px;
                    border-radius: 5px;
                    background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
                  }
                  .container form .input-box{
                    width: 100%;
                    height: 45px;
                    margin-top: 25px;
                    position: relative;
                  }
                  .container form .input-box input{
                    width: 100%;
                    height: 100%;
                    outline: none;
                    font-size: 16px;
                    border: none;
                  }
                  .container form .underline::before{
                    content: '';
                    position: absolute;
                    height: 2px;
                    width: 100%;
                    background: #ccc;
                    left: 0;
                    bottom: 0;
                  }
                  .container form .underline::after{
                    content: '';
                    position: absolute;
                    height: 2px;
                    width: 100%;
                    background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
                    left: 0;
                    bottom: 0;
                    transform: scaleX(0);
                    transform-origin: left;
                    transition: all 0.3s ease;
                  }
                  .container form .input-box input:focus ~ .underline::after,
                  .container form .input-box input:valid ~ .underline::after{
                    transform: scaleX(1);
                    transform-origin: left;
                  }
                  .container form .button{
                    margin: 40px 0 20px 0;
                  }
                  .container .input-box input[type="submit"]{
                    background: linear-gradient(to right, #A7C1E1 0%, #607B9B 100%);
                    font-size: 17px;
                    color: #fff;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: all 0.3s ease;
                  }
                  .container .input-box input[type="submit"]:hover{
                    letter-spacing: 1px;
                    background: linear-gradient(to left, #A7C1E1 0%, #607B9B 100%);
                  }
                  .container .option{
                    font-size: 14px;
                    text-align: center;
                  }
                  .error{color:red;}


	</style>

  </head>
  <body>
    <div class="container">
      <form method="POST" action="#">
        <div class="title">Sign-Up</div>
        <div class="input-box underline">
          <input type="text" name="name" placeholder="Enter Your Name" >
          <div class="underline"></div>
          <span class="error" >*<?php echo $nameErr; ?></span>
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter Your Email" >
          <div class="underline"></div>
          <span class="error" >*<?php echo $emailErr; ?></span>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Enter Your Password" >
          <div class="underline"></div>
          <span class="error" >*<?php echo $passErr; ?></span>
        </div>
        <div class="input-box">
          <input type="contact" name="contact" placeholder="Enter Your Contactno." >
          <div class="underline"></div>
          <span class="error" >*<?php echo $contactErr; ?></span>
        </div>
        <div class="input-box">
          <input type="text" name="address" placeholder="Enter Your address" >
          <div class="underline"></div>
          <span class="error" >*<?php echo $addressErr; ?></span>
        </div>
        
        <div class="input-box button">
          <input type="submit" name="" value="Sign-up">
        </div>
        <div class="input-box button">
          <a href="login1.php" button>login</button></a>
        </div>
      </form>
        
       
    </div>
  </body>
</html>


