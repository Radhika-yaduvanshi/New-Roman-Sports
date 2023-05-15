

<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<!-- <style>

	.p-b-10{
		style="color: #0d0000;"
	}
</style> -->
</head>
<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30" style="color: #0d0000;">
						Categories
					</h4>

					<ul >
						<li class="p-b-10">
							<a href="categories.php?id=1" class="stext-107 cl7 hov-cl1 trans-04" style="color: #0d0000;">
								Tennis
							</a>
						</li>

						<li class="p-b-10">
							<a href="categories.php?id=3" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Cricket
							</a>
						</li>

						<li class="p-b-10">
							<a href="categories.php?id=2" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Football
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30"style="color: #0d0000;">
						Information
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="about.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								About Us
							</a>
						</li>

						<li class="p-b-10">
							<a href="faq.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30"style="color: #0d0000;">
						My Account
					</h4>
					<ul>
						<li class="p-b-10">
							<a href="signup.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Register
							</a>
						</li>

						<li class="p-b-10">
							<a href="login1.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Login
							</a>
						</li>

						<li class="p-b-10">
							<a href="logout.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Logout
							</a>
						</li>
					</ul>
				</div>



				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30"style="color: #0d0000;">
						Services
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="contact.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Contact us
							</a>
						</li>

						

						<!-- <li class="p-b-10">
							<a href="order-detail.php" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								My Order
							</a>
						</li> -->
						<li >
										<?php if(strlen($_SESSION['c_id']==0)) {?>
										<!-- <a href="order-detail.php">My order</a> -->
										<?php } ?>
									</li>
									<li class="p-b-10">
										<?php if(strlen($_SESSION['c_id']!=0)) {?>
										<a href="order-detail.php" style="color: #0d0000;">My order</a>
										<?php } ?>
						</li>

						<li >
										<?php if(strlen($_SESSION['c_id']==0)) {?>
										<!-- <a href="order-detail.php">My order</a> -->
										<?php } ?>
									</li>
									<li class="p-b-10">
										<?php if(strlen($_SESSION['c_id']!=0)) {?>
										<a href="Wishlist.php" style="color: #0d0000;">Wishlist</a>
										<?php } ?>
						</li>

						<!-- <li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04"style="color: #0d0000;">
								Wishlist
							</a>
						</li> -->

						<!-- <li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Return
							</a>
						</li> -->
					</ul>
				</div>


				





				<div class="col-sm-6 col-lg-3 p-b-50">
					
					<h4 class="stext-301 cl0 p-b-30"style="color: #0d0000;">
						Contact Us On
					</h4>

					<p class="stext-107 cl7 size-201"style="color: #0d0000;">
						106 , Abhishek Complex
						Nr. Kameshwar Mahadev 
						Ankur Road , Naranpura,
						Ahmedabad-13.
						
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"style="color: #0d0000;">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"style="color: #0d0000;">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"style="color: #0d0000;">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50"style="color: #0d0000; ">
					<h4 class="stext-301 cl0 p-b-30"style="color: #0d0000;">
						Newsletter
					</h4>

					<form method="POST"style="color: #0d0000;">
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7 "style="color: #0d0000;" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
						<?php
require_once("lib/function.php");
require_once("PHPMailer/PHPMailerAutoload.php");
		
		
		if ($_SERVER["REQUEST_METHOD"]=="POST") 
			{
				$to = $_POST['email'];
				
			
				
					$message = "<h3>Thank you for subscription. Please do not share</h3>";
					$subject = "Request For OTP";		
					$mailSent = send_mail($to, $message, $subject);
					
					if ($mailSent) 
					{
						session_start();
						$_SESSION['id'] = $to;
						echo "<script>	
									window.location='index1.php';
							  </script>";
					} 
					else
					{

					}
				}
		             ?>    



							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" type="submit" style="color: #0d0000;">
								Subscribe
							</button>
						
						</div>
					</form>
				</div>

				
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center"style="color: #0d0000;">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved 
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


		

    <!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

