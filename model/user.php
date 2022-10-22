<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file user chứ không phải từ file user
include_once("../../../config/db.class.php");


class User
{
    public $id;
    public $username;
    public $password;
    public $fullname;
    public $address;
    public $numberPhone;
    public $email;

    public function __construct( $username, $password, $fullname, $address, $numberPhone, $email)
    {
       
        $this->username = htmlspecialchars(strip_tags($username));
        $this->password = htmlspecialchars(strip_tags($password));
        $this->fullname = htmlspecialchars(strip_tags($fullname));
        $this->address = htmlspecialchars(strip_tags($address));
        $this->numberPhone = htmlspecialchars(strip_tags($numberPhone));
        $this->email = htmlspecialchars(strip_tags($email));        
    }
    
    public function Add() {
        $db = new Db();
        $pass = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user` (`username`, `password`, `fullname`, `address`, `numberPhone`, `email`)
                VALUES ('$this->username', '$pass', '$this->fullname', '$this->address', '$this->numberPhone', '$this->email') ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($id) {
        $db = new Db();
        $pass = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = "UPDATE `user` SET  `password`='$pass' WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }
    
    public function Delete($id) {
        $db = new Db();
        
        $sql = "DELETE FROM `user` WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    } 

    public function SelectAll() {
        $db = new DB();
        
        $sql = "SELECT * FROM `user`";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectById($id) {
        $db = new Db();
        
        $sql = "SELECT * FROM `user` Where `id`='$id' ";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}