<?php 

include 'config.php';
include 'session.php';

session_start();

error_reporting(0);




$employee_id=$_GET['employee_id'];

$sql="select * from `employee` where employee_id=$employee_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);




$employee_id = $row['employee_id'];
$account_name = $row['account_name'];
$account_no = $row['account_no'];
$account_info = $row['account_info'];

$applied_position = $row['applied_position'];
$employee_name = $row['employee_name'];
$specialization = $row['specialization'];
$date_of_birth = $row['date_of_birth'];
$place_of_birth = $row['place_of_birth'];
$address_name = $row['address_name'];
$address_square = $row['address_square'];
$address_area = $row['address_area'];
$address_box = $row['address_box'];
$address_email = $row['address_email'];
$address_phone = $row['address_phone'];
$address_Telephone = $row['address_Telephone'];

$licence_expire= $row['licence_expire'];        
$licence_no= $row['licence_no'];     


$created= $row['created'];        
$updated= $row['updated'];        
$last_job_info= $row['last_job_info'];        
$updated_by= $row['updated_by'];        
   

$id_type=$row['id_type'];
$id_number=$row['id_number'];
$release_date=$row['release_date'];
$place_of_issue=$row['place_of_issue'];

$plate_number=$row['plate_number'];
$company_card=$row['company_card'];
$fish=$row['fish'];




