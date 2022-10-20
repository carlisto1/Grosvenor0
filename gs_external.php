<?php 

include 'config.php';
include 'session.php';
session_start();

error_reporting(0);


if (isset($_POST['order_submit'])) {


 
    $phone=$_POST['phone'];
    $order_info = $_POST['order_info'];
    $order_by = $_POST['order_by'];
    $order_type = $_POST['order_type'];
    $user_location = $_POST['user_location'];
   



    


    


			$sql = "INSERT INTO order1 (
                
                phone,
                order_info,
                order_by,
                order_type,
                user_location             
                )
                    VALUES (
                        
                        '$phone',
                        '$order_info',
                        '$order_by',
                        '$order_type',
                        '$user_location'                         
                        )";
                    


                    if($conn->query($sql)==TRUE){

                        $last_id=$conn->insert_id;
                       //echo$last_id;
                        echo "<script>alert( 'Your Track ID is $last_id Use This ID To Track Your Order')</script> ";

                    }
  
  

                  else {
                      echo "<script>alert('Woops! Something Wrong Went.')</script>";
                       //echo "Error: " . $sql . ":-" . mysqli_error($conn);
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

        
        
        <div class="row ">
       
        <div class="col-md-3">
        <div class="dropdown-info dropdown open">
                    <button class="btn btn-light dropdown-toggle waves-effect waves-light " type="button" id="dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Language Setting</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item waves-light waves-effect" href="gs_external.php">English</a>
                        <a class="dropdown-item waves-light waves-effect" href="gs_externala.php"> Arabic</a>
                    </div>
                </div>
                </div>
           
            <div class="col-md-3">
            <h6 class="text-light">Grosvenor services Complaint<br> and Suggestion System</h6>

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
          
            
            <div class="col-md-3"> 
           <center> <img  src="assets/images/logo.png"  alt="company logo"><center>
            
                 </div>
            </div><br><br><br><br>
            <div class="row"><br><br><br><br>

                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="">Complaint and Suggestion System for External Use</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form enctype="multipart/form-data" method="post" >
                                                          
                                                     <br><br>
                                             
                                                            <div class="form-group row " >

                                                            <label class="col-sm-2 col-form-label"> Name </label>
                                                                <div class="col-sm-4">
                                                                <input type="text" name='order_by'  id="n5" class="form-control" value="<?php echo $row2['team_work'] ?>">

                                                          
                                                        
                                                  
                                                                                                       
                                                            </div>
                                                                <label class="col-sm-2 col-form-label">Phone  </label>
                                                                <div class="col-sm-4">
                                                                <input type="number" name='phone'  id="n5" class="form-control" value="<?php echo $row2['team_work'] ?>">
                                                             
                                                                 </div>
                                                                <br><br><br>
                                                            <label class="col-sm-2 col-form-label">Issue Type</label>
                                                                <div class="col-sm-4">
                                                                <select  required name="order_type" class="form-control">
                                                                        <option value="Request general order">Complaint</option>
                                                                        <option value="vacation for illness">segistion </option>
                                                               
                                                              
                                                                    </select>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Location </label>
                                                                <div class="col-sm-4">
                                                                <input type="text" name='user_location'  id="n5" class="form-control" value="<?php echo $row2['team_work'] ?>">

                                                                </div>
                                                        
                                                                <br><br><br>
                                                         
                                                             
                                                               
                                                                      
                                                        </div>
                                                        <br>
                                                                                                               
                                                        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> your Complaint  gos here  </label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="18" cols="10" Required class="form-control"name="order_info" placeholder="your order"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                    
                                                 <div class="col-md-4"></div><br>
                                                 </div>


                             
                                                      <div class="col-sm-12">
                                                         

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
