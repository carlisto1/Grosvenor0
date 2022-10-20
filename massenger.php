<?php 

include 'config.php';
include 'session.php';
error_reporting(0);
session_start();


if(isset($_POST['delete_attendance'])){

    $id=$_POST['id'];
    $sql="delete from attendance1 where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
      
        header("Location:attendance.php");
        
    }
    else{
        
        // echo "<script>alert('field to delete the data.')</script>";
        echo "Error: " . $sql . ":-" . mysqli_error($conn);


    }

}

if(isset($_POST['delete_attendance_employee'])){

    $employee_id=$_POST['employee_id'];
    $sql="delete from attendance1 where employee_id=$employee_id";
    $result=mysqli_query($conn,$sql);
    if($result){
      
        header("Location:attendance.php");
        
    }
    else{
        
        // echo "<script>alert('field to delete the data.')</script>";
        echo "Error: " . $sql . ":-" . mysqli_error($conn);


    }

}

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
      <form method="POST" action="">
      <div class="modal-body">
      <div class="form-group form-primary">
      
            <input type="text" name="id" class="form-control" placeholder="Confirm Id "  required>
            
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       <button type="submit" name="delete_attendance" class="btn btn-danger btn-block ">Yes confirm</button>

       </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal delete confirmation -->
<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete all attendance for  this Employee ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body">
      <div class="form-group form-primary">
      
            <input type="text" name="employee_id" class="form-control" placeholder="Confirm Employee Id "  required>
            
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       <button type="submit" name="delete_attendance_employee" class="btn btn-danger btn-block ">Yes confirm</button>

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
        <h5> Employee Information</h5><br><br><br>
        <div class="row">
        <div class="col-md-3">
       
        <div class="col-sm-12">
        

                           
      </div>        
        </div>
          
        
          
          <div class="col-md-12">
          <form method="POST"action="search_employee.php">
          <input type="number" placeholder="Search by ID " name="employee_id" class="form-control" required> 
          <br>
          <button type="submit" name="search_id" class="btn btn-primary btn-block waves-effect text-center m-b-20">search Data</button>
          </form>
        </div>
        <hr><br>
    
        
        
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
                         <th> ID</th>
                        <th> Name</th>
                        <th >Date Birth</th>
                        <th>Place Birth</th>
                        <th>Address Name</th>
                        <th>Address Square</th>
                        <th>Address Area</th>
                        <th>Address Box</th>
                        <th>Address Email</th>
                        <th>Address Phone</th>
                        <th>Address Telephone</th>
                       
                        <th>Licence Expire</th>
                        <th>Licence No</th>
                        
                        <th>Created Date <th>
                        <th>Updated Date<th>
                        <th>Updated By<th>
                      
                        <th>Employee Position<th>
                        <th>Employee Department<th>
                        <th colspan="3" class="text-center" >Operation</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php

           
          $query = "select * from employee  where employee_position ='Moter Driver'";
          $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $employee_id=$row['employee_id'];
                ?>

                <tr>
             <td> <?php echo $row['employee_id']; ?></td>
              <td><?php echo $row['employee_name']; ?></td>
              <td><?php echo $row['date_of_birth']; ?></td>
              <td><?php echo $row['place_of_birth']; ?></td>
              <td><?php echo $row['address_name']; ?></td>
              <td><?php echo $row['address_square']; ?></td>
              <td><?php echo $row['address_area']; ?></td>
              <td><?php echo $row['address_box']; ?></td>
              <td><?php echo $row['address_email']; ?></td>
              <td><?php echo $row['address_phone']; ?></td>
              <td><?php echo $row['address_Telephone']; ?></td>
      
              <td><?php echo $row['licence_expire']; ?></td>
              <td><?php echo $row['licence_no']; ?></td>
              
             <td><?php echo $row['created' ]?><td>
             <td><?php echo $row['updated' ]?><td>

             <td><?php echo $row['updated_by' ]?><td>

             <td><?php echo $row['employee_position']?><td>
             <td><?php echo $row['employee_department']?><td>
              
  

<td>
<div >
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="update_report.php? employee_id='.$employee_id.'" >Report</a>';?>
</div>
</td>

<td>
<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="employee_print.php? employee_id='.$employee_id.'" >Print</a>';?>
</div>

</td>
<td>
<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="new_motor.php? employee_id='.$employee_id.'" >Update </a>';?>
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








                                        <div class="col-12">

<!-- Basic table card start -->
  <div class="card">
    <div class="card-header">
        <h5>patient information</h5><br><br><br>
        <div class="row">
        <div class="col-md-3">
        <P class="text-center">.</P>
        <h6 class="text-center">Delete All Attendance</h6>
       
        <div class="col-sm-12">
        
        <?php  echo '<a class="btn btn-danger text-light btn-block waves-effect text-center m-b-20"  data-toggle="modal" data-target="#exampleModal12"  >Delete All</a> '; ?>

                           
      </div>        
        </div>
          
          <div class="col-md-6">
          <form enctype="multipart/form-data" method="POST" action="search_attendance.php">
          <center>
          <h6 class="text-center">search  using date</h6>
            <label >From: </label><input type="date" name="from" required>
            <label >To: </label><input type="date" name="to" required>
            
            <input type="submit"   name="search" class="btn btn-primary btn-block waves-effect text-center m-b-20">
            
            </center>
        </form>
          </div>
          
          <div class="col-md-3">
          <form  enctype="multipart/form-data"method="POST"action="search_attendance.php">
          <input type="number" placeholder="Search by Employee ID " name="employee_id" class="form-control" required> 
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
                          <th>Attendance ID</th>
                          <td>Employee ID</th>

                          <td>Date </th>

                          <td>In Time</th>
                          <td>Out Time</th>
                          <td>Employee Name</th>
                          <td>Confirmed By</th>



                        <th colspan="3" class="text-center" >Operation</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php

           
          $query = "select * from attendance1 ORDER BY date1 DESC ";
          
          $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                ?>

                <tr>
                <td> <?php echo $row['id']; ?></td>
                <td><?php echo$row['employee_name'];?></td>
                <td><?php echo$row['employee_id'];?></td>

                <td><?php echo$row['date1'];?></td>

                  <td><?php echo$row['in_time'];?></td>
                  <td><?php echo$row['out_time'];?></td>
                  <td><?php echo$row['employee_name'];?></td>
                  <td><?php echo$row['confirmed_by'];?></td>
              
              <td >

                <div > 
                <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="update_attendance.php? id='.$id.'" >Update Info</a>';?>
                </div>
                
    
            </td>
            <td>
            <div >
                <?php  echo '<a class="bt btn-danger btn-sm text-light "  data-toggle="modal" data-target="#exampleModal11"  >Delete</a> '; ?>
                </div>
            </td>
            <td>
            <td>
            <div >
            <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="update_massenger.php? id='.$id.'" >New Report</a>';?>
                </div>
            </td>
            <td>

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
