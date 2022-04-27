-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 01:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `a_no` int(11) NOT NULL,
  `a_lname` varchar(28) NOT NULL,
  `a_fname` varchar(28) NOT NULL,
  `a_mname` varchar(28) NOT NULL,
  `a_address` varchar(50) NOT NULL,
  `a_contactNo` int(11) NOT NULL,
  `a_bday` date NOT NULL,
  `a_sex` varchar(10) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_uname` varchar(28) NOT NULL,
  `a_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`a_no`, `a_lname`, `a_fname`, `a_mname`, `a_address`, `a_contactNo`, `a_bday`, `a_sex`, `a_email`, `a_uname`, `a_password`) VALUES
(1, 'Cuevo', 'Mark Lester', 'Abas', 'Cabanatuan City', 2147483647, '2022-04-14', 'male', 'lester.cuevo@gmail.com', 'root', 'Password');

-- --------------------------------------------------------

--
-- Table structure for table `b_businesspermit`
--

CREATE TABLE `b_businesspermit` (
  `bp_no` int(11) NOT NULL,
  `bp_businessName` varchar(28) NOT NULL,
  `bp_requestedBy` varchar(50) NOT NULL,
  `bp_address` varchar(50) NOT NULL,
  `bp_requestedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_businesspermit`
--

INSERT INTO `b_businesspermit` (`bp_no`, `bp_businessName`, `bp_requestedBy`, `bp_address`, `bp_requestedDate`) VALUES
(1, 'Puyatan', 'Mark Lester Cuevo', 'Brgy. Pamaldan, Cabanatuan CIty.', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `b_certificate`
--

CREATE TABLE `b_certificate` (
  `bcr_no` int(11) NOT NULL,
  `bcr_fullname` varchar(28) NOT NULL,
  `bcr_purpose` varchar(50) NOT NULL,
  `bcr_address` varchar(50) NOT NULL,
  `bcr_requestedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_certificate`
--

INSERT INTO `b_certificate` (`bcr_no`, `bcr_fullname`, `bcr_purpose`, `bcr_address`, `bcr_requestedDate`) VALUES
(1, 'Mark Lester Cuevo', 'Maka tulog', 'Brgy. Pamaldan, Cabanatuan CIty.', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `b_clearance`
--

CREATE TABLE `b_clearance` (
  `bc_no` int(11) NOT NULL,
  `bc_fullname` varchar(28) NOT NULL,
  `bc_purpose` varchar(50) NOT NULL,
  `bc_address` varchar(50) NOT NULL,
  `bc_requestedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_clearance`
--

INSERT INTO `b_clearance` (`bc_no`, `bc_fullname`, `bc_purpose`, `bc_address`, `bc_requestedDate`) VALUES
(1, 'Mark Lester A. Cuevo', 'Postal ID', 'Brgy. Pamaldan, Cabanatuan CIty.', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `b_indigency`
--

CREATE TABLE `b_indigency` (
  `bi_no` int(11) NOT NULL,
  `bi_fullname` varchar(28) NOT NULL,
  `bi_purpose` varchar(50) NOT NULL,
  `bi_address` varchar(50) NOT NULL,
  `bi_requestedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b_indigency`
--

INSERT INTO `b_indigency` (`bi_no`, `bi_fullname`, `bi_purpose`, `bi_address`, `bi_requestedDate`) VALUES
(1, 'Mark Lester Cuevo', 'Maka graduate', 'Brgy. Pamaldan, Cabanatuan CIty.', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `u_no` int(11) NOT NULL,
  `u_lname` varchar(28) NOT NULL,
  `u_fname` varchar(28) NOT NULL,
  `u_mname` varchar(28) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `u_contact` bigint(12) NOT NULL,
  `u_bday` date NOT NULL,
  `u_sex` varchar(10) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_uname` varchar(28) NOT NULL,
  `u_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`u_no`, `u_lname`, `u_fname`, `u_mname`, `u_address`, `u_contact`, `u_bday`, `u_sex`, `u_email`, `u_uname`, `u_password`) VALUES
(1, 'Cuevo', 'Mark Lester', 'Abas', 'Brgy. Pamaldan, Cabanatuan CIty.', 2147483647, '2001-03-07', 'male', 'lester.cuevo.mlc@gmail.com', 'ahahqahaha', 'TRYKOLANG'),
(2, 'Balmiento', 'Denver', 'idk', 'Cabanatuan ', 977186011, '2022-04-07', 'male', 'try@gmail.com', 'balmiento', 'Balmiento'),
(3, 'again', 'agaion', 'again', 'Brgy. Pamaldan, Cabanatuan CIty.', 9771860900, '2022-04-27', 'female', 'erahae@yahoo.com', 'gege', 'Ayokonaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`a_no`);

--
-- Indexes for table `b_businesspermit`
--
ALTER TABLE `b_businesspermit`
  ADD PRIMARY KEY (`bp_no`);

--
-- Indexes for table `b_certificate`
--
ALTER TABLE `b_certificate`
  ADD PRIMARY KEY (`bcr_no`);

--
-- Indexes for table `b_clearance`
--
ALTER TABLE `b_clearance`
  ADD PRIMARY KEY (`bc_no`);

--
-- Indexes for table `b_indigency`
--
ALTER TABLE `b_indigency`
  ADD PRIMARY KEY (`bi_no`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`u_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `a_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_businesspermit`
--
ALTER TABLE `b_businesspermit`
  MODIFY `bp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_certificate`
--
ALTER TABLE `b_certificate`
  MODIFY `bcr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_clearance`
--
ALTER TABLE `b_clearance`
  MODIFY `bc_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_indigency`
--
ALTER TABLE `b_indigency`
  MODIFY `bi_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `u_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
