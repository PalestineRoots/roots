-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2019 at 02:27 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roots`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(9) NOT NULL,
  `client_firstname` varchar(255) NOT NULL,
  `client_lastname` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_major` varchar(255) NOT NULL,
  `client_qr` varchar(255) NOT NULL,
  `client_image` varchar(255) NOT NULL,
  `client_tags` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_firstname`, `client_lastname`, `client_email`, `client_major`, `client_qr`, `client_image`, `client_tags`) VALUES
(342525, 'mshmouf', 'ndsfgdg', 'tes@t.v', 'PJ', 'sdgf', 'mahmoud ghonim.jpg', 'mshmouf, ndsfgdg, PJ, 342525, ');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_title` varchar(255) NOT NULL,
  `role_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_title`, `role_desc`) VALUES
(1, 'Admin', 'Admin can add/delete managers as well as clients. Admin can also add another Admin'),
(2, 'Manager', 'Can add/delete clients'),
(3, 'Root', 'Can delete Admins');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_randsalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_role`, `user_randsalt`) VALUES
(1, 'Root', 'Root', 'rootstech46@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW', 'Root', '$2y$10$iusesomecrazystrings22'),
(2, 'Mahmoud', 'Ghonim', 'mahmod1ghneem@gmail.com', '$2y$10$iusesomecrazystrings2uz/HkvnvHFd41nowL3oLCmiMEM4CLQyW', 'Admin', '$2y$10$iusesomecrazystrings22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
