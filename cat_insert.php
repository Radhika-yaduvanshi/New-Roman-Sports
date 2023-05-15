<?php include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>

<?php

$catnameErr=$catdescErr="";
$catname=$catdesc="";

if($_SERVER['REQUEST_METHOD']=="POST")
{

if(empty($_POST['catname']))
{
    $catnameErr="Please Enter category Name";
}
else
{
    $catname=$_POST['catname'];
}


if(empty($_POST['catdesc']))
{
    $catdescErr="Please Enter category Description";
}else
{
    $catdesc=$_POST['catdesc'];
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
                                        <h4 class="card-title mb-4" align="left">ADD CATEGORY</h4>

                                        <form method="POST" align="left">
										
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">CATEGORY NAME</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="catname" class="form-control" id="horizontal-firstname-input" placeholder="Enter your category name ">
                                                  <span class="error" >*<?php echo $catnameErr; ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">CATEGORY DESCRIPTION</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="catdesc" class="form-control" id="horizontal-email-input" placeholder="Enter your category description ">
                                                    <span class="error" >*<?php echo $catdescErr; ?></span>
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
                                        <?php
								if($_SERVER['REQUEST_METHOD']=="POST")
								{
 
if(isset($_POST['catname']) &&  isset($_POST['catdesc']) )
{
    $catname=$_POST['catname'];
    $catdesc=$_POST['catdesc'];
    // print_r($_POST);die;
}

if($catname!='' && $catdesc!='' )
{
$sql="INSERT INTO category(cat_name,cat_desc )
values('".$catname."' , '".$catdesc."' )";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo '<meta http-equiv="refresh" content="0; url=category.php">';
}
else
{
    echo "PLease check your result";
}
}else{
    echo " Value is not set";
}

}


?>
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