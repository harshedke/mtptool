-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2013 at 10:14 AM
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
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `user_id`, `file_path`, `file_name`) VALUES
(1, 1, '../images/', '1.jpg'),
(2, 2, '../images/', '2.png'),
(3, 2, '../images/', '3.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `page`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `website_id`, `keyword`, `site_title`, `meta_description`) VALUES
(1, 1, 'Alto,Ferrari', 'My Website', 'nthing'),
(2, 1, 'Sachin', 'test Website ', 'sachin'),
(3, 1, 'website 2', 'website 2', 'Website 2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `username`, `password`, `phone`, `email`, `addressline1`, `addressline2`, `country`, `state`, `city`, `pincode`, `timezone`, `status`, `oauth_uid`, `provider`) VALUES
(1, 'Harsh Edke', 'harshe', '49db7687173513257476390f4dcadab9', '', 'harsh.edke@gmail.com', '', '', '', '', '', '', '', 'Active', '', ''),
(2, 'Sachin Thonge', 'sachin', '15285722f9def45c091725aee9c387cb', '', 'sachin@webiction.com', '', '', '', '', '', '', '', 'Active', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `website_id` bigint(20) NOT NULL auto_increment,
  `user_id` bigint(20) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`website_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`website_id`, `user_id`, `website_name`) VALUES
(1, 1, 'Website1'),
(2, 2, 'Sachinthonge'),
(3, 2, 'Website2');
