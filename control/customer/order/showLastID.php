<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/order.php");

$order = new Order("","","","","");
$read = $order->SelectMaxId();
//$read = order::SelectAll(); cach dung cho ham static

$num = $read->rowCount();

if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
    extract($row);
    
    $item = array(
        'id' => $MaxID,
        
    );
        
    print_r(json_encode($item));

}
?>