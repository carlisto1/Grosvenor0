<?php 

include 'config.php';
include 'session.php';
session_start();

error_reporting(0);


if (isset($_POST['order_submit'])) {


    $order_info = $_POST['order_info'];
    $order_by = $_POST['order_by'];

    $created_user_name =$user_name;
    $created_user_id =$user_id;

    $order_comment = $_POST['order_comment'];


    $order_type = $_POST['order_type'];
    $user_location = $_POST['user_location'];
   

    // $operation_confirm = $_POST['operation_confirm'];
    // $reception_confirm = $_POST['reception_confirm'];
    // $manager_confirm = $_POST['manager_confirm'];
    // $hr_confirm  = $_POST['hr_confirm '];
  

    $department_signature = $_POST['department_signature'];
    $user_signature = $_POST['user_signature'];
    

	// $user_name = $_POST['user_name'];
	// $user_email = $_POST['user_email'];
	// $user_password = md5($_POST['user_password']);
    // $user_department = $_POST['user_department'];
    


    


			$sql = "INSERT INTO order1 (order_info,order_by, created_user_name, created_user_id,order_comment,order_type,user_location,department_signature,user_signature)
                    VALUES ('$order_info','$order_by', '$created_user_name', '$created_user_id','$order_comment','$order_type','$user_location','$department_signature','$user_signature')";
                    


                    if($conn->query($sql)==TRUE){

                        $last_id=$conn->insert_id;
                       //echo$last_id;
                        echo "<script>alert( 'Your Tarck ID is $last_id Use This ID To  Track Your Order')</script> ";

                    }
  
  

                  else {
                      echo "<script>alert('Woops! Something Wrong Went.')</script>";
                      // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                  }
            

	
}




// mysql select query
$query = "SELECT * FROM `employee`";



$result1 = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query);








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
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="welcome.php">Go Home</a>  </button>
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
                                                        <h5 class="">Order Application Form</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">General order submition </h4>
                                                        <form enctype="multipart/form-data" method="post" >
                                                          
                                                     <br><br>
                                             
                                                            <div class="form-group row">

                                                            <label class="col-sm-2 col-form-label">Employee Name </label>
                                                                <div class="col-sm-4">
                                                                <select required name="order_by" class="form-control">
                                                                <option value="Not Selected">Select employee Name</option>

                                                              <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                                              <option value="<?php echo $row1['employee_name'];?>"><?php echo $row1['employee_name'];?></option>
                                                  
                                                              <?php endwhile;?>
                                                  
                                                               </select>
                                                          
                                                        
                                                  
                                                                                                         
                                                            </div>
                                                                <label class="col-sm-2 col-form-label">Position  </label>
                                                                <div class="col-sm-4">
                                                                <select required name="employee_name" class="form-control">
                                                                <option value="Not Selected">Select employee Position</option>

                                                                 <?php while($row1 = mysqli_fetch_array($result2)):;?>

                                                                 <option value="<?php echo $row1['employee_position'];?>"><?php echo $row1['employee_position'];?></option>
                                                                 
                                                                 <?php endwhile;?>
                                                                 
                                                                 </select>                                                              
                                                                 </div>
                                                                <br><br><br>
                                                            <label class="col-sm-2 col-form-label">Order Type</label>
                                                                <div class="col-sm-4">
                                                                <select  required name="order_type" class="form-control">
                                                                    <option value="Not selected">Select Order </option>
                                                                        <option value="Request general order">Request general order</option>
                                                                        <option value="vacation for illness">Request vacation for illness </option>
                                                                        <option value="Request yearly vacation ">Request yearly vacation </option>
                                                                        <option value="Request vacation for marriage">Request vacation for marriage   </option>
                                                                        <option value="Complaint Submition">Complaint Submition   </option>
                                                                        <option value="Report Submit">Report Submit  </option>
                                                                        <option value="cleaning material Request">cleaning material Request     </option>
                                                                        <option value="cleaning equipment Request">cleaning equipment Request     </option>
                                                                        <option value="Maintenance Request">Maintenance Request   </option>
                                                                        <option value="Alon Request">Alon Request   </option>
                                                                        <option value="Resignation Request">Resignation Request   </option>
                                                                        <option value="Salary Increase Request">Salary Increase Request   </option>
                                                                        <option value="Other">Other   </option>
                                                              
                                                                    </select>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Location </label>
                                                                <div class="col-sm-4">
                                                                    <select  required name="user_location"  class="form-control">
                                                                    <option value="not_selected">Select Location </option>
                                                                    <option value="Arabic Sudanese bank ( Afriqia )">Arabic Sudanese bank ( Afriqia ) </option>
                                                                        <option value="Arabic Sudanese bank (Al waha ) ">Arabic Sudanese bank (Al waha )  </option>
                                                                        <option value="Arabic Sudanese bank ( steen steet )">Arabic Sudanese bank ( steen steet )</option>
                                                                        <option value="ALarabi Sudani bank">ALarabi Sudani bank</option>
                                                                        <option value=" Bank of Khartoum">Bank of Khartoum </option>
                                                                        <option value="Emirates ">Emirates </option>
                                                                        <option value="Sanable">Sanable </option>
                                                                     
                                                                    </select>
                                                                </div>
                                                        
                                                                <br><br><br>
                                                         
                                                             
                                                               
                                                                      
                                                        </div>
                                                        <br>
                                                                                                               
                                                        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> your order gos here  </label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="18" cols="10" Required class="form-control"name="order_info" placeholder="your order"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                    
                                                 <div class="col-md-4"></div><br>
                                                 </div>


                             
                                                      <div class="col-sm-12">
                                                            <hr>
                                                          <div class="form-check form-switch text-center">
                                                          <label class="form-check-label " for="flexSwitchCheckDisabled"> <input type="checkbox" Required  name="department_signature" value="YES">  Process Done By <?php echo $user_department?> Department</label>
                                                           <br>
                                                            <label class="form-check-label " for="flexSwitchCheckDisabled"><input type="checkbox" Required  name="user_signature" value="YES">  Signature by : <?php echo $user_name?> ID:<?php echo $user_id?> </label>
                                                            <hr> 
                                                         </div><br>

                                                         <h4 class=" col-sm-12 sub-title text-center">  Grosvenor Services Ltd, Khartoum III, Street 51,  Building. 24 - Tel: +249 (0)183 476779 
                                                            Web-Site www.grosvenor-sudan.com<br>	E-mail address: info@grosvenor-sudan.com </h4>
                                                       

                                                         </div>          
   

                                                                <div class="col-sm-12">
                                                                </div><br>
                                                                <a href=""><input type="submit"  name="order_submit" class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>

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
