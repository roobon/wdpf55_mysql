-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 08:52 AM
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
-- Database: `wdpf55_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `ordernumber` int(11) NOT NULL,
  `personid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`person_id`, `LastName`, `FirstName`, `gender`, `Address`, `City`, `email_address`, `dob`) VALUES
(1, 'Hossain', 'Masum', 'Male', 'Jatrabari', 'Khulna', 'masum@gmail.com', '2023-08-14'),
(2, 'Sadid', 'Hasnain', 'Male', 'DIT Project, Merul Badda', 'Dhaka', 'sadid@gmail.com', '2023-08-15'),
(3, 'Shubho', 'Mehedi Hasan', 'Male', 'Polton', 'Khulna', 'mehedishubho@gmail.com', '2023-08-15'),
(8, 'Rahman', 'Mizanur', 'Male', 'Sanarpar', 'Dhaka', 'mizanur@gmail.com', '2023-08-04'),
(21, 'Sakib', 'Nazmus', 'Male', 'Rampura', 'Dhaka', 'sakib@gmail.com', '2023-08-01'),
(22, 'Haque', 'Mahaduil', 'Male', 'Mirpur', 'Dhaka', 'mahadi@gmail.com', '2023-06-28'),
(28, 'Sakib', 'Masum', 'Male', 'dee', 'Lakshmipur', 'emran@gmail.com', '2023-08-23'),
(30, 'Tamima', 'Tasfia', 'Female', 'Kakrail', 'Dhaka', 'tasfia@gmail.com', '2023-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `persons1`
--

CREATE TABLE `persons1` (
  `ID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `City` varchar(255) DEFAULT 'Dhaka'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `email_address` varchar(100) DEFAULT NULL,
  `dob` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons2`
--

INSERT INTO `persons2` (`PersonID`, `LastName`, `FirstName`, `Address`, `City`, `email_address`, `dob`) VALUES
(1, 'Hossain', 'Masum', 'Mirpur', 'Khulna', 'masum125@gmail.com', '00:00:00'),
(2, 'Sadid', 'Hasnain', 'DIT Project, Merul Badda', 'Khulna', 'sadid@gmail.com', '00:00:00'),
(3, 'Shubho', 'Mehedi Hasan', 'Polton', 'Khulna', 'mehedishubho@gmail.com', '00:00:00'),
(8, 'Rahman', 'Mizanur', 'Sanarpar', 'Dhaka', 'mizanur@gmail.com', '00:00:00'),
(21, 'Sakib', 'Nazmus', 'Rampura', 'Dhaka', 'sakib@gmail.com', '00:00:00'),
(22, 'Haque', 'Mahaduil', 'Mirpur', 'Dhaka', 'mahadi@gmail.com', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Masum Hossin', 'masum@gmail.com', 'd76f375ed95c85499d966c5b90be90a9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `personid` (`personid`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`person_id`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD KEY `firstnameindex` (`FirstName`,`LastName`);

--
-- Indexes for table `persons2`
--
ALTER TABLE `persons2`
  ADD PRIMARY KEY (`PersonID`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD KEY `firstnameindex` (`FirstName`,`LastName`);

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
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `persons2`
--
ALTER TABLE `persons2`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`personid`) REFERENCES `persons` (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
