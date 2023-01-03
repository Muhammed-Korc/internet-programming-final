-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 يناير 2023 الساعة 21:01
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet`
--

-- --------------------------------------------------------

--
-- بنية الجدول `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `card`
--

INSERT INTO `card` (`id`, `name`, `price`) VALUES
(26, 'Saat', '50$'),
(27, 'Saat', '2023$'),
(28, 'Saat', '120$');

-- --------------------------------------------------------

--
-- بنية الجدول `card_satranc`
--

CREATE TABLE `card_satranc` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `card_satranc`
--

INSERT INTO `card_satranc` (`id`, `name`, `price`) VALUES
(10, 'satran', '5000$'),
(11, 'satranc', '440$');

-- --------------------------------------------------------

--
-- بنية الجدول `card_telefonlar`
--

CREATE TABLE `card_telefonlar` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `prod`
--

CREATE TABLE `prod` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `prod`
--

INSERT INTO `prod` (`id`, `name`, `price`, `image`) VALUES
(24, 'Saat', '550$', 'images/4.jpg'),
(25, 'Saat', '50$', 'images/6.jpg'),
(26, 'Saat', '2023$', 'images/5.jpg'),
(27, 'Saat', '370$', 'images/3.jpg'),
(28, 'Saat', '120$', 'images/1.png'),
(30, 'Saat', '3000$', 'images/8.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `satranc`
--

CREATE TABLE `satranc` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `satranc`
--

INSERT INTO `satranc` (`id`, `name`, `price`, `image`) VALUES
(71, 'satran', '5000$', 'images/5.png'),
(72, 'satranc', '1000$', 'images/é.jpg'),
(73, 'satranc', '100$', 'images/6.jpg'),
(74, 'satranc', '440$', 'images/1.jpg'),
(75, 'satranc', '740$', 'images/3.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `telefonlar`
--

CREATE TABLE `telefonlar` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `telefonlar`
--

INSERT INTO `telefonlar` (`id`, `name`, `price`, `image`) VALUES
(3, 'Telefone', '800$', 'images/6.jpg'),
(4, 'Telefone', '1000$', 'images/9.jpg'),
(5, 'Telefone', '400$', 'images/12.jpg'),
(6, 'Telefone', '100$', 'images/8.jpg'),
(7, 'Telefone', '50$', 'images/4.jpg'),
(8, 'Telefone', '3500$', 'images/10.jpg'),
(9, 'Telefone', '250$', 'images/11.jpg'),
(10, 'Telefone', '350$', 'images/1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_satranc`
--
ALTER TABLE `card_satranc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satranc`
--
ALTER TABLE `satranc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telefonlar`
--
ALTER TABLE `telefonlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `card_satranc`
--
ALTER TABLE `card_satranc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `satranc`
--
ALTER TABLE `satranc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `telefonlar`
--
ALTER TABLE `telefonlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