$sql="select * from `transport` where employee_id=$employee_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
        


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
      <!-- r Fremwork -->
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
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="employees.php">Go Home</a>  </button>
            </div>
          
            <div class="col-md-2">
            <h6 class="text-light text-center">Providing Peace to Mind
            www.grosvenor-sudan.com</h6>
            </div>
            <div class="col-md-2">
                <h6 class=" text-light text-center text-ganger"> <?php echo"Department : ".$_SESSION['user_department']."<br>"."User Name : ". $_SESSION['user_name']."<br>"."User ID : ". $_SESSION['user_id']; ?></h6>
            </div>
            <div class="col-md-2">
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
            
            <div class="col-md-3"> 
            <img  src="assets/images/logo.png"  alt="company logo">
            
                 </div>
            </div><br><br><br><br>
    
    
         
         
            <div class="row">
             
                   
                       
                    <center>
                                

            
                
            </div><br><br><br><br>
            <div class="row"><br><br><br><br>

                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="">Employee Application Form Print Data</h5>
                                                    </div>
                                                    <div class="card-block">
                                                    <h6 class="">Employee Information</h5>
                                                        <form  enctype="multipart/form-data" method="post" action="function.php">
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Serial NO</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="employee_id" class="form-control"  value=<?php echo $employee_id ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Full Name</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="employee_name" class="form-control" placeholder="Type your name gos here" value=<?php echo $employee_name ?>>
                                                                </div>
                                                     
                                                           
                                                              <label class="col-sm-1 col-form-label">licence No</label>
                                                                <div class="col-sm-2 ">
                                                                <input type="text" class="form-control"  name="licence_no" placeholder="licence No" maxlength="6"value=<?php echo $licence_no ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Expire Date</label>
                                                                <div class="col-sm-2">
                                                                <input type="date" class="form-control"  name="licence_expire" placeholder="Expire Date" maxlength="6"value=<?php echo $licence_expire ?>>
                                                                </div>
                                                               
                                                         
                                                            </div> 
                                                            
                                                            <h6 class="">Residance Address</h5>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Homse</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="address_name" class="form-control" placeholder="Homse "value=<?php echo $address_name ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Square </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="address_square" class="form-control" placeholder="Square "value=<?php echo $address_square ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Area</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="address_area" class="form-control" placeholder=" Area"value=<?php echo $address_area ?>>
                                                                </div>
                                                         
                                                               
                                                              
                                                     
                                                                <label class="col-sm-1 col-form-label">phone</label>
                                                                <div class="col-sm-2"><input type="phone"  r name="address_phone" class="form-control" placeholder="phone " value=<?php echo $address_phone ?>>
                                                                </div>
                                                               
                                                            </div> 
                                                          
                                                       
                                                            
                                                            
                                                            
                                                            <h6 class="">Cars & Motors Information</h5>
                                                          <div class="form-check form-switch text-center">
                                                           <br>
                                                      
                                                           <div class="form-group row">

                                                                <label class="col-sm-1 col-form-label">Plate Number</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="plate_number" class="form-control"  value=<?php echo $row['plate_number'] ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Chassis Number</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="chassis_number" class="form-control" value=<?php echo $row['chassis_number'] ?>>
                                                                </div>
                                                              <hr>
                                                           

                                                                <label class="col-sm-1 col-form-label">Rental Date </label>
                                                                <div class="col-sm-2">
                                                                    <input type="date"  r name="rental_date" class="form-control"  value=<?php echo $row['rental_date'] ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Statuse  </label>
                                                                <div class="col-sm-2">
                                                                <select   name="statuse" class="form-control" required>
                                                                        <option value=<?php echo $row['statuse'] ?>><?php echo $row['statuse'] ?> </option>
                                                                        <option value="In Service ">In Service  </option>
                                                                        <option value="Out of Service">Out of Service</option>
                                                        
                                                                    </select><br>                                                                </div>
                                                         
                                                            </div> 
                                                            <hr> 
                                                         </div><br>


                                                         <div class="col-sm-12">
                                                                     <hr>
                                                          <div class="form-check form-switch ">
                                                           <br>
                                                           <div class="form-group row">

                                                                <label class="col-sm-2 col-form-label"> Last Time Oil Change</label>
                                                                <div class="col-sm-4">
                                                                <input type="date"  name="last_oil" class="form-control" value=<?php echo $last_oil ?>>
                                                                <br>
                                                                </div>

                                                                <label class="col-sm-2 col-form-label"> Next Time Oil Change</label>
                                                                <div class="col-sm-4">
                                                                <input type="date"  name="next_oil" class="form-control" value=<?php echo $next_oil ?>>
                                                                <br>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label"> Last Time Petrol support </label>
                                                                <div class="col-sm-4">
                                                                <input type="date"  name="last_petrol" class="form-control" value=<?php echo $last_petrol ?>>

                                                                </div>
                                                                <label class="col-sm-2 col-form-label"> Next Time Petrol support </label>
                                                                <div class="col-sm-4">
                                                                <input type="date"  name="next_petrol" class="form-control" value=<?php echo $next_petrol ?>>

                                                                </div>
                                                              <hr>
                                                           

                                                              

                                                                <label class="col-sm-2 col-form-label">Outer Shape</label>
                                                                <div class="col-sm-4">
                                                                    <select   name="shape" class="form-control" required>
                                                                        <option value="Not Selected">Select Option   </option>
                                                                        <option value="YES">Clean   </option>
                                                                        <option value="NO">Derty</option>
                                                        
                                                                    </select><br>
                                                                </div>
                                                                
                                                              <hr>
                                                           

                                                                <label class="col-sm-2 col-form-label">Helmet </label>
                                                                <div class="col-sm-4">
                                                                    <select   name="helmet" class="form-control" required>
                                                                    <option value="Not Selected">Select Option   </option>
                                                                    <option value="YES">YES  </option>
                                                                        <option value="NO">NO</option>
                                                        
                                                                    </select><br>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Maintenace  </label>
                                                                <div class="col-sm-2">
                                                                    <select   name="maintenace_need" class="form-control" required>
                                                                        <option value="YES">YES  </option>
                                                                        <option value="NO">NO</option>
                                                        
                                                                    </select><br>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Type of Mintenance  </label>
                                                                <div class="col-sm-2">
                                                                <input type="text"  r name="maintenance_type" class="form-control" value=<?php echo $maintenance_type ?>>

                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Total Cost of Maintenace  </label>
                                                                <div class="col-sm-2">
                                                                <input type="text"  r name="maintenance_cost" class="form-control" value=<?php echo $maintenance_cost ?>>

                                                                </div>
                                                              
                                                                <label class="col-sm-2 col-form-label">Comment  </label>
                                                                <div class="col-sm-10">
                                                                <textarea rows="3" cols="5"   class="form-control"name="comment" ><?php echo $comment ?></textarea>

                                                                </div>
                                                         
                                                            </div> 
                                                            <hr> 
                                                         </div><br>


                                                         <div class="form-check form-switch text-center">
                                                           <br>
                                                            <label class="form-check-label" for="flexSwitchCheckDisabled">  Total Vichile in Service<?php echo $updated_by ?> </label><br>
                                                            <label class="form-check-label" for="flexSwitchCheckDisabled">  Total Vichile Out of Service<?php echo $updated_by ?> </label><br>
                                                            <label class="form-check-label" for="flexSwitchCheckDisabled">  Total Vichile Belong to Company <?php echo $updated_by ?> </label>
                                                            <label class="form-check-label" for="flexSwitchCheckDisabled">  Total Rental Vichile  <?php echo $updated_by ?> </label>
                                                            <hr> 
                                                         </div><br>
                                                         <h4 class=" col-sm-12 sub-title text-center">  Grosvenor Services Ltd, Khartoum III, Street 51,  Building. 24 - Tel: +249 (0)183 476779 
                                                            Web-Site www.grosvenor-sudan.com<br>	E-mail address: info@grosvenor-sudan.com </h4>
                                      
                                                            


                                                                <div class="col-sm-12">
                                                                <a href=""><input type="submit" name="new_motor  "  class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>
                                                                </div><br>
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
<!-- r Jquery -->
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
