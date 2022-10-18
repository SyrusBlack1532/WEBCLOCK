<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/user.php");

/*if(!empty($_POST)){
    print_r($_POST);
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $numberPhone = isset($_POST['numberPhone']) ? $_POST['numberPhone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    if($username != "" && $password !=""){
        $user = new User("1","2","3","4","5","6");
        $create = $user->Add();
    }else{
        echo "Chưa có tài khoản hay mật khẩu";
    }
    
}
else {
    echo "Chưa Post thông tin";
}*/

//api json dung postman?
$data = json_decode(file_get_contents("php://input"));

$username = $data->username;
$password = $data->password;
$fullname = $data->fullname;
$address = $data->address;
$numberPhone = $data->numberPhone;
$email = $data->email;

$user = new User($username, $password, $fullname, $address, $numberPhone, $email);
$create = $user->Add();

?>