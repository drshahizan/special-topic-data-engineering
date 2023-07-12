-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 04:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `c_id` int(3) NOT NULL,
  `c_reg` varchar(10) NOT NULL,
  `c_model` varchar(50) NOT NULL,
  `c_year` int(4) NOT NULL,
  `c_price` float NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `c_filename` varchar(255) NOT NULL,
  `c_rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_car`
--

INSERT INTO `tb_car` (`c_id`, `c_reg`, `c_model`, `c_year`, `c_price`, `c_type`, `c_filename`, `c_rating`) VALUES
(13, 'HAA3333', 'Proton X50', 2021, 300, 'SUV', 'protonx50.png', 10),
(14, 'JUC2345', 'Myvi Turbo', 2021, 80, 'Sedan', 'download.jfif', 8),
(15, 'WTL9461', 'Honda City', 2022, 200, 'Sedan', 'hondacity.png', 9),
(16, 'JVM1111', 'Perodua Alza', 2018, 100, 'MPV', 'alza.png', 5),
(18, 'QAA1212', 'Toyota Corolla', 2022, 350, 'SUV', 'toyotacorolla.png', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_car`
--
ALTER TABLE `tb_car`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_car`
--
ALTER TABLE `tb_car`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
