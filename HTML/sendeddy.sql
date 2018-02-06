-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2018 at 06:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sendeddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternative_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `alternative_email`, `phone`, `address`, `country`, `state`, `city`, `password`, `remember_token`, `status`, `additional_info`, `created_at`, `updated_at`) VALUES
(2, 'Nirav', 'Patel', 'nirav.p@tasolglobal.com', NULL, '7897897897', NULL, NULL, NULL, NULL, '$2y$10$BsSpcB604wufQM3F3kyRP.TkE6ZfEzp/orBQzyjrVQ4inCFHeWVxG', 'lzQYwrIL8fOzilOt3AeYLNXL5VlgtjLomA2FitMnOhltMF60FQudy7GVR1TF', 'active', NULL, '2018-01-27 01:07:00', '2018-01-30 23:39:32'),
(3, 'Nras', 'asdfassd', 'asd@sd.asd', NULL, '1231323211', NULL, NULL, NULL, NULL, '$2y$10$SyY7tDLz5isT.wmhlbkv8Oo.VYJXvx9fLwgHkI49YRPAeqI6AZaNi', 'b159QYZ9mFRAYuuKgLINMD69gMjR5wxF7jSdbgXeS3pxA6Sk8gdwO3cdugw9', 'active', NULL, '2018-01-29 05:07:06', '2018-01-30 23:38:53'),
(4, 'asd', 'asd', 'asd@asd.asd', NULL, '1231231231', 'asd', NULL, NULL, NULL, '$2y$10$sQOJTlEkwZFx80w3P3OkmORCYal9fAz7sOCm1F8jUp2y8ynTShxuq', NULL, 'active', NULL, '2018-01-31 03:39:54', '2018-01-31 04:11:18'),
(5, 'asd', 'asd', 'aszxczxcd@asd.asd', NULL, '123123', NULL, NULL, NULL, NULL, '$2y$10$O/PNMmXnU9BXCjQ9vtMuH.s3yMjjjjgBiHZFVzv1iU91fBeffS7wO', NULL, 'active', NULL, '2018-01-31 03:41:20', '2018-01-31 03:42:52'),
(17, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(18, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(19, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(20, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(21, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(22, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(23, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(24, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(25, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(26, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(27, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(28, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(29, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(30, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(31, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(32, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(33, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(34, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(35, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(36, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06'),
(37, 'admin', '', 'irshad@tasolglobal.com', '', '', '', '', '', '', '$2y$10$mUsWI.g/rgkgX7X1sXm5kOOG7VRuoqri9J1dLpf0JzY2uXGVHSJlW', 'PUwYA5XOXYO7E69d9prDV087orpr1rJe2Mf3wvkdZLCc8QL8RLxKcKMItUN9', 'active', '', '2018-01-25 06:06:24', '2018-01-30 06:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `color` varchar(255) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `driver_id`, `type`, `make`, `model`, `year`, `color`, `reg_no`, `status`, `created_at`, `updated_at`) VALUES
(11, 29, 'New', 'M', 'Sudan', 2016, 'Blue', 'VB-as', 1, '2018-02-01 05:23:27', '2018-02-01 05:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclecategory`
--

CREATE TABLE `vehiclecategory` (
  `id` int(11) NOT NULL,
  `vehiclecategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehiclecategory`
--

INSERT INTO `vehiclecategory` (`id`, `vehiclecategory`) VALUES
(12, 'Type');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehiclecategory`
--
ALTER TABLE `vehiclecategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehiclecategory`
--
ALTER TABLE `vehiclecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
