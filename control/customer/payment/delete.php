<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/payment.php");

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;

$payment = new Payment("","","","","","");
$delete = $payment->Delete($id);

?>