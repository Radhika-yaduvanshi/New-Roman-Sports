<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
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
        
                                        <h4 class="card-title" align="left">Invoice List</h4>
										<br>
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											 <tr>
                                                <th>invoice id</th>
                                                <th>order id</th>
                                                <th>offer id</th>
                                                <th>product id</th>
                                                
                                                <th>action</th>
												
                                            </tr>
                                            </thead>
											<tbody>
											<?php
												$sql ="SELECT * FROM invoice i JOIN order_master o  WHERE i.o_id=o.o_id ";
                                               
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['i_id'];
													
											?>
                                            <tr>
                                                <td><?php echo $row ['i_id']?></td>
												<td><?php echo $row ['o_id']?></td>
                                                <td><?php echo $row ['of_id']?></td>
                                                <td><?php echo $row ['p_id']?></td>
												
                                                <td><a href="invoice_del.php?id=<?php echo $uid;?>"><img src="delete.png" alt="logo-dark" height="35"></a>&nbsp</td>
                                                
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
				
<?php
include('includes/footer.php');
?>             