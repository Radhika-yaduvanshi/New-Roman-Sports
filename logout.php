<?php 
 session_start();

 unset($_SESSION['c_name']);
 session_destroy();
 header("location:login.php");
 exit;
?>