<?php 

include 'config.php';
include 'session.php';
error_reporting(0);
session_start();

if(isset($_SESSION['user_name'])){

  if(time()-$_SESSION['last_login_timestamp']>60)){

    header('location:log-out.php');
  }
  else{

    $_SESSION['last_login_timestamp']=time();
        header('location:welcome.php')
  }

}

    
    
    ?>
    