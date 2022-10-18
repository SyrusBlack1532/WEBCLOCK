<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/category.php");

$categoryID = isset($_GET['id']) ? $_GET['id'] :die();

$category = new Category("");
$read = $category->SelectById($categoryID);

$num = $read->rowCount();
if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
    extract($row);

    $item = array(
        'id' => $id,
        'nameBrand' => $nameBrand
    );
        
    print_r(json_encode($item));
}

?>