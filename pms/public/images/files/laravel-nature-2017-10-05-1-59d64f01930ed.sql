-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 08:20 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_nature`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `uid`, `name`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'gurdaspur', 1, '2017-09-23 16:37:16', '2017-09-23 16:36:57'),
(2, 1, 'pathankot', 1, '2017-09-23 16:38:42', '2017-09-23 16:37:21'),
(3, 7, 'batala', 1, '2017-09-29 06:02:20', '2017-09-29 06:02:20'),
(4, 1, 'amritsar', 1, '2017-10-01 11:21:13', '2017-10-01 11:21:13'),
(5, 1, 'himachal', 1, '2017-10-01 11:21:25', '2017-10-01 11:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `uid`, `name`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'Head Ache', 1, '2017-09-23 16:53:54', '2017-09-23 16:53:45'),
(2, 7, 'fever', 1, '2017-09-29 06:02:00', '2017-09-29 06:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `table` varchar(50) NOT NULL,
  `tableId` int(11) NOT NULL,
  `action` int(11) NOT NULL COMMENT '1=add,2=delete,3=update,4=trash,5=password',
  `message` int(11) NOT NULL COMMENT '0=error,1=success,2=comment',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `uid`, `table`, `tableId`, `action`, `message`, `updated_at`, `created_at`) VALUES
(1, 1, 'skills', 2, 3, 1, '2017-09-11 05:56:32', '2017-09-11 05:56:32'),
(2, 1, 'skills', 4, 1, 1, '2017-09-11 05:57:54', '2017-09-11 05:57:54'),
(3, 1, 'skills', 5, 1, 1, '2017-09-11 18:31:54', '2017-09-11 18:31:54'),
(4, 1, 'skills', 6, 1, 1, '2017-09-14 19:32:19', '2017-09-14 19:32:19'),
(5, 1, 'projects', 1, 1, 1, '2017-09-14 19:33:18', '2017-09-14 19:33:18'),
(6, 1, 'projects', 3, 1, 1, '2017-09-14 19:41:50', '2017-09-14 19:41:50'),
(7, 1, 'projects', 12, 1, 1, '2017-09-15 05:45:55', '2017-09-15 05:45:55'),
(8, 1, 'projects', 12, 3, 1, '2017-09-15 13:02:57', '2017-09-15 13:02:57'),
(9, 1, 'projects', 12, 3, 1, '2017-09-15 13:03:37', '2017-09-15 13:03:37'),
(10, 1, 'upload_files', 0, 2, 1, '2017-09-15 13:12:54', '2017-09-15 13:12:54'),
(11, 1, 'projects', 12, 3, 1, '2017-09-15 13:16:36', '2017-09-15 13:16:36'),
(12, 1, 'projects', 12, 3, 1, '2017-09-15 13:16:47', '2017-09-15 13:16:47'),
(13, 1, 'projects', 12, 3, 1, '2017-09-16 04:39:06', '2017-09-16 04:39:06'),
(14, 1, 'projects', 12, 3, 1, '2017-09-16 05:20:18', '2017-09-16 05:20:18'),
(15, 1, 'projects', 12, 3, 1, '2017-09-16 05:21:10', '2017-09-16 05:21:10'),
(16, 1, 'upload_files', 0, 2, 1, '2017-09-16 06:04:58', '2017-09-16 06:04:58'),
(17, 1, 'upload_files', 0, 2, 1, '2017-09-16 06:05:00', '2017-09-16 06:05:00'),
(18, 1, 'upload_files', 0, 2, 1, '2017-09-16 06:05:01', '2017-09-16 06:05:01'),
(19, 1, 'upload_files', 0, 2, 1, '2017-09-16 06:05:03', '2017-09-16 06:05:03'),
(20, 1, 'upload_files', 0, 2, 1, '2017-09-16 06:05:05', '2017-09-16 06:05:05'),
(21, 1, 'projects', 12, 3, 1, '2017-09-16 06:05:07', '2017-09-16 06:05:07'),
(22, 1, 'projects', 12, 3, 1, '2017-09-16 06:08:13', '2017-09-16 06:08:13'),
(23, 1, 'upload_files', 0, 2, 1, '2017-09-16 06:10:45', '2017-09-16 06:10:45'),
(24, 1, 'skills', 3, 3, 1, '2017-09-17 15:57:45', '2017-09-17 15:57:45'),
(25, 1, 'users', 4, 1, 1, '2017-09-18 06:06:41', '2017-09-18 06:06:41'),
(26, 1, 'users', 5, 1, 1, '2017-09-18 06:13:43', '2017-09-18 06:13:43'),
(27, 1, 'users', 6, 1, 1, '2017-09-18 06:14:26', '2017-09-18 06:14:26'),
(28, 1, 'users', 1, 3, 1, '2017-09-18 13:05:48', '2017-09-18 13:05:48'),
(29, 1, 'users', 2, 3, 1, '2017-09-18 13:07:01', '2017-09-18 13:07:01'),
(30, 1, 'users', 2, 5, 1, '2017-09-18 13:07:25', '2017-09-18 13:07:25'),
(31, 1, 'users', 5, 3, 1, '2017-09-19 05:34:29', '2017-09-19 05:34:29'),
(32, 1, 'users', 4, 3, 1, '2017-09-19 05:34:46', '2017-09-19 05:34:46'),
(33, 1, 'users', 3, 3, 1, '2017-09-19 06:42:25', '2017-09-19 06:42:25'),
(34, 1, 'skills', 7, 1, 1, '2017-09-19 07:53:31', '2017-09-19 07:53:31'),
(35, 1, 'skills', 7, 3, 1, '2017-09-19 07:53:39', '2017-09-19 07:53:39'),
(36, 1, 'skills', 7, 3, 1, '2017-09-19 07:55:26', '2017-09-19 07:55:26'),
(37, 1, 'skills', 7, 3, 1, '2017-09-19 07:55:28', '2017-09-19 07:55:28'),
(38, 1, 'skills', 8, 1, 1, '2017-09-19 07:55:33', '2017-09-19 07:55:33'),
(39, 1, 'users', 5, 3, 1, '2017-09-19 08:12:32', '2017-09-19 08:12:32'),
(40, 1, 'users', 4, 3, 1, '2017-09-19 08:12:47', '2017-09-19 08:12:47'),
(41, 1, 'skills', 9, 1, 1, '2017-09-19 09:10:12', '2017-09-19 09:10:12'),
(42, 1, 'projects_assigned', 1, 1, 1, '2017-09-19 12:06:24', '2017-09-19 12:06:24'),
(43, 1, 'projects_assigned', 2, 1, 1, '2017-09-19 12:09:51', '2017-09-19 12:09:51'),
(44, 1, 'users', 7, 1, 1, '2017-09-20 08:07:14', '2017-09-20 08:07:14'),
(45, 1, 'projects_assigned', 3, 1, 1, '2017-09-20 15:24:56', '2017-09-20 15:24:56'),
(46, 1, 'projects_assigned', 4, 1, 1, '2017-09-20 15:26:54', '2017-09-20 15:26:54'),
(47, 1, 'projects_assigned', 5, 1, 1, '2017-09-20 16:01:23', '2017-09-20 16:01:23'),
(48, 1, 'projects_assigned', 6, 1, 1, '2017-09-20 16:01:27', '2017-09-20 16:01:27'),
(49, 1, 'projects_assigned', 7, 1, 1, '2017-09-20 16:01:32', '2017-09-20 16:01:32'),
(50, 1, 'projects_assigned', 8, 1, 1, '2017-09-20 16:02:17', '2017-09-20 16:02:17'),
(51, 1, 'projects_assigned', 9, 1, 1, '2017-09-20 16:06:34', '2017-09-20 16:06:34'),
(52, 1, 'projects_assigned', 10, 1, 1, '2017-09-20 18:15:08', '2017-09-20 18:15:08'),
(53, 1, 'projects_assigned', 11, 1, 1, '2017-09-20 18:15:11', '2017-09-20 18:15:11'),
(54, 1, 'projects_assigned', 12, 1, 1, '2017-09-20 18:37:21', '2017-09-20 18:37:21'),
(55, 1, 'users', 7, 3, 1, '2017-09-22 15:46:48', '2017-09-22 15:46:48'),
(56, 1, 'city', 1, 1, 1, '2017-09-23 16:36:57', '2017-09-23 16:36:57'),
(57, 1, 'city', 1, 3, 1, '2017-09-23 16:37:12', '2017-09-23 16:37:12'),
(58, 1, 'city', 1, 3, 1, '2017-09-23 16:37:16', '2017-09-23 16:37:16'),
(59, 1, 'city', 2, 1, 1, '2017-09-23 16:37:21', '2017-09-23 16:37:21'),
(60, 1, 'city', 2, 3, 1, '2017-09-23 16:38:42', '2017-09-23 16:38:42'),
(61, 1, 'diseases', 1, 1, 1, '2017-09-23 16:53:45', '2017-09-23 16:53:45'),
(62, 1, 'diseases', 1, 3, 1, '2017-09-23 16:53:51', '2017-09-23 16:53:51'),
(63, 1, 'diseases', 1, 3, 1, '2017-09-23 16:53:54', '2017-09-23 16:53:54'),
(64, 7, 'diseases', 2, 1, 1, '2017-09-29 06:02:00', '2017-09-29 06:02:00'),
(65, 7, 'city', 3, 1, 1, '2017-09-29 06:02:20', '2017-09-29 06:02:20'),
(66, 1, 'patients', 1, 1, 1, '2017-10-01 05:12:25', '2017-10-01 05:12:25'),
(67, 1, 'patients', 2, 1, 1, '2017-10-01 05:19:27', '2017-10-01 05:19:27'),
(68, 1, 'patients', 2, 3, 1, '2017-10-01 06:06:45', '2017-10-01 06:06:45'),
(69, 1, 'patients', 2, 3, 1, '2017-10-01 06:06:57', '2017-10-01 06:06:57'),
(70, 1, 'patients', 1, 3, 1, '2017-10-01 06:14:24', '2017-10-01 06:14:24'),
(71, 1, 'patients', 1, 3, 1, '2017-10-01 06:15:27', '2017-10-01 06:15:27'),
(72, 1, 'patients', 1, 3, 1, '2017-10-01 06:17:53', '2017-10-01 06:17:53'),
(73, 1, 'city', 4, 1, 1, '2017-10-01 11:21:14', '2017-10-01 11:21:14'),
(74, 1, 'city', 5, 1, 1, '2017-10-01 11:21:25', '2017-10-01 11:21:25'),
(75, 1, 'occupation', 2, 3, 1, '2017-10-01 16:27:55', '2017-10-01 16:27:55'),
(76, 1, 'occupation', 2, 3, 1, '2017-10-01 16:28:07', '2017-10-01 16:28:07'),
(77, 1, 'patients', 2, 3, 1, '2017-10-01 18:13:18', '2017-10-01 18:13:18');

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
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id`, `uid`, `name`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'Head Ache', 1, '2017-09-23 16:53:54', '2017-09-23 16:53:45'),
(2, 7, 'engineer', 1, '2017-10-01 16:28:07', '2017-09-29 06:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `martial` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `number` varchar(100) NOT NULL,
  `main_problem` text NOT NULL,
  `additional_problem` text NOT NULL,
  `occupation` int(11) NOT NULL,
  `admission_date` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `uid`, `name`, `age`, `gender`, `martial`, `city`, `address`, `number`, `main_problem`, `additional_problem`, `occupation`, `admission_date`, `updated_at`, `created_at`) VALUES
