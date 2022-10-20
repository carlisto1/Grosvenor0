<?php 

include 'config.php';
include 'session.php';
error_reporting(0);
session_start();




if (isset($_POST['Confirm'])) {
    
    
	$order_info = $_POST['order_info'];
	$order_comment = $_POST['order_comment'];
	$order_by = $_POST['order_by'];


   $created_user_name= $_SESSION['username'] ;
   $department= $_SESSION['department']  ;
   $created_user_id= $_SESSION['id']  ;



$sql = "INSERT INTO order1 (order_info,order_comment,order_by,created_user_id,created_user_name)
VALUES ('$order_info','$order_comment','$order_by','$created_user_id','$created_user_name')";

$Result=MYSQLI_QUERY($conn,$sql);
    if ($Result) {
        
        echo "<script>alert('Your Order is Sended Successfully.')</script>";
    }  else{
    echo "<script>alert('some thing went wrong.')</script>";
 
  }

  if($result){
    $query = "select * from order1 ;";
    $result2 = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result2);
    $id=$row['id'];
    echo "<script>alert('Your Order is Sended Successfully and you track ID is'.'$id)</script>";

  }

    mysqli_close($conn);

}



if(isset($_POST['delete_order'])){

    $order_id=$_POST['order_id'];
    $sql="delete from order1 where order_id=$order_id";
    $result=mysqli_query($conn,$sql);
    if($result){
      
        header("Location:order02.php");
        
    }
    else{
        
        echo "<script>alert('field to delete the data.')</script>";

    }

}

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

<!-- Modal delete confirmation -->
<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want delete this item ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="orders.php">
      <div class="modal-body">
      <div class="form-group form-primary">
      
            <input type="text" name="order_id" class="form-control" placeholder="Confirm Id "  required>
            
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       <button type="submit" name="delete_order" class="btn btn-danger btn-block ">Yes confirm</button>

       </form>
      </div>
    </div>
  </div>
</div>


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
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">main Store information</span>
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


                                        <div class="col-12">

<!-- Basic table card start -->
  <div class="card">
    <div class="card-header">
        <h5>patient information</h5><br><br><br>
        <div class="row">
        <div class="col-md-3">
        <P class="text-center">.</P>
        <h6 class="text-center">Apply For Order</h6>
       
        <div class="col-sm-12">
        
        <a href="new_order.php"><input type="submit" value=" New Oorder Form "  class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>

                           
      </div>        
        </div>
          
          <div class="col-md-6">
          <form enctype="multipart/form-data" method="POST" action="order_search.php">
          <center>
          <h6 class="text-center">search  using date</h6>
            <label >From: </label><input type="date" name="from" required>
            <label >To: </label><input type="date" name="to" required>
            
            <input type="submit"   name="search" class="btn btn-primary btn-block waves-effect text-center m-b-20">
            
            </center>
        </form>
          </div>
          
          <div class="col-md-3">
          <form  enctype="multipart/form-data"method="POST"action="order_search.php">
          <input type="number" placeholder="Search by ID " name="order_id" class="form-control" required> 
          <br>
          <button type="submit" name="search_id" class="btn btn-primary btn-block waves-effect text-center m-b-20">search Data</button>
          </form>
        </div>
        
        
        </div>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                <li><i class="fa fa-window-maximize full-card"></i></li>
                <li><i class="fa fa-minus minimize-card"></i></li>
                <li><i class="fa fa-refresh reload-card"></i></li>
                <li><i class="fa fa-trash close-card"></i></li>
            </ul>
        </div>
    </div>
    <div class="card-block-big table-border-style">
        <div class="table-responsive">
            
            <table class="table">
                <thead>
                    <tr>
                    <th>Order ID</th>
                        <th>Order Type</th>
                        <th>Order info</th>
                        <th >Order By</th>
                        <th>under process</th>
                        <th>Order Created</th>
                        <th>Order Updated</th>
                        <th>Created ID</th>
                        <th>Created  Name</th>
                        <th>Order Comment</th>
                        <th>HR confirm</th>
                        <th>Operation confirm</th>
                        <th>Reception confirm</th>
                        <th>manager confirm</th>
                        <th> Department Signature</th>
                        <th>User Signature</th>
                        
                
                    
                        <th>HR Comment</th>
                        <th>Operation Comment</th>
                        <th>manager Comment</th>
                        <th>Reception Comment</th>
                        <th>Order Status</th>
                        <th>Forword Status</th>
                        <th colspan="3" class="text-center" >Operation</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php

           
          $query = "select * from order1 ";
          $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $order_id=$row['order_id'];
                ?>

                <tr>
                <td> <?php echo $row['order_id']; ?></td>
              <td><?php echo $row['order_type']; ?></td>
              <td><?php echo $row['order_info']; ?></td>
              <td><?php echo $row['order_by']; ?></td>
              <td><?php echo $row['order-statues']; ?></td>
              <td><?php echo $row['order_created']; ?></td>
              <td><?php echo $row['order_updated']; ?></td>
              <td><?php echo $row['created_user_id']; ?></td>
              <td><?php echo $row['created_user_name']; ?></td>
              <td><?php echo $row['order_comment']; ?></td>
              <td><?php echo $row['hr_confirm']; ?></td>
              <td><?php echo $row['operation_confirm']; ?></td>
              <td><?php echo $row['reception_confirm']; ?></td>
              <td><?php echo $row['manager_confirm']; ?></td>
              <td><?php echo $row['department_signature']; ?></td>
              <td><?php echo $row['user_signature']; ?></td>

              <td><?php echo $row['hr_comment']; ?></td>
              <td><?php echo $row['operation_comment']; ?></td>
              <td><?php echo $row['manager_comment']; ?></td>
              <td><?php echo $row['reception_comment']; ?></td>
              <td><?php echo $row['statuse']; ?></td>
              <td><?php echo $row['forword_Status']; ?></td>
              
              <td >

                <div > 
                <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="update_order.php? order_id='.$order_id.'" >Confirm</a>';?>
                </div>
                
    
            </td>
            <td>
            <div >
                <?php  echo '<a class="bt btn-danger btn-sm text-light "  data-toggle="modal" data-target="#exampleModal11"  >Delete</a> '; ?>
                </div>
            </td>
            <td>
            <div > 
                <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="order_print.php? order_id='.$order_id.'" >Print</a>';?>
            </div>
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
<!-- Basic table card end -->
</div>



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
