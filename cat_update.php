<?php include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>

<?php

$id=$_GET['id'];
$sql="select * from category where cat_id=$id";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if ( isset($_POST["catname"]))
	{
		$cat_name=$_POST["catname"];	
        $cat_desc=$_POST["catdesc"];
			
	if($cat_name!=""  )
	if($cat_desc!="" )		
			{
					$query="update  category set
					cat_name='".$cat_name."',
					cat_desc='".$cat_desc."' where cat_id='".$id."'"; 
				
						echo "success";
						$result = mysqli_query($conn,$query);
						if($result)
							{
								echo "<meta http-equiv='refresh' content='0;url=Category.php'>";
							}
							else
							{
								echo "ERROR:DATA NOT FOUND";
							}
			}
	}
	else{
				
				echo "ERROR:DATA NOT SET";
		}
}

      	
 ?> 
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <!-- ========== Left Sidebar Start ========== -->
            
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                <div class="page-content" align="right">
                    <div class="container-fluid">

                    


                            <div class="col-xl-10">
                                <div class="card m-5">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4" align="left">UPDATE CATEGORY</h4>

                                        <form method="POST" align="left">
									
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">CATEGORY NAME</label>
                                                <div class="col-sm-9">
                                                  <input type="text" value="<?php echo $row['cat_name']?>" name="catname" class="form-control" id="horizontal-firstname-input" placeholder="Enter your category name ">
                                                 
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">CATEGORY DESCRIPTION</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo $row['cat_desc']?>"  name="catdesc" class="form-control" id="horizontal-email-input" placeholder="Enter your category description ">
                                                    
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
													
                                                        <button type="submit" class="btn btn-primary w-md">SUBMIT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

<?php include('includes/footer.php');?>