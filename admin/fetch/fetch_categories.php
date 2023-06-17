<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("categories","`cat_id`='$dataId'");

if ($readEnquiry) {

	$data['cat_id']= $readEnquiry[0]['cat_id'];
	$data['cat_name']= $readEnquiry[0]['cat_name'];
	$data['status']= $readEnquiry[0]['status'];

	
} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>