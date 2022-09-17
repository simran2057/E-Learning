-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2022 at 12:36 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin@username', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `asg_files`
--

CREATE TABLE `asg_files` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `assign_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `filelink` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asg_files`
--

INSERT INTO `asg_files` (`id`, `userid`, `assign_id`, `name`, `filelink`, `ext`, `uploaded_by`, `uploaded_at`) VALUES
(4, 7, 2, 'test', 'plans1663421531.png', 'png', 'Narvasha Adhikari', '2022-09-17 13:32:11'),
(5, 7, 1, 'test', 'profile1663421910.png', 'png', 'Narvasha Adhikari', '2022-09-17 13:38:30'),
(6, 7, 3, 'test', 'screenshotfrom2022-06-2313-52-001663428940.png', 'png', 'Narvasha Adhikari', '2022-09-17 15:35:40'),
(7, 4, 2, 'Grammer', 'screenshotfrom2022-06-2318-35-181663429008.png', 'png', 'Astha Shrestha', '2022-09-17 15:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `due_date` varchar(200) NOT NULL,
  `marks` varchar(100) NOT NULL,
  `uploaded_by` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `title`, `subject`, `info`, `due_date`, `marks`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(7, 'problems', 'Mathematics II', 'complete all the problems', '2022-09-17', '100', 'Kiran Sapkota', '2022-09-15 16:35:16', '2022-09-15 16:35:16'),
(8, 'test', 'Mathematics', 'test', '2022-09-21', '50', 'Kiran Sapkota', '2022-09-15 16:43:41', '2022-09-15 16:43:41'),
(9, 'Grammer', 'English II', 'Draw the following.', '2022-09-17', '20', 'Ram Sharma', '2022-09-15 17:01:17', '2022-09-15 17:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `assigns`
--

CREATE TABLE `assigns` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `marks` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `filelink` varchar(100) NOT NULL,
  `ext` varchar(50) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigns`
--

INSERT INTO `assigns` (`id`, `title`, `subject`, `info`, `due_date`, `marks`, `name`, `filelink`, `ext`, `uploaded_by`, `created_at`) VALUES
(1, 'test', 'Programming', 'Code all the programs', '2022-09-18', '100', 'test', 'plans1663305304.png', 'png', 'Ramesh Thapa', '2022-09-16 05:15:04'),
(2, 'Grammer', 'English II', 'Complete all the problems', '2022-09-21', '100', 'English', 'datasource1663305623.png', 'png', 'Ram Sharma', '2022-09-16 05:20:23'),
(3, 'test', 'English II', 'Code all the programs', '2022-09-21', '50', 'test', 'screenshotfrom2022-06-1219-53-061663428908.png', 'png', 'Ram Sharma', '2022-09-17 15:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `assign_file`
--

CREATE TABLE `assign_file` (
  `uploaded_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_file`
--

INSERT INTO `assign_file` (`uploaded_by`) VALUES
('Kiran Sapkota'),
('Ram Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Simran Shilpakar', 'simran123@yahoo.com', '9846023853', 'hello', '2022-06-23 13:04:45', '2022-06-23 13:04:45'),
(2, 'Astha Shrestha', 'astha@gmail.com', '9846980879', 'Hi', '2022-06-23 13:07:33', '2022-06-23 13:07:33'),
(3, 'Astha Shrestha', 'astha@gmail.com', '9846980879', 'Hi', '2022-06-23 13:09:21', '2022-06-23 13:09:21'),
(4, 'Astha Shrestha', 'astha@gmail.com', '9846980879', 'Hi', '2022-06-23 13:09:37', '2022-06-23 13:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) NOT NULL,
  `cou_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_created`) VALUES
(25, 'BSHRM', '2019-11-27 09:26:08'),
(26, 'BSIT', '2019-11-25 13:22:42'),
(65, 'BSCRIM', '2019-12-02 09:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `examinee_tbl`
--

CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL,
  `exmne_fullname` varchar(1000) NOT NULL,
  `exmne_course` varchar(1000) NOT NULL,
  `exmne_gender` varchar(1000) NOT NULL,
  `exmne_birthdate` varchar(1000) NOT NULL,
  `exmne_year_level` varchar(1000) NOT NULL,
  `exmne_email` varchar(1000) NOT NULL,
  `exmne_password` varchar(1000) NOT NULL,
  `exmne_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinee_tbl`
--

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_fullname`, `exmne_course`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(4, 'Rogz Nunezsss', '26', 'male', '2019-11-15', 'third year', 'rogz.nunez2013@gmail.com', 'rogz', 'active'),
(5, 'Jane Rivera', '25', 'female', '2019-11-14', 'second year', 'jane@gmail.com', 'jane', 'active'),
(6, 'Glenn Duerme', '26', 'female', '2019-12-24', 'third year', 'glenn@gmail.com', 'glenn', 'active'),
(7, 'Maria Duerme', '26', 'female', '2018-11-25', 'second year', 'maria@gmail.com', 'maria', 'active'),
(8, 'Dave Limasac', '26', 'female', '2019-12-21', 'second year', 'dave@gmail.com', 'dave', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(295, 4, 12, 25, 'Diode, inverted, pointer', 'old', '2019-12-07 02:52:14'),
(296, 4, 12, 16, 'Data Block', 'old', '2019-12-07 02:52:14'),
(297, 6, 12, 18, 'Programmable Logic Controller', 'old', '2019-12-05 12:59:47'),
(298, 6, 12, 9, '1850s', 'old', '2019-12-05 12:59:47'),
(299, 6, 12, 24, '1976', 'old', '2019-12-05 12:59:47'),
(300, 6, 12, 14, 'Operating System', 'old', '2019-12-05 12:59:47'),
(301, 6, 12, 19, 'WAN (Wide Area Network)', 'old', '2019-12-05 12:59:47'),
(302, 6, 11, 28, 'fds', 'new', '2019-12-05 12:04:28'),
(303, 6, 11, 29, 'sd', 'new', '2019-12-05 12:04:28'),
(304, 6, 12, 15, 'David Filo & Jerry Yang', 'new', '2019-12-05 12:59:47'),
(305, 6, 12, 17, 'System file', 'new', '2019-12-05 12:59:47'),
(306, 6, 12, 10, 'Field', 'new', '2019-12-05 12:59:47'),
(307, 6, 12, 9, '1880s', 'new', '2019-12-05 12:59:47'),
(308, 6, 12, 21, 'Temporary file', 'new', '2019-12-05 12:59:47'),
(309, 4, 11, 28, 'q1', 'new', '2019-12-05 13:30:21'),
(310, 4, 11, 29, 'dfg', 'new', '2019-12-05 13:30:21'),
(311, 4, 12, 16, 'Data Block', 'new', '2019-12-07 02:52:14'),
(312, 4, 12, 20, 'Plancks radiation', 'new', '2019-12-07 02:52:14'),
(313, 4, 12, 10, 'Report', 'new', '2019-12-07 02:52:14'),
(314, 4, 12, 24, '1976', 'new', '2019-12-07 02:52:14'),
(315, 4, 12, 9, '1930s', 'new', '2019-12-07 02:52:14'),
(316, 8, 12, 18, 'Programmable Lift Computer', 'new', '2020-01-05 03:18:35'),
(317, 8, 12, 14, 'Operating System', 'new', '2020-01-05 03:18:35'),
(318, 8, 12, 20, 'Einstein oscillation', 'new', '2020-01-05 03:18:35'),
(319, 8, 12, 21, 'Temporary file', 'new', '2020-01-05 03:18:35'),
(320, 8, 12, 25, 'Diode, inverted, pointer', 'new', '2020-01-05 03:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_attempt`
--

INSERT INTO `exam_attempt` (`examat_id`, `exmne_id`, `exam_id`, `examat_status`) VALUES
(51, 6, 12, 'used'),
(52, 4, 11, 'used'),
(53, 4, 12, 'used'),
(54, 8, 12, 'used');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tbl`
--

CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(1000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`) VALUES
(9, 12, 'In which decade was the American Institute of Electrical Engineers (AIEE) founded?', '1850s', '1880s', '1930s', '1950s', '1880s', 'active'),
(10, 12, 'What is part of a database that holds only one type of information?', 'Report', 'Field', 'Record', 'File', 'Field', 'active'),
(14, 12, 'OS computer abbreviation usually means ?', 'Order of Significance', 'Open Software', 'Operating System', 'Optical Sensor', 'Operating System', 'active'),
(15, 12, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 'David Filo & Jerry Yang', 'active'),
(16, 12, 'DB computer abbreviation usually means ?', 'Database', 'Double Byte', 'Data Block', 'Driver Boot', 'Database', 'active'),
(17, 12, '.INI extension refers usually to what kind of file?', 'Image file', 'System file', 'Hypertext related file', 'Image Color Matching Profile file', 'System file', 'active'),
(18, 12, 'What does the term PLC stand for?', 'Programmable Lift Computer', 'Program List Control', 'Programmable Logic Controller', 'Piezo Lamp Connector', 'Programmable Logic Controller', 'active'),
(19, 12, 'What do we call a network whose elements may be separated by some distance? It usually involves two or more small networks and dedicated high-speed telephone lines.', 'URL (Universal Resource Locator)', 'LAN (Local Area Network)', 'WAN (Wide Area Network)', 'World Wide Web', 'WAN (Wide Area Network)', 'active'),
(20, 12, 'After the first photons of light are produced, which process is responsible for amplification of the light?', 'Blackbody radiation', 'Stimulated emission', 'Plancks radiation', 'Einstein oscillation', 'Stimulated emission', 'active'),
(21, 12, '.TMP extension refers usually to what kind of file?', 'Compressed Archive file', 'Image file', 'Temporary file', 'Audio file', 'Temporary file', 'active'),
(22, 12, 'What do we call a collection of two or more computers that are located within a limited distance of each other and that are connected to each other directly or indirectly?', 'Inernet', 'Interanet', 'Local Area Network', 'Wide Area Network', 'Local Area Network', 'active'),
(24, 12, '	 In what year was the \"@\" chosen for its use in e-mail addresses?', '1976', '1972', '1980', '1984', '1972', 'active'),
(25, 12, 'What are three types of lasers?', 'Gas, metal vapor, rock', 'Pointer, diode, CD', 'Diode, inverted, pointer', 'Gas, solid state, diode', 'Gas, solid state, diode', 'active'),
(27, 15, 'asdasd', 'dsf', 'sd', 'yui', 'sdf', 'yui', 'active'),
(28, 11, 'Question 1', 'q1', 'asd', 'fds', 'ytu', 'q1', 'active'),
(29, 11, 'Question 2', 'asd', 'sd', 'q2', 'dfg', 'q2', 'active'),
(30, 11, 'Question 3', 'sd', 'q3', 'asd', 'fgh', 'q3', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`ex_id`, `cou_id`, `ex_title`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`) VALUES
(11, 26, 'Duerms', '1', 2, 'qwe', '2019-12-05 12:03:21'),
(12, 26, 'Another Exam', '1', 5, 'Mabilisang Exam', '2019-12-04 15:19:18'),
(13, 26, 'Exam Again', '5', 0, 'again and again\r\n', '2019-11-30 08:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(4, 6, 'Glenn Duerme', 'Gwapa kay Miss Pam', 'December 05, 2019'),
(5, 6, 'Anonymous', 'Lageh, idol na nako!', 'December 05, 2019'),
(6, 4, 'Rogz Nunezsss', 'Yes', 'December 08, 2019'),
(7, 4, '', '', 'December 08, 2019'),
(8, 4, '', '', 'December 08, 2019'),
(9, 8, 'Anonymous', 'dfsdf', 'January 05, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filelink` varchar(200) NOT NULL,
  `ext` varchar(50) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `filelink`, `ext`, `status`, `created_at`, `updated_at`) VALUES
(4, 'test', 'flow1655973414.png', 'png', NULL, '2022-06-23 08:36:54', '2022-06-23 08:36:54'),
(5, 'About us', 'plans1655977688.png', 'png', NULL, '2022-06-23 09:48:08', '2022-06-23 09:48:08'),
(6, 'Profile', 'profile1655978145.png', 'png', NULL, '2022-06-23 09:55:45', '2022-06-23 09:55:45'),
(7, 'English', 'statistics121662726179.pdf', 'pdf', NULL, '2022-09-09 12:22:59', '2022-09-09 12:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(2, 7, 4, 'hello'),
(4, 5, 4, 'Good morning sir'),
(5, 4, 5, 'good morning'),
(6, 4, 5, 'How are you?'),
(7, 4, 4, 'Hello'),
(8, 7, 1, '<script>alert(\'test\')</script>'),
(9, 1, 7, 'hello'),
(10, 7, 1, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`, `created_at`, `updated_at`) VALUES
(3, 'Seminar Hall Program', 'Program', '2022-09-18', '2022-09-17 15:29:19', '2022-09-17 15:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `notif_msg` varchar(200) NOT NULL,
  `notif_time` datetime DEFAULT NULL,
  `notif_repeat` int(11) NOT NULL DEFAULT '1',
  `notif_loop` int(11) NOT NULL DEFAULT '1',
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(200) NOT NULL,
  `key` varchar(200) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f647458eb148baaf', '2022-09-15 11:11:09'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f647456507d62c16', '2022-09-15 11:18:45'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f6474501fa591c3d', '2022-09-15 14:59:45'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f64745950d757ebb', '2022-09-15 15:00:21'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f64745de2e6ad7e5', '2022-09-15 15:00:37'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f647459638f0f6f4', '2022-09-15 15:00:41'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f64745d62e30b5a4', '2022-09-15 15:05:29'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f64745d09b197a00', '2022-09-15 15:09:58'),
('sara@lagrandee.com', '768e78024aa8fdb9b8fe87be86f647453f30396d3b', '2022-09-15 15:18:37'),
('simran123@yahoo.com', '768e78024aa8fdb9b8fe87be86f647456d3b6e9f1e', '2022-09-15 17:31:01'),
('narvasha@lagrandee.com', '768e78024aa8fdb9b8fe87be86f64745aee6e0cf0b', '2022-09-18 23:21:54'),
('ramt@lagrandee.com', '768e78024aa8fdb9b8fe87be86f647453c3acf911f', '2022-09-18 23:40:29'),
('astha@lagrandee.com', '768e78024aa8fdb9b8fe87be86f64745b7f3445cff', '2022-09-18 23:41:06'),
('ramt@lagrandee.com', '768e78024aa8fdb9b8fe87be86f647454e611b5769', '2022-09-18 23:43:56'),
('narvasha@lagrandee.com', '768e78024aa8fdb9b8fe87be86f647451583f0b097', '2022-09-18 23:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `site_config`
--

CREATE TABLE `site_config` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `site_key` varchar(200) NOT NULL,
  `site_value` varchar(200) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_config`
--

INSERT INTO `site_config` (`id`, `name`, `site_key`, `site_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aboutus', 'principlename', 'Prof.Ram Kaji Shrestha', 'Progress', '2022-06-22 14:05:38', '2022-06-22 14:05:38'),
(2, 'homepage', 'heading2', 'newest level.', NULL, '2022-06-23 14:14:30', '2022-06-23 14:14:30'),
(3, 'homepage', 'heading1', 'Education at it', NULL, '2022-06-23 14:31:35', '2022-06-23 14:31:35'),
(4, 'navbar', 'logo', 'E-Learning', NULL, '2022-06-23 14:33:26', '2022-06-23 14:33:26'),
(5, 'aboutus', 'tittle', 'get to know about us !', 'New', '2022-06-23 14:36:26', '2022-06-23 14:36:26'),
(6, 'aboutus', 'content', 'In this website we provide you with all the features required for the institutions including the teachers as well as students also.It is the easy way for the stakeholders to learn from here.', 'New', '2022-06-23 14:41:31', '2022-06-23 14:41:31'),
(7, 'contactus', 'location', 'Nadipur , Pokhara', NULL, '2022-06-23 15:29:42', '2022-06-23 15:29:42'),
(8, 'contact', 'phone', '9866011435', NULL, '2022-06-23 15:30:15', '2022-06-23 15:30:15'),
(9, 'contactus', 'email', 'simranshilpakar@gmail.com', NULL, '2022-06-23 15:30:38', '2022-06-23 15:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `phone`, `semester`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Astha Shrestha', 'astha@lagrandee.com', 'b1eb4d0b383339a26c16c5a9253c1188', '9846980845', '1', 'Active now', '2022-09-14 08:20:29', '2022-09-14 08:20:29'),
(7, 'Narvasha Adhikari', 'narvasha@lagrandee.com', '56c495cfa0cfefea8466e04258681d69', '9819164565', '1', 'Active now', '2022-09-15 05:58:26', '2022-09-15 05:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `teacher` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `semester`, `name`, `teacher`, `created_at`, `updated_at`) VALUES
(1, '1', 'English', 'Ram Sharma', '2022-09-05 08:33:05', '2022-09-05 08:33:05'),
(2, '1', 'Mathematics', 'Kiran Sapkota', '2022-09-05 08:38:05', '2022-09-05 08:38:05'),
(3, '1', 'Digital Logic System', 'Homnath Thapa', '2022-09-05 08:43:09', '2022-09-05 08:43:09'),
(4, '1', 'Computer Fundamental', 'Deepak Thapa', '2022-09-05 08:43:40', '2022-09-05 08:43:40'),
(5, '1', 'Programming', 'Ramesh thapa', '2022-09-05 08:44:06', '2022-09-05 08:44:06'),
(6, '2', 'Mathematics II', 'Kiran Sapkota', '2022-09-08 08:50:58', '2022-09-08 08:50:58'),
(7, '2', 'Programming', 'Ramesh thapa', '2022-09-08 08:51:58', '2022-09-08 08:51:58'),
(8, '2', 'English II', 'Ram Sharma', '2022-09-08 08:52:40', '2022-09-08 08:52:40'),
(9, '2', 'Financial Accounting I', 'Suresh Parajuli', '2022-09-08 09:37:45', '2022-09-08 09:37:45'),
(10, '2', 'Project I', 'Ramesh Chalise', '2022-09-08 09:39:21', '2022-09-08 09:39:21'),
(11, '3', 'Fee', 'Suresh Parajuli', '2022-09-17 18:35:09', '2022-09-17 18:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub_file`
--

CREATE TABLE `sub_file` (
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `filelink` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `uploaded_by` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_file`
--

INSERT INTO `sub_file` (`id`, `sub_id`, `name`, `filelink`, `ext`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(2, 1, 'chapter-1', 'profile1663220004.png', 'png', 'Astha Shrestha', '2022-09-15 05:33:24', '2022-09-15 05:33:24'),
(3, 2, 'Unit-10', 'profile1663220609.png', 'png', 'Astha Shrestha', '2022-09-15 05:43:29', '2022-09-15 05:43:29'),
(4, 1, 'Grammer', 'screenshotfrom2022-05-2420-07-121663221582.png', 'png', 'Narvasha Adhikari', '2022-09-15 05:59:42', '2022-09-15 05:59:42'),
(5, 8, 'Unit-II', 'statistics121663231065.pdf', 'pdf', 'Ram Sharma', '2022-09-15 08:37:45', '2022-09-15 08:37:45'),
(6, 4, 'Hardware', 'datasource1663409452.png', 'png', 'Astha Shrestha', '2022-09-17 10:10:52', '2022-09-17 10:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `name`, `email`, `password`, `phone`, `subject`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'Ram Sharma', 'ramt@lagrandee.com', '6a557ed1005dddd940595b8fc6ed47b2', '9846023853', '', '1', '2022-09-08 06:54:31', '2022-09-08 06:54:31'),
(2, 'Kiran Sapkota', 'kirant@lagrandee.com', '50c2472801ba5f5158b71047563521ef', '9845678945', '', '1', '2022-09-08 06:55:35', '2022-09-08 06:55:35'),
(3, 'Homnath Thapa', 'homnatht@lagrandee.com', '32a564f669dc564472eea45ca2c14d90', '984602564', '', '1', '2022-09-08 06:56:24', '2022-09-08 06:56:24'),
(4, 'Deepak Thapa', 'deepakt@lagrandee.com', '3b8f9fa2e58b5e835028f1dafc2de1fa', '9845612345', '', '1', '2022-09-08 06:57:11', '2022-09-08 06:57:11'),
(5, 'Ramesh Thapa', 'ramesht@lagrandee.com', 'b1471adc34c852d9ca3f03f5f47ff496', '9874521365', '', '1', '2022-09-08 06:58:19', '2022-09-08 06:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `password`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Simran Shilpakar', '9b16eb2704cead43ecf04dd665908205', 'simran123@yahoo.com', '9846023835', 'New', '2022-08-03 06:00:41', '2022-08-03 06:00:41'),
(2, 'student', 'Sara Shrestha', '312dc6ec7c900fb9017bf43c6b1f81bb', 'sara@lagrandee.com', '9814132561', NULL, '2022-08-03 06:08:04', '2022-08-03 06:08:04'),
(3, 'Teacher', 'Khem Koirala', 'e3c155642a810312aa8e98f4c0544188', 'khem@lagrandee.com', '9846023561', 'New', '2022-08-03 06:10:21', '2022-08-03 06:10:21'),
(4, NULL, 'sulav shilpakar', 'b8b3d68d830e1e7ca664866a11fbb1b6', 'sulavshilpakar@hotmail.com', '9846980879', NULL, '2022-09-05 05:11:58', '2022-09-05 05:11:58'),
(5, NULL, 'Ashma Rana', '23fd28d3757f05737818ea939a0b29d6', 'ashma123@gmail.com', '9846023853', NULL, '2022-09-14 05:37:02', '2022-09-14 05:37:02'),
(6, 'admin', 'Samjhana Poudel', '08e59e46ce75ed0ab0c85e16f98a28db', 'samjhana123@yahoo.com', '9846023845', NULL, '2022-09-17 15:23:20', '2022-09-17 15:23:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `asg_files`
--
ALTER TABLE `asg_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigns`
--
ALTER TABLE `assigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  ADD PRIMARY KEY (`exmne_id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  ADD PRIMARY KEY (`eqt_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_config`
--
ALTER TABLE `site_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_file`
--
ALTER TABLE `sub_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `asg_files`
--
ALTER TABLE `asg_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `assigns`
--
ALTER TABLE `assigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;
--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_config`
--
ALTER TABLE `site_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sub_file`
--
ALTER TABLE `sub_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
