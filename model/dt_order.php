<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file dt_order chứ không phải từ file dt_order
include_once("../../../config/db.class.php");


class Dt_order
{
    
    public $orderID;
    public $productID;
    public $quantity;
    public $price;
    

    public function __construct( $orderID, $productID, $quantity, $price)
    {
       
        $this->orderID = htmlspecialchars(strip_tags($orderID));
        $this->productID = htmlspecialchars(strip_tags($productID));
        $this->quantity = htmlspecialchars(strip_tags($quantity));
        $this->price = htmlspecialchars(strip_tags($price));
        
             
    }
    
    public function Add() {
        $db = new Db();
        
        $sql = "INSERT INTO `dt_order` (`orderID`, `productID`, `quantity`, `price`)
                VALUES ('$this->orderID', '$this->productID', '$this->quantity', '$this->price') ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($ord_id, $pro_id) {
        $db = new Db();
        
        $sql = "UPDATE `dt_order` SET `quantity`='$this->quantity', `price`='$this->price' 
                WHERE `orderID`='$ord_id' AND `productID`='$pro_id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }
    
    public function Delete($id) {
        $db = new Db();
        
        $sql = "DELETE FROM `dt_order` WHERE `orderID`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    } 

    public function SelectAll() {
        $db = new DB();
        
        $sql = "SELECT * FROM `dt_order`";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectById($id) {
        $db = new Db();
        
        $sql = "SELECT * FROM `dt_order` Where `orderID`='$id' ";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}