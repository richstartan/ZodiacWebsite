<?php
   include('dbconfig/config.php');

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select zodiacusername from zodiacusers where zodiacusername = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['zodiacusername'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:Login Page.php");
      die();
   }

?>