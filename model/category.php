<?php
//câu lệnh include này chứa đường dẫn tới file db.class.php từ các file controller gọi file category chứ không phải từ file category
include_once("../../../config/db.class.php");


class Category
{
    public $id;
    public $nameBrand;

    public function __construct($nameBrand)
    {
       
        $this->nameBrand = htmlspecialchars(strip_tags($nameBrand));       
    }
    
    public function Add() {
        $db = new Db();
        
        $sql = "INSERT INTO `category` (`nameBrand`)
                VALUES ('$this->nameBrand') ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }

    public function Update($id) {
        $db = new Db();
        
        $sql = "UPDATE `category` SET `nameBrand`='$this->nameBrand' WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    }
    
    public function Delete($id) {
        $db = new Db();
        
        $sql = "DELETE FROM `category` WHERE `id`='$id' ";
        
        $result = $db->nodata_execute($sql);
        return $result;
    } 

    public function SelectAll() {
        $db = new DB();
        
        $sql = "SELECT * FROM `category`";
        
        $result = $db->data_execute($sql);
        return $result;
    }

    public function SelectById($id) {
        $db = new Db();
        
        $sql = "SELECT * FROM `category` Where `id`='$id' ";
        
        $result = $db->data_execute($sql);
        return $result;
    }
}