<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/order.php");

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$userID = $data->userID;
$username = $data->username;
$date = $data->date;
$totalQuantity = $data->totalQuantity;
$totalPrice = $data->totalPrice;


$order = new Order($userID, $username, $date, $totalQuantity, $totalPrice);
$update = $order->Update($id);

?>