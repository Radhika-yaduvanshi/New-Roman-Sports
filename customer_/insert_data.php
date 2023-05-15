<?php
require_once('config/connection.php');
session_start();

if (isset($_POST["submit"])) {

    $total_amount = $_SESSION['total_amount'];
    $cust_id = $_SESSION['c_id'];
    $oid = $_SESSION['order_id'];

    $datetime = date("Y-m-d H:i:s");
    $date = date("Y-m-d");

    
    $sql = "INSERT INTO `payment`(`pay_id`, `o_id`, `c_id`, `pay_date`, `pay_amount`) VALUES (default,'$oid','$cust_id','$datetime','$total_amount')";
    if ($conn->query($sql) != TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: index1.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 30px;
            height: 30px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        form{
            width: 100%; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; height: 100vh;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <input type="submit" style="display: none;" id="rzp-button1" class="cursor-pointer bg-orange-600 w-fit px-6 py-2 text-white mt-8 rounded-full hover:scale-105 absolute right-60" name="submit"></button>
        <div class="loader"></div>
    </form>
    <script>
        for (let i = 0; i < 1; i++) {
            document.getElementById('rzp-button1').click();
        }
    </script>
</body>

</html>