-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 06:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expert`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(150) NOT NULL,
  `admin_password` varchar(150) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cassava_varieties`
--

DROP TABLE IF EXISTS `cassava_varieties`;
CREATE TABLE IF NOT EXISTS `cassava_varieties` (
  `cassava_id` int(11) NOT NULL AUTO_INCREMENT,
  `cassava` varchar(150) NOT NULL,
  PRIMARY KEY (`cassava_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cassava_varieties`
--

INSERT INTO `cassava_varieties` (`cassava_id`, `cassava`) VALUES
(1, 'IBA961632 (Farmer’s Pride)'),
(2, 'IBA980581 (Dixon)'),
(3, 'CR36-5 (Ayaya)'),
(4, 'IBA070593 (Sunshine)'),
(5, 'IBA980505 (Fine face)'),
(6, 'TME 419');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `content_image` varchar(150) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`, `content_image`, `poster_id`, `date_created`) VALUES
(5, ' TRANSFER: Harry Kane cost beyond ManUtd\'s Budget', '', '2086369.jpg', 1, '2021-03-31'),
(8, 'Beckham weight in on Messi, Ronaldo debate: Messi a level above Ronaldo in class of his own', '<h2>Definition and Usage</h2>\r\n\r\n<p>The in_array() function searches an array for a specific value.</p>\r\n\r\n<p><strong>Note:</strong>&nbsp;If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.</p>\r\n', '1860351.jpeg', 1, '2021-03-31'),
(9, ' 8 Big firms discuss 11,000 layoffs', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Id&nbsp;nesciunt&nbsp;sed&nbsp;quam.&nbsp;Maiores&nbsp;repudiandae&nbsp;in&nbsp;ducimus&nbsp;officia,&nbsp;ex&nbsp;nobis&nbsp;a&nbsp;veritatis&nbsp;corrupti&nbsp;magnam&nbsp;dolor&nbsp;nihil!&nbsp;Magnam&nbsp;neque&nbsp;facere&nbsp;explicabo&nbsp;officiis!</p>\r\n', '1046122.jpg', 1, '2021-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

DROP TABLE IF EXISTS `crop`;
CREATE TABLE IF NOT EXISTS `crop` (
  `crop_id` int(11) NOT NULL AUTO_INCREMENT,
  `crop` varchar(100) NOT NULL,
  PRIMARY KEY (`crop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`crop_id`, `crop`) VALUES
(1, 'Maize'),
(2, 'Cassava'),
(3, 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

DROP TABLE IF EXISTS `disease`;
CREATE TABLE IF NOT EXISTS `disease` (
  `disease_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) NOT NULL,
  `disease` varchar(255) NOT NULL,
  PRIMARY KEY (`disease_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `image`, `disease`) VALUES
(1, 'cmd.jpg', 'Cassava Mosaic Disease'),
(2, 'tbr_rot.jpg', 'Tuber rot '),
(3, 'brwn_leaf.jpg', 'Brown leaf spot'),
(4, 'blight.jpg', 'Bacterial Blight'),
(5, 'dieback.jpg', '\r\nDieback (withertip)');

-- --------------------------------------------------------

--
-- Table structure for table `expert_questions`
--

DROP TABLE IF EXISTS `expert_questions`;
CREATE TABLE IF NOT EXISTS `expert_questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `disease_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert_questions`
--

INSERT INTO `expert_questions` (`question_id`, `question`, `disease_id`) VALUES
(1, 'Does young leaves have chlorotic speck?', 1),
(2, 'Are the chlorotic speck enlarged and intermixed with green tissue to provide a mosaic pattern?', 1),
(3, 'Do you notice pale discoloration like intensified to yellow colour?', 1),
(4, 'Is there an reduction in leaf area? ', 1),
(5, 'Do you notice leaf distortion and shoe string appearance?', 1),
(6, 'Is the cassava growth affected?', 1),
(7, 'Is the season humid or rainy?', 1),
(8, 'Does your cassava plant look anything like the image below? <img class=\"img-fluid\" src=\"images/disease/cmd.jpg\" alt=\"\">', 1),
(9, '   ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

DROP TABLE IF EXISTS `farmer`;
CREATE TABLE IF NOT EXISTS `farmer` (
  `farmer_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `farm_address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date_created` date NOT NULL,
  `new_user_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`farmer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `firstname`, `lastname`, `farm_address`, `gender`, `phone`, `email`, `password`, `date_created`, `new_user_status`) VALUES
(1, 'sina', 'soneye', '6, ikosi', 'male', '89w389', 'advancoplanet@gmail.com', 'db6a25a3cc9ce469ddedf1e12f07f69b', '2021-02-14', NULL),
(8, 'afeez', 'dosu', 'nigeria', 'Male', '98912891', 'afeez@gmail.com', '631f5438242f3abf1228dc6e78b164ce', '2021-03-10', NULL),
(7, 'Soneye', 'Oluwasina', 'saaad', 'Male', '8487008706', 'advancoplanet@gmail.com', 'richiehortiz', '2021-02-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `disease_id` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `disease_id`) VALUES
(1, 'Is your suitable farming space sandy loam that is well-drained without a fluctuating water table?\r\n', 0),
(2, 'Is the land space prepared using burning method?\r\n', 0),
(3, 'Are you within the month of March to June?\r\n', 0),
(4, 'If the last question is no, Are you within the month of October to December?\r\n', 0),
(5, 'Are you planning to plant during dry season?\r\n', 0),
(6, 'Do you plan to reuse stem cut from last planting season?\r\n', 0),
(7, 'Is your ridges or mounds should be at least 0.75m-1m apart?', 0),
(8, 'Is your stem cutting from plants 8-18months old?', 0),
(9, '   ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

DROP TABLE IF EXISTS `solution`;
CREATE TABLE IF NOT EXISTS `solution` (
  `solution_id` int(11) NOT NULL AUTO_INCREMENT,
  `solution` longtext NOT NULL,
  `disease_id` int(11) NOT NULL,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`solution_id`, `solution`, `disease_id`) VALUES
(1, 'Cassava mosaic disease\r\nA severel mosaic disease was recognized as a serious threat to cassava cultivation in India as early as 1942. The first report on this disease was made by Alagianagalingam and Ramakrishnan (1966)\r\nAfrican cassava mosaic disease reported by Walburg in 1984 occurs in African countries ad West Pacific islands ( Lozano and Booth 1976). There are six different viruses recorded causing mosaic symptoms on cassava.\r\nSymptomatology\r\nThe first symptom appear on young leaves as chlorotic speck. Grandually they enlarge and intermix with green tissue to provide a mosaic pattern The pale discoloration may be intensified to yellow colour depending on the varieties. The leaf area is reduced and in extreme cases leaf distortion and shoe string appearance are observed. Intensity of symptoms varies with season. During humid cool and raining stage. the symptoms eepression reduced. There may be symptom variation in the same plant. In serve case of infection, the growth of the plant is affected which ultimately leads to crop loss\r\nDisease index\r\nThe severity of the disease is assessed by using the following  scale\r\nGrade 1- Only specks < 100 sq.mm\r\nGrade 2.- wide areas of mosaic, no distortion\r\nGrade 3 –Distortion, leaf area reduction 25 %\r\nGrade 4-Distortion, leaf area reduction 25-75%\r\nGrade 5-Distortion leaf area redction >75 %\r\nMaximum intensity of the disease is observed during August –October', 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

DROP TABLE IF EXISTS `survey_answers`;
CREATE TABLE IF NOT EXISTS `survey_answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer_id` int(11) NOT NULL,
  `ans_1` int(11) DEFAULT NULL,
  `ans_2` int(11) DEFAULT NULL,
  `date_answered` datetime NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_answers`
--

INSERT INTO `survey_answers` (`answer_id`, `farmer_id`, `ans_1`, `ans_2`, `date_answered`) VALUES
(1, 1, 1, 1, '2021-03-08 07:30:36'),
(2, 1, 1, 1, '2021-03-08 08:05:40'),
(3, 1, 1, 0, '2021-03-08 09:29:11'),
(4, 1, 0, 0, '2021-03-08 09:30:32'),
(5, 1, 1, 0, '2021-03-08 15:41:04'),
(6, 1, 1, 0, '2021-03-08 15:41:07'),
(7, 1, 1, 0, '2021-03-08 15:41:57'),
(8, 9, 0, 1, '2021-03-10 23:22:55'),
(9, 1, 1, 1, '2021-03-27 14:34:41'),
(10, 1, 1, 1, '2021-03-27 14:45:09'),
(23, 1, 2, 1, '2021-03-28 16:42:06'),
(22, 1, 2, 1, '2021-03-28 16:14:14'),
(21, 1, 2, 1, '2021-03-28 15:57:01'),
(20, 1, 2, 1, '2021-03-28 15:18:54'),
(19, 1, 2, 1, '2021-03-28 14:53:18'),
(18, 1, 2, 4, '2021-03-28 14:15:06'),
(17, 1, 2, 1, '2021-03-28 14:02:34'),
(24, 1, NULL, NULL, '2021-03-28 18:38:04'),
(25, 1, NULL, NULL, '2021-03-28 18:40:08'),
(26, 10, 2, 1, '2021-03-31 19:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `survey_practising_farmer_answers`
--

DROP TABLE IF EXISTS `survey_practising_farmer_answers`;
CREATE TABLE IF NOT EXISTS `survey_practising_farmer_answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer_id` int(11) NOT NULL,
  `ans_1` int(11) DEFAULT NULL,
  `ans_2` int(11) DEFAULT NULL,
  `ans_3` int(11) NOT NULL,
  `date_answered` datetime NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_practising_farmer_answers`
--

INSERT INTO `survey_practising_farmer_answers` (`answer_id`, `farmer_id`, `ans_1`, `ans_2`, `ans_3`, `date_answered`) VALUES
(1, 1, 2, 1, 0, '2021-03-28 15:51:38'),
(2, 1, 2, 1, 0, '2021-03-28 15:57:31'),
(3, 1, 2, 1, 0, '2021-03-28 16:15:47'),
(4, 1, 2, 1, 0, '2021-03-28 16:43:37'),
(5, 1, 2, 1, 0, '2021-03-28 17:18:15'),
(6, 8, 2, 1, 1, '2021-03-31 19:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `survey_solutions`
--

DROP TABLE IF EXISTS `survey_solutions`;
CREATE TABLE IF NOT EXISTS `survey_solutions` (
  `solution_id` int(11) NOT NULL AUTO_INCREMENT,
  `crop_id` int(11) NOT NULL,
  `cassava_type` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
  `solution` longtext NOT NULL,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_solutions`
--

INSERT INTO `survey_solutions` (`solution_id`, `crop_id`, `cassava_type`, `stage`, `solution`) VALUES
(1, 2, 1, 0, 'sdddddddddd'),
(3, 2, 1, 1, '<p>dhbjkaaklsj</p>\r\n'),
(4, 2, 1, 2, '<p>aodlanksldjapdjhk js</p>\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
