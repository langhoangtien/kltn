-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 07:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tindung`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `role_type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `del_flag` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `idcard` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `role_type`, `createdat`, `updatedat`, `del_flag`, `address`, `phone`, `idcard`) VALUES
(10, 'hoàng diệu trinh', 'e10adc3949ba59abbe56e057f20f883e', 'hoangdieutrinh96@gmail.com', '', '2018-09-20 09:58:41', '0000-00-00 00:00:00', '0', 'ha noi 2', '09876543345', 12345678),
(14, 'admin123', 'e10adc3949ba59abbe56e057f20f883e', 'hoangdieutrinh1996@gmail.com', '', '2018-09-21 03:12:37', '0000-00-00 00:00:00', '0', 'hanoi32', '016588987', 12345678),
(15, 'admin12345', 'e10adc3949ba59abbe56e057f20f883e', 'test2@gmail.com', '', '2018-09-21 04:14:37', '0000-00-00 00:00:00', '0', 'hà nội', '12378896423', 1234567),
(16, 'trinh gdragon ', 'e10adc3949ba59abbe56e057f20f883e', 'trinhgd@gmail.com', '', '2018-09-21 04:16:56', '0000-00-00 00:00:00', '0', 'hà nội', '12378896423', 2147483647),
(17, 'hoanglan7', '25d55ad283aa400af464c76d713c07ad', 'test@1gmail.com', '', '2018-09-23 07:55:46', '0000-00-00 00:00:00', '0', 'hanoi2', '0978675853', 12345678),
(19, 'lanhanh90', 'e10adc3949ba59abbe56e057f20f883e', ' lananh@gmail.com', '', '2018-09-26 06:58:01', '0000-00-00 00:00:00', '0', ' vĩnh phúc ', ' 0916829783', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(5) NOT NULL,
  `bks` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sk` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sm` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `manufacture`, `type`, `color`, `year`, `bks`, `sk`, `sm`, `register_date`) VALUES
