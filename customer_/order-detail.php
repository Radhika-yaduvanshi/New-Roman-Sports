<!-- header -->
<?php
require("header.php");
require_once('config/connection.php');
?>
<?php
session_start();
$oid=$_GET['o_id'];
$uid=$_SESSION['c_id'];

//  $sql="select * from order_detail od join product p join order_master m where od.p_id=p.p_id and od.o_id=m.o_id and m.c_id=$uid";
$sql="select * from order_detail od join product p where od.p_id=p.p_id";
$result=mysqli_query($conn,$sql);
?>



    <div class="block-title">
                    <br><br><br><br>
                    <h4 class="title" align="center">My Orders</h4><br><br>
                </div>	
		
        <!-- table -->
        <div class="cart-items" style="margin:50px">
            <table class="table table-bordered" cellpadding="10" cellspacing="1" style="padding: 20px 20px 20px 20px">
                <thead bgcolor="#E8F0FA">
                    <tr>
                        <th style="text-align:center;" width="10%">Order Id</th>
                        <th style="text-align:center;" width="20%">Product Name</th>
                        <th style="text-align:center;" width="10%">Quantity</th>
                        <th style="text-align:center;" width="10%">Total</th>
                        <th style="text-align:center;" width="10%">Date</th>

                    </tr>	
                </thead>
                
                <tboby bgcolor="#E8F0F4">
                    <?php
                        while($row=mysqli_fetch_array($result))
                        {												
                    ?>
                    <tr>                               
                        <td><?php echo $row['od_id'];?></td> 
                        <td><?php echo $row['p_name'];?></td>
                        <td><?php echo $row['od_quantity'];?></td>
                        <td>Rs <?php echo $row['od_amount'];?></td>
                        <td> <?php echo $row['od_date'];?></td>      
                    </tr>
                    <?php } ?>

                    </tbody>
            </table>
        </div> 



        
                  
<!-- footer -->
<?php
require("footer.php");
?>