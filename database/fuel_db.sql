-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 01:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE login (
  client_ID int(11) NOT NULL,
  username varchar(16) DEFAULT NULL,
  password varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `login` (`client_ID`, `username`, `password`) VALUES
(0, 'alice123', '11111111'),
(8, 'hello', '$2y$10$VynujjA/jU9.KHxyH4mKwOBpFF5e/GNV6lDMm0p1NoEefXN0wh97O');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_ID` int(11) NOT NULL,
  `username` varchar(16) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zipcode` int(9) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `cpm` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_ID`, `username`, `password`, `name`, `address_1`, `address_2`, `city`, `state`, `zipcode`, `email`, `cpm`) VALUES
(0, 'alice123', '11111111', 'alice volto', '123 apple drive', '124 pineapple drive', 'Houston', 'TX', 77000, 'alice54@yahoo.com', 10),
(8, 'hello', '$2y$10$VynujjA/jU9.KHxyH4mKwOBpFF5e/GNV6lDMm0p1NoEefXN0wh97O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `order_ID` int(11) NOT NULL,
  `total_price` float DEFAULT NULL,
  `user_ID` int(11) NOT NULL,
  `delv_date` date DEFAULT NULL,
  `ccpm` float DEFAULT NULL,
  `request_Gals` int(10) DEFAULT NULL,
  `suggested_Price` float NOT NULL,
  `del_Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`order_ID`, `total_price`, `user_ID`, `delv_date`, `ccpm`, `request_Gals`, `suggested_Price`, `del_Address`) VALUES
(1, 20022, 8, '2023-04-12', 40, 100, 20, '123 apple st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`user_ID`) REFERENCES `client` (`client_ID`);

--
-- primary key for table `login`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`client_ID`),
--
-- 
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
