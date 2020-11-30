-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `dars`
--

CREATE TABLE `dars` (
  `id` int(11) NOT NULL,
  `code` text COLLATE utf8_persian_ci,
  `name` text COLLATE utf8_persian_ci,
  `ostad` text COLLATE utf8_persian_ci,
  `date` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `dars`
--

INSERT INTO `dars` (`id`, `code`, `name`, `ostad`, `date`) VALUES
(1, '120', 'مهندسی نرم افزار', 'دکتر راسخ', '05:05:01'),
(2, '200', 'سیستم عامل', 'دکتر اسلامی', '81:00:00'),
(3, '300', 'داده کاوی', 'دکتر تنوری', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `entekhab`
--

CREATE TABLE `entekhab` (
  `idu` int(11) DEFAULT NULL,
  `idd` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `entekhab`
--

INSERT INTO `entekhab` (`idu`, `idd`, `id`) VALUES
(1, 1, 1),
(3, 3, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idu` int(11) NOT NULL,
  `name` text COLLATE utf8_persian_ci,
  `family` text COLLATE utf8_persian_ci,
  `addres` text COLLATE utf8_persian_ci,
  `mobile` text COLLATE utf8_persian_ci,
  `jensiat` int(11) DEFAULT NULL,
  `reshte` text COLLATE utf8_persian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idu`, `name`, `family`, `addres`, `mobile`, `jensiat`, `reshte`) VALUES
(1, '1', '1', '1', '1', 1, '1'),
(2, '2', '2', '2', '2', 2, '2'),
(3, '5', '5', '5', '5', 5, '5      '),
(4, '6', '6', '6', '6', 66, '5      6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dars`
--
ALTER TABLE `dars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entekhab`
--
ALTER TABLE `entekhab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dars`
--
ALTER TABLE `dars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entekhab`
--
ALTER TABLE `entekhab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
