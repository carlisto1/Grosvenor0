am<?php

include 'config.php';
include 'session.php';






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
      <form enctype="multipart/form-data" method="POST" action="function.php">
      <div class="modal-body">
      <div class="form-group form-primary">
      
            <input type="text" name="order_id" class="form-control" placeholder="Confirm Id "  required>
            
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       <button type="submit" name="delete_order02" class="btn btn-danger btn-block ">Yes confirm</button>

       </form>
      </div>
    </div>
  </div>
</div>


  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
        <div class="row">
            <div class="col-md-2">
            <button class="btn btn-danger btn-outline-light btn-round waves-effect " ><a class="text-light" href="order02.php"> Back To Home</a>  </button>
            </div>
          
            <div class="col-md-2">
                       <h6 class=" text-light text-center text-ganger">Providing  Peace to Mind</h6>
                        <h6  class=" text-light text-center text-ganger">www.grosvenor-sudan.com</h6>
                       </div>
            <div class="col-md-4">
                
            

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
            <div class="col-md-2"> 
           <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
            
                 </div>
            </div><br><br><br><br>
            <div class="row">
                <div class="col-12">
<!-- Basic table card start -->
  <div class="card">
    <div class="card-header">
            <h5>Employee Information By Date</h5>
            
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
    <div class="card-block table-border-style">
        <div class="table-responsive">
            
            <table class="table">
                <thead>
                    <tr>
                    <th> ID</th>
                        <th> Name</th>
                        <th>Specialization</th>
                        <th >Date Birth</th>
                        <th>Place Birth</th>
                        <th>Address Name</th>
                        <th>Address Square</th>
                        <th>Address Area</th>
                        <th>Address Box</th>
                        <th>Address Email</th>
                        <th>Address Phone</th>
                        <th>Address Telephone</th>
                        <th>Gender Type</th>
                        <th>Gender Statues </th>
                        <th>Job Befor</th>
                        <th>Licence Expire</th>
                        <th>Licence No</th>
                        <th>Last Job</th>
                        <th>refrence01 name<th>
                        <th>refrence01 phone<th>
                        <th>refrence01 Address<th>
                        <th>refrence01 position<th>
                        <th>refrence1 name<th>
                        <th>refrence1 phone<th>
                        <th>refrence1 Address<th>
                        <th>refrence1 relation<th>
                        <th>refrence0 name<th>
                        <th>refrence0 phone<th>
                        <th>refrence0 Address<th>
                        <th>refrence0 position<th>
                        <th>account name<th>
                        <th>account no<th>
                        <th>account info<th>
                        <th>working shift<th>
                        <th>working extra<th>
                        <th>applied position<th>
                        <th>Created Date <th>
                        <th>Updated Date<th>
                        <th>Updated By<th>
                        <th>Qualification<th>
                        <th>Date Qualification <th>
                        <th>Obtained From<th>
                        <th>Employee Position<th>
                        <th>Employee Department<th>

                        <th>interviewer_name<th>
                        <th>interviewer_date<th>
                        <th>interviewer_signature<th>
                        <th>interviewer_position<th>
                        <th>interviewer_comment<th>
                        <th>manager_name<th>
                        <th>manager_date<th>
                        <th>manager_signature<th>
                        <th>manager_position<th>
                        <th>manager_comment<th>
                        <th>hr_name<th>
                        <th>hr_date<th>
                        <th>hr_signature<th>
                        <th>hr_position<th>
                        <th>hr_comment<th>
                        <th colspan="3" class="text-center" >Process</th>
                        <th colspan="2" class="text-center" >Operation</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php
			if (isset($_POST['search_data'])){
                $employee_id = $_POST['employee_id'];
				include('config.php');
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
			
				$query="select * from `employee` where created between '$from' and '$to'";
				$result=mysqli_query($conn,$query);
				if($row = mysqli_fetch_assoc($result)){
				
					?>
					<tr>
                    <td> <?php echo $row['employee_id']; ?></td>
              <td><?php echo $row['employee_name']; ?></td>
              <td><?php echo $row['specialization']; ?></td>
              <td><?php echo $row['date_of_birth']; ?></td>
              <td><?php echo $row['place_of_birth']; ?></td>
              <td><?php echo $row['address_name']; ?></td>
              <td><?php echo $row['address_square']; ?></td>
              <td><?php echo $row['address_area']; ?></td>
              <td><?php echo $row['address_box']; ?></td>
              <td><?php echo $row['address_email']; ?></td>
              <td><?php echo $row['address_phone']; ?></td>
              <td><?php echo $row['address_Telephone']; ?></td>
              <td><?php echo $row['gender_type']; ?></td>
              <td><?php echo $row['gender_statues']; ?></td>
              <td><?php echo $row['job_befor']; ?></td>
              <td><?php echo $row['licence_expire']; ?></td>
              <td><?php echo $row['licence_no']; ?></td>
              <td><?php echo $row['last_job_info']; ?></td>
              <td><?php echo $row['refrence01_name'];?><td>
             <td><?php echo $row['refrence01_phone'];?><td>
             <td><?php echo $row['refrence01_address'];?><td>
             <td><?php echo $row['refrence01_position'];?><td>
             <td><?php echo $row['refrence1_name'];?><td>
             <td><?php echo $row['refrence1_phone'];?><td>
             <td><?php echo $row['refrence1_address']?><td>
             <td><?php echo $row['refrence1_relation']?><td>
             <td><?php echo $row['refrence0_name']?><td>
             <td><?php echo $row['refrence0_phone']?><td>
             <td><?php echo $row['refrence0_address']?><td>
             <td><?php echo $row['refrence0_position']?><td>

             <td><?php echo $row['account_name' ]?><td>
             <td><?php echo $row['account_no' ]?><td>
             <td><?php echo $row['account_info' ]?><td>
             <td><?php echo $row['working_shift' ]?><td>
             <td><?php echo $row['working_extra' ]?><td>
             <td><?php echo $row['applied_position' ]?><td>
             <td><?php echo $row['created' ]?><td>
             <td><?php echo $row['updated' ]?><td>
             <td><?php echo $row['updated_by' ]?><td>
             <td><?php echo $row['q_obtained' ]?><td>
             <td><?php echo $row['date_obtained' ]?><td>
             <td><?php echo $row['obtained_from']?><td>
             <td><?php echo $row['employee_position']?><td>
             <td><?php echo $row['employee_department']?><td>

             <td><?php echo $row['interviewer_name']?><td>
             <td><?php echo $row['interviewer_date']?><td>
             <td><?php echo $row['interviewer_signature']?><td>
             <td><?php echo $row['interviewer_position']?><td>
             <td><?php echo $row['interviewer_comment']?><td>
             <td><?php echo $row['manager_name']?><td>
             <td><?php echo $row['manager_date']?><td>
             <td><?php echo $row['manager_signature']?><td>
             <td><?php echo $row['manager_position']?><td>
             <td><?php echo $row['manager_comment']?><td>
             <td><?php echo $row['hr_name']?><td>
             <td><?php echo $row['hr_date']?><td>
             <td><?php echo $row['hr_signature']?><td>
             <td><?php echo $row['hr_position']?><td>
             <td><?php echo $row['hr_comment']?><td>
              
             <td >

<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="update_employee.php? employee_id='.$employee_id.'" >Confirm</a>';?>
</div>


</td>

<td>
<div >
<?php  echo '<a class="bt btn-danger btn-sm text-light "  data-toggle="modal" data-target="#exampleModal11"  >Delete</a> '; ?>
</div>
</td>

<td>
<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="employee_print.php? employee_id='.$employee_id.'" >Print</a>';?>
</div>

</td>



<td >

<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="interview_employee.php? employee_id='.$employee_id.'" > Interview </a>';?>
</div>


</td>

<td>
<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="document_employee.php? employee_id='.$employee_id.'" > Certificates </a>';?>
</div>
</td>

					</tr>
					<?php 
					}
				else{
					echo "<script>alert('No Data Found For This Moment.')</script>";				}
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
            <h5>Employee Information By ID</h5>
            
        <div  class="form-group form-primary">
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
    <div class="card-block table-border-style">
        <div class="table-responsive">
            
            <table class="table">
                <thead>
                    <tr>
                    <th> ID</th>
                        <th> Name</th>
                        <th>Specialization</th>
                        <th >Date Birth</th>
                        <th>Place Birth</th>
                        <th>Address Name</th>
                        <th>Address Square</th>
                        <th>Address Area</th>
                        <th>Address Box</th>
                        <th>Address Email</th>
                        <th>Address Phone</th>
                        <th>Address Telephone</th>
                        <th>Gender Type</th>
                        <th>Gender Statues </th>
                        <th>Job Befor</th>
                        <th>Licence Expire</th>
                        <th>Licence No</th>
                        <th>Last Job</th>
                        <th>refrence01 name<th>
                        <th>refrence01 phone<th>
                        <th>refrence01 Address<th>
                        <th>refrence01 position<th>
                        <th>refrence1 name<th>
                        <th>refrence1 phone<th>
                        <th>refrence1 Address<th>
                        <th>refrence1 relation<th>
                        <th>refrence0 name<th>
                        <th>refrence0 phone<th>
                        <th>refrence0 Address<th>
                        <th>refrence0 position<th>
                        <th>account name<th>
                        <th>account no<th>
                        <th>account info<th>
                        <th>working shift<th>
                        <th>working extra<th>
                        <th>applied position<th>
                        <th>Created Date <th>
                        <th>Updated Date<th>
                        <th>Updated By<th>
                        <th>Qualification<th>
                        <th>Date Qualification <th>
                        <th>Obtained From<th>
                        <th>Employee Position<th>
                        <th>Employee Department<th>

                        <th>interviewer_name<th>
                        <th>interviewer_date<th>
                        <th>interviewer_signature<th>
                        <th>interviewer_position<th>
                        <th>interviewer_comment<th>
                        <th>manager_name<th>
                        <th>manager_date<th>
                        <th>manager_signature<th>
                        <th>manager_position<th>
                        <th>manager_comment<th>
                        <th>hr_name<th>
                        <th>hr_date<th>
                        <th>hr_signature<th>
                        <th>hr_position<th>
                        <th>hr_comment<th>
                        <th colspan="3" class="text-center" >Process</th>
                        <th colspan="2" class="text-center" >Operation</th>
                            
                    </tr>
                </thead>
                <tbody>
                <?php

              if (isset($_POST['search_id'])) {
               $employee_id = $_POST['employee_id'];
          $query = "select * from employee where employee_id=$employee_id;";
          $result = mysqli_query($conn,$query);
          
            if($row = mysqli_fetch_assoc($result)){
                $employee_id=$row['employee_id'];
                
                ?>

                <tr>
                <td> <?php echo $row['employee_id']; ?></td>
              <td><?php echo $row['employee_name']; ?></td>
              <td><?php echo $row['specialization']; ?></td>
              <td><?php echo $row['date_of_birth']; ?></td>
              <td><?php echo $row['place_of_birth']; ?></td>
              <td><?php echo $row['address_name']; ?></td>
              <td><?php echo $row['address_square']; ?></td>
              <td><?php echo $row['address_area']; ?></td>
              <td><?php echo $row['address_box']; ?></td>
              <td><?php echo $row['address_email']; ?></td>
              <td><?php echo $row['address_phone']; ?></td>
              <td><?php echo $row['address_Telephone']; ?></td>
              <td><?php echo $row['gender_type']; ?></td>
              <td><?php echo $row['gender_statues']; ?></td>
              <td><?php echo $row['job_befor']; ?></td>
              <td><?php echo $row['licence_expire']; ?></td>
              <td><?php echo $row['licence_no']; ?></td>
              <td><?php echo $row['last_job_info']; ?></td>
              <td><?php echo $row['refrence01_name'];?><td>
             <td><?php echo $row['refrence01_phone'];?><td>
             <td><?php echo $row['refrence01_address'];?><td>
             <td><?php echo $row['refrence01_position'];?><td>
             <td><?php echo $row['refrence1_name'];?><td>
             <td><?php echo $row['refrence1_phone'];?><td>
             <td><?php echo $row['refrence1_address']?><td>
             <td><?php echo $row['refrence1_relation']?><td>
             <td><?php echo $row['refrence0_name']?><td>
             <td><?php echo $row['refrence0_phone']?><td>
             <td><?php echo $row['refrence0_address']?><td>
             <td><?php echo $row['refrence0_position']?><td>

             <td><?php echo $row['account_name' ]?><td>
             <td><?php echo $row['account_no' ]?><td>
             <td><?php echo $row['account_info' ]?><td>
             <td><?php echo $row['working_shift' ]?><td>
             <td><?php echo $row['working_extra' ]?><td>
             <td><?php echo $row['applied_position' ]?><td>
             <td><?php echo $row['created' ]?><td>
             <td><?php echo $row['updated' ]?><td>
             <td><?php echo $row['updated_by' ]?><td>
             <td><?php echo $row['q_obtained' ]?><td>
             <td><?php echo $row['date_obtained' ]?><td>
             <td><?php echo $row['obtained_from']?><td>
             <td><?php echo $row['employee_position']?><td>
             <td><?php echo $row['employee_department']?><td>

             <td><?php echo $row['interviewer_name']?><td>
             <td><?php echo $row['interviewer_date']?><td>
             <td><?php echo $row['interviewer_signature']?><td>
             <td><?php echo $row['interviewer_position']?><td>
             <td><?php echo $row['interviewer_comment']?><td>
             <td><?php echo $row['manager_name']?><td>
             <td><?php echo $row['manager_date']?><td>
             <td><?php echo $row['manager_signature']?><td>
             <td><?php echo $row['manager_position']?><td>
             <td><?php echo $row['manager_comment']?><td>
             <td><?php echo $row['hr_name']?><td>
             <td><?php echo $row['hr_date']?><td>
             <td><?php echo $row['hr_signature']?><td>
             <td><?php echo $row['hr_position']?><td>
             <td><?php echo $row['hr_comment']?><td>
              
             <td >

<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="update_employee.php? employee_id='.$employee_id.'" >Confirm</a>';?>
</div>


</td>

<td>
<div >
<?php  echo '<a class="bt btn-danger btn-sm text-light "  data-toggle="modal" data-target="#exampleModal11"  >Delete</a> '; ?>
</div>
</td>

<td>
<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="employee_print.php? employee_id='.$employee_id.'" >Print</a>';?>
</div>

</td>



<td >

<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="interview_employee.php? employee_id='.$employee_id.'" > Interview </a>';?>
</div>


</td>

<td>
<div > 
<?php  echo '<a class="bt btn-primary btn-sm text-light"  href="document_employee.php? employee_id='.$employee_id.'" > Certificates </a>';?>
</div>
</td>

              </tr>
          
          <?php
          
          }
          else{
            echo "<script>alert('NO Content With This is Id.')</script>";
        }
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