(1, 1, 'ramu', '10', 'Male', 'Single', '1', '#8487e75,27ry8372', '6666666', '[\"1\"]', '[\"1\",\"2\"]', 1, '2017-09-22', '2017-10-01 06:17:53', '2017-10-01 05:12:25'),
(2, 1, 'room', '4', 'Male', 'Single', '1', 'hgbjmbn jv m', '7777', '[\"1\",\"2\"]', '[\"2\"]', 1, '2017-09-30', '2017-10-01 18:13:17', '2017-10-01 05:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=admin,2=employee,3=client',
  `designation` int(11) NOT NULL COMMENT '1=backend,2=frontend,3=project manager,4=seo',
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL COMMENT '1=m,2=f',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `designation`, `fname`, `lname`, `email`, `password`, `remember_token`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Gurpreet', 'Singh', 'admin@gmail.com', '$2y$10$W0/9kqmT38zrtmhuMeOqyeJjEk3kxCryXd/tZdYSzayU/CKoJqN7q', 'Z4zBpLHk7k7f84MfqYYCIlrxZ28XrTnBwmjhdHbYdEl79cNVhyUilEtYFzXY', 0, 0, '2017-08-27 02:31:49', '2017-09-18 07:35:48'),
(2, 3, 0, 'rahul', 'sharma', 'rr@gmail.co', '$2y$10$CnLd77NOpm.dMHq0MJOFHuHhcTNpNJgOX0zG2zViudz0lxlWtOi8y', 'A5z0mfB9526hpPm7Gj134593jMqSaYi3Qvny9MN4k0ch4s9R7J22mnxXg2zm', 0, 1, '2017-09-16 01:01:41', '2017-09-18 07:37:25'),
(3, 2, 1, 'anju', 'batta', 'hhhh@hhh.er', '$2y$10$p3zcyUVZKRCrAuMKcaBt6eCVUgikXtMzEa3ClTUFZkdV1paViVZKO', NULL, 0, 0, '2017-09-16 01:04:53', '2017-09-19 01:12:25'),
(4, 3, 0, 'Gurpreet', 'gfk', 'user@gmail.com', '$2y$10$iH3yZpH8wdrAN.F5fEXm0.Jor48OUBwWRdJdSu58cjwrxREYPN.sy', NULL, 0, 1, '2017-09-18 00:36:40', '2017-09-19 02:42:47'),
(5, 3, 0, 'Paradise', 'Solutions', 'paradise@gmail.com', '$2y$10$o.HppW12EWNLUBokKQ6mmeThibJ8B353uvrZFgJLmnzSiY8r6ISDm', NULL, 0, 1, '2017-09-18 00:43:43', '2017-09-19 02:42:31'),
(6, 2, 2, 'Sunny', 'Kumar', 'sunny@gmail.com', '$2y$10$0P4hJYstssm1CRJOWs/C8eOmEuJ.DGx0S1RumXgTeQJL6BoowwnuK', 'Eu89b4aD4CpuQfsQtDZ4iy1UIc5C0CxpwQzmNfIApb5lR5EaX1w5Gw0e7vx2', 0, 1, '2017-09-18 00:44:26', '2017-09-18 00:44:26'),
(7, 2, 2, 'Nitin', 'Kanish', 'nitinkanish@gmail.com', '$2y$10$c6vPXgBf4kCTGMVqvLuHLOcHjVVuDCyW/BfyHQe8.aR0XrTrSQEGu', 'RMUaphEQ3BGuYd3u26gkhkdTLJLCTwbDSgK9iv0gJ1dmyuPdTgk42HcJxFZu', 1, 1, '2017-09-20 02:37:14', '2017-09-22 10:16:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
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
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
