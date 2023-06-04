<?php
require_once __DIR__."/../configs/DBConnection.php";
include(__DIR__."/../services/CropService.php");
class DoctorController{
   


    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllCrop();
         //die($doctors);
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Crop/list.php");
    }
     
    public function add(){
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/add.php");
    }

    public function add_process(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $doctorService = new DoctorService();
        $doctorService->addCrop();
        // Nhiệm vụ 2: Tương tác với View
        include(__DIR__."/../views/Doctor/add.php");
    }
    public function edit(){
        // Nhiệm vụ 1: Tương tác với Services/Models

        $doctorService = new DoctorService();
        $doctor = $doctorService->getCrops();
        
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

