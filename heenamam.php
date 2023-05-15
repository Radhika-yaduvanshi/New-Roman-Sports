<?php
require_once('../config/connection.php');
include('includes/header.php');
// include('includes/topbar.php');
// include('includes/sidebar.php');
?>

<?php

$p_nameErr = $p_descErr = $p_priceErr = $p_qtyErr = $p_imgErr = $subcatErr = "";
$p_name = $p_desc = $p_price = $p_qty = $file_name = $subcat = "";
// $p_descErr = "";
// $p_desc = "";
// $p_priceErr = "";
// $p_price = "";
// $p_qtyErr = "";
// $p_qty = "";
// $p_imgErr = "";
// $file_name = "";
// $subcatErr = "";
// $subcat = "";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(empty($_POST['p_name']))
	{
		$p_nameErr = "product name is required";
	}
	else
	{
		$p_name = $_POST['p_name'];
	}

	if(empty($_POST['p_desc']))
	{
		$p_descErr = "product description is required";
	}
	else
	{
		$p_desc = $_POST['p_desc'];
	}

	if(empty($_POST['p_qty']))
	{
		$p_qtyErr = "product quantity is required";
	}
	else
	{
		$p_qty = $_POST['p_qty'];
	}

	if(empty($_POST['p_price']))
	{
		$p_priceErr = "product price is required";
	}
	else
	{
		$p_price = $_POST['p_price'];
	}

	if(empty($_POST['subcat']))
	{
		$subcatErr = "subcategory is required";
	}
	else
	{
		$subcat = $_POST['subcat'];
	}

    if(empty($_POST['image']))
	{
		$p_imgErr = "product image is required";
	}
	else
	{
		$p_img = $_POST['image'];
	}
}
?>

<?php

if ( isset($_POST["submit"]) )
{
	$sc = $_POST["subcat"];
	$pname = $_POST["p_name"];
	$pdesc = $_POST["p_desc"];
	$pprice = $_POST["p_price"];
	$pimg = $_POST["image"];
    $pqty = $_POST["p_qty"];

    if($pname!='' && $pdesc!='' && $pprice!='' && $pimg!='' && $pqty!='' )
    {
	$sql = "insert into product (sc_id,p_name,p_desc,p_price,p_img,p_qty) values('$sc','$pname','$pdesc','$pprice','$pimg','$pqty')";
	$result = mysqli_query($conn,$sql);
	
	if($result)
    {
    echo '<meta http-equiv="refresh" content="0; url=product.php">';
    }
    else
    {
    echo "PLease check your result";
    }   

    }
    else
    {
    echo " Value is not set";
    }

mysqli_close($conn);
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
                                        <h4 class="card-title mb-4" align="left">ADD PRODUCT</h4>

                                        <form method="POST" align="left">
										

                                            <div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">SUBCATEGORY ID</label>
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
                                                   
                                                  <span class="error" >*<?php echo $subcatErr; ?></span>
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">PRODUCT NAME</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="p_name" class="form-control" id="horizontal-firstname-input" placeholder="Enter your product name ">
                                                  <span class="error" >*<?php echo $p_nameErr; ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">PRODUCT DESCRIPTION</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="p_desc" class="form-control" id="horizontal-email-input" placeholder="Enter your product description ">
                                                    <span class="error" >*<?php echo $p_descErr; ?></span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">PRODUCT PRICE</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="p_price" class="form-control" id="horizontal-password-input" placeholder="Enter product price ">
                                                  <span class="error" >*<?php echo $p_priceErr; ?></span>
                                                </div>
                                            </div>
											<div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">PRODUCT IMAGE</label>
                                                <div class="col-sm-9">
                                                  <input type="file" name="image" class="form-control" id="horizontal-password-input" placeholder="Enter product image ">
                                                  <span class="error" >*<?php echo $p_imgErr; ?></span>
                                                </div>
                                            </div>
											<div class="row mb-4">
                                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">PRODUCT QUANTITY</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="p_qty" class="form-control" id="horizontal-password-input" placeholder="Enter product quantity ">
                                                  <span class="error" >*<?php echo $p_qtyErr; ?></span>
                                                </div>
                                            </div>
											
											

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                   <br>

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md" name="submit">SUBMIT</button>
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

<?php include('includes/footer.php') ;?>   