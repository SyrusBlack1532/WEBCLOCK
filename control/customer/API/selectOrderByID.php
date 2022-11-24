<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/order.php");

$data = json_decode(file_get_contents("php://input"));
$userID = $data->userID;

$order = new Order("", "", "", "", "", "");
$read = $order->SelectByUserId($userID);

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
            'totalPrice' => $totalPrice,
            'status' => $status

        );
        array_push($list['order'], $item);
    }

    echo json_encode($list);
}

?>
