<?php
require_once __DIR__.'/../configs/DBConnection.php';

include __DIR__."/../models/Crops.php";
class DoctorService{
    public function getAllCrop(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "select * from crops";
        $stmt = $conn->query($sql);
        // B3. Xử lý kết quả
       $doctors = [];
        while($row = $stmt->fetch()){
            $crops = new crops($row['cropid'], $row['name'],$row['category'],$row['sowing_season'],$row['harvest_season']);
            array_push($crops,$crops);
        }
        return $doctors;
        
    }
    public function getCrops(){
        //4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();
        $id = $_GET['cropid'];
        // B2. Truy vấn
        $sql = "select * from crops where cropid='$cropid'";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả

        $row = $stmt->fetch();
        $crops = new crops($row['cropid'], $row['name'],$row['category'],$row['sowing_season'],$row['harvest_season']);

        return $crops;
    }
    public function addCrop():void{
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        // B2. Truy vấn
        $name = $_POST['txtCropname']; 
        $category = $_POST['txtCropcategory'];

        $sql = "insert into doctors(Name, Category) 
        values ('$name', '$category')";

        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả

        header('location:index.php?controller=crop&action=list');
    }
    public function updatecrop():void{
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        // B2. Truy vấn
        $name = $_POST['txtDoctorName']; 
        $specialization = $_POST['txtDoctorSpecialization'];
        $id =$_POST['id'];
        
        $sql = "UPDATE doctors
                SET Name = '$name', category= '$category'
                WHERE ID = '$cropid';"
        //die($sql);
        $stmt = $conn->query($sql);

        header('location:index.php?controller=doctor&action=list');
    }

    public function deletecrop():void{
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        $id =$_GET['id'];
    
        $sql = "delete from doctors
                WHERE ID = '$id';";

        $stmt = $conn->query($sql);
        
        header('location:index.php?controller=doctor&action=list');
    }
    public function count(){
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        //$id =$_GET['id'];
    
        $sql = "select count(*) from tacgia";

        $stmt = $conn->query($sql);
        $author = $stmt->fetch();
        return $author;

    }
}