-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 09:46 PM
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
-- Database: `y_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `linux_os`
--

CREATE TABLE `linux_os` (
  `id_code` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `pa1` varchar(30) NOT NULL,
  `pa2` varchar(30) NOT NULL,
  `avg` varchar(50) NOT NULL,
  `microproject` varchar(50) NOT NULL,
  `pa30` varchar(30) NOT NULL,
  `ext` varchar(30) NOT NULL,
  `tw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `linux_os`
--

INSERT INTO `linux_os` (`id_code`, `stud_name`, `pa1`, `pa2`, `avg`, `microproject`, `pa30`, `ext`, `tw`) VALUES
('20CM001', 'AWACHAR ABHAY SANTOSH', '14', '19', '17', '9', '26', '', '22'),
('20CM002', 'BOCHARE CHETAN LAXAMANRAO', '14', '19', '17', '9', '26', '', '23'),
('20CM003', 'BORODE SHREYA VILAS', '14', '19', '20', '10', '30', '', '24'),
('20CM004', 'CHAITANYA VIJAY PARASKAR', '14', '19', '20', '10', '30', '', '22'),
('20CM005', 'CHAUDHARY DHANSHRI VISHWASRAO', '14', '19', '18', '9', '27', '', '22'),
('20CM007', 'DESHMUKH PURVA MANGESH', '14', '19', '20', '9', '29', '', '22'),
('20CM008', 'DESHMUKH SRUSHTI MANOJ', '14', '19', '10', '9', '19', '', '22'),
('20CM009', 'DHOKE DIVYA PANJABRAO', '14', '19', '18', '9', '27', '', '22'),
('20CM010', 'GAJBIYE SHREYASH', '14', '19', '20', '9', '29', '', '22'),
('20CM011', 'GAYAKWAD SAKSHI TUKARAM', '14', '19', '20', '9', '29', '', '22');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id_code` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `pa1` varchar(30) NOT NULL,
  `pa2` varchar(30) NOT NULL,
  `avg` varchar(50) NOT NULL,
  `microproject` varchar(50) NOT NULL,
  `pa30` varchar(30) NOT NULL,
  `ext` varchar(30) NOT NULL,
  `tw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id_code`, `stud_name`, `pa1`, `pa2`, `avg`, `microproject`, `pa30`, `ext`, `tw`) VALUES
('20CM001', 'AWACHAR ABHAY SANTOSH ', '14', '18', '19', '10', '22', ' ', '24'),
('20CM002', 'BOCHARE CHETAN LAXAMANRAO', '14', '19', '20', '9', '23', '', '23'),
('20CM003', 'BORODE SHREYA VILAS', '14', '19', '20', '10', '30', '', '24'),
('20CM004', 'CHAITANYA VIJAY PARASKAR', '14', '19', '20', '10', '30', '', '22'),
('20CM005', 'CHAUDHARY DHANSHRI VISHWASRAO', '14', '19', '18', '9', '27', '', '22'),
('20CM007', 'DESHMUKH PURVA MANGESH', '14', '19', '20', '9', '29', '', '22'),
('20CM008', 'DESHMUKH SRUSHTI MANOJ', '14', '19', '10', '9', '19', '', '22'),
('20CM009', 'DHOKE DIVYA PANJABRAO', '14', '19', '18', '9', '27', '', '22'),
('20CM010', 'GAJBIYE SHREYASH', '14', '19', '20', '9', '29', '', '22'),
('20CM011', 'GAYAKWAD SAKSHI TUKARAM', '14', '19', '20', '9', '29', '', '22');

-- --------------------------------------------------------

--
-- Table structure for table `software_testing`
--

CREATE TABLE `software_testing` (
  `id_code` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `pa1` varchar(30) NOT NULL,
  `pa2` varchar(30) NOT NULL,
  `avg` varchar(50) NOT NULL,
  `microproject` varchar(50) NOT NULL,
  `pa30` varchar(30) NOT NULL,
  `ext` varchar(30) NOT NULL,
  `tw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_testing`
--

INSERT INTO `software_testing` (`id_code`, `stud_name`, `pa1`, `pa2`, `avg`, `microproject`, `pa30`, `ext`, `tw`) VALUES
('20CM001', 'AWACHAR ABHAY SANTOSH ', '20', '18', '19', '9', '22', ' ', '24'),
('20CM002', 'BOCHARE CHETAN LAXAMANRAO', '14', '19', '17', '9', '26', '', '23'),
('20CM003', 'BORODE SHREYA VILAS', '14', '19', '20', '10', '30', '', '24'),
('20CM004', 'CHAITANYA VIJAY PARASKAR', '14', '19', '20', '10', '30', '', '22'),
('20CM005', 'CHAUDHARY DHANSHRI VISHWASRAO', '14', '19', '18', '9', '27', '', '22'),
('20CM007', 'DESHMUKH PURVA MANGESH', '14', '19', '20', '9', '29', '', '22'),
('20CM008', 'DESHMUKH SRUSHTI MANOJ', '14', '19', '10', '9', '19', '', '22'),
('20CM009', 'DHOKE DIVYA PANJABRAO', '14', '19', '18', '9', '27', '', '22'),
('20CM010', 'GAJBIYE SHREYASH', '14', '19', '20', '9', '29', '', '22'),
('20CM011', 'GAYAKWAD SAKSHI TUKARAM', '14', '19', '20', '9', '29', '', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
