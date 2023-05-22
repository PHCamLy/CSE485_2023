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

// Sinh dữ liệu minh họa cho bảng SinhVien
$sql = "INSERT INTO SinhVien (SinhVienID, Ten, NgaySinh, Email, ThongTinLienHe, KhoaHoc, HocKy, GiaiDoan)VALUES 
        ('SV001', 'Nguyen Van A', '2000-01-01', 'nguyenvana@example.com', '123456789', 'Khoa hoc 1', 'Hoc ky 1', 'Giai doan 1');";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted into SinhVien table successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Sinh dữ liệu minh họa cho bảng KhoaHoc
$sql = "INSERT INTO KhoaHoc (MaKhoaHoc, TieuDe, MoTa) VALUES
        ('KH001', 'Khoa hoc 1', 'Mo ta khoa hoc 1'),
        ('KH002', 'Khoa hoc 2', 'Mo ta khoa hoc 2'),
        ('KH003', 'Khoa hoc 3', 'Mo ta khoa hoc 3')";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted into KhoaHoc table successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Sinh dữ liệu minh họa cho bảng LopHocPhan
$sql = "INSERT INTO LopHocPhan (IDLop, IDKhoaHoc, IDGiangVien, KhoangThoiGian) VALUES
        (1, 1, 1, '2023-01-01'),
        (2, 1, 2, '2023-01-01'),
        (3, 2, 2, '2023-02-01')";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted into LopHocPhan table successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Sinh dữ liệu minh họa cho bảng GiangVien
$sql = "INSERT INTO GiangVien (Ten, Email, ThongTinLienHe) VALUES
        ('Nguyen Van G', 'nguyenvang@example.com', '111111111'),
        ('Tran Thi H', 'tranthih@example.com', '222222222'),
        ('Le Van I', 'levani@example.com', '333333333')";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted into GiangVien table successfully.<br>";
} else {
    echo "Error inserting data: " . mysqli_error($conn) . "<br>";
}

// Đóng kết nối
mysqli_close($conn);
?>
