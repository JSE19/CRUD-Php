-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 10:37 AM
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
-- Database: `kodex_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES
(3, 'Ora Soup', 'edeh, ogiri, aku, fish', 'emmanuelnweke@gmail.com', '2022-09-30 13:57:00'),
(4, 'Vegetable Soup', 'Pumpkin, Waterleaf, Smokedfish', 'gloryegbala@yahoo.com', '2022-09-30 14:15:27'),
(5, 'Beans', 'beans', 'jeromeazila@hotmail.com', '2022-09-30 14:28:42'),
(6, 'Scorched Egg', 'egg, salt, seasoning', 'jeromeazila@hotmail.com', '2022-10-05 06:33:04'),
(7, 'Fried Rice', 'Rice, seasoning, chicken, vegetables', 'admin@demo.com', '2022-10-05 13:40:47'),
(8, 'Chicken Pie', 'chicken and flour', 'grafilcomputers@gmail.com', '2022-10-06 13:26:35'),
(9, 'Egusi', 'Egusi, meat, fish,oil,pumpkin', 'jeromeazila@hotmail.com', '2022-10-07 11:06:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
