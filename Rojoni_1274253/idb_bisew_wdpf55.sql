-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 07:50 AM
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
-- Database: `idb_bisew_wdpf55`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_studentinfo` (IN `p_name` VARCHAR(50), IN `p_gender` VARCHAR(20), IN `p_dob` DATE, IN `p_email` VARCHAR(50), IN `p_batch` VARCHAR(20), IN `p_address` VARCHAR(100), `p_hobbies` VARCHAR(50))   BEGIN
    insert into students(Name, Gender, Dob, Email, Batch, Address, Hobbies) values (p_name, p_gender, p_dob, p_email, p_batch, p_address, p_hobbies);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `pr_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `pr_id`, `pr_amount`) VALUES
(2, 4, 10),
(3, 5, 10),
(4, 2, 10);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `after_orders_insert` AFTER INSERT ON `orders` FOR EACH ROW UPDATE products
SET 
	ProductAmount = ProductAmount - NEW.pr_amount
	WHERE products.ProductId = NEW.pr_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductAmount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProductName`, `ProductAmount`) VALUES
(1, 'product1', 10),
(2, 'product2', 10),
(3, 'product3', 30),
(4, 'product4', 40),
(5, 'product5', 40),
(6, 'product6', 60),
(7, 'product7', 70);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Batch` varchar(60) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Hobbies` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Gender`, `Dob`, `Email`, `Batch`, `Address`, `Hobbies`) VALUES
(7, 'Mim', '', '0000-00-00', 'mim@gmail.com', '', 'Dhaka', 'football'),
(8, 'Masuma', '', '0000-00-00', 'masum@gmail.com', '', 'Mirpur', 'cricket'),
(9, 'Ratri', 'Female', '2023-08-08', 'ratri@gmail.com', 'wdpf55', 'Mirpur', 'tenis'),
(10, 'Shuvo', 'Male', '2023-08-08', 'shuvo@gmail.com', 'wdpf55', 'Mirpur', 'badminton'),
(11, 'Masuma', 'Female', '2023-08-08', 'masuma@gmail.com', 'wdpf55', 'Mirpur', 'football'),
(12, 'Mahedul', 'Male', '2023-08-08', 'mahedul@gmail.com', 'wdpf55', 'Mirpur', 'cricket'),
(13, 'nijum', 'Female', '0000-00-00', 'nijum@gmail.com', '', 'Dhaka', ''),
(14, 'f', 'Male', '0000-00-00', 'f@gmail.com', '', 'ff', ''),
(20, 'Tumpa', 'Female', '2023-08-08', 'tumpa@gmail.com', 'wdpf54', 'Dhaka', 'football'),
(21, 'Alauddin', 'Male', '1995-10-10', 'alauddin@gmail.com', 'wdpf55', 'Dhaka', 'football'),
(22, 'Masuma', 'Female', '2000-10-10', 'masuma@gmail.com', '', 'Dhaka', '');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `after_student_insert` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO students_audit
SET 
	student_ID = NEW.ID,
	student_name = NEW.Name,
	action = 'insert'
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students_audit`
--

CREATE TABLE `students_audit` (
  `id` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `action` varchar(10) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_audit`
--

INSERT INTO `students_audit` (`id`, `student_ID`, `student_name`, `action`, `date`) VALUES
(1, 20, 'Tumpa', 'insert', '2023-08-23 11:57:13'),
(2, 21, 'Alauddin', 'insert', '2023-08-26 11:04:17'),
(3, 22, 'Masuma', 'insert', '2023-08-26 11:09:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students_audit`
--
ALTER TABLE `students_audit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students_audit`
--
ALTER TABLE `students_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
