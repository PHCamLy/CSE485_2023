<?php
require_once __DIR__."/../configs/DBConnection.php";
include(__DIR__."/../services/DoctorService.php");
class DoctorController{
    // Hàm xử lý hành động index

    // public function index(){
    //     $doctorService = new DoctorService();
    //     $stmt = $doctorService->getDoctor();
    //     //echo $art->getName();
    //     //echo json_encode($stmt->getName());
    //     include("views/Doctor/list_doctor.php");
    // }


    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctor();
         //die($doctors);
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/list_doctor.php");
    }
     
    public function add(){
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/add_doctor.php");
    }

    public function add_process(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $doctorService = new DoctorService();
        $doctorService->addDoctor();
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/add_doctor.php");
    }
    public function edit(){
        // Nhiệm vụ 1: Tương tác với Services/Models

        $doctorService = new DoctorService();
        $doctor = $doctorService->getDoctor();
        
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/edit_doctor.php");
    }
    public function update(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $doctorService = new DoctorService();
        $doctorService->updateDoctor();
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/list_doctor.php");
    }
    public function delete(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $doctorService = new DoctorService();
        $doctorService->deleteDoctor();
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/list_doctor.php");
    }
 
}

