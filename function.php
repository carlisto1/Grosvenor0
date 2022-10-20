<?php



include 'config.php';
include 'session.php';
error_reporting(0);
session_start();





if (isset($_POST['interview'])) {


    $employee_id=$_POST['employee_id'];

    $interviewer_name=$_POST['interviewer_name'];
    $interviewer_date=$_POST['interviewer_date'];
    $interviewer_signature=$_POST['interviewer_signature'];
    $interviewer_position=$_POST['interviewer_position'];
    $interviewer_comment=$_POST['interviewer_comment'];

    // $manager_name=$_POST['manager_name'];
    // $manager_date=$_POST['manager_date'];
    // $manager_signature=$_POST['manager_signature'];
    // $manager_position=$_POST['manager_position'];
    // $manager_comment=$_POST['manager_comment'];
    
    $hr_name=$_POST['hr_name'];
    $hr_date=$_POST['hr_date'];
    $hr_signature=$_POST['hr_signature'];
    $hr_position=$_POST['hr_position'];
    $hr_comment=$_POST['hr_comment'];
    
       


    $sql="update  `employee` set  
    
    interviewer_name='$interviewer_name',
    interviewer_date='$interviewer_date',
    interviewer_signature='$interviewer_signature',
    interviewer_position='$interviewer_position',
    interviewer_comment='$interviewer_comment',
    
    
    
    manager_name='$manager_name',
    manager_date='$manager_date',
    manager_signature='$manager_signature',
    manager_position='$manager_position',
    manager_comment='$manager_comment',
    
    

    hr_name='$hr_name',
    hr_date='$hr_date',
    hr_signature='$hr_signature',
    hr_position='$hr_position',
    hr_commen='$hr_commen'


    where employee_id=$employee_id";


       
       
                   $result = mysqli_query($conn, $sql);
           
                   if ($result) {
                      
                       echo "<script>alert('application form submited successfully.')</script>";
                    //    header("Location: interview_employee.php");
                    
       
                    } else {
                    //    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);

                  


                   }
                   
       
           
       }
    
    

       if(isset($_POST['update_order']  )){

        $order_id = $_POST['order_id'];
        $order_type=$_POST['order_type'];
        $order_by =$_POST['order_by'];
        $order_info =$_POST['order_info'];
        $statuse =$_POST['statuse'];
    
        // $created_user_name=$row_['created_user_name'];
        // $created_user_name=$row_['created_user_id'];
        // // $created_user_name=$row_['created_user_department'];
        
        // echo print_r($_POST,true);
    
    
    
        // $created_user_name = $_POST['created_user_name'];
        // $created_user_id = $_POST['created_user_id'];
    //    $order_comment = $_POST['order_comment'];
    
    
        $user_location = $_POST['user_location'];
    
    
         $operation_confirm = $_POST['forword_Status'];
         $reception_confirm = $_POST['forword_Status'];
         $manager_confirm = $_POST['forword_Status'];
         $hr_confirm  = $_POST['forword_Status '];
    
         $depatment_comment = $_POST['depatment_comment'];
        
    
        $department_signature = $_POST['department_signature'];
        $user_signature = $_POST['user_signature'];

        $forword_Status = $_POST['forword_Status'];
        $statuse = $_POST['statuse'];


    
    
    
    
    
        switch ($_SESSION['user_department']) {
            case "Hr":
                $sql="update  `order1` set   order_by='$order_by',order_info='$order_info',order_type='$order_type',order_by='$order_by',hr_confirm='$hr_confirm',department_signature='$department_signature',user_signature='$user_signature' ,hr_comment='$depatment_comment'
                where order_id=$order_id";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                     
                        header("Location: update_order.php");
                
                        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                      
                
                    }
                    else{
                        // echo "<script>alert('Woops! Something Wrong Went.')</script>";
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                
              break;
            case "Operation":
                $sql="update  `order1` set   order_by='$order_by',order_info='$order_info',order_type='$order_type',order_by='$order_by',operation_confirm='$operation_confirm',department_signature='$department_signature',user_signature='$user_signature',operation_comment='$depatment_comment'
    where order_id=$order_id";
        $result=mysqli_query($conn,$sql);
        if($result){
         
            header("Location: orders.php");
    
    
            // echo "Error: " . $sql . ":-" . mysqli_error($conn);
          
    
        }
        else{
            // echo "<script>alert('Woops! Something Wrong Went.')</script>";
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
    
              break;
            case "Management":
                $sql="update  `order1` set   order_by='$order_by',order_info='$order_info',order_type='$order_type',order_by='$order_by',manager_confirm='$manager_confirm',department_signature='$department_signature',user_signature='$user_signature',management_comment='$depatment_comment',statuse='$statuse'
                where order_id=$order_id";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                     
                        echo "<script>alert('Confirmed successfully.')</script>";
                
                        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                      
                
                    }
                    else{
                        // echo "<script>alert('Woops! Something Wrong Went.')</script>";
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                
              break;
              case "Reception":
                $sql="update  `order1` set   order_by='$order_by',order_info='$order_info',order_type='$order_type',order_by='$order_by',reception_confirm='$reception_confirm',department_signature='$department_signature',user_signature='$user_signature',reception_comment='$depatment_comment'
                where order_id=$order_id";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                     
                        echo "<script>alert('Confirmed successfully.')</script>";
                
                        // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                      
                
                    }
                    else{
                        // echo "<script>alert('Woops! Something Wrong Went.')</script>";
                        echo "Error: " . $sql . ":-" . mysqli_error($conn);
                    }
                
                 break;
                 case "Supervisor":
                  
                         
                            echo "<script>alert('you have no permission .')</script>";
                    
                    
                    
                     break;
                     case "IT":
                        echo "<script>alert('you have no permission .')</script>";
                       
                        
                         break;
                 case "Accounting":
                    echo "<script>alert('you have no permission .')</script>";
                   
                    
            default:
        echo "<script>alert('Woops! you have no permission to access.')</script>";
    }
    
    
    
    
    }









