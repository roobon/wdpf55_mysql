-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 08:59 AM
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
-- Database: `wdpf_55`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL,
  `PersonID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(22, 'New', 'Person', 'ffffffff', 'Barisal', 'jjj@gma.com', '123456789', '2023-08-14'),
(23, 'Kayum', 'Abdul', 'Matuail', 'Khulna', 'kay@gma.com', '0000', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `persons2`
--

CREATE TABLE `persons2` (
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
-- Dumping data for table `persons2`
--

INSERT INTO `persons2` (`PersonID`, `LastName`, `FirstName`, `Address`, `City`, `Email_Address`, `PhoneNo`, `DOB`) VALUES
(1, 'Rahman', 'Mizanur', 'Kandapara', 'Narayanganj', 'mizanur1326@gmail.com', '01768139923', NULL),
(4, 'Shubho', 'Mededi Hassan', 'Barisal Sadar', 'Barisal', 'abc@gmail.com', '0189321478', NULL),
(5, 'Hossain', 'Iqbal', 'Badda', 'Dhaka', 'def@gmail.com', '0147896632', NULL),
(16, 'Alauddin', 'Md.', 'Malibag', 'Dhaka', 'alauddin@gmail.com', '(123)456789', '0000-00-00'),
(22, 'New', 'Person', 'ffffffff', 'Barisal', 'jjj@gma.com', '123456789', '0000-00-00'),
(23, 'Kayum', 'Abdul', 'Matuail', 'Khulna', 'kay@gma.com', '0000', '0000-00-00');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mizanur Rahman', 'mizanur1326@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `PersonID` (`PersonID`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `persons2`
--
ALTER TABLE `persons2`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `persons` (`PersonID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
