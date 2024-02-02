-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 06:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(255) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `description`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Rainbow ceramics', 'Rainbow', 0, 'High Quality Ceramics ', '2024-01-09 01:56:44', '2024-01-09 01:56:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 3, 2, 3, '2024-01-20 09:33:22', '2024-01-20 09:33:27'),
(7, 3, 1, 3, '2024-01-26 22:04:37', '2024-01-26 22:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=visible,1=hidden',
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `status`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Ceramic Planter', 'Ceramic Planter', 'Indoor/Decoration Planter', '1704732639.jpg', 0, 'Ceramic Planter', '2024-01-08 11:20:39', '2024-01-08 11:20:39'),
(2, 'Ceramic Pots', 'Ceramic Pots', 'Indoor/Decoration Ceramic Pots', '1704821488.jpg', 0, 'Ceramic Pots', '2024-01-09 12:01:28', '2024-01-09 12:01:28'),
(3, 'Pot And Planter', 'Pot And Planter', 'Indoor/Decoration Pot And Planter', '1704821891.jpg', 0, 'Pot And Planter', '2024-01-09 12:08:11', '2024-01-09 12:08:11'),
(4, 'Terracotta Pots', 'Terracotta Pots', 'Indoor/Decoration Terracotta Pots', '1704822127.jpg', 0, 'Terracotta Pots', '2024-01-09 12:12:07', '2024-01-09 12:12:07'),
(5, 'Succulent Planter with Saucer', 'Succulent Planter with Saucer', 'Succulent Planter with Saucer', '1704822458.jpg', 0, 'Succulent Planter with Saucer', '2024-01-09 12:17:38', '2024-01-09 12:17:38'),
(6, 'Customised Pots', 'Customised Pots', 'Customised Pots', '1704822723.jpg', 0, 'Customised Pots', '2024-01-09 12:22:03', '2024-01-09 12:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'white', 'white', '0', '2024-01-11 07:57:19', '2024-01-11 07:57:19'),
(2, 'Green', 'Green', '0', '2024-01-11 08:00:47', '2024-01-13 03:00:13'),
(3, 'Red', 'Red', '0', '2024-01-13 02:59:17', '2024-01-13 03:00:46'),
(4, 'Gold Metallic', 'Gold Metallic', '0', '2024-01-20 11:40:16', '2024-01-20 11:40:16'),
(5, 'Yellow with Black', 'Yellow with Black', '0', '2024-01-20 11:50:24', '2024-01-20 11:50:24'),
(6, 'Metallic Copper', 'Metallic Copper', '0', '2024-01-20 11:56:38', '2024-01-20 11:56:38'),
(7, 'Blue', 'Blue', '0', '2024-01-22 19:26:03', '2024-01-22 19:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_08_130011_add_details_to_users_table', 2),
(6, '2024_01_08_151434_create_categories_table', 3),
(7, '2024_01_09_015204_create_brands_table', 4),
(8, '2024_01_09_021618_create_products_table', 5),
(9, '2024_01_09_022927_create_products_images_table', 6),
(10, '2024_01_11_122415_create_colors_table', 7),
(11, '2024_01_14_140400_create_product_colors_table', 8),
(12, '2024_01_14_163004_add_category_id_to_brands_table', 9),
(13, '2024_01_17_053122_create_wishlists_table', 10),
(14, '2024_01_17_065550_create_carts_table', 11),
(15, '2024_01_19_044254_create_orders_table', 12),
(16, '2024_01_19_044457_create_orders_items_table', 12),
(17, '2024_01_19_045424_create_users_details_table', 13),
(19, '2024_01_20_123911_create_settings_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tracking_no`, `username`, `email`, `phone`, `pincode`, `address`, `status_message`, `payment_mode`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'test-x87ebBMtJI', 'Ram', 'ram@usermail.com', '12345678901', '654321', 'ww', 'in Progress', 'Cash On Delivary', NULL, '2024-01-18 23:50:04', '2024-01-18 23:50:04'),
(2, 2, 'test-HFnAcjvYGs', 'Ram', 'ram@usermail.com', '12345678901', '654321', 'swe', 'in progress', 'Cash On Delivary', NULL, '2024-01-18 23:50:57', '2024-01-19 01:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_items`
--

INSERT INTO `orders_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 6, 160, '2024-01-18 23:50:57', '2024-01-18 23:50:57');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pattern` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baseshape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `thickness` int(11) NOT NULL,
  `diameter` int(11) NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=trending,0=not trending',
  `featured` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=featured,0=not featured',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `shape`, `usage`, `material`, `size`, `pattern`, `baseshape`, `brand`, `description`, `price`, `quantity`, `thickness`, `diameter`, `trending`, `featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '4 Inch Kinari Mug Planter', '4 Inch Kinari Mug Planter', 'Round', 'Indoor', 'Ceramic', '4 inch', 'nil', 'Round', 'Rainbow ceramics', '4 Inch Kinari Mug Planter With Unique Design', 160, 10, 4, 10, 1, 1, 0, '2024-01-09 01:55:00', '2024-01-09 08:16:59'),
(2, 3, 'Cup Shape Ceramic Pot', 'Cup Shape Ceramic Pot', 'Cup Shape', 'Interior Decor', 'Ceramic', '7 inch', 'Plain', 'Round', 'Rainbow ceramics', 'Indoor/Decoration Planter', 250, 10, 0, 0, 1, 1, 0, '2024-01-14 09:37:02', '2024-01-14 09:37:02'),
(3, 4, 'Designer Terracotta Pots', 'Designer Terracotta Pots', 'Round', 'Interior Decor', 'Terracotta', '11 inch', 'Plain', 'Round', 'Rainbow ceramics', 'Designer Terracotta Pots for Home and Office Interior', 400, 0, 11, 0, 1, 0, 0, '2024-01-20 11:43:27', '2024-01-20 12:08:38'),
(4, 4, 'Outdoor Plant Pot', 'Outdoor Plant Pot', 'Round', 'Garden', 'Terracotta', '8 ich', 'Normal', 'Round', 'Rainbow ceramics', 'Indoor/Decoration Planter', 200, 10, 4, 0, 0, 1, 0, '2024-01-20 11:48:29', '2024-01-20 11:48:29'),
(5, 4, 'Designer Hand Painted Terracotta Pots', 'Designer Hand Painted Terracotta Pots', 'Round', 'Indoor', 'Terracotta', '11 inch', 'Normal', 'Round', 'Rainbow ceramics', 'Indoor/Decoration Planter', 400, 10, 0, 0, 1, 0, 0, '2024-01-20 11:52:21', '2024-01-20 11:52:21'),
(6, 4, 'Designer Terracotta Pots', 'Designer Terracotta Pots', 'Round', 'Indoor', 'Terracotta', '8/6/4.5 Inch Diameter', 'Normal', 'Round', 'Rainbow ceramics', 'Indoor/Decoration Planter', 600, 10, 0, 0, 0, 0, 0, '2024-01-20 11:57:50', '2024-01-20 11:57:50'),
(8, 1, 'Ceramic white pot', 'Ceramic white pot', 'Round', 'Indoor', 'Ceramic', '3.5 inch', 'Normal', 'Round', 'Rainbow ceramics', 'Indoor/Decoration Planter', 50, 10, 10, 0, 0, 0, 0, '2024-01-22 19:15:49', '2024-01-22 19:15:49'),
(9, 1, 'Blue Curvy Bottom Pot', 'Blue Curvy Bottom Pot', 'Round', 'Indoor', 'Ceramic', '3.5 inch', 'Plain', 'Round', 'Rainbow ceramics', 'Indoor/Decoration Planter', 150, 10, 0, 0, 1, 0, 0, '2024-01-22 19:22:56', '2024-01-22 19:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/products/1704785101.jpg', '2024-01-09 01:55:01', '2024-01-09 01:55:01'),
(2, 2, 'uploads/products/1705244822.jpg', '2024-01-14 09:37:02', '2024-01-14 09:37:02'),
(3, 3, 'uploads/products/1705770807.jpg', '2024-01-20 11:43:27', '2024-01-20 11:43:27'),
(4, 4, 'uploads/products/1705771109.jpg', '2024-01-20 11:48:29', '2024-01-20 11:48:29'),
(5, 5, 'uploads/products/1705771341.jpg', '2024-01-20 11:52:21', '2024-01-20 11:52:21'),
(6, 6, 'uploads/products/1705771670.jpg', '2024-01-20 11:57:50', '2024-01-20 11:57:50'),
(8, 8, 'uploads/products/1705970749.jpg', '2024-01-22 19:15:49', '2024-01-22 19:15:49'),
(9, 9, 'uploads/products/1705971176.jpg', '2024-01-22 19:22:56', '2024-01-22 19:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, '2024-01-14 09:37:03', '2024-01-14 09:37:03'),
(2, 3, 4, 0, '2024-01-20 11:43:27', '2024-01-20 11:43:27'),
(3, 4, 3, 0, '2024-01-20 11:48:29', '2024-01-20 11:48:29'),
(4, 5, 1, 0, '2024-01-20 11:52:21', '2024-01-20 11:52:21'),
(5, 6, 4, 0, '2024-01-20 11:57:50', '2024-01-20 11:57:50'),
(7, 8, 1, 0, '2024-01-22 19:15:49', '2024-01-22 19:15:49'),
(8, 9, 7, 0, '2024-01-22 19:22:56', '2024-01-22 19:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_url`, `page_title`, `meta_keyword`, `meta_description`, `address`, `phone1`, `phone2`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Rainbow Ceramics', 'http://127.0.0.1:8000/', 'Wholesale Product for Ceramics', 'Ceramic Planters', 'Ceramic Products', 'Site No. 72/11, No. 4, Thindlu Village, Vidyaranyapura Behind Anjaneya Devasthana, Behind Anjaneya Temple, Bengaluru-560097, Karnataka, India', '1234567345', '1234567809', 'rainbowadmin@testmail.com', '2024-01-20 07:46:55', '2024-01-20 08:02:25');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'rainbowadmin', 'rainbowadmin@testmail.com', NULL, '$2y$10$eTVF6/CiiLpLltBw5RXdIOjpCotEBlAVRZk7aBZTtd1TM7X788giK', NULL, '2024-01-08 07:10:09', '2024-01-08 07:10:09', 1),
(2, 'Ram', 'ram@usermail.com', NULL, '$2y$10$Qvdn4mPtD4LhqJSHnfe2/uKp958yrALE7MjfekQFke1hgG/2Xh0x.', NULL, '2024-01-17 00:22:44', '2024-01-17 00:22:44', 0),
(3, 'Ajay', 'ajay@test.com', NULL, '$2y$10$AHc8aFSXVip0ZFp8bAdV1OSq2V8jVXKMUNoAzzdZ2E6SoE9ML6cg.', NULL, '2024-01-20 09:32:22', '2024-01-20 09:55:53', 0),
(6, 'Giri', 'giri@test.com', NULL, '$2y$10$I0yzAO8YOnKGWSjVtyGhfufeJ39iPRqb0NpGXDPYLoKkjABlVaLTC', NULL, '2024-01-20 12:24:19', '2024-01-20 12:28:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `user_id`, `phone`, `pin_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 3, '8090904453', '626001', '1,west street,Madurai', '2024-01-20 09:48:47', '2024-01-20 10:27:26'),
(2, 6, '8090904453', '626001', '1,west street,Rajapalayam', '2024-01-23 10:46:22', '2024-01-23 10:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, '2024-01-17 00:58:27', '2024-01-17 00:58:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_details_user_id_unique` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_images`
--
ALTER TABLE `products_images`
  ADD CONSTRAINT `products_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_details`
--
ALTER TABLE `users_details`
  ADD CONSTRAINT `users_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
