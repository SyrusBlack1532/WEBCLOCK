<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/category.php");

$data = json_decode(file_get_contents("php://input"));

$nameBrand = $data->nameBrand;

$category = new Category($nameBrand);
$create = $category->Add();

?>