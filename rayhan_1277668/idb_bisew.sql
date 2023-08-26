-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 12:32 PM
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
(3, 'SONY ', 'savar', '015555'),
(4, 'SAMSUNG ', 'savar', '015555'),
(5, 'LG ', 'savar', '015555');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_delete_manufacture` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM products WHERE M_id=OLD.M_id
$$
DELIMITER ;

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
(5, 'SONY LED TV', 45000, 3),
(6, 'SAMSUNG A32', 35000, 4),
(7, 'LG Selai Machine', 25000, 5),
(8, 'Sony TV', 35000, 2),
(9, 'LG butterfly', 45000, 5),
(10, 'samsung TAB', 25000, 4);

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
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
