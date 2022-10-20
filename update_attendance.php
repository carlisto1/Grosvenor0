<?php 

include 'config.php';
include 'session.php';
session_start();

error_reporting(0);




$id=$_GET['id'];

$sql="select * from `attendance1` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);




if (isset($_POST['attendance'])) {


    $employee_id=$_POST['employee_id'];
    $employee_name=$_POST['employee_name'];
    $in_time=$_POST['in_time'];
    $out_time=$_POST['out_time'];
    $date1=$_POST['date1'];
    $user_name=$_POST['user_name'];
    
    
  
    

			$sql = "INSERT INTO attendance1 (
                

            
                 in_time,
                 out_time,
                 date1,
                 employee_name,
                 employee_id,
                 confirmed_by
                
                                       )
					VALUES (
                        

                        '$in_time',
                        '$out_time',
                        '$date1',
                        '$employee_name',
                        '$employee_id',
                        '$user_name'
                         
                          )";
			$result = mysqli_query($conn, $sql);
    
			if ($result) {
                // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                // echo "<script>alert('Wow! User Registration Completed.')</script>";
                header("Location: attendance.php");

			} else {
                // echo "<script>alert('Woops! Something Wrong Went.')</script>";
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
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="attendance.php">Go Home</a>  </button>
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
            <div class="row"><br><br><br><br>

                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="">New Attendance Form</h5>
                                                    </div>
                                                    <div class="card-block">
                                           
                                                        <form enctype="multipart/form-data" method="post"   action='function.php' >
                                                          
                                                     <br><br>
                                             
                                                            <div class="form-group row">

                                                            <label class="col-sm-2 col-form-label">Employee ID </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="employee_id" class="form-control"  Required value=<?php echo$row['employee_id'] ?> >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Attendance ID </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="id" class="form-control"  Required value=<?php echo$row['id'] ?> >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Employee Name </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="employee_name" class="form-control"  Required value=<?php echo$row['employee_name'] ?> >
                                                                </div><br><br><br><br>
                                                                <label class="col-sm-2 col-form-label">Date  </label>
                                                                <div class="col-sm-2">
                                                                <input type="date" name="date1" class="form-control" value=<?php echo $row['date1']?> Required>

                                                                </div>
                                                                <br><br><br>
                                                            <label class="col-sm-2 col-form-label">In time </label>
                                                                <div class="col-sm-2">
                                                                <input type="time" name="in_time" class="form-control" value=<?php echo $row['in_time']?> Required>

                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Our time </label>
                                                                <div class="col-sm-2">
                                                                <input type="time" name="out_time" class="form-control" value=<?php echo $row['out_time']?> Required>

                                                                </div>
                                                        
                                                                <br><br><br>
                                                         
                                                             
                                                               
                                                                      
                                                        </div>
                                                        <br>
                                                                                                               
                                                       


                             
                                                      <div class="col-sm-12">
                                                            <hr>
                                                          <div class="form-check form-switch text-center">
                                                          <label class="form-check-label " for="flexSwitchCheckDisabled"><input type="checkbox" Required  name="user_name" value=<?php echo $user_name?>>  Process Done by : <?php echo $user_name?> </label>
                                                           <br>
                                                            <hr> 
                                                         </div><br>

                                                         <h4 class=" col-sm-12 sub-title text-center">  Grosvenor Services Ltd, Khartoum III, Street 51,  Building. 24 - Tel: +249 (0)183 476779 
                                                            Web-Site www.grosvenor-sudan.com<br>	E-mail address: info@grosvenor-sudan.com </h4>
                                                       

                                                         </div>          
   

                                                                <div class="col-sm-12">
                                                                </div><br>
                                                                <a href=""><input type="submit"  name="attendance_update" class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>

                                                            </div>
                                                            
                                                        </form>




                                                        
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
                                        </div>


            
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
