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

    if (empty($_FILES["image1"]["name"]) || empty($_FILES["image2"]["name"]) || empty($_FILES["image3"]["name"])) {
    // At least one of the images is empty
    // Handle the error here
 {

        
        $data = [
             'cat_id'=>$cat_id, 
             'subCat_id' =>$subCat_id,
             'status' =>$status,
            'plantname' =>$plantname,
            'description' =>$description,
            'price' =>$price,
            'discount_price' =>$discount_price,

            'date_uploaded' =>$today,
            
        ];
       
            $create = $crud->Create($data,"plants");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../catalog/add-plants.php");</script>';
            }
         else {
            
            $create =$crud->Create($data,"plants");
       
            $_SESSION['message']= '<script>alert("Data Added!");</script>';
            echo '<script>window.location.assign("../catalog/add-plants.php");</script>';
        }

    } else {
        $target_dir = "../images/index/";
            for ($i = 1; $i <= 3; $i++) {
                $target_file = $target_dir . md5(time()) . basename($_FILES["image{$i}"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image{$i}"]["tmp_name"]);

        
        if($check1 !== false && $check2 !== false && $check3 !== false)  {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 
            // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
         
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo '<script>alert("Sorry, your file was not uploaded.");</script>';
           echo '<script>window.location.assign("../catalog/add-plants.php");</script>';
        // if everything is ok, try to upload file
        } else {

            // if (move_uploaded_file($_FILES["image1"]["image2"]["imag3"]["tmp_name"], "../".$target_file)) 
             if (move_uploaded_file($_FILES["image{$i}"]["tmp_name"],"../" .$target_file)){

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image1' => $target_file,
                    'image2' => $target_file,
                    'image3' => $target_file,
                     'cat_id'=>$cat_id,

          'subCat_name' =>$subCat_name,
                    'status' =>$status,
                    'plantname' =>$plantname,
                    'description' =>$description,
                    'price' =>$price,
                    'discount_price' =>$discount_price,

                    'date_uploaded' =>$today,
                    
                    
                ];
                
                    $create = $crud->Create($data,"plants");

                    if($create) {
                        $_SESSION['message']= '<script>alert("Image Uploaded!");</script>';
                        echo '<script>window.location.assign("../catalog/add-plants.php");</script>';
                    }
                 else {
                    
                    $update =$crud->Create($data,"plants");
               
                    $_SESSION['message']= '<script>alert("Post Uploaded with Image");</script>';
                    echo '<script>window.location.assign("../catalog/add-plants.php");</script>';
                }

            } else {
                $_SESSION['message']= "Sorry, there was an error uploading your file.";
            }
        }
        }
    }
}
?>