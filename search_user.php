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
            <h5>Patient Information By Date</h5>
            
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
                    <th>User ID</th>
                        <th>User Department </th>
                        <th>User Name</th>
                        <th >User password</th>
                        <th>User Email</th>
                        <th>User Created</th>
                        <th>User Updated</th>
                        <th>Created By</th>
                    </tr>
                </thead>
                <tbody>
                <?php
			if (isset($_POST['search'])){
                $user_id = $_POST['user_id'];
				include('config.php');
				$from=date('Y-m-d',strtotime($_POST['from']));
				$to=date('Y-m-d',strtotime($_POST['to']));
			
				$query="select * from `users` where user_created between '$from' and '$to'";
				$result=mysqli_query($conn,$query);
				if($row = mysqli_fetch_assoc($result)){
				
					?>
					<tr>
			
                    <td> <?php echo $row['user_id']; ?></td>
              <td><?php echo $row['user_department']; ?></td>
              <td><?php echo $row['user_name']; ?></td>
              <td><?php echo $row['user_password']; ?></td>
              <td><?php echo $row['user_email']; ?></td>
              <td><?php echo $row['user_created']; ?></td>
              <td><?php echo $row['user_updated']; ?></td>
              <td >
                                    
        <div > 
        <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="select_update_order01.php? order_id='.$order_id.'" >Confirm</a>';?>
        </div>
        

    </td>
    <td>
    <div >
    <?php  echo '<a class="bt btn-danger btn-sm text-light "  data-toggle="modal" data-target="#exampleModal11"  >Delete</a> '; ?>
        </div>
    </td>
    <td>
    <div > 
    <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="order_print01.php? order_id='.$order_id.'" >Print</a>';?>
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
            <h5>Doctors Information By ID</h5>
            
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
                    <th>User ID</th>
                        <th>User Department </th>
                        <th>User Name</th>
                        <th >User password</th>
                        <th>User Email</th>
                        <th>User Created</th>
                        <th>User Updated</th>
                        <th>Created By</th>
                    
                        <th colspan="3" class="text-center" >Operation</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php

              if (isset($_POST['search_id'])) {
               $user_id = $_POST['user_id'];
          $query = "select * from order1 where user_id=$user_id;";
          $result = mysqli_query($conn,$query);
          
            if($row = mysqli_fetch_assoc($result)){
                $order_id=$row['order_id'];
                
                ?>

                <tr>
     
                <td> <?php echo $row['user_id']; ?></td>
              <td><?php echo $row['user_department']; ?></td>
              <td><?php echo $row['user_name']; ?></td>
              <td><?php echo $row['user_password']; ?></td>
              <td><?php echo $row['user_email']; ?></td>
              <td><?php echo $row['user_created']; ?></td>
              <td><?php echo $row['user_updated']; ?></td>
              <td >
                                    
        <div > 
        <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="select_update_order01.php? order_id='.$user_id.'" >Confirm</a>';?>
        </div>
        

    </td>
    <td>
    <div >
    <?php  echo '<a class="bt btn-danger btn-sm text-light "  data-toggle="modal" data-target="#exampleModal11"  >Delete</a> '; ?>
        </div>
    </td>
    <td>
    <div > 
    <?php  echo '<a class="bt btn-primary btn-sm text-light"  href="order_print01.php? order_id='.$user_id.'" >Print</a>';?>
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
