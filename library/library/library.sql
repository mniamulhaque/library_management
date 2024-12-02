-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 08:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_selves`
--

CREATE TABLE `book_selves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_cat` varchar(255) NOT NULL,
  `accession` varchar(255) NOT NULL,
  `titlee` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '0',
  `types` varchar(256) NOT NULL DEFAULT '0',
  `corps` varchar(100) NOT NULL DEFAULT '0',
  `place_of_publication` varchar(255) NOT NULL DEFAULT '0',
  `publisher` varchar(255) NOT NULL,
  `year_of_publication` year(4) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `edition` varchar(255) NOT NULL DEFAULT '0',
  `volume` varchar(255) NOT NULL,
  `pages` varchar(100) NOT NULL,
  `source` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_selves`
--

INSERT INTO `book_selves` (`id`, `book_cat`, `accession`, `titlee`, `author`, `subject`, `types`, `corps`, `place_of_publication`, `publisher`, `year_of_publication`, `price`, `edition`, `volume`, `pages`, `source`, `location`, `active`, `created_at`, `updated_at`) VALUES
(1, 'General Books', '234', 'tyuu', 'kamal', 'desh', '0', '0', 'cumilla', 'kamal', '2023', 1200.00, 'ty', '5', '325', 'thjk', 'dhaka', 1, '2024-11-23 10:08:11', '2024-11-23 10:08:11'),
(2, 'General Books', '0', 'tyuu', 'kamal', 'desh', '0', '0', 'cumilla', 'kamal', '2023', 1200.00, 'No', '5', '325', 'thjk', 'khondhokar, bari', 1, '2024-11-23 11:03:30', '2024-11-23 11:03:30'),
(3, 'General Books', '0', 'Bangla', 'Niamul', 'desh', '0', '0', 'cumilla', 'Niamul', '2024', 6000.00, 'No', '5', '200', 'academy', 'Cumilla', 1, '2024-11-23 11:11:03', '2024-11-23 11:11:03'),
(4, 'General Books', '0', 'Bangla tiso', 'kamal', 'desh', '0', '0', 'cumilla', 'Niamul', '2023', 1200.00, 'No', '5', '200', 'academy', 'Cumilla', 1, '2024-11-23 22:57:34', '2024-11-23 22:57:34'),
(5, 'General Books', '5', 'Bangla tiso', 'kamal', 'desh', '0', '0', 'cumilla', 'Soriful Islam', '2010', 300.00, 'No', '5', '200', 'academy', 'Cumilla', 1, '2024-11-23 23:09:17', '2024-11-23 23:09:17'),
(6, 'General Books', '6', 'Bangla', 'Niamul', 'desh', '0', '0', 'cumilla', 'kamal', '2024', 400.00, 'No', '5', '180', 'academy', 'Cumilla', 1, '2024-11-23 23:11:52', '2024-11-23 23:11:52'),
(7, 'General Books', 'G7', 'English', 'Shad', 'desh', '0', '0', 'cumilla', 'kamal', '2023', 400.00, 'No', '5', '200', 'academy', 'Cumilla', 1, '2024-11-24 01:07:47', '2024-11-24 01:07:47'),
(8, 'General Books', 'G8', 'ICT', 'Rahman', 'desh', '0', '0', 'cumilla', 'kamal', '2023', 1200.00, 'No', '5', '325', 'academy', 'Cumilla', 1, '2024-11-24 01:12:33', '2024-11-24 01:12:33'),
(9, 'Army Publication', 'A1', 'Shimanto', '0', '0', '0', '0', '0', 'Soriful Islam', '2023', 1200.00, '0', '5', '200', 'academy', 'Cumilla', 1, '2024-11-24 01:40:38', '2024-11-24 01:40:38'),
(10, 'Army Publication', 'A10', 'ICTtttt', '0', '0', '0', '0', '0', 'Khaled', '2024', 2000.00, '0', '7', '200', 'academy', 'Cumilla', 1, '2024-11-24 01:48:15', '2024-11-24 01:48:15'),
(11, 'General Books', 'G9', 'Bangla 12', 'kamal', 'desh', '0', '0', 'cumilla', 'mohib', '2023', 3000.00, 'No', '6', '300', 'academy', 'Cumilla', 1, '2024-11-24 01:49:49', '2024-11-24 01:49:49'),
(12, 'General Books', 'G00012', 'Bangla Sahitto', 'Jamal', 'Kabbo', '0', '0', 'Dhaka', 'Km', '2022', 340.00, 'No', '4', '400', 'No', 'No', 1, NULL, NULL),
(13, 'General Books', 'G00013', 'Hemontho', 'Kamal', 'Kabbo', '0', '0', 'Dhaka', 'jl', '2021', 34.00, 'No', '5', '300', 'No', 'No', 1, NULL, NULL),
(14, 'General Books', 'G00014', 'Bissho porichiti', 'Baccho', 'Kabbo', '0', '0', 'Dhaka', 'Rj', '2021', 200.00, 'No', '6', '200', 'No', 'No', 1, NULL, NULL),
(15, 'General Books', 'G00015', 'Chithi', 'Shibo', 'Kabbo', '0', '0', 'Dhaka', 'MM', '2010', 400.00, 'No', '7', '23', 'No', 'No', 1, NULL, NULL),
(16, 'General Books', 'G00016', 'Abeg Jorano', 'Ronjon', 'Kabbo', '0', '0', 'Dhaka', 'Kl', '2019', 300.00, 'No', '3', '500', 'No', 'No', 1, NULL, NULL),
(17, 'General Books', 'G00017', 'Rater Akash', 'Sahjahan', 'Kabbo', '0', '0', 'Kholna', 'JK', '2018', 200.00, 'No', '8', '170', 'No', 'No', 1, NULL, NULL),
(18, 'General Books', 'G00018', 'Porano Din', 'Simo', 'Kabbo', '0', '0', 'Cumilla', 'Jk', '2017', 800.00, 'No', '9', '280', 'No', 'No', 1, NULL, NULL),
(19, 'General Books', 'G00019', 'Pashe Achi', 'Khondokar', 'Goddho', '0', '0', 'Borishal', 'JK', '2024', 400.00, 'No', '2', '340', 'No', 'No', 1, NULL, NULL),
(20, 'Army Publication', 'A00020', 'Soisober', '0', '0', '0', '0', '0', 'Jk', '2023', 350.00, '0', '7', '280', 'No', 'No', 1, NULL, NULL),
(21, 'Army Publication', 'A00021', 'sriti', '0', '0', '0', '0', '0', 'Km', '2022', 340.00, '0', '4', '400', 'No', 'No', 1, NULL, NULL),
(22, 'Army Publication', 'A00022', 'fhirbe tomi', '0', '0', '0', '0', '0', 'jl', '2021', 34.00, '0', '5', '300', 'No', 'No', 1, NULL, NULL),
(23, 'Army Publication', 'A00023', 'abar asbe tomi', '0', '0', '0', '0', '0', 'Rj', '2021', 200.00, '0', '6', '200', 'No', 'No', 1, NULL, NULL),
(24, 'Army Publication', 'A00024', 'Khajana', '0', '0', '0', '0', '0', 'MM', '2010', 400.00, '0', '7', '23', 'No', 'No', 1, NULL, NULL),
(25, 'Army Publication', 'A00025', 'three male', '0', '0', '0', '0', '0', 'Kl', '2019', 300.00, '0', '3', '500', 'No', 'No', 1, NULL, NULL),
(26, 'Army Publication', 'A00026', 'Nell akash', '0', '0', '0', '0', '0', 'JK', '2018', 200.00, '0', '8', '170', 'No', 'No', 1, NULL, NULL),
(27, 'Army Publication', 'A00027', 'Harano din', '0', '0', '0', '0', '0', 'Jk', '2017', 800.00, '0', '9', '280', 'No', 'No', 1, NULL, NULL),
(28, 'Army Publication', 'A00028', 'Pashe Theko', '0', '0', '0', '0', '0', 'JK', '2024', 400.00, '0', '2', '340', 'No', 'No', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_date` varchar(255) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `corps` varchar(255) NOT NULL,
  `unite` varchar(255) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `book_name` int(11) NOT NULL DEFAULT 0,
  `return_date` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'issued',
  `realReturnDate` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `issue_date`, `member_id`, `rank`, `corps`, `unite`, `mobile_no`, `book_name`, `return_date`, `status`, `realReturnDate`, `created_at`, `updated_at`) VALUES
(1, '2024-11-23', 1, 'Officer', 'test', 'full', 183790890, 7, '2024-11-23', 'issued', '0', '2024-11-23 08:38:36', '2024-11-23 08:38:36'),
(2, '2024-11-25', 2, 'Officer', 'test', 'full', 1862410987, 8, '2024-11-25', 'issued', '0', '2024-11-25 10:34:42', '2024-11-25 10:34:42'),
(3, '2024-11-26', 1, 'Officer', 'test', 'full', 1862410987, 10, '2024-11-29', 'issued', '0', '2024-11-25 12:32:33', '2024-11-25 12:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rank` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `rank_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `corps` varchar(255) NOT NULL,
  `unite` varchar(255) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `rank`, `address`, `rank_no`, `name`, `corps`, `unite`, `mobile_no`, `created_at`, `updated_at`) VALUES
(1, 'Officer', 'Lieutenant', '78', 'Johirul Islam', 'test', 'full', 1862410987, '2024-11-23 08:13:44', '2024-11-23 08:13:44'),
(2, 'Civilian', 'Head Clerk', '55', 'Kamal', 'test', 'full', 178678999, '2024-11-23 12:47:39', '2024-11-23 12:47:39'),
(3, 'Lieutenant', 'Kamalkandi', '33', 'Khorshed', 'no', 'full', 9878999099, '2024-11-24 23:03:55', '2024-11-24 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_11_20_172030_create_book_selfs_table', 1),
(9, '0001_01_01_000000_create_users_table', 2),
(10, '0001_01_01_000001_create_cache_table', 2),
(11, '0001_01_01_000002_create_jobs_table', 2),
(12, '2024_11_20_172030_create_book_selves_table', 2),
(13, '2024_11_23_102834_create_members_table', 2),
(14, '2024_11_23_120059_create_ranks_table', 2),
(15, '2024_11_23_120313_create_issues_table', 2),
(16, '2024_11_25_065613_create_records_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acces` varchar(256) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `acces`, `name`, `email`, `age`, `created_at`, `updated_at`) VALUES
(20, 'A00001', 'Nadim', 'nadim@gmail.com', 30, NULL, NULL),
(21, 'A00021', 'Kamal', 'kamal@gmail.com', 25, NULL, NULL),
(22, 'A00022', 'Shamim', 'samim@gmail.com', 30, NULL, NULL),
(23, 'A00023', 'Jamal', 'jamal@gmail.com', 40, NULL, NULL),
(24, 'A00024', 'Baccho', 'baccho@gmail.com', 34, NULL, NULL),
(25, 'A00025', 'Samso', 'samso@gmail.com', 22, NULL, NULL),
(26, 'G00026', 'Kolim', 'kolim@gmail.com', 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jVGS8pn6XLVJ0z2wC3UGMaoIO4I39r428TbpK8Nl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1FObnZSNlNQQW1KbzFjeUw0QzNhUTVtbFExNXp5SDdPZDZuOEVVTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1732562675);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niamul haque', 'admin@gmail.com', NULL, '$2y$12$hZ60QBVZq2QUzKDxyWK91.WeUPpKcJTXnKFSFDpfOs3XlaKx3z53.', NULL, '2024-11-23 21:47:15', '2024-11-23 21:47:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_selves`
--
ALTER TABLE `book_selves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `records_email_unique` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_selves`
--
ALTER TABLE `book_selves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
