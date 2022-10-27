<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/product.php");

$page = isset($_GET['page']) ? $_GET['page'] :die();

$product = new Product("","","","","","","","","","");
//Lấy tổng số trang
$all = $product->SelectAll();
$totalRow = $all->rowCount();
$totalPage = floor($totalRow / 10) + 1;

//trả về list 20 sản phẩm cho phân trang
$limit = $page * 10;
$startProduct = $limit - 10; 

$read = $product->SelectAllLimit10($startProduct);

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
            'priceAfter' => $priceAfter,
            'amount' => $amount,
            'origin' => $origin,
            'image' => $image,
            'description' => $description,
            'title' => $title,
            'is_sale' => $is_sale,
            'totalPage' => $totalPage
        );

        array_push($list['product'], $item);
    }

    echo json_encode($list);
}
?>