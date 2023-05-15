<?php 
 require 'header.php';
 require_once ("config/connection.php");
// require_once('../config/connection.php');
 
  $uid=$_SESSION['c_id'];
?>
<br><br><br>

	<!-- breadcrumb -->
	
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head" bgcolor="#E8F0FA">
									<th class="column-1">Image</th>
									<th class="column-2">Product</th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
									<th class="column-6">Remove</th>
								</tr>

								<tbody>
                            
                             
                                
								<?php
								$sql="select * from add_to_cart a join product p join customer c where a.p_id=p.p_id and a.c_id=c.c_id and a.c_id=$uid"; 
								$total=0;
								$result=mysqli_query($conn,$sql);

                                 while($row =mysqli_fetch_array($result))
                                {
                                     $uid=$row['cart_id'];
                                 ?>
                            
                            	<tr class="table_row">
									<td class="column-1">
											<a href="cart_delete.php?id=<?php echo $uid;?>">
												<div class="how-itemcart1">
													<img src="../images/<?php echo $row['p_img']; ?>" alt="IMG">
												</div>
											</a>
									</td>
									<td class="column-2"><?php echo $row['p_name']; ?></td>
									<td class="column-3">Rs.<?php echo $row['p_price']; ?><input type="hidden" value="<?php echo 
									$row['p_price'];?>"></td>
									<td class="column-4">
										<?php echo $row['cart_qty'];?>
									</td>
									

									<td class="column-5">Rs.<?php echo $row['total_amount']; ?></td>
									
									
									<!-- $item_price = $item_price + ($item["price"] * $item["quantity"]); -->
        
									<td class="column-6"><a href="cart_delete.php?id=<?php echo $uid; ?>"><i class=" zmdi zmdi-delete cl3 hov-cl1"></i></a> </td>
								</tr>
								<?php
									$total += $row['cart_qty']*$row['p_price'];
								?>
                            <?php
                            }
                        	?>
                           </tbody>

								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							

							
							<a href="index1.php" button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Continue Shopping
						</button></a>

						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Total
						</h4>

						

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping Address:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									
									<?php 
											session_start();
											$uid=$_SESSION['c_id'];

 											$sql1="select c_add from customer where c_id=$uid";
											$result1=mysqli_query($conn,$sql1);
											$row=mysqli_fetch_array($result1)
											
									?>
									<?php
									echo $row['c_add'];
									?>
								</p>
								
								
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								<strong><p class="total_amount"><?php echo $total?></p></strong>
								</span>
							</div>
						</div>

						<a href="checkout2.php?total_amount=<?php echo $total?>"button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Checkout
						</button></a>
					</div>
				</div>
			</div>
		</div>
	</form>
		
	
		

<?php
include('footer.php');
?>