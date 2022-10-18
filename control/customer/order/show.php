<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/order.php");

$orderID = isset($_GET['id']) ? $_GET['id'] :die();

$order = new Order("","","","","");
$read = $order->SelectById($orderID);

$num = $read->rowCount();
if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
    extract($row);

    $item = array(
        'id' => $id,
        'userID' => $userID,
        'username' => $username,
        'date' => $date,
        'totalQuantity' => $totalQuantity,
        'totalPrice' => $totalPrice
    );
        
    print_r(json_encode($item));
}

?>