<?php
session_start();
error_reporting(0);
require ('header.php');
require_once('config/connection.php');
$id=$_GET['id'];
$sql="select * from product where p_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_SESSION['c_id']))
	{
    $pid=$_GET['id'];
    $cart_qty = $_POST['cart_qty'];
    //$size =$_POST['size'];
    
    echo "<meta http-equiv='refresh' content='0;url=cart_insert.php?p_id=$pid&cart_qty=$cart_qty'>";
	}

else
{
	echo "<meta http-equiv='refresh' content='0;url=login1.php'>";

}
}
?>


	<!-- breadcrumb -->
	<!-- <div class="container">
        <br><br><br><br><br>
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
				Men
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Lightweight Jacket
			</span>
		</div>
	</div> -->
		<br><br><br>

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="../images/<?php echo $row['p_img']; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../images/<?php echo $row['p_img']; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../images/<?php echo $row['p_img']; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
                    <form method="POST">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            <?php echo $row['p_name'];?>
						</h4>

						<span class="mtext-106 cl2">
							Rs. <?php echo $row['p_price'];?>
						</span>

						<p class="stext-102 cl3 p-t-23">
                            <?php echo $row['p_desc'];?>
						</p>
						
						<!--  -->
						<div class="p-t-33">
							
							<!-- Quantity -->
							<div class="flex-w flex-r-m p-b-10">
										<div class="size-203 flex-c-m respon6">
											Quantity
										</div>
											
										<!-- <input type="text" name="cart_qty" min="1" max="5" style="border:solid 1px"  placeholder="Quantity"> -->
										<div class="size-204 respon6"> 
											<div class="rs1-select2 bor8 bg0">
												<select class="js-select2" name="cart_qty">
													 <!-- <option><?php echo $row['p_qty']; ?></option> -->
													 <option>1</option>
													 <option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option> 
													<option>9</option>
													<option>10</option>
												</select>
												<div class="dropDownSelect2"></div>
											</div>
										</div> 
							</div>	

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									
									<br><br><br>
									<button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										 
										Add to cart
										
										<!-- Add to cart -->
										
									</button>
									
									
								</div>
							</div>	
						</div>
                    </form>

						
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#feedback" role="tab">Feedback</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- description -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
								</p>
							</div>
						</div>

						<!-- add review/feedback -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										
										
										<!-- Add review -->
										<form class="w-full" method="POST">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<!-- <div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div> -->
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form>
										<?php
											if($_SERVER["REQUEST_METHOD"] == "POST")
											{
												if (isset($_POST["review"]))
												{
													$cid=$_SESSION['c_id'];
													$f_date=date("y-m-d");
													$pid=$_GET['id'];
													//$feedback_name=$_POST['feedback_name'];
													$f_mes=$_POST['review'];
										
													if($f_mes!='' )
													{
														$sql = "insert into feedback(f_mes,c_id,p_id,f_date)
														values('".$f_mes."','".$cid."','".$pid."','".$f_date."')";
														// echo $sql;
														//die;
														$result=mysqli_query($conn,$sql);
				
														if($result)
														{
															echo "<meta http-equiv='refresh' content='0;url=#'>";
														}
														else
														{
															echo "check your result";
														}
													}
												}
												else
											{
												echo "value not set";
											}
											}
											
										?>
										
									</div>
								</div>
							</div>
						</div>

						<!-- reviews -->
						<div class="tab-pane fade" id="feedback" role="tabpanel">
							
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								<table class="table-shopping-cart">
                                    
                                       <tr class="table_head">
                                            <th class="column-2">User name</th>
                                            <th class="column-3">Feedback</th>
                                            <th class="column-4">Date</th>
                                        </tr>

                                        	<?php
                                            	$sql="select * from feedback f join customer c join product p where f.c_id=c.c_id and f.p_id=p.p_id and f.p_id=$id";
                                                $result=mysqli_query($conn,$sql);
                                                while($row=mysqli_fetch_array($result))
												{
													$uid=$row['f_id'];
                                            ?>
                                            
                                        <tr class="table_row">
                                            <td class="column-2"><?php echo $row['c_name'];?></td>
                                            <td class="column-3"><?php echo $row['f_mes'];?></td>
                                            <td class="column-4"><?php echo $row['f_date'];?></td>
                                        </tr>
                                        
                                        <?php
                                			}
                                    	?>
                                       
                                    
                            	</table>

								</div>
							
						</div>

					</div>
				</div>
			</div>
		</div>


	</section>


	<div class="container px-4 py-5" id="icon-grid">


		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5"
			style="border:5px;border-color:gray ;">
			&nbsp;&nbsp;&nbsp;&nbsp;
			
				<div class="col d-flex align-items-start" style="border:5px;border-color:gray ;">
					
					<img src="images/quality.png" alt="" height="80" width="80">
					<div>
						<h4 class="fw-bold mb-0" style="color: black;">&nbsp; &nbsp;<b>Quality</b></h4><br>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High quality products</p>
					</div>
				</div>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<div class="col d-flex align-items-start">
					
					<img src="images/secure.png" alt="" height="80" width="80">
					<div>
						<h4 class="fw-bold mb-0" style="color: black;">&nbsp;&nbsp;<b>Secure Payment</b></h4><br>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avoid Storing Information</p>
					</div>
				</div>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<div class="col d-flex align-items-start">
					
					<img src="images/free-removebg.png" alt="" height="100" width="80">
					<div>
						<h4 class="fw-bold mb-0" style="color: black;">&nbsp;&nbsp;<b>Free Shipping</b></h4><br>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On all products</p>
					</div>
				</div>
			





		</div>
    </div>

	<!-- Related Products -->
	
		

	<?php
    require ('footer.php');
    ?>