<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/payment.php");


$data = json_decode(file_get_contents("php://input"));

$userID = $data->userID;
$orderID = $data->orderID;
$username = $data->username;
$time = $data->time;
$paymentBy = $data->paymentBy;
$is_success = $data->is_success;

$payment = new Payment($userID, $orderID, $username, $time, $paymentBy, $is_success);
$create = $payment->Add();

?>