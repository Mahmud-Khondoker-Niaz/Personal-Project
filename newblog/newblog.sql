-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 11:53 AM
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
(1, 'Node Js advanced', '2020-12-18 23:56:25', '2020-12-18 23:56:25'),
(2, 'Wordpress', '2020-12-18 23:56:29', '2020-12-18 23:56:29'),
(3, 'Nenemart', '2020-12-18 23:56:33', '2020-12-18 23:56:33'),
(4, 'Floorfly', '2020-12-19 00:34:32', '2020-12-19 00:34:32'),
(5, 'Popup Banner', '2020-12-20 23:36:40', '2020-12-20 23:36:40');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2020_12_12_065125_create_categories_table', 1),
(12, '2020_12_15_052522_create_posts_table', 1);

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
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Node Js Advanced', '<div>JavaScript’s rising popularity has brought with it a lot of changes, and the face of web development today is dramatically different. The things that we can do on the web nowadays with JavaScript running on the server, as well as in the browser, were hard to imagine just several years ago, or were encapsulated within sandboxed environments like Flash or Java Applets.</div>', 'posts/Oh82C7UN00e6RFj18qofsNwYcHA7cfSysMC1c7oA.jpg', 2, '2020-12-18 23:59:09', '2020-12-24 01:04:30'),
(2, 'A Rich Text Editor for Everyday Writing', '<div><strong><br>Installation<br></strong><br></div><div>Trix hosted their package on <a href=\"https://github.com/basecamp/trix\">GitHub</a> so users can easily use this nice editor in their web applications. For getting started, you first need to include JS and CSS files of Trix. You can get these files directly inside the <em>dist</em> folder from their <a href=\"https://github.com/basecamp/trix/tree/master/dist\">GitHub</a> page. Or else, download their package and copy trix.js and trix.css files.<br><br></div><div>You also need to create 2 PHP files and one more JS file. We will see why and how to use these files in the later part. Your folder structure should be as follows:<br><br></div>', 'posts/2O16h5ROcatukrsfyGbqIfAqIZY90RTLl9vTiCOV.png', 2, '2020-12-19 00:09:58', '2020-12-19 00:09:58'),
(3, 'A Rich Text Editor for Everyday', '<div>বর্তমান সময়ে ওয়েব ডিজাইন এন্ড ডেভেলপমেন্টের এর চাহিদা বলে শেষ করা যাবে না। চাহিদা বাড়ার সাথে সাথে এই সেক্টরে কাজ করা লোকের সংখ্যাও বৃদ্ধি পাচ্ছে সমান গতিতে।</div>', 'posts/2LUK0AnjlnM15KQC3YtJ1WnoCcYiN1x5EDwm5xtC.jpg', 5, '2020-12-20 23:37:12', '2020-12-20 23:37:55'),
(4, 'Servicing', '<div>Apartment Registration</div><div><br></div><div>Before purchasing a flat the buyer must check the following to complete the flat registration which ensures legal ownership of the flat.<br><br></div><div>&nbsp;<br><br></div><ul><li>Check all land papers (ask your developer company to provide a photocopy).</li><li>Check if the plan is approved by Rajuk and if the developer violates any design.</li><li>Ensure you read a sales deed before purchasing the flat, ask your agent to provide a sales deed copy so that you don’t miss anything or can negotiate about some cluases.</li><li>Sometime developer companies delays to handover the project. Enquire what the original &amp; declared date of Handover was and why the delay has taken place. You must include strong clause for rental benefits if further delay or any delay happens in the future.</li><li>Ensure the developing land is not mortgaged for any other reason than its own development (sometime developer companies take loans against a land for developing other projects).</li><li>Make sure the loan that is taken by the developer company is adjusted before handover otherwise you will never be able to register the flat by your name.</li><li>Make sure the land has no litigation with the Govt. or it is not facing any legal issues by the court or the land is not under DAP (Detail Area Plan).</li><li>Sometime mega projects faces a lot of consequences specially declared as “City” so please make sure all land documents or Rajuk approval is granted for the mega project. It is always better to hire legal associate to negotiate and check variables for mega projects.</li></ul><div>&nbsp;<br><br></div><div>For any apartment registration take floorfly’s assistance, please call +8801713079222 &nbsp;<br><br></div>', 'posts/YXHuoA8cbCfQcqeoQpprYfVOa0qhXO6bYJT3V5q9.jpg', 3, '2020-12-23 03:39:55', '2020-12-24 01:04:44');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
