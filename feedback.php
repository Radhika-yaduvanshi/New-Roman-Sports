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
        
                                        <h4 class="card-title" align="left">FEEDBACK LIST</h4>
										
                                        
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											 <tr>
                                                <th>FEEDBACK ID</th>
                                                <th>CUSTOMER NAME</th>
                                                <th>PRODUCT NAME</th>
                                                <th>FEEDBACK MESSAGE</th>
                                                <th>FEEDBACK DATE</th>
												<th>ACTION</th>
                                                
                                            </tr>
                                            </thead>

											<tbody>
                                            <p align="left"> <a href="reports/feedback.php?id=<?php echo $uid;?>"><input type= 'button'  value='REPORTS' onclick='report()' ></p>
											
                                            <?php
												$sql ="SELECT * FROM feedback f JOIN customer c JOIN product p WHERE f.c_id=c.c_id and f.p_id=p.p_id";
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['f_id'];
													
											?>
                                            <tr>
                                                <td><?php echo $row ['f_id']?></td>
												<td><?php echo $row ['c_name']?></td>
                                                <td><?php echo $row ['p_name']?></td>
                                                <td><?php echo $row ['f_mes']?></td>
                                                <td><?php echo $row ['f_date']?></td>
												<td><a href="feedback_del.php?id=<?php echo $uid;?>"><img src="delete.png" alt="logo-dark" height="35"></a>&nbsp</td>
                                                
                                            </tr>
											<?php
												}
											?>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
				
<?php include('includes/footer.php');?>