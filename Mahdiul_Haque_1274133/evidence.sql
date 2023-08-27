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
-- Database: `evidence`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_company_info` (IN `p_company` VARCHAR(50), IN `p_address` VARCHAR(100), IN `p_phone` VARCHAR(100))   INSERT INTO manufacturer (company_name, address, contact_no) VALUES(p_company, p_address, p_phone)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `m_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`m_id`, `company_name`, `address`, `contact_no`) VALUES
(5, 'redmi', 'philipines', '015326987'),
(7, 'nestle', 'shahbagh', '015895655'),
(8, 'onetel', 'dhalpur', '015632598'),
(10, 'walton', 'dhalpur', '0156982563'),
(11, 'walton', 'dhalpur', '0156982563'),
(12, 'walton', 'dhalpur', '0156982563'),
(14, 'samsung', 'narayangonj', '01523698741'),
(15, 'pran', 'keranigonj', '01563278941'),
(16, 'minister', 'tejgaon', '01523698741'),
(18, 'aci', 'gazipur', '01523678915'),
(19, 'pran', 'rajdhani', '01563278945');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_delete_company` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE m_id=OLD.m_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `m_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `product_name`, `price`, `m_id`) VALUES
(5, 'r_455', 15600, 5),
(11, 'r_4567', 3000, 5),
(12, 'r_47', 18900, 5),
(13, 'r_425', 24600, 5),
(18, 'ne_458', 50000, 7),
(19, 'ne_5454', 1000, 7),
(20, 'on_444', 45000, 8),
(21, 'n_44', 1500, 7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list_view`
-- (See below for the actual view)
--
CREATE TABLE `product_list_view` (
`p_id` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`m_id` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `product_list_view`
--
DROP TABLE IF EXISTS `product_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list_view`  AS SELECT `product`.`p_id` AS `p_id`, `product`.`product_name` AS `product_name`, `product`.`price` AS `price`, `product`.`m_id` AS `m_id` FROM (`product` join `manufacturer`) WHERE `manufacturer`.`m_id` = `product`.`m_id``m_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
