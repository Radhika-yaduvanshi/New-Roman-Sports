<?php include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>

<?php

$id=$_GET['id'];
$sql="select * from gallery where g_id=$id";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if ( isset($_POST["gimage"]))
	{
		
		$g_image=$_POST["gimage"];
		
		
		
		$g_desc=$_POST["gdesc"];
		
		
		
		
	if($g_image!=""  )
	if($g_desc!="")
			
			{
					$query="update gallery set
					g_image='".$g_image."',
					g_desc='".$g_desc."' where g_id='".$id."'"; 
				
						echo "success";
						$result = mysqli_query($conn,$query);
						if($result)
							{
								echo "<meta http-equiv='refresh' content='0;url=gallery.php'>";
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
                                        <h4 class="card-title mb-4" align="left">Add image</h4>

                                        <form method="POST" align="left">
                                        
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">g_image</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  value="<?php echo $row['g_image']?>"  name="gimage" class="form-control" id="horizontal-firstname-input" placeholder="Enter image ">
                                                  
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">g_desc</label>
                                                <div class="col-sm-9">
                                                  <input type="text" value="<?php echo $row['g_desc']?>"  name="gdesc" class="form-control" id="horizontal-firstname-input" placeholder="Enter image description ">
                                                </div>
                                                
                                            </div>
                                            
                     
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <br>

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
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