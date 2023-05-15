<!-- header -->
<?php
require("header.php");
require_once('config/connection.php');
//require("includes/function.php");

?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_POST["contact_name"]) && isset($_POST["contact_email"]) && isset($_POST["contact_subject"]) && isset($_POST["contact_msg"]))
{
		$contact_name=$_POST['contact_name'];
		$contact_email=$_POST['contact_email'];
		$contact_subject=$_POST['contact_subject'];
		$contact_msg=$_POST['contact_msg'];
	   

   if($contact_name!='' && $contact_email!='' && $contact_subject!='' && $contact_msg!='')
	{
		$sql = "insert into contact(contact_name,contact_email,contact_subject,contact_msg)
		values('".$contact_name."','".$contact_email."','".$contact_subject."','".$contact_msg."')";
		//echo $sql;
		//die;
		$result=mysqli_query($conn,$sql);

		if($result)
		{
			echo "<meta http-equiv='refresh' content='0;url=index1.php'>";
		}
		else
		{
			echo "check your result";
		}
	}
}


}
?>
	
	<!-- Title page -->
	<!-- <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/11.jpg');">
		<h2 class="ltext-105 cl0 txt-center f">
			<b>
			Contact
 			</b>
		</h2>
	</section>	 -->
	<br><br><br><br><br><br>
		<h2 align="center"><b>Contact Us</b></h2>

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="text" id="contact_name" name="contact_name" placeholder="Enter your name">
							
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="email" id="contact_email" name="contact_email" placeholder="Enter your Email Address">
							<!-- <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON"> -->
						</div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="text" id="contact_subject" name="contact_subject" placeholder="Enter your subject">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" id="contact_msg" name="contact_msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit" value="submit">
							Submit
						</button>
					</form> 
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
							106 , Abhishek Complex
						Nr. Kameshwar Mahadev 
						Ankur Road , Naranpura,
						Ahmedabad-13.
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								+91 9427040188
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								newromansports@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<script src="js/main.js"></script>
<!-- Footer -->
<?php
require("footer.php");
?>