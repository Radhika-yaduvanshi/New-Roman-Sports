<?php
require_once ("config/connection.php");
session_start();
	error_reporting(0);
	
	$cat_res=mysqli_query($conn,"select * from category");
	$cat_arr=array();
	while($row=mysqli_fetch_assoc($cat_res))
	{
		$cat_arr[]=$row;
	}
 ?> 

<!DOCTYPE html>
<html lang="en">

<head>
	<title>NEW ROMAN SPORTS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/lawntennis9.jpg" />
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
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">

	<!--===============================================================================================-->
	<style>
			/* footer {background-color: #A0104E;} */
			.content-topbar
			{background-color: #CEE0F4;}
			.left-top-bar
			{background-color: #CEE0F4;}
			header
			{background-color: #A7C1E1;}
			footer.bg3
			{background-color: #CEE0F4;}
			div.top-bar
			{background-color: #CEE0F4;}
			/* .btn-back-to-top:hover {
			opacity: 1;
			background-color: #607B9B;
			} */
			.block1-txt:hover {
		/* background-color: rgba(103,117,214,0.8); */
		background-color:#CEE0F4;
		opacity: 1;
		}
						

	</style>

</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar" style="color: #0d0000;">
						Free shipping for all products
					</div>

					
				</div>
			</div>

            <div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="index1.php" class="logo">
						<img src="mylogo.png" alt="IMG-LOGO" >
					</a>

					<!-- Menu desktop -->
                    <div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index1.php">Home</a>
							</li>

							<li>
								<a href="allproduct.php">Shop</a>
								
								<ul class="sub-menu">
									<?php
									foreach($cat_arr as $list)
									{
									?>
									<li><a href="categories.php?id=<?php echo $list['cat_id']?>"><?php echo $list['cat_name']?></a>
									
									
									<?php } ?>

								</ul>
								
							</li>

							<li>
								<a href="contact.php">Contact us</a>
							</li>

							<li>
								<a href="about.php">About us</a>
							</li>

							
							<li> 
							<a href="#">Profile</a>
								<ul class="sub-menu">
									<!-- <li><a href="loginregister.php">Login In</a></li> -->
								    <!-- <li><a href="type="bu<button tton" onclick="popup('login-popup')">">Login</button></li> -->

									<!-- <li><a href="<button type="button" onclick="popup('login-popup')">Login</a></li> -->
									<!-- <li><a href="<button type="button" onclick="popup('register-popup')">Register</a></li> -->
									<!-- <li><button type="button" onclick="popup('register-popup')">Register</button></li> -->
									<!-- <li><a href="#">Register</a></li> -->
									<!-- <li><a href="#">Sign In</a></li> -->
									<li><a href="login1.php">Login/Sign Up</a></li>
									<!-- <li><a href="registerkhushi.php">Register</a></li> -->
									<li>
										<?php if(strlen($_SESSION['c_id']!=0)) {?>
											<a href="logout.php">Logout</a>
										<?php } ?>
									</li>
									<li>
										<?php if(strlen($_SESSION['c_id']==0)) {?>
										<!-- <a href="order-detail.php">My order</a> -->
										<?php } ?>
									</li>
									<li>
										<?php if(strlen($_SESSION['c_id']==0)) {?>
										<!-- <a href="order-detail.php">My order</a> -->
										<?php } ?>
									</li>
									<li>
										<?php if(strlen($_SESSION['c_id']!=0)) {?>
										<a href="order-detail.php">My order</a>
										<?php } ?>
									</li>
									<li>
										<?php if(strlen($_SESSION['c_id']!=0)) {?>
										<a href="myprofile.php">My Profile</a>
										<?php } ?>
									</li>
									<li>
										<?php if(strlen($_SESSION['c_id']==0)) {?>
										<!-- <a href="order-detail.php">My order</a> -->
										<?php } ?>
									</li>
									
								</ul>
							</li> 

							<!-- <div class="sign-in-up">
								<button type="button" onclick="popup('login-popup')">Login</button>
								<button type="button" onclick="popup('register-popup')">Register</button>
							</div>
							 -->
							
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div> -->

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
							
							<i class="zmdi zmdi-shopping-cart"></i>
							
							
						</div>

						<a href="wishlist.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 " >
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
						&nbsp;&nbsp;&nbsp;&nbsp;

						<!-- <a href="#">logout</a> -->
						<div class="menu-desktop signup cl2 hov-cl1">
							<li>
								<?php if(strlen($_SESSION['c_id']==0)) {?>
									<a href="login1.php" class="cl1" style="color:black;"><b>Login</b></a>
								<?php } ?>
							</li>
							<?php if(strlen($_SESSION['c_id']!=0)) {?>
							<li>
								<a href="logout.php" class="cl1" style="color:black;"><b>Logout</b></a>
								<?php } ?>
							</li>

						</div>
					</div>
				</nav>
			</div>	
		</div>

	


	

	  <!-- register form ending -->

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<!-- <div class="dis-none panel-search w-full p-t-10 p-b-15"> -->
					<!-- <div class="bor8 dis-flex p-l-15"> -->
						<!-- <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04"> -->
							<!-- <i class="zmdi zmdi-search"></i> -->
						<!-- </button> -->

						<!-- <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" -->
							<!-- placeholder="Search"> -->
					<!-- </div> -->
				<!-- </div> -->
				



				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
					data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
					data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>


				<div class="sign-in-up">
								<button type="button" onclick="popup('login-popup')">Login</button>
								<button type="button" onclick="popup('register-popup')">Register</button>
				</div>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	


	<!-- register form startingg -->

	

	  <!-- register form ending -->

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<?php $uid=$_SESSION['c_id']; ?>
				<?php
					$sql="select * from add_to_cart a join product p join customer c where a.p_id=p.p_id and a.c_id=c.c_id and a.c_id=$uid";
					$result =mysqli_query($conn,$sql);
					while($row =mysqli_fetch_array($result))
					{
						$uid=$row['cart_id'];
					?>

				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<a href="cart_delete.php?id=<?php echo $uid;?>">
							<div class="header-cart-item-img">
								<img src="../images/<?php echo $row['p_img']; ?>"   alt="IMG">
							</div>
						</a>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $row['p_id']; ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $row['p_price']; ?>
							</span>
						</div>
					</li>

					
					
				</ul>
				<?php } ?>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Rs.<?php echo $row['total_amount']; ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="cart.php"
							class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="checkout.php"
							class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Checkout
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>