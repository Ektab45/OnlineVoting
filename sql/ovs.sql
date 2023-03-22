-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 05:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) DEFAULT NULL,
  `Class` varchar(80) DEFAULT NULL,
  `Sem` varchar(10) DEFAULT NULL,
  `Email` varchar(90) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`ID`, `Name`, `Class`, `Sem`, `Email`, `Phone`) VALUES
(0, 'sun', 'moon', 'cloud', 'sun@gmail.com', 456),
(1, 'dilsanajs', 'abs', 'asghdj', 'asghd@com', 567890),
(6, 'ok', 'bca', '2', 'ok@gmail', 123),
(7, 'Junet', 'bca', '1', 'junet@gmail.com', 445566),
(10, 'star', 'planet', 'mars', 'non@gmail.com', 45699),
(54, 'dasjkjd', 'fagdhsjk', 'uwe', 'qahdaj@gmail.com', 56789);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `class` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `class`, `semester`, `mobile`, `password`, `email`, `photo`, `role`, `status`, `votes`) VALUES
(5, 'henlo', 'bca', '2', 1234567890, 'user', 'henlo@gmail.com', 'WIN_20200823_16_46_21_Pro (2).jpg', 1, 0, 0),
(7, 'cloud', 'bbs', '3rd', 4455234, 'user', 'cloud@gmail.com', 'WIN_20201007_13_19_31_Pro.jpg', 1, 0, 0),
(13, 'man', 'bbs', '1st', 992234, 'can', 'man@gmail.com', 'WIN_20200823_16_46_21_Pro (2).jpg', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(90) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(1, 'ekta', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
