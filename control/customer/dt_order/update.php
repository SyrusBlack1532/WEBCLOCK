<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/dt_order.php");

$data = json_decode(file_get_contents("php://input"));

$orderID = $data->orderID;
$productID = $data->productID;
$quantity = $data->quantity;
$price = $data->price;


$dt_order = new Dt_order($orderID, $productID, $quantity, $price);
$update = $dt_order->Update($orderID, $productID);

?>