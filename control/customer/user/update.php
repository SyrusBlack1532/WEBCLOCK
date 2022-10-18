<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once("../../../config/db.class.php");
include_once("../../../model/user.php");

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$username = $data->username;
$password = $data->password;
$fullname = $data->fullname;
$address = $data->address;
$numberPhone = $data->numberPhone;
$email = $data->email;

$user = new User($username, $password, $fullname, $address, $numberPhone, $email);
$update = $user->Update($id);

?>