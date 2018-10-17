-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 07:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itrep_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `job_id`, `sender_id`, `receiver_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 13, 2, 3, 'Hi', '2018-05-08 04:56:16', '0000-00-00 00:00:00'),
(2, 13, 3, 2, 'Hi juga', '2018-05-08 05:09:23', '0000-00-00 00:00:00'),
(3, 13, 3, 2, 'mau tanya dong', '2018-05-08 05:32:33', '2018-05-08 05:32:33'),
(4, 13, 3, 2, 'test', '2018-05-08 05:32:48', '2018-05-08 05:32:48'),
(5, 13, 2, 3, 'ya ada yang bisa di bantu?', '2018-05-08 05:33:23', '2018-05-08 05:33:23'),
(6, 13, 2, 3, 'ya??', '2018-05-08 13:07:31', '2018-05-08 13:07:31'),
(7, 13, 2, 3, 'asasa', '2018-05-08 13:10:24', '2018-05-08 13:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`) VALUES
(1, 'USD'),
(2, 'IDR');

-- --------------------------------------------------------

--
-- Table structure for table `job_agreement`
--

CREATE TABLE `job_agreement` (
  `agreement_id` int(11) NOT NULL,
  `job_match_id` varchar(25) NOT NULL,
  `agreement_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_creator`
--

CREATE TABLE `job_creator` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_profile` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_creator`
--

INSERT INTO `job_creator` (`user_id`, `company_id`, `email_address`, `company_name`, `company_address`, `company_profile`, `phone`, `group_id`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'testvacan@yahoo.com', 'Jekardah', 'bambu betung', '', '123456', 'jc', 'active', '2018-09-25 11:25:49', '2018-09-25 11:25:49'),
(13, 1, 'testanak3123@gmail.com', 'Jekardah 1', '', '', '123456', 'jc', 'active', '2018-10-17 15:31:52', '2018-10-16 14:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_finder`
--

CREATE TABLE `job_finder` (
  `finder_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `total_rating` varchar(50) NOT NULL DEFAULT '',
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `profile_pict` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_finder`
--

INSERT INTO `job_finder` (`finder_id`, `email_address`, `full_name`, `address`, `phone`, `group_id`, `total_rating`, `status`, `profile_pict`, `updated_at`, `created_at`) VALUES
(6, '123@gmail.com', 'users123', 'bambu betung', '123456', 'jf', '0', 'active', '', '2018-09-25 11:16:03', '2018-09-25 11:16:03'),
(7, 'vincent_gk@yahoo.com', 'wakakakaa', 'bambu betung', '123456', 'jf', '0', 'active', '', '2018-09-25 11:24:00', '2018-09-25 11:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `jc_email_address` varchar(50) NOT NULL,
  `expired_date` varchar(30) NOT NULL,
  `has_seen_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `price_list` varchar(20) NOT NULL,
  `job_status` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`job_id`, `job_title`, `description`, `jc_email_address`, `expired_date`, `has_seen_id`, `currency_id`, `price_list`, `job_status`, `payment_type_id`, `created_at`, `updated_at`) VALUES
(1, 'test job', 'cek job', '123@gmail.com', '09/25/2018', 0, 1, '100', 1, 1, '2018-09-15 12:18:34', '2018-09-15 12:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `job_master_detail_milestone`
--

CREATE TABLE `job_master_detail_milestone` (
  `job_detail_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `milestone_detail` text NOT NULL,
  `milestone_price` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_match_search`
--

CREATE TABLE `job_match_search` (
  `job_match_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `jf_email_address` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_match_skill`
--

CREATE TABLE `job_match_skill` (
  `skill_job_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_match_skill`
--

INSERT INTO `job_match_skill` (`skill_job_id`, `job_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-09-15 12:18:42', '2018-09-15 12:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `job_match_type`
--

CREATE TABLE `job_match_type` (
  `type_job_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_type_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_match_type`
--

INSERT INTO `job_match_type` (`type_job_id`, `job_id`, `job_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-09-15 12:18:37', '2018-09-15 12:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_list`
--

CREATE TABLE `job_post_list` (
  `job_post_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `benefit_details` text NOT NULL,
  `description` text NOT NULL,
  `has_seen_id` int(11) NOT NULL,
  `payment_range_minimum` int(11) NOT NULL,
  `payment_range_maximum` int(11) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `job_status` int(11) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `jc_email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_list`
--

INSERT INTO `job_post_list` (`job_post_id`, `job_name`, `benefit_details`, `description`, `has_seen_id`, `payment_range_minimum`, `payment_range_maximum`, `experience`, `job_status`, `created_at`, `updated_at`, `jc_email_address`) VALUES
(1, 'test job 1', 'asuransi 1', 'cek job 1', 0, 3500000, 7000000, 'test job 1', 1, '2018-10-07 16:24:05', '2018-10-17 14:09:31', 'testvacan@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_search`
--

CREATE TABLE `job_post_search` (
  `job_post_match_id` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `jf_user_id` varchar(3) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_search`
--

INSERT INTO `job_post_search` (`job_post_match_id`, `job_post_id`, `jf_user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 1, '6', 1, '2018-10-17 17:24:53', '2018-10-17 17:24:53'),
(3, 1, '7', 1, '2018-10-17 17:25:34', '2018-10-17 17:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_skill`
--

CREATE TABLE `job_post_skill` (
  `skill_job_post_id` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `job_type_id` int(11) NOT NULL,
  `job_type_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`job_type_id`, `job_type_desc`, `created_at`, `updated_at`) VALUES
(1, 'Backend Programming (API, PHP)', NULL, NULL),
(2, 'Front End Programming (HTML, CSS)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_user_rating`
--

CREATE TABLE `job_user_rating` (
  `rating_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `rating_score` int(11) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE `master_admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`admin_id`, `full_name`, `updated_at`, `created_at`) VALUES
(1, '123@gmail.com', '2018-04-03 22:23:29', '2018-04-03 22:23:29'),
(2, '123@gmail.com', '2018-04-03 22:24:26', '2018-04-03 22:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `master_customer`
--

CREATE TABLE `master_customer` (
  `company_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_customer`
--

INSERT INTO `master_customer` (`company_id`, `email_address`, `company_name`, `phone`, `summary`, `status_id`, `updated_at`, `created_at`) VALUES
(1, '123@gmail.com', 'Jekardah', '123456', 'cekidot', 9, '2018-09-26 15:58:28', '2018-09-26 15:58:28'),
(2, 'testvacan@yahoo.com', 'Jekardah', '123456', 'cekidot', 9, '2018-09-26 15:59:34', '2018-09-26 15:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `master_difficulty`
--

CREATE TABLE `master_difficulty` (
  `diff_id` int(11) NOT NULL,
  `diff_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_difficulty`
--

INSERT INTO `master_difficulty` (`diff_id`, `diff_name`) VALUES
(1, 'Easy'),
(2, 'Moderate');

-- --------------------------------------------------------

--
-- Table structure for table `master_menu`
--

CREATE TABLE `master_menu` (
  `menu_id` varchar(25) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `url_route_menu` varchar(255) NOT NULL,
  `route_menu` varchar(50) NOT NULL,
  `seq` int(11) NOT NULL,
  `menu_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_menu`
--

INSERT INTO `master_menu` (`menu_id`, `menu_name`, `url_route_menu`, `route_menu`, `seq`, `menu_description`, `created_at`, `updated_at`) VALUES
('TS001', 'Profile', '/profile', 'ProfileController@create', 1, 'Register Profile with CV', NULL, NULL),
('TS002', 'Search Job', '/marketplace', 'JobMarketController@create', 2, 'Job Browsing', NULL, NULL),
('TS003', 'Register Job', '/jobregistration', 'JobRegistrationController@create', 3, 'Form to register Job Market Place', NULL, NULL),
('TS004', 'Resume', '/resume', 'ResumeController@create', 4, 'Job Finder Resume', NULL, NULL),
('TS005', 'Company Profile', '/companyprofile', 'CompanyProfileController@create', 5, 'Company Profile', NULL, NULL),
('TS006', 'History', '/history', 'JobHistoryController@create', 6, 'History bidding', NULL, NULL),
('TS007', 'Job Agreement', '/jobagreement', 'JobAgreementController@create', 7, 'Job Agreement show deal and undeal projects', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_payment_type`
--

CREATE TABLE `master_payment_type` (
  `payment_type_id` int(11) NOT NULL,
  `payment_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_payment_type`
--

INSERT INTO `master_payment_type` (`payment_type_id`, `payment_type_name`) VALUES
(1, 'Full'),
(2, 'Per milestone');

-- --------------------------------------------------------

--
-- Table structure for table `master_province`
--

CREATE TABLE `master_province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_province`
--

INSERT INTO `master_province` (`province_id`, `province_name`, `updated_at`, `created_at`) VALUES
(1, 'Aceh', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(2, 'Bali', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(3, 'Banten', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(4, 'Bengkulu', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(5, 'Gorontalo', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(6, 'Jakarta', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(7, 'Jambi', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(8, 'Jawa Barat', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(9, 'Jawa Tengah', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(10, 'Jawa Timur', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(11, 'Kalimantan Barat', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(12, 'Kalimantan Selatan', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(13, 'Kalimantan Tengah', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(14, 'Kalimantan Timur', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(15, 'Kalimantan Utara', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(16, 'Kepulauan Bangka Belitung', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(17, 'Kepulauan Riau', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(18, 'Lampung', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(19, 'Maluku', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(20, 'Maluku Utara', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(21, 'Nusa Tenggara Barat', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(22, 'Nusa Tenggara Timur', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(23, 'Papua', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(24, 'Papua Barat', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(25, 'Riau', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(26, 'Sulawesi Barat', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(27, 'Sulawesi Selatan', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(28, 'Sulawesi Tengah', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(29, 'Sulawesi Tenggara', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(30, 'Sulawesi Utara', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(31, 'Sumatera Barat', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(32, 'Sumatera Selatan', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(33, 'Sumatera Utara', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(34, 'Daerah Istimewa Yogyakarta', '2018-09-15 12:07:38', '2018-09-15 12:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `master_status`
--

CREATE TABLE `master_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_status`
--

INSERT INTO `master_status` (`status_id`, `status_name`) VALUES
(1, 'Open'),
(2, 'Closed'),
(3, 'Filled'),
(4, 'Reviewed'),
(5, 'Review done'),
(6, 'Accepted'),
(7, 'Rejected'),
(8, 'Removed'),
(9, 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `master_tech_type`
--

CREATE TABLE `master_tech_type` (
  `tech_type_id` int(11) NOT NULL,
  `tech_type_name` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_tech_type`
--

INSERT INTO `master_tech_type` (`tech_type_id`, `tech_type_name`, `updated_at`, `created_at`) VALUES
(1, 'Frontend', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(2, 'Middleware', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(3, 'Backend', '2018-09-15 12:07:38', '2018-09-15 12:07:38'),
(4, 'Full Stack', '2018-09-15 12:07:38', '2018-09-15 12:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `user_id` int(11) NOT NULL,
  `user_email_address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `status_id` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`user_id`, `user_email_address`, `username`, `password`, `group_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'testvacan@yahoo.com', 'testvacan@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'jc', 'active', '2018-09-25 11:25:48', '2018-09-25 11:25:48'),
(6, '123@gmail.com', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jf', 'active', '2018-09-25 11:16:02', '2018-09-25 11:16:02'),
(7, 'vincent_gk@yahoo.com', 'vincent_gk@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'jf', 'active', '2018-09-25 11:24:00', '2018-09-25 11:24:00'),
(13, 'testanak3123@gmail.com', 'anak buah 1', 'e10adc3949ba59abbe56e057f20f883e', 'jc', 'active', '2018-10-16 14:47:33', '2018-10-17 15:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `skill_list`
--

CREATE TABLE `skill_list` (
  `skill_list_id` int(11) NOT NULL,
  `jf_email_address` varchar(255) NOT NULL,
  `skill_id` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skill_type`
--

CREATE TABLE `skill_type` (
  `skill_id` int(11) NOT NULL,
  `skill_type` varchar(255) NOT NULL,
  `skill_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_type`
--

INSERT INTO `skill_type` (`skill_id`, `skill_type`, `skill_description`, `created_at`, `updated_at`) VALUES
(1, 'Cobol', 'Programming Language', NULL, NULL),
(2, 'PHP', 'Programming Language', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `user_menu_id` varchar(255) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`user_menu_id`, `group_id`, `menu_id`, `created_at`, `updated_at`) VALUES
('UM001', 'JF', 'TS001', NULL, NULL),
('UM002', 'JF', 'TS002', NULL, NULL),
('UM003', 'JC', 'TS003', NULL, NULL),
('UM004', 'JC', 'TS004', NULL, NULL),
('UM005', 'JC', 'TS005', NULL, NULL),
('UM006', 'JF', 'TS006', NULL, NULL),
('UM007', 'JC', 'TS007', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `job_agreement`
--
ALTER TABLE `job_agreement`
  ADD PRIMARY KEY (`agreement_id`);

--
-- Indexes for table `job_creator`
--
ALTER TABLE `job_creator`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `job_finder`
--
ALTER TABLE `job_finder`
  ADD PRIMARY KEY (`finder_id`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_master_detail_milestone`
--
ALTER TABLE `job_master_detail_milestone`
  ADD PRIMARY KEY (`job_detail_id`);

--
-- Indexes for table `job_match_search`
--
ALTER TABLE `job_match_search`
  ADD PRIMARY KEY (`job_match_id`);

--
-- Indexes for table `job_match_skill`
--
ALTER TABLE `job_match_skill`
  ADD PRIMARY KEY (`skill_job_id`);

--
-- Indexes for table `job_match_type`
--
ALTER TABLE `job_match_type`
  ADD PRIMARY KEY (`type_job_id`);

--
-- Indexes for table `job_post_list`
--
ALTER TABLE `job_post_list`
  ADD PRIMARY KEY (`job_post_id`);

--
-- Indexes for table `job_post_search`
--
ALTER TABLE `job_post_search`
  ADD PRIMARY KEY (`job_post_match_id`);

--
-- Indexes for table `job_post_skill`
--
ALTER TABLE `job_post_skill`
  ADD PRIMARY KEY (`skill_job_post_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`job_type_id`);

--
-- Indexes for table `job_user_rating`
--
ALTER TABLE `job_user_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `master_customer`
--
ALTER TABLE `master_customer`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `master_difficulty`
--
ALTER TABLE `master_difficulty`
  ADD PRIMARY KEY (`diff_id`);

--
-- Indexes for table `master_menu`
--
ALTER TABLE `master_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `seq` (`seq`);

--
-- Indexes for table `master_payment_type`
--
ALTER TABLE `master_payment_type`
  ADD PRIMARY KEY (`payment_type_id`);

--
-- Indexes for table `master_province`
--
ALTER TABLE `master_province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `master_status`
--
ALTER TABLE `master_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `master_tech_type`
--
ALTER TABLE `master_tech_type`
  ADD PRIMARY KEY (`tech_type_id`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `skill_list`
--
ALTER TABLE `skill_list`
  ADD PRIMARY KEY (`skill_list_id`);

--
-- Indexes for table `skill_type`
--
ALTER TABLE `skill_type`
  ADD PRIMARY KEY (`skill_id`),
  ADD UNIQUE KEY `SkillID` (`skill_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`user_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_agreement`
--
ALTER TABLE `job_agreement`
  MODIFY `agreement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_master_detail_milestone`
--
ALTER TABLE `job_master_detail_milestone`
  MODIFY `job_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_match_search`
--
ALTER TABLE `job_match_search`
  MODIFY `job_match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_match_skill`
--
ALTER TABLE `job_match_skill`
  MODIFY `skill_job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_match_type`
--
ALTER TABLE `job_match_type`
  MODIFY `type_job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_post_list`
--
ALTER TABLE `job_post_list`
  MODIFY `job_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_post_search`
--
ALTER TABLE `job_post_search`
  MODIFY `job_post_match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_post_skill`
--
ALTER TABLE `job_post_skill`
  MODIFY `skill_job_post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `job_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_user_rating`
--
ALTER TABLE `job_user_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_customer`
--
ALTER TABLE `master_customer`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_difficulty`
--
ALTER TABLE `master_difficulty`
  MODIFY `diff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_payment_type`
--
ALTER TABLE `master_payment_type`
  MODIFY `payment_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_province`
--
ALTER TABLE `master_province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `master_status`
--
ALTER TABLE `master_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_tech_type`
--
ALTER TABLE `master_tech_type`
  MODIFY `tech_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skill_list`
--
ALTER TABLE `skill_list`
  MODIFY `skill_list_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill_type`
--
ALTER TABLE `skill_type`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
