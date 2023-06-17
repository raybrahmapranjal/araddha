<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("plants","`plant_id`='$dataId'");

if ($readEnquiry) {
    $data['plantname']= $readEnquiry[0]['plantname'];
    $data['category']= $readEnquiry[0]['category'];
	$data['description']= $readEnquiry[0]['description'];
	$data['image']= $readEnquiry[0]['image1'];
	$data['image2']= $readEnquiry[0]['image2'];
	$data['image3']= $readEnquiry[0]['image3'];
	$data['price']= $readEnquiry[0]['price'];
	$data['discount_price']= $readEnquiry[0]['discount_price'];
	$data['status']= $readEnquiry[0]['status'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

	
} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>