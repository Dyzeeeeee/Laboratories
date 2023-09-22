-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2023 at 12:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_section`
--

CREATE TABLE `table_section` (
  `Sid` int NOT NULL,
  `Section` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_section`
--

INSERT INTO `table_section` (`Sid`, `Section`) VALUES
(2, 'F45'),
(9, 'P5'),
(10, 'P6'),
(3, 'S21'),
(4, 'S211'),
(5, 'S22');

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int NOT NULL,
  `StudName` text NOT NULL,
  `StudGender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `StudCourse` text NOT NULL,
  `StudSection` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `StudYear` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `StudName`, `StudGender`, `StudCourse`, `StudSection`, `StudYear`) VALUES
(130, 'Nice', 'Male', 'BSIT', 'f1', 9),
(131, 'dadaqqq', 'Female', 'adsasd', 'S11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_section`
--
ALTER TABLE `table_section`
  ADD PRIMARY KEY (`Sid`),
  ADD UNIQUE KEY `Section` (`Section`);

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `StudSection` (`StudSection`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_section`
--
ALTER TABLE `table_section`
  MODIFY `Sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
