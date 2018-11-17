# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.21)
# Database: itrep_jobportal
# Generation Time: 2018-11-17 05:19:45 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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
	(13,1,'testanak3123@gmail.com','Jekardah 1','','','123456','jc','active','2018-10-17 15:31:52','2018-10-16 14:47:33'),
	(14,3,'orgil@yahoo.com','perusahaan anak anak','Bojong Kenyot','perubahan','12312321321','jc','active','','');

/*!40000 ALTER TABLE `job_creator` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table job_finder
# ------------------------------------------------------------

DROP TABLE IF EXISTS `job_finder`;

CREATE TABLE `job_finder` (
  `finder_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `province_id` varchar(3) NOT NULL,
  `last_position` varchar(50) NOT NULL,
  `last_level` varchar(50) NOT NULL,
  `last_work_history` text NOT NULL,
  `last_work_category` text NOT NULL,
  `cv_file_name` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `language` varchar(50) NOT NULL,
  `last_salary` varchar(255) NOT NULL,
  `group_id` varchar(5) NOT NULL,
  `total_rating` varchar(50) NOT NULL DEFAULT '',
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `profile_pict` varchar(255) NOT NULL,
  `updated_at` varchar(30) NOT NULL,
  `created_at` varchar(30) NOT NULL,
  PRIMARY KEY (`finder_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `job_finder` WRITE;
/*!40000 ALTER TABLE `job_finder` DISABLE KEYS */;

INSERT INTO `job_finder` (`finder_id`, `email_address`, `full_name`, `address`, `phone`, `gender`, `birth_date`, `province_id`, `last_position`, `last_level`, `last_work_history`, `last_work_category`, `cv_file_name`, `university`, `language`, `last_salary`, `group_id`, `total_rating`, `status`, `profile_pict`, `updated_at`, `created_at`)
VALUES
	(6,'123@gmail.com','users123','bambu betung','123456','Female','2018-11-07','3','Tekjon','Senior','Coba Coba','2','storage/app/resume/tqo5REVbsxEfCNQJUfOwTCtB9ZlJD9jxSUOcGhwN.docx','Binus','English','12300000','jf','0','active','storage/app/image/x5GiPqimmENumfUnmeH1jnqNy7TwnrbpxFsWzIZV.jpeg','2018-11-16 13:48:32','2018-09-25 11:16:03'),
	(7,'vincent_gk@yahoo.com','wakakakaa','bambu betung','123456','Male','2007-02-07','1','Tekjon','Senior','Coba cek','2','storage/app/resume/NoujLXnOosJzXzrUaHPwLOJx7ZL6ONM2Qx0pM3gr.docx','Binus','English','12300000','jf','0','active','storage/app/image/fDhz8Ha7ROiQQZ8Y3Fg8UCzOSGPbCIhx9dhrWDL6.jpeg','2018-11-16 11:40:11','2018-09-25 11:24:00');

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
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `tech_type_id` int(11) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

LOCK TABLES `job_finder_experience` WRITE;
/*!40000 ALTER TABLE `job_finder_experience` DISABLE KEYS */;

