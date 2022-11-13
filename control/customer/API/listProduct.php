<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/product.php");

$page = isset($_GET['page']) ? $_GET['page'] : 1;


$product = new Product("","","","","","","","","","");



//Xử lý
// page là mặc đĩnh luôn có
$title = isset($_GET['title']) ? $_GET['title'] : -1;
$sale = isset($_GET['is_sale']) ? $_GET['is_sale'] : -1;
$brand = isset($_GET['brandID']) ? $_GET['brandID'] : -1;
$search = isset($_GET['search']) ? $_GET['search'] : -1;
$sort = isset($_GET['sort']) ? $_GET['sort'] : -1;

//từ search nhảy về brandID
if($search == '""'){
    $search = -1;
   
}

//từ brandID nhảy về search
if($brand== '""'){
    $brand = -1;
    
}



//trả về list 20 sản phẩm cho phân trang
$limit = $page * 10;
$startProduct = $limit - 10; 

//$read = $product->SelectAllLimit10($startProduct);
$read = $product->SelectMoreLimit10($startProduct, $title, $sale, $brand, $search, $sort);
$num = $read->rowCount();

//Lấy tổng số trang
$sql = $product->SelectMore($title, $sale, $brand, $search, $sort);
$countpage = $sql->rowCount();
$totalPage = floor($countpage / 10) + 1;

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
            
        );

        array_push($list['product'], $item);     
    }
    $list['totalPage'] = $totalPage;

    echo json_encode($list);
}
?>