-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 01:52 AM
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
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_ID` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address_1` varchar(40) NOT NULL,
  `Address_2` varchar(40) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `cpm` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `usercredentials`
--

CREATE TABLE `usercredentials` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `usercredentials`
--
ALTER TABLE `usercredentials`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `client_ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usercredentials`
--
ALTER TABLE `usercredentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_info`
--
ALTER TABLE `client_info`
  ADD CONSTRAINT `client_ID` FOREIGN KEY (`client_ID`) REFERENCES `usercredentials` (`id`);

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`user_ID`) REFERENCES `usercredentials` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/* Dummy user credentials variables for testing. Each user has credentials username: user#, password: password# */;
INSERT INTO usercredentials (username, password) VALUES 
('user1', '$2y$10$ZDlRZ0tjZlVkRVpOeHNoHuJjAr1yO7VrDUMzrQX9ECksvJZo7LwE2'),
('user2', '$2y$10$TlhzsR1ylsXcUowvP8JzWuE05mJxlraxgGpI8izydfEMaCn3qIHui'),
('user3', '$2y$10$Gt4x4t4ycNtBCxE74.AA5OmS9X9tSwC1zYI/ymdcpC4tGk4tF88yK'),
('user4', '$2y$10$g1DZ5Yzkgk1Rjlnxg.n/iO46g8al0lWIz0q3dXOZzvQZ1GSmwCFqq'),
('user5', '$2y$10$qTb.rubRKPes9XowhDRvYOhWIMwHClpF10V7e/1v8kV7Ddyr54Gmi'),
('user6', '$2y$10$T3w6P3U6MFbT28KjjQs1IOi9XsfglPmtz0nxK8pObluV7FupM1jK6'),
('user7', '$2y$10$KjveuWZzYIJ/PRd4TP4tFus61tW5y/15Zn46HBC.YRFLhWeQ2Qc/i'),
('user8', '$2y$10$eTFeKjZ23wCZQ7VUug89C.YrrmkE9Kx6yHeO/KKcYfznn7iL0M1Oa'),
('user9', '$2y$10$iXOxQ2R.PtW5Iv2N1hLZwuf4p77e0q1gKdha5TKH0tS8.56tjKQvG'),
('user10', '$2y$10$GW5qjM5X5qrnSbCK8jAEG.12vRYvvZn1zZlKjWfDzAtvLjfX9xGou'),
('password', '$2y$10$YFfoE.iwX34JFQ34c0quG.38.8MQqvp21XfqvH5Z0Doag2IvmvJIy');


/* Dummy client info variables for testing. Each client has a unique ID, name, address, city, state, zipcode, and cpm */;
INSERT INTO client_info (client_ID, Name, Address_1, Address_2, city, state, zipcode, cpm) VALUES
(1, 'John Smith', '123 Main St', '', 'Austin', 'TX', 78701, 50),
(2, 'Jane Doe', '456 Elm St', '', 'Houston', 'TX', 77002, 75),
(3, 'Bob Johnson', '789 Oak St', '', 'Dallas', 'CA', 90001, 30),
(4, 'Emily Davis', '246 Walnut St', '', 'San Antonio', 'TX', 78201, 60),
(5, 'Mark Wilson', '369 Pine St', '', 'Fort Worth', 'NY', 10001, 40),
(6, 'Samantha Lee', '753 Maple St', '', 'Plano', 'TX', 75023, 80),
(7, 'David Kim', '159 Birch St', '', 'Irving', 'CA', 90002, 10),
(8, 'Melissa Brown', '852 Cedar St', '', 'El Paso', 'TX', 79901, 20),
(9, 'Thomas Martin', '369 Oakwood St', '', 'Arlington', 'IL', 60004, 90),
(10, 'Jennifer Jones', '7536 Elmwood St', '', 'Austin', 'TX', 78745, 55),
(11, 'Pass Word', '123 Password St', '193 Wordpass St', 'Houston', 'TX', 77235, 20);


/* Dummy orders for testing. Each user has ~2 orders. */
INSERT INTO order_history (total_price, user_ID, delv_date, ccpm, request_Gals, suggested_Price, del_Address) VALUES
(150.25, 2, '2023-03-02', 0.1, 136.59, 150.25, '456 Elm St, Houston, TX'),
(225.75, 4, '2023-03-05', 0.2, 187.28, 225.75, '246 Walnut St, San Antonio, TX'),
(275.00, 6, '2023-03-07', 0.3, 177.91, 275.00, '753 Maple St, Plano, TX'),
(320.50, 8, '2023-03-11', 0.1, 291.36, 320.50, '852 Cedar St, El Paso, TX'),
(185.75, 3, '2023-03-14', 0.2, 154.79, 185.75, '789 Oak St, Dallas, CA'),
(275.25, 7, '2023-03-18', 0.3, 177.92, 275.25, '159 Birch St, Irving, CA'),
(335.50, 9, '2023-03-20', 0.1, 305.54, 335.50, '369 Oakwood St, Arlington, IL'),
(150.50, 1, '2023-03-24', 0.2, 125.41, 150.50, '123 Main St, Austin, TX'),
(210.75, 5, '2023-03-26', 0.1, 191.59, 210.75, '369 Pine St, Fort Worth, NY'),
(290.25, 10, '2023-03-28', 0.3, 186.26, 290.25, '7536 Elmwood St, Austin, TX'),
(145.25, 2, '2023-03-02', 0.1, 132.05, 145.25, '456 Elm St, Houston, TX'),
(235.75, 4, '2023-03-05', 0.2, 196.46, 235.75, '246 Walnut St, San Antonio, TX'),
(265.00, 6, '2023-03-07', 0.3, 170.29, 265.00, '753 Maple St, Plano, TX'),
(340.50, 8, '2023-03-11', 0.1, 309.91, 340.50, '852 Cedar St, El Paso, TX'),
(195.75, 3, '2023-03-14', 0.2, 162.57, 195.75, '789 Oak St, Dallas, CA'),
(285.25, 7, '2023-03-18', 0.3, 183.94, 285.25, '159 Birch St, Irving, CA'),
(345.50, 9, '2023-03-20', 0.1, 314.09, 345.50, '369 Oakwood St, Arlington, IL'),
(345.50, 11, '2023-03-15', 0.1, 300.09, 330.09, '193 Wordpass St, Houston, TX'),
(285.25, 11, '2023-03-16', 0.3, 183.94, 285.25, '193 Password St, Houston, TX'),
(145.25, 11, '2023-03-17', 0.1, 132.05, 145.25, '193 Wordpass St, Houston, TX'),
(235.75, 11, '2023-03-19', 0.2, 196.46, 235.75, '193 Password St, Houston, TX'),
(275.00, 11, '2023-03-20', 0.3, 177.91, 275.00, '193 Wordpass St, Houston, TX'),
(320.50, 11, '2023-03-21', 0.1, 291.36, 320.50, '193 Password St, Houston, TX'),
(275.25, 11, '2023-03-22', 0.3, 177.92, 275.25, '193 Wordpass St, Houston, TX'),
(340.50, 11, '2023-03-23', 0.1, 309.91, 340.50, '193 Password St, Houston, TX');
