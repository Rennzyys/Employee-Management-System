-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `firstname`, `lastname`, `phone`, `address`, `age`) VALUES
(69, 'Renz', 'Romano', 2147483647, 'Inc Compound Bangad,', 24),
(70, 'sherence', 'carlos', 2147483647, 'paradise', 20),
(71, 'Renz', 'Romano', 2147483647, 'Inc Compound Bangad,', 32);

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `firstname`, `lastname`, `password`, `email`, `is_admin`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 123456789),
(2, 'sherence', 'carlos', '123123', '0', 0),
(3, 'jasmin', 'antonio', '123123123', '0', 0),
(4, 'Renz', 'Romano', '123123', '0', 0),
(5, 'sherence', 'udar', '123123123', '0', 0),
(6, 'sherence', 'carlos', '123', 'sherencecarlossss@gmail.com', 0),
(7, '', '', '123', 'sherencecarlossss@gmail.com', 0),
(8, '', '', '123', 'sherencecarlossss@gmail.com', 0),
(9, '', '', '123123123', 'renzjoshuaromano24@gmail.com', 0),
(10, 'renz', 'romano', '123123', 'renzjoshuaromano24@gmail.com', 0),
(11, 'princess', 'romano', '0', 'princessromano@gmail.com', 0),
(12, 'princess', 'romano', '0', 'princessromano@gmail.com', 0),
(13, 'admin', 'adminss', '123123', 'admin@gmail.com', 0),
(14, '', '', '123123', 'admin@gmail.com', 0),
(15, 'jasmine', 'antonio', '123123123', 'jasmineantonio@gmail.com', 0),
(16, '', '', '123123', 'admin@gmail.com', 0),
(17, '', '', '123123', 'admin@gmail.com', 0),
(18, '', '', '123123123123', 'admin@gmail.com', 0),
(19, '', '', '1231223232', 'admin@gmail.com', 0),
(20, 'sherence', 'carlos', '1234567', 'shbo.carlos.au@phinmaed.com', 0),
(21, 'zdtghf', 'rgfd', 'gandako', 'shbo.carlos.au@phinmaed.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
