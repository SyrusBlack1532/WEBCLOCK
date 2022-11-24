<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/order.php");
include_once("../../../model/dt_order.php");

$data = json_decode(file_get_contents("php://input"));

//lay thong tin order

$userID = $data->userID;
$username = $data->username;
$date = date("Y-m-d");
$totalQuantity = $data->totalQuantity;
$totalPrice = $data->totalPrice;
$status = 0;


//chen vao order
$orderAdd = new Order($userID, $username, $date, $totalQuantity, $totalPrice, $status);
$add = $orderAdd->Add();

//lay orderID moi them vao
$findMaxOrderID = $orderAdd->SelectMaxId();
while($row = $findMaxOrderID->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $orderID = $MaxID;   
}

//thong tin dt_order
$count = $data->count;
$dt_order = $data->cart;
$i =0;
while($i < $count){
    $productID = $dt_order[$i]->id;
    $quantity = $dt_order[$i]->quantity;
    $price = $dt_order[$i]->priceAfter;

    $dt_orderAdd = new Dt_order($orderID, $productID, $quantity, $price);
    $add2 = $dt_orderAdd->Add();
    $i++;
}

/*$list = [];
$list['order'] = [];
$list['dt_order'] = [];


$result = array(
    'userID' => 1,
    'username' => 'abc'
);
array_push($list['order'], $result);
$result = array(
    'id' => '1'
);
array_push($list['dt_order'], $result);
$result = array(
    'id' => '2'
);
array_push($list['dt_order'], $result);
echo json_encode($list);*/

//$abc = $list['order'][0]['userID'];
//echo $abc;
?>