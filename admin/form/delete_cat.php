<?php 
session_start();
error_reporting(E_ALL);

if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
   exit();
} else {
   include '../../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   // $sessionName =  $_SESSION['this_user_name'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];

   $ID = $_GET['cat_id'];
  
   if ($ID>0) {
       $crud->Delete("categories","`cat_id`='$ID'");
        echo '<script>alert("File Has Been Removed.");</script>';
       echo '<script>window.location.assign("../catalog/view_cat.php");</script>';
   }
   else{
        echo '<script>alert("File Does Not Exist");</script>';

        echo '<script>window.location.assign("../catalog/view_cat.php");</script>';
   }
}

?>