if (isset($_POST['update_employee'])) {


    $employee_id = $_POST ['employee_id'];
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
    $user_signature= $_POST ['user_signature'];        
    $employee_department= $_POST ['employee_department'];        
    $employee_position= $_POST ['employee_position'];   
    $employee_hire=$_POST['employee_hire'];
    $employee_statues=$_POST['employee_statues'];     
    $employee_location=$_POST['employee_location'];     
       
   

    $sql="update  `employee` set  
    refrence01_name='$refrence01_name',
    refrence01_phone='$refrence01_phone',
    refrence01_address='$refrence01_address',
    refrence01_position='$refrence01_position',
    refrence1_name='$refrence1_name',
    refrence1_phone='$refrence1_phone',
    refrence1_address='$refrence1_address',
    refrence1_relation='$refrence1_relation',
    refrence0_name='$refrence0_name',
    refrence0_phone='$refrence0_phone',
    refrence0_address='$refrence0_address',
    refrence0_position='$refrence0_position',
    date_from0='$date_from0',
    date_to0='$date_to0',
    job_last_payment0='$job_last_payment0',
    reason_leaving0='$reason_leaving0',
    account_name='$account_name',
    account_no='$account_no',
    account_info='$account_info',
    working_shift='$working_shift',
    working_extra='$working_extra',
    applied_position='$applied_position',
    employee_name='$employee_name',
    specialization='$specialization',
    date_of_birth='$date_of_birth',
    place_of_birth='$place_of_birth',
    address_name='$address_name',
    address_square='$address_square',
    address_area='$address_area',
    address_box='$address_box',
    address_email='$address_email',
    address_phone='$address_phone',
    address_Telephone='$address_Telephone',
    gender_type='$gender_type',
    gender_statues='$gender_statues',
    q_obtained='$q_obtained',
    date_obtained='$date_obtained',
    obtained_from='$obtained_from',
    job_befor='$job_befor',
    licence_expire='$licence_expire',
    licence_no='$licence_no',
    last_job_info='$last_job_info',
    updated_by='$user_signature',

    employee_department='$employee_department',
    employee_position='$employee_position',
    employee_hire='$employee_hire',
    employee_statues='$employee_statues',
    employee_location='$employee_location'


    where employee_id=$employee_id";

   
   
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                  
                   echo "<script>alert('application form updated successfully.')</script>";
                   header("Location: employees.php");
                
   
               } else {
      
                  echo "Error: " . $sql . ":-" . mysqli_error($conn);
                //       echo "<script>alert('System Error.')</script>";
                  
               }
            }







            
            
            
            

