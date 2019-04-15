-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2019 at 03:28 AM
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
-- Database: `mooddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `mood`
--

DROP TABLE IF EXISTS `mood`;
CREATE TABLE IF NOT EXISTS `mood` (
  `moodID` int(11) NOT NULL,
  `mood` varchar(100) NOT NULL,
  PRIMARY KEY (`moodID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mood`
--

INSERT INTO `mood` (`moodID`, `mood`) VALUES
(0, 'undefined'),
(1, 'bored'),
(2, 'calm'),
(3, 'excited'),
(4, 'tense');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `songID` int(11) NOT NULL,
  `songName` varchar(100) NOT NULL,
  `moodNumber` int(11) NOT NULL,
  PRIMARY KEY (`songID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songID`, `songName`, `moodNumber`) VALUES
(1, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20A%20New%20World%20%281%3A05%29%2060bpm.mp3', 1),
(2, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20A%20Touch%20Of%20Zen%20%284%3A25%29%2062bpm.mp3', 1),
(3, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Drifting%20Away%20%281%3A27%29%2060bpm(1).mp3', 1),
(4, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Indian%20Summer%20%282%3A55%29%20120bpm.mp3', 1),
(5, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Infinite%20Ocean%20%284%3A08%29%20110bpm.mp3', 1),
(6, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Luxury%20Resort%20%281%3A41%29%2082bpm.mp3', 1),
(7, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Pacific%20Whalesong%20%284%3A13%29%2090bpm.mp3', 1),
(8, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Reiki%20Healing%20%284%3A46%29%2060bpm.mp3', 1),
(9, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Troposphere%20%284%3A22%29%2060bpm.mp3', 1),
(10, 'Purple%20Planet%20Music%20-%20Dreamy%20-%20Uluru%20%284%3A59%29%2056bpm.mp3', 1),
(11, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Awakening%20%281%3A50%29%20%28L%29.mp3', 2),
(12, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Beachfront%20%281%3A35%29.mp3', 2),
(13, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Bright%20Ideas%20%281%3A38%29.mp3', 2),
(14, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Chill%20Factor%20%282%3A06%29(1).mp3', 2),
(15, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Chilled%20to%20Zero%20%281%3A38%29.mp3', 2),
(16, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Digital%20World%20%281%3A29%29%20%28L%29.mp3', 2),
(17, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Exhibition%20Showreel%20%281%3A42%29.mp3', 2),
(18, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Future%20Worlds%20%281%3A59%29.mp3', 2),
(19, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Future%20Worlds%20%281%3A59%29.mp3', 2),
(20, 'Purple%20Planet%20Music%20-%20Chilled%20-%20Tranquilize%20%281%3A48%29.mp3', 2),
(21, 'Purple%20Planet%20Music%20-%20Upbeat%20-%20Up%20Your%20Street%20%282%3A02%29%20130bpm.mp3', 3),
(22, 'Purple%20Planet%20Music%20-%20Energy%20-%20Upstep%20%281%3A52%29%2072bpm.mp3', 3),
(23, 'Purple%20Planet%20Music%20-%20Energy%20-%20Salsa%20Nites%20%282%3A13%29%20120bpm.mp3', 3),
(24, 'Purple%20Planet%20Music%20-%20Energy%20-%20Retro%20Gamer%20%281%3A16%29%20120bpm%20%28L%29.mp3', 3),
(25, 'Purple%20Planet%20Music%20-%20Energy%20-%20Mirrorball%20%281%3A58%29%20144bpm.mp3', 3),
(26, 'Purple%20Planet%20Music%20-%20Energy%20-%20Mindwarp%20%282%3A18%29%20110bpm.mp3', 3),
(27, 'Purple%20Planet%20Music%20-%20Energy%20-%20Light%20Em%20Up%20%282%3A00%29%20130bpm.mp3', 3),
(28, 'Purple%20Planet%20Music%20-%20Energy%20-%20Jump%20Up%20%282%3A24%29%20160bpm.mp3', 3),
(29, 'Purple%20Planet%20Music%20-%20Energy%20-%20Iron%20Horse%20%281%3A35%29%20134bpm.mp3', 3),
(30, 'Purple%20Planet%20Music%20-%20Energy%20-%20Ecstasy%20%281%3A47%29%20132bpm%20.mp3', 3),
(31, 'Purple%20Planet%20Music%20-%20Tense%20-%20Cat%20%26%20Mouse%20%281%3A16%29%2072bpm.mp3', 4),
(32, 'Purple%20Planet%20Music%20-%20Tense%20-%20Code%20Red%20%281%3A22%29%20140bpm%20%28L%29.mp3', 4),
(33, 'Purple%20Planet%20Music%20-%20Tense%20-%20Confrontation%20%281%3A12%29%2090bpm%20%28L%29.mp3', 4),
(34, 'Purple%20Planet%20Music%20-%20Tense%20-%20Death%20March%20%281%3A32%29%20114bpm.mp3', 4),
(35, 'Purple%20Planet%20Music%20-%20Tense%20-%20Decline%20And%20Fall%20%281%3A02%29%2084bpm.mp3', 4),
(36, 'Purple%20Planet%20Music%20-%20Tense%20-%20Meat%20Grinder%20%282%3A07%29%20112bpm(1).mp3', 4),
(37, 'Purple%20Planet%20Music%20-%20Tense%20-%20Palpitations%20%281%3A29%29%20122bpm.mp3', 4),
(38, 'Purple%20Planet%20Music%20-%20Tense%20-%20Spy%20Story%20%282%3A33%29%20120bpm.mp3', 4),
(39, 'Purple%20Planet%20Music%20-%20Tense%20-%20Trepidation%20%281%3A25%29%2082bpm.mp3', 4),
(40, 'Purple%20Planet%20Music%20-%20Tense%20-%20Turning%20The%20Screw%20%283%3A44%29%2062bpm.mp3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userMoodID` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
