-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2019 at 12:13 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `Email`, `Password`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'BloodDonation100admin@gmail.com', '123', 'BloodDonation100', '2019-04-16 22:08:35', '2019-06-21 23:43:52'),
(2, 'BloodDonation200admin@gmail.com', '123', 'BloodDonation200', '2019-04-17 21:38:21', '2019-06-21 23:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_admin`
--

DROP TABLE IF EXISTS `hospital_admin`;
CREATE TABLE IF NOT EXISTS `hospital_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `block` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `administrator_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `administrator_id` (`administrator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_admin`
--

INSERT INTO `hospital_admin` (`id`, `hospital_name`, `user_name`, `email`, `password`, `address`, `city`, `block`, `created_at`, `updated_at`, `administrator_id`) VALUES
(12, 'بنك دم الشاطبي', 'shatby', 'shatby@gmail.com', '123', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'Alexandria', 1, '2019-04-22 22:15:20', '2019-06-22 19:53:56', 1),
(13, 'برج العرب	', 'borgelarab', 'borgelarab@gmail.com', '123', 'برج العرب الجديدة امام قسم الشرطة', 'Alexandria', 0, '2019-04-22 22:16:05', NULL, 1),
(14, 'البدرشين المركزى', 'badrsheen', 'badrsheen@gmail.com', '123', 'البدرشين -ش مصر أسيوط السريع', 'Giza', 0, '2019-04-22 22:17:13', NULL, 1),
(15, '	الواحات البحرية', 'wahat', 'wahat@gmail.com', '123', 'الباويطي الوحات البحرية', 'Giza', 0, '2019-04-22 22:17:49', NULL, 1),
(16, 'طلخا المركزي', 'talkha', 'talkha@gmail.com', '123', 'طلخا- ش البحر', 'Daqahleya', 0, '2019-04-22 22:18:43', NULL, 1),
(17, 'سوهاج العام	', 'sohagelaam', 'sohagelaam@gmail.com', '123', 'سوهاج ش النقراشى', 'Sohag', 0, '2019-04-22 22:19:24', NULL, 1),
(18, 'القنطره غرب', 'qantara', 'qantra@gmail.com', '123', 'مدينة القنطرة غرب بجوار محطة المياة', 'Ismailia', 0, '2019-04-22 22:20:09', NULL, 1),
(19, 'مستشفي الميري', 'mery', 'mery@hotmail.com', '123', 'مجمع الطبي', 'Alexandria', 0, '2019-04-26 12:15:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `archived` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `name`, `email`, `subject`, `msg`, `created_at`, `archived`) VALUES
(12, 'Ahmed elbana', 'ahmedelbana@gmail.com', 'A great website', 'The website is great and i like the unique idea, just move on.', '2019-06-21 23:30:28', b'1'),
(13, 'Ahmed Waleed', 'ahmedwaleed@gmail.com', 'استفسار', 'عندي استفسار بخصوص كيف تتم عملية التبرع بالدم', '2019-06-21 23:31:21', b'0'),
(14, 'Nadeed Mohamed', 'nadeenmohamed22@gmail.com', 'Problem with donating', 'I have a problem with donating blood ', '2019-06-21 23:32:52', b'1'),
(15, 'Omar Tawfik', 'omart97@gmail.com', 'Donation email period', 'I need to change the period of sending the email from 100 days to 60 days', '2019-06-21 23:34:09', b'0'),
(16, 'MIS 2019', 'mis2019@gmail.com', 'Inquiry about something', 'My message here', '2019-06-22 19:51:36', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_admin_id` int(11) NOT NULL,
  `blood_bank_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `blood_type` varchar(11) NOT NULL,
  `donation_location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT '0',
  `visible` varchar(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hospital_admin_id` (`hospital_admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `hospital_admin_id`, `blood_bank_name`, `address`, `blood_type`, `donation_location`, `description`, `progress`, `visible`, `created_at`, `updated_at`) VALUES
(22, 12, 'بنك دم الشاطبي', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'A+', 'Alexandria', 'مطلوب متبرعين بالدم لطفل مصاب اصابات خطيرة ', 100, '0', '2019-04-22 22:29:08', '2019-06-21 22:51:50'),
(23, 13, 'برج العرب	', 'برج العرب الجديدة امام قسم الشرطة', 'B+', 'Alexandria', 'بنك الدم محتاجين متبريعن ضروري لطفل مصاب', 85, '0', '2019-04-25 17:06:26', '2019-04-25 17:12:47'),
(24, 13, 'برج العرب	', 'برج العرب الجديدة امام قسم الشرطة', 'A-', 'Alexandria', 'طفل مصاب و محتاج عملية و 10 اكياس دم جمعنا 5 فاضل 5', 50, '0', '2019-04-25 17:08:10', '2019-04-25 17:11:26'),
(25, 18, 'القنطره غرب', 'مدينة القنطرة غرب بجوار محطة المياة', 'AB-', 'Ismailia', 'مطلوب متبرعين بالدم لحالة طارئة', 10, '0', '2019-04-25 17:16:05', NULL),
(27, 12, 'بنك دم الشاطبي', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'B+', 'Alexandria', 'حالة طارئة مطلوب تبرع بالدم', 100, '0', '2019-04-25 17:19:20', '2019-06-17 15:16:47'),
(28, 12, 'بنك دم الشاطبي', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'B+', 'Alexandria', '	طفل مصاب بالسرطان مطلوب متبرعين بالدم', 44, '0', '2019-04-25 17:33:55', '2019-06-21 22:54:05'),
(31, 14, 'البدرشين المركزى', 'البدرشين -ش مصر أسيوط السريع', 'O-', 'Giza', 'We need more O-negative donors to help maintain a strong national inventory of blood and blood products to meet patient needs over the upcoming long weekend', 21, '0', '2019-04-25 21:59:05', '2019-06-21 22:54:32'),
(32, 14, 'البدرشين المركزى', 'البدرشين -ش مصر أسيوط السريع', 'A+', 'Giza', 'Urgent cases need blood donation', 80, '0', '2019-04-25 21:59:27', '2019-06-19 08:32:21'),
(33, 14, 'البدرشين المركزى', 'البدرشين -ش مصر أسيوط السريع', 'A+', 'Giza', 'مريضه بمستشفى هيئه قناه السويس بالاسماعيليه تحتاج الى نقل دم لاجراء عمليه فى القلب', 20, '0', '2019-04-25 21:59:54', '2019-06-21 22:49:59'),
(34, 15, '	الواحات البحرية', 'الباويطي الوحات البحرية', 'O-', 'Giza', 'حالة في العمليات تحتاج متبرعين بالدم', 92, '0', '2019-04-25 22:00:09', '2019-06-21 22:59:02'),
(36, 15, '	الواحات البحرية', 'الباويطي الوحات البحرية', 'A+', 'Giza', 'راجل جاي من شمال سيناء للاسماعيلية مدرس في جامعة العريش عمل حادثة وهيدخل عمليات ', 90, '0', '2019-04-25 22:06:03', '2019-06-21 22:49:37'),
(43, 12, 'بنك دم الشاطبي', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'B+', 'Alexandria', 'طفل مصاب بالسرطان مطلوب متبرعين بالدم', 85, '0', '2019-06-16 11:51:34', '2019-06-21 22:42:50'),
(46, 12, 'بنك دم الشاطبي', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'A+', 'Alexandria', 'مطلوب متبرعين بالدم لحالة قلب مفتوح فصيلة دم \r\nA+', 100, '0', '2019-06-19 10:18:31', '2019-06-21 22:54:53'),
(49, 12, 'بنك دم الشاطبي', 'كورنيش الشاطبي بجوار مكتبة الاسكندرية', 'A+', 'Alexandria', 'مطلوب علي وجه السرعة 3 اكياس دم \r\nفصيلة \r\nA موجب \r\nالحالة في العمليا', 90, '0', '2019-06-21 11:48:44', '2019-06-21 22:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

DROP TABLE IF EXISTS `registered_user`;
CREATE TABLE IF NOT EXISTS `registered_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `blood_type` varchar(20) NOT NULL,
  `notification_period` varchar(255) NOT NULL,
  `last_notification` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`ID`, `email`, `location`, `blood_type`, `notification_period`, `last_notification`, `created_at`, `status`) VALUES
(33, 'mohamedibrahim200@gmail.com', 'Qalyobeya', 'B+', '100', NULL, '2019-06-21 23:24:25', b'1'),
(34, 'sayedmostafa98@gmail.com', 'Alexandria', 'A+', '50', NULL, '2019-06-21 23:24:52', b'1'),
(35, 'rewan90@hotmail.com', 'Cairo', 'O-', '100', NULL, '2019-06-21 23:26:05', b'0'),
(36, 'ibrahimsameer@gmail.com', 'Alexandria', 'B-', '100', NULL, '2019-06-21 23:26:43', b'1'),
(37, 'yassermohamed@gmail.com', 'Alexandria', 'B+', '120', NULL, '2019-06-22 18:19:16', b'1'),
(43, 'MIS2019@gmail.com', 'Alexandria', 'B+', '20', NULL, '2019-06-22 19:14:04', b'1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital_admin`
--
ALTER TABLE `hospital_admin`
  ADD CONSTRAINT `hospital_admin_ibfk_1` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`hospital_admin_id`) REFERENCES `hospital_admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
