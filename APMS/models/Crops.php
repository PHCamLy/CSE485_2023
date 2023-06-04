<?php
class Doctor {
    private $cropid;
    private $name;
    private $category;
    private $sowing_season;
    private $harvest_season;


    public function __construct($cropid, $name, $category,$sowing_season,$harvest_season){
        $this->cropid= $cropid;
        $this->name = $name;
        $this->sowing_season= $sowing_season;
        $this->category = $category;
        $this->harvest_season = $harvest_season;
    }

    // Getter and Setter for ID
    public function getcropid() {
        return $this->cropid;
    }

    public function setcropid($cropid) {
        $this->cropid= $cropid;
    }

    // Getter and Setter for name
    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->name = $name;
    }

    
    public function getsowing_season() {
        return $this->sowing_season;
    }

    public function setsowing_season($sowing_season) {
        $this->sowing_season = $sowing_season;
    }

    
    public function getcategory() {
        return $this->category;
    }

    public function setn($category) {
        $this->category = $category;
    }

    
    public function getharvest_season() {
        return $this->harvest_season;
    }

    public function setharvest_season($harvest_season) {
        $this->harvest_season = $harvest_season;
    }
}