if (isset($_POST['new_motor'])) {



    $employee_id = $_POST ['employee_id'];
    $employee_name = $_POST ['employee_name'];
       
    $plate_number=$_POST['plate_number'];
    $other_infroamtion=$_POST['other_infroamtion'];
    $driver_lines=$_POST['driver_lines'];   
    $rental_date=$_POST['rental_date'];   
    $chassis_number=$_POST['chassis_number'];   
    $statuse=$_POST['statuse'];   


    $last_oil=$_POST['last_oil'];
    $next_oil=$_POST['next_oil'];
    $last_petrol=$_POST['last_petrol'];
    $next_petrol=$_POST['next_petrol'];
    $shape=$_POST['shape'];
    $helmet=$_POST['helmet'];
    $maintenace_need=$_POST['maintenace_need'];
    $maintenance_type=$_POST['maintenance_type'];
    $maintenance_cost=$_POST['maintenance_cost'];
    $comment=$_POST['comment'];
   
    
//echo print_r($_POST,true);

    $sql = "INSERT INTO transport (

        plate_number,
        other_infroamtion,
        driver_lines,
        employee_id,
        employee_name,
        rental_date,
        chassis_number,
        statuse,
        last_oil,
        next_oil,
        last_petrol,
        next_petrol,
        shape,
        helmet,
        maintenace_need,
        maintenance_type,
        maintenance_cost,
        comment

    
        
        )
    VALUES (
        
        '$plate_number',
        '$other_infroamtion',
        '$driver_lines',
        '$employee_id',
        '$employee_name',
        '$rental_date',
        '$chassis_number',
        '$statuse',
        '$last_oil',
        '$next_oil',
        '$last_petrol',
        '$next_petrol',
        '$shape',
        '$helmet',
        '$maintenace_need',
        '$maintenance_type',
        '$maintenance_cost',
        '$comment'

        )";



   
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                  
                  // echo "<script>alert('application form updated successfully.')</script>";
                   echo "Error: " . $sql . ":-" . mysqli_error($conn);

                  //header("Location: massenger.php");
                
   
               } else {
      
                  echo "Error: " . $sql . ":-" . mysqli_error($conn);
                //       echo "<script>alert('System Error.')</script>";
                  
               }
            }





if (isset($_POST['document'])) {


    $employee_id = $_POST ['employee_id'];

    $employee_cv=$_POST['employee_cv'];
    $personal_id=$_POST['personal_id'];
    $national_id=$_POST['national_id'];
    $residance_certificate=$_POST['residance_certificate'];
    $fingerprint=$_POST['fingerprint'];
    $health_card=$_POST['health_card'];
    $signed_contract=$_POST['signed_contract'];
    $policy=$_POST['policy'];
    $job_discription=$_POST['job_discription'];
    $document_review_by=$_POST['document_review_by'];

    // echo print_r($_POST,true);

    $sql="update  `employee` set  


    employee_cv='$employee_cv',
    personal_id='$personal_id',
    national_id='$national_id',
    residance_certificate='$residance_certificate',
    fingerprint='$fingerprint',
    health_card='$health_card',
    signed_contract='$signed_contract',
    policy='$policy',
    job_discription='$job_discription',
    document_review_by='$document_review_by'


    where employee_id=$employee_id";

   
   
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                  
                   echo "<script>alert('application form updated successfully.')</script>";
                   header("Location: employees.php");
                  
                
   
               } else {
      
                //   echo "Error: " . $sql . ":-" . mysqli_error($conn);
                 echo "<script>alert('System Error.')</script>";
                  
               }
               
            }

            


           
            
