<?php 

include 'config.php';

session_start();

error_reporting(0);

    $name = $_POST['name'];



if (isset($_POST['new_employee'])) {


 $refrence01_name = $_POST ['refrence01_name'];
 $refrence01_phone = $_POST ['refrence01_phone'];
 $refrence01_address = $_POST ['refrence01_address'];
 $refrence01_position = $_POST ['refrence01_position']; 
 $refrence1_name = $_POST ['refrence1_name'];
 $refrence1_phone = $_POST ['refrence1_phone'];
 $refrence1_address = $_POST ['refrence1_address'];
 $refrence1_relation = $_POST ['refrence1_relation'];
 $refrence0_name = $_POST ['refrence0_name'];
 $refrence0_phone = $_POST ['refrence0_phone'];
 $refrence0_address = $_POST ['refrence0_address'];
 $refrence0_position = $_POST ['refrence0_position'];
 $date_from0 = $_POST ['date_from0'];
 $date_to0 = $_POST ['date_to0'];
 $job_last_payment0 = $_POST ['job_last_payment0'];
 $reason_leaving0 = $_POST ['reason_leaving0'];
 $account_name = $_POST ['account_name'];
 $account_no = $_POST ['account_no'];
 $account_info = $_POST ['account_info'];
 $working_shift = $_POST ['working_shift'];
 $working_extra = $_POST ['working_extra'];
 $applied_position = $_POST ['applied_position'];
 $employee_name = $_POST ['employee_name'];
 $specialization = $_POST ['specialization'];
 $date_of_birth = $_POST ['date_of_birth'];
 $place_of_birth = $_POST ['place_of_birth'];
 $address_name = $_POST ['address_name'];
 $address_square = $_POST ['address_square'];
 $address_area = $_POST ['address_area'];
 $address_box = $_POST ['address_box'];
 $address_email = $_POST ['address_email'];
 $address_phone = $_POST ['address_phone'];
 $address_Telephone = $_POST ['address_Telephone'];
 $gender_type = $_POST ['gender_type'];
 $gender_statues = $_POST ['gender_statues'];
 $q_obtained = $_POST ['q_obtained'];
 $date_obtained  = $_POST ['date_obtained']; 
 $obtained_from  = $_POST ['obtained_from']; 
 $job_befor = $_POST ['job_befor'];
 $licence_expire= $_POST ['licence_expire'];        
 $licence_no= $_POST ['licence_no'];        
 $last_job_info= $_POST ['last_job_info'];        
 $id_type=$_POST['id_type'];
 $id_number=$_POST['id_number'];
 $release_date=$_POST['release_date'];
 $place_of_issue=$_POST['place_of_issue'];

 
//  $date_of_birth1=$_POST ['date_of_birth'];
//     $today=date("Y-m-d");
//  $dif=date_diff(date_create($date_of_birth1),date_create($today));
//  $age=$diff->fomat('%y');



			$sql = "INSERT INTO employee (
            refrence01_name,
            refrence01_phone,
            refrence01_address,
            refrence01_position,
            refrence1_name,
            refrence1_phone,
            refrence1_address,
            refrence1_relation,
            refrence0_name,
            refrence0_phone,
            refrence0_address,
            refrence0_position,
            date_from0,
            date_to0,
            job_last_payment0,
            reason_leaving0,
            account_name,
            account_no,
            account_info,
            working_shift,
            working_extra,
            applied_position,
            employee_name,
            specialization,
            date_of_birth,
            place_of_birth,
            address_name,
            address_square,
            address_area,
            address_box,
            address_email,
            address_phone,
            address_Telephone,
            gender_type,
            gender_statues,
            q_obtained,
            date_obtained,
            obtained_from,
            job_befor,
            licence_expire,
            licence_no,
            last_job_info,
            Employee_age,
            id_type,
            id_number,
            release_date,
            place_of_issue
      
            )
					VALUES (
'$refrence01_name',
 '$refrence01_phone',
 '$refrence01_address',
' $refrence01_position',

'$refrence1_name',
 '$refrence1_phone',
 '$refrence1_address',
' $refrence1_relation',

'$refrence0_name',
'$refrence0_phone',
'$refrence0_address',
'$refrence0_position',
'$date_from0',
'$date_to0',
'$job_last_payment0',
'$reason_leaving0',

'$account_name',
'$account_no',
'$account_info',

'$working_shift',
'$working_extra',
'$applied_position',
'$employee_name',
'$specialization',
'$date_of_birth',
'$place_of_birth',

'$address_name',
'$address_square',
'$address_area',
'$address_box',
'$address_email',
'$address_phone',
'$address_Telephone',

'$gender_type',
'$gender_statues',
'$q_obtained',
'$date_obtained',
'$obtained_from',
'$job_befor',
'$licence_expire',
'$licence_no',
'$last_job_info',
'$age',
'$id_type',
'$id_number',
'$release_date',
'$place_of_issue'

)";


		
if($conn->query($sql)==TRUE){

    $last_id=$conn->insert_id;
   //echo$last_id;
    echo "<script>alert( 'Your Tarck ID is $last_id Use This ID To  Track Your case statues')</script> ";

}
            
            else {
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
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="welcome.php">Go Home</a>  </button>
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
           <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
            
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
                                                        <h5 class="">Employee Application Form </h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Data Inputs</h4>
                                                        <form  enctype="multipart/form-data" method="post" action="new_employee.php">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Serial NO</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="employee_id" class="form-control" DISABLED>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">position Applying For</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" required name="applied_position"  class="form-control">
                                                                </div>
                                                            </div>
                                                            <h6 class="">Personal Information</h5>
                                                              <hr>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Full Name</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text"  required name="employee_name" class="form-control" placeholder="Type your name gos here">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Specialization </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="specialization" class="form-control" placeholder="specialization">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Date of Birth </label>
                                                                <div class="col-sm-2">
                                                                    <input type="date"  required name="date_of_birth" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">place of Birth </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="place_of_birth" class="form-control" placeholder="Enter place">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Nationality</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" class="form-control" required  name="nationality" placeholder=" Enter Nationality ">
                                                                </div>
                                                            </div> 
                                                            <br>
                                                            <h6 class="">Identification Information  </h5>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"> Select ID Type</label>
                                                                <div class="col-sm-10">
                                                                    <select   name="id_type" class="form-control" required>
                                                                        <option value="not selected">Select ID Type </option>
                                                                        <option value="ID card">ID card </option>
                                                                        <option value="Passport"> Passport</option>
                                                                        <option value="National Card">National Card </option>
                                                                        <option value="National Number">National Number </option>
                                                                        <option value="Other "> Other</option>
                                                                    
                                                                    </select><br>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">ID number </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="id_number" class="form-control" placeholder="Enter Date">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Release Date</label>
                                                                <div class="col-sm-2">
                                                                    <input type="date"  required name="release_date" class="form-control" placeholder=" Enter institution ">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Place of Issue  </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="place_of_issue" class="form-control" placeholder="Enter Date">
                                                                </div>
                                                               
                                                    
                                                            </div> <br>

                                                            
                                                            <h6 class="">Residance Address</h5>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Homse</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="address_name" class="form-control" placeholder="Homse ">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Square </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="address_square" class="form-control" placeholder="Square ">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Area</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="address_area" class="form-control" placeholder=" Area">
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Post Box</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text"  required name="address_box" class="form-control" placeholder="Box ">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Email </label>
                                                                <div class="col-sm-4">
                                                                    <input type="email"  required name="address_email" class="form-control" placeholder="Email ">
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">phone</label>
                                                                <div class="col-sm-4">
                                                                    <input type="phone"  required name="address_phone" class="form-control" placeholder="phone ">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Telephone </label>
                                                                <div class="col-sm-4">
                                                                    <input type="phone"  required name="address_Telephone"  class="form-control" placeholder="Telephone ">
                                                                </div>
                                                            </div>  
                                                          
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> <h6 class="">Gender Type</h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox"  checked name="gender_type" value="Male ">Male </label>
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" name="gender_type" value="Fmale">Fmale </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> <h6 class=""> Social Statues</h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" checked name="gender_statues" value="Single">Single </label>
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><input type="checkbox" name="gender_statues" value="Marge ">Marge  </label>
                                                                </div>
                                                            </div><br>
                                                            <h6 class="">Documents r:</h5>
                                                            <hr>
                                                            <p class="">*Please attach a copy of one of the following. CV / Nationallaity Certificate or National NO. / National ID card /Birth Cert / Residence Cert.
                                                                *Please also include two passport size photographs of yourself taken not more than six months before the date of this application.
                                                                * attach also copies of experience & educational certificates 
                                                                </p><br>

                                                                <h6 class="">Highest Educational level (please singe): PRIMARY SCHOOL   SECONDARY SCHOOL   UNIVERSITY    OTHER DIPLOMA: </h5>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Qualification Obtained 1</label>
                                                                <div class="col-sm-2">
                                                                    <select   name="q_obtained" class="form-control" required>
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
                                                                    <input type="date"  required name="date_obtained" class="form-control" placeholder="Enter Date">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Awarding institution</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"  required name="obtained_from" class="form-control" placeholder=" Enter institution ">
                                                                </div>
                                                            </div> 
                                                          
                                                      
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Have you had any on the job official training if yes please list  </label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" required  class="form-control"name="job_befor" placeholder="job official or training"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Do you have a Valide Driving licence ? if Yes detailes </label>
                                                                <label class="col-sm-2 col-form-label">licence No</label>
                                                                <div class="col-sm-2 ">
                                                                <input type="text" class="form-control" required name="licence_no" placeholder="licence No" maxlength="6">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Expire Date</label>
                                                                <div class="col-sm-2">
                                                                <input type="date" class="form-control" required name="licence_expire" placeholder="Expire Date" maxlength="6">
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
                                                                    <textarea rows="3" cols="3" required class="form-control"name="last_job_info" placeholder="job official or training"></textarea>
                                                                </div>
                                                            </div><BR>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Name</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_name" class="form-control" placeholder="Enter name">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Phone</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_phone" class="form-control" placeholder="Enter phone">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Address</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_Address" class="form-control" placeholder=" Enter Address ">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Position</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="refrence0_position" class="form-control" placeholder=" Enter position ">
                                                                </div>
                                                            </div> <BR>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Date From</label>
                                                                <div class="col-sm-2">
                                                                    <input type="DATE" name="date_from0" class="form-control" placeholder="Enter name">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Date To</label>
                                                                <div class="col-sm-2">
                                                                    <input type="date" name="date_to0" class="form-control" placeholder="Enter phone">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Rate of Bay</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="job_last_payment0" class="form-control" placeholder=" Enter Address ">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Reason Leaving</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="reason_leaving0"  class="form-control" placeholder=" Enter position ">
                                                                </div>
                                                            </div>
                                                            <HR>

                                                            
                                                            <h6 class="">Personal References: Please Provide name, address and telephone number of TWO character referees, The referees MUST NOT be family members, but preferably persons of standing in the community or of a profession e.g., Local Councillor, Doctor, Teacher, Community Leader. The referees must have known you for at LEAST TWO YEARS. </h5>
                                                                                <br>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-1 col-form-label">name</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_name" class="form-control" placeholder="Enter name">
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">position</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_position" class="form-control" placeholder="Enter position">
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">Address</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_address" class="form-control" placeholder=" Enter Address ">
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">phone</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"   name="refrence01_phone" class="form-control" placeholder=" Enter phone ">
                                                                    </div>
                                                                </div> <BR>
                                                                <h6 class="">Next of Kin: (Someone we can contact in case of any emergency) preferring residing in the capital </h5>
                                                                 <br>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-1 col-form-label">name</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" required  name="refrence1_name" class="form-control" placeholder="Enter name">
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">Relationship </label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text"  required name="refrence1_relation" class="form-control" placeholder="Enter Relationship">
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">Address</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" required  name="refrence1_address" class="form-control" placeholder=" Enter Address ">
                                                                    </div>
                                                                    <label class="col-sm-1 col-form-label">phone</label>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" required  name="refrence1_phone" class="form-control" placeholder=" Enter phone ">
                                                                    </div>
                                                                </div> <BR>
                                                               <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Do you have a Bank account in you name ? if yes detalis below </label>
                                                                <label class="col-sm-1 col-form-label">bank name</label>
                                                                <div class="col-sm-2 ">
                                                                <input type="text" class="form-control"  name="account_name" placeholder="bank name" maxlength="6">
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">account number</label>
                                                                <div class="col-sm-2">
                                                                <input type="text" class="form-control"  name="account_no" placeholder="account number" maxlength="6">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">additional info</label>
                                                                <div class="col-sm-2">
                                                                <input type="text" class="form-control"  name="account_info" placeholder="additional info" maxlength="6">
                                                                </div><br><br>
                                                                <p>I her by certify that I have completed this application form correctly, and that I give permission for the company or any of its appointed agents to make any necessary enquiries about me, including contacting my personal referees. I understand that it is a criminal offence to make false statements, and that if it is subsequently revealed that I have made a false statement on this application form, it will be considered cause for instant dismissal and probable prosecution. </p>
                                                                <div class="col-sm-12">
                                                                <a href=""><input type="submit"  name="new_employee" class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>
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
