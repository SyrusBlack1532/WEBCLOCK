<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/dt_order.php");

$dt_orderID = isset($_GET['id']) ? $_GET['id'] :die();

$dt_order = new Dt_order("","","","");
$read = $dt_order->SelectById($dt_orderID);

$num = $read->rowCount();
if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
    extract($row);

    $item = array(
        'orderID' => $orderID,
        'productID' => $productID,
        'quantity' => $quantity,
        'price' => $price
    );
        
    print_r(json_encode($item));
}

?>