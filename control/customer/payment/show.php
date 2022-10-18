<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/payment.php");

$paymentID = isset($_GET['id']) ? $_GET['id'] :die();

$payment = new Payment("","","","","","");
$read = $payment->SelectById($paymentID);

$num = $read->rowCount();
if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
    extract($row);

    $item = array(
        'id' => $id,
        'userID' => $userID,
        'orderID' => $orderID,
        'username' => $username,
        'time' => $time,
        'paymentBy' => $paymentBy,
        'is_success' => $is_success
    );
        
    print_r(json_encode($item));
}

?>