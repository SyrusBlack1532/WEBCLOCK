<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/payment.php");

$payment = new Payment("","","","","","");
$read = $payment->SelectAll();
//$read = payment::SelectAll(); cach dung cho ham static

$num = $read->rowCount();

if($num > 0){
    
    $list['payment'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
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
        array_push($list['payment'], $item);
    }

    echo json_encode($list);
}
?>