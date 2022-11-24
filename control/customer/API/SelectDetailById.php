<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/dt_order.php");

$data = json_decode(file_get_contents("php://input"));
$orderID = $data->orderID;

$dt_order = new Dt_order("", "", "", "");
$read = $dt_order->SelectById($orderID);

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
