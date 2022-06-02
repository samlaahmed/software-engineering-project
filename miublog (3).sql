-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miublog`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `aID` int(50) NOT NULL,
  `AName` varchar(50) NOT NULL,
  `ADATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `img`, `job`) VALUES
(1, 'Dr.Heba magdy', 'heba@gmail.com', 'doc2.jpg', 'Dentist whith a high degree'),
(3, 'Dr. mohamed abdelhakim', 'mohamed11@gmail.com', 'doc1.jpg', 'Dentist whith a high degree'),
(6, 'mostafa', 'Mostafa@gmail.com', 'mostafa.jpg', 'Dentist');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`ID`, `Name`) VALUES
(1, 'Drug Strength'),
(2, 'Size'),
(3, 'Pills'),
(4, 'Expiry Date'),
(5, 'Amount');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `Product_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `Price`, `Product_Type`) VALUES
(1, 'DR.Mohamed Aly', 'mohamed.jpeg', '1:00 pm', 5),
(2, 'DR.Heba Magdy', 'heba.jpeg', '2:00 pm', 5),
(3, 'DR.Salwa Ramy', 'salwa.jpeg', '3:00 pm', 4),
(4, 'DR.Ramy Mostafa', 'ramy.jpeg', '4:00 pm', 4),
(5, 'DR.Aly Eleiwa', 'aly.jpeg', '5:00 pm', 1),
(6, 'DR.Mostafa hazem', 'mostafa.jpg', '6:00 pm', 6),
(7, 'DR.Ahmed Fahd', 'ahmed.jpeg', '7:00 pm', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_s_o_v`
--

CREATE TABLE `product_s_o_v` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_Type_S_O` int(11) NOT NULL,
  `Value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_s_o_v`
--

INSERT INTO `product_s_o_v` (`ID`, `Product_ID`, `Product_Type_S_O`, `Value`) VALUES
(1, 1, 4, 'Braces'),
(2, 2, 4, 'Teeth whitening'),
(3, 3, 6, 'check ups'),
(4, 3, 5, 'dental implant'),
(5, 4, 6, 'Braces'),
(6, 4, 5, 'check ups'),
(7, 5, 2, 'Teeth whitening'),
(8, 5, 1, 'dental implant'),
(9, 5, 3, 'Braces'),
(10, 6, 7, 'check ups'),
(11, 6, 9, 'Teeth whitening'),
(12, 6, 8, 'check ups'),
(13, 7, 7, 'dental implant'),
(14, 7, 9, 'Braces'),
(15, 7, 8, 'Braces');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ID` int(11) NOT NULL,
  `Type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ID`, `Type`) VALUES
(1, 'braces'),
(2, 'braces'),
(3, 'check ups'),
(4, 'check ups'),
(5, 'dental implant'),
(6, 'dental implant');

-- --------------------------------------------------------

--
-- Table structure for table `product_type_s_o`
--

CREATE TABLE `product_type_s_o` (
  `ID` int(11) NOT NULL,
  `Product_Type` int(11) NOT NULL,
  `Options` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type_s_o`
--

INSERT INTO `product_type_s_o` (`ID`, `Product_Type`, `Options`) VALUES
(1, 1, 5),
(2, 1, 5),
(3, 1, 5),
(4, 5, 5),
(5, 4, 5),
(6, 4, 5),
(7, 6, 5),
(8, 6, 5),
(9, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(12) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `user_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `password`, `user_type`) VALUES
(1, 'salma', 'salma@yahoo.com', 1020666323, 'doc1.jpg', '$2y$10$Nb9cBg6Zkk7gKu5IQjeB5.YDqu/G41zQvwcORwC2iSWY23vwiWCz.', 0),
(2, 'karam', 'youssef.zack1@yahoo.com', 1020333665, '', '$2y$10$EOjB.H4JYC50jyvtAHlHh.Yh7EU5Kf/b8ocxP7/W01smAaEEWq3zq', 0),
(3, 'mariam', 'mariam@gmail.com', 0, '', '$2y$10$ejslMfgTr.HTRqAYWwcoHujECfkLEwgXgwcQbyjI.DyGX38Oa8pZ.', 0),
(4, 'koko', 'karam1@email.com', 1010101010, '', '$2y$10$GYU4YmVeGND4WXd31FGNEO4ufDxBQVRp4ei2iEDmRoPF73WurACje', 1),
(5, 'koko', 'karam12@email.com', 0, '', '$2y$10$VMfraGRbc/hS03.s2z4ub.s8ahaBmuJWF.z067.IQl8CUZNRtYm8O', 1),
(6, 'karamellax', 'youssef.zack@gmail.com', 1020, '', '$2y$10$fLBmKMEPZrHW7Mr3hdDLiOGHsL8lCO4IiiBx1h5UXQ7bf2/EMfQ76', 0),
(8, 'malekfouda', 'youssef.zack15@gmail.com', 1020303601, '', '$2y$10$Lo86wk/mG/T6MVznod8jkOuv93vkTcSatvT4zSJvLk4vMzrCK5SGW', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product_Type` (`Product_Type`);

--
-- Indexes for table `product_s_o_v`
--
ALTER TABLE `product_s_o_v`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Option_ID` (`Product_Type_S_O`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_type_s_o`
--
ALTER TABLE `product_type_s_o`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product_Type` (`Product_Type`),
  ADD KEY `Options` (`Options`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_s_o_v`
--
ALTER TABLE `product_s_o_v`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_type_s_o`
--
ALTER TABLE `product_type_s_o`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Product_Type`) REFERENCES `product_type` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
