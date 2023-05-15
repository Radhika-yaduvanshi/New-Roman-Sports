<!-- header -->
<?php
require("header.php");
require_once('config/connection.php');
//require("includes/function.php");

?>

	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
	
		<div class="container">
			
			<div class="row isotope-grid">
				<?php
					$id=$_GET['id'];
					$sql="select * from product p join sub_category sc where p.sc_id=sc.sc_id and p.sc_id=$id";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($result))
					{
						$p_id=$row['p_id'];  
						$sc_id=$row['sc_id'];
				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="images/redvelvet/1.webp" alt="IMG-PRODUCT">

							<a href="product_detail.php?id=<?php echo $p_id;?>&sc_id=<?php echo $sc_id;?>" class="block2-btn flex-c-m stext-103 cl0 size-102 bg1 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail.php?id=<?php echo $p_id;?>&sc_id=<?php echo $sc_id;?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['p_name'];?>
								</a>

								<span class="stext-105 cl3">
									Rs <?php echo $row['p_price']?>							
								</span>
							</div>

						</div>
					</div>
				</div>
				<?php
	            	}
            	?>
			</div>
			
		</div>
		
	</div>



<!-- Footer -->
<?php
require("footer.php");
?>