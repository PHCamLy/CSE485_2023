<?php
// Kết nối tới CSDL
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Chức năng Quản lý điểm danh của giảng viên
function quanLyDiemDanh($idLopHocPhan, $idSinhVien, $trangThai) {
    global $conn;

    $sql = "INSERT INTO DiemDanh (Ngay, IDLopHocPhan, IDSinhVien, TrangThai) VALUES
            (CURDATE(), $idLopHocPhan, $idSinhVien, '$trangThai')";
    if (mysqli_query($conn, $sql)) {
        echo "Điểm danh thành công.<br>";
    } else {
        echo "Lỗi khi điểm danh: " . mysqli_error($conn) . "<br>";
    }
}

// Chức năng điểm danh và xem thông tin tổng hợp điểm danh của sinh viên
function diemDanhVaXemThongTin($idSinhVien) {
    global $conn;

    // Điểm danh
    $idLopHocPhan = 1; // ID lớp học phần mà sinh viên tham gia
    $trangThai = 'Có mặt'; // Trạng thái điểm danh
    quanLyDiemDanh($idLopHocPhan, $idSinhVien, $trangThai);

    // Xem thông tin tổng hợp điểm danh
    $sql = "SELECT Ngay, TrangThai FROM DiemDanh WHERE IDSinhVien = $idSinhVien";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Thông tin tổng hợp điểm danh của sinh viên:<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Ngày: " . $row["Ngay"] . ", Trạng thái: " . $row["TrangThai"] . "<br>";
        }
    } else {
        echo "Không có thông tin điểm danh cho sinh viên này.<br>";
    }
}

// Thực hiện chức năng điểm danh và xem thông tin tổng hợp điểm danh
$idSinhVien = 1; // ID sinh viên
diemDanhVaXemThongTin($idSinhVien);

// Đóng kết nối
mysqli_close($conn);
?>
