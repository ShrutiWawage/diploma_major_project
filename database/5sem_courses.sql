-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 10:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `5sem_courses`
--

CREATE TABLE `5sem_courses` (
  `c_name` varchar(50) NOT NULL,
  `c_code` varchar(30) NOT NULL,
  `theory_max` int(11) NOT NULL,
  `theory_min` int(11) NOT NULL,
  `pa_max` int(11) NOT NULL,
  `pa_min` int(11) NOT NULL,
  `prac_max` int(11) NOT NULL,
  `prac_min` int(11) NOT NULL,
  `oral_max` int(11) NOT NULL,
  `oral_min` int(11) NOT NULL,
  `c_credit` int(11) NOT NULL,
  `theory_hour` int(11) NOT NULL,
  `online_ex` varchar(50) NOT NULL,
  `sem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `5sem_courses`
--

INSERT INTO `5sem_courses` (`c_name`, `c_code`, `theory_max`, `theory_min`, `pa_max`, `pa_min`, `prac_max`, `prac_min`, `oral_max`, `oral_min`, `c_credit`, `theory_hour`, `online_ex`, `sem`) VALUES
('Python', 'CC5421', 28, 28, 30, 10, 40, 25, 30, 10, 7, 6, 'False', '5th_Semester'),
('Cloud Computing', 'CM5460', 70, 28, 30, 10, 20, 11, 30, 15, 9, 16, 'False', '5th_Semester'),
('php', 'FC6738', 78, 35, 30, 15, 30, 10, 20, 5, 8, 10, 'False', '5th_Semester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `5sem_courses`
--
ALTER TABLE `5sem_courses`
  ADD PRIMARY KEY (`c_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
