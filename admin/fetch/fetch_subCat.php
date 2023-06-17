<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("subcategories","`subCat_id`='$dataId'");

if ($readEnquiry) {

	
	$data['subCat_name']= $readEnquiry[0]['subCat_name'];
	$data['status']= $readEnquiry[0]['status'];

	
} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>