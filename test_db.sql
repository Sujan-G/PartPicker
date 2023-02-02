-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 06:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(255) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `popular` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`, `image`, `meta_title`, `status`, `popular`, `created_at`) VALUES
('1', 'CPU', 'cpu', 'cpu.jpg', 'cpu', 1, 0, '2023-01-15 16:33:03'),
('2', 'MotherBoard', 'motherboard', 'motherboard.jpg', 'mb', 1, 1, '2023-02-02 16:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `image`, `meta_keywords`, `price`, `slug`, `status`) VALUES
(1, 1, '10th Gen Intel® Core™ i3-10100 Desktop Processor 6M Cache, 4 Cores up to 4.3GHz LGA 1200 (Intel® 400 Series Chipset) 65W', 'Intel Processors', 'i31010.jpg', 'i310101', 9650, 'intel', 0),
(2, 1, '10th Gen Intel® Core™ i3-10105F Desktop Processor 4 Cores up to 4.4GHz Without Processor Graphics LGA 1200 (Intel® 400 Series Chipset) 65W', 'Intel Processors', 'i31010f.jpg', 'i31010f', 6000, 'intel', 0),
(3, 1, '9th Gen Intel® Core™ i3-9100F Desktop Processor 4 Cores up to 4.2GHz Without Processor Graphics LGA 1151 (Intel® 300 Series Chipset) 65W BX80684i39100F', 'Intel Processors', 'i39100f.jpg', 'i39100f', 6900, 'intel', 0),
(4, 1, '10th Gen Intel® Core™ i5-10400 Desktop Processor 12M Cache, 6 Cores up to 4.3GHz LGA 1200 (Intel® 400 Series Chipset) 65W BX8070110400', 'Intel Processors', 'i5-10400.jpg', 'i510400 ', 11100, 'intel', 0),
(5, 1, '9th Gen Intel® Core™ i5-9400F Desktop Processor 6 Cores up to 4.1GHz Without Processor Graphics LGA 1151 (Intel® 300 Series Chipset) 65W BX80684I59400F', 'Intel Processors', 'i5-9400F.jpg', 'i59400F', 10200, 'intel', 0),
(6, 1, '10th Gen Intel® Core™ i7-10700 Desktop Processor 8 Cores up to 4.8GHz LGA 1200 (Intel® 400 Series Chipset) 65W BX8070110700', 'Intel Processors', 'i7-10700.jpg', 'i710700', 23300, 'intel', 0),
(7, 1, '11th Gen IntelÂ® Core i7-11700KF Desktop Processor 8 Cores up to 5.0GHz Unlocked Without Processor Graphics LGA 1200 (IntelÂ® 500 Series Chipset) 125W BX8070811700KF', 'Intel Processors', 'i7-11700KF.jpg', 'i711700KF', 26400, 'intel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `token`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@mail.com', 'e6d47446e698dcf80c3b3a9175b10e81878b05dc1f515f74c858ddf5d6fdfdef'),
(5, 'cyber', 'b59c67bf196a4758191e42f76670ceba', 'cyberghostganji@gmail.com', '03257d17a5eb3362ffc70cea2789a84dfb7428aa01be01f3ccffa743c4003233'),
(7, 'ss', '934b535800b1cba8f96a5d72f72f1611', 'sujansuji2009@gmail.com', 'b2e281bfc68daf422b5eeb32dc2269b8324c8cfb3416d0080df29a42abef0f75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