INSERT INTO `job_finder_experience` (`detail_id`, `finder_id`, `company_name`, `period_from`, `period_to`, `job_title`, `job_description`, `job_position`, `industry_id`, `tech_type_id`, `updated_at`, `created_at`)
VALUES
	(3,6,'Tokped','2015-06-02','2016-06-07','Programmer','Cek Doloe','Junior Doloe',1,2,'2018-11-16 00:13:00','2018-11-15 15:13:52'),
	(4,6,'Shopee','2017-06-06','2018-11-15','Document','Dolo','Senior',2,4,'2018-11-15 15:13:52','2018-11-15 15:13:52'),
	(5,7,'Tokped','2014-02-06','2017-02-08','Programmer','Coba','Junior',1,3,'2018-11-16 11:40:12','2018-11-16 11:40:12'),
	(6,7,'Shopee','2017-02-07','2018-11-16','Documenter','Cek dolo','Senior',2,2,'2018-11-16 11:40:12','2018-11-16 11:40:12'),
	(7,6,'Gojek','2018-07-12','2019-02-05','Programmer','Kesimpen','woi',1,1,'2018-11-16 13:15:32','2018-11-16 13:15:32'),
	(8,6,'Jd','2018-11-20','2018-11-29','saya','Wi9','Woi',2,2,'2018-11-16 13:15:32','2018-11-16 13:15:32'),
	(9,6,'Astra','2020-02-04','2020-02-04','kayak','woi','nikah',1,3,'2018-11-16 13:48:32','2018-11-16 13:48:32'),
	(10,6,'asda','2018-11-15','2018-07-19','mau nikah','gmanajor','nikah',2,2,'2018-11-16 13:48:32','2018-11-16 13:48:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `job_post_list` WRITE;
/*!40000 ALTER TABLE `job_post_list` DISABLE KEYS */;

INSERT INTO `job_post_list` (`job_post_id`, `job_name`, `benefit_details`, `description`, `category_id`, `has_seen_id`, `payment_range_minimum`, `payment_range_maximum`, `experience`, `job_status`, `created_at`, `updated_at`, `jc_user_id`)
VALUES
	(1,'test job 1','asuransi 1','cek job 1','3',0,3500000,7000000,'test job 1',1,'2018-10-07 16:24:05','2018-11-04 18:36:57','1'),
	(2,'Colosseum','Gile lu','Cek dolo','1',0,2500000,7000000,'CobA COBA',1,'2018-11-16 12:06:18','2018-11-16 12:06:18','1'),
	(3,'Kampret','Lupa ye','Woi','1',0,2500000,7000000,'Province',1,'2018-11-16 13:31:54','2018-11-16 13:31:54','14');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `job_post_search` WRITE;
/*!40000 ALTER TABLE `job_post_search` DISABLE KEYS */;

INSERT INTO `job_post_search` (`job_post_match_id`, `job_post_id`, `jf_user_id`, `status_id`, `created_at`, `updated_at`)
VALUES
	(4,1,'6',1,'2018-11-04 11:49:29','2018-11-04 11:49:29'),
	(5,1,'7',1,'2018-11-04 18:39:13','2018-11-04 18:39:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `master_customer` WRITE;
/*!40000 ALTER TABLE `master_customer` DISABLE KEYS */;

INSERT INTO `master_customer` (`company_id`, `email_address`, `company_name`, `phone`, `authorized_person_name`, `logo`, `province_id`, `address`, `total_employee`, `apply_process_time`, `industry_id`, `website`, `working_hours`, `benefit_details`, `language`, `summary`, `status_id`, `updated_at`, `created_at`)
VALUES
	(1,'123@gmail.com','Jekardah','123456','','','','','','','','','','','','cekidot',9,'2018-09-26 15:58:28','2018-09-26 15:58:28'),
	(2,'testvacan@yahoo.com','Jekardah','123456','','','','','','','','','','','','cekidot',9,'2018-09-26 15:59:34','2018-09-26 15:59:34'),
	(3,'perusahaan1@yahoo.com','Coba Cobas','123456','Dasar Biadab','D:\\xampp\\tmp\\php2B38.tmp','8','Jakartas','123','12','2','www.123.com','12','asuransi','English','Perusahaan bergerak di bidang jasas',9,'2018-11-16 13:34:40','2018-11-04 16:59:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

LOCK TABLES `master_user` WRITE;
/*!40000 ALTER TABLE `master_user` DISABLE KEYS */;

INSERT INTO `master_user` (`user_id`, `user_email_address`, `username`, `password`, `group_id`, `status_id`, `created_at`, `updated_at`)
VALUES
	(1,'testvacan@yahoo.com','testvacan@yahoo.com','e10adc3949ba59abbe56e057f20f883e','jc','active','2018-09-25 11:25:48','2018-09-25 11:25:48'),
	(6,'123@gmail.com','123@gmail.com','e10adc3949ba59abbe56e057f20f883e','jf','active','2018-09-25 11:16:02','2018-11-04 11:17:28'),
	(7,'vincent_gk@yahoo.com','vincent_gk@yahoo.com','e10adc3949ba59abbe56e057f20f883e','jf','active','2018-09-25 11:24:00','2018-09-25 11:24:00'),
	(13,'testanak3123@gmail.com','anak buah 1','e10adc3949ba59abbe56e057f20f883e','jc','active','2018-10-16 14:47:33','2018-10-17 15:31:52'),
	(14,'orgil@yahoo.com','Orang Gila','e10adc3949ba59abbe56e057f20f883e','jc','active','','');

/*!40000 ALTER TABLE `master_user` ENABLE KEYS */;
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
