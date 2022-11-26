<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/dt_order.php");
include_once("../../../model/product.php");
include_once("../../../model/order.php");

$data = json_decode(file_get_contents("php://input"));
$orderID = $data->orderID;

$dt_order = new Dt_order("", "", "", "");
$read = $dt_order->SelectById($orderID);

$num = $read->rowCount();

if($num > 0){
    
    $list['dt_order'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        //lay product
        $product = new Product("","","","","","","","","","");
        $read2 = $product->SelectById($productID);
        $row2 = $read2->fetch(PDO::FETCH_ASSOC);
        extract($row2);

        // tinh tong gia
        $rowPrice = $quantity*$price;
        $item = array(
            'orderID' => $orderID,
            'productID' => $productID,
            'quantity' => $quantity,
            'price' => $price,
            'productName' => $productName,
            'image' => $image,
            'rowPrice' => $rowPrice

        );
        array_push($list['dt_order'], $item);

    }

    $order = new Order("", "", "", "", "", "");
    $read3 = $order->SelectById($orderID);
    $row3 = $read3->fetch(PDO::FETCH_ASSOC);
    extract($row3);
    
    $list['totalPrice'] = $totalPrice;
    $list['totalCount'] = $totalQuantity;

    echo json_encode($list);
}

?>
