-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 03:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `b_id` int(10) NOT NULL,
  `b_customer` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_vehicle` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_bdate` date NOT NULL,
  `b_rdate` date NOT NULL,
  `b_total` float NOT NULL,
  `b_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`b_id`, `b_customer`, `b_vehicle`, `b_bdate`, `b_rdate`, `b_total`, `b_status`) VALUES
(1, '010417100001', 'A1', '2023-06-04', '2023-06-05', 4800, 1),
(2, '010417100001', 'BPL1972', '2023-06-17', '2023-06-19', 340, 1),
(3, '010417100001', 'BPL1792', '2023-05-31', '2023-06-03', 750, 1),
(4, '010417100001', 'BNN3972', '2023-06-16', '2023-06-18', 400, 1),
(5, '010417100001', 'BNN3973', '2023-06-28', '2023-06-30', 800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `is_id` int(2) NOT NULL,
  `is_desc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`is_id`, `is_desc`) VALUES
(1, 'Received'),
(2, 'Approved'),
(3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_ic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_pwd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_ic`, `u_pwd`, `u_name`, `u_phone`, `u_address`, `u_type`) VALUES
('010417100000', 'uYdYm2AzWCD02nO8CZsN7g==', 'Admin Name', '0163272611', 'Example Address', 1),
('010417100001', 'uYdYm2AzWCD02nO8CZsN7g==', 'Customer Example One', '0163272621', 'Example Address', 2),
('010417100002', 'uYdYm2AzWCD02nO8CZsN7g==', 'Terence Loorthanathan', '01131350175', 'Example Address 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vehicle`
--

CREATE TABLE `tb_vehicle` (
  `v_reg` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_pic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_seat` int(5) DEFAULT NULL,
  `v_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_vehicle`
--

INSERT INTO `tb_vehicle` (`v_reg`, `v_pic`, `v_type`, `v_model`, `v_seat`, `v_price`) VALUES
('A1', '5826-ferrari.jpg', 'Sports', 'Ferrari 488 GTB', 2, 4800),
('BNN3972', 'waja.jpg', 'Sedan', 'Proton Waja', 5, 200),
('BNN3973', 'vellfire.jpg', 'MPV', 'Toyota Vellfire', 7, 400),
('BPL1792', 'alza.jpg', 'SUV', 'Perodua Alza', 7, 250),
('BPL1972', 'myvi.jpg', 'Compact', 'Perodua Myvi', 5, 170);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_customer` (`b_customer`),
  ADD KEY `b_vehicle` (`b_vehicle`),
  ADD KEY `b_status` (`b_status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`is_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_ic`);

--
-- Indexes for table `tb_vehicle`
--
ALTER TABLE `tb_vehicle`
  ADD PRIMARY KEY (`v_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`b_customer`) REFERENCES `tb_user` (`u_ic`),
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`b_vehicle`) REFERENCES `tb_vehicle` (`v_reg`),
  ADD CONSTRAINT `tb_booking_ibfk_3` FOREIGN KEY (`b_status`) REFERENCES `tb_status` (`is_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
