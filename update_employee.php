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
$refrence01_name = $row['refrence01_name'];
$refrence01_phone = $row['refrence01_phone'];
$refrence01_address = $row['refrence01_address'];
$refrence01_position = $row['refrence01_position']; 
$refrence1_name = $row['refrence1_name'];
$refrence1_phone = $row['refrence1_phone'];
$refrence1_address = $row['refrence1_address'];
$refrence1_relation = $_row['refrence1_relation'];
$refrence0_name = $row['refrence0_name'];
$refrence0_phone = $row['refrence0_phone'];
$refrence0_address = $row['refrence0_address'];
$refrence0_position = $row['refrence0_position'];
$date_from0 = $row['date_from0'];
$date_to0 = $row['date_to0'];
$job_last_payment0 = $row['job_last_payment0'];
$reason_leaving0 = $row['reason_leaving0'];
$account_name = $row['account_name'];
$account_no = $row['account_no'];
$account_info = $row['account_info'];
$working_shift = $row['working_shift'];
$working_extra = $row['working_extra'];
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
$gender_type = $row['gender_type'];
$gender_statues = $row['gender_statues'];
$q_obtained = $row['q_obtained'];
$date_obtained  = $row['date_obtained']; 
$obtained_from  = $row['obtained_from']; 
$job_befor = $row['job_befor'];
$licence_expire= $row['licence_expire'];        
$licence_no= $row['licence_no'];        
$last_job_info= $row['last_job_info'];        
$employee_department= $row['last_job_info'];        
$employee_position= $row['employee_position'];        
$employee_department= $row['employee_department'];        
$nationality= $row['nationality'];        
   









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
                                                        <h5 class="">G.S / H.R / FORM / 1 </h5><br>
                                                        <h5 class="">Employee Application Form Review</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Data Inputs</h4>
                                                        <form  enctype="multipart/form-data" method="post" action="function.php">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Serial NO</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="employee_id" class="form-control"  value=<?php echo $employee_id ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">position Applying For</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" r name="applied_position"  class="form-control" value=<?php echo $applied_position ?>>
                                                                </div>
                                                            </div>
                                                            <h6 class="">Personal Information</h5>
                                                              <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Full Name</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text"  r name="employee_name" class="form-control" placeholder="Type your name gos here" value=<?php echo $employee_name ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Specialization </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="specialization" class="form-control" placeholder="specialization" value=<?php echo $specialization ?>>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Date of Birth </label>
                                                                <div class="col-sm-2">
                                                                    <input type="date"  r name="date_of_birth" class="form-control"  value=<?php echo $date_of_birth ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">place of Birth </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="place_of_birth" class="form-control" placeholder="Enter place" value=<?php echo $place_of_birth ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Nationality</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" class="form-control" r  name="nationality" placeholder=" Enter Nationality " value=<?php echo $nationality ?>>
                                                                </div>
                                                            </div> 
                                                            
                                                            <h6 class="">Residance Address</h5>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Homse</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="address_name" class="form-control" placeholder="Homse "value=<?php echo $address_name ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Square </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="address_square" class="form-control" placeholder="Square "value=<?php echo $address_square ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Area</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="address_area" class="form-control" placeholder=" Area"value=<?php echo $address_area ?>>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Post Box</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  r name="address_box" class="form-control" placeholder="Box " value=<?php echo $address_box ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Email </label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  r name="address_email" class="form-control" placeholder="Email " value=<?php echo $address_email ?>>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">phone</label>
                                                                <div class="col-sm-4">
                                                                    <input type="phone"  r name="address_phone" class="form-control" placeholder="phone " value=<?php echo $address_phone ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Telephone </label>
                                                                <div class="col-sm-4">
                                                                    <input type="phone"  r name="address_Telephone"  class="form-control" placeholder="Telephone " value=<?php echo $address_Telephone ?>>
                                                                </div>
                                                            </div>  
                                                          
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> <h6 class="">Gender Type</h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" name="gender_type" value="Male " checked>Male </label>
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" name="gender_type" value="Fmale">Fmale </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> <h6 class=""> Social Statues</h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" name="gender_statues" value="Single"checked>Single </label>
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" name="gender_statues" value="Marge ">Marge  </label>
                                                                </div>
                                                            </div><br>
                                                            <h6 class="">Documents r:</h5>
                                                            <hr>
                                                            <p class="">*Please attach a copy of one of the following. CV / Nationallaity Certificate or National NO. / National ID card /Birth Cert / Residence Cert.
                                                                *Please also include two passport size photographs of yourself taken not more than six months before the date of this application.
                                                                * attach also copies of experience & educational certificates 
                                                                </p><br>

                                                                <h6 class="">Highest Educational level (please singe): PRIMARY SCHOOL    SECONDARY SCHOOL   UNIVERSITY    OTHER DIPLOMA: </h5>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Qualification Obtained 1</label>
                                                                <div class="col-sm-2">
                                                                    <select  r name="q_obtained" class="form-control">
                                                                        <option value=<?php echo $q_obtained ?>><?php echo $q_obtained ?> </option>
                                                                        <option value="Hight_School">Hight School </option>
                                                                        <option value="Primery_School">Primery School</option>
                                                                        <option value="Secondry_School">Secondry School</option>
                                                                        <option value="College_Degree ">College Degree</option>
                                                                        <option value="Diploma_Degree">Diploma Degree</option>
                                                                        <option value=" Batchelor_Degree">Batchelor Degree</option>
                                                                        <option value="institution_certificate ">Institution Certificate </option>
                                                                        <option value="Training_Certificate ">Training Certificate </option>
                                                                    </select>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Date Qualification </label>
                                                                <div class="col-sm-2">
                                                                    <input type="date"   name="date_obtained" class="form-control"  value=<?php echo $date_obtained ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Awarding institution</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  r name="obtained_from" class="form-control"  value=<?php echo $obtained_from ?>>
                                                                </div>
                                                            </div> 
                                                          
                                                      
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Have you had any on the job official training if yes please list  </label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5"   class="form-control"name="job_befor" placeholder="job official or training"><?php echo $job_befor ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Do you have a Valide Driving licence ? if Yes detailes </label>
                                                                <label class="col-sm-2 col-form-label">licence No</label>
                                                                <div class="col-sm-2 ">
                                                                <input type="text" class="form-control"  name="licence_no" placeholder="licence No" maxlength="6"value=<?php echo $licence_no ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Expire Date</label>
                                                                <div class="col-sm-2">
                                                                <input type="date" class="form-control"  name="licence_expire" placeholder="Expire Date" maxlength="6"value=<?php echo $licence_expire ?>>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label"> <h6 class="">Do you accept working by shift system?  </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" checked  name="working_shift"   value="YES">YES </label>
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox"  name="working_shift" value="NO ">NO </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label"> <h6 class="">Do you accept working for extra hours?  </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" checked name="working_extra" value="YES">YES </label>
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox"  name="working_extra" value="NO ">NO </label>
                                                                </div>
                                                            </div>

                                                            <h6 class="">Employment History: List below your last  employers beginning with the most recent.</h5>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Do you work now and in what organization  </label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="3" cols="3" class="form-control"name="last_job_info" placeholder="job official or training"> <?php echo $last_job_info ?></textarea>
                                                                </div>
                                                            </div><BR>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Name</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_name" class="form-control" placeholder="Enter name" value=<?php echo $refrence0_name ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Phone</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_phone" class="form-control" placeholder="Enter phone" value=<?php echo $refrence0_phone ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Address</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_address" class="form-control" placeholder=" Enter Address " value=<?php echo $refrence0_address ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Position</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_position" class="form-control" placeholder=" Enter position " value=<?php echo $refrence0_position ?>>
                                                                </div>
                                                            </div> <BR>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Date From</label>
                                                                <div class="col-sm-2">
                                                                    <input type="DATE" name="date_from0" class="form-control" placeholder="Enter name" value=<?php echo $date_from0 ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Date To</label>
                                                                <div class="col-sm-2">
                                                                    <input type="date" name="date_to0" class="form-control" placeholder="Enter phone" value=<?php echo $date_to0 ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Rate of Bay</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="job_last_payment0" class="form-control" placeholder=" Enter Address " value=<?php echo $job_last_payment0 ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Reason Leaving</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="reason_leaving0"  class="form-control" placeholder=" Enter position " value=<?php echo $reason_leaving0 ?>>
                                                                </div>
                                                            </div>
                                                            <HR>

                                                            
                                                            <h6 class="">Personal References: Please Provide name, address and telephone number of TWO character referees, The referees MUST NOT be family members, but preferably persons of standing in the community or of a profession e.g., Local Councillor, Doctor, Teacher, Community Leader. The referees must have known you for at LEAST TWO YEARS. </h5>
                                                                                <br>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-1 col-form-label">name</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_name" class="form-control" placeholder="Enter name" value=<?php echo $refrence01_name ?>>
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">position</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_position" class="form-control" placeholder="Enter position" value=<?php echo $refrence01_position ?>>
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">Address</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_address" class="form-control" placeholder=" Enter Address " value=<?php echo $refrence01_address ?>>
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">phone</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_phone" class="form-control" placeholder=" Enter phone " value=<?php echo $refrence01_phone ?>>
                                                                    </div>
                                                                </div> <BR>
                                                                <h6 class="">Next of Kin: (Someone we can contact in case of any emergency) preferring residing in the capital </h5>
                                                                 <br>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-1 col-form-label">name</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" r  name="refrence1_name" class="form-control" placeholder="Enter name" value=<?php echo $refrence1_name ?>>
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">Relationship </label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"  r name="refrence1_relation" class="form-control" placeholder="Enter Relationship" value=<?php echo $refrence1_relation ?> >
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">Address</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" r  name="refrence1_address" class="form-control" placeholder=" Enter Address " value=<?php echo $refrence1_address ?> >
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">phone</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" r  name="refrence1_phone" class="form-control" placeholder=" Enter phone "  value=<?php echo $refrence1_phone ?>>
                                                                    </div>
                                                                </div> <BR>
                                                               <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Do you have a Bank account in you name ? if yes detalis below </label>
                                                                <label class="col-sm-1 col-form-label">bank name</label>
                                                                <div class="col-sm-2 ">
                                                                <input type="text" class="form-control"  name="account_name" placeholder="bank name" maxlength="6"  value=<?php echo $account_name ?>  >
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">account number</label>
                                                                <div class="col-sm-2">
                                                                <input type="text" class="form-control"  name="account_no" placeholder="account number" maxlength="6"  value=<?php echo $account_no ?>  >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">additional info</label>
                                                                <div class="col-sm-2">
                                                                <input type="text" class="form-control"  name="account_info" placeholder="additional info" maxlength="6" value=<?php echo $account_info ?>   >
                                                                </div><br><br>

                                                                <div class="col-sm-12">
                                                                     <hr>
                                                          <div class="form-check form-switch text-center">
                                                           <br>
                                                            <label class="form-check-label" for="flexSwitchCheckDisabled"><input type="checkbox"  value=<?php echo $user_name ?> name="user_signature"  required>  Employee Signature Done By <?php echo $user_name ?> </label>
                                                            <hr> 
                                                         </div><br>

                                                         <div class="row">
                                                                    
                                                           <br>
                                                           <h6 class="col-sm-12"> G.M Decision & H.R Decision </h5>
                                                           <label class="col-sm-2 col-form-label">Employee Position </label>

                                                                <div class="col-sm-4">
                                                                    <select  required name="employee_position" class="form-control">
                                                                        <option value="not selected">Select Employee Position </option>
                                                                        <option value="General Manager">General Manager</option>
                                                                        <option value="Deputy Genera Manager">Deputy Genera Manager</option>
                                                                        <option value="Excutive Manager">Excutive Manager</option>
                                                                        <option value="Deputy Excutive Manager">Deputy Excutive Manager</option>
                                                                        <option value=" Accounting Manager ">Accounting Manager </option>
                                                                        <option value=" Deputy Accounting Manager ">Deputy Accounting Manager </option>
                                                                        <option value="Maintenance Engineer  ">Maintenance Engineer </option>
                                                                        <option value="Cattring ">Cattring</option>
                                                                        <option value="Directory of Opeartion">Directory of Opeartion</option>
                                                                        <option value="Deputy Directory of Operation ">Deputy Directory of Operation</option>
                                                                        <option value="Cleaning Worker ">Cleaning Worker</option>
                                                                        <option value="Store Manager ">Store Manager</option>
                                                                        <option value="Deputy Store Manager ">Deputy Store Manager</option>
                                                                        <option value="Massenger ">Massenger</option>
                                                                        <option value="Care Driver ">Care Driver</option>
                                                                        <option value="Moter Driver ">Moter Driver</option>
                                                                        <option value="Project Manager ">Project Manager</option>
                                                                        <option value="Deputy Project Manager ">Deputy Project Manager</option>
                                                                        <option value="Manager Assistant ">Manager Assistant</option>
                                                                        <option value="Secretary ">Secretary</option>
                                                                    </select>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Employee Department </label>

                                                                <div class="col-sm-4">
                                                                        <select  required name="employee_department" class="form-control">
                                                                        
                                                                        <option  value="Operation">  Select Employee Department </option>
                                                                        <option  value="Operation">   Operation Department</option>
                                                                        <option  value="Hr">   Human Resource Department </option>
                                                                        <option  value="Accounting">   Accounting Department </option>
                                                                        <option  value="Reception">   Reception Department</option>
                                                                        <option  value="Management">   Management Department</option>
                                                                        <option  value="Supervisor">   Supervisor Department</option>  
                                                                        <option  value="IT">   IT Department</option>
                                                                        <option value="Administrative affairs Department">Administrative Affairs Department </option>
                                                                        <option value="Human Resources Department">Human Resources Department </option>
                                                                        <option value="Accounting Department">Accounting Department</option>
                                                                        <option value=" Maintenance Department "> Maintenance Department</option>
                                                                        <option value="Cattring Department">Cattring Department </option>
                                                                        <option value="Operation Department">Operation Department </option>
                                                                        <option value="Cleaning  Department">Cleaning  Department </option>
                                                                        <option value="Stores Department ">Stores Department </option>
                                                                        <option value="cattring Department">cattring Department </option>
                                                                        <option value="massengers Department">massengers Department </option>
                                                                        <option value="Drivers Department ">Drivers Department </option>
                                                                        <option value="project management Department">project management Department </option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            <hr> 
                                                            <div class="col-sm-12"></div><br>
                                                            <label class="col-sm-2 col-form-label"> Hire Date</label>
                                                                <div class="col-sm-4">
                                                                    <input type="date" name="employee_hire" class="form-control" placeholder=" Enter Address " value=<?php echo $refrence0_address ?>>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Employee Statues</label>
                                                                <div class="col-sm-4">
                                                                        <select  required name="employee_statues" class="form-control">
                                                                        <option  value="not selected">   Select Employee Statuse</option>

                                                                        <option  value="Operation">   Stooped</option>
                                                                        <option  value="Hr">   Human Resource Department </option>
                                                                        <option  value="Accounting">   Accounting Department </option>
                                                                        <option  value="Reception">   Reception Department</option>
                                                                        <option  value="Management">   Management Department</option>
                                                                        <option  value="Supervisor">   Supervisor Department</option>  
                                                                        
                                                                    </select>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Location </label>
                                                                <div class="col-sm-10">
                                                                    <select  required name="employee_location"  class="form-control">
                                                                    <option value="not selected">Select Location </option>
                                                                    <option value="Arabic Sudanese bank ( Afriqia )">Arabic Sudanese bank ( Afriqia ) </option>
                                                                        <option value="Arabic Sudanese bank (Al waha ) ">Arabic Sudanese bank (Al waha )  </option>
                                                                        <option value="Arabic Sudanese bank ( steen steet )">Arabic Sudanese bank ( steen steet )</option>
                                                                        <option value="ALarabi Sudani bank">ALarabi Sudani bank</option>
                                                                        <option value=" Bank of Khartoum">Bank of Khartoum </option>
                                                                        <option value="Emirates ">Emirates </option>
                                                                        <option value="Sanable">Sanable </option>
                                                                     
                                                                    </select>
                                                                </div>
                                                              </div><br>
                                                              
                                                                <p>I her by certify that I have completed this application form correctly, and that I give permission for the company or any of its appointed agents to make any necessary enquiries about me, including contacting my personal referees. I understand that it is a criminal offence to make false statements, and that if it is subsequently revealed that I have made a false statement on this application form, it will be considered cause for instant dismissal and probable prosecution. </p>
                                                                <div class="col-sm-12">
                                                                <a href=""><input type="submit"  name="update_employee" class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>
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
