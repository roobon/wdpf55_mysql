-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 07:53 PM
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
-- Database: `isdb_bisew`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_studentinfo` (IN `p_name` VARCHAR(50), IN `p_address` VARCHAR(100), IN `p_mobile` INT(20))   insert into students(Name, Address, Mobile) values (p_name, p_address, p_mobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` int(11) NOT NULL,
  `Module_name` varchar(20) NOT NULL,
  `Total_mark` int(5) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `Module_name`, `Total_mark`, `student_id`) VALUES
(2, 'Bootsrap Template', 98, 7),
(4, 'HTML Tamplate', 98, 7),
(5, 'JavaScript Basic', 95, 1),
(6, 'JavaScript Function', 98, 3),
(7, 'For Loop', 95, 2),
(8, 'PHP Logices', 98, 4),
(9, 'JavaScript OOP', 95, 6),
(10, 'PHP OOP', 98, 5),
(11, 'PHP CRUD', 95, 5),
(12, 'OOP DB_Config', 98, 5),
(13, 'Backend Devoloper', 100, 9),
(14, 'Professional program', 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Address`, `Mobile`) VALUES
(1, 'Masum ', 'Jatrabari', '0198745346'),
(2, 'Khayrul Alam Rayhan', 'Mirpur', '01425789637'),
(3, 'Mizhanur Rahman ', 'Narayangangh', '0198745346'),
(4, 'Rayhan', 'Mirpur-10', '01325789637'),
(5, 'Ali Ibne Imran ', 'Nandhipara', '0188745346'),
(6, 'Mahdiul Hoque', 'Gopibagh', '01625789637'),
(7, 'Sagar ', 'South Khilgaon', '0178745346'),
(9, 'Afra Jahan Aynan', 'Khilgaon', '01715116854'),
(10, 'Afra Jahan Aynan', 'khilgaon', '01776540674'),
(11, 'K M Forid', 'Jante chai na', '1815116854');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `delete_student` AFTER DELETE ON `students` FOR EACH ROW DELETE FROM result WHERE student_id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `students_result_view`
-- (See below for the actual view)
--
CREATE TABLE `students_result_view` (
`ID` int(11)
,`Name` varchar(50)
,`Address` varchar(100)
,`Mobile` varchar(20)
,`Module_name` varchar(20)
,`Total_mark` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Masum ', 'masum@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'alauddin ', 'alauddin@gmail.com', 'c6a378510e0ec1d7809694ebf1d5579f37b1642e'),
(3, 'kicchuna ', 'ki@gmail.com', '7a4e21304ec7466a070c1dcf47391fb2a375b367');

-- --------------------------------------------------------

--
-- Structure for view `students_result_view`
--
DROP TABLE IF EXISTS `students_result_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students_result_view`  AS SELECT `students`.`ID` AS `ID`, `students`.`Name` AS `Name`, `students`.`Address` AS `Address`, `students`.`Mobile` AS `Mobile`, `result`.`Module_name` AS `Module_name`, `result`.`Total_mark` AS `Total_mark` FROM (`students` join `result`) WHERE `students`.`ID` = `result`.`student_id``student_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
