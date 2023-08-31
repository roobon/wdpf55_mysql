-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 08:35 AM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_company_info` (IN `p_company` VARCHAR(100), IN `p_address` VARCHAR(100), IN `p_contact` VARCHAR(50))   INSERT INTO manufacturar(company_name, address, contact) VALUES(p_company, p_address, p_contact)$$

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
(9, 'Xiaomi', 'China', '456 456 7890'),
(10, 'Samsung', 'Vietnam', '987 654 3210'),
(11, 'Toshiba', 'Japan', '0'),
(15, 'Canon', 'Japan', '123'),
(16, 'OPPO', 'India', '987'),
(19, 'Akij', 'Dhaka', '0');

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
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `p_name`, `p_price`, `mid`) VALUES
(21, 'Apple Mobile 7', 65000, 8),
(22, 'Apple Mobile 8', 65000, 8),
(23, 'Apple Mobile 12 Pro', 85000, 8),
(24, 'Apple Mobile 14 Pro', 130000, 8),
(25, 'Xiaomi Redmi 6', 12000, 9),
(26, 'Xiaomi Note 9', 30000, 9),
(27, 'Xiaomi Note 12', 40000, 9),
(28, 'Xiaomi Note 4x', 16000, 9),
(29, 'Samsung Fridge', 56000, 10),
(30, 'Samsung TV', 42000, 10),
(31, 'Samsung Oven', 22000, 10),
(32, 'Samsung Washing Machine', 30000, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_details_view`
-- (See below for the actual view)
--
CREATE TABLE `product_details_view` (
`pid` int(11)
,`p_name` varchar(100)
,`p_price` int(5)
,`company_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `product_details_view`
--
DROP TABLE IF EXISTS `product_details_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_details_view`  AS SELECT `product`.`pid` AS `pid`, `product`.`p_name` AS `p_name`, `product`.`p_price` AS `p_price`, `manufacturar`.`company_name` AS `company_name` FROM (`product` join `manufacturar`) WHERE `product`.`mid` = `manufacturar`.`mid``mid`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturar`
--
ALTER TABLE `manufacturar`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturar`
--
ALTER TABLE `manufacturar`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
