<?php
include("../config.php");
if(isset($_SESSION['Admin']))
{
	
}
else
{
   header('location:index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../logo.jpg">
    <title>S.R.Chemical</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/inbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="../bootstrap-toasts-manager/dist/toast.min.css ">
    <link href="../assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/pages/chat-app-page.css" rel="stylesheet">
</head>
<style>
.overlay {
    background-color:#EFEFEF;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 1000;
    top: 0px;
    left: 0px;
    opacity: .5; /* in FireFox */
    filter: alpha(opacity=50); /* in IE */
}
</style>

<body class="horizontal-nav skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">S.R.Chemical</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard">
                        <!-- Logo text --><span class="hidden-sm-down">
                         <!-- dark Logo text -->
                         <img src="" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->  
                         <h3>S.R. Chemical</h3>
                         <!--<img src="" class="light-logo" alt="S.R.Chemical" style="height: auto;width: 49%;"/></span> </a>-->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!--<li class="nav-item dropdown">-->
                        <!--    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="DisplayNotification()"> <i class="ti-email"></i>-->
                        <!--        <div class="notify"><div id="NotificationCount12"></div></div>-->
                        <!--    </a>-->
                        <!--    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">-->
                        <!--        <ul>-->
                        <!--            <li>-->
                        <!--                <div class="drop-title">Notifications</div>-->
                        <!--            </li>-->
                        <!--            <li>-->
                        <!--                <div class="message-center" id="DisplayNotification">-->
                        <!--                </div>-->
                        <!--            </li>-->
                        <!--            <li>-->
                        <!--                <a class="nav-link text-center link" href="javascript:void(0);" onclick="ClearNotification()"> <strong>Clear All Notifications</strong> <i class="fa fa-angle-right"></i> </a>-->
                        <!--            </li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="hidden-md-down">Welcome</span></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="profile" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li><a href="dashboard"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</a></li>
                        <li><a href="Purchase_details">Purchase Details</a></li>
                        <li><a href="Sale_details">Sale Details</a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Report</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="Approve_details">Approve Purchase</a></li>
                                <li><a href="Pending_details">Pending Purchase</a></li>
                                <li><a href="Approve_Saledetails">Approve Sale</a></li>
                                <li><a href="Pending_Saledetails">Pending Sale</a></li>
                            </ul>
                        </li>
                        <li><a href="taskManager">Task Manager </a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<script>
//   var myVar = setInterval(NotificationCount, 1000);
function NotificationCount()
{
   $.ajax({
          url:'notification_count.php',
          type:'GET',
          dataType:'html',
          success:function(data){
           $("#NotificationCount12").html(data);
          }
       });
}
function ClearNotification()
{
$.ajax({
      url:'clearnotification.php',
      type:'POST',
      success:function(data){
        DisplayNotification();
      }
   });
}
function DisplayNotification()
{
  $.ajax({
         url:'display_notification.php',
         type:'GET',
         dataType:'html',
         success:function(data){
          $("#DisplayNotification").html(data);
         }
      });
}
</script>