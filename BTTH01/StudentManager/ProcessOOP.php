<?php
class StudentDAO {
  private $students;
  
  function __construct() {
    $this->students = array();
  }
  
  public function create($student) {
    array_push($this->students, $student);
  }
  
  public function read($id) {
    foreach($this->students as $student) {
      if($student->getId() == $id) {
        return $student;
      }
    }
    return null;
  }
  
  public function update($student) {
    foreach($this->students as &$s) {
      if($s->getId() == $student->getId()) {
        $s = $student;
        return true;
      }
    }
    return false;
  }
  
  public function delete($id) {
    foreach($this->students as $key => $student) {
      if($student->getId() == $id) {
        unset($this->students[$key]);
        return true;
      }
    }
    return false;
  }
  
  public function getAll() {
    return $this->students;
  }
}
?>