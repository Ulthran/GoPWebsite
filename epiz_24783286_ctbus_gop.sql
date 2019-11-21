-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.epizy.com
-- Generation Time: Nov 21, 2019 at 01:25 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24783286_ctbus_gop`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`IndexCol`, `Name`, `Description`, `Link`) VALUES
(1, 'Warm Up', 'That\'s right. We\'ve got a whole page devoted to warm ups and we\'ve got one devoted to cool downs too. Please take the time to look through this at least once. Warming up and cooling down properly can be easier and (dare I say?) more effective than lifting at preventing injury.\r\n\r\nI\'ve got nothing here yet. ;(', 'SHOULD BE ONE'),
(2, 'Deadlift', 'DESC', 'LINK'),
(3, 'Russian Twists', 'DESC (w/o weight)\r\nDESC (w/ weight)', 'LINK'),
(4, 'Dumbbell Rows', 'DESC', 'LINK'),
(5, 'Pikes', 'DESC', 'LINK'),
(6, 'Nordic Hamstring Curls', 'DESC', 'LINK'),
(7, 'Assisted Pull Ups', 'DESC', 'LINK'),
(8, 'Flutter Kicks', 'DESC', 'LINK'),
(9, 'Skater Squats', 'DESC', 'LINK'),
(10, 'Cool Down', 'DESC', 'LINK'),
(11, 'Leg Press', 'DESC', 'LINK'),
(12, 'Windshield Wipers', 'DESC', 'LINK'),
(13, 'Bench Press', 'DESC', 'LINK'),
(14, 'Garhammer Raises', 'DESC', 'LINK'),
(15, 'RFE Split Squat', 'DESC', 'LINK'),
(16, 'Reverse Row', 'DESC', 'LINK'),
(17, 'Supermans', 'DESC', 'LINK');

-- --------------------------------------------------------

--
-- Table structure for table `ex_wk_junction`
--

CREATE TABLE `ex_wk_junction` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `ExIndex` int(11) NOT NULL,
  `WkIndex` int(11) NOT NULL,
  `OrderNum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_wk_junction`
--

INSERT INTO `ex_wk_junction` (`IndexCol`, `ExIndex`, `WkIndex`, `OrderNum`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 5),
(6, 6, 1, 6),
(7, 7, 1, 7),
(8, 8, 1, 8),
(9, 9, 1, 9),
(10, 10, 1, 10),
(11, 1, 2, 1),
(12, 11, 2, 2),
(13, 12, 2, 3),
(14, 13, 2, 4),
(15, 14, 2, 5),
(16, 15, 2, 6),
(17, 16, 2, 7),
(18, 17, 2, 8),
(19, 10, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `RandID` int(11) NOT NULL,
  `VideoName` text NOT NULL,
  `VideoLink` text NOT NULL,
  `Notes` longtext NOT NULL,
  `Year` year(4) NOT NULL,
  `Tournament` text NOT NULL,
  `Private` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unverified_users`
--

CREATE TABLE `unverified_users` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `RandID` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `AccountType` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `AccountType` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verified_goppers`
--

CREATE TABLE `verified_goppers` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `EstimatedTime` time NOT NULL,
  `Plan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`IndexCol`, `Name`, `Description`, `EstimatedTime`, `Plan`) VALUES
(1, 'Lifting Plan Fase 2 (Oct - Mar): Day 1', 'The goal of this fase is to continue building strength and to start developing power. This transition is critical since much of the work we do as gods involves explosive movements - like when we sky people.\r\n<br/><br/>\r\nRepetitions are 10, 8, 6, 4, 2 (5 sets total). Aim to increase weight each set. Lifts should start at about 70% and increase to about 90%. For activities that do not decrease in reps, maintain about 80%. Aim for 30 secs between sets.\r\n<br/><br/>\r\n(*) means an exercise increases in reps.', '01:30:00', 'Warm-up: spin, treadmill, erg, etc (5-10 mins or longer, as needed)<br/>\r\nDeadlift *<br/>\r\nRussian twists with weight (20 each side)<br/>\r\nDumbbell rows *<br/>\r\nPikes (15 but you can take a break if you need to get your form back)<br/>\r\nNordic Hamstring Curl (3x3-5)<br/>\r\nAssisted pull-ups (3x max up to 10)<br/>\r\nFlutter kicks (40x, every time your right foot goes up, that\'s one)<br/>\r\nSkater squats (3x10)<br/>\r\nCool down: spin, treadmill, erg, etc (5-10 mins or longer, please don\'t skip this part)<br/>'),
(2, 'Lifting Plan Fase 2 (Oct - Mar): Day 2', 'The goal of this fase is to continue building strength and to start developing power. This transition is critical since much of the work we do as gods involves explosive movements - like when we sky people.\r\n<br/><br/>\r\nRepetitions are 10, 8, 6, 4, 2 (5 sets total). Aim to increase weight each set. Lifts should start at about 70% and increase to about 90%. For activities that do not decrease in reps, maintain about 80%. Aim for 30 secs between sets.\r\n<br/><br/>\r\n(*) means an exercise increases in reps.', '01:30:00', 'Warm-up: spin, treadmill, erg, etc (5-10 mins or longer, as needed)<br/>\r\nLeg press *<br/>\r\nWindshield wipers (20 each side)<br/>\r\nBench press *<br/>\r\nGarhammer raise (3x10)<br/>\r\nRFE split squat *<br/>\r\nReverse row (3x10)<br/>\r\nSupermans (2x20)<br/>\r\nCool down: spin, treadmill, erg, etc (5-10 mins or longer, please don\'t skip this part)<br/>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `ex_wk_junction`
--
ALTER TABLE `ex_wk_junction`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `unverified_users`
--
ALTER TABLE `unverified_users`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `verified_goppers`
--
ALTER TABLE `verified_goppers`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ex_wk_junction`
--
ALTER TABLE `ex_wk_junction`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unverified_users`
--
ALTER TABLE `unverified_users`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verified_goppers`
--
ALTER TABLE `verified_goppers`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
