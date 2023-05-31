<?php
require_once __DIR__.'/../configs/DBConnection.php';
include __DIR__."/../models/Doctors.php";
class DoctorService{
    public function getAllDoctor(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "select * from doctors";
        $stmt = $conn->query($sql);
        // B3. Xử lý kết quả
       $doctors = [];
        while($row = $stmt->fetch()){
            $doctor = new Doctor($row['ID'], $row['Name'],$row['Specialization']);
            array_push($doctors,$doctor);
        }
        return $doctors;
        
    }
    public function getDoctor(){
        //4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();
        $id = $_GET['id'];
        // B2. Truy vấn
        $sql = "select * from doctors where ID='$id'";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả

        $row = $stmt->fetch();
        $doctor= new Doctor($row['ID'], $row['Name'],$row['Specialization']);


        return $doctor;
    }
    public function addDoctor():void{
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        // B2. Truy vấn
        $name = $_POST['txtDoctorName']; 
        $specialization = $_POST['txtDoctorSpecialization'];

        $sql = "insert into doctors(Name, Specialization) 
        values ('$name', '$specialization')";

        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả

        header('location:index.php?controller=Doctor&action=list');
    }
    public function updateDoctor():void{
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        // B2. Truy vấn
        $name = $_POST['txtDoctorName']; 
        $specialization = $_POST['txtDoctorSpecialization'];
        $id =$_POST['id'];
        
        $sql = "UPDATE doctors
                SET Name = '$name', Specialization = '$specialization'
                WHERE ID = '$id';";
        //die($sql);
        $stmt = $conn->query($sql);

        header('location:index.php?controller=doctor&action=list');
    }

    public function deleteDoctor():void{
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        $id =$_GET['id'];
    
        $sql = "delete from doctors
                WHERE ID = '$id';";

        $stmt = $conn->query($sql);
        
        header('location:index.php?controller=doctor&action=list');
    }
    public function countDoctor(){
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