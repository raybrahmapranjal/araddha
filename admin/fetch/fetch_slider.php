<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("slider","`slider_id`='$dataId'");

if ($readEnquiry) {

	
	$data['head']= $readEnquiry[0]['head'];
	$data['title']= $readEnquiry[0]['title'];
	$data['image']= $readEnquiry[0]['image'];

	
} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>