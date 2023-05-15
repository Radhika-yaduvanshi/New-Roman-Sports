
<?php
require("header.php");
require_once('config/connection.php');
session_start();
?>
<?php
$oid=$_GET['id'];
$uid=$_SESSION['c_id'];
$sql="select * from `order_master` o join order_detail od join product p where o.o_id=od.o_id and od.p_id=p.p_id and o.o_id='".$oid."'";
$result=mysqli_query($conn,$sql);
?>
<br><br><br><br><br>

<!-- <?php echo '<script>alert("Your Order has been Placed.")</script>'?> -->
<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
	
</div>

                <div class="col-sm-10 col-lg-7 col-xl-6 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                               
                            <h4 class="mtext-109 cl2 p-b-30" align="center">
                                Your Order
                            </h4>
                        
                                    

                            <div class="table-responsive">
								<table class="table m-0">
									<thead>
										<tr>
											<th class="pt-0 border-top-0">Product</th>
											<th class="pt-0 border-top-0">Total</th>
										</tr>							
									</thead>
                                    
									<tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($result))
                                        {
                                        ?>
										<tr>                                        
											<td><?php echo $row['p_name'];?>   x 
                          <?php echo $row ['o_quantity'];?></td>
											<td><?php echo $row['od_amount'];?></td>                           
										</tr>
										<?php } ?>
									</tbody>
                                
									<tfoot>
										<tr>
											<th>Cart Subtotal</th>
											<td><b><?php echo $_GET['total_amount'];?></b></td>
										</tr>
										<tr>
											<th>Shipping</th>
											<td>
											    <input type="radio" name="shipping" /> Free Shipping
												
											</td>
										</tr>
										<tr>
											<th>Order Total</th>
											<td><strong><?php echo $_GET['total_amount'];?></strong></td>
										</tr>								
									</tfoot>
								</table>
							</div>
                            <?php $_SESSION['total_amount'] = $_GET['total_amount']; 
                            $_SESSION['order_id'] = $oid;
                            $_SESSION['c_id'] = $uid; ?>
                            <input type="hidden" id="o_id" tabindex="1" maxlength="20" size="20" name="o_id" autocomplete="off" value="<?php echo $oid ?>">
                <!-- <input type="hidden" id="ORDER_DB_ID" tabindex="1" maxlength="20" size="20" name="ORDER_DB_ID" autocomplete="off" value="<?php echo  $_SESSION['order_ID']?>"> -->
                <input type="hidden" id="c_id" tabindex="1" maxlength="20" size="20" name="c_id" autocomplete="off" value="<?php echo  $uid ?>">
                <input type="hidden" id="c_name" tabindex="1" maxlength="20" size="20" name="c_name" autocomplete="off" value="<?php echo  $_SESSION['c_name'] ?>">
                <input type="hidden" id="c_email" tabindex="1" maxlength="20" size="20" name="c_email" autocomplete="off" value="<?php echo  $_SESSION['c_email'] ?>">
                <input type="hidden" id="c_contno" tabindex="1" maxlength="20" size="20" name="c_contno" autocomplete="off" value="<?php echo  $_SESSION['c_contno'] ?>">
                <input type="hidden" name="TXN_AMOUNT" value="<?php echo $_SESSION['total_amount'] ?>">

						
                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <button id="rzp-button1" name="orderbtn" type="submit" value="Pay Now" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                               Pay Now
                            </button>
                        </div>
                    </div>
                </div>


				<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

var total_amaount = document.querySelector("input[name=TXN_AMOUNT]").value;
var order_id = document.querySelector("input[name=o_id]").value;
var user_id = document.querySelector("input[name=c_id]").value;
var user_name = document.querySelector("input[name=c_name]").value;
var user_email = document.querySelector("input[name=c_email]").value;
var user_number = document.querySelector("input[name=c_contno]").value;


var options = {
    "key": "rzp_test_htSnWWHdbe1PSc", // Enter the Key ID generated from the Dashboard
    "amount": total_amaount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": user_name,
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "id": order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
      alert("payment successful");
      //   order id
      //   date
      //   amount
      //   payment id

      const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            window.location.href = "http://localhost/sports/customer/insert_data.php";
        }
        xhttp.open("POST", "insert_data.php", true);
        xhttp.send();
    <?php 
        $_SESSION['total_amounts'] = $total_amount;  
    ?>                     
    },
    "prefill": {
        "name": user_name,
        "email": user_email,
        "contact": user_number
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        // alert(response.error.source);
        // alert(response.error.step);
        // alert(response.error.reason);
        // alert(response.error.metadata.order_id);
        // alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

<!-- 
<script>
    document.getElementById("redirect_link").onclick(() => {
        window.location.replace("adress_add.php");
    });
</script> -->


                

<?php
require("footer.php");
?>