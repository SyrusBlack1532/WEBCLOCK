<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/product.php");

$productID = isset($_GET['id']) ? $_GET['id'] :die();

$product = new Product("","","","","","","");
$read = $product->SelectById($productID);

$num = $read->rowCount();
if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
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
        
    echo json_encode($item);
}else{
    $result = array(
        'message' => 'Dont have product'
    );
    echo json_encode($result);
}

?>