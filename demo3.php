<?php include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');


$pnameErr=$ppriceErr=$scidErr=$pdescErr=$pimageErr=$pquontatyErr= "";
$pname=$pprice=$scid=$pdesc=$filename=$pquontaty="";

?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{

if(empty($_POST['pname']))
{
    $pnameErr="Please Enter product Name";
}
else
{
    $pname=$_POST['pname'];
}


if(empty($_POST['pprice']))
{
    $ppriceErr="product price is required";
}
else
{
    $pprice=$_POST['pprice'];
}

if(empty($_POST['scid']))
{
    $scidErr="subcategory id  is required"; 
}
else
{
    $scid=$_POST['scid'];
}

if(empty($_POST['pdesc']))
{
    $pdescErr="product description is required'"; 
}
else
{
    $pdesc=$_POST['pdesc'];
}
	
if(empty($_POST['image']))
{
    $pimageErr=" product image is required"; 
}
else
{
    $pimage=$_POST['image'];
}

if(empty($_POST['pquontaty']))
{
    $pquontatyErr="product quontaty is required"; 
}
else
{
    $pquontaty=$_POST['pquontaty'];
}
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['pname']) &&  isset($_POST['pprice']) 
		&& isset($_POST['subcat']) && isset($_POST['pdesc'])
	&& isset($_FILES['image']) && isset($_POST['pquontaty'])) 
{

    $pname=$_POST['pname'];
    $pdesc=$_POST['pdesc'];
    $pprice=$_POST['pprice'];
    $sid=$_POST['subcat'];
   // $pimage=$_POST['pimage'];
	$pquontaty=$_POST['pquontaty'];
	
	$errors= array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = explode('.',$_FILES['image']['name']);
	$expresion = array("jpeg","jpg","png");
	
	// $scid=$_POST['scid'];
    // print_r($_POST);die;
}



if($pname!='' && $pdesc!='' && $pprice!='' && $file_name!=''  && $pquontaty!='')
{
	if(move_uploaded_file($file_tmp,"../images/".$file_name)==1)
	{
$sql="INSERT INTO product (p_name , p_desc , p_price ,sc_id,p_img,p_qty )
values('".$pname."' , '".$pdesc."' , '".$pprice."', '".$sid."','".$file_name."','".$pquontaty."' )";
//echo $sql;
//die;
$result=mysqli_query($conn,$sql);

if($result)
{
    echo '<meta http-equiv="refresh" content="0; url=Product.php">';
}
else
{
    echo "PLease check your result";
	}
}
}
else
{
  echo " Value is not set";

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
                                        <h4 class="card-title mb-4" align="left">Add product</h4>

                                        <form method="POST" align="left">
                                        
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">g_image</label>
                                                <div class="col-sm-9">
                                                <select class="form-control select2" name="subcat">
										<?php
											$sql1="select * from subcategory";
											$result=mysqli_query($conn,$sql1);
											while($row1=mysqli_fetch_array($result))
											{
										?>
                                                            <option value="<?php echo $row1['sc_id'];?>"><?php echo $row1['sc_name'];?></option>
                                                 <?php
											            }
                                                    ?>											
                                                        </select>
                                                   
                                                  <span class="error" >*<?php echo $scidErr; ?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">PRODUCT NAME</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="pname" class="form-control" id="horizontal-firstname-input" placeholder="Enter your product name ">
                                                  <span class="error" >*<?php echo $pnameErr; ?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">PRODUCT DESCRIPTION</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="pdesc" class="form-control" id="horizontal-email-input" placeholder="Enter your product description ">
                                                    <span class="error" >*<?php echo $pdescErr; ?></span>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">PRODUCT PRICE</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="pprice" class="form-control" id="horizontal-password-input" placeholder="Enter product price ">
                                                  <span class="error" >*<?php echo $ppriceErr; ?></span>
                                                </div>
                                            </div>

											<div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">PRODUCT IMAGE</label>
                                                <div class="col-sm-9">
                                                  <input type="file" name="image" class="form-control" id="horizontal-password-input" placeholder="Enter product image ">
                                                  <span class="error" >*<?php echo $pimageErr; ?></span>
                                                </div>
                                            </div>

											<div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">PRODUCT QUANTITY</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="pquontaty" class="form-control" id="horizontal-password-input" placeholder="Enter product quantity ">
                                                  <span class="error" >*<?php echo $pquontatyErr; ?></span>
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

<!-- <?php include('includes/footer.php'); ?> -->