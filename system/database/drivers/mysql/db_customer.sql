-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 07:38 PM
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
(9, 'Eveline', 'Rau', 'Dell', '0000-00-00', '04161234587'),
(10, 'Destany Windler', 'Zemlak', 'Reyes Dibbert', '1990-10-10', '462-874-4964');

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
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `NickName` varchar(100) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `PostalCode` int(32) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `EducationalLevel` varchar(100) NOT NULL,
  `Institution` varchar(255) NOT NULL,
  `Major` varchar(255) NOT NULL,
  `GraduateDate` date NOT NULL,
  `ImgProfile` varchar(255) NOT NULL,
  `ImgName` varchar(100) NOT NULL,
  `ImgType` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customerinfo`
--

INSERT INTO `tbl_customerinfo` (`Customer_id`, `FirstName`, `LastName`, `NickName`, `PhoneNumber`, `Email`, `Address`, `Address2`, `City`, `Province`, `Country`, `PostalCode`, `DateOfBirth`, `EducationalLevel`, `Institution`, `Major`, `GraduateDate`, `ImgProfile`, `ImgName`, `ImgType`) VALUES
('608843d72733a', 'Columbus Torphy', 'Lowe', 'Monte Trantow', '958-911-1874', 'your.email+faker91638@gmail.com', '50279 Felix Forges', '', 'West Noelside', 'Ohio', 'Cayman Islands', 507, '0000-00-00', 'Corporate Quality Facilitator', 'Chief Data Coordinator', 'Central Creative Consultant', '0000-00-00', 'images.jpg', '', ''),
('608845b21c1c6', 'Isidro Bechtelar', 'Powlowski', 'Adriel Greenholt', '876-704-2600', 'your.email+faker60303@gmail.com', '92745 Becker Underpass', 'Leannon - Schaden', 'Carlieberg', 'Delaware', 'Bangladesh', 502, '0000-00-00', 'District Configuration Supervisor', 'Fahey Group', 'Direct Markets Strategist', '2021-09-04', 'ZT6F8B3T.jpg', '', '');

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
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
