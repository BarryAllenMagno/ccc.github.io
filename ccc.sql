-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 04:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leader`
--

CREATE TABLE `tbl_leader` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `min_id` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leader`
--

INSERT INTO `tbl_leader` (`id`, `name`, `min_id`, `gender`, `birthday`, `age`, `address`, `contact`) VALUES
(1, 'Barry Allen Magno', '1', 'Male', '1993-12-07', 27, '181 San Guillermo Street Putata Muntinlupa', 2147483647),
(2, 'Lyra Kate Malindao', '3', 'Female', '1997-09-21', 23, '181 San Guillermo Street', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `member_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `min_id` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`member_id`, `name`, `min_id`, `gender`, `birthday`, `age`, `address`, `contact`) VALUES
(6, 'sample', 2, 'Male', '1111-09-01', 1, '181 San Guillermo Street', '12345'),
(7, 'Tarobels', 3, 'Male', '1997-09-21', 23, '181 San Guillermo Street', '09503948391'),
(8, 'Peter Parker Spiderman', 1, 'Male', '2021-06-01', 25, '181 San Guillermo Street', '09481948294'),
(9, 'Tony Stark', 4, 'Male', '1993-12-16', 50, 'New York', '09503948391'),
(10, 'Tony Parker', 1, 'Male', '1998-06-01', 22, '181 San Guillermo Street', '09485984818');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ministry`
--

CREATE TABLE `tbl_ministry` (
  `min_id` int(255) NOT NULL,
  `ministry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ministry`
--

INSERT INTO `tbl_ministry` (`min_id`, `ministry`) VALUES
(1, 'Music'),
(2, 'Normal Attendee'),
(3, 'Children'),
(4, 'Dance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(255) NOT NULL,
  `rolename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `rolename`) VALUES
(1, 'Admin'),
(2, 'Co Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confpwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `gender`, `role_id`, `password`, `confpwd`) VALUES
(1, 'admin', '', 0, 'd033e22ae348aeb5660fc2140aec35850c4da997', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_leader`
--
ALTER TABLE `tbl_leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_ministry`
--
ALTER TABLE `tbl_ministry`
  ADD PRIMARY KEY (`min_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_leader`
--
ALTER TABLE `tbl_leader`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `member_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_ministry`
--
ALTER TABLE `tbl_ministry`
  MODIFY `min_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
