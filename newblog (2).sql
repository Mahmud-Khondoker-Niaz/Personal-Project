-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 07:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Node Js advanced', '2020-12-27 00:07:44', '2020-12-27 00:07:44'),
(2, 'Wordpress', '2020-12-27 00:07:47', '2020-12-27 00:07:47'),
(3, 'Nenemart', '2020-12-27 00:07:50', '2020-12-27 00:07:50'),
(4, 'Laravel', '2020-12-27 00:07:53', '2020-12-28 23:04:58'),
(5, 'Property', '2021-03-07 23:40:50', '2021-03-07 23:40:50'),
(6, 'Niaz', '2021-03-07 23:41:31', '2021-03-07 23:41:31'),
(7, 'Arif vai', '2021-03-07 23:42:50', '2021-03-07 23:42:50');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2020_12_12_065125_create_categories_table', 1),
(16, '2020_12_15_052522_create_posts_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Laravel version switch ( Upgrade or Downgrade )', '<div>This is testing site</div>', 'posts/QQeYJpNCAJxDH5k5kLN2drLFaolm46TzfS28FCz9.jpg', 2, '2020-12-27 00:08:53', '2020-12-27 00:09:05'),
(3, 'New Laravel Blog', '<div>CRUD operations are the basis for many websites and something which <a href=\"https://laravel.com/\">Laravel</a> excels in.<br><br></div><div>The blog I\'m creating for this example isn\'t anything complex, but it will go through many important aspects and features of Laravel.<br><br></div><div>If you want to code along with me, you will need to have a local PHP server running. You can follow my article <a href=\"https://stevencotterill.com/articles/getting-up-and-running-with-laravel-using-homestead\">here</a> to get started with <a href=\"https://laravel.com/docs/5.8/homestead\">Homestead</a> and create a fresh project.<br><br></div><div>Otherwise, you can run the finished code and see how it all works by following the instructions here:<br><br></div><div><strong>Getting started<br></strong><br></div><div>The first step is to make a <a href=\"https://laravel.com/docs/master/eloquent\">Model</a> for the posts.<br><br></div><div>We will also need a database <a href=\"https://laravel.com/docs/master/migrations\">Migration</a> for the model to interact with, as well as a <a href=\"https://laravel.com/docs/master/controllers\">Controller</a> to handle requests for the model.<br><br></div><div>Luckily, Laravel provides an excellent Command Line Interface called <a href=\"https://laravel.com/docs/master/artisan\">Artisan</a> which allows us to generate all this (and much more), rather than doing everything manually.<br><br></div><div>To create these, SSH into the Virtual Machine and change directory to the code folder (if using Homestead):<br><br></div>', 'posts/hCO4EAlicHEUrL58DmhFv3TqYPpWhAoC8jVb0LUE.png', 4, '2020-12-28 23:12:57', '2020-12-28 23:12:57'),
(4, 'Laravel version switch ( Upgrade or Downgrade )', '<div>dhgjgfyfhjvuhfhgvjhfhv</div>', 'posts/IJkLswyfX7UODyGNvhZtvpA112jkCu0P0yv5CIgR.png', 4, '2021-02-13 23:54:35', '2021-02-13 23:54:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
