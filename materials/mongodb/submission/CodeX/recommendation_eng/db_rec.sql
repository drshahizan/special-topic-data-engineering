-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 06:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_rate`
--

CREATE TABLE `tb_rate` (
  `rate_id` int(11) NOT NULL,
  `rate_show_id` int(11) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rate`
--

INSERT INTO `tb_rate` (`rate_id`, `rate_show_id`, `rate`) VALUES
(10, 2, 1.2),
(11, 1, 2.5),
(14, 3, 1.8),
(17, 6, 2.5),
(19, 5, 4),
(25, 1, 3),
(28, 3, 1),
(33, 7, 1),
(34, 1, 3.2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_show`
--

CREATE TABLE `tb_show` (
  `show_id` int(11) NOT NULL,
  `show_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_show`
--

INSERT INTO `tb_show` (`show_id`, `show_name`) VALUES
(1, 'Masterchef US'),
(2, 'Hell\'s Kitchen'),
(3, 'America\'s Next Top Model'),
(5, 'Bridgerton'),
(6, 'Lucifer'),
(7, 'Spongebob Squarepants'),
(8, 'Wednesday'),
(9, 'CSI:Vegas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `type_id` int(2) NOT NULL,
  `type_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`type_id`, `type_desc`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_id` int(11) NOT NULL,
  `u_ic` int(14) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_pwd` varchar(200) NOT NULL,
  `u_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_ic`, `u_name`, `u_pwd`, `u_type`) VALUES
(1, 123, 'Filo', '123', 2),
(2, 999, 'Nelly', '999', 1),
(3, 456, 'Soti', '456', 2),
(4, 789, 'Wale', '789', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_rate`
--
ALTER TABLE `tb_rate`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `rate_show_id` (`rate_show_id`);

--
-- Indexes for table `tb_show`
--
ALTER TABLE `tb_show`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_type` (`u_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rate`
--
ALTER TABLE `tb_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_show`
--
ALTER TABLE `tb_show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rate`
--
ALTER TABLE `tb_rate`
  ADD CONSTRAINT `tb_rate_ibfk_5` FOREIGN KEY (`rate_show_id`) REFERENCES `tb_show` (`show_id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`u_type`) REFERENCES `tb_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
