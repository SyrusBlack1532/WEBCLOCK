<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file Product chứ không phải từ file Product
include_once("../../../config/db.class.php");


class Product
{
    public $id;
    public $brandID;
    public $productName;
    public $price;
    public $amount;
    public $origin;
    public $image;
    public $description;

    public function __construct( $brandID, $productName, $price, $amount, $origin, $image, $description)
    {
       
        $this->brandID = htmlspecialchars(strip_tags($brandID));
        $this->productName = htmlspecialchars(strip_tags($productName));
        $this->price = htmlspecialchars(strip_tags($price));
        $this->amount = htmlspecialchars(strip_tags($amount));
        $this->origin = htmlspecialchars(strip_tags($origin));
        $this->image = htmlspecialchars(strip_tags($image));   
        $this->description = htmlspecialchars(strip_tags($description));      
    }
    
    public function Add() {
        $db = new Db();
        
        $sql = "INSERT INTO `product` (`brandID`, `productName`, `price`, `amount`, `origin`, `image`, `description`)
                VALUES ('$this->brandID', '$this->productName', '$this->price', '$this->amount', '$this->origin', '$this->image', '$this->description')";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($id) {
        $db = new Db();
        
        $sql = "UPDATE `product` SET `brandID`='$this->brandID', `productName`='$this->productName', `price`='$this->price', 
                `amount`='$this->amount', `origin`='$this->origin', `image`='$this->image', `description`='$this->description' WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }
    
    public function Delete($id) {
        $db = new Db();
        
        $sql = "DELETE FROM `product` WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    } 

    public function SelectAll() {
        $db = new DB();
        
        $sql = "SELECT * FROM `product`";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectById($id) {
        $db = new Db();
        
        $sql = "SELECT * FROM `product` Where `id`='$id' ";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}