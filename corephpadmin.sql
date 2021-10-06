-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 09:17 PM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corephpadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(4, 'superadmin', '$2y$10$eo7.w0Ttuy8mOBMvDlGqDeewQERkXu//7qO3jXp5NC76LwfAZpNrO', 'rvuWJHMd5LTxLC2J', '$2y$10$LDUi4w/UAM2PgfMoKkLo4.igJX39G5/WQOEDHRaDy3y2KZeIxXggm', '2019-02-16 22:39:57', 'super'),
(7, 'anand', '$2y$10$OrQFRZdSUP3X2kvGZrg.zeplQkxcJAq1s6atRehyCpbEvOVPu8KPe', NULL, NULL, NULL, 'admin'),
(8, 'admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'MyG5Xw2I12EWdJeD', '$2y$10$XL/RhpCz.uQoWE1xV77Wje4I4ker.gtg7YV4yqNwLZfzIYnP7E8Na', '2019-08-22 01:12:33', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `penerbit` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `judul_buku`, `description`, `kategori`, `keyword`, `harga`, `stock`, `penerbit`, `created_at`, `updated_at`) VALUES
(1, 'Kepemimpinan dan seni berbicara', 'Kita melakukannya setiap hari, tetapi bicara kepada orang-orang khususnya yang tidak kita kenal...', 'Umum', 'Kepemimpinan', '50000', '23', 'Gramedia', '2021-10-06 00:00:00', '2021-10-06 00:00:00'),
(2, '7 Habits of Highly effective teens', 'Menjadi remaja itu asik sekaligus menantang. Dalam 7 Kebiasaan Remaja yang Sangat Efektif...', "Umum", 'Remaja', '74000', '245', 'Airlangga', '2021-10-06 00:00:00', '2021-10-06 00:00:00'),
(3, 'Kepemimpinan dan seni berbicara', 'Kita melakukannya setiap hari, tetapi bicara kepada orang-orang khususnya yang tidak kita kenal...', 'Umum', 'Kepemimpinan', '50000', '23', 'Gramedia', '2021-10-06 00:00:00', '2021-10-06 00:00:00'),
(4, '7 Habits of Highly effective teens', 'Menjadi remaja itu asik sekaligus menantang. Dalam 7 Kebiasaan Remaja yang Sangat Efektif...', "Umum", 'Remaja', '74000', '245', 'Airlangga', '2021-10-06 00:00:00', '2021-10-06 00:00:00'),
(5, 'Kepemimpinan dan seni berbicara', 'Kita melakukannya setiap hari, tetapi bicara kepada orang-orang khususnya yang tidak kita kenal...', 'Umum', 'Kepemimpinan', '50000', '23', 'Gramedia', '2021-10-06 00:00:00', '2021-10-06 00:00:00'),
(6, '7 Habits of Highly effective teens', 'Menjadi remaja itu asik sekaligus menantang. Dalam 7 Kebiasaan Remaja yang Sangat Efektif...',"Umum", 'Remaja', '74000', '245', 'Airlangga', '2021-10-06 00:00:00', '2021-10-06 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
