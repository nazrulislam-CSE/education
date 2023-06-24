-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 01:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zook_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `experience_no` varchar(255) DEFAULT NULL,
  `experience_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `experience_no`, `experience_title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Get To Know Us', '10', 'Explore All Tour Of The World With Us.', 'get-to-know-us', '<p style=\"margin-bottom: 20px; line-height: 26px; color: rgb(52, 52, 52); font-family: Nunito, sans-serif; background-color: rgb(250, 250, 250);\"><span style=\"color: rgb(119, 119, 119); font-family: poppins, sans-serif; background-color: rgb(255, 255, 255);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span><br style=\"margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: poppins, sans-serif; background-color: rgb(255, 255, 255);\"><br style=\"margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: poppins, sans-serif; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(119, 119, 119); font-family: poppins, sans-serif; background-color: rgb(255, 255, 255);\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></p>', 'upload/about/1767857667512840.jpg', 1, '2023-05-02 06:55:58', '2023-06-05 04:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `whatsapp_url` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `slug`, `image`, `designation`, `description`, `facebook_url`, `linkedin_url`, `twitter_url`, `whatsapp_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Rakibul Islam', 'rakibul-islam', 'upload/agent/1764772535534365.jpg', 'Office Manager', '<p>Office Manager<br></p>', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://www.whatsapp.com/', 1, '2023-05-02 03:04:01', '2023-05-02 03:04:01'),
