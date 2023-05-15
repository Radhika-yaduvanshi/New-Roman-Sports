<?php include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>

<?php
$g_imageErr=$g_descErr="";
$g_image=$g_desc="";

if($_SERVER['REQUEST_METHOD']=="POST")
{

if(empty($_POST['gimage']))
{
    $gimageErr="Please Enter Image";
}
else
{
    $gimage=$_POST['gimage'];
}

if(empty($_POST['gdesc']))
{
    $gdescErr="Please Enter Gallery Description";
}else
{
    $gdesc=$_POST['gdesc'];
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
                                                  <input type="text" name="gimage" class="form-control" id="horizontal-firstname-input" placeholder="Enter image ">
                                                  <span class="error" ><?php echo $g_imageErr; ?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">g_desc</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="gdesc" class="form-control" id="horizontal-firstname-input" placeholder="Enter image description ">
                                                </div>
                                                <span class="error" ><?php echo $g_descErr; ?></span>
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
                                        <?php
								if($_SERVER['REQUEST_METHOD']=="POST")
								{
    

if( isset($_POST['gimage']) &&  isset($_POST['gdesc']) )
{

    
    $gimage=$_POST['gimage'];
    $gdesc=$_POST['gdesc'];
    // print_r($_POST);die;

}



if( $gimage!='' && $gdesc!='' )
{
$sql="INSERT INTO gallery(g_image,g_desc )
values('".$gimage."' , '".$gdesc."' )";
$result=mysqli_query($conn,$sql);

if($result){
    echo '<meta http-equiv="refresh" content="0; url=gallery.php">';
}else{
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