<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/user.php");
include_once("../../../vendor/autoload.php");
use Firebase\JWT\JWT;

$data = json_decode(file_get_contents("php://input"));
//tao ca bien tam de so sanh
$tempuser = $data->username;
$temppass = $data->password;
$temp = 0;


$user = new User("","","","","","");
$read = $user->SelectAll();

$num = $read->rowCount();

if($num > 0){
    
    $list = [];

    while($row = $read->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        //trả về id
        $itemID = array(
            'id' => $id
        );

        //trả về thông tin
        
        $itemTemp = array(
            
            'username' => $username,
            //'password' => $password,// ko hien pasword cho khach
            'fullname' => $fullname,
            'address' => $address,
            'numberPhone' => $numberPhone,
            'email' => $email
            
        );
        //kiem tra tai khoan va mat khau
        if(($username == $tempuser) && (password_verify($temppass ,$password))){
            //jwt
            $secret_key = "Hello World";
            $token=JWT::encode($itemID, $secret_key, 'HS256');

            //thông tin để đẩy cả token vào
            $item = array(
                'token' => $token,
                'id' => $id,
                'username' => $username,
                //'password' => $password,// ko hien pasword cho khach
                'fullname' => $fullname,
                'address' => $address,
                'numberPhone' => $numberPhone,
                'email' => $email
                
            );
            $result = array(
                'message' => 'Login success',
                'is_success' => 'true',
                'user' => $item
            );

            array_push($list, $result);
            $temp = 1;
            break;
        }
       
    }
    //sai tai khoan hay mat khau
    if($temp == 0){
        $result = array(
            'message' => 'Username or password is wrong',
            'is_success' => 'False'
        );
        array_push($list, $result);
        echo json_encode($list);
    } 
    //dung tai khoan va mat khau
    else {
        
        echo json_encode($list);
    }
}
//$create = $user->Add();

?>