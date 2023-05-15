<!DOCTYPE html>
<html>
<head>
<!-- <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style> -->
</head>
<body>

<!-- <h2 style="text-align:center">Product Card</h2>

<div class="card">
  <img src="https://www.w3schools.com/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1>
  <p class="price">Rs 500</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button id="rzp-button1">Pay</button></p>
</div> -->


<!-- <?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

include "header.php";
include "config/connection.php";

$cust_id = $_SESSION['c_id'];
$ORDER_ID = $_POST['o_id'];
$CUST_ID = $_POST["c_id"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

if (isset($_POST['orderbtn'])) {
	if ($_POST['orderbtn'] == "Pay Now") {
		$cart_res = $con->query("SELECT * FROM add_to_cart WHERE cart_id=(
			SELECT cart_id FROM add_to_cart WHERE cust_id=" . $_SESSION['c_id'] . ")");
		// $addr_id = $_POST['addresses'];
		if ($cart_res) {
			if ($cart_res->num_rows > 0) {

				$datetime = date_create()->format('Y-m-d H:i:s');
				$order_qry = "INSERT INTO order_master values(null,$c_id,'$o_date','o_status')";
				$order_res = $con->query($order_qry);
				if ($order_res) {
					if ($con->affected_rows == 1) {
						//fetching order id
						$oid_res = $con->query("SELECT o_id FROM order_detail WHERE c_id=$cust_id AND datetime='$o_date' AND o_status='1'");
						// die("SELECT orderid FROM ordertb WHERE custid=$cust_id AND datetime='$datetime' AND payment_status='Pending'");
						if ($oid_res) {
							$order_id = $oid_res->fetch_array()['o_id'];
							while ($item = $cart_res->fetch_array()) {
								//we'll get pizzaid,quantity,priceid
								$p_id = $item['p_id'];
								$p_price = $item['p_price'];
								$cart_qty = $item['cart_qty'];
								$pizzaqry = $con->query("SELECT * FROM product WHERE p_id=" . $item['p_id']);
								$pizza = $pizzaqry->fetch_array();
								$p_name = $['p_name'];
								$priceqry = $con->query("SELECT * FROM product where p_price=" . $item['p_price']);
								$p_price = $priceqry->fetch_array();
								$ind_price = $p_price['p_price'];
								// var_dump($quantity);
								// var_dump($price);
								$total_amount = ($cart_qty) * ($ind_price);
								// $datetime = date_create()->format('Y-m-d H:i:s');
								$order_qry = "INSERT INTO order_detail values(null,$o_id,$p_id,$od_date,$od_quantity,$od_amount)";
								$order_res = $con->query($order_qry);
								if ($order_res) {
									if ($con->affected_rows == 1) {

										$is_success = true;
									} else {
										$is_success = false;
										echo "can't place order right now~";
									}
								} else {
									die($order_qry);
								}
							}
							if ($is_success === true) {
								//empty cart
								$cart_id = get_cart_id();
								$del_cart = $con->query("DELETE FROM add_to_cart WHERE cart_id=$cart_id");
								if ($del_cart) {
									if ($con->affected_rows > 0) {
?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_zHqOjR4WqcW6RS", // Enter the Key ID generated from the Dashboard
    "amount": "<?php $total_amount ?>"*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Tech Dx",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "id": "<?php $o_id ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
      alert("payment successful");
    },
    "prefill": {
        "name": "Test",
        "email": "test@gmail.com",
        "contact": "817171718"
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

<?php

										// $checkSum = "";
										// $paramList = array();
										// // var_dump($_POST);
										// // die();
										// $ORDER_ID = $order_id;
										// $CUST_ID = $_POST["CUST_ID"];
										// $INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
										// $CHANNEL_ID = $_POST["CHANNEL_ID"];
										// $TXN_AMOUNT = $_POST["TXN_AMOUNT"];
										// // $ADDR_ID=$_POST["addresses"];
										// // Create an array having all required parameters for creating checksum.
										// $paramList["MID"] = PAYTM_MERCHANT_MID;
										// $paramList["ORDER_ID"] = $ORDER_ID;
										// $paramList["CUST_ID"] = $CUST_ID;
										// $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
										// $paramList["CHANNEL_ID"] = $CHANNEL_ID;
										// $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
										// $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
										// // $paramList['ADDRESS_ID']=$ADDR_ID;
										// $paramList["CALLBACK_URL"] = "http://localhost/Sem6-Project/pizza-php/Paytm_PHP_Sample-master/PaytmKit/pgResponse.php";
										
										// /*
										// $paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
										// $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
										// $paramList["EMAIL"] = $EMAIL; //Email ID of customer
										// $paramList["VERIFIED_BY"] = "EMAIL"; //
										// $paramList["IS_USER_VERIFIED"] = "YES"; //
										// */

										// //Here checksum string will return by getChecksumFromArray() function.
										// $checkSum = getChecksumFromArray($paramList, PAYTM_MERCHANT_KEY);
										// //header("Location:Paytm_PHP_Sample-master\PaytmKit\pgRedirect.php");
									} else {
										echo "cartitems not deleted!";
									}
								} else {
									die("Error while deleting cart~");
								}
							} else {
								echo "something went wrong!";
							}
						} else {
							die("orderid not found!");
						}
					}
				} else {
					die("Something Went Wrong-outer!!");
				}
			} else {
				die("cart is Empty");
			}
		} else {
			die("something went wrong-paymentCartFetch");
		}
	}
}
?> -->


</body>
</html>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_zHqOjR4WqcW6RS", // Enter the Key ID generated from the Dashboard
    "amount": "500"*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Tech Dx",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "id": "dnjendjend333", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
      alert("payment successful");
    },
    "prefill": {
        "name": "Test",
        "email": "test@gmail.com",
        "contact": "817171718"
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
