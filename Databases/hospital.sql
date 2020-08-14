-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 07:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `sName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `Gender` char(1) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `maritial` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `problem` varchar(50) NOT NULL,
  `day` date NOT NULL,
  `clock` time(6) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fName`, `sName`, `lName`, `Gender`, `adress`, `maritial`, `phone`, `email`, `problem`, `day`, `clock`, `status`) VALUES
(14, 'Abdul', 'Hafidh', 'Ali', 'M', 'kwamchina', 'Single', '0778016802', 'abdulhafidh2708@gmai', 'eyes', '2020-08-12', '10:00:00.000000', 'Accepted'),
(18, 'Iptisam', 'Khamis', 'Foum', 'F', 'Baghani', 'Single', '1234567890', 'ipty@gmail.com', 'walk', '2020-08-25', '05:29:00.000000', 'Pending'),
(19, 'Raya ', 'Idrisa', 'Ahmada', 'F', 'kiembesamaki', 'Married', '123456', 'raya@gmail.com', 'students', '2020-08-18', '17:37:00.000000', 'Accepted'),
(21, 'ghjhkjk', 'dsdfdghhjjk', 'xgfhgh\"\'>?', 'M', 'gjjklkl', 'Married', '09887ghhj65', 'eythjk@hjhjgh', 'homa', '2020-08-22', '00:00:00.000000', 'Decline');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `startTime` time(6) NOT NULL,
  `endTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `name`, `startTime`, `endTime`) VALUES
(2, 'noon', '14:00:00.000000', '15:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `secondName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialized` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstName`, `secondName`, `lastName`, `gender`, `address`, `phone`, `email`, `specialized`, `username`) VALUES
(6, 'iptisam', 'khamis', 'foum', 'Female', 'Bakhan', '0778016802', 'ipty@gmail.com', 'surgery', 'Ipti'),
(8, 'Abdulhafidh', 'Ali', 'Abdulla', 'Male', 'KWAMCHINA', '0778016802', 'abdulhafidh2708@gmail.com', 'medicine', 'Triple A'),
(12, 'ADAM', 'HASSAN', 'JUMA', 'Male', 'MBARALI', '123456', 'abdulhafidh2708@gmail.com', 'CDC', 'ADAM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('', '', '0'),
('ADAM', '12345', 'Doctor'),
('Ipti', '12345', 'Admin'),
('Triple A', 'BITAM', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
