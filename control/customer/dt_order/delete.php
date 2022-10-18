<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/dt_order.php");

$data = json_decode(file_get_contents("php://input"));

$orderID = $data->orderID;

$dt_order = new dt_order("","","","");
$delete = $dt_order->Delete($orderID);

?>