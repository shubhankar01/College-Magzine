-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2013 at 11:31 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1113 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `password`) VALUES
(1111, 'pranov', 'pranov'),
(1112, 'anupam', 'anupam');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `articleid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `pic` varchar(50) NOT NULL DEFAULT 'article.jpg',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'null',
  `modrating` int(3) NOT NULL DEFAULT '0',
  `userrating` int(3) NOT NULL DEFAULT '0',
  `authors` varchar(400) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleid`, `category`, `title`, `content`, `pic`, `timestamp`, `status`, `modrating`, `userrating`, `authors`, `userid`) VALUES
(100, 'Science', 'Nuclear weapon', 'A nuclear weapon is an explosive device that derives its destructive force from nuclear reactions, either fission or a combination of fission and fusion. Both reactions release vast quantities of energy from relatively small amounts of matter. The first fission ("atomic") bomb test released the same amount of energy as approximately 20,000 tons of TNT. The first thermonuclear ("hydrogen") bomb test released the same amount of energy as approximately 10,000,000 tons of TNT.[1] A modern thermonuclear weapon weighing little more than 2,400 pounds (1,100 kg) can produce an explosive force comparable to the detonation of more than 1.2 million tons (1.1 million tonnes) of TNT.[2] Thus, even a small nuclear device no larger than traditional bombs can devastate an entire city by blast, fire and radiation. Nuclear weapons are considered weapons of mass destruction, and their use and control have been a major focus of international relations policy since their debut. Only two nuclear weapons have been used in the course of warfare, both by the United States near the end of World War II. On 6 August 1945, a uranium gun-type fission bomb code-named "Little Boy" was detonated over the Japanese city of Hiroshima. Three days later, on 9 August, a plutonium implosion-type fission bomb code-named "Fat Man" was exploded over Nagasaki, Japan. These two bombings resulted in the deaths of approximately 200,000 people—mostly civilians—from acute injuries sustained from the explosions.[3] The role of the bombings in Japan''s surrender, and their ethical status, remain the subject of scholarly and popular debate. Since the bombings of Hiroshima and Nagasaki, nuclear weapons have been detonated on over two thousand occasions for testing purposes and demonstrations. Only a few nations possess such weapons or are suspected of seeking them. The only countries known to have detonated nuclear weapons—and that acknowledge possessing such weapons—are (chronologically by date of first test) the Unit', 'article.jpg', '2013-01-26 17:46:35', '1', 3, 4, 'shubhankar,raghav', 1),
(101, 'Fashion and Lifestyle', 'Necklace', 'A necklace is an article of jewellery which is worn around the neck.Common features of necklaces include features such as colorful stones (particularly gemstones / jewels), wood (usually carved or polished), art glass, feathers, shells, beads or corals - a wide, wide variety of other adornments have also been used. If a necklace includes a primary hanging feature, it is called a pendant; if the pendant is itself a small container, that is called a locket. Necklaces are frequently formed from a metal jewellery chain. Others are woven or manufactured from cloth using string or twine.', 'article.jpg', '2013-01-26 17:21:17', '1', 4, 3, 'Yokesh babu', 5),
(102, 'Sports', 'Australian Open 2013', 'The 2013 Australian Open is a tennis tournament that takes place in Melbourne Park in Melbourne, Australia, from 14 to 27 January 2013.[1] It is the 101st edition of the Australian Open, and the first Grand Slam event of the year. The tournament consists of events for professional players in singles, doubles and mixed doubles play. Junior and wheelchair players compete in singles and doubles tournaments.', 'article.jpg', '2013-01-26 17:42:01', '1', 4, 4, 'Vishal anand', 2),
(103, 'Literature', 'Mohen Jodaro civilization', 'Mohenjo-daro (IPA: [mu??n? d?o? d???o?], Urdu: ???? ??????, Sindhi: ???? ?? ???, lit. Mound of the Dead; English pronunciation: /mo??h?n.d?o? ?d??.ro?/), is an archeological site situated in the province of Sindh, Pakistan. Built around 2600 BCE, it was one of the largest settlements of the ancient Indus Valley Civilization, and one of the world''s earliest major urban settlements, existing at the same time as the civilizations of ancient Egypt, Mesopotamia, and Crete. Mohenjo-daro was abandoned in the 19th century BCE, and was not rediscovered until 1922. Significant excavation has since been conducted at the site of the city, which was designated a UNESCO World Heritage Site in 1980.Mohenjo-daro, the modern name for the site, simply means Mound of the Dead in Sindhi. The city''s original name is unknown, but analysis of a Mohenjo-daro seal suggests a possible ancient Dravidian name, Kukkutarma ("the city [-rma] of the cock [kukkuta]").[2] Cock-fighting may have had ritual and religious significance for the city, with domesticated chickens bred there for sacred purposes, rather than as a food source.', 'article.jpg', '2013-01-26 17:45:52', '1', 5, 4, 'Gaurav doshi, Vishal anand', 3),
(104, 'Philisophy', 'title', 'text', 'article.jpg', '2013-04-18 08:58:03', 'null', 0, 0, '', 0),
(105, 'Philisophy', 'zlckmsdc', 'lds,c;s', 'article.jpg', '2013-04-18 09:28:42', 'null', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `article_comment`
--

CREATE TABLE IF NOT EXISTS `article_comment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(1000) NOT NULL,
  `articleid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `article_comment`
--

INSERT INTO `article_comment` (`commentid`, `comment`, `articleid`, `timestamp`, `userid`) VALUES
(1, 'Helen Adams Keller (June 27, 1880 – June 1, 1968) was an American author, political activist, and lecturer. She was the first deafblind person to earn a Bachelor of Arts degree', 100, '2013-01-26 17:16:59', 1),
(2, 'A prolific author, Keller was well traveled, and was outspoken in her anti-war convictions', 100, '2013-01-26 17:17:28', 3),
(3, 'elen Keller was not born blind and deaf; it was not until she was 19 months old that she contracted an illness described by doctors as "an acute congestion of the stomach and the brain," and which might have been scarlet fever or meningitis. The illness did not last for a particularly long time, but it left her deaf and blind. At that time,', 100, '2013-01-26 17:18:24', 5),
(4, 'hello how are u..??', 103, '2013-01-26 17:48:12', 5),
(5, 'hey.. wassp...?', 103, '2013-01-26 17:48:35', 2),
(6, 'i m f9.. wat abt u..:)', 102, '2013-01-26 17:48:57', 5),
(7, 'A prolific author, Keller was well traveled, and was outspoken in her anti-war convictions', 103, '2013-01-26 17:49:20', 5),
(8, 'Helen Adams Keller (June 27, 1880 – June 1, 1968) was an American author, political activist, and lecturer. She was the first deafblind person to earn a Bachelor of Arts degree', 102, '2013-01-26 17:49:34', 2),
(9, 'hey.. wassp...?', 103, '2013-01-26 17:49:47', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  `editorpick` int(11) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1009 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`, `editorpick`) VALUES
(1000, 'Science', 100),
(1001, 'Philisophy', 100),
(1003, 'Literature', 100),
(1004, 'Arts', 100),
(1005, 'Technology', 100),
(1006, 'Others', 100),
(1007, 'Fashion and Lifestyle', 100),
(1008, 'Sports', 100);

-- --------------------------------------------------------

--
-- Table structure for table `dayevents`
--

CREATE TABLE IF NOT EXISTS `dayevents` (
  `dayarticle` int(11) NOT NULL,
  `dayword` varchar(1500) NOT NULL,
  `daythought` varchar(1500) NOT NULL,
  `montharticle` int(11) NOT NULL,
  `highestrated` int(11) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dayevents`
--

INSERT INTO `dayevents` (`dayarticle`, `dayword`, `daythought`, `montharticle`, `highestrated`, `day`) VALUES
(1, 'Humble', '"An eye for an eye makes the whole world blind"- M.K.Gandhi', 0, 0, '2013-01-22'),
(0, '', '"If you are good at something do not do it for free"- Joker', 0, 0, '2013-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE IF NOT EXISTS `moderator` (
  `modid` int(11) NOT NULL AUTO_INCREMENT,
  `modname` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `category` varchar(50) NOT NULL,
  `modetails` varchar(500) NOT NULL,
  `modreviews` int(5) NOT NULL,
  PRIMARY KEY (`modid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5009 ;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`modid`, `modname`, `password`, `category`, `modetails`, `modreviews`) VALUES
(5000, 'Pranov Kumar', 'pranov', 'Science', 'B.tech Cse', 0),
(5001, 'Shobhika Panda', 'shobhika', 'Arts', '3rd, year B.tech Cse', 0),
(5002, 'Oshin nayak', 'oshin', 'Philosophy', 'B.tech Cse', 0),
(5003, 'Raghavendra Singh', 'raghav', 'Technology', 'B.tech Cse', 0),
(5004, 'Puja bardhan', 'puja', 'Fashion and Lifestyle', 'B.tech Cse', 0),
(5006, 'Anitha Baskar', 'anitha', 'Others', 'B.tech Cse', 0),
(5007, 'Prabhu Awasthi', 'prabhu', 'Literature', 'B.tech Cse', 0),
(5008, 'Ishan gupta', 'ishan', 'Sports', 'B.tech Cse', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userrate`
--

CREATE TABLE IF NOT EXISTS `userrate` (
  `articleid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `rate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(150) NOT NULL,
  `university` varchar(100) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `pic` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `address` varchar(150) NOT NULL,
  `aboutme` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `password`, `email`, `university`, `branch`, `year`, `mobile`, `pic`, `address`, `aboutme`, `type`) VALUES
(1, 'Shubhankar', 'Banerjee', 'shubhankar', 'shubh.banerjee007@gmail.com', 'Vit University', 'CSE', '3rd', '8124501788', 'default.jpg', 'E-541 Vit mens hostel,vellore', '0', 0),
(2, 'Vishal ', 'Anand', 'vishal', 'vishal.anand@gmail.com', 'Vit University', 'CSE', '3rd', '9876543210', 'default.jpg', '45, patna, bihar', 'sensible', 0),
(3, 'Gaurav ', 'Doshi', 'gaurav', 'doshi.gaurav@gmail.com', 'Vit University', 'CSE', '3rd', '8124501788', 'default.jpg', 'E-541 Vit mens hostel,vellore', 'sensible', 0),
(4, 'Satyam', 'krishna', 'satyam', 'satyamkrishna@gmail.com', 'Vit University', 'CSE', '3rd', '8124501788', 'default.jpg', 'E-540 Vit mens hostel,vellore', 'sensible', 0),
(5, 'Yokesh', 'Babu', 'yokesh', 'yokesh.babu@vit.ac.in', 'Vit University', 'Associate Professor, Senior, SCSE', NULL, '9876543210', 'default.jpg', 'E-541 Vit Homeland hostel,vellore', 'sensible', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
