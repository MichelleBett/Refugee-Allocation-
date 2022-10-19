-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 09:19 PM
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
-- Database: `refapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filename` varchar(20) NOT NULL,
  `fullname` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `camp` varchar(20) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `stay_in_months` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filename`, `fullname`, `country`, `camp`, `religion`, `stay_in_months`) VALUES
('background.jpg', 'Michelle Bett', 'Kenya', 'Kakuma', 'christian', 5),
('chicken.jpg', 'Jared', 'Ethopia', 'Dadaab', 'muslim', 1),
('Refugee documents.pd', 'thet', 'rogue', 'gtdf', 'gygvb', 2),
('Refugee documents.pd', 'thet', 'rogue', 'gtdf', 'gygvb', 2),
('chicken.jpg', 'Jared', 'Ethopia', 'Dadaab', 'muslim', 1),
('background.jpg', 'Michelle Bett', 'Kenya', 'Kakuma', 'christian', 5);

-- --------------------------------------------------------

--
-- Table structure for table `trackstay`
--

CREATE TABLE `trackstay` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trackstay`
--

INSERT INTO `trackstay` (`id`, `fullname`, `check_in`, `check_out`) VALUES
(1, 'Kigen', '2022-07-29', '2022-11-30'),
(2, 'Rachael', '2022-08-06', '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(40) NOT NULL,
  `user_type` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `user_type`, `password`) VALUES
(1, 'Michelle', 'michelle@gmail.com', 79865784, 'admin', '900150983cd24fb0d6963f7d28e17f72'),
(2, 'Sheraton', 'sheraton@gmail.com', 707267388, 'user', 'eb769f2ba18903cdfb62cfc3b50dc15d'),
(3, 'emmanuel', 'emmanuel@gmai.com', 78668657, 'user', '900150983cd24fb0d6963f7d28e17f72'),
(4, 'hjk', 'bhjjbhjb@gmail.com', 797878, 'user', '08f8e0260c64418510cefb2b06eee5cd'),
(5, 'theworld', 'theworld@gmail.com', 785634636, 'user', '08f8e0260c64418510cefb2b06eee5cd'),
(6, 'me', 'jvnfvj@gmail.com', 70509594, 'user', '08f8e0260c64418510cefb2b06eee5cd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trackstay`
--
ALTER TABLE `trackstay`
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
-- AUTO_INCREMENT for table `trackstay`
--
ALTER TABLE `trackstay`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
