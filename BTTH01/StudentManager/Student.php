<?php
class student{
    private int $id;
    private string $name;
    private int $age;

    public function __construct($id , $name , $age){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }
    function getID(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function setID(int $id){
        $this->id = $id;
    }
    function setName(string $name){
        $this->name = $name;
    }
    function setAge(int $age){
        $this->age = $age;
    }
} 
?>