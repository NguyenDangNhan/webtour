-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 03:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoptour`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(20) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `content`) VALUES
('1', 'nhân');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `username` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `ngayxp` varchar(20) NOT NULL,
  `ngayve` varchar(20) NOT NULL,
  `gia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`username`, `id`, `ngayxp`, `ngayve`, `gia`) VALUES
('2', '1', '1', '1', '1'),
('', '10', '10', '10', '0'),
('', '12', '12', '12', '0'),
('', '12', '12', '12', '0'),
('', '12', '12', '12', '0'),
('1', '11', '11', '11', '0'),
('5', '13', '13', '13', '0'),
('5', '7', '7', '7', '0'),
('123', '13', '13', '13', '0'),
('123', '7', '7', '7', '0');

-- --------------------------------------------------------

--
-- Table structure for table `listtour`
--

CREATE TABLE `listtour` (
  `id` varchar(20) NOT NULL,
  `ngayxp` varchar(20) NOT NULL,
  `ngayve` varchar(20) NOT NULL,
  `tomtat` varchar(2000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `gia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listtour`
--

INSERT INTO `listtour` (`id`, `ngayxp`, `ngayve`, `tomtat`, `image`, `gia`) VALUES
('10', '10', '10', 'Tour Du lịch Hà Nội - Yên Tử - Hạ Long - Tràng An - Sa Pa từ Sài Gòn', './Views/image/10.jpg', 0),
('11', '11', '11', 'Tour Du lịch Hà Giang nổi tiếng với phong cảnh hùng vĩ ', './Views/image/11.jpg', 0),
('12', '12', '12', 'Hà Nội - Đền Đô - Yên Tử - Vịnh Hạ Long - Lào Cai - Sa Pa ', './Views/image/12.jpg', 0),
('13', '13', '13', 'Du lịch Đà Nẵng - Ngũ Hành Sơn - Bà Nà - Phố Cổ Hội An từ Sài', './Views/image/13.jpg', 0),
('14', '14', '14', 'Du lịch Đà Nẵng - Huế - Thánh Địa La Vang - Động Phong Nha', './Views/image/14.jpg', 0),
('15', '15', '15', 'Du lịch Đà Nẵng - Huế - Thánh Địa La Vang - Động Thiên Đường', './Views/image/15.jpg', 0),
('16', '24/11', '30/11', 'Du lịch đà nẵng', 'https://i.vdoc.vn/data/image/2015/10/08/tieng-anh-du-lich-co-ban-bai-1.jpg', 1500000),
('19', '', '', 'Du lịch Phú Quốc - Grand World - Checkin Dòng Sông Venice ', './Views/image/19.jpg', 0),
('6', '6', '6', 'Tour Gia đình dành cho 8 khách: Công viên Kỳ Quan Thế Giới ', './Views/image/6.jpg', 0),
('7', '7', '7', 'Nha Trang - Dốc Lết - Tắm Khoáng - Vinpearland - Đà Lạt - QUÊ Garden ', './Views/image/7.jpg', 0),
('8', '8', '8', 'Tour Gia đình giành cho 6 khách: Công viên Kỳ Quan Thế Giới ', './Views/image/8.jpg', 0),
('9', '9', '9', 'Tour Gia đình giành cho 6 khách : Du lịch Tây Ninh  ', './views/image/9.jpg', 0),
('a123', '24/11', '30/11', 'Du lịch đà nẵng', 'https://i.vdoc.vn/data/image/2015/10/08/tieng-anh-du-lich-co-ban-bai-1.jpg', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `passwd`, `full_name`, `phone`, `email`, `level`) VALUES
('1', '1', 'nhân', 1, '', 'ad'),
('123', '123', 'nhân', 378690535, 'nhan241120@gmail.com', 'user'),
('5', '5', '5', 0, '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listtour`
--
ALTER TABLE `listtour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
