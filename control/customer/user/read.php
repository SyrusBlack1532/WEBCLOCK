<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

include_once("../../../config/db.class.php");
include_once("../../../model/user.php");

$user = new User("","","","","","");
$read = $user->SelectAll();
//$read = User::SelectAll(); cach dung cho ham static

$num = $read->rowCount();

if($num > 0){
    
    $list['user'] = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
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
        array_push($list['user'], $item);
    }

    echo json_encode($list);
}
?>