<?php 
session_start();
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
}

if(isset($_POST['submit'])){
extract($_POST);

    if (empty($_POST["name"])) {
    
        $data = [
          'cat_id'=>$cat_id,
           'cat_name'=>$cat_name,
          'subCat_name' =>$subCat_name,
          'status' =>$status,
            
        ];
       $create =$crud->Create($data,"subcategories");
            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../catalog/edit_subCat.php");</script>';
            }
         else {
            
           
       
            $_SESSION['message']= '<script>alert("error");</script>';
            echo '<script>window.location.assign("../catalog/edit_subCat.php");</script>';
        }
    }
    
}
?>