<?php include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content" align="right">
                    <div class="container-fluid">
        
                            <div class="col-10">
                                <div class="card m-5">
                                    <div class="card-body">
        
                                        <h4 class="card-title" align="left">DELIVERY BOY LIST </h4>
                                        
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											 <tr>
                                                <th>DELIVERY ID</th>
                                                <th>DELIVERY PASSWORD</th>
                                                <th>DELIVERY ADDRESS </th>
                                                <th>ORDER DATE </th>
                                                <th>DELIVERY EMAIL </th>
                                                <th>DELIVERY NAME</th>
                                                <th>DELIVERY CONTACTNO </th>
                                               		
                                                <th>ACTION</th>
                                            </tr>
                                            </thead>
										<tbody>
											<?php
												$sql ="SELECT * FROM deliveryboy d JOIN customer c  WHERE d.c_id=c.c_id ";
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['d_id'];
                                                    
											?>
                                            <tr>
                                                <td><?php echo $row ['d_id']?></td>
                                                <td><?php echo $row ['d_pass']?></td>
                                                <td><?php echo $row ['d_add']?></td>
                                                <td><?php echo $row ['o_date']?></td>
                                                <td><?php echo $row ['d_email']?></td>
                                                <td><?php echo $row ['d_name']?></td>
                                               
                                                <td><?php echo $row ['d_contno']?></td>
												
										        <td><a href="deliver_del.php?id=<?php echo $uid;?>"><img src="delete.png" alt="logo-dark" height="35"></a>&nbsp</td>
                                            </tr>
                                            
											<?php
												}
											?>
                                            
        
        
                                            
											
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
				
<?php include('includes/footer.php');?>