<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');

$user = "SELECT count(*) as total_order FROM `order_detail`";
$result = mysqli_query($conn,$user);
$row = mysqli_fetch_array($result);
$order_count = $row['total_order'];

$user = "SELECT count(*) as total_customers FROM `customer`";
$result = mysqli_query($conn,$user);
$row = mysqli_fetch_array($result);
$user_count = $row['total_customers'];

$user = "SELECT sum(od_amount) as total_revenue FROM `order_detail`";
$result = mysqli_query($conn,$user);
$row = mysqli_fetch_array($result);
$revenue_count = $row['total_revenue'];
?>

<br>
<!-- start page content -->
<div class="page-content-wrapper">
<div class="page-content">

<!-- start widget -->
<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><img src="totalorder.png" height="60px"/></span>
									<!-- <img src="totaluser.png"/> -->
									<div class="info-box-content">
										<span class="info-box-text">Total Orders</span>
										<span class="info-box-number"><?php echo $order_count;?></span>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><img src="totaluser.png" height="55px"/></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Users</span>
										<span class="info-box-number"><?php echo $user_count;?></span>
										
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><img src="totalrevenue.png" height="55px"/></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Revenue</span>
										<span class="info-box-number"><?php echo $revenue_count;?></span>
									
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
</div>
<!-- end widget -->

<!-- start Payment Details -->
<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Booking Details</header>
									
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														<th>ORDER ID</th>
														<th>CUSTOMER NAME</th>
														<th>ORDER DATE</th>
														<th>ORDER STATUS</th>
														<th>VIEW DETAILS</th>
													</tr>
												</thead>
												<tbody>
												<?php
												$sql ="SELECT * from order_master o join customer c where o.c_id=c.c_id  and o.o_date='".date('y_m_d')."' ";
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['o_id'];
													$email=$row['c_email'];
												?>
													<tr>
														<td> <?php echo $row ['o_id']?> </td>
														<td> <?php echo $row ['c_name']?> </td>
														<td> <?php echo $row ['o_date']?> </td>									
														<td>
														<?php
														if($row['o_status']==0)
														{														
														?>														
														<a href="accept.php?id=<?php echo $uid;?>&email=<?php echo $email;?>">Accept</a> <a href="reject.php?id=<?php echo $uid;?>&email=<?php echo $email;?>">Reject</a></td>
														<?php
                                                		}												
														else if($row['o_status']==1)
														{
															echo"<h6 style='color:#18F70D'>accepted</h6>";
														}
														else if($row['o_status']==2)
														{
															echo"<h6 style ='color:red'>rejected</h6>";
														}
														?>													
                                                        <td><a href="order_detail.php?id=<?php echo $uid;?>">View Details</a></td> 
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
<!-- end Payment Details -->



</div>
</div>

<?php
include('includes/footer.php');
?>   