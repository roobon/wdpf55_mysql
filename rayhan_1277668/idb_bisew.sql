-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 12:50 PM
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
-- Database: `idb_bisew`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_company_info` (IN `P_company` VARCHAR(50), IN `P_address` VARCHAR(100), IN `P_phone` VARCHAR(20))   INSERT INTO manufacturer (Company_name, Address, Contract)  VALUES (P_company, P_address, P_phone )$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `M_id` int(11) NOT NULL,
  `Company_name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contract` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`M_id`, `Company_name`, `Address`, `Contract`) VALUES
(2, 'Walton ', 'savar', '015555'),
(4, 'SAMSUNG ', 'savar', '015555'),
(6, 'ALAUDDIN sweets', 'misty misty', '420420'),
(7, 'P_company', 'P_address', 'P_phone'),
(8, 'Akiz', 'asdasdasd', '1312'),
(9, 'akiz mama', 'tama tama', '5566');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_delete_manufacture` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM products WHERE M_id=OLD.M_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `manufacturer_info`
-- (See below for the actual view)
--
CREATE TABLE `manufacturer_info` (
`M_id` int(11)
,`Company_name` varchar(100)
,`Address` varchar(100)
,`Contract` varchar(50)
,`P_id` int(11)
,`P_name` varchar(100)
,`P_price` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `P_price` int(5) NOT NULL,
  `M_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_id`, `P_name`, `P_price`, `M_id`) VALUES
(2, 'Sony TV', 35000, 2),
(3, 'Walton TAB', 15000, 2),
(6, 'SAMSUNG A32', 35000, 4),
(8, 'Sony TV', 35000, 2),
(10, 'samsung TAB', 25000, 4);

-- --------------------------------------------------------

--
-- Structure for view `manufacturer_info`
--
DROP TABLE IF EXISTS `manufacturer_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `manufacturer_info`  AS SELECT `manufacturer`.`M_id` AS `M_id`, `manufacturer`.`Company_name` AS `Company_name`, `manufacturer`.`Address` AS `Address`, `manufacturer`.`Contract` AS `Contract`, `products`.`P_id` AS `P_id`, `products`.`P_name` AS `P_name`, `products`.`P_price` AS `P_price` FROM (`manufacturer` join `products`) WHERE `manufacturer`.`M_id` = `products`.`M_id``M_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
