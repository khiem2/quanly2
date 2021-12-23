-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 01:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baitaplon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_giaovien`
--

CREATE TABLE `tb_giaovien` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sodt` varchar(11) DEFAULT NULL,
  `tuoi` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `quanly` tinyint(1) DEFAULT NULL,
  `idQuantri` int(11) DEFAULT NULL,
  `maGV` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_giaovien`
--

INSERT INTO `tb_giaovien` (`id`, `name`, `sodt`, `tuoi`, `email`, `password`, `quanly`, `idQuantri`, `maGV`) VALUES
(2, 'Phạm Trọng VInh', '0321554', 33, 'vinh1999@gmail.com', '$2y$10$fCR2X6UwWZHrox1Fq6h5UeKwbUmoHL9ntUKmJutqezyApBpt6Af9G', NULL, NULL, '11445535'),
(5, 'Đỗ Quang Tú', '0374098945', 20, 'tudq72@wru.vn', '$2y$10$Qnni9wds.xjb5EItZVJOSut72QlsAbi4xMMMAm6o4.JNPit0dXHmO', NULL, NULL, '175A071201'),
(133, 'Lê Văn Hiệp', '3591371', 2, 'hieppt@gmail.com', '$2y$10$hlXkWGx2jnlQkw0bpKHDsuC/.gO3tIShQTxqkGeURFlq81HONA2hK', NULL, NULL, '175A071201'),
(134, 'Phạm Mạnh Cường', '0374098946', 33, 'cuongct@gmail.com', '$2y$10$2zuDyj1ihwR2Uu99QO5OmOuvh.xPwChvAzjWuMyZxIMcWbQqPRKoO', NULL, NULL, '175A01234'),
(135, 'Trần Mạnh Tuấn', '0757325', 34, 'tuandq@mgmail.co', '$2y$10$bT9j9RaH02u6qhU4KxIZAOe9Q9ZKHHqSorIaczdvRI2BSx.Zr7/7S', NULL, NULL, '1750129');

-- --------------------------------------------------------

--
-- Table structure for table `tb_giaovien_monhoc`
--

CREATE TABLE `tb_giaovien_monhoc` (
  `idgiaovien` int(11) NOT NULL,
  `idmonhoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_giaovien_monhoc`
--

INSERT INTO `tb_giaovien_monhoc` (`idgiaovien`, `idmonhoc`) VALUES
(2, 1),
(2, 3),
(2, 6),
(2, 8),
(2, 9),
(2, 15),
(5, 1),
(5, 6),
(5, 8),
(5, 9),
(5, 14),
(133, 6),
(133, 8),
(134, 1),
(134, 3),
(134, 6),
(134, 11),
(135, 3),
(135, 8),
(135, 10),
(135, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lophocphan`
--

