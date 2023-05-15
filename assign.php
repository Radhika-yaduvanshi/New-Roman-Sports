<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>

<?php

$orderErr=$deliveryErr=$deliverystatusErr="";
$order=$delivery=$deliverystatus="";

if($_SERVER['REQUEST_METHOD']=="POST")
{

if(empty($_POST['delivery']))
{
    $deliveryErr="Please Enter Delivery Name";
}
else
{
    $delivery=$_POST['delivery'];
}


if(empty($_POST['deliverystatus']))
{
    $deliverystatusErr="Please Enter Status";
}
else
{
    $deliverystatus=$_POST['deliverystatus'];
}

}

?>

<?php

if($delivery!='' )
		{
           
            $oid=$_GET['id'];
			$deliverystatus=$_POST['deliverystatus'];
			$delivery=$_POST['delivery'];
            $date = date("y-m-d");
			$sql = "insert into assign(d_id,status,o_id,date)
			values('".$delivery."','".$deliverystatus."' ,'".$oid."' ,'".$date."')";
			
			$result=mysqli_query($conn,$sql);
            
			if($result)
			{
				echo "<meta http-equiv='refresh' content='0;url=order_master.php'>";
                
			}
			else
			{
				echo "check your result";
            }
	    }
   
?>
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <!-- ========== Left Sidebar Start ========== -->
            
            <!-- Left Sidebar End -->
            <style>
		   .error
		   {
			   color:red;
		   }
</style>
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content" align="right">
                    <div class="container-fluid">

                            <div class="col-xl-10">
                                <div class="card m-5">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4" align="left">ASSIGN</h4>

                                        <form method="POST" align="left">
                                        <div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">DELIVERY NAME</label>
                                        <div class="col-sm-9">
										
                                        <select class="form-control select2" name="delivery">
										<?php
											$sql1="select * from deliveryboy";
											$result1=mysqli_query($conn,$sql1);
											while($row1=mysqli_fetch_array($result1))
											{
										?>
                                                            <option value="<?php echo $row1['d_id'];?>"><?php echo $row1['d_name'];?></option>
                                                 <?php
											}
?>											
                                                        </select>
                                           
                                        </div>
                                        </div>

                                          
                                            <div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">DELIVERY STATUS</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="deliverystatus" class="form-control" id="horizontal-password-input" placeholder="Enter delivery status">
                                                  <span class="error" >*<?php echo $deliverystatusErr; ?></span>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <br>

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

<?php
include('includes/footer.php');
?>         