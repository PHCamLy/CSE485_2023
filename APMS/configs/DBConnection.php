<?php

class DBConnection{
    private $conn=null;

    public function __construct(){
         // B1. Kết nối DB Server
         try {
            $this->conn = new PDO('mysql:host=localhost;dbname=apms;port=3306', 'root','');
            // echo "Thanh công";
        } catch (PDOException $e) {
            echo "Thất bạo".$e->getMessage();
        }
         
    }

    public function getConnection(){
        return $this->conn;
    }


}