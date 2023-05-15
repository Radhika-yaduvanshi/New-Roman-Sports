<?php 
include('includes/header.php');
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
                                <div class="card m-5 " >
                                    <div class="card-body">
        
                                        <h4 class="card-title" align="left">Image List</h4>
                                        <br>
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
											 <tr>
                                                <th>gallery id</th>
                                               
                                                <th>gallery image</th>
                                                <th>gallery description</th>
                                                <th>action</th>
												
                                            </tr>
                                            </thead>
											<tbody>
											<?php
												$sql ="SELECT * FROM gallery";
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['g_id'];
													
											?>
                                            <tr>
                                                <td><?php echo $row ['g_id']?></td>
												
                                                <td><?php echo $row ['g_image']?></td>
                                                <td><?php echo $row ['g_desc']?></td>
												<td><a href="gallery_del.php?id=<?php echo $uid;?>"><img src="delete.png" alt="logo-dark" height="35"></a>&nbsp
                                                <a href="gallery_update.php?id=<?php echo $uid;?>"><img src="update.jpg" alt="logo-dark" height="35"></a>&nbsp</td>
                                            </tr>
											<?php
												}
											?>
                                            </thead>
											</tbody>
        
        
                                            
                                        </table>
                                        <a href="gallery_insert.php"> <p align="left"> Gallery Insert </p> </a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
				
<?php include('includes/footer.php');?>
                