CREATE TABLE `tb_lophocphan` (
  `id` int(11) NOT NULL,
  `lophoc` varchar(100) DEFAULT NULL,
  `thoigianbatdau` varchar(200) DEFAULT NULL,
  `thoigianketthuc` varchar(100) DEFAULT NULL,
  `diadiem` varchar(100) DEFAULT NULL,
  `giangvien` varchar(100) DEFAULT NULL,
  `monhoc` varchar(100) DEFAULT NULL,
  `giaidoan` varchar(100) DEFAULT NULL,
  `hocky` varchar(100) DEFAULT NULL,
  `namhoc` varchar(100) DEFAULT NULL,
  `idQuanly` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lophocphan`
--

INSERT INTO `tb_lophocphan` (`id`, `lophoc`, `thoigianbatdau`, `thoigianketthuc`, `diadiem`, `giangvien`, `monhoc`, `giaidoan`, `hocky`, `namhoc`, `idQuanly`) VALUES
(5, '59PM1', '2020-01-09', '2020-01-17', '201A4', 'Phạm Trọng VInh', 'Toán 1', 'Giai Đoạn 1', 'Học Kỳ 1', '2019-2020', NULL),
(6, '57TH1', '2020-01-16', '2020-01-16', '302C3', 'Phạm Trọng VInh', 'Toán 1', 'Giai Đoạn 1', 'Học Kỳ 1', '2019-2020', NULL),
(7, '60KT2', '2020-01-08', '2020-01-11', '301A4', 'Lê Văn Hiệp', 'Đường Lối Cách Mạng VN', 'Giai Đoạn 1', 'Học Kỳ 1', '2019-2020', NULL),
(8, '56KT2', '20/11/2019', '20/3/2020', '301B5', 'Phạm Trọng Vinh', 'Điền Kinh', 'Giai Đoạn 2', 'Học Kỳ 1', '2019-2020', NULL),
(9, 'TH3', '2020-01-16', '2020-01-16', 'Thứ 5-302C5', 'Phạm Mạnh Cường', 'Mạng Máy Tính', 'Giai Đoạn 1', 'Học Kỳ 1', '2019-2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_monhoc`
--

CREATE TABLE `tb_monhoc` (
  `id` int(11) NOT NULL,
  `Mamon` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sotinchi` int(11) DEFAULT NULL,
  `idNganhhoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_monhoc`
--

INSERT INTO `tb_monhoc` (`id`, `Mamon`, `name`, `sotinchi`, `idNganhhoc`) VALUES
(1, 'TH1', 'Toán 1', 2, 1),
(3, 'MA1', 'Cấu Túc Dữ Liệu', 4, 1),
(6, 'L1', 'Lý Thuyết Tính Toán', 3, 1),
(8, 'E4', 'Đường Lối Cách Mạng VN', 3, 3),
(9, 'F4', 'Điền Kinh', 2, 3),
(10, 'C3', 'Kinh Tế Đối Ngoại', 2, 8),
(11, 'TH1', 'Mạng Máy Tính', 3, 1),
(12, 'A4', 'Công nghệ web', 3, 1),
(13, 'C1', 'Cơ Sở Dữ Liệu', 3, 1),
(14, 'X3', 'Xác Xuất Thống Kê', 3, 4),
(15, 'KT7', 'Kỹ Thuật Thủy Văn', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nganhhoc`
--

CREATE TABLE `tb_nganhhoc` (
  `id` int(11) NOT NULL,
  `MaNganh` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `idQuanly` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nganhhoc`
--

INSERT INTO `tb_nganhhoc` (`id`, `MaNganh`, `name`, `idQuanly`) VALUES
(1, '0', 'Công Nghệ Thông Tin', NULL),
(3, '0', 'công trình', NULL),
(4, '0', 'Môi Trường', NULL),
(8, 'KT3', 'Kinh Tế', NULL),
(10, 'E1', 'Vật Liệu', NULL),
(11, 'QT4', 'Quản Trị Kinh Doanh', NULL),
(12, 'D6', 'Cơ Khí', NULL),
(13, 'D6', 'Tự Động Hóa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_quanly`
--

CREATE TABLE `tb_quanly` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `maql` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `idQuantri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_quanly`
--

INSERT INTO `tb_quanly` (`id`, `name`, `maql`, `email`, `password`, `idQuantri`) VALUES
(1, 'Đỗ Quang Tú', '175A01298', 'tudo1999@gmail.com', '$2y$10$j.pGjOESx.8cNAAtex3MluDWRIUnF6Nh/BZ5qJXprZVKeeq1H8LUm', NULL),
(7, 'VINH CHO', '123A09224', 'vinh1999@gmail.com', '$2y$10$E/ZKFr2wn/gh0p0VGHaqke9in6/76SZezQ1riHwf4wws433OcBv02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_quantrivien`
--

CREATE TABLE `tb_quantrivien` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_quantrivien`
--

INSERT INTO `tb_quantrivien` (`id`, `name`, `email`, `password`) VALUES
(1, 'TUDO', 'tudq72@wru.vn', '$2y$10$r2lhPxqUq9LJ5lR.MlgnF.C0.BVt9XwhKIwFtVJDFKTXWiiiWX7D.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_giaovien`
--
ALTER TABLE `tb_giaovien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_giaovien_ibfk_1` (`idQuantri`);

--
-- Indexes for table `tb_giaovien_monhoc`
--
ALTER TABLE `tb_giaovien_monhoc`
  ADD PRIMARY KEY (`idgiaovien`,`idmonhoc`),
  ADD KEY `idmonhoc` (`idmonhoc`);

--
-- Indexes for table `tb_lophocphan`
--
ALTER TABLE `tb_lophocphan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idQuanly` (`idQuanly`);

--
-- Indexes for table `tb_monhoc`
--
ALTER TABLE `tb_monhoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNganhhoc` (`idNganhhoc`);

--
-- Indexes for table `tb_nganhhoc`
--
ALTER TABLE `tb_nganhhoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_nganhhoc_ibfk_1` (`idQuanly`);

--
-- Indexes for table `tb_quanly`
--
ALTER TABLE `tb_quanly`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idQuantri` (`idQuantri`);

--
-- Indexes for table `tb_quantrivien`
--
ALTER TABLE `tb_quantrivien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_giaovien`
--
ALTER TABLE `tb_giaovien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tb_lophocphan`
--
ALTER TABLE `tb_lophocphan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_monhoc`
--
ALTER TABLE `tb_monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_nganhhoc`
--
ALTER TABLE `tb_nganhhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_quanly`
--
ALTER TABLE `tb_quanly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_quantrivien`
--
ALTER TABLE `tb_quantrivien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_giaovien`
--
ALTER TABLE `tb_giaovien`
  ADD CONSTRAINT `tb_giaovien_ibfk_1` FOREIGN KEY (`idQuantri`) REFERENCES `tb_quantrivien` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_giaovien_monhoc`
--
ALTER TABLE `tb_giaovien_monhoc`
  ADD CONSTRAINT `tb_giaovien_monhoc_ibfk_1` FOREIGN KEY (`idgiaovien`) REFERENCES `tb_giaovien` (`id`),
  ADD CONSTRAINT `tb_giaovien_monhoc_ibfk_2` FOREIGN KEY (`idmonhoc`) REFERENCES `tb_monhoc` (`id`);

--
-- Constraints for table `tb_lophocphan`
--
ALTER TABLE `tb_lophocphan`
  ADD CONSTRAINT `tb_lophocphan_ibfk_1` FOREIGN KEY (`idQuanly`) REFERENCES `tb_quanly` (`id`);

--
-- Constraints for table `tb_monhoc`
--
ALTER TABLE `tb_monhoc`
  ADD CONSTRAINT `tb_monhoc_ibfk_1` FOREIGN KEY (`idNganhhoc`) REFERENCES `tb_nganhhoc` (`id`);

--
-- Constraints for table `tb_nganhhoc`
--
ALTER TABLE `tb_nganhhoc`
  ADD CONSTRAINT `tb_nganhhoc_ibfk_1` FOREIGN KEY (`idQuanly`) REFERENCES `tb_quanly` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_quanly`
--
ALTER TABLE `tb_quanly`
  ADD CONSTRAINT `tb_quanly_ibfk_1` FOREIGN KEY (`idQuantri`) REFERENCES `tb_quantrivien` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
