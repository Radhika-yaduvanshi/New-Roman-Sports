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
                        
                        <!-- start page title -->
                        
                        <!-- end page title -->

                       
        
                       
                            <div class="col-10">
                                <div class="card m-5">
                                    <div class="card-body">
        
                                        <h4 class="card-title" align="left">CATEGORY LIST</h4>
                                        <a href="cat_insert.php"> <p align="left"> CATEGORY INSERT </p></a>
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											 <tr>
                                                <th>CATEGORY ID</th>
                                                <th>CATEGORY NAME</th>
                                                <th>CATEGORY DESCRIPTION</th>
                                                <th>ACTION</th>
                                               
                                            </tr>
                                            </thead>
											<tbody>
                                            <p align="left"> <a href="reports/booking.php?id=<?php echo $uid;?>"><input type= 'button'  value='REPORTS' onclick='report()' ></p>
                                            
											<?php
												$sql ="select * from category";
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['cat_id'];
											?>
                                            <tr>
                                                <td><?php echo $row ['cat_id']?></td>
                                                <td><?php echo $row ['cat_name']?></td>
                                                <td><?php echo $row ['cat_desc']?></td>
                                                <td><a href="cat_del.php?id=<?php echo $uid;?>"><img src="delete.png" alt="logo-dark" height="35"></a>&nbsp
												<a href="cat_update.php?id=<?php echo $uid;?>"><img src="update.jpg" alt="logo-dark" height="35"></a>&nbsp</td>
												
                                            </tr>
											<?php
												}
											?>
                                            <!--</thead>-->
        
        
                                            <!--<tbody>
											
											
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>-->
                                            
											
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        <!-- </div> end row -->

                    </div> <!-- container-fluid -->
                </div>
            
                <!-- End Page-content -->
            </div>	

<?php include('includes/footer.php');?>
 