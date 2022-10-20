<?php 

include 'config.php';

include 'session.php';
session_start();

error_reporting(0);




$employee_id=$_GET['employee_id'];

$sql="select * from `employee` where employee_id=$employee_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);




$date_from0 = $row['date_from0'];
$date_to0 = $row['date_to0'];
$job_last_payment0 = $row['job_last_payment0'];
$employee_name = $row['employee_name'];
$specialization = $row['specialization'];
$date_of_birth = $row['date_of_birth'];
$place_of_birth = $row['place_of_birth'];
$gender_type = $row['gender_type'];
$gender_statues = $row['gender_statues'];
$q_obtained = $row['q_obtained'];
$date_obtained  = $row['date_obtained']; 
$obtained_from  = $row['obtained_from']; 
$job_befor = $row['job_befor'];
$last_job_info= $row['last_job_info'];        
$nationality= $row['nationality']; 




$interviewer_name= $row['interviewer_name'];        
$interviewer_date= $row['interviewer_date'];        
$interviewer_signature= $row['interviewer_signature'];        
$interviewer_position= $row['interviewer_position'];        
$interviewer_comment= $row['interviewer_comment'];  
      

$manager_name= $row['manager_name'];        
$manager_date= $row['manager_date'];        
$manager_signature= $row['manager_signature'];        
$manager_position= $row['manager_position'];        
$manager_comment= $row['manager_comment'];      



