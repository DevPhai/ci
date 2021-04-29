-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 09:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `infomation`
--

CREATE TABLE `infomation` (
  `id` int(32) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `NickName` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infomation`
--

INSERT INTO `infomation` (`id`, `FirstName`, `LastName`, `NickName`, `DateOfBirth`, `PhoneNumber`) VALUES
(1, '1', '', '', '0000-00-00', ''),
(2, 'ฐาปนา', 'ปะละศรี', '', '0000-00-00', ''),
(3, 'ฐาปนา', 'ปะละศรี', 'ไผ่', '0000-00-00', '0876615414'),
(4, 'ฐาปนา', 'ปะละศรี', 'ไผ่', '0000-00-00', '0876615414'),
(5, 'ฐาปนา', 'ปะละศรี', 'ไผ่', '0000-00-00', '0876615414'),
(6, 'กิตติธร', 'ปะละศรี', 'แผน', '0000-00-00', '0876615414'),
(7, 'นัม', 'โดซาน', 'โดซาน', '0000-00-00', '0876615414'),
(8, 'สุนันทา', 'พันธ์เดช', 'แนน', '1993-08-27', '0876614458'),
(9, 'Eveline', 'Rau', 'Dell', '0000-00-00', '04161234587');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customerinfo`
--

CREATE TABLE `tbl_customerinfo` (
  `Customer_id` varchar(50) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `NickName` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `PostalCode` int(32) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `EducationalLevel` varchar(100) DEFAULT NULL,
  `Institution` varchar(255) DEFAULT NULL,
  `Major` varchar(255) DEFAULT NULL,
  `GraduateDate` date DEFAULT NULL,
  `ImgProfile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customerinfo`
--

INSERT INTO `tbl_customerinfo` (`Customer_id`, `FirstName`, `LastName`, `NickName`, `PhoneNumber`, `Email`, `Address`, `Address2`, `City`, `Province`, `Country`, `PostalCode`, `DateOfBirth`, `EducationalLevel`, `Institution`, `Major`, `GraduateDate`, `ImgProfile`) VALUES
('608a4345dca92', 'ฐาปนา', 'ปะละศรี', 'ไผ่', '0855287439', 'thapana10@gmail.com', 'ุ6 ม.4 ต.เวียงยอง', 'vip', 'เมือง', 'ลำพูน', 'ไทย', 51000, '1990-10-10', 'ป ตรี', 'ราชมงคลล้านนา', 'วิศวะคอมพิวเตอร์', '2021-05-06', 'featuresOCR.png'),
('608a48b7653ef', 'สุนันทา', 'พันธ์เดช', 'Blaze', '0855287439', 'thapana10@gmail.com', '132/272 ม. 8 ต.สาริกา อ.เมืองนครนายก', 'vip', 'เมืองนครนายก', 'นครนายก', 'ไทย', 26000, '2021-04-28', 'National Directives Facilitator', 'Chief Data Coordinator', 'Central Creative Consultant', '2021-04-21', 'Logo-myCRM-300x130.png'),
('608a586a8cfab', 'สุนันทา777', 'พันธ์เดช', 'Ashlee', '0855287439', 'thapana10@gmail.com', '132/272 ม. 8 ต.สาริกา อ.เมืองนครนายก', 'vip', 'เมืองนครนายก', 'นครนายก', 'ไทย', 26000, '2021-05-06', 'National Directives Facilitator', 'Slovenia', 'Direct Markets Strategist', '2021-05-05', 'messageImage_1577950983036.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infomation`
--
ALTER TABLE `infomation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customerinfo`
--
ALTER TABLE `tbl_customerinfo`
  ADD PRIMARY KEY (`Customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infomation`
--
ALTER TABLE `infomation`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
