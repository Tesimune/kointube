-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 12:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kointube`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `bank_code` int(11) DEFAULT NULL,
  `bank_name` varchar(29) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_code`, `bank_name`) VALUES
(1, 44, 'Access Bank Nigeria Plc'),
(2, 63, 'Diamond Bank Plc'),
(3, 50, 'Ecobank Nigeria'),
(4, 84, 'Enterprise Bank Plc'),
(5, 70, 'Fidelity Bank Plc'),
(6, 11, 'First Bank of Nigeria Plc'),
(7, 214, 'First City Monument Bank'),
(8, 58, 'Guaranty Trust Bank Plc'),
(9, 30, 'Heritaage Banking Company Ltd'),
(10, 301, 'Jaiz Bank'),
(11, 82, 'Keystone Bank Ltd'),
(12, 14, 'Mainstreet Bank Plc'),
(13, 76, 'Skye Bank Plc'),
(14, 39, 'Stanbic IBTC Plc'),
(15, 232, 'Sterling Bank Plc'),
(16, 32, 'Union Bank Nigeria Plc'),
(17, 33, 'United Bank for Africa Plc'),
(18, 215, 'Unity Bank Plc'),
(19, 35, 'WEMA Bank Plc'),
(20, 57, 'Zenith Bank International');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bank_code` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `star` varchar(1000) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE `streams` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `categories` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `star` varchar(1000) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `streams`
--

INSERT INTO `streams` (`id`, `user_id`, `title`, `slug`, `description`, `categories`, `price`, `thumbnail`, `url`, `trailer`, `star`, `time`) VALUES
(1, '14', 'avengers', 'xdvrdbdbdsf', 'vvv bdbdf dfbfbbb b fbdbbf bfbfb', 'sci-fi', '100', 'uploads/images/1.jpg', 'uploads/videos/1.mp4', 'uploads/trailers/1.mp4', '50', '2021-11-02 00:39:51'),
(3, '14', 'game of thrones', 'game_of_thrones', 'game of thrones', 'series', '20000', 'uploads/images/game_of_thrones.jpg', 'uploads/videos/1.mp4', 'uploads/trailers/1.mp4', '20', '2021-11-02 00:40:03'),
(5, '14', 'the walker', 'the_walker', 'games', 'series', '500', 'uploads/images/the_walker.jpg', 'uploads/videos/1.mp4', 'uploads/trailers/1.mp4', '32', '2021-11-02 00:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `datetime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `user_type`, `datetime`) VALUES
(8, 'baba', 'balogun', 'babax', 'user@user.com', '$2y$10$OwY6bXt6Mcx5hfyZ1dVi2ewTlbDL1vyfUi6lJyWhKh3DVlvSeAIsW', 'user', '2021-11-02 00:24:52'),
(14, 'Teslim', 'Abdulwahab', 'teslim', 'admin@admin.com', '$2y$10$jXA8u2rCYRLO0TYDJYPpj.UdQsaY8BXTZvazzxuvhXkmOUrnUNxuW', 'admin', '2021-11-02 00:24:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creator`
--
ALTER TABLE `creator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
