-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 12:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incometax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Age` int(50) NOT NULL,
  `Income` int(50) NOT NULL,
  `Tax` varchar(50) NOT NULL,
  `Recive_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`Id`, `Name`, `Email`, `Age`, `Income`, `Tax`, `Recive_Date`) VALUES
(1, 'Rajdeep Ghosal ', 'rajdeepghosal96@gmail.com', 44, 100000, 'NIL', '2023-05-20 10:24:21'),
(2, 'Ram', 'rr@123gmail.com', 35, 310000, '15500', '2023-05-20 10:26:25'),
(3, 'rajuuuu', 'ram12@gmail.com', 45, 340000, '17000', '2023-05-20 10:35:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
