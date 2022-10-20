<?php 

include 'config.php';

session_start();

error_reporting(0);



if (isset($_POST['sign_in'])) {
	$user_name = $_POST['user_name'];
	$user_department = $_POST['user_department'];
	$user_password = md5($_POST['user_password']);

	$sql = "SELECT * FROM users WHERE user_name='$user_name' AND user_password='$user_password' and user_department='$user_department' ";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_department'] = $row['user_department'];
        $_SESSION['user_id'] = $row['user_id'];
        
        switch ($_SESSION['user_department']=$user_department) {
            case "Hr":
                header("Location: welcome.php");
              break;
            case "Operation":
             header("Location: welcome.php");
              break;
            case "Management":
             header("Location: welcome.php");
              break;
              case "Reception":
                header("Location: welcome.php");
                 break;
                 case "Supervisor":
                    header("Location: welcome.php");
                     break;
                     case "IT":
                        header("Location: welcome.php");
                         break;
                 case "Accounting":
                    header("Location: welcome.php");
                     break;
            default:
        echo "<script>alert('Woops! you have no permission to access.')</script>";
    }

	}
     else {
		echo "<script>alert('Woops!  ser name , Password   or department Wrong .')</script>";
        
              
	}
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
<title>www.grosvenor-sudan.com /system management</title>    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
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
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body themebg-pattern="theme1">


    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
        <div class="row">
            <div class="col-md-3">
            <h6 class="text-light">Grosvenor services <br>Management System</h6>

            </div>
          
            <div class="col-md-3">
            <h6 class="text-light">Providing Peace to Mind<br>
            www.grosvenor-sudan.com</h6>
            </div>
         
            <div class="col-md-3">
            <h6 class=" text-light text-center text-ganger"><?php echo  date("l/"."Y/m/d"). "<br>";?></h6>
            <h6 class=" text-light text-center text-ganger"><?php echo "Time " . date("h:i:sa"). "<br>"; ?></h6>
            </div>
          
            
            <div class="col-md-3"> 
           <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
            
                 </div>
            </div><br><br><br><br>
    
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                        <form enctype="multipart/form-data" class="md-float-material form-material" method="post" action="sign-in.php" >
                          
                            <div class="auth-box card text-danger" >
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center text-c-red">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="user_name" class="form-control"  required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Username</label>
                                    </div>
                                    <div class="form-group row">
                               <label class="col-sm-3 col-form-label"> Department</label>
                               <div class="col-sm-9">
                               <select  required name="user_department" class="form-control">
                                                                        <option  value="Operation">   Operation Department</option>
                                                                        <option  value="Hr">   Human Resource Department </option>
                                                                        <option  value="Accounting">   Accounting Department </option>
                                                                        <option  value="Reception">   Reception Department</option>
                                                                        <option  value="Management">   Management Department</option>
                                                                        <option  value="Supervisor">   Supervisor Department</option>  
                                                                        <option  value="IT">   IT Department</option>
                                                                        <option value="Administrative affairs Department">Administrative Affairs Department </option>
                                                                        <option value=" Maintenance Department "> Maintenance Department</option>
                                                                        <option value="Cattring Department">Cattring Department </option>
                                                                        <option value="Cleaning  Department">Cleaning  Department </option>
                                                                        <option value="Stores Department ">Stores Department </option>
                                                                        <option value="cattring Department">cattring Department </option>
                                                                        <option value="massengers Department">massengers Department </option>
                                                                        <option value="Drivers Department ">Drivers Department </option>
                                                                        <option value="project management Department">project management Department </option>
                                                                        
                                                                    </select>
                               </div>
                           </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="user_password" class="form-control" maxlength="10" minlength="2" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                  
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                        <button type="submit" name="sign_in" class="btn btn-round btn-danger btn-md btn-block waves-effect text-center m-b-20">Sign in Now</button>

                                                    </div>
                                    </div>
                                    <hr/>
                                   
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
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
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
