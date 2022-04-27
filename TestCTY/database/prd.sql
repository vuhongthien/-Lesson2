-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 09:38 PM
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
-- Database: `prd`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_category` int(10) UNSIGNED NOT NULL,
  `tencategory` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_category`, `tencategory`) VALUES
(9, 'áo '),
(10, 'Quần');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_product` int(10) UNSIGNED NOT NULL,
  `ten` varchar(45) NOT NULL,
  `hinhanh` varchar(245) NOT NULL,
  `ID_category` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_product`, `ten`, `hinhanh`, `ID_category`) VALUES
(19, 'Bỉm', 'bim9.jpg', 9),
(21, 'tả baby', 'bim2.jpg', 9),
(22, 'Áo đầm', 'bim3.jpg', 9),
(23, 'Quần shot', 'bim4.jpg', 10),
(42, 'Quần shot', 'bim4.jpg', 10),
(43, 'Quần shot', 'bim4.jpg', 10),
(44, 'Quần shot', 'bim4.jpg', 10),
(45, 'Quần shot', 'bim4.jpg', 10),
(46, 'Quần shot', 'bim4.jpg', 10),
(47, 'Quần shot', 'bim16.jpg', 10),
(48, 'Quần shot', 'bim11.jpg', 10),
(49, 'Quần shot', 'bim3.jpg', 10),
(50, 'Bỉm', 'bim9.jpg', 9),
(51, 'Quần shot', 'bim16.jpg', 10),
(52, 'Quần shot', 'bim11.jpg', 10),
(53, 'Quần shot', 'bim11.jpg', 10),
(54, 'Quần shot', 'bim3.jpg', 10),
(55, 'Bỉm', 'bim9.jpg', 9),
(56, 'Quần shot', 'bim11.jpg', 10),
(57, 'Quần shot', 'bim11.jpg', 10),
(58, 'Quần shot', 'bim11.jpg', 10),
(59, 'Quần shot', 'bim11.jpg', 10),
(60, 'Bỉm', 'bim9.jpg', 9),
(61, 'tả baby', 'bim2.jpg', 9),
(62, 'Quần shot', 'bim4.jpg', 10),
(63, 'Quần shot', 'bim16.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_category`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_product`) USING BTREE,
  ADD KEY `FK_product_1` (`ID_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
