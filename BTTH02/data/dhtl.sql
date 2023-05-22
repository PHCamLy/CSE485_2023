-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 22, 2023 at 07:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhtl`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `ID` int(11) NOT NULL,
  `ID_KhoaHoc` int(11) DEFAULT NULL,
  `ID_SinhVien` int(11) DEFAULT NULL,
  `NoiDung` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baocao`
--

INSERT INTO `baocao` (`ID`, `ID_KhoaHoc`, `ID_SinhVien`, `NoiDung`) VALUES
(1, 1, 1, 'Bao cao hoc tap');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `GioiTinh` varchar(255) DEFAULT NULL,
  `ThongTinLienHe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`ID`, `Ten`, `Email`, `GioiTinh`, `ThongTinLienHe`) VALUES
(1, 'Tran Van C', 'tranvanc@gmail.com', 'Nam', '0123456789'),
(2, 'Tran Van XT', 'tranvanxt@example.com', 'Nam', '0923456989'),
(3, 'Nguyen Thi Y', 'nguyenthiy@example.com', 'Nam', '0987654321'),
(4, 'Pham Van Z', 'phamvanz@example.com', 'Nam', '0369876543');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `ID` int(11) NOT NULL,
  `MaKhoaHoc` varchar(255) DEFAULT NULL,
  `TieuDe` varchar(255) DEFAULT NULL,
  `MoTa` varchar(1000) DEFAULT NULL,
  `HocKy` varchar(255) DEFAULT NULL,
  `GiaiDoan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`ID`, `MaKhoaHoc`, `TieuDe`, `MoTa`, `HocKy`, `GiaiDoan`) VALUES
(1, 'KH001', 'Khoa hoc SQL', 'Hoc ve SQL', NULL, NULL),
(2, 'KH002', 'Khoa hoc Python', 'Hoc lap trinh Python', NULL, NULL),
(3, 'KH002', 'Khoa hoc PHP', 'Khoa hoc lap trinh PHP co ban', NULL, NULL),
(4, 'KH003', 'Khoa hoc Python', 'Khoa hoc lap trinh Python co ban', NULL, NULL),
(5, 'KH004', 'Khoa hoc Java', 'Khoa hoc lap trinh Java co ban', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lophocphan`
--

CREATE TABLE `lophocphan` (
  `ID` int(11) NOT NULL,
  `ID_KhoaHoc` int(11) DEFAULT NULL,
  `ID_GiangVien` int(11) DEFAULT NULL,
  `KhoangThoiGian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lophocphan`
--

INSERT INTO `lophocphan` (`ID`, `ID_KhoaHoc`, `ID_GiangVien`, `KhoangThoiGian`) VALUES
(1, 1, 1, '8:00 - 10:00'),
(2, 1, 1, '18:00 - 20:00'),
(3, 2, 2, '14:00 - 16:00'),
(4, 3, 3, '10:00 - 12:00');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `TenDangNhap` varchar(255) DEFAULT NULL,
  `MatKhau` varchar(255) DEFAULT NULL,
  `VaiTro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `GioiTinh` varchar(255) DEFAULT NULL,
  `ThongTinLienHe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`ID`, `Ten`, `NgaySinh`, `Email`, `GioiTinh`, `ThongTinLienHe`) VALUES
(1, 'Nguyen Van A', '2000-01-01', 'nguyenvana@gmail.com', NULL, '0123456789'),
(2, 'Tran Thi B', '2001-02-02', 'tranthib@gmail.com', NULL, '0987654321'),
(3, 'Nguyen Van  ly A', '1990-01-01', 'nguyenvana@example.com', 'Nam', '0123456089'),
(4, 'Tran Thi trang B', '1995-02-15', 'tranthib@example.com', 'Nam', '0987654381'),
(5, 'Le Van C', '1998-06-10', 'levanc@example.com', 'Nam', '0369876548');

-- --------------------------------------------------------

--
-- Table structure for table `suthamdu`
--

CREATE TABLE `suthamdu` (
  `ID` int(11) NOT NULL,
  `Ngay` date DEFAULT NULL,
  `ID_LopHocPhan` int(11) DEFAULT NULL,
  `ID_SinhVien` int(11) DEFAULT NULL,
  `TrangThaiThamDu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suthamdu`
--

INSERT INTO `suthamdu` (`ID`, `Ngay`, `ID_LopHocPhan`, `ID_SinhVien`, `TrangThaiThamDu`) VALUES
(1, '2023-05-20', 1, 1, 'Có mặt'),
(2, '2023-01-01', 1, 1, 'Co mat'),
(3, '2023-01-02', 1, 2, 'Co mat'),
(4, '2023-01-03', 1, 3, 'Vang mat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_KhoaHoc` (`ID_KhoaHoc`),
  ADD KEY `ID_SinhVien` (`ID_SinhVien`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_KhoaHoc` (`ID_KhoaHoc`),
  ADD KEY `ID_GiangVien` (`ID_GiangVien`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `suthamdu`
--
ALTER TABLE `suthamdu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_LopHocPhan` (`ID_LopHocPhan`),
  ADD KEY `ID_SinhVien` (`ID_SinhVien`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baocao`
--
ALTER TABLE `baocao`
  ADD CONSTRAINT `baocao_ibfk_1` FOREIGN KEY (`ID_KhoaHoc`) REFERENCES `khoahoc` (`ID`),
  ADD CONSTRAINT `baocao_ibfk_2` FOREIGN KEY (`ID_SinhVien`) REFERENCES `sinhvien` (`ID`);

--
-- Constraints for table `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `lophocphan_ibfk_1` FOREIGN KEY (`ID_KhoaHoc`) REFERENCES `khoahoc` (`ID`),
  ADD CONSTRAINT `lophocphan_ibfk_2` FOREIGN KEY (`ID_GiangVien`) REFERENCES `giangvien` (`ID`);

--
-- Constraints for table `suthamdu`
--
ALTER TABLE `suthamdu`
  ADD CONSTRAINT `suthamdu_ibfk_1` FOREIGN KEY (`ID_LopHocPhan`) REFERENCES `lophocphan` (`ID`),
  ADD CONSTRAINT `suthamdu_ibfk_2` FOREIGN KEY (`ID_SinhVien`) REFERENCES `sinhvien` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
