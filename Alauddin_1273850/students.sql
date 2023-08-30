-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 08:55 AM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Batch` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Hobbies` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Gender`, `DOB`, `Email`, `Batch`, `Address`, `Hobbies`) VALUES
(1, 'MD Alauddin', 'Male', '1995-03-30', 'alauddin@gmail.com', 'WDPF-55', 'south,khilgaon', 'football,tenis,badminton'),
(10, 'Habiba', 'Female', '2000-08-01', 'ha@gmail.com', 'WDPF-55', 'Mohammadpur', 'cricket,football,tenis'),
(11, 'Abdur Rahim', 'Male', '1986-04-17', 'abdur@gmail.com', 'GAVE-54', 'Shahjahanpur', 'cricket,hockey,badminton'),
(12, 'Abdul karim', 'Male', '2023-08-12', 'k@gmail.com', '.NET-53', 'kakraile', 'cricket,hockey,badminton'),
(13, 'nadia', 'Female', '2023-07-31', 'n@gmail.com', 'JAVA-52', 'rampura', 'footbal,hockey'),
(14, 'Masum', 'Male', '1995-12-22', 'mal@gmail.com', 'JAVA-52', 'Jatrabari', 'hockey,badminton');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
