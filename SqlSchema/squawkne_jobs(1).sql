-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2013 at 09:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `squawkne_jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'sysad'),
(2, 'design'),
(3, 'webdev-frontend'),
(7, 'webdev-backend');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('d2e4b8df2897c23745b46442ebb28b80', '180.76.5.136', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)', 1366197737, ''),
('16974b64a481e50d7bc0897d35ea49aa', '112.198.82.88', 'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130408 Firefox/22.0', 1366255560, ''),
('6f25e89590926901f4dc8f116e103dd4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130408 Firefox/22.0', 1366265488, '');

-- --------------------------------------------------------

--
-- Table structure for table `joblinks`
--

CREATE TABLE IF NOT EXISTS `joblinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linktext` varchar(255) NOT NULL,
  `joblink` text NOT NULL,
  `website` varchar(70) NOT NULL,
  `category` int(11) NOT NULL,
  `posted` date NOT NULL,
  `poster` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `joblinks`
--

INSERT INTO `joblinks` (`id`, `linktext`, `joblink`, `website`, `category`, `posted`, `poster`) VALUES
(1, 'Urgently Needed Systems Administrators', 'http://manila.tl.craigslist.com.ph/sof/3198243385.html', 'craigslist', 1, '2012-08-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(55) NOT NULL DEFAULT '-',
  `position` text NOT NULL,
  `workhours` enum('full-time','part-time','freelance','flexible') NOT NULL,
  `responsibilities` text NOT NULL,
  `requirements` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `categoryid` int(2) NOT NULL,
  `contactemail` varchar(99) NOT NULL,
  `created` date DEFAULT NULL,
  `author` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company`, `position`, `workhours`, `responsibilities`, `requirements`, `location`, `categoryid`, `contactemail`, `created`, `author`) VALUES
(1, 'Some Company', 'High End Monkey', 'full-time', 'Work your ass off', 'Needs to be able to speak monkey-english', 'Somewhere Over The Rainbow', 1, 'blahblah@blah.com', '2013-04-18', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_url` text NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=sjis COMMENT='user registration information' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `about`, `password`, `last_url`, `last_login`, `active`) VALUES
(1, 'admin', 'jose.palala@gmail.com', 'jose', '25ab3b38f7afc116f18fa9821e44d561', 'http://jpalala.net', '2012-08-23 05:45:03', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
