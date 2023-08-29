-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 07:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_users`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_student_info` (IN `s_name` VARCHAR(50), IN `s_address` VARCHAR(100), IN `s_phone` VARCHAR(20))   INSERT INTO student (name , adress, mobile) VALUES (s_name,s_address, s_phone )$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `total_mark` int(5) NOT NULL,
  `student_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `module_name`, `total_mark`, `student_id`) VALUES
(6, 'React', 60, 2),
(7, 'ANgular', 60, 3),
(8, 'Vue', 60, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `adress`, `mobile`) VALUES
(2, 'masum', 'Jatrabari', '01688'),
(3, 'Rojoni', 'mirpur', '01688'),
(4, 'Alauddin', 'Polton', '01688'),
(7, 'MR. ADMIN', 'asdasdsa', '1522'),
(8, 'admin 2', 'kakdkasd', '1555'),
(9, 'admin3', 'asdasdasd', '1212');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `student_delete_trigger` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM result WHERE student_id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `students_info`
-- (See below for the actual view)
--
CREATE TABLE `students_info` (
`id` int(11)
,`name` varchar(50)
,`adress` varchar(100)
,`module_name` varchar(20)
,`total_mark` int(5)
,`student_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` tinyint(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `email`, `password`) VALUES
(1, 'Khayrul Alam', 'khayrulalamdict@gmail.com', '112233'),
(2, 'Rayhan555', 'k.a.rockrayhan555@gmail.com', '112233');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`Name`, `Email`, `Password`) VALUES
('Khayrul Alam', 'khayrulalamdict@gmail.com', '123456'),
('Admin', 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Structure for view `students_info`
--
DROP TABLE IF EXISTS `students_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students_info`  AS SELECT `student`.`id` AS `id`, `student`.`name` AS `name`, `student`.`adress` AS `adress`, `result`.`module_name` AS `module_name`, `result`.`total_mark` AS `total_mark`, `result`.`student_id` AS `student_id` FROM (`student` join `result`) WHERE `student`.`id` = `result`.`student_id``student_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
