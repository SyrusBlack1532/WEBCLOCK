<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/user.php");
//cach1
$userID = isset($_GET['id']) ? $_GET['id'] :die();
//cach2
//$data = json_decode(file_get_contents("php://input"));
//$userID = $data->id;


$user = new User("","","","","","");
$read = $user->SelectById($userID);

$num = $read->rowCount();
if($num > 0){
    
    $row = $read->fetch(PDO::FETCH_ASSOC);
    extract($row);

    $item = array(
        'id' => $id,
        'username' => $username,
        'password' => $password,
        'fullname' => $fullname,
        'address' => $address,
        'numberPhone' => $numberPhone,
        'email' => $email
    );
        
    print_r(json_encode($item));
}

?>