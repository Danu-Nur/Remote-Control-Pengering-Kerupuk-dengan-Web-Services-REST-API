-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 08:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innovilage2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mesin_dan_hp`
--

CREATE TABLE `data_mesin_dan_hp` (
  `ID_DATA` int(11) NOT NULL,
  `MESIN` int(11) NOT NULL,
  `STATUS` enum('ONLINE','OFFLINE') DEFAULT NULL,
  `SUHU` float DEFAULT NULL,
  `SUHU_ATAS` float NOT NULL,
  `SUHU_BAWAH` float NOT NULL,
  `BATTERY` float DEFAULT NULL,
  `KOMPOR` int(11) NOT NULL,
  `BLOWER` int(11) NOT NULL,
  `LISTRIK` int(11) DEFAULT NULL,
  `WAKTU` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mesin_dan_hp`
--

INSERT INTO `data_mesin_dan_hp` (`ID_DATA`, `MESIN`, `STATUS`, `SUHU`, `SUHU_ATAS`, `SUHU_BAWAH`, `BATTERY`, `KOMPOR`, `BLOWER`, `LISTRIK`, `WAKTU`) VALUES
(1, 2, NULL, NULL, 68, 38, NULL, 1, 1, 1, '2021-11-12 12:45:42'),
(2, 2, 'ONLINE', 36.56, 68, 38, 4.83, 1, 1, 1, '2021-11-12 12:45:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mesin_dan_hp`
--
ALTER TABLE `data_mesin_dan_hp`
  ADD PRIMARY KEY (`ID_DATA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mesin_dan_hp`
--
ALTER TABLE `data_mesin_dan_hp`
  MODIFY `ID_DATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
