# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: itrep_jobportal
# Generation Time: 2019-01-11 08:53:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bookmark_resume
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookmark_resume`;

CREATE TABLE `bookmark_resume` (
  `bookmark_resume_id` int(11) NOT NULL AUTO_INCREMENT,
  `jc_user_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `retrieved_by` varchar(5) NOT NULL,
  `bookmark_status` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  PRIMARY KEY (`bookmark_resume_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

LOCK TABLES `bookmark_resume` WRITE;
/*!40000 ALTER TABLE `bookmark_resume` DISABLE KEYS */;

INSERT INTO `bookmark_resume` (`bookmark_resume_id`, `jc_user_id`, `jf_user_id`, `retrieved_by`, `bookmark_status`, `created_at`, `updated_at`)
VALUES
	(7,1,21,'1','retrieve','2018-11-27 15:09:43','2018-11-27 15:10:02'),
	(8,1,22,'1','retrieve','2018-11-29 14:58:18','2018-11-29 15:04:14');

/*!40000 ALTER TABLE `bookmark_resume` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table chat
# ------------------------------------------------------------

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;

INSERT INTO `chat` (`id`, `job_id`, `sender_id`, `receiver_id`, `message`, `created_at`, `updated_at`)
VALUES
	(1,13,2,3,'Hi','2018-05-08 11:56:16','0000-00-00 00:00:00'),
	(2,13,3,2,'Hi juga','2018-05-08 12:09:23','0000-00-00 00:00:00'),
	(3,13,3,2,'mau tanya dong','2018-05-08 12:32:33','2018-05-08 12:32:33'),
	(4,13,3,2,'test','2018-05-08 12:32:48','2018-05-08 12:32:48'),
	(5,13,2,3,'ya ada yang bisa di bantu?','2018-05-08 12:33:23','2018-05-08 12:33:23'),
	(6,13,2,3,'ya??','2018-05-08 20:07:31','2018-05-08 20:07:31'),
	(7,13,2,3,'asasa','2018-05-08 20:10:24','2018-05-08 20:10:24');

/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table currency
# ------------------------------------------------------------

DROP TABLE IF EXISTS `currency`;

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(50) NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;

INSERT INTO `currency` (`currency_id`, `currency_name`)
VALUES
	(1,'USD'),
	(2,'IDR');

/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table detail_group_friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `detail_group_friends`;

CREATE TABLE `detail_group_friends` (
  `detail_group_friends_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_friends_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `role` enum('Owner','Member') NOT NULL DEFAULT 'Member',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`detail_group_friends_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

LOCK TABLES `detail_group_friends` WRITE;
/*!40000 ALTER TABLE `detail_group_friends` DISABLE KEYS */;

INSERT INTO `detail_group_friends` (`detail_group_friends_id`, `group_friends_id`, `jf_user_id`, `role`, `created_at`, `updated_at`)
VALUES
	(2,1,22,'Member','2019-01-11 15:31:45','2019-01-11 15:31:45'),
	(3,1,21,'Member','2019-01-11 15:36:55','2019-01-11 15:36:55'),
	(4,2,21,'Member','2019-01-11 15:41:20','2019-01-11 15:41:20'),
	(5,6,21,'Member','2019-01-11 15:41:38','2019-01-11 15:41:38');

/*!40000 ALTER TABLE `detail_group_friends` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table friends_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `friends_list`;

CREATE TABLE `friends_list` (
  `friends_id` int(11) NOT NULL AUTO_INCREMENT,
  `jf_user_id` int(11) NOT NULL,
  `partner_jf_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`friends_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `friends_list` WRITE;
/*!40000 ALTER TABLE `friends_list` DISABLE KEYS */;

INSERT INTO `friends_list` (`friends_id`, `jf_user_id`, `partner_jf_user_id`, `created_at`, `updated_at`)
VALUES
	(1,21,22,'2019-01-11 14:22:45',NULL);

/*!40000 ALTER TABLE `friends_list` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table group_friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `group_friends`;

CREATE TABLE `group_friends` (
  `group_friends_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `owner` int(11) DEFAULT NULL,
  `group_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`group_friends_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

LOCK TABLES `group_friends` WRITE;
/*!40000 ALTER TABLE `group_friends` DISABLE KEYS */;

INSERT INTO `group_friends` (`group_friends_id`, `group_name`, `owner`, `group_image`, `created_at`, `updated_at`)
VALUES
	(1,'Laravel',21,'https://cdn-images-1.medium.com/max/1200/1*j76hKq2KBP9-Y-N7KcnM6A.png','2019-01-11 15:50:09','2019-01-11 15:50:09'),
	(2,'Angular JS',21,'https://cdn.auth0.com/blog/angular/logo.png','2019-01-11 15:50:08','2019-01-11 15:50:08'),
	(3,'Ionic Framework Hybrid Mobile Application',21,'https://hackster.imgix.net/uploads/attachments/183867/ionic.png?auto=compress&w=900&h=675&fit=min&fm=jpg','2019-01-11 15:15:24','2019-01-11 15:15:24'),
	(4,'iOS Developer',21,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdcahYVVv0vLtabdT2hVve3gpXmN6As_J1Cpe5OmRxiSRgAN1qyA','2019-01-11 15:17:28','2019-01-11 15:17:28'),
	(5,'React Native',21,'https://cdn-images-1.medium.com/max/1200/1*KANHihva9OdXx2-V5EDn3g.png','2019-01-11 15:15:48','2019-01-11 15:15:48'),
	(6,'Android Developer',21,'https://image.slidesharecdn.com/myandroidpresentation1-120923142837-phpapp02/95/android-fundamentals-and-tutorial-for-beginners-1-728.jpg?cb=1348410647','2019-01-11 15:50:10','2019-01-11 15:50:10');

/*!40000 ALTER TABLE `group_friends` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_agreement
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_agreement`;

CREATE TABLE `job_agreement` (
  `agreement_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_match_id` varchar(25) NOT NULL,
  `agreement_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`agreement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table job_creator
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_creator`;

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
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `job_creator` WRITE;
/*!40000 ALTER TABLE `job_creator` DISABLE KEYS */;

INSERT INTO `job_creator` (`user_id`, `company_id`, `email_address`, `company_name`, `company_address`, `company_profile`, `phone`, `group_id`, `status`, `updated_at`, `created_at`)
VALUES
	(1,1,'testvacan@yahoo.com','Jekardah','bambu betung','','123456','jc','active','2018-09-25 11:25:49','2018-09-25 11:25:49'),
	(13,1,'testanak3123@gmail.com','Gondangdia','','','123456','jc','active','2018-10-17 15:31:52','2018-10-16 14:47:33'),
	(14,3,'orgil@yahoo.com','perusahaan anak anak','Bojong Kenyot','perubahan','12312321321','jc','active','','');

/*!40000 ALTER TABLE `job_creator` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_finder
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_finder`;

CREATE TABLE `job_finder` (
  `finder_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`finder_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

LOCK TABLES `job_finder` WRITE;
/*!40000 ALTER TABLE `job_finder` DISABLE KEYS */;

INSERT INTO `job_finder` (`finder_id`, `email_address`, `full_name`, `address`, `phone`, `gender`, `birth_date`, `province_id`, `city_name`, `cv_file_name`, `university`, `highest_qualification`, `field_of_study`, `grade`, `expected_salary`, `language`, `last_salary`, `group_id`, `total_rating`, `status`, `profile_pict`, `updated_at`, `created_at`)
VALUES
	(21,'123@gmail.com','user 123','Jalan Bambu Betung 3 no. 18','123213212131312','Male','2018-11-03','17','17','storage/app/resume/S92DUxV8Li8fchokEqd4ayCNUSquHvkZ5bqclbJk.docx','Binus','2','IT','3.00','15000000','English','12300000','jf','0','active','storage/app/image/UEKPCsXltyWILCnws7G2shba9fHzhVc1mXnJfcGP.jpeg','2018-11-29 13:59:28','2018-11-27 14:59:24'),
	(22,'234@gmail.com','Jordy Jonatan','Kalteng','123213212131312','Male','2018-11-17','13','','','Bina Nusantara','2','IT','','','','','jf','0','active','storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png','2018-11-27 15:00:24','2018-11-27 15:00:24'),
	(23,'234@gmail.com','Dodi Dodo','Kalteng','123213212131312','Male','2018-11-17','13','','','Univ. Bunda Mulia','2','IT','','','','','jf','0','active','storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png','2018-11-27 15:00:24','2018-11-27 15:00:24'),
	(24,'234@gmail.com','Franco','Kalteng','123213212131312','Male','2018-11-17','13','','','Pelita Harapan','2','IT','','','','','jf','0','active','storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png','2018-11-27 15:00:24','2018-11-27 15:00:24'),
	(25,'234@gmail.com','Andi Susanto','Kalteng','123213212131312','Male','2018-11-17','13','','','Pelita Harapan','2','IT','','','','','jf','0','active','storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png','2018-11-27 15:00:24','2018-11-27 15:00:24'),
	(26,'234@gmail.com','Kelly Kimberly','Kalteng','123213212131312','Female','2018-11-17','13','','','Pelita Harapan','2','IT','','','','','jf','0','active','storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png','2018-11-27 15:00:24','2018-11-27 15:00:24'),
	(27,'234@gmail.com','Christine','Kalteng','123213212131312','Female','2018-11-17','13','','','Pelita Harapan','2','IT','','','','','jf','0','active','storage/app/image/2bUuZ8bBx4w82bdIvfHEdHVSTMoRfKsoRwKVMm1S.png','2018-11-27 15:00:24','2018-11-27 15:00:24');

/*!40000 ALTER TABLE `job_finder` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_finder_experience
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_finder_experience`;

CREATE TABLE `job_finder_experience` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `finder_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `period_from` varchar(30) NOT NULL,
  `period_to` varchar(30) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `tech_type_id` int(11) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

LOCK TABLES `job_finder_experience` WRITE;
/*!40000 ALTER TABLE `job_finder_experience` DISABLE KEYS */;

INSERT INTO `job_finder_experience` (`detail_id`, `finder_id`, `company_name`, `period_from`, `period_to`, `job_description`, `job_position`, `industry_id`, `tech_type_id`, `updated_at`, `created_at`)
VALUES
	(17,21,'Tokped','2016-03-10','2017-03-02','Coba Coba','6',1,2,'2018-11-27 15:05:04','2018-11-27 15:05:04'),
	(18,21,'Astra','2017-04-05','2018-11-14','Test 1','3',1,11,'2018-11-27 15:05:15','2018-11-27 15:05:04');

/*!40000 ALTER TABLE `job_finder_experience` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_master
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_master`;

CREATE TABLE `job_master` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` varchar(50) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `job_master` WRITE;
/*!40000 ALTER TABLE `job_master` DISABLE KEYS */;

INSERT INTO `job_master` (`job_id`, `job_title`, `description`, `jc_email_address`, `expired_date`, `has_seen_id`, `currency_id`, `price_list`, `job_status`, `payment_type_id`, `created_at`, `updated_at`)
VALUES
	(1,'test job','cek job','123@gmail.com','09/25/2018',0,1,'100',1,1,'2018-09-15 12:18:34','2018-09-15 12:18:46');

/*!40000 ALTER TABLE `job_master` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_master_detail_milestone
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_master_detail_milestone`;

CREATE TABLE `job_master_detail_milestone` (
  `job_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `milestone_detail` text NOT NULL,
  `milestone_price` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  PRIMARY KEY (`job_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table job_match_search
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_match_search`;

CREATE TABLE `job_match_search` (
  `job_match_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `jf_email_address` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`job_match_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table job_match_skill
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_match_skill`;

CREATE TABLE `job_match_skill` (
  `skill_job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` varchar(25) NOT NULL,
  `updated_at` varchar(25) NOT NULL,
  PRIMARY KEY (`skill_job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `job_match_skill` WRITE;
/*!40000 ALTER TABLE `job_match_skill` DISABLE KEYS */;

INSERT INTO `job_match_skill` (`skill_job_id`, `job_id`, `skill_id`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'2018-09-15 12:18:42','2018-09-15 12:18:42');

/*!40000 ALTER TABLE `job_match_skill` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_match_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_match_type`;

CREATE TABLE `job_match_type` (
  `type_job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `job_type_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`type_job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `job_match_type` WRITE;
/*!40000 ALTER TABLE `job_match_type` DISABLE KEYS */;

INSERT INTO `job_match_type` (`type_job_id`, `job_id`, `job_type_id`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'2018-09-15 12:18:37','2018-09-15 12:18:37');

/*!40000 ALTER TABLE `job_match_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_post_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_post_list`;

CREATE TABLE `job_post_list` (
  `job_post_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `jc_user_id` varchar(50) NOT NULL,
  PRIMARY KEY (`job_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `job_post_list` WRITE;
/*!40000 ALTER TABLE `job_post_list` DISABLE KEYS */;

INSERT INTO `job_post_list` (`job_post_id`, `job_name`, `benefit_details`, `description`, `category_id`, `has_seen_id`, `payment_range_minimum`, `payment_range_maximum`, `experience`, `job_status`, `created_at`, `updated_at`, `jc_user_id`)
VALUES
	(1,'test job 1','asuransi 2','cek job 1','3',0,3500000,7000000,'test job 2',1,'2018-10-07 16:24:05','2018-11-27 15:07:04','1'),
	(2,'Colosseum','Gile lu','Cek dolo','1',0,2500000,7000000,'CobA COBA',1,'2018-11-16 12:06:18','2018-11-16 12:06:18','1'),
	(3,'Kampret','Lupa ye','Woi','1',0,2500000,7000000,'Province',1,'2018-11-16 13:31:54','2018-11-16 13:31:54','14'),
	(4,'Kerja Rodi','Front End','Bagai Kuda','1',0,2500000,7000000,'Junior 1 tahun',1,'2018-11-27 15:07:27','2018-11-27 15:07:27','1');

/*!40000 ALTER TABLE `job_post_list` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_post_search
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_post_search`;

CREATE TABLE `job_post_search` (
  `job_post_match_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post_id` int(11) NOT NULL,
  `jf_user_id` varchar(3) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  PRIMARY KEY (`job_post_match_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

LOCK TABLES `job_post_search` WRITE;
/*!40000 ALTER TABLE `job_post_search` DISABLE KEYS */;

INSERT INTO `job_post_search` (`job_post_match_id`, `job_post_id`, `jf_user_id`, `status_id`, `created_at`, `updated_at`)
VALUES
	(8,1,'21',1,'2018-11-27 15:03:29','2018-11-27 15:03:29'),
	(9,2,'21',1,'2018-11-27 15:03:36','2018-11-27 15:03:36');

/*!40000 ALTER TABLE `job_post_search` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_post_skill
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_post_skill`;

CREATE TABLE `job_post_skill` (
  `skill_job_post_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  PRIMARY KEY (`skill_job_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table job_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_type`;

CREATE TABLE `job_type` (
  `job_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_type_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`job_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `job_type` WRITE;
/*!40000 ALTER TABLE `job_type` DISABLE KEYS */;

INSERT INTO `job_type` (`job_type_id`, `job_type_desc`, `created_at`, `updated_at`)
VALUES
	(1,'Backend Programming (API, PHP)',NULL,NULL),
	(2,'Front End Programming (HTML, CSS)',NULL,NULL);

/*!40000 ALTER TABLE `job_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_user_rating
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_user_rating`;

CREATE TABLE `job_user_rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `rating_score` int(11) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table login_history
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login_history`;

CREATE TABLE `login_history` (
  `login_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `last_login_date` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`login_history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

LOCK TABLES `login_history` WRITE;
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;

INSERT INTO `login_history` (`login_history_id`, `user_id`, `last_login_date`, `updated_at`, `created_at`)
VALUES
	(23,21,'2018-11-27 15:02:43','2018-11-27 15:02:43','2018-11-27 15:02:43'),
	(24,1,'2018-11-27 15:05:32','2018-11-27 15:05:32','2018-11-27 15:05:32'),
	(25,1,'2018-11-28 23:11:08','2018-11-28 23:11:08','2018-11-28 23:11:08'),
	(26,1,'2018-11-29 13:16:54','2018-11-29 13:16:54','2018-11-29 13:16:54'),
	(27,22,'2018-11-29 13:28:38','2018-11-29 13:28:38','2018-11-29 13:28:38'),
	(28,1,'2018-11-29 13:28:50','2018-11-29 13:28:50','2018-11-29 13:28:50'),
	(29,21,'2018-11-29 13:45:01','2018-11-29 13:45:01','2018-11-29 13:45:01'),
	(30,21,'2018-11-29 13:49:37','2018-11-29 13:49:37','2018-11-29 13:49:37'),
	(31,1,'2018-11-29 14:31:27','2018-11-29 14:31:27','2018-11-29 14:31:27'),
	(32,22,'2018-11-29 15:04:44','2018-11-29 15:04:44','2018-11-29 15:04:44'),
	(33,1,'2018-11-29 15:05:10','2018-11-29 15:05:10','2018-11-29 15:05:10'),
	(34,21,'2018-12-15 04:59:39','2018-12-15 04:59:39','2018-12-15 04:59:39'),
	(35,21,'2018-12-15 06:32:09','2018-12-15 06:32:09','2018-12-15 06:32:09'),
	(36,21,'2018-12-15 08:22:27','2018-12-15 08:22:27','2018-12-15 08:22:27'),
	(37,1,'2018-12-15 08:24:28','2018-12-15 08:24:28','2018-12-15 08:24:28'),
	(38,21,'2018-12-15 08:26:36','2018-12-15 08:26:36','2018-12-15 08:26:36'),
	(39,21,'2018-12-15 10:07:38','2018-12-15 10:07:38','2018-12-15 10:07:38'),
	(40,21,'2018-12-15 16:53:48','2018-12-15 16:53:48','2018-12-15 16:53:48'),
	(41,21,'2018-12-16 04:30:52','2018-12-16 04:30:52','2018-12-16 04:30:52'),
	(42,21,'2018-12-17 12:43:28','2018-12-17 12:43:28','2018-12-17 12:43:28'),
	(43,21,'2018-12-18 22:29:24','2018-12-18 22:29:24','2018-12-18 22:29:24'),
	(44,21,'2018-12-19 14:47:59','2018-12-19 14:47:59','2018-12-19 14:47:59'),
	(45,1,'2019-01-08 14:46:05','2019-01-08 14:46:05','2019-01-08 14:46:05'),
	(46,21,'2019-01-08 14:46:14','2019-01-08 14:46:14','2019-01-08 14:46:14'),
	(47,21,'2019-01-09 21:51:33','2019-01-09 21:51:33','2019-01-09 21:51:33'),
	(48,21,'2019-01-10 22:09:07','2019-01-10 22:09:07','2019-01-10 22:09:07'),
	(49,21,'2019-01-11 06:31:17','2019-01-11 06:31:17','2019-01-11 06:31:17');

/*!40000 ALTER TABLE `login_history` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_admin`;

CREATE TABLE `master_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `master_admin` WRITE;
/*!40000 ALTER TABLE `master_admin` DISABLE KEYS */;

INSERT INTO `master_admin` (`admin_id`, `full_name`, `updated_at`, `created_at`)
VALUES
	(1,'123@gmail.com','2018-04-03 22:23:29','2018-04-03 22:23:29'),
	(2,'123@gmail.com','2018-04-03 22:24:26','2018-04-03 22:24:26');

/*!40000 ALTER TABLE `master_admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_customer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_customer`;

CREATE TABLE `master_customer` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `master_customer` WRITE;
/*!40000 ALTER TABLE `master_customer` DISABLE KEYS */;

INSERT INTO `master_customer` (`company_id`, `email_address`, `company_name`, `phone`, `authorized_person_name`, `logo`, `province_id`, `address`, `total_employee`, `apply_process_time`, `industry_id`, `website`, `working_hours`, `benefit_details`, `language`, `summary`, `status_id`, `updated_at`, `created_at`)
VALUES
	(1,'123@gmail.com','Jekardah','123456','Dasar Biadab','','1','Aceh','123','12','1','www.123.com','12','Asuransi','English','cekidot 1',9,'2018-11-28 23:54:56','2018-09-26 15:58:28'),
	(2,'testvacan@yahoo.com','Jekardah','123456','','','','','','','','','','','','cekidot',9,'2018-09-26 15:59:34','2018-09-26 15:59:34'),
	(3,'perusahaan1@yahoo.com','Coba Cobas','123456','Dasar Biadab','D:\\xampp\\tmp\\php2B38.tmp','8','Jakartas','123','12','2','www.123.com','12','asuransi','English','Perusahaan bergerak di bidang jasas',9,'2018-11-16 13:34:40','2018-11-04 16:59:08'),
	(4,'jogress@gmail.com','Ngomong Apa kamutuh','123456','Dasar Biadab','storage/app/logo/9YuV528UT66kQ4ddsrLviBxGOMkeDytgmWkjSio3.jpeg','1','Coba kardus','123','12','1','www.123.com','12','Asuransi','Indonesia','2werre2wr',9,'2018-11-20 09:57:35','2018-11-20 09:57:35'),
	(5,'corpus@gmail.com','Test Corporate','123213212131312','Dasar Biadab','storage/app/logo/iJWo103Kqbllj0nGtcBO8GHoj15olWZzuFyXAPCm.jpeg','1','Bambu Betung','123','12','1','www.123.com','12','Coba Coba','Indonesia','Deskripsi Kerja',9,'2018-11-27 15:02:07','2018-11-27 15:02:07');

/*!40000 ALTER TABLE `master_customer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_difficulty
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_difficulty`;

CREATE TABLE `master_difficulty` (
  `diff_id` int(11) NOT NULL AUTO_INCREMENT,
  `diff_name` varchar(50) NOT NULL,
  PRIMARY KEY (`diff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `master_difficulty` WRITE;
/*!40000 ALTER TABLE `master_difficulty` DISABLE KEYS */;

INSERT INTO `master_difficulty` (`diff_id`, `diff_name`)
VALUES
	(1,'Easy'),
	(2,'Moderate');

/*!40000 ALTER TABLE `master_difficulty` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_highest_qualification
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_highest_qualification`;

CREATE TABLE `master_highest_qualification` (
  `highest_qualification_id` int(11) NOT NULL AUTO_INCREMENT,
  `highest_qualification_name` varchar(255) NOT NULL,
  PRIMARY KEY (`highest_qualification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `master_highest_qualification` WRITE;
/*!40000 ALTER TABLE `master_highest_qualification` DISABLE KEYS */;

INSERT INTO `master_highest_qualification` (`highest_qualification_id`, `highest_qualification_name`)
VALUES
	(1,'SMA'),
	(2,'Diploma / D3'),
	(3,'Bachelor\'s Degree / S1'),
	(4,'Master\'s Degree / S2'),
	(5,'Doctorals / S3');

/*!40000 ALTER TABLE `master_highest_qualification` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_industry
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_industry`;

CREATE TABLE `master_industry` (
  `industry_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry_name` varchar(255) NOT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `master_industry` WRITE;
/*!40000 ALTER TABLE `master_industry` DISABLE KEYS */;

INSERT INTO `master_industry` (`industry_id`, `industry_name`)
VALUES
	(1,'Accounting/Audit/Tax Services'),
	(2,'Advertising/Marketing/Promotion/PR');

/*!40000 ALTER TABLE `master_industry` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_job_position
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_job_position`;

CREATE TABLE `master_job_position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

LOCK TABLES `master_job_position` WRITE;
/*!40000 ALTER TABLE `master_job_position` DISABLE KEYS */;

INSERT INTO `master_job_position` (`position_id`, `position_name`)
VALUES
	(1,'Junior Developer'),
	(2,'Senior Developer'),
	(3,'Chief Technology Officer'),
	(4,'System Architect'),
	(5,'Network Architect'),
	(6,'Internet & Technology Architect'),
	(7,'IT Manager');

/*!40000 ALTER TABLE `master_job_position` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_limit_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_limit_group`;

CREATE TABLE `master_limit_group` (
  `limit_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `limit_amount` int(11) NOT NULL,
  `limit_group_price` varchar(255) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  PRIMARY KEY (`limit_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `master_limit_group` WRITE;
/*!40000 ALTER TABLE `master_limit_group` DISABLE KEYS */;

INSERT INTO `master_limit_group` (`limit_group_id`, `limit_amount`, `limit_group_price`, `created_at`, `updated_at`)
VALUES
	(1,50,'500,000 IDR','2018-10-17 15:31:52','2018-10-17 15:31:52'),
	(2,100,'1,000,000 IDR','2018-10-17 15:31:52','2018-10-17 15:31:52');

/*!40000 ALTER TABLE `master_limit_group` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_menu`;

CREATE TABLE `master_menu` (
  `menu_id` varchar(25) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `url_route_menu` varchar(255) NOT NULL,
  `route_menu` varchar(50) NOT NULL,
  `seq` int(11) NOT NULL,
  `menu_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`),
  KEY `seq` (`seq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `master_menu` WRITE;
/*!40000 ALTER TABLE `master_menu` DISABLE KEYS */;

INSERT INTO `master_menu` (`menu_id`, `menu_name`, `url_route_menu`, `route_menu`, `seq`, `menu_description`, `created_at`, `updated_at`)
VALUES
	('TS001','Profile','/profile','ProfileController@create',1,'Register Profile with CV',NULL,NULL),
	('TS002','Search Job','/marketplace','JobMarketController@create',2,'Job Browsing',NULL,NULL),
	('TS003','Register Job','/jobregistration','JobRegistrationController@create',3,'Form to register Job Market Place',NULL,NULL),
	('TS004','Resume','/resume','ResumeController@create',4,'Job Finder Resume',NULL,NULL),
	('TS005','Company Profile','/companyprofile','CompanyProfileController@create',5,'Company Profile',NULL,NULL),
	('TS006','History','/history','JobHistoryController@create',6,'History bidding',NULL,NULL),
	('TS007','Job Agreement','/jobagreement','JobAgreementController@create',7,'Job Agreement show deal and undeal projects',NULL,NULL);

/*!40000 ALTER TABLE `master_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_payment_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_payment_type`;

CREATE TABLE `master_payment_type` (
  `payment_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `master_payment_type` WRITE;
/*!40000 ALTER TABLE `master_payment_type` DISABLE KEYS */;

INSERT INTO `master_payment_type` (`payment_type_id`, `payment_type_name`)
VALUES
	(1,'Full'),
	(2,'Per milestone');

/*!40000 ALTER TABLE `master_payment_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_province
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_province`;

CREATE TABLE `master_province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

LOCK TABLES `master_province` WRITE;
/*!40000 ALTER TABLE `master_province` DISABLE KEYS */;

INSERT INTO `master_province` (`province_id`, `province_name`, `updated_at`, `created_at`)
VALUES
	(1,'Aceh','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(2,'Bali','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(3,'Banten','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(4,'Bengkulu','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(5,'Gorontalo','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(6,'Jakarta','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(7,'Jambi','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(8,'Jawa Barat','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(9,'Jawa Tengah','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(10,'Jawa Timur','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(11,'Kalimantan Barat','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(12,'Kalimantan Selatan','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(13,'Kalimantan Tengah','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(14,'Kalimantan Timur','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(15,'Kalimantan Utara','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(16,'Kepulauan Bangka Belitung','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(17,'Kepulauan Riau','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(18,'Lampung','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(19,'Maluku','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(20,'Maluku Utara','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(21,'Nusa Tenggara Barat','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(22,'Nusa Tenggara Timur','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(23,'Papua','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(24,'Papua Barat','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(25,'Riau','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(26,'Sulawesi Barat','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(27,'Sulawesi Selatan','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(28,'Sulawesi Tengah','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(29,'Sulawesi Tenggara','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(30,'Sulawesi Utara','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(31,'Sumatera Barat','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(32,'Sumatera Selatan','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(33,'Sumatera Utara','2018-09-15 12:07:38','2018-09-15 12:07:38'),
	(34,'Daerah Istimewa Yogyakarta','2018-09-15 12:07:38','2018-09-15 12:07:38');

/*!40000 ALTER TABLE `master_province` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_status`;

CREATE TABLE `master_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(30) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

LOCK TABLES `master_status` WRITE;
/*!40000 ALTER TABLE `master_status` DISABLE KEYS */;

INSERT INTO `master_status` (`status_id`, `status_name`)
VALUES
	(1,'Open'),
	(2,'Closed'),
	(3,'Filled'),
	(4,'Reviewed'),
	(5,'Review done'),
	(6,'Accepted'),
	(7,'Rejected'),
	(8,'Removed'),
	(9,'Applied');

/*!40000 ALTER TABLE `master_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_tech_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_tech_type`;

CREATE TABLE `master_tech_type` (
  `tech_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_type_name` varchar(255) NOT NULL,
  PRIMARY KEY (`tech_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

LOCK TABLES `master_tech_type` WRITE;
/*!40000 ALTER TABLE `master_tech_type` DISABLE KEYS */;

INSERT INTO `master_tech_type` (`tech_type_id`, `tech_type_name`)
VALUES
	(1,'Frontend Developer'),
	(2,'Backend Developer'),
	(3,'Full Stack Developer'),
	(4,'iOS Developer'),
	(5,'Android Developer'),
	(6,'IT Project Manager'),
	(7,'IT Consultant'),
	(8,'IT Database'),
	(9,'IT Networking'),
	(10,'System Analyst'),
	(11,'Business Analyst'),
	(12,'IT Security'),
	(13,'Quality Engineer'),
	(15,'IT Designer UI/UX');

/*!40000 ALTER TABLE `master_tech_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table master_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `master_user`;

CREATE TABLE `master_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email_address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `status_id` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

LOCK TABLES `master_user` WRITE;
/*!40000 ALTER TABLE `master_user` DISABLE KEYS */;

INSERT INTO `master_user` (`user_id`, `user_email_address`, `username`, `password`, `group_id`, `status_id`, `created_at`, `updated_at`)
VALUES
	(1,'testvacan@yahoo.com','testvacan@yahoo.com','e10adc3949ba59abbe56e057f20f883e','jc','active','2018-09-25 11:25:48','2018-09-25 11:25:48'),
	(13,'testanak3123@gmail.com','anak buah 1','e10adc3949ba59abbe56e057f20f883e','jc','active','2018-10-16 14:47:33','2018-10-17 15:31:52'),
	(14,'orgil@yahoo.com','Orang Gila','e10adc3949ba59abbe56e057f20f883e','jc','active','',''),
	(21,'123@gmail.com','123@gmail.com','e10adc3949ba59abbe56e057f20f883e','jf','active','2018-11-27 14:59:24','2018-11-27 14:59:24'),
	(22,'234@gmail.com','234@gmail.com','e10adc3949ba59abbe56e057f20f883e','jf','active','2018-11-27 15:00:24','2018-11-27 15:00:24');

/*!40000 ALTER TABLE `master_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table post_feeds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_feeds`;

CREATE TABLE `post_feeds` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_text` longtext NOT NULL,
  `post_picture_src` varchar(255) NOT NULL,
  `post_videos_src` varchar(255) NOT NULL,
  `jf_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `post_feeds` WRITE;
/*!40000 ALTER TABLE `post_feeds` DISABLE KEYS */;

INSERT INTO `post_feeds` (`post_id`, `post_text`, `post_picture_src`, `post_videos_src`, `jf_user_id`, `created_at`, `updated_at`)
VALUES
	(4,'test','','',21,'2019-01-11 13:41:09','2019-01-11 06:32:20'),
	(5,'hello world!!!!','','',21,'2019-01-11 06:49:39','2019-01-11 06:49:39');

/*!40000 ALTER TABLE `post_feeds` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table post_feeds_comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_feeds_comment`;

CREATE TABLE `post_feeds_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `seq` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table post_feeds_likes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_feeds_likes`;

CREATE TABLE `post_feeds_likes` (
  `likes_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `jf_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`likes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table resume_limit
# ------------------------------------------------------------

DROP TABLE IF EXISTS `resume_limit`;

CREATE TABLE `resume_limit` (
  `resume_limit_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `limit_group_id` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` varchar(30) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  PRIMARY KEY (`resume_limit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `resume_limit` WRITE;
/*!40000 ALTER TABLE `resume_limit` DISABLE KEYS */;

INSERT INTO `resume_limit` (`resume_limit_id`, `company_id`, `limit_group_id`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'active','2018-11-28 23:54:24','2018-11-28 23:54:24'),
	(2,1,2,'inactive','2018-11-28 23:54:56','2018-11-28 23:54:56');

/*!40000 ALTER TABLE `resume_limit` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skill_job_finder
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skill_job_finder`;

CREATE TABLE `skill_job_finder` (
  `skill_job_finder_id` int(11) NOT NULL AUTO_INCREMENT,
  `jf_user_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`skill_job_finder_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `skill_job_finder` WRITE;
/*!40000 ALTER TABLE `skill_job_finder` DISABLE KEYS */;

INSERT INTO `skill_job_finder` (`skill_job_finder_id`, `jf_user_id`, `skill_name`, `updated_at`, `created_at`)
VALUES
	(4,21,'Laravel','2018-11-27 15:05:04','2018-11-27 15:05:04'),
	(5,21,'NodeJS','2018-11-27 15:05:04','2018-11-27 15:05:04');

/*!40000 ALTER TABLE `skill_job_finder` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skill_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skill_list`;

CREATE TABLE `skill_list` (
  `skill_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `jf_user_id` varchar(255) NOT NULL,
  `skill_id` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`skill_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table skill_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skill_type`;

CREATE TABLE `skill_type` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_type` varchar(255) NOT NULL,
  `skill_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`skill_id`),
  UNIQUE KEY `SkillID` (`skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `skill_type` WRITE;
/*!40000 ALTER TABLE `skill_type` DISABLE KEYS */;

INSERT INTO `skill_type` (`skill_id`, `skill_type`, `skill_description`, `created_at`, `updated_at`)
VALUES
	(1,'Cobol','Programming Language',NULL,NULL),
	(2,'PHP','Programming Language',NULL,NULL);

/*!40000 ALTER TABLE `skill_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `user_menu_id` varchar(255) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_menu` WRITE;
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;

INSERT INTO `user_menu` (`user_menu_id`, `group_id`, `menu_id`, `created_at`, `updated_at`)
VALUES
	('UM001','JF','TS001',NULL,NULL),
	('UM002','JF','TS002',NULL,NULL),
	('UM003','JC','TS003',NULL,NULL),
	('UM004','JC','TS004',NULL,NULL),
	('UM005','JC','TS005',NULL,NULL),
	('UM006','JF','TS006',NULL,NULL),
	('UM007','JC','TS007',NULL,NULL);

/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
