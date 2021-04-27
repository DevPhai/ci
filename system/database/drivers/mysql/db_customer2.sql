-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 12:47 PM
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
  `Customer_id` int(64) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `NickName` varchar(100) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
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
  `ImgProfile` binary(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- AUTO_INCREMENT for table `tbl_customerinfo`
--
ALTER TABLE `tbl_customerinfo`
  MODIFY `Customer_id` int(64) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
