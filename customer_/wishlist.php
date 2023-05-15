<?php include('header.php');
require_once('config/connection.php');
$uid=$_SESSION['c_id'];
?>
<?php
session_start();
error_reporting(0);

$id=$_GET['id'];
$sql="select * from product where p_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $pid=$_GET['id'];
    $cart_qty = $_POST['cart_qty'];
    //$size =$_POST['size'];
    
    echo "<meta http-equiv='refresh' content='0;url=cart_insert.php?p_id=$pid&cart_qty=$cart_qty'>";
    
}
?>
<!doctype html>

<html class="no-js" lang="">
    

    <body>
       
       
        <!-- Breadcrumbs Area Start -->
        <!-- <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index1.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Wishlist</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs Area End -->
        		
		<!-- Wish List Area Start -->
        <div class="section-padding-sm">
            <div class="container">
                <div class="block-title">
                    <br><br><br><br><br><br>
                    <h4 class="title" align="center">My Wishlists</h4><br><br>
                </div>
                <div class="cart-wishlist-table table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead bgcolor="#E8F0FA">
                            <tr>
                                <th class="column-1">Remove</th>
                                <th class="column-2">Image</th>
                                <th class="column-3">Product</th>
                                <th class="column-3">Product ID</th>
                                <th class="column-4">Unit Price</th>
                               
                                <th class="column-5"> Quick View</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                             $sql1="select * from wishlist w join product p join customer c where w.p_id=p.p_id and w.c_id=c.c_id and w.c_id=$uid";
                           
                                   $result1 =mysqli_query($conn,$sql1);

                                   while($row=mysqli_fetch_array($result1))
                                   {
                                      $uid=$row['wishlist_id'];
                                      $p_id=$row['p_id'];
                                      $sc_id=$row['sc_id'];
                                ?>

                            <tr class="table_row">

                                <td class="column-1"><a href="wishlist_delete.php?id=<?php echo $uid;?>"><i class="zmdi zmdi-delete cl3 hov-cl1"></i></a></td>
                                  <td class="column-2"><a href="#">
                                    <img src=images/<?php echo $row['p_img'];?> height="80" width="80" alt="" /></a>
                                </td>
                                <td class="column-3"><?php echo $row['p_name']; ?></td>
                                <td class="column-3"><a href="subcategories.php" ><?php echo $row['p_id'];?></a></td>
                                <td class="column=4">Rs.<?php echo $row['p_price'];?><input type="hidden" value="">
                                </td>
                 
                                <td class="column-5">                    
                                    <a href="product-detail.php?id=<?php echo $p_id;?>&sc_id=<?php echo $sc_id;?>">Quick View</a>
                                    
                                </td>

                               
                            </tr>

                            <?php
                                }
                             ?>
                                                             
                            
                        </tbody>

                    </table>
                </div>	
            </div>
        </div>
        <br><br><br><br>		
		<!-- Wish List Area End -->
		
		
		
<?php include('footer.php');?>