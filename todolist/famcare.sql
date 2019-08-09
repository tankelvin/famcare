-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 04:03 AM
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
(10, 'join a club', 1, 1, '2019-08-09 00:00:00'),
(20, 'Introduce yourself', 1, 1, '2019-08-09 00:00:00'),
(30, 'be brave to meet a new people', 1, 1, '2019-08-09 00:00:00'),
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
(5, 'Join a fan club', 0, 1),
(6, 'join fan club event', 0, 1),
(7, 'Are you enjoy ?', 0, 1),
(8, 'Come to your friends party', 0, 1),
(9, 'Make your own party', 0, 1),
(10, 'Invite your friends', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress3`
--

CREATE TABLE `progress3` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress3`
--

INSERT INTO `progress3` (`ID`, `name`, `done`, `user`) VALUES
(1, 'Find your hobby', 0, 1),
(2, 'Every ones loves music, find your fav', 0, 1),
(3, 'Try something new like go to museum', 0, 1),
(4, 'Travelling around country', 0, 1),
(5, 'Find new place', 0, 1),
(6, 'Meet people and make a friend', 0, 1),
(7, 'Tell your hobby to your new friend', 0, 1),
(8, 'If your hobby both are same, congratulation you have new friend', 0, 1),
(9, 'Join an event about your hobby', 0, 1),
(10, 'Join an competition about your hobby', 0, 1);

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
(1, 'Whos your crush?', 0, 1),
(2, 'Try to impress your crush', 0, 1),
(3, 'Give an signal to your crush', 0, 1),
(4, 'See if she/he likes you to', 0, 1),
(5, 'if she/he likes you, asking him/her out', 0, 1),
(6, 'Bring him/her to your fav place', 0, 1),
(7, 'Tell him/her your story', 0, 1),
(8, 'If him/her response is positive, he/she really likes you', 0, 1),
(9, 'Ask he/she about his/her feeling', 0, 1),
(10, 'Tell her/him you like them, and make a relationship', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Kelvin', 'kelvin@mail.com', 'kelvin'),
(2, 'Tan', 'tan@mail.com', 'tan'),
(5, 'tk', 'tk@mail.com', 'tk'),
(6, 'gina', 'ginaoke@mail.com', 'gina');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `progress3`
--
ALTER TABLE `progress3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `progress4`
--
ALTER TABLE `progress4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
