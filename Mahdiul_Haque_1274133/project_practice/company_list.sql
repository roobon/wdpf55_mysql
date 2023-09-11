-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 06:16 PM
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
-- Database: `factory_detalis`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

CREATE TABLE `company_list` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_email` varchar(60) NOT NULL,
  `company_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_list`
--

INSERT INTO `company_list` (`company_id`, `company_name`, `company_address`, `company_email`, `company_phone`) VALUES
(3, 'pran', 'azimpur', 'pran@gmail.com', '01696312154'),
(4, 'minister', 'gazipur', 'minister@gmail.com', '01712345678'),
(5, 'fresh', 'azimpur', 'fresh@gmail.com', '01353678945'),
(6, 'haque', 'shahbagh', 'haque@gmail.com', '01853678945');

--
-- Triggers `company_list`
--
DELIMITER $$
CREATE TRIGGER `after_company_delete` AFTER DELETE ON `company_list` FOR EACH ROW DELETE FROM employee_list WHERE company_id = OLD.company_id
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_list`
--
ALTER TABLE `company_list`
  ADD PRIMARY KEY (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_list`
--
ALTER TABLE `company_list`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
