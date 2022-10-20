<?php 

include 'config.php';
include 'session.php';

session_start();

error_reporting(0);




$product_id=$_GET['product_id'];

$sql="select * from `store` where product_id=$product_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


$product_quantity=$_row['product_quantity'];
$product_type=$_row['product_type'];
$created=$_row['created'];
$discription=$_row['discription'];
$received_by=$_row['received_by'];
$delevred_by=$_row['delevred_by'];
$price=$_row['price'];




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
                                                        <h5 class="">New Insertion Items Form</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form enctype="multipart/form-data" method="post"  action='function.php'>
                                                          
                                                     <br><br>
                                             
                                                            <div class="form-group row">

                                                            <label class="col-sm-2 col-form-label">Product Name </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="product_name" class="form-control" placeholder="Enter name " Required  value=<?php echo$row['product_name'] ?> >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Product ID </label>
                                                                <div class="col-sm-2">
                                                                    <input type="text" name="product_id" class="form-control" placeholder="Enter name " Required  value=<?php echo$row['product_id'] ?> >
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Product Quantity  </label>
                                                                <div class="col-sm-2">
                                                                <input type="text" name="product_quantity" class="form-control" placeholder="Enter quantity " Required value=<?php echo$row['product_quantity'] ?> >
                                                                </div>
                                                                <br><br><br>
                                                            <label class="col-sm-2 col-form-label">Product Type</label>
                                                                <div class="col-sm-4">
                                                                    <select  required name="product_type" class="form-control">
                                                                        <option value=<?php echo$row['product_type'] ?>><?php echo$row['product_type'] ?></option>
                                                                        <option value="Aire Freshener">Aire Freshener</option>
                                                                        <option value="Soup Powder">Soup Powder</option>
                                                                        <option value="Inserctricide">Inserctricide </option>
                                                                        <option value="Clorox">Clorox </option>
                                                                        <option value="furniture Polisher">furniture Polisher </option>
                                                                        <option value="Big Trash Bag">Big Trash Bag </option>
                                                                        <option value="Small Trash Bag">Small Trash Bag </option>
                                                                        <option value="Hand soup liquid">Hand soup liquid </option>
                                                                        <option value="Mask">Mask </option>
                                                                        <option value="Flash">Flash </option>

                                                                        <option value="Window/Table Cloth">Window/Table Cloth</option>
                                                                        <option value="Window/Table Cloth">Window/Blade</option>
                                                                        <option value="Stain Less Steel Sprayer">Stain Less Steel Sprayer </option>
                                                                        <option value="Detol">Detol </option>
                                                                        <option value="Glass Cleaner">Glass Cleaner </option>
                                                                        <option value="Floor Soup">Floor Soup </option>
                                                                        <option value="Big Tissue">Big Tissue </option>
                                                                        <option value="Tissue">Tissue </option>
                                                                        <option value="Roll Tissue">Roll Tissue</option>

                                                                        <option value="Mop Baskek">Mop Baskek</option>
                                                                        <option value="Floor Blade">Floor Blade</option>
                                                                        <option value="Sweeper">Sweeper</option>
                                                                        <option value="Toilet Brush">Toilet Brush</option>
                                                                        <option value="Zeafa">Zeafa</option>
                                                                        <option value="shovel">shovel</option>
                                                              
                                                                    </select>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label">Date</label>
                                                                <div class="col-sm-4">
                                                                <input type="date" name="created" class="form-control" placeholder="Enter Date " Required value=<?php echo$row['created'] ?>>
                                                                </div>
                                                                
                                                        
                                                                <br><br><br>
                                                         
                                                      
                                                        </div>
                                                        <br>
                                                                                                               
                                                        <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> Discription </label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="4" cols="6" Required class="form-control"name="discription" placeholder="your discription"><?php echo$row['discription'] ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                    
                                                 <div class="col-md-4"></div><br>
                                                 </div>
                                                  
                                                 <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Received By </label>
                                                   <div class="col-sm-4">
                                                       <input type="text" name="received_by" class="form-control"  placeholder="Enter name " Required  value=<?php echo$row['received_by'] ?>>
                                                   </div>
                                                   <label class="col-sm-2 col-form-label">Delivered BY </label>
                                                   <div class="col-sm-4">
                                                   <input type="text" name="delevred_by" class="form-control"  placeholder="Enter name " Required value=<?php echo$row['delevred_by'] ?>>
                                                   </div>

                                                   
                                                   </div>
                                                   <br><br><br>
                                                   <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Total Price </label>
                                                   <div class="col-sm-10">
                                                   <input type="text" name="price" class="form-control"  placeholder="Enter price " Required value=<?php echo$row['price'] ?>>
                                                   </div>
                                                   </div>
                                                   <br>
                             
                                                      <div class="col-sm-12">
                                                            <hr>
                                                          <div class="form-check form-switch text-center">
                                                          <label class="form-check-label " for="flexSwitchCheckDisabled"> <input type="checkbox" Required  name="department_confirm" value=<?php echo $user_department?>>  Confirmed By <?php echo $user_department?> Department </label>
                                                           <br>
                                                            <label class="form-check-label " for="flexSwitchCheckDisabled"><input type="checkbox" Required  name="user_confirm" value=<?php echo $user_id?>>  Confirmed By  : <?php echo $user_name?> ID: <?php echo $user_id?> </label>
                                                            <hr> 
                                                         </div><br>

                                                         

                                                         <h4 class=" col-sm-12 sub-title text-center">  Grosvenor Services Ltd, Khartoum III, Street 51,  Building. 24 - Tel: +249 (0)183 476779 
                                                            Web-Site www.grosvenor-sudan.com<br>	E-mail address: info@grosvenor-sudan.com </h4>
                                                       

                                                         </div>          
   

                                                                <div class="col-sm-12">
                                                                </div><br>
                                                                <a href=""><input type="submit"  name="product_update" class="btn btn-primary btn-block waves-effect text-center m-b-20"> </a>

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
