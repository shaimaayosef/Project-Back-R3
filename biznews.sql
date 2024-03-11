-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 04:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biznews`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(6) UNSIGNED NOT NULL,
  `CategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `CategoryName`) VALUES
(15, 'food'),
(18, 'fashoin'),
(19, 'education'),
(20, 'Art'),
(21, 'politics');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(6) UNSIGNED NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL,
  `Image` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  `Active` enum('Yes','No','','') NOT NULL,
  `CategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Author`, `Title`, `Content`, `Image`, `NewsDate`, `Active`, `CategoryName`) VALUES
(9, 'author 3', 'title 3', 'Contents 3', 'f81f25b6751f142bc6e4d6c806eb21839507635a40a58052ec65b2b995304e9d.jpg', '2024-03-07', 'Yes', 'food'),
(13, 'author 4', 'title 4', 'Contents 4', 'f81f25b6751f142bc6e4d6c806eb21839507635a40a58052ec65b2b995304e9d.jpg', '2024-03-08', 'Yes', 'politics'),
(15, 'auther 1', 'title 1', 'Contents 1', 'لقطة شاشة 2024-02-08 194101.png', '2024-03-01', 'Yes', 'fashoin'),
(16, 'auther 2', 'title 2', 'Contents 2', '01_adobestock_73127660_resized.jpg', '2024-03-06', 'Yes', 'education');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(6) UNSIGNED NOT NULL,
  `RegistrationDate` date NOT NULL DEFAULT current_timestamp(),
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Active` enum('Yes','No','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `RegistrationDate`, `Name`, `UserName`, `Email`, `Password`, `Active`) VALUES
(1, '2024-03-02', 'shaimaa sayed', 'shimaa88', 'shimaa@gmail.com', 'ljhu5845', 'Yes'),
(2, '2024-03-02', 'Tony Adam', 'tony2023', 'tony@gmail.com', '56418kjhj', 'No'),
(3, '2024-03-02', 'mohamed adel', 'mohamed23', 'mohamed@gmail.com', 'dhf584', 'No'),
(4, '2024-03-02', 'heba gamel', 'heba44', 'heba@gmail.com', 'dhfk854', 'Yes'),
(5, '2024-03-02', 'hoda mohamed', 'hoda85', 'hoda@gmail.com', 'jhk548', 'No'),
(6, '2024-03-11', 'user4', 'user', 'user@y.com', 'yhu', 'Yes'),
(7, '2024-03-11', 'samer mohamed', 'samer33', 'samer@g.com', '3do#IFRdq&NfDGjkJr', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
