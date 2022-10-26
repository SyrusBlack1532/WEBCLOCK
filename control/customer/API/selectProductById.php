<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/product.php");
include_once("../../../model/category.php");

$productID = isset($_GET['id']) ? $_GET['id'] :die();

$product = new Product("","","","","","","");
$read = $product->SelectById($productID);

$num = $read->rowCount();
if($num > 0){
    $list = [];

    $row = $read->fetch(PDO::FETCH_ASSOC);
    //đay cac thuoc tinh cua san pham tim dc thanh bien
    extract($row);

    // lay ten thuong hieu
    $cate = new Category("");
    $sqlcate = $cate->SelectById($brandID);
    $row2 = $sqlcate->fetch(PDO::FETCH_ASSOC);
    extract($row2);

   
    $item = array(
        'id' => $id,
        'brandID' => $brandID,
        'nameBrand' => $nameBrand,
        'productName' => $productName,
        'price' => $price,
        'amount' => $amount,
        'origin' => $origin,
        'image' => $image,
        'description' => $description
    );
    

    array_push($list, $item);
    
    echo json_encode($list);
}else{
    $result = array(
        'message' => 'Dont have product'
    );
    echo json_encode($result);
}

?>