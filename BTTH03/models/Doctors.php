<?php
class Doctor {
    private $ID;
    private $name;
    private $specialization;
    private $contactInformation;
    private $salary;


    public function __construct($id, $name, $specialization){
        $this->ID = $id;
        $this->name = $name;
        $this->specialization = $specialization;
    }

    // Getter and Setter for ID
    public function getID() {
        return $this->ID;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    // Getter and Setter for name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter and Setter for specialization
    public function getSpecialization() {
        return $this->specialization;
    }

    public function setSpecialization($specialization) {
        $this->specialization = $specialization;
    }

    // Getter and Setter for contactInformation
    public function getContactInformation() {
        return $this->contactInformation;
    }

    public function setContactInformation($contactInformation) {
        $this->contactInformation = $contactInformation;
    }

    // Getter and Setter for salary
    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
