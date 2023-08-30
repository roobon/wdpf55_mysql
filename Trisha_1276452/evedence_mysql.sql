-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 09:06 AM
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
-- Database: `evedence_mysql`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_company_info` (IN `company_name` VARCHAR(100), IN `address` VARCHAR(100), IN `phone` INT(11))   INSERT INTO manufacture ( company_name,adress,contact) VALUE (company_name,adress,phone)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `mid` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`mid`, `company_name`, `address`, `contact`) VALUES
(1, 'Walton', 'savar', '09988765756'),
(4, 'Arong', 'cumilla', '09988765756');

--
-- Triggers `manufacture`
--
DELIMITER $$
CREATE TRIGGER `after_delete_company` AFTER DELETE ON `manufacture` FOR EACH ROW DELETE FROM product WHERE  mid=OLD.mid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `manufacture_product_view`
-- (See below for the actual view)
--
CREATE TABLE `manufacture_product_view` (
`pid` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`company_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `mid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `product_name`, `price`, `mid`) VALUES
(1, 'meril powder', 3455, 1),
(5, 'Sony fridge', 46700, 4),
(7, 'Sony fridge', 46700, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list_view`
-- (See below for the actual view)
--
CREATE TABLE `product_list_view` (
`pid` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`company_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `manufacture_product_view`
--
DROP TABLE IF EXISTS `manufacture_product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `manufacture_product_view`  AS SELECT `product`.`pid` AS `pid`, `product`.`product_name` AS `product_name`, `product`.`price` AS `price`, `manufacture`.`company_name` AS `company_name` FROM (`product` join `manufacture`) WHERE `manufacture`.`mid` = `product`.`mid``mid`  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list_view`
--
DROP TABLE IF EXISTS `product_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list_view`  AS SELECT `product`.`pid` AS `pid`, `product`.`product_name` AS `product_name`, `product`.`price` AS `price`, `manufacture`.`company_name` AS `company_name` FROM (`manufacture` join `product`) WHERE `manufacture`.`mid` = `product`.`mid``mid`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
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
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
