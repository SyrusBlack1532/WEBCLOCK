<?php
    class DB 
    {
        protected static $conn;

        public function connect(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $databasename = "webmnm";
            
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              return $conn;
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
              return false;
            }
        }
        //khong co du lieu tra ve
        public function nodata_execute($sql){
            $conn = $this->connect();

            $result = $conn->exec($sql);

            $conn = null;
            return $result;
        }
        //co du lieu tra ve
        public function data_execute($sql){
            $conn = $this->connect();

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $conn = null;
            return $stmt;
        }
    }
?>