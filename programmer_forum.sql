-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 09:21 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programmer_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2019_07_26_182352_create_contactuses_table', 1),
(16, '2019_09_13_165529_create_ratings_table', 2),
(18, '2014_10_12_000000_create_users_table', 3),
(19, '2014_10_12_100000_create_password_resets_table', 3),
(20, '2019_08_02_013843_create_user_roles_table', 3),
(21, '2019_09_11_220232_create_user_posts_table', 3),
(22, '2019_09_15_223449_create_user_programmers_table', 3);

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '4',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `role_id`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sagor Banik', 'baniksgr@gmail.com', NULL, '01688655785', '$2y$10$rk4IN4at5itKwNKYaJnJV.Fog2.v2X3IduNBtK9qu1j7w0/rM51s6', '1', 'U20195d7e896dsdsda', 'c7GqZj7p7AQjTsDFwaHYojxJZvmCjtOrzY46dUWGiYIH4P7FoOiQd1AxnKmY', '2019-09-15 17:12:13', '2019-09-15 17:12:13'),
(2, 'Rashed', 'Rashed@gmail.com', NULL, '01679299282', '$2y$10$0jAsoJWDOA/RA.feghlUB.gvx0z7k47M5YS1tGVez8JJw69QOHpJ.', '1', 'U20195d7e896b88b8c', NULL, '2019-09-15 18:56:43', NULL),
(3, 'shefat', 'shefat@user.com', NULL, NULL, '$2y$10$VzUm10x98.mzzoX.zsnJ2ewiYGkuoOZO/gPml5Gty5eKv6oc7ED2.', '4', NULL, 'sPpV3PXg3A3pjZUpyV6W70ND3eSqqeNY5DhtpvNcHKuI74LEFfxi1mGxMBpV', '2019-09-18 06:10:43', '2019-09-18 06:10:43'),
(4, 'Sagor Banik2', 'baniksgr2@gmail.com', NULL, '01778366673', '$2y$10$99TGBcekui2UKfy2DlMmTuUNoKjfLoIeAEiMGlDzb9LPryDDBQkB2', '2', 'U20195d81d0ecebd1b', 'I3xCxupGGHs8rNMmZkXP3egniTSUYlRkiGhRzdf3PwFFvyLCEo4ueE7CVZEc', '2019-09-18 06:38:37', NULL),
(5, 'Programmer', 'programmer@gmail.com', NULL, NULL, '$2y$10$CXZP6HsDXzhe/WudVEbrIeTUk/PyGJ7Aq6pBFHZdmNsbzfYxBXFqm', '4', NULL, 'WTXeeUqL6eI2rAJIV6gKNNgukSnTEAQ887WUVsxlidbNitogwIdQ6SCixePf', '2019-09-18 07:04:31', '2019-09-18 07:04:31'),
(6, 'user', 'user12@gmail.com', NULL, NULL, '$2y$10$TYStgTwFXI2uc3vOlIBvEuaLOmqjJSpFJAtG2PvRQvKN6O5ysNOsq', '4', NULL, 'FjfIpyOSe8naQsNWgqDekvqHo495TpiJvyOVywJWysKCmhTJ0mUEKra9KOKU', '2019-09-18 07:05:17', '2019-09-18 07:05:17'),
(7, 'Muktar', 'muktar@gmail.com', NULL, NULL, '$2y$10$dOGdz3mjNNS/0eTrsoXfC.8kjg2fvQwmqL8w1264bwp9s7S4uwWgq', '4', NULL, 'BnU9wq7TQvF2l2lEHukp9OJfuldts0vLq5Nymv60Q2pvS2bOQIbWbB6opZ9Z', '2019-09-18 07:07:12', '2019-09-18 07:07:12'),
(8, 'Sabuj Banik', 'Sabuj@gmail.com', NULL, NULL, '$2y$10$tD9ace3m4k0aU34VMLLt6OUry0ssMDu2tPgf1roDjy0Umdie4jxeW', '4', NULL, 'TJxecilHtYpz5KANYZDaXIWK8SNHJWJCVjphGlBfNfnKfHVbtx2lNm35DxL9', '2019-09-18 07:14:45', '2019-09-18 07:14:45'),
(9, 'Masum', 'masum@gmail.com', NULL, NULL, '$2y$10$5YLvKpKMr.4PszCwfVRsm.AUQc7QBHSbfyZbE76vNd6F4ca8kdMb2', '4', NULL, 'CIbhM911cxYNsMuS2hera6Yr6tSiauEoU1DfDxwa9ZRmAqijZTR8diJuLwB5', '2019-09-18 08:46:21', '2019-09-18 08:46:21'),
(10, 'Sagor Swe', 'baniksagor@gmail.com', NULL, NULL, '$2y$10$XKxHKzVSVL7pb9nPVWGwRuQ3ZHNuboro3a5NAMtWRNf34ibMBUwJ2', '4', NULL, NULL, '2019-09-18 10:45:19', '2019-09-18 10:45:19'),
(11, 'Sabuj', 'Sabuj2@gmail.com', NULL, NULL, '$2y$10$lTWGsjHU2k5e4BCn.XfG/OFv6e48zGVbnc2iFRGOTavlTr72cxBT.', '4', NULL, '6yj5rynzsgiuHDG6muVipNIgFY8S1xRIEncScb1ItcA5FjsHBVIYyE1vTDix', '2019-09-19 18:26:16', '2019-09-19 18:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_subcatagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`post_id`, `post_creator`, `post_title`, `post_catagory`, `post_subcatagory`, `post_description`, `post_status`, `created_at`, `updated_at`) VALUES
(14, 'Muktar', 'Printing string array with for-loop doesn\'t function properly (C++)', 'Programming', 'JAVA', 'Printing string array with for-loop doesn\'t function properly (C++)Printing string array with for-loop doesn\'t function properly (C++).++Java related any post', 0, '2019-09-18 07:07:57', '2019-09-19 18:38:34'),
(15, 'Muktar', 'What is the difference between string.Empty and null in memory', 'Programming', 'C', 'What is the difference between string.Empty and null in memory.What is the difference between string.Empty and null in memory.', 0, '2019-09-18 07:12:39', '2019-09-18 07:19:53'),
(16, 'Sabuj Banik', 'How to write generic class with automapper?', 'Non Programming', 'OTHER', 'How to write generic class with automapper?How to write generic class with automapper?', 0, '2019-09-18 07:21:21', '2019-09-19 18:38:37'),
(17, 'Sagor Swe', 'Printing string array with for-loop doesn\'t function properly (C++)', 'Programming', 'PHP', 'hello', 0, '2019-09-18 11:14:39', '2019-09-19 18:38:39'),
(18, 'Sabuj', 'Cannot run .jar executable with bundled dependencies for javaFX', 'Programming', 'JAVA', 'Cannot run .jar executable with bundled dependencies for javaFXCannot run .jar executable with bundled de,', 0, '2019-09-19 18:34:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_programmers`
--

CREATE TABLE `user_programmers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_programmers`
--

INSERT INTO `user_programmers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Zahid Hasan', 'z@gmil.com', '$2y$10$Jq9jfyHLyoA4/KyDArMceuwJ8c5g/Bs9/qgKAfDxs0GMzm2LArcge', '2019-09-15 19:54:35', NULL),
(6, 'sohel', 'sohel@gmail.com', '$2y$10$KNW1XNlgKL6EB15peNu2n.nG/BTciPPSC5ibPWlfhp64kl0D02Fn2', '2019-09-17 09:40:24', NULL),
(7, 'sir', 'sir@gmail.com', '$2y$10$MC8ElUaAoaPRU/uN/oGs8e2F1deZZ0YVjo1m.rvFQpThsoXPrJPX6', '2019-09-17 10:30:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_slug` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `role_slug`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'UR01', 1, '2019-09-15 00:24:12', NULL),
(2, 'Author', 'UR02', 1, '2019-09-15 01:14:14', NULL),
(3, 'Super Admin', 'UR03', 1, '2019-09-14 20:20:34', NULL),
(4, 'user', '78uy78', 1, '2019-09-17 21:13:07', NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user_programmers`
--
ALTER TABLE `user_programmers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_programmers_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_programmers`
--
ALTER TABLE `user_programmers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
