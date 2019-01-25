-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 01:32 PM
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
-- Table structure for table `bookmark_resume`
--

CREATE TABLE `bookmark_resume` (
  `bookmark_resume_id` int(11) NOT NULL,
  `jc_user_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `retrieved_by` varchar(5) NOT NULL,
  `bookmark_status` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark_resume`
--

INSERT INTO `bookmark_resume` (`bookmark_resume_id`, `jc_user_id`, `jf_user_id`, `retrieved_by`, `bookmark_status`, `created_at`, `updated_at`) VALUES
(7, 1, 21, '1', 'retrieve', '2018-11-27 15:09:43', '2018-11-27 15:10:02'),
(8, 1, 22, '1', 'retrieve', '2018-11-29 14:58:18', '2018-11-29 15:04:14');

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
-- Table structure for table `detail_group_friends`
--

CREATE TABLE `detail_group_friends` (
  `detail_group_friends_id` int(11) NOT NULL,
  `group_friends_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `role` enum('Owner','Member') NOT NULL DEFAULT 'Member',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_group_friends`
--

INSERT INTO `detail_group_friends` (`detail_group_friends_id`, `group_friends_id`, `jf_user_id`, `role`, `created_at`, `updated_at`) VALUES
(2, 1, 22, 'Member', '2019-01-11 08:31:45', '2019-01-11 08:31:45'),
(3, 1, 21, 'Member', '2019-01-11 08:36:55', '2019-01-11 08:36:55'),
(4, 2, 21, 'Member', '2019-01-11 08:41:20', '2019-01-11 08:41:20'),
(5, 6, 21, 'Member', '2019-01-11 08:41:38', '2019-01-11 08:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `friends_list`
--

CREATE TABLE `friends_list` (
  `friends_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `partner_jf_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends_list`
--

INSERT INTO `friends_list` (`friends_id`, `jf_user_id`, `partner_jf_user_id`, `created_at`, `updated_at`) VALUES
(1, 21, 22, '2019-01-11 07:22:45', NULL),
(2, 21, 23, '2019-01-23 14:02:17', NULL),
(3, 21, 24, '2019-01-23 14:02:17', NULL),
(4, 22, 21, '2019-01-24 07:35:13', NULL),
(5, 23, 21, '2019-01-24 07:35:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_friends`
--

CREATE TABLE `group_friends` (
  `group_friends_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `owner` int(11) DEFAULT NULL,
  `group_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_friends`
--

INSERT INTO `group_friends` (`group_friends_id`, `group_name`, `owner`, `group_image`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 21, 'https://cdn-images-1.medium.com/max/1200/1*j76hKq2KBP9-Y-N7KcnM6A.png', '2019-01-11 08:50:09', '2019-01-11 08:50:09'),
(2, 'Angular JS', 21, 'https://cdn.auth0.com/blog/angular/logo.png', '2019-01-11 08:50:08', '2019-01-11 08:50:08'),
(3, 'Ionic Framework Hybrid Mobile Application', 21, 'https://hackster.imgix.net/uploads/attachments/183867/ionic.png?auto=compress&w=900&h=675&fit=min&fm=jpg', '2019-01-11 08:15:24', '2019-01-11 08:15:24'),
(4, 'iOS Developer', 21, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdcahYVVv0vLtabdT2hVve3gpXmN6As_J1Cpe5OmRxiSRgAN1qyA', '2019-01-11 08:17:28', '2019-01-11 08:17:28'),
(5, 'React Native', 21, 'https://cdn-images-1.medium.com/max/1200/1*KANHihva9OdXx2-V5EDn3g.png', '2019-01-11 08:15:48', '2019-01-11 08:15:48'),
(6, 'Android Developer', 21, 'https://image.slidesharecdn.com/myandroidpresentation1-120923142837-phpapp02/95/android-fundamentals-and-tutorial-for-beginners-1-728.jpg?cb=1348410647', '2019-01-11 08:50:10', '2019-01-11 08:50:10');

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
(13, 1, 'testanak3123@gmail.com', 'Gondangdia', '', '', '123456', 'jc', 'active', '2018-10-17 15:31:52', '2018-10-16 14:47:33'),
(14, 3, 'orgil@yahoo.com', 'perusahaan anak anak', 'Bojong Kenyot', 'perubahan', '12312321321', 'jc', 'active', '', '');

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
  `gender` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `province_id` varchar(3) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `cv_file_name` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `highest_qualification` varchar(255) DEFAULT NULL,
  `field_of_study` varchar(255) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `expected_salary` varchar(255) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `last_salary` varchar(255) DEFAULT NULL,
  `group_id` varchar(5) DEFAULT NULL,
  `total_rating` varchar(50) NOT NULL DEFAULT '',
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `profile_pict` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_finder`
--

INSERT INTO `job_finder` (`finder_id`, `email_address`, `full_name`, `address`, `phone`, `gender`, `birth_date`, `province_id`, `city_name`, `cv_file_name`, `university`, `highest_qualification`, `field_of_study`, `grade`, `expected_salary`, `language`, `last_salary`, `group_id`, `total_rating`, `status`, `profile_pict`, `updated_at`, `created_at`) VALUES
(21, '123@gmail.com', 'user 123', 'Jalan Bambu Betung 3 no. 18', '123213212131312', 'Male', '2018-11-03', '17', '17', 'storage/app/resume/S92DUxV8Li8fchokEqd4ayCNUSquHvkZ5bqclbJk.docx', 'Binus', '2', 'IT', '3.00', '15000000', 'English', '12300000', 'jf', '0', 'active', 'storage/app/image/k9wazimq2nddz3xMj9cd8HBDqm0ubzUNQLGWHSpZ.png', '2019-01-20 09:49:33', '2018-11-27 14:59:24'),
(22, '234@gmail.com', 'Jordy Jonatan', 'Kalteng', '123213212131312', 'Male', '2018-11-17', '13', '', '', 'Bina Nusantara', '2', 'IT', '', '', '', '', 'jf', '0', 'active', 'storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(23, '345@gmail.com', 'Dodi Dodo', 'Kalteng', '123213212131312', 'Male', '2018-11-17', '13', '', '', 'Univ. Bunda Mulia', '2', 'IT', '', '', '', '', 'jf', '0', 'active', 'storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(24, '456@gmail.com', 'Franco', 'Kalteng', '123213212131312', 'Male', '2018-11-17', '13', '', '', 'Pelita Harapan', '2', 'IT', '', '', '', '', 'jf', '0', 'active', 'storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(25, '567@gmail.com', 'Andi Susanto', 'Kalteng', '123213212131312', 'Male', '2018-11-17', '13', '', '', 'Pelita Harapan', '2', 'IT', '', '', '', '', 'jf', '0', 'active', 'storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(26, '678@gmail.com', 'Kelly Kimberly', 'Kalteng', '123213212131312', 'Female', '2018-11-17', '13', '', '', 'Pelita Harapan', '2', 'IT', '', '', '', '', 'jf', '0', 'active', 'storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(27, '789@gmail.com', 'Christine', 'Kalteng', '123213212131312', 'Female', '2018-11-17', '13', '', '', 'Pelita Harapan', '2', 'IT', '', '', '', '', 'jf', '0', 'active', 'storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png', '2018-11-27 15:00:24', '2018-11-27 15:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `job_finder_experience`
--

CREATE TABLE `job_finder_experience` (
  `detail_id` int(11) NOT NULL,
  `finder_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `period_from` varchar(30) NOT NULL,
  `period_to` varchar(30) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `tech_type_id` int(11) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_finder_experience`
--

INSERT INTO `job_finder_experience` (`detail_id`, `finder_id`, `company_name`, `period_from`, `period_to`, `job_description`, `job_position`, `industry_id`, `tech_type_id`, `updated_at`, `created_at`) VALUES
(17, 21, 'Tokped', '2016-03-10', '2017-03-02', 'Coba Coba', '6', 1, 2, '2018-11-27 15:05:04', '2018-11-27 15:05:04'),
(18, 21, 'Astra', '2017-04-05', '2018-11-14', 'Test 1', '3', 1, 11, '2018-11-27 15:05:15', '2018-11-27 15:05:04');

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
  `category_id` varchar(5) NOT NULL,
  `has_seen_id` int(11) NOT NULL,
  `payment_range_minimum` int(11) NOT NULL,
  `payment_range_maximum` int(11) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `job_status` int(11) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `jc_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_list`
--

INSERT INTO `job_post_list` (`job_post_id`, `job_name`, `benefit_details`, `description`, `category_id`, `has_seen_id`, `payment_range_minimum`, `payment_range_maximum`, `experience`, `job_status`, `created_at`, `updated_at`, `jc_user_id`) VALUES
(1, 'test job 1', 'asuransi 2', 'cek job 1', '3', 0, 3500000, 7000000, 'test job 2', 1, '2018-10-07 16:24:05', '2018-11-27 15:07:04', '1'),
(2, 'Colosseum', 'Gile lu', 'Cek dolo', '1', 0, 2500000, 7000000, 'CobA COBA', 1, '2018-11-16 12:06:18', '2018-11-16 12:06:18', '1'),
(3, 'Kampret', 'Lupa ye', 'Woi', '1', 0, 2500000, 7000000, 'Province', 1, '2018-11-16 13:31:54', '2018-11-16 13:31:54', '14'),
(4, 'Kerja Rodi', 'Front End', 'Bagai Kuda', '1', 0, 2500000, 7000000, 'Junior 1 tahun', 1, '2018-11-27 15:07:27', '2018-11-27 15:07:27', '1');

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
(8, 1, '21', 1, '2018-11-27 15:03:29', '2018-11-27 15:03:29'),
(9, 2, '21', 1, '2018-11-27 15:03:36', '2018-11-27 15:03:36');

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
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `login_history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_login_date` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`login_history_id`, `user_id`, `last_login_date`, `updated_at`, `created_at`) VALUES
(23, 21, '2018-11-27 15:02:43', '2018-11-27 15:02:43', '2018-11-27 15:02:43'),
(24, 1, '2018-11-27 15:05:32', '2018-11-27 15:05:32', '2018-11-27 15:05:32'),
(25, 1, '2018-11-28 23:11:08', '2018-11-28 23:11:08', '2018-11-28 23:11:08'),
(26, 1, '2018-11-29 13:16:54', '2018-11-29 13:16:54', '2018-11-29 13:16:54'),
(27, 22, '2018-11-29 13:28:38', '2018-11-29 13:28:38', '2018-11-29 13:28:38'),
(28, 1, '2018-11-29 13:28:50', '2018-11-29 13:28:50', '2018-11-29 13:28:50'),
(29, 21, '2018-11-29 13:45:01', '2018-11-29 13:45:01', '2018-11-29 13:45:01'),
(30, 21, '2018-11-29 13:49:37', '2018-11-29 13:49:37', '2018-11-29 13:49:37'),
(31, 1, '2018-11-29 14:31:27', '2018-11-29 14:31:27', '2018-11-29 14:31:27'),
(32, 22, '2018-11-29 15:04:44', '2018-11-29 15:04:44', '2018-11-29 15:04:44'),
(33, 1, '2018-11-29 15:05:10', '2018-11-29 15:05:10', '2018-11-29 15:05:10'),
(34, 21, '2018-12-15 04:59:39', '2018-12-15 04:59:39', '2018-12-15 04:59:39'),
(35, 21, '2018-12-15 06:32:09', '2018-12-15 06:32:09', '2018-12-15 06:32:09'),
(36, 21, '2018-12-15 08:22:27', '2018-12-15 08:22:27', '2018-12-15 08:22:27'),
(37, 1, '2018-12-15 08:24:28', '2018-12-15 08:24:28', '2018-12-15 08:24:28'),
(38, 21, '2018-12-15 08:26:36', '2018-12-15 08:26:36', '2018-12-15 08:26:36'),
(39, 21, '2018-12-15 10:07:38', '2018-12-15 10:07:38', '2018-12-15 10:07:38'),
(40, 21, '2018-12-15 16:53:48', '2018-12-15 16:53:48', '2018-12-15 16:53:48'),
(41, 21, '2018-12-16 04:30:52', '2018-12-16 04:30:52', '2018-12-16 04:30:52'),
(42, 21, '2018-12-17 12:43:28', '2018-12-17 12:43:28', '2018-12-17 12:43:28'),
(43, 21, '2018-12-18 22:29:24', '2018-12-18 22:29:24', '2018-12-18 22:29:24'),
(44, 21, '2018-12-19 14:47:59', '2018-12-19 14:47:59', '2018-12-19 14:47:59'),
(45, 1, '2019-01-08 14:46:05', '2019-01-08 14:46:05', '2019-01-08 14:46:05'),
(46, 21, '2019-01-08 14:46:14', '2019-01-08 14:46:14', '2019-01-08 14:46:14'),
(47, 21, '2019-01-09 21:51:33', '2019-01-09 21:51:33', '2019-01-09 21:51:33'),
(48, 21, '2019-01-10 22:09:07', '2019-01-10 22:09:07', '2019-01-10 22:09:07'),
(49, 21, '2019-01-11 06:31:17', '2019-01-11 06:31:17', '2019-01-11 06:31:17'),
(50, 21, '2019-01-20 09:49:08', '2019-01-20 09:49:08', '2019-01-20 09:49:08'),
(51, 21, '2019-01-21 04:51:34', '2019-01-21 04:51:34', '2019-01-21 04:51:34'),
(52, 21, '2019-01-23 04:55:53', '2019-01-23 04:55:53', '2019-01-23 04:55:53'),
(53, 21, '2019-01-23 10:21:51', '2019-01-23 10:21:51', '2019-01-23 10:21:51'),
(54, 21, '2019-01-23 14:19:58', '2019-01-23 14:19:58', '2019-01-23 14:19:58'),
(55, 21, '2019-01-24 03:46:25', '2019-01-24 03:46:25', '2019-01-24 03:46:25'),
(56, 22, '2019-01-24 06:32:00', '2019-01-24 06:32:00', '2019-01-24 06:32:00'),
(57, 21, '2019-01-24 07:27:27', '2019-01-24 07:27:27', '2019-01-24 07:27:27'),
(58, 22, '2019-01-24 07:29:03', '2019-01-24 07:29:03', '2019-01-24 07:29:03'),
(59, 23, '2019-01-24 07:34:01', '2019-01-24 07:34:01', '2019-01-24 07:34:01'),
(60, 23, '2019-01-24 07:36:09', '2019-01-24 07:36:09', '2019-01-24 07:36:09'),
(61, 21, '2019-01-24 07:36:33', '2019-01-24 07:36:33', '2019-01-24 07:36:33'),
(62, 21, '2019-01-24 13:19:51', '2019-01-24 13:19:51', '2019-01-24 13:19:51'),
(63, 21, '2019-01-24 23:13:02', '2019-01-24 23:13:02', '2019-01-24 23:13:02'),
(64, 21, '2019-01-25 00:31:38', '2019-01-25 00:31:38', '2019-01-25 00:31:38'),
(65, 22, '2019-01-25 02:30:52', '2019-01-25 02:30:52', '2019-01-25 02:30:52'),
(66, 21, '2019-01-25 03:32:23', '2019-01-25 03:32:23', '2019-01-25 03:32:23'),
(67, 21, '2019-01-25 03:36:10', '2019-01-25 03:36:10', '2019-01-25 03:36:10'),
(68, 23, '2019-01-25 04:25:07', '2019-01-25 04:25:07', '2019-01-25 04:25:07'),
(69, 21, '2019-01-25 09:45:34', '2019-01-25 09:45:34', '2019-01-25 09:45:34'),
(70, 22, '2019-01-25 09:51:46', '2019-01-25 09:51:46', '2019-01-25 09:51:46'),
(71, 21, '2019-01-25 11:53:21', '2019-01-25 11:53:21', '2019-01-25 11:53:21'),
(72, 22, '2019-01-25 11:54:05', '2019-01-25 11:54:05', '2019-01-25 11:54:05');

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
  `authorized_person_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `province_id` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `total_employee` varchar(50) NOT NULL,
  `apply_process_time` varchar(50) NOT NULL,
  `industry_id` varchar(10) NOT NULL,
  `website` varchar(255) NOT NULL,
  `working_hours` varchar(30) NOT NULL,
  `benefit_details` varchar(255) NOT NULL,
  `language` varchar(30) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_customer`
--

INSERT INTO `master_customer` (`company_id`, `email_address`, `company_name`, `phone`, `authorized_person_name`, `logo`, `province_id`, `address`, `total_employee`, `apply_process_time`, `industry_id`, `website`, `working_hours`, `benefit_details`, `language`, `summary`, `status_id`, `updated_at`, `created_at`) VALUES
(1, '123@gmail.com', 'Jekardah', '123456', 'Dasar Biadab', '', '1', 'Aceh', '123', '12', '1', 'www.123.com', '12', 'Asuransi', 'English', 'cekidot 1', 9, '2018-11-28 23:54:56', '2018-09-26 15:58:28'),
(2, 'testvacan@yahoo.com', 'Jekardah', '123456', '', '', '', '', '', '', '', '', '', '', '', 'cekidot', 9, '2018-09-26 15:59:34', '2018-09-26 15:59:34'),
(3, 'perusahaan1@yahoo.com', 'Coba Cobas', '123456', 'Dasar Biadab', 'D:\\xampp\\tmp\\php2B38.tmp', '8', 'Jakartas', '123', '12', '2', 'www.123.com', '12', 'asuransi', 'English', 'Perusahaan bergerak di bidang jasas', 9, '2018-11-16 13:34:40', '2018-11-04 16:59:08'),
(4, 'jogress@gmail.com', 'Ngomong Apa kamutuh', '123456', 'Dasar Biadab', 'storage/app/logo/9YuV528UT66kQ4ddsrLviBxGOMkeDytgmWkjSio3.jpeg', '1', 'Coba kardus', '123', '12', '1', 'www.123.com', '12', 'Asuransi', 'Indonesia', '2werre2wr', 9, '2018-11-20 09:57:35', '2018-11-20 09:57:35'),
(5, 'corpus@gmail.com', 'Test Corporate', '123213212131312', 'Dasar Biadab', 'storage/app/logo/iJWo103Kqbllj0nGtcBO8GHoj15olWZzuFyXAPCm.jpeg', '1', 'Bambu Betung', '123', '12', '1', 'www.123.com', '12', 'Coba Coba', 'Indonesia', 'Deskripsi Kerja', 9, '2018-11-27 15:02:07', '2018-11-27 15:02:07');

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
-- Table structure for table `master_highest_qualification`
--

CREATE TABLE `master_highest_qualification` (
  `highest_qualification_id` int(11) NOT NULL,
  `highest_qualification_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_highest_qualification`
--

INSERT INTO `master_highest_qualification` (`highest_qualification_id`, `highest_qualification_name`) VALUES
(1, 'SMA'),
(2, 'Diploma / D3'),
(3, 'Bachelor\'s Degree / S1'),
(4, 'Master\'s Degree / S2'),
(5, 'Doctorals / S3');

-- --------------------------------------------------------

--
-- Table structure for table `master_industry`
--

CREATE TABLE `master_industry` (
  `industry_id` int(11) NOT NULL,
  `industry_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_industry`
--

INSERT INTO `master_industry` (`industry_id`, `industry_name`) VALUES
(1, 'Accounting/Audit/Tax Services'),
(2, 'Advertising/Marketing/Promotion/PR');

-- --------------------------------------------------------

--
-- Table structure for table `master_job_position`
--

CREATE TABLE `master_job_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_job_position`
--

INSERT INTO `master_job_position` (`position_id`, `position_name`) VALUES
(1, 'Junior Developer'),
(2, 'Senior Developer'),
(3, 'Chief Technology Officer'),
(4, 'System Architect'),
(5, 'Network Architect'),
(6, 'Internet & Technology Architect'),
(7, 'IT Manager');

-- --------------------------------------------------------

--
-- Table structure for table `master_limit_group`
--

CREATE TABLE `master_limit_group` (
  `limit_group_id` int(11) NOT NULL,
  `limit_amount` int(11) NOT NULL,
  `limit_group_price` varchar(255) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_limit_group`
--

INSERT INTO `master_limit_group` (`limit_group_id`, `limit_amount`, `limit_group_price`, `created_at`, `updated_at`) VALUES
(1, 50, '500,000 IDR', '2018-10-17 15:31:52', '2018-10-17 15:31:52'),
(2, 100, '1,000,000 IDR', '2018-10-17 15:31:52', '2018-10-17 15:31:52');

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
  `tech_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_tech_type`
--

INSERT INTO `master_tech_type` (`tech_type_id`, `tech_type_name`) VALUES
(1, 'Frontend Developer'),
(2, 'Backend Developer'),
(3, 'Full Stack Developer'),
(4, 'iOS Developer'),
(5, 'Android Developer'),
(6, 'IT Project Manager'),
(7, 'IT Consultant'),
(8, 'IT Database'),
(9, 'IT Networking'),
(10, 'System Analyst'),
(11, 'Business Analyst'),
(12, 'IT Security'),
(13, 'Quality Engineer'),
(15, 'IT Designer UI/UX');

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
(13, 'testanak3123@gmail.com', 'anak buah 1', 'e10adc3949ba59abbe56e057f20f883e', 'jc', 'active', '2018-10-16 14:47:33', '2018-10-17 15:31:52'),
(14, 'orgil@yahoo.com', 'Orang Gila', 'e10adc3949ba59abbe56e057f20f883e', 'jc', 'active', '', ''),
(21, '123@gmail.com', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jf', 'active', '2018-11-27 14:59:24', '2018-11-27 14:59:24'),
(22, '234@gmail.com', '234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jf', 'active', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(23, '345@gmail.com', '345@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jf', 'active', '2018-11-27 15:00:24', '2018-11-27 15:00:24'),
(24, '456@gmail.com', '456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jf', 'active', '2018-11-27 15:00:24', '2018-11-27 15:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `notification_model`
--

CREATE TABLE `notification_model` (
  `notification_id` int(11) NOT NULL,
  `log_message` text NOT NULL,
  `sent_user_id` int(11) NOT NULL,
  `read_user_id` int(11) NOT NULL,
  `status_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_model`
--

INSERT INTO `notification_model` (`notification_id`, `log_message`, `sent_user_id`, `read_user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(19, 'user 123 has post new feed', 21, 22, 'UNREAD', '2019-01-24 00:28:35', '2019-01-24 00:28:35'),
(20, 'user 123 has post new feed', 21, 23, 'UNREAD', '2019-01-24 00:28:35', '2019-01-24 00:28:35'),
(21, 'user 123 has post new feed', 21, 24, 'UNREAD', '2019-01-24 00:28:35', '2019-01-24 00:28:35'),
(22, 'Dodi Dodo has post new feed', 23, 21, 'UNREAD', '2019-01-24 00:36:20', '2019-01-24 00:36:20'),
(23, 'user 123 has post new feed', 21, 22, 'UNREAD', '2019-01-24 17:47:15', '2019-01-24 17:47:15'),
(24, 'user 123 has post new feed', 21, 23, 'UNREAD', '2019-01-24 17:47:15', '2019-01-24 17:47:15'),
(25, 'user 123 has post new feed', 21, 24, 'UNREAD', '2019-01-24 17:47:15', '2019-01-24 17:47:15'),
(32, 'Jordy Jonatan has like your post', 22, 21, 'UNREAD', '2019-01-24 20:29:04', '2019-01-24 20:29:04'),
(33, 'Jordy Jonatan has like your post', 22, 21, 'UNREAD', '2019-01-24 20:29:40', '2019-01-24 20:29:40'),
(34, 'Dodi Dodo has like your post', 23, 21, 'UNREAD', '2019-01-24 21:25:22', '2019-01-24 21:25:22'),
(35, 'Jordy Jonatan has like your post', 22, 21, 'UNREAD', '2019-01-25 02:53:51', '2019-01-25 02:53:51'),
(36, 'Jordy Jonatan has like your post', 22, 21, 'UNREAD', '2019-01-25 03:01:54', '2019-01-25 03:01:54'),
(37, 'Jordy Jonatan has commented your post', 22, 21, 'UNREAD', '2019-01-25 04:52:58', '2019-01-25 04:52:58'),
(38, 'Jordy Jonatan has like your post', 22, 21, 'UNREAD', '2019-01-25 05:03:41', '2019-01-25 05:03:41'),
(39, 'Jordy Jonatan has post new feed', 22, 21, 'UNREAD', '2019-01-25 05:15:12', '2019-01-25 05:15:12'),
(40, 'Jordy Jonatan has repost your feed', 22, 22, 'UNREAD', '2019-01-25 05:19:36', '2019-01-25 05:19:36'),
(41, 'Jordy Jonatan has repost your feed', 22, 22, 'UNREAD', '2019-01-25 05:19:48', '2019-01-25 05:19:48'),
(42, 'Jordy Jonatan has repost your feed', 22, 22, 'UNREAD', '2019-01-25 05:19:58', '2019-01-25 05:19:58'),
(43, 'Jordy Jonatan has like your post', 22, 21, 'UNREAD', '2019-01-25 05:31:44', '2019-01-25 05:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `post_feeds`
--

CREATE TABLE `post_feeds` (
  `post_id` int(11) NOT NULL,
  `post_text` longtext NOT NULL,
  `post_picture_src` varchar(255) NOT NULL,
  `post_videos_src` varchar(255) NOT NULL,
  `jf_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_feeds`
--

INSERT INTO `post_feeds` (`post_id`, `post_text`, `post_picture_src`, `post_videos_src`, `jf_user_id`, `created_at`, `updated_at`) VALUES
(6, 'test kocak 1', 'storage/app/post_picture/KZIw55kwEpI5ENybrMaMdOe8ok8XkLqtWGC3DXZ4.jpeg', '', 21, '2019-01-19 04:15:55', '2019-01-19 04:15:55'),
(17, 'test n upload', '', 'storage/app/post_video/LBtrITwIMl5vxoeU9G7pwM6cOCUtI58prcVaaTSm.mp4', 21, '2019-01-23 07:29:10', '2019-01-23 07:29:10'),
(18, 'test post', '', 'storage/app/post_video/yBrIHdQ7EzHSS2u1W8grToB60mmpnOHZZoTYsPuR.mp4', 21, '2019-01-24 00:27:40', '2019-01-24 00:27:40'),
(19, 'test video', '', '', 21, '2019-01-24 00:28:35', '2019-01-24 00:28:35'),
(20, 'test coba coba', '', '', 23, '2019-01-24 00:34:33', '2019-01-24 00:34:33'),
(21, 'test coba coba', '', '', 23, '2019-01-24 00:36:19', '2019-01-24 00:36:19'),
(22, 'test upload', '', 'storage/app/post_video/twVY8yeXH1sjdxmtsjaVswvsCfmRaPs7KpgZ5enM.mp4', 21, '2019-01-24 17:47:15', '2019-01-24 17:47:15'),
(23, 'test ktp', 'storage/app/post_picture/6O9020r92HK0NLTJroURe1UaLMTM5Dvvdo09iQv1.jpeg', '', 22, '2019-01-25 05:15:12', '2019-01-25 05:15:12'),
(24, 'test kocak 1', 'storage/app/post_picture/KZIw55kwEpI5ENybrMaMdOe8ok8XkLqtWGC3DXZ4.jpeg', '', 22, '2019-01-25 05:18:54', '2019-01-25 05:18:54'),
(25, 'test kocak 1', 'storage/app/post_picture/KZIw55kwEpI5ENybrMaMdOe8ok8XkLqtWGC3DXZ4.jpeg', '', 22, '2019-01-25 05:19:36', '2019-01-25 05:19:36'),
(26, 'test kocak 1', 'storage/app/post_picture/KZIw55kwEpI5ENybrMaMdOe8ok8XkLqtWGC3DXZ4.jpeg', '', 22, '2019-01-25 05:19:48', '2019-01-25 05:19:48'),
(27, 'test ktp', 'storage/app/post_picture/6O9020r92HK0NLTJroURe1UaLMTM5Dvvdo09iQv1.jpeg', '', 22, '2019-01-25 05:19:58', '2019-01-25 05:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `post_feeds_comment`
--

CREATE TABLE `post_feeds_comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_feeds_comment`
--

INSERT INTO `post_feeds_comment` (`comment_id`, `post_id`, `jf_user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 6, 22, 'test', '2019-01-25 04:49:43', '2019-01-25 04:49:43'),
(2, 6, 22, 'coba', '2019-01-25 04:49:57', '2019-01-25 04:49:57'),
(3, 6, 22, 'lagi', '2019-01-25 04:51:42', '2019-01-25 04:51:42'),
(4, 6, 22, 'payah', '2019-01-25 04:52:07', '2019-01-25 04:52:07'),
(5, 6, 22, 'boro boro', '2019-01-25 04:52:58', '2019-01-25 04:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `post_feeds_likes`
--

CREATE TABLE `post_feeds_likes` (
  `likes_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_feeds_likes`
--

INSERT INTO `post_feeds_likes` (`likes_id`, `post_id`, `jf_user_id`, `created_at`, `updated_at`) VALUES
(13, 17, 22, '2019-01-24 20:29:36', '2019-01-24 20:29:36'),
(14, 6, 23, '2019-01-24 21:25:22', '2019-01-24 21:25:22'),
(18, 18, 22, '2019-01-25 05:31:44', '2019-01-25 05:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `resume_limit`
--

CREATE TABLE `resume_limit` (
  `resume_limit_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `limit_group_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_limit`
--

INSERT INTO `resume_limit` (`resume_limit_id`, `company_id`, `limit_group_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'active', '2018-11-28 23:54:24', '2018-11-28 23:54:24'),
(2, 1, 2, 'inactive', '2018-11-28 23:54:56', '2018-11-28 23:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `skill_job_finder`
--

CREATE TABLE `skill_job_finder` (
  `skill_job_finder_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_job_finder`
--

INSERT INTO `skill_job_finder` (`skill_job_finder_id`, `jf_user_id`, `skill_name`, `updated_at`, `created_at`) VALUES
(4, 21, 'Laravel', '2018-11-27 15:05:04', '2018-11-27 15:05:04'),
(5, 21, 'NodeJS', '2018-11-27 15:05:04', '2018-11-27 15:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `skill_list`
--

CREATE TABLE `skill_list` (
  `skill_list_id` int(11) NOT NULL,
  `jf_user_id` varchar(255) NOT NULL,
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `bookmark_resume`
--
ALTER TABLE `bookmark_resume`
  ADD PRIMARY KEY (`bookmark_resume_id`);

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
-- Indexes for table `detail_group_friends`
--
ALTER TABLE `detail_group_friends`
  ADD PRIMARY KEY (`detail_group_friends_id`);

--
-- Indexes for table `friends_list`
--
ALTER TABLE `friends_list`
  ADD PRIMARY KEY (`friends_id`);

--
-- Indexes for table `group_friends`
--
ALTER TABLE `group_friends`
  ADD PRIMARY KEY (`group_friends_id`);

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
-- Indexes for table `job_finder_experience`
--
ALTER TABLE `job_finder_experience`
  ADD PRIMARY KEY (`detail_id`);

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
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`login_history_id`);

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
-- Indexes for table `master_highest_qualification`
--
ALTER TABLE `master_highest_qualification`
  ADD PRIMARY KEY (`highest_qualification_id`);

--
-- Indexes for table `master_industry`
--
ALTER TABLE `master_industry`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `master_job_position`
--
ALTER TABLE `master_job_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `master_limit_group`
--
ALTER TABLE `master_limit_group`
  ADD PRIMARY KEY (`limit_group_id`);

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
-- Indexes for table `notification_model`
--
ALTER TABLE `notification_model`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `post_feeds`
--
ALTER TABLE `post_feeds`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_feeds_comment`
--
ALTER TABLE `post_feeds_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `post_feeds_likes`
--
ALTER TABLE `post_feeds_likes`
  ADD PRIMARY KEY (`likes_id`);

--
-- Indexes for table `resume_limit`
--
ALTER TABLE `resume_limit`
  ADD PRIMARY KEY (`resume_limit_id`);

--
-- Indexes for table `skill_job_finder`
--
ALTER TABLE `skill_job_finder`
  ADD PRIMARY KEY (`skill_job_finder_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`user_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark_resume`
--
ALTER TABLE `bookmark_resume`
  MODIFY `bookmark_resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `detail_group_friends`
--
ALTER TABLE `detail_group_friends`
  MODIFY `detail_group_friends_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `friends_list`
--
ALTER TABLE `friends_list`
  MODIFY `friends_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_friends`
--
ALTER TABLE `group_friends`
  MODIFY `group_friends_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_agreement`
--
ALTER TABLE `job_agreement`
  MODIFY `agreement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_finder`
--
ALTER TABLE `job_finder`
  MODIFY `finder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `job_finder_experience`
--
ALTER TABLE `job_finder_experience`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `job_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_post_search`
--
ALTER TABLE `job_post_search`
  MODIFY `job_post_match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `login_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_customer`
--
ALTER TABLE `master_customer`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_difficulty`
--
ALTER TABLE `master_difficulty`
  MODIFY `diff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_highest_qualification`
--
ALTER TABLE `master_highest_qualification`
  MODIFY `highest_qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_industry`
--
ALTER TABLE `master_industry`
  MODIFY `industry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_job_position`
--
ALTER TABLE `master_job_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_limit_group`
--
ALTER TABLE `master_limit_group`
  MODIFY `limit_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `tech_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notification_model`
--
ALTER TABLE `notification_model`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `post_feeds`
--
ALTER TABLE `post_feeds`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `post_feeds_comment`
--
ALTER TABLE `post_feeds_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_feeds_likes`
--
ALTER TABLE `post_feeds_likes`
  MODIFY `likes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `resume_limit`
--
ALTER TABLE `resume_limit`
  MODIFY `resume_limit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill_job_finder`
--
ALTER TABLE `skill_job_finder`
  MODIFY `skill_job_finder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