$hr_name= $row['hr_name'];        
$hr_date= $row['hr_date'];        
$hr_signature= $row['hr_signature'];        
$hr_position= $row['hr_position'];        
$hr_comment= $row['hr_comment'];        
   





                                      




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
            <h6 class=" text-light text-center text-ganger"> <?php echo  date("l/"."Y/m/d"). "<br>";?></h6>
            <h6 class=" text-light text-center text-ganger"> <?php echo "Time" . date("h:i:sa"). "<br>"; ?></h6>
            </div>   
          
            
            <div class="col-md-2"> 
            <img  src="assets/images/logo.png"  alt="company logo"> 
            
                 </div>
            </div><br><br><br><br>

            <div class="row"><br><br><br><br>

                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="">G.S / HR/ FORM / 3</h5><br>
                                                        <h5 class="">Interview Form</h5>
                                                    </div>
                                                    <div class="card-block">

                                                        <form enctype="multipart/form-data" method="POST"action="function.php" >  
                                                          
                                                     
                                                   
                                                            <h4 class="sub-title"> personal Information Review </h4>
                                                                                                                     
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">1. Employee Name : </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6   col-form-label checkbox-inline" > <?php echo $employee_name ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">2. Employee Age :  </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6 col-form-label checkbox-inline" ><?php echo $employee_name ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">3. Employee Nationality : </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-2 col-form-label checkbox-inline" ><?php echo $nationality ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">4.  Education Qualification : </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6 col-form-label checkbox-inline" ><?php echo $q_obtained ?> </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">5.  Specialization : </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6 col-form-label checkbox-inline" ><?php echo $specialization ?> </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">6. Education Institution : </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6 col-form-label checkbox-inline" ><?php echo $obtained_from ?> </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">7. Year of graduation :</h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6 col-form-label checkbox-inline" ><?php echo $date_obtained ?> </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> <h6 class="">8. Previous Experience : </h5></label>
                                                                <div class="col-sm-6">
                                                                <label class="col-sm-6 col-form-label checkbox-inline" ><?php echo $last_job_info ?> </label>
                                                                </div>
                                                            </div>
                                                            <br>
                                                          </div>   
                                                          <hr>
                                                       
                                                          <h6 class="col-sm-12">  2.  Rating Total Marks 100</h5>
                                                

                                                          <div class="col-sm-12">         <hr>
                                                          <h6 class="col-sm-12">  A\ Personal Qualities: 30 Marks</h5>
                                                          <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Appearance (8) </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number"  id="n1" name="n1" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Smartness (7)  </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number"  id="n2" name="n2" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Personality (8)  </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number"  id="n3" name="n3" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Ability to express ideas (7)  </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number" id="n4" name="n4" class="form-control" >
                                                                </div>


                                                                <hr>
                                                            </div>
                                                            </div>


                                                            
                                                          <div class="col-sm-12">         <hr>
                                                          <h6 class="col-sm-12">  B\ General Fitness: 30 Marks</h5>
                                                          <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">General culture (7) </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number" name='n5'  id="n5" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">General Health & Psychological state (8)  </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number" name='n6'  id="n6" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Communication with others (8)  </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number" name='n7'  id="n7" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Social Condition (7)  </label>
                                                                <div class="col-sm-1">
                                                                    <input  type="number name='n8'" id="n8" class="form-control" >
                                                                </div>
                                                                   
                                                          <div class="col-sm-12">         <hr>
                                                          <h6 class="col-sm-12">  C\ Stability for the post: 40 Marks</h5>
                                                          <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Relevance of Qualifications (10)  </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number" name='n9'  id="n9" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Relevance of experience (10)   </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number"  name='10' id="n10" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Knowledge about the post (10)   </label>
                                                                <div class="col-sm-1">
                                                                    <input type="number"  name='11' id="n11" class="form-control" >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Interest in the Post (10)  </label>
                                                                <div class="col-sm-1">
                                                                    <input  type="number" name='12' id="n12" class="form-control" >
                                                                </div><br><br><br><br>
                                                                <label class="col-sm-4 col-form-label">Total Marks obtained   </label>
                                                             
                                                                       

                                                  
                                                   
                                                                

                                                                <hr>
                                                            </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                            
                                                            <br>
                                                            <h6 class="col-sm-12">Interview has been conducted by: </h5>
                                                            <hr>
                                                            <div class="col-sm-12">
                                                                    <textarea rows="3" cols="3" class="form-control"name="interviewer_commnet" placeholder="Interviewer Recommendation "></textarea>
                                                                </div><br>
                                                            <div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Name</label>
                                                                <div class="col-sm-2">
                                                                <input type="text" name="interviewer_name" class="form-control" placeholder="Enter name" value=<?php echo $interviewer_name ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Position</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="interviewer_position" class="form-control" placeholder="Enter phone" >
                                                                </div>
                                                                <label class="col-sm-3 col-form-label"> <input type="checkbox"  name="interviewer_signature" value='yes'   >Signature </label>
                                                              
                                                                <label class="col-sm-1 col-form-label">Date</label>
                                                                <div class="col-sm-2">
                                                                    <input type="date" name="interviewer_date" class="form-control" placeholder=" Enter position " value=<?php echo $interviewer_date ?> >
                                                                </div><hr>
                                                            </div> <hr>
                                                      
                                                             </div>
                                                             <hr><br><br><br><br><br>
                                                             
                                                             <div class="col-sm-12">
                                                            <br>
                                                            <h6 class="col-sm-12"> H.R Recommendation</h5>
                                                            <div class="col-sm-12">
                                                                    <textarea rows="3" cols="10 " class="form-control"name="hr_commnet" placeholder="HR Recommendation "></textarea>
                                                                </div>
                                                           <br><div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Name</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="hr_name" class="form-control" placeholder="Enter Name" value=<?php echo $hr_name ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Position</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="hr_position" class="form-control" placeholder="Enter Position" value=<?php echo $hr_position ?>>
                                                                </div>
                                                                <label class="col-sm-3 col-form-label"> <input type="checkbox"  name="user_signature"value='yes'    >Signature </label>
                                                              
                                                                <label class="col-sm-1 col-form-label">Date</label>
                                                                <div class="col-sm-2">
                                                                    <input type="DATE" name="hr_interview_date" class="form-control" placeholder=" Enter Date "value=<?php echo $hr_interview_date ?> >
                                                                </div>
                                                            </div> 
                                                      
                                                             </div>
                                                             <hr><br><br><br><br><br>
                                                             <hr><br><br><br><br><br>
                                                             
                                                             <div class="col-sm-12">
                                                            <br>
                                                            <h6 class="col-sm-12"> G.M. Decision: </h5>
                                                            <div class="col-sm-12">
                                                                    <textarea rows="3" cols="10 " class="form-control"name="manager_commnet" placeholder="Manager Recommendation "></textarea>
                                                                </div>
                                                           <br><div class="form-group row">
                                                                <label class="col-sm-1 col-form-label">Name</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="manager_name" class="form-control" placeholder="Enter Name" value=<?php echo $manager_name ?>>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label">Position</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="manager_position" class="form-control" placeholder="Enter Position" value=<?php echo $manager_position ?>>
                                                                </div>
                                                                <label class="col-sm-3 col-form-label"> <input type="checkbox"  name="user_signature" value='yes'   >Signature </label>
                                                              
                                                                <label class="col-sm-1 col-form-label">Date</label>
                                                                <div class="col-sm-2">
                                                                    <input type="DATE" name="m_interview_date" class="form-control" placeholder=" Enter Date " value=<?php echo $m_interview_date ?>>
                                                                </div>
                                                            </div> 
                                                      
                                                             </div>
                                                             <hr><br><br><br><br><br>
                                                          <div class="col-sm-12">
                                                                     <hr>
                                                               
                                                          <div class="form-check form-switch">
                                                           <br>
                                                            <label class="form-check-label" for="flexSwitchCheckDisabled"><input type="checkbox" required  name="updated" value=<?php echo $user_name?>>Process Done By <?php echo $user_name?> By ID:<?php echo $user_id?> </label>
                                                            <hr> 
                                                         </div><br>
                                                         </div>  
                                                                    
                                                         <div  class=" col-sm-12 sub-title ">  Grosvenor Services Ltd, Khartoum III, Street 51,  Building. 24 - Tel: +249 (0)183 476779 
                                                            Web-Site www.grosvenor-sudan.com<br>	E-mail address: info@grosvenor-sudan.com </h4>`
                                                            

                                                                <div class="col-sm-12">
                                                                <a href=""><input type="submit" name="interview"   class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>
                                                                </div><br><br>
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
