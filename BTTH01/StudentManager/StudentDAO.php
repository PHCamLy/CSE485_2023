class StudentDAO {
    private $students = array();

    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function updateStudent($id, $name, $age) {
        foreach ($this->students as $student) {
            if ($student->getId() == $id) {
                $student->setName($name);
                $student->setAge($age);
                break;
            }
        }
    }

    public function deleteStudent($id) {
        foreach ($this->students as $key => $student) {
            if ($student->getId() == $id) {
                unset($this->students[$key]);
                break;
            }
        }
        $this->students = array_values($this->students);
    }

    public function getAllStudents() {
        return $this->students;
    }
}
