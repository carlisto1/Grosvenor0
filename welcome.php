<?php 

include 'config.php';
include 'session.php';
//include 'chick.php';
error_reporting(0);
session_start();






$query = "SELECT * FROM order1 WHERE statuse='Confirm'";
$result = mysqli_query($conn,$query);
$Confirm = mysqli_num_rows( $result );

$query = "SELECT * FROM order1 WHERE statuse='Cancelate'";
$result = mysqli_query($conn,$query);
$Cancelate = mysqli_num_rows( $result );



$query = "SELECT * FROM order1 WHERE statuse='Rejected'";
$result = mysqli_query($conn,$query);
$Rejected = mysqli_num_rows( $result );



$query = "SELECT * FROM order1 WHERE statuse='Under Process'";
$result = mysqli_query($conn,$query);
$Under = mysqli_num_rows( $result );



$query = "SELECT * FROM order1 WHERE hr_confirm='Under Process'";
$result = mysqli_query($conn,$query);
$hr = mysqli_num_rows( $result );


$query = "SELECT * FROM order1 WHERE operation_confirm='Under Process'";
$result = mysqli_query($conn,$query);
$operation = mysqli_num_rows( $result );


$query = "SELECT * FROM order1 WHERE reception_confirm='Under Process'";
$result = mysqli_query($conn,$query);
$reception = mysqli_num_rows( $result );


$query = "SELECT * FROM order1 WHERE manager_confirm='Under Process'";
$result = mysqli_query($conn,$query);
$manager = mysqli_num_rows( $result );








    ?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <title>www.grosvenor-sudan.com /system management</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<!--profile-->



<body>


    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                        <center> <img  src="assets/images/logo.png" width="70%"  alt="company logo"><center>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="row" >
            <div class="col-md-4">
               
            

            <h6 class=" text-light text-center text-ganger"> <?php echo"Department : ".$_SESSION['user_department']."<br>"."User Name : ". $_SESSION['user_name']."<br>"."User ID : ". $_SESSION['user_id']; ?></h6>
            </div>
            <div class="col-md-4">
            <?php $h = date('G');

