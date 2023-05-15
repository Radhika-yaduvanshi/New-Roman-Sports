<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<?php require_once('../config/connection.php');?> 

<?php
session_start();
if(isset($_SESSION["first_name"]))
{
    $first_name = $_SESSION['first_name'];
}
else
{
    header("location:login.php");
}

            //session_start();
            $uid = $_SESSION['first_name'];
            $sql = "select * from registration where u_id= '".$uid."'";
            //echo $sql7;
            //die;
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);

?> 
<?php require_once('../config/connection.php');?> 
<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 08:35:16 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Spice Hotel | Bootstrap 5 Admin Dashboard Template + UI Kit</title>
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                        <img alt="" src="../images/logo.png" height="50" width="50" align="center">
                         </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
                <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                           
                            <ul class="dropdown-menu animated swing">
                               
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        
                                       
                                    </ul>
                                    </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">

                                                        <?php
                                                        $sql="select * from feedback";
                                                        $result=mysqli_query($conn,$sql);
                                                        while($row=mysqli_fetch_array($result))

                                                        {
                                                            $uid=$row['feedback_name'];
                                                       
                                                        ?>
                                                        
                                                        
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="assets/img/user/user2.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                 <span class="from"> <?php echo $row['u_id'];?> </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                        <span class="message"> <?php echo $row['feedback_name'];?></span>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                        
                                        
                                       
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="../images/logo.png" />
                                <span class="username username-hide-on-mobile"><p><?php echo $row['first_name'];?>
                                                            <?php echo $row['last_name'];?></p></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="profile.php">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                
                                <li>
                                    <a href="login.html">
                                        <a href="login.php"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>

    
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">settings</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                            data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="row">
                                        <div class="sidebar-userpic">
                                            <img src="../images/logo.png" class="img-responsive" alt=""> </div>
                                    </div>
                                    <div class="profile-usertitle">
                                        <div class="sidebar-userpic-name"> <p><?php echo $row['first_name'];?>
                                                            <?php echo $row['last_name'];?></p> </div>
                                        

                                    </div>
                                    <div class="sidebar-userpic-btn">
                                        <a class="tooltips" href="profile.php" data-placement="top"
                                            data-original-title="Profile">
                                            <i class="material-icons">person_outline</i>
                                        </a>
                                      
                                        </a>
                                        <a class="tooltips" href="feedback.php" data-placement="top"
                                            data-original-title="Chat">
                                            <i class="material-icons">chat</i>
                                        </a>
                                        <a class="tooltips" href="logout.php" data-placement="top"
                                            data-original-title="Logout">
                                            <i class="material-icons">input</i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item start">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard<a href="index.php"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>
                           
                           
                            
                          
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="add_vehicle.html" class="nav-link ">
                                            <span class="title">Add Vehicle Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="all_vehicles.html" class="nav-link ">
                                            <span class="title">View All Vehicle</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit_vehicle.html" class="nav-link ">
                                            <span class="title">Edit Vehicle Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                         
                            
                            
                            
                            <li class="nav-item active">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="material-icons">list</i>
                                    <span class="title">Data Tables</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="user.php" class="nav-link ">
                                            <span class="title">User Tables</span>
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="category.php" class="nav-link ">
                                            <span class="title">Category Tables</span>
                                        </a>
                                    </li>
                                  
                                     <li class="nav-item">
                                        <a href="product.php" class="nav-link ">
                                            <span class="title">product Tables</span>
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="order.php" class="nav-link ">
                                            <span class="title">order Tables</span>
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="gallery.php" class="nav-link ">
                                            <span class="title">gallery Tables</span>
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="feedback.php" class="nav-link ">
                                            <span class="title">feedback Tables</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                         
                           
                           
                            
                        </ul>
                    </div>
                </div>
            </div>