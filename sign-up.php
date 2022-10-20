<?php 
session_start();
include 'config.php';
//include 'session.php';
error_reporting(0);



if (isset($_POST['submit'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = md5($_POST['user_password']);
	$user_department = $_POST['user_department'];
    $cpassword = md5($_POST['cpassword']);
    $created_by=$_SESSION['user_name'];

	if ($user_password == $cpassword) {
		$sql = "SELECT * FROM users WHERE user_email='$user_email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (user_name, user_email, user_password,user_department,created_by)
					VALUES ('$user_name', '$user_email', '$user_password','$user_department','$created_by')";
			$result = mysqli_query($conn, $sql);
        
			if ($result) {
               
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                header("Location: welcome.php");
                

			} else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);

				// echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
        <div class="container-fluid " >
        <div class="row">
            <div class="col-md-2">
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="welcome.php">Go Home</a>  </button>
            </div>
          
            <div class="col-md-2">
            <h6 class="text-light">Providing Peace to Mind
            www.grosvenor-sudan.com</h6>
            </div>
            

            <div class="col-md-4">
            <h6 class=" text-light text-center text-ganger"><?php echo  date("l/"."Y/m/d"). "<br>";?></h6>
            <h6 class=" text-light text-center text-ganger"><?php echo "Time " . date("h:i:sa"). "<br>"; ?></h6>
            </div>
          
            
            <div class="col-md-4"> 
           <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
            
                 </div>
            </div><br><br><br><br>
    
    
         
         
            <div class="row">
                <div class="col-sm-12">
                    <form  enctype="multipart/form-data" class="  md-float-material form-material" method="post" action="sign-up.php">
                       
                    
                        <div class="auth-box card card-border-danger">
                            <div class="card-block text-danger">
                          
                              <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h4 class="text-center text-c-red">Register New User</h4>
                                        </div>
                                    </div>
                                <div class="form-group form-primary">
                                    <input required type="text" name="user_name" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">User Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input  type="text" name="user_email" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label"> Email </label>
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
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input  type="text" name="user_password" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input  type="textr" name="cpassword" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-round btn-danger btn-md btn-block waves-effect text-center m-b-20">Register  Now</button>
                                    </div>
                                </div>
                                
              
                                </div>
                            </div>
                        </div>
                    </form>
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
