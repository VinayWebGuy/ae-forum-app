-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 09:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `tags` varchar(500) DEFAULT NULL,
  `votes` int(11) NOT NULL DEFAULT 0,
  `no_of_responses` int(11) NOT NULL DEFAULT 0,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `queries_asked` int(11) NOT NULL DEFAULT 0,
  `queries_voted` int(11) NOT NULL DEFAULT 0,
  `queries_respond` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `username`, `email`, `pwd`, `queries_asked`, `queries_voted`, `queries_respond`, `status`, `created_at`, `updated_at`) VALUES
(1, 'c2Ll3WiJL58zbaa8', 'Vinay', 'vinaywebguy@gmail.com', '$2y$12$AKiLdmcsMVUBgoLmbkFHfuA3A6dFzMd6SKbv4gArC1lZw6Leaeqde', 0, 0, 0, 1, '2024-04-18 12:49:24', '2024-04-18 12:49:24'),
(2, 'IcoZcfNsUv1BNWhv', 'aman1997', 'aman@yahoo.com', '$2y$12$0sxhoZ0x91rdRsNWNrIVaOsmKjeUCIwR82i9DEhUc3S.RYnrVp3MC', 0, 0, 0, 1, '2024-04-18 13:17:49', '2024-04-18 13:17:49'),
(3, 'lAK0oB4usHw0MCnY', 'iamaarushi470', 'arushi@outlook', '$2y$12$exbVRHhugT2/2FFlgE4Mn.AMjo8fQ.yuoOq7LFekJvaLRhPHof0xu', 0, 0, 0, 1, '2024-04-18 13:24:50', '2024-04-18 13:24:50'),
(4, 'sl2nSa9DcG1MG0zL', 'ksingh47', 'kirtansingh47@gmail.com', '$2y$12$qLospJVsqHT7J7lcWCDFXez4Opjq3.1kNU99ktufvfqOa5WwKdl4S', 0, 0, 0, 1, '2024-04-20 10:49:52', '2024-04-20 10:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