(1, 'honda ', 'honda xfs', 'white', 2000, '', '', '', '0000-00-00'),
(2, 'vespa', 'vespa 123', 'red', 2008, '', '', '', '0000-00-00'),
(4, 'Futture', 'futture345', 'blue', 2005, '', '', '', '0000-00-00'),
(5, 'honda', 'fghjk', 'color', 0, '', '', '', '0000-00-00'),
(6, 'honda123456', 'fghjk', 'color', 0, '', '', '', '0000-00-00'),
(7, 'Vision ', 'beaty', 'red', 1998, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `note`, `attribute_id`, `admin_id`, `createdat`, `updatedat`) VALUES
(1, 'xe máy vision 2018', 'xe máy vision hãng mới', 7, 19, '2018-10-13 00:00:00', '2018-10-13 00:00:00'),
(11, 'honda2018', 'honda', 5, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'honda23', 'vgbhnj', 6, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'honda23', 'sdfgh', 7, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'xe máy', 'sdfg', 7, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'honda23', 'sdfgh', 7, 19, '2018-10-21 16:15:54', '2018-10-21 16:15:54'),
(17, 'honda', 'fghjbn', 5, 16, '2018-11-04 10:21:46', '2018-11-04 10:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `createdat` datetime NOT NULL,
  `updateat` datetime NOT NULL,
  `interested_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` bit(2) NOT NULL,
  `createdby` int(11) NOT NULL,
  `loandate` date NOT NULL,
  `idcard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `birthday`, `phone`, `money`, `createdat`, `updateat`, `interested_id`, `category_id`, `address`, `note`, `sex`, `createdby`, `loandate`, `idcard`) VALUES
(4, 'nguyễn thế anh', '1998-10-19', '986682755', 1000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1111111111, 0, 'HCM', '', b'00', 0, '0000-00-00', 0),
(5, 'Hoàng diệu trinh ', '0000-00-00', '0987665432', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1234567890, 0, 'long biên hà nội ', '', b'00', 0, '0000-00-00', 12345678),
(6, 'Hoàng diệu linh ', '0000-00-00', '0916829783', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1234567878, 0, 'ha noi', '', b'00', 0, '0000-00-00', 0),
(7, 'hoàng thị lan anh ', '0000-00-00', '0916829783', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1234567890, 0, 'HP', '', b'00', 0, '0000-00-00', 0),
(8, 'Hoàng ngọc lan ', '0000-00-00', '0916829783', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1234567890, 0, 'VP', '', b'00', 0, '0000-00-00', 0),
(9, 'Gdragon', '0000-00-00', '0916829783', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1234567890, 0, 'HCM', '', b'00', 0, '0000-00-00', 0),
(10, 'tt', '0000-00-00', '986682755', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'HCM', '', b'00', 0, '0000-00-00', 0),
(11, 'tt', '0000-00-00', '986682755', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'HCM', '', b'00', 0, '0000-00-00', 0),
(12, 'tt', '0000-00-00', '986682755', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'HCM', '', b'00', 0, '0000-00-00', 0),
(13, 'mumu', '0000-00-00', '986682755', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'HCM', '', b'00', 0, '0000-00-00', 0),
(14, 'nguyễn thế anh', '0000-00-00', '986682755', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'HCM', '', b'00', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `historypaid`
--

CREATE TABLE `historypaid` (
  `id` int(11) NOT NULL,
  `money` float(50,0) NOT NULL,
  `paiddate` datetime NOT NULL,
  `typepaid` tinyint(2) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(4) NOT NULL,
  `createdat` int(11) NOT NULL,
  `updatedat` int(11) NOT NULL,
  `createdby` int(11) NOT NULL,
  `updateby` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `type` float DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `historypaid`
--

INSERT INTO `historypaid` (`id`, `money`, `paiddate`, `typepaid`, `note`, `status`, `createdat`, `updatedat`, `createdby`, `updateby`, `customer_id`, `type`, `category_id`) VALUES
(4, 1111111, '0000-00-00 00:00:00', 1, 'ahihi', 0, 0, 0, 0, 0, 3, 3, 7),
(5, 100000000, '0000-00-00 00:00:00', 2, 'ahihi', 0, 0, 0, 0, 0, 4, 3, 6),
(6, 10000000, '0000-00-00 00:00:00', 1, 'ahihi', 0, 0, 0, 0, 0, 5, 3, 4),
(7, 10000000, '0000-00-00 00:00:00', 1, 'fcvgbhnj', 0, 0, 0, 0, 0, 6, 3, 5),
(8, 10000000, '0000-00-00 00:00:00', 2, 'sdfgh', 0, 0, 0, 0, 0, 7, 4, 7),
(9, 10000000, '0000-00-00 00:00:00', 2, 'sdfgh', 0, 0, 0, 0, 0, 8, 4, 7),
(10, 10000000, '0000-00-00 00:00:00', 2, 'AHIHI', 0, 0, 0, 0, 0, 9, 3, 7),
(11, 4454, '2018-11-04 00:00:00', 0, 'fdf', 0, 0, 0, 0, 0, 12, 3, NULL),
(12, 44547776, '2018-11-04 00:00:00', 0, 'the anh', 0, 0, 0, 0, 0, 14, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_interestrate`
--

CREATE TABLE `history_interestrate` (
  `id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `percent` float NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bit(2) NOT NULL,
  `interestrate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_interestrate`
--

INSERT INTO `history_interestrate` (`id`, `startdate`, `percent`, `note`, `status`, `interestrate_id`) VALUES
(1, '2018-10-20', 0.03, 'db', b'01', 1),
(4, '0000-00-00', 0.03, 'vgbhnj', b'00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `interest_rate`
--

CREATE TABLE `interest_rate` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bit(2) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interest_rate`
--

INSERT INTO `interest_rate` (`id`, `name`, `note`, `status`, `createdat`, `updatedat`, `admin_id`) VALUES
(1, 'lãi suất 2%', 'fabr', b'01', '2018-10-20 09:00:45', '2018-10-20 00:00:00', 10),
(2, 'lãi suất 3%', 'zvb', b'01', '2018-10-20 10:11:08', '2018-10-20 00:00:00', 10),
(3, 'lãi suất 1,5', 'gfbx', b'01', '2018-10-20 10:33:10', '2018-10-20 00:00:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `paid_historys`
--

CREATE TABLE `paid_historys` (
  `id` int(11) NOT NULL,
  `id_paid` int(11) NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `money` float NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paid_historys`
--

INSERT INTO `paid_historys` (`id`, `id_paid`, `date_paid`, `money`, `status`) VALUES
(4, 5, '2018-11-02 16:18:40', 100000000, 2),
(5, 5, '2018-11-03 03:30:27', 10000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `bks` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `so_khung` int(11) NOT NULL,
  `so_may` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_year` tinyint(4) NOT NULL,
  `register_date` date NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `bks`, `so_khung`, `so_may`, `color`, `category_id`, `manufacture_year`, `register_date`, `attribute_id`, `name`) VALUES
(1, '34343', 545, 0, 'rtr', 7, 127, '2018-11-05', 0, 'honda23'),
(3, '7777', 545, 0, 'rtr', 7, 127, '2018-11-05', 0, 'honda23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributed_id` (`attribute_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interested_id` (`interested_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `historypaid`
--
ALTER TABLE `historypaid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `history_interestrate`
--
ALTER TABLE `history_interestrate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `interestrate_id` (`interestrate_id`);

--
-- Indexes for table `interest_rate`
--
ALTER TABLE `interest_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `paid_historys`
--
ALTER TABLE `paid_historys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bks` (`bks`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `historypaid`
--
ALTER TABLE `historypaid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history_interestrate`
--
ALTER TABLE `history_interestrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interest_rate`
--
ALTER TABLE `interest_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paid_historys`
--
ALTER TABLE `paid_historys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`attribute_id`) REFERENCES `attribute` (`id`),
  ADD CONSTRAINT `category_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `history_interestrate`
--
ALTER TABLE `history_interestrate`
  ADD CONSTRAINT `history_interestrate_ibfk_1` FOREIGN KEY (`interestrate_id`) REFERENCES `interest_rate` (`id`);

--
-- Constraints for table `interest_rate`
--
ALTER TABLE `interest_rate`
  ADD CONSTRAINT `interest_rate_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
