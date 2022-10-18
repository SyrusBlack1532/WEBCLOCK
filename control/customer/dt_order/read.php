<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/dt_order.php");

$dt_order = new Dt_order("","","","");
$read = $dt_order->SelectAll();
//$read = dt_order::SelectAll(); cach dung cho ham static

$num = $read->rowCount();

if($num > 0){
    
    $list['dt_order'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $item = array(
            
            'orderID' => $orderID,
            'productID' => $productID,
            'quantity' => $quantity,
            'price' => $price

        );
        array_push($list['dt_order'], $item);
    }

    echo json_encode($list);
}
?>