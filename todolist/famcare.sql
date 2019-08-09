-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 03:02 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `famcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text CHARACTER SET cp1250,
  `user` int(11) DEFAULT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `user`, `done`, `created`) VALUES
(10, 'join a club', 1, 0, '2019-08-09 00:00:00'),
(20, 'Introduce yourself', 1, 0, '2019-08-09 00:00:00'),
(30, 'be brave to meet a new people', 1, 0, '2019-08-09 00:00:00'),
(40, 'say hi to someone', 1, 0, '2019-08-09 00:00:00'),
(50, 'make a call to a new friend', 1, 0, '2019-08-09 00:00:00'),
(60, 'hangout together', 1, 0, '2019-08-09 00:00:00'),
(70, 'make a groupchat', 1, 0, '2019-08-09 00:00:00'),
(80, 'active in a groupchat', 1, 0, '2019-08-09 00:00:00'),
(90, 'be a nice person, by helping a friend', 1, 0, '2019-08-09 00:00:00'),
(100, 'try to plan an event', 1, 0, '2019-08-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id_progress` int(11) NOT NULL,
  `progress_tgs1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id_progress`, `progress_tgs1`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `progress2`
--

CREATE TABLE `progress2` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress2`
--

INSERT INTO `progress2` (`ID`, `name`, `done`, `user`) VALUES
(1, 'challenge your self with something new', 0, 1),
(2, 'Join Group discussion', 0, 1),
(3, 'Make a interesting discuss', 0, 1),
(4, 'Tell me, what your a fan of?', 0, 1),
(5, 'Join a fan club', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress3`
--

CREATE TABLE `progress3` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress3`
--

INSERT INTO `progress3` (`ID`, `name`, `done`, `user`) VALUES
(1, 'Tell me what your hobby?', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress4`
--

CREATE TABLE `progress4` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress4`
--

INSERT INTO `progress4` (`ID`, `name`, `done`, `user`) VALUES
(1, 'Tell me who your crush?', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `progress2`
--
ALTER TABLE `progress2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `progress3`
--
ALTER TABLE `progress3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `progress4`
--
ALTER TABLE `progress4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `progress2`
--
ALTER TABLE `progress2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress3`
--
ALTER TABLE `progress3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `progress4`
--
ALTER TABLE `progress4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
