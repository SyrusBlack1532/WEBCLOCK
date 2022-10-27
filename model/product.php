<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file Product chứ không phải từ file Product
include_once("../../../config/db.class.php");


class Product
{
    public $id;
    public $brandID;
    public $productName;
    public $price;
    public $priceAfter;
    public $amount;
    public $origin;
    public $image;
    public $description;
    public $title;
    public $is_sale;

    public function __construct( $brandID, $productName, $price, $priceAfter, $amount, $origin, $image, $description, $title, $is_sale)
    {
       
        $this->brandID = htmlspecialchars(strip_tags($brandID));
        $this->productName = htmlspecialchars(strip_tags($productName));
        $this->price = htmlspecialchars(strip_tags($price));
        $this->priceAfter = htmlspecialchars(strip_tags($priceAfter));
        $this->amount = htmlspecialchars(strip_tags($amount));
        $this->origin = htmlspecialchars(strip_tags($origin));
        $this->image = htmlspecialchars(strip_tags($image));   
        $this->description = htmlspecialchars(strip_tags($description));      
        $this->title = htmlspecialchars(strip_tags($title));
        $this->is_sale = htmlspecialchars(strip_tags($is_sale));
    }
    
    public function Add() {
        $db = new Db();
        
        $sql = "INSERT INTO `product` (`brandID`, `productName`, `price`, `priceAfter`, `amount`, `origin`, `image`, `description`, `title`, `is_sale`)
                VALUES ('$this->brandID', '$this->productName', '$this->price', '$this->priceAfter', '$this->amount', '$this->origin', '$this->image', '$this->description', '$this->title', '$this->is_sale')";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($id) {
        $db = new Db();
        
        $sql = "UPDATE `product` SET `brandID`='$this->brandID', `productName`='$this->productName', `price`='$this->price', `priceAfter`='$this->priceAfter',
                `amount`='$this->amount', `origin`='$this->origin', `image`='$this->image', `description`='$this->description', `title`='$this->title', `is_sale`='$this->is_sale' WHERE `id`='$id' ";
        
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

    public function SelectAllLimit10($startProduct) {
        $db = new Db();
        
        $sql = "SELECT * FROM `product`LIMIT $startProduct, 10";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}