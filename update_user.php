<?php 

include 'config.php';
include 'session.php';

session_start();

error_reporting(0);

    

$id=$_GET['id'];
if (isset($_POST['confirm'])) {

$sql="select * from `users` where user_id=$id";
$result=mysqli_query($conn,$sql);

if($result)
{

$row=mysqli_fetch_assoc($result);
$id1 = $_row['user_id'];
$name = $_row['user_name'];
$email = $_row['user_email'];
$password = md5($_row['user_password']);
$department = $_row['user_department'];

}else{

    echo 'not working'; 
}

}


if (isset($_POST['user_update'])) {
	$name1   = $_POST['user_name'];
	$email1  = $_POST['user_email'];
	$password1   = md5($_POST['user_password']);
	$department1     = $_POST['user_department'];
 
 
   
   
        $sql = " UPDATE users set user_department='$user_department',user_email='$user_email',user_name='$user_name', user_password='$password' where user_id='$user_id'";

        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            header("Location: welcome.php");
           
            echo "<script>alert('Wow! User Updated seccuessfull.')</script>";
            

        } else {
            // echo "<script>alert('error.')</script>";
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
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
        <div class="col-md-2">
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="users.php">Go Home</a>  </button>
            </div>
            <div class="col-md-2">
            <h6 class="text-light">Grosvenor services <br>Management System</h6>

            </div>
            <div class="col-md-3">
                <h6 class=" text-light text-center text-ganger"> <?php echo"Department : ".$_SESSION['user_department']."<br>"."User Name : ". $_SESSION['user_name']."<br>"."User ID : ". $_SESSION['user_id']; ?></h6>
            </div>
         
            <div class="col-md-3">
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
            <h6 class=" text-light text-center text-ganger"><?php echo  date("l/"."Y/m/d"). "<br>";?></h6>
            <h6 class=" text-light text-center text-ganger"><?php echo "Time" . date("h:i:sa"). "<br>"; ?></h6>
            </div>   
          
            
            <div class="col-md-2"> 
           <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
            
                 </div>
            </div><br><br><br><br>
            <div class="row">
                <div class="col-sm-12">
                    <form  enctype="multipart/form-data" class="  md-float-material form-material" method="post" action="">
                       
                    
                        <div class="auth-box card card-border-danger">
                            <div class="card-block text-danger">
                          
                              <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h4 class="text-center text-c-red">Update User Information ></h4>
                                        </div>
                                    </div>
                                <div class="form-group form-primary text-center ">
                                    <input    required type="text" name="user_name" class="form-control" value=<?php echo$id1; ?>>
                                    <span class="form-bar"></span>
                                    <label class="float-left">User Name </label>
                                </div>
                                <div class="form-group form-primary">
                                    <input  type="text" name="user_email" class="form-control"  value=<?php echo$name ?>>
                                    <span class="form-bar"></span>
                                    <label class="float-left"> Email </label>
                                </div><br>
                                <div class="form-group row">
                               <label class="col-sm-3 col-form-label"> Department</label>
                               <div class="col-sm-9">
                                   <select  name="user_department" class="form-control text-danger" >
                                       <option    value="<?php echo$row['user_department']; ?>"><?php echo$row['user_department']; ?> </option>
                                       <option   value="Operation">   Operation Department</option>
                                       <option   value="Hr">   Human Resource Department </option>
                                       <option   value="Accounting">   Accounting Department </option>
                                       <option   value="Reception">   Reception Department</option>
                                       <option   value="Management">   Management Department</option>
                                       <option   value="Supervisor">   Supervisor Department</option>
                                       <option   value="IT">   IT Department</option>

                                   </select>
                               </div>
                           </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-primary">
                                            <input  type="text" name="user_password" class="form-control" value=<?php echo md5($_row['user_password']); ?>>
                                            <span class="form-bar"></span>
                                            <label class="float-left">Password</label>
                                        </div>
                                    </div>
                                   
                                </div>
                               
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="user_update" class="btn btn-round btn-danger btn-md btn-block waves-effect text-center m-b-20">Update  Now</button>
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
