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
 

        
        $data = [
             'cat_id'=>$cat_id,
             'cat_name'=>$cat_name, 
             'subCat_id' =>$subCat_id,
             'status' =>$status,
            'plantname' =>$plantname,
            'subcategories' =>$subCat_name,
            'description' =>$description,
            'price' =>$price,
            'discount_price' =>$discount_price,

            'date_uploaded' =>$today,
            
        ];
       
            $create = $crud->Create($data,"plants");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../catalog/edit-plants.php");</script>';
            } 
             else {
            
       
            $_SESSION['message']= '<script>alert("Data Added!");</script>';
            echo '<script>window.location.assign("../catalog/edit-plants.php");</script>';
        }
    }
    else {
            $target_dir = "../images/index/";
            $uploadOk = 1;

            for ($i = 1; $i <= 3; $i++) {
                $target_file = $target_dir . md5(time()) . basename($_FILES["image{$i}"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["image{$i}"]["tmp_name"]);

                if ($check === false) {
                    $uploadOk = 0;
                    break;
                }

                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $uploadOk = 0;
                    break;
                }

                if (move_uploaded_file($_FILES["image{$i}"]["tmp_name"], $target_file)) {
                    // File uploaded successfully
                     $data["image{$i}"] = $target_file;
                } else {
                    // Error uploading file
                    $uploadOk = 0;
                    break;
                }
            }

                if ($uploadOk) {
                    $data['cat_id'] = $cat_id;
                    $data['category'] = $cat_name;
                    $data['subCat_id'] = $subCat_id;
                    $data['status'] = $status;
                    $data['plantname'] = $plantname;
                    $data['subcategories'] = $subCat_name;
                    $data['description'] = $description;
                    $data['price'] = $price;
                    $data['discount_price'] = $discount_price;
                    $data['date_uploaded'] = $today;
                    
                    $create = $crud->Create($data,"plants");
                    if($create) {
                        $_SESSION['message']= '<script>alert("Post Uploaded with Image");</script>';
                        echo "<script>window.location.assign('../catalog/edit-plants.php');</script>";
                    }
                }
}
}
?>
