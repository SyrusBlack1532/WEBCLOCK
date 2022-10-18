<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file order chứ không phải từ file order
include_once("../../../config/db.class.php");


class Order
{
    public $id;
    public $userID;
    public $username;
    public $date;
    public $totalQuantity;
    public $totalPrice;
    

    public function __construct( $userID, $username, $date, $totalQuantity, $totalPrice)
    {
       
        $this->userID = htmlspecialchars(strip_tags($userID));
        $this->username = htmlspecialchars(strip_tags($username));
        $this->date = htmlspecialchars(strip_tags($date));
        $this->totalQuantity = htmlspecialchars(strip_tags($totalQuantity));
        $this->totalPrice = htmlspecialchars(strip_tags($totalPrice));
             
    }
    
    public function Add() {
        $db = new Db();
        
        $sql = "INSERT INTO `orders` (`userID`, `username`, `date`, `totalQuantity`, `totalPrice`)
                VALUES ('$this->userID', '$this->username', '$this->date', '$this->totalQuantity', '$this->totalPrice') ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($id) {
        $db = new Db();
        
        $sql = "UPDATE `orders` SET `userID`='$this->userID', `username`='$this->username', `date`='$this->date', 
                `totalQuantity`='$this->totalQuantity', `totalPrice`='$this->totalPrice' WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }
    
    public function Delete($id) {
        $db = new Db();
        
        $sql = "DELETE FROM `orders` WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    } 

    public function SelectAll() {
        $db = new DB();
        
        $sql = "SELECT * FROM `orders`";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectById($id) {
        $db = new Db();
        
        $sql = "SELECT * FROM `orders` Where `id`='$id' ";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectMaxId() {
        $db = new DB();
        
        $sql = "SELECT MAX(`id`) as MaxID from `orders`";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}