if (isset($_POST['product_update'])) {


    $product_id = $_POST ['product_id'];

    $product_name=$_POST['product_name'];
    $product_quantity=$_POST['product_quantity'];
    $product_type=$_POST['product_type'];
    $created=$_POST['created'];
    $discription=$_POST['discription'];
    $received_by=$_POST['received_by'];
    $delevred_by=$_POST['delevred_by'];
    $price=$_POST['price'];
    $department_confirm=$_POST['department_confirm'];
    $user_confirm=$_POST['user_confirm'];
    
    
    // echo print_r($_POST,true);

    $sql="update  `store` set  

product_name='$product_name',
product_quantity='$product_quantity',
product_type='$product_type',
created='$created',
discription='$discription',
received_by='$received_by',
delevred_by='$delevred_by',
price='$price',
department_confirm='$department_confirm',
user_confirm='$user_confirm'

where product_id=$product_id";

   
   
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                  
                   echo "<script>alert('application form updated successfully.')</script>";
                   header("Location: store.php");
                  
                
   
               } else {
      
                  echo "Error: " . $sql . ":-" . mysqli_error($conn);
                //  echo "<script>alert('System Error.')</script>";
                  
               }
               
            }

            
if (isset($_POST['pull1'])) {


    $product_id = $_POST ['product_id'];

    $pull_by=$_POST['pull_by'];
    $pull_date=$_POST['pull_date'];
    $pull_quantity=$_POST['pull_quantity'];
    $user_name=$_POST['user_name'];
    
    
    // echo print_r($_POST,true);

    $sql="update  `store` set  

pull_by='$pull_by',
pull_date='$pull_date',
pull_quantity='$pull_quantity',
pull_confirmed_by='$user_name'

where product_id=$product_id";



   
   
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                  
                   echo "<script>alert('application form updated successfully.')</script>";
                   header("Location: store.php");
                  
                
   
               } else {
      
                 echo "Error: " . $sql . ":-" . mysqli_error($conn);
                //echo "<script>alert('System Error.')</script>";
                  
               }
               
            }

   
   

   


   
if (isset($_POST['attendance_update'])) {


    $id = $_POST ['id'];
    $employee_id=$_POST['employee_id'];
    $employee_name=$_POST['employee_name'];
    $in_time=$_POST['in_time'];
    $out_time=$_POST['out_time'];
    $date1=$_POST['date1'];
    $user_name=$_POST['user_name'];   
   

    $sql="update  `attendance1` set  
    in_time='$in_time',
    out_time='$out_time',
    date1='$date1',
    confirmed_by='$user_name'
    where id=$id";


   
               $result = mysqli_query($conn, $sql);
       
               if ($result) {
                  
                   echo "<script>alert('application form updated successfully.')</script>";
                   header("Location: attendance.php");
                
   
               } else {
      
                 //  echo "Error: " . $sql . ":-" . mysqli_error($conn);
                     //  echo "<script>alert('System Error.')</script>";
                  
               }
               
   
       
   }
   


   if (isset($_POST['pull_update'])) {


    
    $pull_id=$_POST['pull_id'];
    $pull_by=$_POST['pull_by'];
    $pull_date=$_POST['pull_date'];
    $pull_quantity=$_POST['pull_quantity'];
    $pull_confirmed_by=$_POST['pull_confirmed_by'];
    $product_id=$_POST['product_id'];
    $product_quantity=$_POST['product_quantity']; 
    $pull_comment=$_POST['pull_comment']; 
    $product_id=$_POST['product_id']; 
    $product_name=$_POST['product_name']; 
    $product_type=$_POST['product_type']; 
    
    $product_quantity_last=$product_quantity-$pull_quantity;
  
    $sql="update  `pull` set  

pull_by='$pull_by',
pull_date='$pull_date',
pull_quantity='$pull_quantity',
pull_comment='$pull_comment',

product_id='$product_id',
product_name='$product_name',
product_type='$product_type'



   where pull_id=$pull_id";


   $sql="update  `store` set  

   product_quantity='$product_quantity_last'
   
   
   
      where product_id=$product_id";
			$result = mysqli_query($conn, $sql);
    
			if ($result) {
                // echo "Error: " . $sql . ":-" . mysqli_error($conn);
                echo "<script>alert('Wow! Process  Completed Successfully.')</script>";
                //header("Location: update_pull.php");

			} else {
                // echo "<script>alert('Woops! Something Wrong Went.')</script>";
                echo "Error: " . $sql . ":-" . mysqli_error($conn);

            }

        }
    


   

?>
