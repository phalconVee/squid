-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 11:40 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `squid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `squid_author`
--

CREATE TABLE IF NOT EXISTS `squid_author` (
  `id` int(11) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `username` varchar(250) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(144) NOT NULL,
  `website` varchar(144) NOT NULL,
  `bio` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` enum('subscriber','administrator','editor','contributor','author') NOT NULL DEFAULT 'subscriber',
  `profile_picture` varchar(250) NOT NULL,
  `date_joined` varchar(70) NOT NULL,
  `time_joined` varchar(20) NOT NULL,
  `post_count` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squid_author`
--

INSERT INTO `squid_author` (`id`, `display_name`, `username`, `firstname`, `lastname`, `email`, `website`, `bio`, `password`, `role`, `profile_picture`, `date_joined`, `time_joined`, `post_count`) VALUES
(3, 'Eze', 'ugorjivictor', 'victor', 'ugorji', 'pricelessvee@yahoo.com', 'www.facebook.com/ugorjivictor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '4bc5c770dbe0b009d527b3097a3e857e', 'editor', '/app/view/dashboard/asset/img/face-1.jpg', 'Fri 25 August 2017', '', 0),
(6, 'victor', 'ugorji_victor', 'victor', 'Ugorji', 'pricelessvee@yahoo.com', 'www.facebook.com/ugorjivictor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '4bc5c770dbe0b009d527b3097a3e857e', 'administrator', '/app/view/dashboard/asset/img/face-1.jpg', 'Fri 25 August 2017', '', 0),
(17, 'insane', 'insane', '', '', '', '', '', 'df5f46e7a17ea6c66207557696835cad', 'subscriber', '', 'Fri 25 August 2017', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `squid_category`
--

CREATE TABLE IF NOT EXISTS `squid_category` (
  `id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `category_clean` varchar(45) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squid_category`
--

INSERT INTO `squid_category` (`id`, `category`, `category_clean`, `enabled`, `date_created`, `description`, `author_id`) VALUES
(1, 'News', '', 1, 'Mon 28 August 2017', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure d', 6),
(3, 'Sports', '', 0, 'Mon 28 August 2017', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure d', 6);

-- --------------------------------------------------------

--
-- Table structure for table `squid_post`
--

CREATE TABLE IF NOT EXISTS `squid_post` (
  `id` int(11) NOT NULL,
  `title` varchar(144) NOT NULL,
  `article` text NOT NULL,
  `title_clean` varchar(144) DEFAULT NULL,
  `file` varchar(45) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `date_published` varchar(50) NOT NULL,
  `featured` tinyint(1) DEFAULT '0',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `comment_enabled` tinyint(1) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `last_edited` varchar(50) NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squid_post`
--

INSERT INTO `squid_post` (`id`, `title`, `article`, `title_clean`, `file`, `author_id`, `date_published`, `featured`, `enabled`, `comment_enabled`, `views`, `last_edited`, `category`) VALUES
(12, 'fdfvdgvd', '<p>fvdfvdfgbvf</p>\r\n', NULL, NULL, 3, 'Fri 25 August 2017', 0, 1, 0, 0, 'Mon 28 August 2017', ''),
(21, 'this is my proper post', '<p>htgdygyv546</p>\r\n', NULL, NULL, 3, 'Mon 28 August 2017', 0, 1, 0, 0, '', ''),
(23, 'this is my proper post', '<p>jgmk kf;yklgh;fy,l;;&#39;f</p>\r\n', NULL, NULL, 6, 'Mon 28 August 2017', 0, 1, 0, 0, '', ''),
(27, 'this is another proper post', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', NULL, NULL, 6, 'Fri 01 September 2017', 0, 1, 0, 0, '', ''),
(28, 'this is another proper post', '', NULL, NULL, 6, 'Mon 18 September 2017', 0, 1, 0, 0, '', ''),
(31, 'this is a post', '', NULL, NULL, 6, 'Tue 26 September 2017', 0, 1, 0, 0, '', '3,');

-- --------------------------------------------------------

--
-- Table structure for table `squid_post_to_category`
--

CREATE TABLE IF NOT EXISTS `squid_post_to_category` (
  `post_id` int(11) NOT NULL,
  `categoy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `squid_tag`
--

CREATE TABLE IF NOT EXISTS `squid_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squid_tag`
--

INSERT INTO `squid_tag` (`id`, `post_id`, `tag`, `author_id`) VALUES
(2, NULL, 'entertainment', 6),
(5, NULL, 'hip hop single', 6),
(6, NULL, 'music', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `squid_author`
--
ALTER TABLE `squid_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `squid_category`
--
ALTER TABLE `squid_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `squid_post`
--
ALTER TABLE `squid_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `squid_post_to_category`
--
ALTER TABLE `squid_post_to_category`
  ADD KEY `post_category` (`post_id`);

--
-- Indexes for table `squid_tag`
--
ALTER TABLE `squid_tag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `squid_author`
--
ALTER TABLE `squid_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `squid_category`
--
ALTER TABLE `squid_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `squid_post`
--
ALTER TABLE `squid_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `squid_tag`
--
ALTER TABLE `squid_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `squid_post_to_category`
--
ALTER TABLE `squid_post_to_category`
ADD CONSTRAINT `post_category` FOREIGN KEY (`post_id`) REFERENCES `squid_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