(3, 'Kabir Hasan', 'kabir-hasan', 'upload/agent/1764772595067397.jpg', 'Creative Director', '<p>Creative Director<br></p>', 'https://www.facebook.com/', 'https://www.linkedin.com/', NULL, 'https://www.whatsapp.com/', 1, '2023-05-02 03:04:58', '2023-05-02 03:04:58'),
(4, 'Siyam Ahmed', 'siyam-ahmed', 'upload/agent/1764772657536731.jpg', 'Support Manager', '<p>Support Manager<br></p>', 'https://www.facebook.com/', NULL, 'https://www.twitter.com/', 'https://www.whatsapp.com/', 1, '2023-05-02 03:05:57', '2023-05-02 03:05:57'),
(5, 'Masud Rana', 'masud-rana', 'upload/agent/1764772713121907.jpg', 'CEO', '<p>CEO<br></p>', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://www.whatsapp.com/', 1, '2023-05-02 03:06:50', '2023-05-02 03:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `aminities`
--

CREATE TABLE `aminities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aminity` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aminities`
--

INSERT INTO `aminities` (`id`, `aminity`, `slug`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Good for kids', 'good-for-kids', NULL, 1, '2023-05-08 01:10:10', '2023-05-08 01:10:10'),
(4, 'Elevator in building', 'elevator-in-building', NULL, 1, '2023-05-08 01:10:16', '2023-05-08 01:10:16'),
(5, 'Bike Parking', 'bike-parking', NULL, 1, '2023-05-08 01:10:22', '2023-05-08 01:10:22'),
(6, 'Alcohol', 'alcohol', NULL, 1, '2023-05-08 01:10:31', '2023-05-08 01:10:31'),
(7, 'Reservations', 'reservations', NULL, 1, '2023-05-08 01:10:37', '2023-05-08 01:10:37'),
(8, 'Free coffee and tea', 'free-coffee-and-tea', NULL, 1, '2023-05-08 01:10:44', '2023-05-08 01:10:44'),
(9, 'Accepts Credit Cards', 'accepts-credit-cards', NULL, 1, '2023-05-08 01:10:52', '2023-05-08 01:10:52'),
(10, 'Air Condition', 'air-condition', NULL, 1, '2023-05-08 01:10:57', '2023-05-08 01:10:57'),
(11, 'Cable Tv', 'cable-tv', NULL, 1, '2023-05-08 01:11:04', '2023-05-08 01:11:04'),
(12, 'Balcony', 'balcony', NULL, 1, '2023-05-08 01:11:10', '2023-05-08 01:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `name`, `description`, `designation`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'অধ্যক্ষের বাণী', 'প্রফেসর মুহাম্মদ মাহমুদুল হাসান', '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: Roboto, Arial, Helvetica, sans-serif; font-weight: bold; line-height: 28px; color: rgb(0, 0, 0); font-size: 36px; text-transform: uppercase; text-align: center;\"><span class=\"tg-themecolor\" style=\"margin: 0px; padding: 0px; color: rgb(255, 199, 34);\">মাদ্রাসা সম্পর্কিত তথ্য</span></h2>', 'অধ্যক্ষ', 'upload/banner/1769192116072520.png', 1, '2023-06-19 21:51:21', '2023-06-19 21:51:21'),
(2, 'উপাধ্যক্ষের বাণী', 'ড. মোহাম্মদ মাহমুদ ইকবাল', '<h4 style=\"margin-right: 0px; margin-bottom: 8px; margin-left: 0px; padding: 0px; font-family: Roboto, Arial, Helvetica, sans-serif; line-height: 1.5; color: rgb(0, 0, 0); font-size: 18px; text-transform: uppercase; background-color: rgb(255, 199, 34);\">আরবি ভাষা ও সাহিত্য</h4>', 'উপাধ্যক্ষ', 'upload/banner/1769192392170607.png', 1, '2023-06-19 21:55:45', '2023-06-19 22:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `seo_title` text DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `show_homepage` tinyint(4) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `admin_id`, `view`, `seo_title`, `seo_description`, `show_homepage`, `title`, `slug`, `description`, `blog_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 4, 1, 1, 'first seo title', 'first seo title', 1, 'Big Head House', 'big-head-house', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br></p>', 'upload/blog/1764776555245907.jpg', 1, '2023-05-02 04:07:55', '2023-06-07 22:20:25'),
(4, 7, 1, 21, 'first seo title', 'safsafdsa', 1, 'Selling Your Real House', 'selling-your-real-house', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br></p>', 'upload/blog/1764776643792690.jpg', 1, '2023-05-02 04:09:19', '2023-06-07 22:24:17'),
(5, 5, 1, 5, 'first seo title', 'asdfsafd', 1, 'Buying a Best House', 'buying-a-best-house', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br></p>', 'upload/blog/1764776682338939.jpg', 1, '2023-05-02 04:09:56', '2023-06-07 22:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Single Family', 'single-family', 1, '2023-05-01 23:03:59', '2023-05-01 23:03:59'),
(5, 'Apartment', 'apartment', 1, '2023-05-01 23:04:07', '2023-05-01 23:04:07'),
(6, 'Multi Family', 'multi-family', 1, '2023-05-01 23:04:13', '2023-05-01 23:04:13'),
(7, 'Villa', 'villa', 1, '2023-05-01 23:04:21', '2023-05-01 23:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'upload/brand/1765393993977228.png', 1, '2023-05-08 23:41:50', '2023-05-08 23:41:50'),
(4, 'upload/brand/1765394002328885.png', 1, '2023-05-08 23:41:58', '2023-05-08 23:41:58'),
(5, 'upload/brand/1765394009447666.png', 1, '2023-05-08 23:42:05', '2023-05-08 23:42:05'),
(6, 'upload/brand/1765394017288242.png', 1, '2023-05-08 23:42:12', '2023-05-08 23:42:12'),
(7, 'upload/brand/1765394025244980.png', 1, '2023-05-08 23:42:20', '2023-05-08 23:42:20'),
(8, 'upload/brand/1765394032968338.png', 1, '2023-05-08 23:42:27', '2023-05-08 23:42:27'),
(9, 'upload/brand/1765394047963858.png', 1, '2023-05-08 23:42:41', '2023-05-08 23:42:41'),
(10, 'upload/brand/1765394055365265.png', 1, '2023-05-08 23:42:49', '2023-05-08 23:42:49'),
(11, 'upload/brand/1765394065109914.png', 1, '2023-05-08 23:42:58', '2023-05-08 23:42:58'),
(12, 'upload/brand/1765394070529260.png', 1, '2023-05-08 23:43:03', '2023-05-08 23:43:03'),
(13, 'upload/brand/1765394080028920.png', 1, '2023-05-08 23:43:12', '2023-05-08 23:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'About', 'about', 1, '2023-05-08 23:58:05', '2023-05-08 23:58:05'),
(8, 'Services', 'services', 1, '2023-05-08 23:58:36', '2023-05-08 23:58:36'),
(9, 'Tours', 'tours', 0, '2023-05-08 23:59:09', '2023-06-23 08:50:59'),
(10, 'Blog', 'blog', 1, '2023-05-08 23:59:22', '2023-05-08 23:59:22'),
(11, 'Contact Us', 'contact-us', 1, '2023-05-08 23:59:36', '2023-05-08 23:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_state_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_state_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rajshahi', 'rajshahi', 1, '2023-05-08 03:51:33', '2023-05-08 03:51:33'),
(2, 2, 'pabna', 'pabna', 1, '2023-05-08 04:26:33', '2023-05-08 04:26:33'),
(3, 3, 'rajkot', 'rajkot', 1, '2023-05-08 04:26:47', '2023-05-08 04:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `counter_no` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `icon`, `title`, `counter_no`, `status`, `created_at`, `updated_at`) VALUES
(3, 'fa-solid fa-dumpster-fire', 'দা’ওয়াহ বিভাগ', '8400', 1, '2023-05-08 23:48:48', '2023-06-21 06:30:10'),
(4, 'fa-solid fa-house', 'আরবি ভাষা ও সাহিত্য', '1650', 1, '2023-05-08 23:49:31', '2023-06-21 06:29:56'),
(5, 'fa-solid fa-building', 'আল-কুরআন', '2300', 1, '2023-05-08 23:51:01', '2023-06-21 06:29:36'),
(6, 'fa-solid fa-building', 'আল-হাদীস', '7500', 1, '2023-05-08 23:51:34', '2023-06-21 06:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Bangladesh', 'bangladesh', 1, '2023-05-08 02:20:02', '2023-05-08 02:20:02'),
(4, 'India', 'india', 1, '2023-05-08 02:20:08', '2023-05-08 02:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `country_states`
--

CREATE TABLE `country_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_states`
--

INSERT INTO `country_states` (`id`, `country_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'Dhaka', 'dhaka', 1, '2023-05-08 02:20:53', '2023-05-08 02:22:24'),
(3, 4, 'Mumbai', 'mumbai', 1, '2023-05-08 02:21:00', '2023-05-08 02:22:15');

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
-- Table structure for table `madrashas`
--

CREATE TABLE `madrashas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `madrashas`
--

INSERT INTO `madrashas` (`id`, `icon`, `name`, `slug`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/icon/1769199655828198.png', 'কর্মকর্তাবৃন্দ', '', 'কর্মকর্তাবৃন্দ', '<p>&nbsp;কর্মকর্তাবৃন্দ<br></p>', 1, '2023-06-19 23:44:20', '2023-06-19 23:51:12'),
(3, 'upload/icon/1769199886220084.png', '৩য় শ্রেণির র্কমচারীবৃন্দ', '--', '৩য় শ্রেণির র্কমচারীবৃন্দ', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">৩য় শ্রেণির র্কমচারীবৃন্দ</span><br></p>', 1, '2023-06-19 23:54:52', '2023-06-19 23:54:52'),
(4, 'upload/icon/1769199994164817.png', 'ভর্তির তথ্য', '-', 'ভর্তির তথ্য', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">ভর্তির তথ্য</span><br></p>', 1, '2023-06-19 23:56:35', '2023-06-19 23:56:35'),
(5, 'upload/icon/1769200031037739.png', 'ক্লাস লেকচার', '-', 'ক্লাস লেকচার', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">ক্লাস লেকচার</span><br></p>', 1, '2023-06-19 23:57:10', '2023-06-19 23:57:10'),
(6, 'upload/icon/1769200076536500.png', 'ছাত্র/ছাত্রী  কর্নার', '--', 'ছাত্র/ছাত্রী  কর্নার', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">ছাত্র/ছাত্রী  কর্নার</span><br></p>', 1, '2023-06-19 23:57:53', '2023-06-19 23:57:53'),
(7, 'upload/icon/1769200156699968.png', 'একাডেমিক পঞ্জিকা', '-', 'একাডেমিক পঞ্জিকা', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\"> একাডেমিক পঞ্জিকা</span><br></p>', 1, '2023-06-19 23:59:10', '2023-06-19 23:59:10'),
(8, 'upload/icon/1769200261582119.png', 'সিলেবাস', '', 'সিলেবাস', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">সিলেবাস</span><br></p>', 1, '2023-06-20 00:00:50', '2023-06-20 00:00:50'),
(9, 'upload/icon/1769200298375590.png', 'পূর্ববর্তী অধ্যক্ষগণ', '-', 'পূর্ববর্তী অধ্যক্ষগণ', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">পূর্ববর্তী অধ্যক্ষগণ</span><br></p>', 1, '2023-06-20 00:01:25', '2023-06-20 00:01:25'),
(10, 'upload/icon/1769200344667155.png', 'অভ্যন্তরীণ পরীক্ষার ফলাফল', '--', 'অভ্যন্তরীণ পরীক্ষার ফলাফল', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\">অভ্যন্তরীণ পরীক্ষার ফলাফল</span><br></p>', 1, '2023-06-20 00:02:09', '2023-06-20 00:02:09'),
(11, 'upload/icon/1769200388964269.png', 'পাবলিক পরীক্ষার ফলাফল', '--', 'পাবলিক পরীক্ষার ফলাফল', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\"> পাবলিক পরীক্ষার ফলাফল  </span><br></p>', 1, '2023-06-20 00:02:51', '2023-06-20 00:02:51');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_15_141026_create_settings_table', 2),
(7, '2023_02_03_082606_create_pages_table', 3),
(9, '2023_02_04_081511_create_sliders_table', 5),
(10, '2023_04_28_091311_create_categories_table', 5),
(11, '2023_04_29_074624_create_properties_table', 6),
(12, '2023_04_29_075543_create_property_images_table', 6),
(13, '2023_02_04_052522_create_blogs_table', 7),
(14, '2023_04_29_095502_create_property_types_table', 7),
(15, '2023_04_29_100323_create_aminities_table', 7),
(16, '2023_04_29_100418_create_cities_table', 7),
(17, '2023_04_29_101326_create_nearest_locations_table', 7),
(18, '2023_04_29_101436_create_property_purposes_table', 7),
(19, '2023_04_29_102024_create_country_states_table', 7),
(20, '2023_04_29_102135_create_countries_table', 7),
(21, '2023_04_29_102306_create_property_aminities_table', 7),
(22, '2023_04_29_102633_create_property_nearest_locations_table', 7),
(24, '2023_04_30_050705_create_testimonials_table', 7),
(25, '2023_04_29_105442_create_services_table', 8),
(26, '2023_04_30_053006_create_agents_table', 8),
(27, '2023_04_30_073027_create_blog_categories_table', 9),
(28, '2023_05_02_065228_create_abouts_table', 10),
(29, '2023_05_03_072618_create_brands_table', 11),
(30, '2023_05_03_080531_create_counters_table', 12),
(31, '2023_05_10_063154_create_sections_table', 13),
(32, '2023_06_19_125137_create_banners_table', 14),
(33, '2023_06_20_042629_create_madrashas_table', 15),
(34, '2023_06_20_061402_create_notices_table', 16),
(35, '2023_06_20_061720_create_notice_menus_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `nearest_locations`
--

CREATE TABLE `nearest_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(256) DEFAULT NULL,
  `slug` varchar(256) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=>Active, 0=>Inactive	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nearest_locations`
--

INSERT INTO `nearest_locations` (`id`, `location`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'first', 'first', 1, '2023-05-08 00:20:16', '2023-05-08 00:20:16'),
(3, 'Rail Station', 'rail-station', 1, '2023-05-08 01:08:54', '2023-05-08 01:08:54'),
(4, 'Bus Station', 'bus-station', 1, '2023-05-08 01:09:01', '2023-05-08 01:09:01'),
(5, 'Airport', 'airport', 1, '2023-05-08 01:09:06', '2023-05-08 01:09:06'),
(6, 'Beach', 'beach', 1, '2023-05-08 01:09:11', '2023-05-08 01:09:11'),
(7, 'Metro', 'metro', 1, '2023-05-08 01:09:17', '2023-05-08 01:09:17'),
(8, 'Bank', 'bank', 1, '2023-05-08 01:09:23', '2023-05-08 01:09:23'),
(9, 'School', 'school', 1, '2023-05-08 01:09:29', '2023-05-08 01:09:29'),
(10, 'Hospital', 'hospital', 1, '2023-05-08 01:09:35', '2023-05-08 01:09:35'),
(11, 'Super Market', 'super-market', 1, '2023-05-08 01:09:41', '2023-05-08 01:09:41'),
(12, 'Pharmacy', 'pharmacy', 1, '2023-05-08 01:09:47', '2023-05-08 01:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_menus_id` int(11) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_menus_id`, `pdf`, `title`, `views`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(8, 3, 'notice-file2023-06-20-12-13-16-7809.pdf', 'সকল শিক্ষার্থীকে আগামী 12/06/2023 খ্রি. তারিখে শ্রেণিকক্ষে উপস্থিত থাকার জন্য নির্দেশ প্রদান করা হলো', 23, '---12062023----------', 1, '2023-06-20 06:13:16', '2023-06-23 08:45:13'),
(9, 3, 'notice-file2023-06-20-12-23-07-2423.pdf', 'কামিল (স্নাতকোত্তর) ১ম ও ২য় পর্ব পরীক্ষা-২০২১ ফরম পূরণ বিজ্ঞপ্তি (সংশোধিত)', 9, '-----------', 1, '2023-06-20 06:23:07', '2023-06-23 08:46:02'),
(10, 5, 'notice-file2023-06-21-06-33-47-1361.pdf', 'সকল শিক্ষার্থীকে আগামী 12/06/2023 খ্রি. তারিখে শ্রেণিকক্ষে উপস্থিত থাকার জন্য নির্দেশ প্রদান করা হলো', 0, '---12062023----------', 1, '2023-06-21 00:33:47', '2023-06-21 00:33:47'),
(11, 6, 'notice-file2023-06-21-06-42-34-7202.pdf', 'some title here', 19, 'some-title-here', 1, '2023-06-21 00:42:34', '2023-06-23 04:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `notice_menus`
--

CREATE TABLE `notice_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_menus`
--

INSERT INTO `notice_menus` (`id`, `icon`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'upload/icon/1769203220644788.png', 'দাখিল কর্ণার', '-', 1, '2023-06-20 00:47:52', '2023-06-20 00:47:52'),
(4, 'upload/icon/1769203240898427.png', 'কামিলকর্ণার', '', 1, '2023-06-20 00:48:11', '2023-06-20 00:48:11'),
(5, 'upload/icon/1769203265467439.png', 'অনার্স কর্ণার', '-', 1, '2023-06-20 00:48:34', '2023-06-20 00:48:34'),
(6, 'upload/icon/1769203291440185.png', 'ফাযিল কর্ণার', '-', 1, '2023-06-20 00:48:59', '2023-06-20 00:48:59'),
(7, 'upload/icon/1769203322580958.png', 'কামিলকর্ণার', '', 1, '2023-06-20 00:49:29', '2023-06-20 00:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `position` varchar(11) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `description`, `position`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'About us page', '<p><span style=\"color: rgb(52, 52, 52); font-family: Nunito, sans-serif; background-color: rgb(250, 250, 250);\">About Us Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis.</span><br></p>', '3', 'about-us', 1, '2023-05-08 23:34:39', '2023-05-08 23:34:39'),
(2, 'Contact Us', 'contact us page', '<p><span style=\"font-size: 1rem;\">Contact Us&nbsp;</span><span style=\"color: rgb(52, 52, 52); font-family: Nunito, sans-serif; background-color: rgb(250, 250, 250);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis.</span><br></p>', '3', 'contact-us', 1, '2023-05-08 23:34:52', '2023-05-08 23:34:52'),
(3, 'Blog', 'blog page', '<p><span style=\"color: rgb(52, 52, 52); font-family: Nunito, sans-serif; background-color: rgb(250, 250, 250);\">Blog Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis.</span><br></p>', '3', 'blog', 1, '2023-05-08 23:35:16', '2023-05-08 23:35:16'),
(4, 'Services', 'Services page', '<p><span style=\"color: rgb(52, 52, 52); font-family: Nunito, sans-serif; background-color: rgb(250, 250, 250);\">Services Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis.</span><br></p>', '3', 'services', 1, '2023-05-08 23:35:32', '2023-05-08 23:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1,
  `admin_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `property_type_id` int(11) NOT NULL DEFAULT 0,
  `city_id` int(11) NOT NULL DEFAULT 0,
  `listing_package_id` int(11) NOT NULL DEFAULT 0,
  `property_purpose_id` int(11) NOT NULL DEFAULT 0,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `thumbnail_image` text DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `number_of_unit` int(11) DEFAULT NULL,
  `urgent_property` int(11) DEFAULT NULL,
  `top_property` int(11) DEFAULT NULL,
  `number_of_room` int(11) DEFAULT NULL,
  `number_of_bedroom` int(11) DEFAULT NULL,
  `number_of_bathroom` int(11) DEFAULT NULL,
  `number_of_floor` int(11) DEFAULT NULL,
  `number_of_kitchen` int(11) DEFAULT NULL,
  `number_of_parking` int(11) DEFAULT NULL,
  `area` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `period` text DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `seo_title` text DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_type`, `admin_id`, `user_id`, `property_type_id`, `city_id`, `listing_package_id`, `property_purpose_id`, `title`, `slug`, `views`, `address`, `phone`, `email`, `website`, `short_description`, `description`, `file`, `thumbnail_image`, `banner_image`, `number_of_unit`, `urgent_property`, `top_property`, `number_of_room`, `number_of_bedroom`, `number_of_bathroom`, `number_of_floor`, `number_of_kitchen`, `number_of_parking`, `area`, `price`, `period`, `video_link`, `is_featured`, `verified`, `status`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 0, 1, 1, 0, 2, 'Beautful Single Home', 'photofeaturedfor-sale-beautful-single-home', 0, 'Dhaka', '+8801701203652', 'rahat@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-09-56-46-7173.png', 'upload/custom-images/property-thumb-2023-05-07-09-56-46-2628.jpg', NULL, 50, 1, 1, 60, 70, 80, 90, 100, 150, 400, 36000, 'Monthly', '', 0, 0, 1, 'first seo title', 'seo title', '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(10, 1, 1, 0, 3, 1, 0, 1, 'Modern Family Home', 'modern-family-home', 0, 'Dhaka', '+8801701203652', 'admin@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-09-27-9356.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-09-27-7352.jpg', NULL, 203, 1, 1, 124, 782, 100, 577, 102, 157, 456, 36000, 'Daily', '', 1, 0, 1, 'first seo title', 'asfdsaf', '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(11, 1, 1, 0, 3, 2, 0, 2, 'Sweet Family Home', 'sweet-family-home', 0, 'Dhaka', '0174115255', 'rahat@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-10-44-7988.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-10-44-2719.jpg', NULL, 3, 1, 1, 2, 10, 12, 45, 18, 20, 4800, 2500, 'Monthly', '', 1, 0, 1, 'first seo title', 'fasfdsa', '2023-05-07 04:10:44', '2023-05-07 04:10:44'),
(12, 1, 1, 0, 3, 1, 0, 1, 'Big Head House', 'big-head-house', 0, 'Dhaka', '0174115255', 'admin@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-12-19-9011.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-12-19-1590.jpg', NULL, 50, 1, 1, 10, 12, 15, 19, 20, 23, 4300, 455, 'Daily', '', 1, 0, 1, 'first seo title', 'asfdas', '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(13, 1, 1, 0, 3, 2, 0, 2, 'Park Avenue', 'park-avenue', 0, 'Dhaka', '0174115255', 'user@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-14-33-5900.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-14-33-8708.jpg', NULL, 10, 1, 1, 20, 30, 40, 50, 60, 70, 1200, NULL, 'Yearly', '', 1, 0, 1, 'saf', 'asfdsaf', '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(14, 1, 1, 0, 3, 4, 0, 2, 'Masons Villas', 'masons-villas', 0, 'Dhaka', '0174115255', 'user@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-15-55-6414.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-15-55-8464.jpg', NULL, 250, 1, 1, 230, 270, 120, 1203, 121, 125, 1600, 5000, 'Daily', '', 1, 0, 1, 'first seo titleasf', 'asdfsafdafsdf', '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(15, 1, 1, 0, 3, 2, 0, 2, 'Beautful Single Home', 'beautful-single-home', 0, 'Dhaka', '+8801701203652', 'pbdfreelancing@gmail.com', NULL, NULL, NULL, 'property-file-2023-05-07-10-17-07-8749.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-17-07-6696.jpg', NULL, 123, 1, 1, 128, 120, 10, 20, 11, 15, 120, 36000, 'Monthly', '', 1, 0, 1, 'asfa', 'dfasfdad', '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(16, 1, 1, 0, 4, 2, 0, 1, 'Modern Family Home', 'modern-family-home', 0, 'Dhaka', '0174115255', 'admin@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-18-19-9539.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-18-19-3227.jpg', NULL, 10, 1, 1, 10, 12, 15, 18, 19, 20, 4200, 2500, 'Daily', '', 1, 0, 1, 'fdasdf', 'asfdasf', '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(17, 1, 1, 0, 3, 1, 0, 2, 'Sweet Family Home', 'sweet-family-home', 0, 'Dhaka', '0174115255', 'user@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-07-10-19-37-4801.jpg', 'upload/custom-images/property-thumb-2023-05-07-10-19-37-3176.jpg', NULL, 10, 1, 1, 150, 200, 300, 400, 500, 600, 3600, 36000, 'Daily', '', 1, 0, 1, 'fdasfd', 'asfdasfdsafd', '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(18, 1, 1, 0, 8, 1, 0, 2, 'four title', 'four-title', 1, 'Dhaka', '+8801701203652', 'admin@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-08-10-59-32-5879.jpg', 'upload/custom-images/property-thumb-2023-05-08-10-59-32-6178.jpg', NULL, 50, 1, 1, 100, 200, 300, 400, 500, 600, 400, 5000, 'Daily', 'https://www.youtube.com/watch?v=Get7rqXYrbQ', 0, 0, 1, 'first seo title', 'safdsaf', '2023-05-08 04:59:33', '2023-05-10 01:54:20'),
(19, 1, 1, 0, 10, 1, 0, 2, 'five time', 'five-time', 2, 'Dhaka', '+8801701203652', 'user@gmail.com', 'https://supremesafecost.com/', NULL, NULL, 'property-file-2023-05-08-11-05-58-2672.jpg', 'upload/custom-images/property-thumb-2023-05-08-11-05-58-4814.jpg', NULL, 10, 1, 1, 20, 30, 40, 50, 60, 70, 4200, 36000, 'Daily', 'https://www.youtube.com/watch?v=Get7rqXYrbQ', 1, 0, 1, 'first seo title', 'asdsafasf', '2023-05-08 05:05:58', '2023-05-10 01:44:22'),
(20, 1, 1, 0, 8, 1, 0, 2, 'six title', 'six-title', 0, 'Dhaka', '+8801701203652', 'abc@gmail.com', 'https://supremesafecost.com/', NULL, 'six title here', 'property-file-2023-05-10-04-17-06-6622.jpg', 'upload/custom-images/property-thumb-2023-05-10-04-17-06-5036.jpg', NULL, 50, 1, 1, 14, 22, 12, 11, 47, 41, 400, 5000, 'Daily', 'https://www.youtube.com/watch?v=Get7rqXYrbQ', 1, 0, 0, 'six title here', 'six title here', '2023-05-09 22:17:06', '2023-05-09 23:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `property_aminities`
--

CREATE TABLE `property_aminities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `aminity_id` int(11) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_aminities`
--

INSERT INTO `property_aminities` (`id`, `property_id`, `aminity_id`, `status`, `created_at`, `updated_at`) VALUES
(26, 9, 1, 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(27, 9, 2, 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(28, 9, 3, 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(29, 9, 5, 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(30, 9, 6, 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(31, 10, 1, 1, '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(32, 10, 2, 1, '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(33, 10, 3, 1, '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(34, 10, 4, 1, '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(35, 10, 5, 1, '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(36, 11, 1, 1, '2023-05-07 04:10:44', '2023-05-07 04:10:44'),
(37, 11, 2, 1, '2023-05-07 04:10:44', '2023-05-07 04:10:44'),
(38, 11, 3, 1, '2023-05-07 04:10:44', '2023-05-07 04:10:44'),
(39, 11, 14, 1, '2023-05-07 04:10:44', '2023-05-07 04:10:44'),
(40, 12, 1, 1, '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(41, 12, 2, 1, '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(42, 12, 3, 1, '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(43, 12, 15, 1, '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(44, 12, 16, 1, '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(45, 13, 1, 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(46, 13, 2, 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(47, 13, 4, 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(48, 13, 5, 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(49, 13, 15, 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(50, 13, 16, 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(51, 14, 1, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(52, 14, 2, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(53, 14, 3, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(54, 14, 4, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(55, 14, 5, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(56, 14, 6, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(57, 14, 15, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(58, 14, 16, 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(59, 15, 1, 1, '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(60, 15, 3, 1, '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(61, 15, 5, 1, '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(62, 15, 6, 1, '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(63, 15, 7, 1, '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(64, 16, 2, 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(65, 16, 3, 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(66, 16, 4, 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(67, 16, 14, 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(68, 16, 15, 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(69, 16, 16, 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(70, 17, 2, 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(71, 17, 3, 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(72, 17, 5, 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(73, 17, 6, 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(74, 17, 15, 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(75, 17, 16, 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(76, 18, 3, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(77, 18, 4, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(78, 18, 5, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(79, 18, 6, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(80, 18, 7, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(81, 18, 8, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(82, 18, 11, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(83, 18, 12, 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(105, 19, 3, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(106, 19, 4, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(107, 19, 5, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(108, 19, 6, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(109, 19, 7, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(110, 19, 11, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(111, 19, 12, 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(112, 20, 3, 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(113, 20, 4, 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(114, 20, 5, 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(115, 20, 6, 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(116, 20, 7, 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(117, 20, 9, 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `property_id`, `image`, `created_at`, `updated_at`) VALUES
(23, 9, 'upload/custom-images/property-slide-2023-05-07-09-56-46-4801.jpg', '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(24, 9, 'upload/custom-images/property-slide-2023-05-07-09-56-46-4506.jpg', '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(25, 9, 'upload/custom-images/property-slide-2023-05-07-09-56-46-2369.jpg', '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(26, 9, 'upload/custom-images/property-slide-2023-05-07-09-56-46-8735.jpg', '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(27, 10, 'upload/custom-images/property-slide-2023-05-07-10-09-27-3319.jpg', '2023-05-07 04:09:28', '2023-05-07 04:09:28'),
(28, 10, 'upload/custom-images/property-slide-2023-05-07-10-09-28-8351.jpg', '2023-05-07 04:09:28', '2023-05-07 04:09:28'),
(29, 11, 'upload/custom-images/property-slide-2023-05-07-10-10-44-7698.jpg', '2023-05-07 04:10:45', '2023-05-07 04:10:45'),
(30, 12, 'upload/custom-images/property-slide-2023-05-07-10-12-19-2661.jpg', '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(31, 13, 'upload/custom-images/property-slide-2023-05-07-10-14-33-8851.jpg', '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(32, 13, 'upload/custom-images/property-slide-2023-05-07-10-14-33-6822.jpg', '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(33, 13, 'upload/custom-images/property-slide-2023-05-07-10-14-33-2793.jpg', '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(34, 14, 'upload/custom-images/property-slide-2023-05-07-10-15-55-1336.jpg', '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(35, 15, 'upload/custom-images/property-slide-2023-05-07-10-17-07-3810.jpg', '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(36, 15, 'upload/custom-images/property-slide-2023-05-07-10-17-07-4852.jpg', '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(37, 16, 'upload/custom-images/property-slide-2023-05-07-10-18-20-8335.jpg', '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(38, 17, 'upload/custom-images/property-slide-2023-05-07-10-19-37-1398.jpg', '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(39, 17, 'upload/custom-images/property-slide-2023-05-07-10-19-37-1783.jpg', '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(40, 17, 'upload/custom-images/property-slide-2023-05-07-10-19-37-9664.jpg', '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(41, 17, 'upload/custom-images/property-slide-2023-05-07-10-19-37-6934.jpg', '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(42, 18, 'upload/custom-images/property-slide-2023-05-08-10-59-33-6835.jpg', '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(43, 18, 'upload/custom-images/property-slide-2023-05-08-10-59-33-4629.jpg', '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(44, 18, 'upload/custom-images/property-slide-2023-05-08-10-59-33-6334.jpg', '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(45, 19, 'upload/custom-images/property-slide-2023-05-08-11-05-58-2569.jpg', '2023-05-08 05:05:58', '2023-05-08 05:05:58'),
(46, 19, 'upload/custom-images/property-slide-2023-05-08-11-05-58-2169.jpg', '2023-05-08 05:05:58', '2023-05-08 05:05:58'),
(47, 19, 'upload/custom-images/property-slide-2023-05-08-11-05-58-9079.jpg', '2023-05-08 05:05:58', '2023-05-08 05:05:58'),
(48, 19, 'upload/custom-images/property-slide-2023-05-08-11-05-58-2598.jpg', '2023-05-08 05:05:58', '2023-05-08 05:05:58'),
(49, 20, 'upload/custom-images/property-slide-2023-05-10-04-17-06-9356.jpg', '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(50, 20, 'upload/custom-images/property-slide-2023-05-10-04-17-06-5517.jpg', '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(51, 20, 'upload/custom-images/property-slide-2023-05-10-04-17-06-5565.jpg', '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(52, 20, 'upload/custom-images/property-slide-2023-05-10-04-17-06-5905.jpg', '2023-05-09 22:17:06', '2023-05-09 22:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `property_nearest_locations`
--

CREATE TABLE `property_nearest_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `nearest_location_id` int(11) DEFAULT NULL,
  `nearest_place_id` int(11) DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_nearest_locations`
--

INSERT INTO `property_nearest_locations` (`id`, `property_id`, `nearest_location_id`, `nearest_place_id`, `distance`, `status`, `created_at`, `updated_at`) VALUES
(7, 9, 1, NULL, '100', 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(8, 9, 8, NULL, '200', 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(9, 9, 6, NULL, '300', 1, '2023-05-07 03:56:46', '2023-05-07 03:56:46'),
(10, 10, 1, NULL, '100', 1, '2023-05-07 04:09:27', '2023-05-07 04:09:27'),
(11, 11, 2, NULL, '100', 1, '2023-05-07 04:10:44', '2023-05-07 04:10:44'),
(12, 12, 2, NULL, '100', 1, '2023-05-07 04:12:19', '2023-05-07 04:12:19'),
(13, 13, 2, NULL, '100', 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(14, 13, 4, NULL, '100', 1, '2023-05-07 04:14:33', '2023-05-07 04:14:33'),
(15, 14, 1, NULL, '100', 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(16, 14, 7, NULL, '100', 1, '2023-05-07 04:15:55', '2023-05-07 04:15:55'),
(17, 15, 7, NULL, '100', 1, '2023-05-07 04:17:07', '2023-05-07 04:17:07'),
(18, 16, 1, NULL, '100', 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(19, 16, 2, NULL, '100', 1, '2023-05-07 04:18:20', '2023-05-07 04:18:20'),
(20, 17, 2, NULL, '100', 1, '2023-05-07 04:19:37', '2023-05-07 04:19:37'),
(21, 18, 5, NULL, '100', 1, '2023-05-08 04:59:33', '2023-05-08 04:59:33'),
(31, 19, 3, NULL, '100', 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(32, 19, 10, NULL, '100', 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(33, 19, 8, NULL, '100', 1, '2023-05-08 05:09:04', '2023-05-08 05:09:04'),
(34, 20, 5, NULL, '100', 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06'),
(35, 20, 6, NULL, '200', 1, '2023-05-09 22:17:06', '2023-05-09 22:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `property_purposes`
--

CREATE TABLE `property_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_purposes`
--

INSERT INTO `property_purposes` (`id`, `purpose`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'For Rent', 'for-rent', 1, '2023-05-08 01:05:02', '2023-05-08 01:05:46'),
(2, 'For Sale', 'for-sale', 1, '2023-05-08 01:05:11', '2023-05-08 01:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `type`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(8, 'House and Garden', 'house-and-garden', 1, '2023-05-08 01:07:35', '2023-05-08 01:07:35'),
(9, 'Hotel And Resort', 'hotel-and-resort', 1, '2023-05-08 01:07:43', '2023-05-08 01:07:43'),
(10, 'Business', 'business', 1, '2023-05-08 01:07:50', '2023-05-08 01:07:50'),
(11, 'Restaurant', 'restaurant', 1, '2023-05-08 01:07:59', '2023-05-08 01:07:59'),
(12, 'Fitness Club', 'fitness-club', 1, '2023-05-08 01:08:07', '2023-05-08 01:08:07'),
(13, 'Event and Club', 'event-and-club', 1, '2023-05-08 01:08:13', '2023-05-08 01:08:13'),
(14, 'Education', 'education', 1, '2023-05-08 01:08:24', '2023-05-08 01:08:24'),
(15, 'Housing', 'housing', 1, '2023-05-08 01:08:31', '2023-05-08 01:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Services', 'Our Popular Services', 'our-popular-services', 1, '2023-05-10 01:10:17', '2023-06-05 02:44:32'),
(4, 'Top Destinations', 'Explore Top Destinations', 'explore-top-destinations', 1, '2023-05-10 01:10:54', '2023-06-04 06:29:54'),
(5, 'Our Services', 'Our Popular Services', 'our-popular-services', 1, '2023-05-10 01:11:08', '2023-06-05 02:52:55'),
(6, 'Top Deals', 'The Last Minute Deals', 'the-last-minute-deals', 1, '2023-05-10 01:11:32', '2023-06-04 06:34:06'),
(7, 'Our Testimonails', 'Good Reviews By Clients', 'good-reviews-by-clients', 1, '2023-05-10 01:11:45', '2023-06-04 06:34:23'),
(8, 'Tour Guides', 'Meet Our Excellent Guides', 'meet-our-excellent-guides', 1, '2023-05-10 01:11:58', '2023-06-04 06:34:39'),
(9, 'Our Blogs', 'Recent Articles & Posts', 'recent-articles--posts', 1, '2023-06-04 06:45:31', '2023-06-07 21:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'upload/service/1769329768383223.png', 'আরবি ভাষা ও সাহিত্য বিভাগ', '----', '<p><span style=\"background-color: rgba(0, 0, 0, 0.05);\">আরবি ভাষা ও সাহিত্য বিভাগ</span><br></p>', 1, '2023-05-02 02:41:59', '2023-06-21 10:19:17'),
(4, 'upload/service/1769329749653644.png', 'আল-কুরআন এন্ড ইসলামিক স্টাডিজ বিভাগ', '-----', '<p>আল-কুরআন এন্ড ইসলামিক স্টাডিজ বিভাগ<br></p>', 1, '2023-05-02 02:42:58', '2023-06-21 10:18:59'),
(5, 'upload/service/1769329729571147.png', 'আল-হাদীস এন্ড ইসলামিক স্টাডিজ বিভাগ', '-----', '<p><span style=\"background-color: rgba(0, 0, 0, 0.05);\">আল-হাদীস এন্ড ইসলামিক স্টাডিজ বিভাগ</span><br></p>', 1, '2023-05-02 02:43:45', '2023-06-21 10:18:40'),
(6, 'upload/service/1769329696282440.png', 'আল-হাদীস এন্ড ইসলামিক স্টাডিজ বিভাগ', '-----', '<div style=\"color: rgb(248, 248, 242); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">আল-হাদীস এন্ড ইসলামিক স্টাডিজ বিভাগ</div>', 1, '2023-06-05 03:14:01', '2023-06-21 10:18:08'),
(7, 'upload/service/1769329655354332.png', 'আল-কুরআন এন্ড ইসলামিক স্টাডিজ বিভাগ', '-----', '<div style=\"color: rgb(248, 248, 242); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">আল-কুরআন এন্ড ইসলামিক স্টাডিজ বিভাগ</div>', 1, '2023-06-05 03:30:31', '2023-06-21 10:17:29'),
(8, 'upload/service/1769329624669572.png', 'আরবি ভাষা ও সাহিত্য বিভাগ', '----', '<div style=\"color: rgb(248, 248, 242); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">আরবি ভাষা ও সাহিত্য বিভাগ</div>', 1, '2023-06-05 03:31:05', '2023-06-21 10:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/slider/1767856258259029.jpg', 'Make Your Trip Fun & Noted', 'Allow us to guide you through the innovative stress free approach in finding your dream Properties.', 'make-your-trip-fun--noted', 1, '2023-06-05 03:58:30', '2023-06-05 03:58:30'),
(2, 'upload/slider/1767856137706433.jpg', 'Begin your adventure with us', 'Allow us to guide you through the innovative stress free approach in finding your dream Properties.', 'begin-your-adventure-with-us', 1, '2023-06-05 03:56:44', '2023-06-05 03:56:44'),
(3, 'upload/slider/1767856076796929.jpg', 'Start Planning Your Dream Trip', 'Allow us to guide you through the innovative stress free approach in finding your dream Properties.', 'start-planning-your-dream-trip', 1, '2023-06-05 03:55:37', '2023-06-05 03:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `designation`, `description`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(2, 'kamrul islam', 'upload/testimonial/1764773801629257.png', 'Creative Director', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text everLorem industry\'s standard dummy text everLorem.</span><br></p>', NULL, 1, '2023-05-02 03:24:08', '2023-05-02 03:58:18'),
(3, 'Zakiya Khatun', 'upload/testimonial/1764775860033712.jpg', 'Office Manager', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text everLorem industry\'s standard dummy text everLorem.</span><br></p>', NULL, 1, '2023-05-02 03:56:52', '2023-05-02 03:58:11'),
(4, 'Zahurul Islam', 'upload/testimonial/1764775886584765.jpg', 'Support Manager', '<p><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text everLorem industry\'s standard dummy text everLorem.</span><br></p>', NULL, 1, '2023-05-02 03:57:17', '2023-05-02 03:58:03');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$1bfuM0r6lswYr7LAqgP15OkIOdfWv2c3gshdonS03jRzNWhFPAGpa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aminities`
--
ALTER TABLE `aminities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_states`
--
ALTER TABLE `country_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `madrashas`
--
ALTER TABLE `madrashas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearest_locations`
--
ALTER TABLE `nearest_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_menus`
--
ALTER TABLE `notice_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_aminities`
--
ALTER TABLE `property_aminities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_nearest_locations`
--
ALTER TABLE `property_nearest_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_purposes`
--
ALTER TABLE `property_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aminities`
--
ALTER TABLE `aminities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country_states`
--
ALTER TABLE `country_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `madrashas`
--
ALTER TABLE `madrashas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nearest_locations`
--
ALTER TABLE `nearest_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice_menus`
--
ALTER TABLE `notice_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `property_aminities`
--
ALTER TABLE `property_aminities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `property_nearest_locations`
--
ALTER TABLE `property_nearest_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `property_purposes`
--
ALTER TABLE `property_purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
