<?php
require 'header.php';
require_once ('config/connection.php');
?>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<br><br><br><br>
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				

				<!-- <div class="flex-w flex-c-m m-tb-10">
					
					
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div> -->
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				
			</div>
			<div class="row isotope-grid">
				<?php
					$id=$_GET['id'];
					$sql="select * from product p join subcategory sc where p.sc_id=sc.sc_id and p.sc_id=$id";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($result))
					{
						$p_id=$row['p_id'];  
						$sc_id=$row['sc_id'];
				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="../images/<?php echo "$row[p_img]"; ?>" alt="IMG-PRODUCT" height="335">

							<!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"> -->
							<a href="product-detail.php?id=<?php echo $p_id;?>&sc_id=<?php echo $sc_id;?>" class="block2-btn flex-c-m stext-103 cl0 size-102 bg1 bor2 hov-btn1 p-lr-15 trans-04">	
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.php?id=<?php echo $p_id;?>&sc_id=<?php echo $sc_id;?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['p_name'];?>
								</a>

								<span class="stext-105 cl3">
									Rs <?php echo $row['p_price']?>							
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2" data tool tip="Add to wishlist">
								
									<a href="wishlist_insert.php?id=<?php echo $p_id;?>"><i class="zmdi zmdi-favorite"></i></a>
								
									<!-- <a href="wishlist_insert.php?id=<?php echo $p_id;?>"><img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON"></a> -->
									<!-- <a href="wishlist_delete.php?id=<?php echo $p_id;?>"><img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON"></a> -->
								</a>
							</div>
						</div>

					</div>

				</div>
				<?php
	            	}
            	?>


				

				

				

				
				

				

				


			</div>

			<!-- Load more -->
			
		</div>
	</div>
		

	<?php
	require 'footer.php'
	?>