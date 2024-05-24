-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 12:57 PM
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
-- Database: `icsa_webprogramming_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(10) NOT NULL,
  `categoryCode` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(9,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categoryCode`, `name`, `price`) VALUES
('AIP15', 'SP', 'Apple iPhone 15', '650.500'),
('HPP2', 'PC', 'HP Pavilion 2', '175.500'),
('LL1', 'PC', 'Lenovo Legion 1', '150.250'),
('PS4', 'CSL', 'PlayStation 4', '700.000'),
('SGS24', 'SP', 'Samsung Galaxy S24', '520.100'),
('SGT1', 'TAB', 'Samsung Galaxy Tab 1', '123.560'),
('XB1', 'CSL', 'XBOX 1', '650.000');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` varchar(5) NOT NULL,
  `seqNo` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `seqNo`, `name`, `description`) VALUES
('CSL', 4, 'Consoles', 'PS, XBox'),
('PC', 1, 'Personal Computer', 'Get our latest Personal Computers (PCs)!'),
('SP', 2, 'Smartphones', 'Slick'),
('TAB', 3, 'Tablet', 'Tablet PCs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_productcategory` (`categoryCode`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_productcategory` FOREIGN KEY (`categoryCode`) REFERENCES `product_category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
