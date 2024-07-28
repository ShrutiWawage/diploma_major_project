-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 06:13 PM
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
('Adv.Java', 'CM54001', 70, 28, 30, 10, 50, 25, 10, 5, 7, 11, 'False', '5th_Semester'),
('Computer security', 'CM5422', 70, 28, 20, 15, 0, 0, 0, 0, 7, 14, 'False', '5th_Semester'),
('software_testing', 'FC4650', 70, 28, 30, 15, 40, 20, 20, 5, 7, 11, 'False', '5th_Semester'),
('php', 'FC6738', 75, 35, 30, 15, 30, 10, 20, 5, 8, 10, 'False', '5th_Semester');

-- --------------------------------------------------------

--
-- Table structure for table `6sem_courses`
--

CREATE TABLE `6sem_courses` (
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
-- Dumping data for table `6sem_courses`
--

INSERT INTO `6sem_courses` (`c_name`, `c_code`, `theory_max`, `theory_min`, `pa_max`, `pa_min`, `prac_max`, `prac_min`, `oral_max`, `oral_min`, `c_credit`, `theory_hour`, `online_ex`, `sem`) VALUES
('Python', 'CC5421', 28, 28, 30, 10, 40, 25, 30, 10, 7, 6, 'False', '6th_Semester'),
('Linux_Os', 'CM4404', 70, 28, 30, 10, 50, 15, 30, 10, 7, 8, 'False', '6th_Semester');

-- --------------------------------------------------------

--
-- Table structure for table `clg_admin`
--

CREATE TABLE `clg_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clg_admin`
--

INSERT INTO `clg_admin` (`id`, `username`, `password`, `profile`) VALUES
(1, 'abhay', '1', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_send` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem_status`
--

CREATE TABLE `sem_status` (
  `id` int(11) NOT NULL,
  `teacher_n` varchar(50) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `date_reg` varchar(50) NOT NULL,
  `sem_status` varchar(40) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_status`
--

INSERT INTO `sem_status` (`id`, `teacher_n`, `semester`, `course`, `date_reg`, `sem_status`) VALUES
(16, 'Torney', '6th_semester', 'Python', '2023-04-14', 'Completed'),
(17, 'belsare', '6th_semester', 'Linux_Os', '2023-04-14', 'Completed'),
(18, 'Torney', '5th_semester', 'php', '2023-04-16', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `t_password` varchar(50) NOT NULL,
  `date_reg` varchar(50) NOT NULL,
  `profile` varchar(80) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `email`, `t_password`, `date_reg`, `profile`, `status`) VALUES
(8, 'Torney', 'torney@gmail.com', '1', '2023-04-09 18:22:16', 'download.jpg', 'Approved'),
(9, 'belsare', 'belsare@gmail.com', '1', '2023-04-09 20:28:51', '', 'Approved'),
(10, 'Satav', 'satav@gmail.com', '1', '2023-04-09 20:30:04', '', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `5sem_courses`
--
ALTER TABLE `5sem_courses`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `6sem_courses`
--
ALTER TABLE `6sem_courses`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `clg_admin`
--
ALTER TABLE `clg_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_status`
--
ALTER TABLE `sem_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course` (`course`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clg_admin`
--
ALTER TABLE `clg_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem_status`
--
ALTER TABLE `sem_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
