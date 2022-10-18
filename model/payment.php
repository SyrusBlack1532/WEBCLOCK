<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file payment chứ không phải từ file payment
include_once("../../../config/db.class.php");


class Payment
{
    public $id;
    public $userID;
    public $orderID;
    public $username;
    public $time;
    public $paymentBy;
    public $is_success;

    public function __construct( $userID, $orderID, $username, $time, $paymentBy, $is_success)
    {
       
        $this->userID = htmlspecialchars(strip_tags($userID));
        $this->orderID = htmlspecialchars(strip_tags($orderID));
        $this->username = htmlspecialchars(strip_tags($username));
        $this->time = htmlspecialchars(strip_tags($time));
        $this->paymentBy = htmlspecialchars(strip_tags($paymentBy));
        $this->is_success = htmlspecialchars(strip_tags($is_success));        
    }
    
    public function Add() {
        $db = new Db();
        
        $sql = "INSERT INTO `payment` (`userID`, `orderID`, `username`, `time`, `paymentBy`, `is_success`)
                VALUES ('$this->userID', '$this->orderID', '$this->username', '$this->time', '$this->paymentBy', '$this->is_success') ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($id) {
        $db = new Db();
        
        $sql = "UPDATE `payment` SET `userID`='$this->userID', `orderID`='$this->orderID', `username`='$this->username', 
                `time`='$this->time', `paymentBy`='$this->paymentBy', `is_success`='$this->is_success' WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }
    
    public function Delete($id) {
        $db = new Db();
        
        $sql = "DELETE FROM `payment` WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    } 

    public function SelectAll() {
        $db = new DB();
        
        $sql = "SELECT * FROM `payment`";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectById($id) {
        $db = new Db();
        
        $sql = "SELECT * FROM `payment` Where `id`='$id' ";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}