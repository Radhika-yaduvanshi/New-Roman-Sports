<?php
require 'header.php';
require_once ("config/connection.php");
session_start();
	error_reporting(0);
	$id=$_GET['id'];
	$sql="select * from subcategory where cat_id='$id'";
	$sc_res=mysqli_query($conn,$sql);
	$sc_arr=array();
	while($row=mysqli_fetch_assoc($sc_res))
	{
		$sc_arr[]=$row;
	}
?>

    <div class="sec-banner bg0 p-t-80 p-b-50">
        <br><br><br><br>

		<div class="p-b-10" align="center">
			<h3 class="ltext-103 cl5">
				Shop By Sub-Category
			</h3>
		</div><br><br>
		<div class="container">
			<div class="row">
			<?php
					foreach($sc_arr as $list)
					{
			?>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
				
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="../images/<?php echo "$list[sc_img]";?>" alt="IMG-BANNER" height="367">

						<a href="subcategories.php?id=<?php echo $list['sc_id']?>"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8" >
								<?php echo $list['sc_name']?>
								<a href="subcategories.php?id=<?php echo $list['sc_id']?>"></a>

								</span>

								<span class="block1-info stext-102 trans-04  p-b-8">
								
								</span>

								
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				
				</div>


				
				<?php } ?>
				
			</div>
		</div>
	</div>
    <?php
    require 'footer.php'
    ?>
    



















                