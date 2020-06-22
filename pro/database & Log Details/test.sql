-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 12:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_06_22_044833_create_roles_table', 2),
(5, '2014_10_12_000000_create_users_table', 3),
(7, '2020_06_22_061953_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` int(10) UNSIGNED NOT NULL,
  `User_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_sub_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `u_id`, `User_name`, `p_name`, `p_sub_name`, `p_price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 1, 'asdf', 'Shoes', 'Nike Men\'s Shoes', '$ 20', NULL, 'img/product/15928140891-post.jpg', '2020-06-22 02:51:29', '2020-06-22 02:51:29'),
(5, 1, 'asdf', 'Watch', 'leather', '$ 30', NULL, 'img/product/15928141431-post.jpg', '2020-06-22 02:52:23', '2020-06-22 02:52:23'),
(6, 1, 'asdf', 'I Watch', 'Silicon Band', '$100', NULL, 'img/product/15928142001-post.jpg', '2020-06-22 02:53:20', '2020-06-22 02:53:20'),
(7, 1, 'asdf', 'Cap', 'Black', '$ 8', NULL, 'img/product/15928142741-post.jpg', '2020-06-22 02:54:34', '2020-06-22 02:54:34'),
(8, 1, 'asdf', 'Tshart', 'Blue', '$ 6', NULL, 'img/product/15928143241-post.jpg', '2020-06-22 02:55:24', '2020-06-22 02:55:24'),
(9, 3, 'user', 'new watch', 'Brand New', '$ 25', NULL, 'img/product/15928162873-post.jpg', '2020-06-22 03:28:07', '2020-06-22 03:28:07'),
(10, 4, 'testuser', 'Shose', 'Sport', '$ 120', NULL, 'img/product/15928187604-post.jpg', '2020-06-22 04:09:20', '2020-06-22 04:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'asdf', 'asdf@gmail.com', NULL, '$2y$10$M.2NZkJ8KSb6V3F1wBqFOO46TyB4jF47G3OlfAo0hv2bsqjyFaMsi', '7jwPofdkPPUqKtgLXyB6ZnY9dqyq1NGPeul2siMA03CXxe9c57IZHUjEYy2K', '2020-06-21 23:47:47', '2020-06-21 23:47:47'),
(2, 1, 'admin', 'admin@gmail.com', NULL, '$2y$10$5Dgexu1FGAfuaV8gHJeAXeG8Y3f0z9ba.M4Nwq1nrjJPm3jOTmB62', 'UQ8abYdYLl8StmUmlXQB5WFSV86acXLIGalER7sw0Lr2pX7IltpJ5qt5DSsv', '2020-06-22 03:16:38', '2020-06-22 03:16:38'),
(3, 1, 'user', 'user@gmail.com', NULL, '$2y$10$d7tB0wLm/m9w6BgsHMNdU.jb0W5Nu0vgrdmqXUHQIp8VBHhLPIsKq', NULL, '2020-06-22 03:24:23', '2020-06-22 03:24:23'),
(4, 1, 'testuser', 'testuser@gmail.com', NULL, '$2y$10$QVNMAff.zpqTg7hWRBDX8OCd8piedfLeHxAZ3gBbmLdT756eHIppm', NULL, '2020-06-22 03:39:38', '2020-06-22 03:39:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_id_unique` (`id`),
  ADD KEY `products_u_id_foreign` (`u_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
