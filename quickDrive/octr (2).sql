-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 08:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `octr`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Request_id` int(10) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_subject` varchar(100) NOT NULL,
  `cust_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help_and_support`
--

CREATE TABLE `help_and_support` (
  `Request_id` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Issue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_driver`
--

CREATE TABLE `registered_driver` (
  `driverUid` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `mobileNumber` varchar(10) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `driverUserName` varchar(50) NOT NULL,
  `password` varchar(400) NOT NULL,
  `IDNumber` varchar(50) NOT NULL,
  `vehicleType` varchar(50) NOT NULL,
  `vehicleRegNumber` varchar(50) NOT NULL,
  `drivingLicenseNo` varchar(50) NOT NULL,
  `lastName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_driver`
--

INSERT INTO `registered_driver` (`driverUid`, `firstName`, `dateOfBirth`, `mobileNumber`, `eMail`, `driverUserName`, `password`, `IDNumber`, `vehicleType`, `vehicleRegNumber`, `drivingLicenseNo`, `lastName`) VALUES
(1, 'Tharindu', '0000-00-00', '', 'Hash@gmail.com', 'Tharindu1', '$2y$10$D0R2Gax54SEL9VFPJSgTxO.M7w5W9srxpfgDaB4074r.0Ik89qT0y', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `uId` int(20) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `mobileNumber` varchar(50) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userUId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`uId`, `firstName`, `lastName`, `dateOfBirth`, `mobileNumber`, `eMail`, `password`, `userUId`) VALUES
(1, 'Amasha', '', '0000-00-00', '', 'ama123@gmail.com', '$2y$10$9rU7FXYQBuwlX', 'Amasha'),
(2, 'Teshan', 'Gamage', '2003-10-07', '0711234567', 'teshan123@gmail.com', '$2y$10$Od3wP8GAEg0bxXVMBVUnQ.XSQfFLKosaHE3u182pL7RQ/uHqq9Vju', 'Teshan'),
(3, 'Hashini', '', '0000-00-00', '', 'Hash@gmail.com', '$2y$10$EaeJTcpCtGnG5IJyuInm7uXtFJqN2S4k34xYO5y72gRnsX0MxMWNW', 'Hashini1'),
(4, 'Samadhi', '', '0000-00-00', '', 'sam@gmail.com', '$2y$10$wi0ES5K9M3pLrQFPhb3/VuZStHbxpX0SMTLLkO04e8NjMKGrxYhfO', 'Samadhi'),
(5, 'Amal', '', '0000-00-00', '', 'amal@gmail.com', '$2y$10$gU8NfS/ELMkpW5Jv2eG4dOAxGv2m4OG/YimtxwDXSGHBPp0wtLhAq', 'Amal123'),
(9, 'Nimali', '', '0000-00-00', '', 'nimali@gmail.com', '$2y$10$.kaKmfnEPvmtvdWZjXJEguAGu./5s2I7s9axXTboe98nxckubRSim', 'Nimali'),
(10, 'Sam', '', '0000-00-00', '', '12/09/1997', '$2y$10$bkz/7vzTX4JYJv7.Vzz3N.OOS..QdSD/8L.6nLxJmZv/Ead7ifsea', 'Sam'),
(11, 'Nimesha', '', '0000-00-00', '', 'nimesha@gmail.com', '$2y$10$kihVo4y7oKML9BUl8qIg4eBY8wDwUDQjyF35up76EEPTupEjVU.vi', 'Nimesha');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Request_id` int(10) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `DriverID` varchar(20) NOT NULL,
  `Review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Request_id`);

--
-- Indexes for table `help_and_support`
--
ALTER TABLE `help_and_support`
  ADD PRIMARY KEY (`Request_id`);

--
-- Indexes for table `registered_driver`
--
ALTER TABLE `registered_driver`
  ADD PRIMARY KEY (`driverUid`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`uId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `help_and_support`
--
ALTER TABLE `help_and_support`
  MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registered_driver`
--
ALTER TABLE `registered_driver`
  MODIFY `driverUid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `uId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