if($h>=5 && $h<=11)
{
    echo '<h6 class=" text-light text-center text-ganger">Good Morning </h6>';
}
else if($h>=12 && $h<=15)
{
    echo '<h6 class=" text-light text-center text-ganger">Good evening </h6>';
}
else
{

    echo '<h6 class=" text-light text-center text-ganger">Good night </h6>';
}?>
            <h6 class=" text-light text-center text-ganger"><?php echo  date("l /"."Y/m/d"). "<br>";?></h6>
            <h6 class=" text-light text-center text-ganger"><?php echo "Time " . date("h:i:sa"). "<br>"; ?></h6>
            </div>
          
            
            <div class="col-md-4"> 
            <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php //echo  $_SESSION['username']  ; ?></span>

                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                  
                                    <li class="waves-effect waves-light">
                                    <a  type="button"  data-toggle="modal" data-target="#basicExampleModal">
                                            <i class="ti-user"></i>Profile 
                                        </a>
                                    </li>
                                  
                                    
                                   
                                    <li class="waves-effect waves-light">
                                        <a href="log-out.php">
                                            <i class="ti-layout-sidebar-left"></i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                 </div>
            </div>
                        
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                          
                            <div class="p-15 p-b-0">
                            
                            </div>
                       
                            <div class="pcoded-navigation-label"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="welcome.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="datacenter.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Data Center</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="searchcenter.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Search Center</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">System Information</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="users.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Users Information</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                   
                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Employees Information</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                    <li class=" ">
                                            <a href="employees.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Employees Information</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="attendance.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Employees Attendance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="salary.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Employees Salary </span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                     
                                      
                                     
                                      
                                   
                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Department Information</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="massenger.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"> Massenger Department</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Department Info</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-archive"></i><b>BC</b></span>
                                        <span class="pcoded-mtext"> Files information </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Company Files</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                   
                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Reports Information</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Cleaning Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Survey Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Inspection Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Complaint Reports</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                   
                                    </ul>
                                </li>
                                

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-help"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Orders Information</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="orders.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">General Orders</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
    
                                    </ul>
                                </li>
                             

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-archive"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Stores Information</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">main Store information</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                   
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-archive"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Projects Management</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Bank of Khartoum Project</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                   
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Arabic Sudanese Bank (afrika)</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Arabic Sudanese Bank (AL steen)</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Arabic Sudanese Bank (AL waha)</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Cofftea</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Sanable</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                   
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Bank of Khartoum Project</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                   
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Emirates</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                   
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="store.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Bank of Khartoum Project</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                       
                                   
                                    </ul>
                                </li>
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-settings"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">set up </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Set Monthly Salary</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"> Set Training Courses</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Set Up Holidays</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Set Meeting</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                   
                                    </ul>
                                </li>
                            </ul>
                           
                            
                            
                            
                            <div class="pcoded-navigation-label"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-settings"></i><b>A</b></span>
                                        <span class="pcoded-mtext">User settings</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="sign-in.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Log In</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="log-out.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Log Out</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="sign-up.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Create User</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="reset-password.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-password"></i><b>S</b></span>
                                                <span class="pcoded-mtext">Reset Password</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    
                                    <div class="col-md-4">
                                    <h5 class=" text-light text-center text-ganger">Home Page</h5>
                                    <h5 class=" text-light text-center text-ganger">Admin System</h5>

                                    </div>
                         <div class="col-md-4">
                       <h5 class=" text-light text-center text-ganger">Providing  Peace to Mind</h5>
                        <h5         class=" text-light text-center text-ganger">www.grosvenor-sudan.com</h5>
                       </div>
                  
                       
                       <div class="col-md-4"> 
                      <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
               
                          </div>
               
                                 </div>
                      </div>
                      </div>
                    </div>
                        
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-user text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>10K</h5>
                                                                        <p class="text-muted m-b-0">Complaints Not Reviewed</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-archive text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>100%</h5>
                                                                        <p class="text-muted m-b-0">Inspection Reports Not Reviewed</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-file-alt text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>2000+</h5>
                                                                        <p class="text-muted m-b-0">Reports Not Reviewed</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-envelope-open text-c-blue f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>120</h5>
                                                                        <p class="text-muted m-b-0"> Monthly messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                         
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-clr-stat-card text-white green ">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-green">
                                                                <i class="fas fa-camera mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>Setup for Meeting Now</h5>
                                                                <a class="text-light" href="https://meet.google.com/?pli=1">Google Meet platform</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mat-clr-stat-card text-white blue">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-blue">
                                                                <i class="fas fa-camera mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                            <h5>CCTV Review</h5>
                                                                <p class="m-b-0">Google Meet platform</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Material statustic card end -->
                                            <!-- order-visitor start -->


                                            <!-- order-visitor end -->

                                            <!--  sale analytics start -->
                                            <div class="col-xl-6 col-md-12">
                                               hi
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="row">
                                                    <!-- sale card start -->

                                                    <div class="col-md-6 ">
                                                        <div class="card text-center  order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Orders Under Process of Reception</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-red"></i> <?php echo $reception; ?></h4>
                                                                <p class="m-b-0">36% From this week</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Orders Under Process of Operation</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-red"></i><?php echo $operation; ?></h4>
                                                                <p class="m-b-0">36% From this week</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Orders Under Process of HR</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-red"></i><?php echo $hr; ?></h4>
                                                                <p class="m-b-0">36% From this week</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Orders Under Process of GNR manger</h6>
                                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-red"></i><?php echo $manager; ?></h4>
                                                                <p class="m-b-0">36% From this week</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                   
                                                   
                                                  
                                                    <!-- sale card end -->
                                                </div>
                                            </div>

                                            <!--  sale analytics end -->

                                            <!-- Project statustic start -->
                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Orders Rejected </h6>
                                                                <h5 class="m-b-30 f-w-700"><?php echo$Rejected  ?><span class="text-c-red m-l-10">order rejected</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Orders Under Process</h6>
                                                                <h5 class="m-b-30 f-w-700"><?php echo$Under  ?><span class="text-c-blue m-l-10">order under process</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>Orders Processed Completely</h6>
                                                                <h5 class="m-b-30 f-w-700"> <?php echo$Confirm  ?><span class="text-c-green m-l-10">ordes processed</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <h6>orders cancelate successfully</h6>
                                                                <h5 class="m-b-30 f-w-700"><?php echo$Cancelate  ?><span class="text-c-yellow m-l-10">ordes cancelate</span></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Project statustic end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->

                                
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
