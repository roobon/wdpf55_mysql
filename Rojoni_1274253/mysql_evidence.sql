-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 08:04 AM
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
-- Database: `mysql_evidence`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_company_info` (IN `p_company` VARCHAR(100), IN `p_address` VARCHAR(150), IN `p_phone` VARCHAR(200))   INSERT INTO manufacturer(company_name,address,contact) VALUES (p_company,p_address,p_phone)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `mid` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(90) NOT NULL,
  `contact` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`mid`, `company_name`, `address`, `contact`) VALUES
(3, 'WALTON', 'Mirpur', '0134556'),
(5, 'SAMSUNG', 'Dhaka', '56567645'),
(6, 'Realme', 'Dhaka', '56567645'),
(7, 'Nokia', 'Dhaka', '56567645'),
(8, 'dddd', 'ffff', '2023-08-21'),
(9, 'dddd', 'ffff', '2023-08-21'),
(10, 'dddd', 'ffff', '2023-08-21'),
(11, 'tttttttt', 'rrrrrrrrrrr', 'llllllll'),
(12, 'Kohinur', 'Dhaka', '12232'),
(13, 'Kohinur', 'Dhaka', '12232'),
(14, 'cute', 'Mirpur', '555'),
(15, 'Akiz', 'Mirpur', '123'),
(16, '$p_company', '$p_address', '$p_phone'),
(17, '$p_company', '$p_address', '$p_phone'),
(18, '$p_company', '$p_address', '$p_phone'),
(19, '$p_company', '$p_address', '$p_phone'),
(20, 'p_company', 'p_address', 'p_phone'),
(21, 'Rose', 'Rajbari', '123');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_delete_company` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product  WHERE mid=OLD.mid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` int(5) NOT NULL,
  `mid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `p_name`, `p_price`, `mid`) VALUES
(2, 'Meril Powder', 30000, 2),
(3, 'Sony TV', 20000, 3),
(5, 'TV', 30000, 5),
(6, 'Meril Fan', 60000, 6),
(7, 'Sony Bed', 30000, 7),
(8, 'MerilChair', 30000, 8),
(9, 'Sony Almirah', 30000, 9);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list_view`
-- (See below for the actual view)
--
CREATE TABLE `product_list_view` (
`pid` int(11)
,`p_name` varchar(200)
,`p_price` int(5)
,`company_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `product_list_view`
--
DROP TABLE IF EXISTS `product_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list_view`  AS SELECT `product`.`pid` AS `pid`, `product`.`p_name` AS `p_name`, `product`.`p_price` AS `p_price`, `manufacturer`.`company_name` AS `company_name` FROM (`product` join `manufacturer`) WHERE `manufacturer`.`mid` = `product`.`mid` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
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
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
