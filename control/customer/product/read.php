<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/product.php");

$product = new Product("","","","","","","");
$read = $product->SelectAll();
//$read = product::SelectAll(); cach dung cho ham static

$num = $read->rowCount();

if($num > 0){
    
    $list['product'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $item = array(
            'id' => $id,
            'brandID' => $brandID,
            'productName' => $productName,
            'price' => $price,
            'amount' => $amount,
            'origin' => $origin,
            'image' => $image,
            'description' => $description

        );
        array_push($list['product'], $item);
    }

    echo json_encode($list);
}
?>