-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 08:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf55`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `PersonID` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Email_Address` varchar(50) DEFAULT NULL,
  `PhoneNo` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`PersonID`, `LastName`, `FirstName`, `Address`, `City`, `Email_Address`, `PhoneNo`, `DOB`) VALUES
(1, 'Rahman', 'Mizanur', 'Kandapara', 'Narayanganj', 'mizanur1326@gmail.com', '01768139923', NULL),
(4, 'Shubho', 'Mededi Hassan', 'Barisal Sadar', 'Barisal', 'abc@gmail.com', '0189321478', NULL),
(5, 'Hossain', 'Iqbal', 'Badda', 'Dhaka', 'def@gmail.com', '0147896632', NULL),
(16, 'Alauddin', 'Md.', 'Malibag', 'Dhaka', 'alauddin@gmail.com', '(123)456789', '2023-01-01'),
(23, 'Kayum', 'Abdul', 'Matuail', 'Khulna', 'kayum@gma.com', '0000', '2020-01-01'),
(24, 'Rana', 'Masud', 'Dhanmondi', 'Dhaka', 'masud@gmail.com', '01555', '2023-08-22'),
(25, 'Rabeya', 'akter', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `persons2`
--

CREATE TABLE `persons2` (
  `PersonID` int(11) NOT NULL,
  `FirstName` varchar(25) DEFAULT NULL,
  `LastName` varchar(25) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Email_Address` varchar(50) DEFAULT NULL,
  `PhoneNo` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons2`
--

INSERT INTO `persons2` (`PersonID`, `FirstName`, `LastName`, `Gender`, `Address`, `City`, `Email_Address`, `PhoneNo`, `DOB`) VALUES
(1, 'Mizanur', 'Rahman', 'Male', 'Kandapara', 'Narayanganj', 'mizanur1326@gmail.com', '01768139923', '0000-00-00'),
(4, 'Mededi Hassan', 'Shubho', 'Male', 'Barisal Sadar', 'Barisal', 'abc@gmail.com', '0189321478', '0000-00-00'),
(5, 'Iqbal', 'Hossain', 'Male', 'Badda', 'Dhaka', 'def@gmail.com', '0147896632', '2023-08-22'),
(16, 'Md.', 'Alauddin', 'Male', 'Malibag', 'Dhaka', 'alauddin@gmail.com', '(123)456789', '2023-08-22'),
(23, 'Abdul', 'Kayum', 'Male', 'Matuail', 'Khulna', 'kay@gma.com', '0000', '0000-00-00'),
(24, 'Rabeya', 'Akter', 'Female', 'Sanarpar', 'Narayanganj', 'rabeya@gmail.com', '0000000', '2023-08-22'),
(31, 'Jannatul', 'Ferdous', 'Female', 'Kuril', 'Dhaka', 'jannat@gg.com', '01555555', '2023-08-22'),
(32, 'Jahid ', 'Hasan', 'Male', 'Paltan', 'Dhaka', 'jahid@gmail.com', '0000000', '2023-08-22'),
(33, 'Sakhawa', 'Hossain', 'Male', 'Narayanganj Stadium', 'Narayanganj', 'sakhawat@gmail.com', '0176987', '2023-08-01'),
(34, 'Riadul', 'Islam', 'Male', 'Jatrabari', 'Dhaka', 'riyad@gmail.com', '0000000000', '2023-08-01'),
(35, 'Nadia', 'Sultana', 'Female', 'Demra', 'Dhaka', 'nadia@gmail.com', '0000000000', '2023-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Phone`, `Email`) VALUES
(101, 'Mizanur Rahman', '01768139923', 'mizanur1326@gmail.com'),
(102, 'Mehedi Hasan', '0168741', 'mehedi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`PersonID`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`),
  ADD KEY `FirstName` (`FirstName`);

--
-- Indexes for table `persons2`
--
ALTER TABLE `persons2`
  ADD PRIMARY KEY (`PersonID`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`),
  ADD KEY `FirstName` (`FirstName`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `persons2`
--
ALTER TABLE `persons2`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
