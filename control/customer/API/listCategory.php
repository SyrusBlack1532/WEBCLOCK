<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/category.php");

$category = new Category("");
$read = $category->SelectAll();


$num = $read->rowCount();

if($num > 0){
    
    $list['category'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $item = array(
            'id' => $id,
            'nameBrand' => $nameBrand

        );
        array_push($list['category'], $item);
    }

    echo json_encode($list);
}
?>