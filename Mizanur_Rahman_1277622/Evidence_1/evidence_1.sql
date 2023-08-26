-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 09:21 AM
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
-- Database: `evidence_1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_studentinfo` (IN `p_name` VARCHAR(50), IN `p_gender` VARCHAR(20), IN `p_batch` VARCHAR(20), IN `p_phone` VARCHAR(20), IN `p_email` VARCHAR(30))   BEGIN 
	insert into students(studentname, gender, batch, phone, email) values (p_name, p_gender, p_batch, p_phone, p_email);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturar`
--

CREATE TABLE `manufacturar` (
  `mid` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturar`
--

INSERT INTO `manufacturar` (`mid`, `company_name`, `address`, `contact`) VALUES
(8, 'Apple', 'China', '456 456 7890'),
(9, 'Xiaomi', 'China', '456 456 7890');

--
-- Triggers `manufacturar`
--
DELIMITER $$
CREATE TRIGGER `after_manufacturar_delete` AFTER DELETE ON `manufacturar` FOR EACH ROW DELETE FROM product WHERE mid=OLD.mid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(5) NOT NULL,
  `mid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturar`
--
ALTER TABLE `manufacturar`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturar`
--
ALTER TABLE `manufacturar`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
