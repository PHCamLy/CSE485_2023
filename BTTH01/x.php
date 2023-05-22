<?php
// Khai báo đường dẫn đến file dữ liệu
$filename = 'BT03.csv';

// Hàm để đọc dữ liệu từ file và trả về danh sách sinh viên
function readStudents($filename) {
    $students = array();

    if (($handle = fopen($filename, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $student = array(
                'id' => $data[0],
                'name' => $data[1],
                'age' => $data[2],
            );
            $students[] = $student;
        }
        fclose($handle);
    }

    return $students;
}

// Hàm để lưu thông tin sinh viên vào file
function saveStudent($filename, $student) {
    // Kiểm tra nếu sinh viên đã tồn tại trong danh sách thì không lưu lại
    $students = readStudents($filename);
    foreach ($students as $s) {
        if ($s['id'] == $student['id']) {
            return false;
        }
    }

    // Lưu thông tin sinh viên vào file
}
