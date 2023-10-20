-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 11:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forex`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(1000) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `verified` int(2) DEFAULT NULL,
  `credit` varchar(200) DEFAULT NULL,
  `deposit` varchar(200) DEFAULT NULL,
  `withdrawl` varchar(200) DEFAULT NULL,
  `current` varchar(200) DEFAULT NULL,
  `bank` varchar(200) DEFAULT NULL,
  `ibn` varchar(200) DEFAULT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` varchar(30) DEFAULT NULL,
  `updated_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `avatar`, `phone`, `about`, `role`, `verified`, `credit`, `deposit`, `withdrawl`, `current`, `bank`, `ibn`, `balance`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Abdul', 'Hannan', 'abdul@gmail.com', 'aa5f9f65b56c061344c609e01f3f021e', 'avatar16463471675473323.jpg', '03204322564', 'Hi i am a web developer', 1, 1, 'a', 'a', 'a', 'a', 'a', 'a', '0', 1, '2022/03/02 05:33:52 PM', '2022/03/20 02:32:18 PM'),
(8, 'Abdul', 'Hannan', 'abdulhannanzarrar001@gmail.com', '4729c08dda9eda15e289bb3c3f967016', NULL, '03204322564', 'abc', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, '2022/03/03 03:29:52 PM', '2022/03/03 03:29:52 PM');

-- --------------------------------------------------------

--
-- Table structure for table `verify_account`
--

CREATE TABLE `verify_account` (
  `id` int(11) NOT NULL,
  `token` varchar(1000) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `created_at` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verify_email`
--

CREATE TABLE `verify_email` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(1000) DEFAULT NULL,
  `created_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_account`
--
ALTER TABLE `verify_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_email`
--
ALTER TABLE `verify_email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `verify_account`
--
ALTER TABLE `verify_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `verify_email`
--
ALTER TABLE `verify_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
