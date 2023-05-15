<?php
session_start();
require_once("config/connection.php");
$date = date("y-m-d");
$c_id=$_SESSION['c_id'];
$p_id=$_GET['id'];
$sql="INSERT INTO wishlist (p_id,c_id,date) VALUES ('$p_id','$c_id','$date')";
//    echo $sql;
    // die;

    $result=mysqli_query($conn,$sql);
    if($result) 
    {
        //echo "<meta http-equip='refresh' content='0;url=wishlist.php'>";
        header("location:wishlist.php");
    }
    else
{
    echo "<meta http-equiv='refresh' content='0;url=login1.php'>";
}
?>




