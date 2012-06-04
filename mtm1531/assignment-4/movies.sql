-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 07:26 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chri0163`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `director` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lead_actors` text NOT NULL,
  `writer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `language`, `country`, `director`, `lead_actors`, `writer`, `year`) VALUES
(1, 'Forrest Gump', 'Drama', 'English', 'North America', 'Robert Zemeckis', 'Tom Hanks', 'Winston Groom', 1994),
(2, 'Nayakan', 'Drama', 'Tamil', 'India', 'Mani Ratnam', 'Kamal Hassan', 'Balakumaran', 1987),
(3, '2001 Space Odyssey', 'Sci-fi', 'English', 'North America', 'Stanley Kubrick', 'Keir Dullea', 'Arthur C.Clarke', 1968),
(4, 'Amadeus ', 'Biography', 'English', 'North America', 'Milos Forman', 'F. Murray Abraham', 'Peter Shaffer', 1984),
(5, 'The Shawshank Redemption', 'Drama', 'English', 'North America', 'Frank Darabont', 'Tim Robbins, Morgan Freeman', 'Stephen King', 1994),
(6, 'Babe', 'Adventure', 'English', 'North America', 'Chris Noonan', 'Christine Cavanaugh, James Cromwell', 'Dick King-Smith', 1995),
(7, 'Amélie', 'Comedy', 'French', 'France', 'Jean-Pierre Jeunet', 'Audrey Tautou', 'Guillaume Laurant', 2001),
(8, 'The Good, the Bad and the Ugly', 'Western', 'Italian', 'Italy', 'Sergio Leone', 'Eli Wallach, Clint Eastwood, Lee Van Cleef', 'Luciano Vincenzoni', 1966),
(9, 'Badsha', 'Action', 'Tamil', 'India', 'Suresh Krishna', 'Rajinikanth, Raghuvaran', 'Balakumaran', 1995),
(10, 'Rockstar', 'Biography', 'Hindi', 'India', 'Imtiaz Ali', 'Ranbir Kapoor', 'Imtiaz Ali', 2011);
