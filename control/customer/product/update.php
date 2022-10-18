<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/product.php");

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$brandID = $data->brandID;
$productName = $data->productName;
$price = $data->price;
$amount = $data->amount;
$origin = $data->origin;
$image = $data->image;
$description = $data->description;

$product = new Product($brandID, $productName, $price, $amount, $origin, $image, $description);
$update = $product->Update($id);

?>