-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2013 at 12:48 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_pk` bigint(20) NOT NULL auto_increment,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `admin_status` varchar(500) NOT NULL,
  PRIMARY KEY  (`admin_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_pk`, `user_name`, `password`, `admin_status`) VALUES
(1, 'admin', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--


-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `trashflag` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `user_id`, `file_path`, `file_name`, `trashflag`) VALUES
(1, 1, '../images/', '1.png', 0),
(2, 1, 'backup/images/', '2.jpeg', 1),
(3, 1, 'backup/videos/', '3.mp4', 1),
(4, 2, '../images/', '4.jpg', 0),
(5, 2, 'backup/videos/', '5.mp4', 1),
(6, 1, 'backup/images/', '6.jpeg', 1),
(7, 1, '../images/', '7.png', 0),
(8, 1, '../images/', '8.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` bigint(20) NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `parent_menu` bigint(20) NOT NULL,
  PRIMARY KEY  (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` bigint(20) NOT NULL auto_increment,
  `website_id` bigint(20) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_content` text NOT NULL,
  `page_status` varchar(10) NOT NULL default 'Active',
  `parent_id` bigint(20) NOT NULL default '0',
  `menu` varchar(5) NOT NULL default 'No',
  `submenu` varchar(5) NOT NULL default 'No',
  PRIMARY KEY  (`page_id`),
  UNIQUE KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `website_id`, `page_name`, `page_content`, `page_status`, `parent_id`, `menu`, `submenu`) VALUES
(1, 9, 'Home', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(2, 9, 'Contact', 'Body content will display here', 'Active', 0, 'No', 'No'),
(3, 9, 'Sitemap', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(4, 1, 'Home', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(5, 1, 'Sitemap', 'Body content will display here', 'Active', 46, 'No', 'Yes'),
(6, 1, 'Contact Us', 'Body content will display here', 'Active', 46, 'No', 'Yes'),
(7, 3, 'Home', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(8, 3, 'About me', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(9, 3, 'Contact me', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(10, 3, 'Sitemap', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(11, 1, 'Sports', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(12, 1, 'Our World', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(13, 1, 'India', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(14, 10, 'Home', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(15, 10, 'Carrers', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(16, 10, 'About Us', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(17, 10, 'Contact Us', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(18, 10, 'ahgbg', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(24, 14, 'My', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(25, 14, 'Your', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(26, 15, 'Test 1', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(27, 15, 'Test 2', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(28, 16, 'Hello', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(29, 16, 'Hi', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(36, 18, 'test', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(37, 18, 'test', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(38, 4, 'MTP Home', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(39, 4, 'MTP Sitemap', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(40, 4, 'MTP Contact Us', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(41, 4, 'MTP About Us', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(42, 4, 'MTP Careers', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(43, 1, 'Cricket', 'Body content will display here', 'Active', 11, 'No', 'Yes'),
(44, 1, 'Hockey', 'Body content will display here', 'Active', 11, 'No', 'Yes'),
(45, 1, 'Tennis', 'Body content will display here', 'Active', 11, 'No', 'Yes'),
(46, 1, 'Badminton', 'Body content will display here', 'Active', 11, 'No', 'Yes'),
(47, 19, 'Home', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(48, 19, 'Sitemap', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(49, 2, 'Hello', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(50, 2, 'Hi', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(51, 2, 'Hi', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(52, 2, 'My', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(53, 2, 'ddd', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(54, 1, 'Goa', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(55, 1, 'Mumbai', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(56, 0, 'Hello', 'Body content will display here', 'Active', 0, 'No', 'No'),
(57, 0, 'Hi', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(58, 0, 'Gtyu', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(59, 0, 'TEst', 'Body content will display here', 'Active', 0, 'Yes', 'No'),
(60, 0, 'test', 'Body content will display here', 'Active', 0, 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) NOT NULL auto_increment,
  `website_id` bigint(20) NOT NULL,
  `keyword` text NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `meta_description` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `website_id`, `keyword`, `site_title`, `meta_description`) VALUES
(1, 1, 'giudhixgh123keywords', 'Demo Site', 'dkjgndtest data'),
(2, 3, 'Sachin,sachin,thonge', 'Sachin Site', 'This is site owned by Sachin.'),
(3, 9, 'Test Site', 'Afreen', 'Test Site'),
(4, 2, 'Test', 'Test Site', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `template_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  PRIMARY KEY  (`template_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL default 'inactive',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` bigint(20) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `website_id` varchar(100) default NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `addressline1` varchar(500) NOT NULL,
  `addressline2` varchar(500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL default 'Active',
  `oauth_uid` varchar(200) NOT NULL,
  `provider` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email_id` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `username`, `password`, `website_id`, `phone`, `email`, `addressline1`, `addressline2`, `country`, `state`, `city`, `pincode`, `timezone`, `status`, `oauth_uid`, `provider`) VALUES
(1, 'Harsh Edke', 'harshe', '49db7687173513257476390f4dcadab9', NULL, '', 'harsh.edke@gmail.com', '', '', '', '', '', '', '', 'Active', '', ''),
(2, 'Sachin Thonge', 'sachin', '15285722f9def45c091725aee9c387cb', NULL, '', 'sachin@webiction.com', '', '', '', '', '', '', '', 'Active', '', ''),
(3, 'Afreen Kazi', 'afreen', 'aa82265fa31092d327992a21705b1083', NULL, '', 'afreen@webiction.com', '', '', '', '', '', '', '', 'Inactive', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `website_id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  `main_page` bigint(20) default NULL,
  PRIMARY KEY  (`website_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`website_id`, `user_id`, `website_name`, `main_page`) VALUES
(1, 1, 'Demo', 4),
(2, 2, 'Test', 52),
(3, 1, 'Sachin', 7),
(4, 2, 'mtptestapp', 38),
(9, 1, 'Afreen', 1),
(10, 1, 'Webiction', 15),
(14, 1, 'Hello', 24),
(15, 1, 'Test', 26),
(16, 1, 'My Wbsite', 28),
(18, 1, 'ETc', 37),
(19, 1, 'Shekhar', 47);
