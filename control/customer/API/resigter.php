<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/user.php");
include_once("../../../vendor/autoload.php");
use Firebase\JWT\JWT;

//ham tao ten tam 
function rand_string( $length ) {//length là độ dài chuỗi
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";  
    $size = strlen( $chars );
    $str = "";    
    for( $i = 0; $i < $length; $i++ ) {  
    $str= $str.$chars[ rand( 0, $size - 1 ) ];  
    }  
    return $str;  
} 

$data = json_decode(file_get_contents("php://input"));
//tao ca bien tam de so sanh
$tempuser = $data->username;
$temppass = $data->password;
$tempfullname = rand_string(7);
$tempphone = $data->numberPhone;
$tempemail = $data->email;
$temp = 0;

$user = new User($tempuser, $temppass, $tempfullname, "", $tempphone, $tempemail);
$read = $user->SelectAll();

$num = $read->rowCount();

if($num > 0){
    
    $list = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $item = array(
            'user' => [
                'id' => $id,
                'username' => $username,
                //'password' => $password,// ko hien pasword cho khach
                'fullname' => $fullname,
                'address' => $address,
                'numberPhone' => $numberPhone,
                'email' => $email
            ]
        );
        //kiem tra tai khoan va mat khau
        if($username == $tempuser){
            //jwt
            $result = array(
                'message' => 'Username is exist'
            );
            array_push($list, $result);
            echo json_encode($list);
            $temp = 1;
            break;
        }
       
    }
    //Tai khoan khong bi trung
    if($temp == 0){
        $create = $user->Add();
        $result = array(
            'message' => 'Resigter success'
        );
        array_push($list, $result);
        echo json_encode($list);
    } 
}

?>