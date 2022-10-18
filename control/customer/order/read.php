<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/order.php");

$order = new Order("","","","","");
$read = $order->SelectAll();
//$read = order::SelectAll(); cach dung cho ham static

$num = $read->rowCount();

if($num > 0){
    
    $list['order'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        
        $item = array(
            'id' => $id,
            'userID' => $userID,
            'username' => $username,
            'date' => $date,
            'totalQuantity' => $totalQuantity,
            'totalPrice' => $totalPrice

        );
        array_push($list['order'], $item);
    }

    echo json_encode($list);
}
?>