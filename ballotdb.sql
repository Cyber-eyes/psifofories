-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 11:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ballotdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ballot`
--

CREATE TABLE `ballot` (
  `idballot` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `canditate1` varchar(30) DEFAULT NULL,
  `count1` int(11) DEFAULT NULL,
  `canditate2` varchar(30) DEFAULT NULL,
  `count2` int(11) DEFAULT NULL,
  `canditate3` varchar(30) DEFAULT NULL,
  `count3` int(11) DEFAULT NULL,
  `canditate4` varchar(30) DEFAULT NULL,
  `count4` int(11) DEFAULT NULL,
  `canditate5` varchar(30) DEFAULT NULL,
  `count5` int(11) DEFAULT NULL,
  `canditate6` varchar(30) DEFAULT NULL,
  `count6` int(11) DEFAULT NULL,
  `canditate7` varchar(30) DEFAULT NULL,
  `count7` int(11) DEFAULT NULL,
  `canditate8` varchar(30) DEFAULT NULL,
  `count8` int(11) DEFAULT NULL,
  `canditate9` varchar(30) DEFAULT NULL,
  `count9` int(11) DEFAULT NULL,
  `canditate10` varchar(30) DEFAULT NULL,
  `count10` int(11) DEFAULT NULL,
  `canditate11` varchar(30) DEFAULT NULL,
  `count11` int(11) DEFAULT NULL,
  `canditate12` varchar(30) DEFAULT NULL,
  `count12` int(11) DEFAULT NULL,
  `canditate13` varchar(30) DEFAULT NULL,
  `count13` int(11) DEFAULT NULL,
  `canditate14` varchar(30) DEFAULT NULL,
  `count14` int(11) DEFAULT NULL,
  `canditate15` varchar(30) DEFAULT NULL,
  `count15` int(11) DEFAULT NULL,
  `canditate16` varchar(30) DEFAULT NULL,
  `count16` int(11) DEFAULT NULL,
  `canditate17` varchar(30) DEFAULT NULL,
  `count17` int(11) DEFAULT NULL,
  `canditate18` varchar(30) DEFAULT NULL,
  `count18` int(11) DEFAULT NULL,
  `canditate19` varchar(30) DEFAULT NULL,
  `count19` int(11) DEFAULT NULL,
  `canditate20` varchar(30) DEFAULT NULL,
  `count20` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ballot`
--

INSERT INTO `ballot` (`idballot`, `name`, `description`, `canditate1`, `count1`, `canditate2`, `count2`, `canditate3`, `count3`, `canditate4`, `count4`, `canditate5`, `count5`, `canditate6`, `count6`, `canditate7`, `count7`, `canditate8`, `count8`, `canditate9`, `count9`, `canditate10`, `count10`, `canditate11`, `count11`, `canditate12`, `count12`, `canditate13`, `count13`, `canditate14`, `count14`, `canditate15`, `count15`, `canditate16`, `count16`, `canditate17`, `count17`, `canditate18`, `count18`, `canditate19`, `count19`, `canditate20`, `count20`) VALUES
(5, 'movie', 'what movie do you prefer', 'avengers endgame', 6, 'real steel', 3, 'magnificent 7', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(6, 'food', 'what do you want to eat', 'pizza', 1, 'souvlakia', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `idvoter` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birthday` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`idvoter`, `name`, `surname`, `password`, `email`, `birthday`) VALUES
(1, 'big', 'brother', 'BIG123@@', 'big@brother.com', '1990-05-16'),
(2, 'Εμμανουήλ', 'Ματάκιας', 'MANOS123@', 'manos@matakias.com', '1995-05-16'),
(5, 'Jacob', 'Jacobson', 'JACOB123@', 'manos@matakias.com', '1997-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ballot`
--
ALTER TABLE `ballot`
  ADD PRIMARY KEY (`idballot`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`idvoter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ballot`
--
ALTER TABLE `ballot`
  MODIFY `idballot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `idvoter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
