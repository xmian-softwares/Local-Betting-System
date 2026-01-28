-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 08:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`User`, `Password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `bet`
--

CREATE TABLE `bet` (
  `Id` int(11) NOT NULL,
  `Home` varchar(255) NOT NULL,
  `Away` varchar(255) NOT NULL,
  `League` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Hidden` int(11) NOT NULL DEFAULT '0',
  `Home Win` varchar(255) NOT NULL,
  `Draw` varchar(255) NOT NULL,
  `Away Win` varchar(255) NOT NULL,
  `GG` varchar(255) NOT NULL,
  `No GG` varchar(255) NOT NULL,
  `FH Over 0.5` varchar(255) NOT NULL,
  `FH Over 1.5` varchar(255) NOT NULL,
  `FH Over 2.5` varchar(255) NOT NULL,
  `FH Under 0.5` varchar(255) NOT NULL,
  `FH Under 1.5` varchar(255) NOT NULL,
  `FH Under 2.5` varchar(255) NOT NULL,
  `Over 0.5` varchar(255) NOT NULL,
  `Over 1.5` varchar(255) NOT NULL,
  `Over 2.5` varchar(255) NOT NULL,
  `Over 3.5` varchar(255) NOT NULL,
  `Over 4.5` varchar(255) NOT NULL,
  `Under 0.5` varchar(255) NOT NULL,
  `Under 1.5` varchar(255) NOT NULL,
  `Under 2.5` varchar(255) NOT NULL,
  `Under 3.5` varchar(255) NOT NULL,
  `Under 4.5` varchar(255) NOT NULL,
  `Home Win Over 1.5` varchar(255) NOT NULL,
  `Home Win Over 2.5` varchar(255) NOT NULL,
  `Home Win Over 3.5` varchar(255) NOT NULL,
  `Home Win Over 4.5` varchar(255) NOT NULL,
  `Away Win Over 1.5` varchar(255) NOT NULL,
  `Away Win Over 2.5` varchar(255) NOT NULL,
  `Away Win Over 3.5` varchar(255) NOT NULL,
  `Away Win Over 4.5` varchar(255) NOT NULL,
  `FH Home Win` varchar(255) NOT NULL,
  `FH Draw` varchar(255) NOT NULL,
  `FH Away Win` varchar(255) NOT NULL,
  `SH Home Win` varchar(255) NOT NULL,
  `SH Draw` varchar(255) NOT NULL,
  `SH Away Win` varchar(255) NOT NULL,
  `Even` varchar(255) NOT NULL,
  `Odd` varchar(255) NOT NULL,
  `FH Most Goals` varchar(255) NOT NULL,
  `SH Most Goals` varchar(255) NOT NULL,
  `Home Win Or Draw` varchar(255) NOT NULL,
  `AwayWin Or Draw` varchar(255) NOT NULL,
  `GG Home` varchar(255) NOT NULL,
  `GG Draw` varchar(255) NOT NULL,
  `GG Away` varchar(255) NOT NULL,
  `VAR Yes` varchar(255) NOT NULL DEFAULT '1',
  `VAR No` varchar(255) NOT NULL DEFAULT '1',
  `Red Card Yes` varchar(255) NOT NULL,
  `Red Card No` varchar(255) NOT NULL,
  `15 Goal Yes` varchar(255) NOT NULL,
  `15 Goal No` varchar(255) NOT NULL,
  `FH Over 3.5` varchar(255) NOT NULL,
  `FH Under 3.5` varchar(255) NOT NULL,
  `Home Score First` varchar(255) NOT NULL,
  `Away Score First` varchar(255) NOT NULL,
  `1 Or 2` varchar(255) NOT NULL,
  `1 (0,1)` varchar(255) NOT NULL,
  `1 (0,2)` varchar(255) NOT NULL,
  `1 (0,3)` varchar(255) NOT NULL,
  `1 (0,4)` varchar(255) NOT NULL,
  `2 (1,0)` varchar(255) NOT NULL,
  `2 (2,0)` varchar(255) NOT NULL,
  `2 (3,0)` varchar(255) NOT NULL,
  `2 (4,0)` varchar(255) NOT NULL,
  `DNB Home` varchar(255) NOT NULL,
  `DNB Away` varchar(255) NOT NULL,
  `No GG Home` varchar(255) NOT NULL,
  `No GG Draw` varchar(255) NOT NULL,
  `No GG Away` varchar(255) NOT NULL,
  `SH Over 0.5` varchar(255) NOT NULL,
  `SH Over 1.5` varchar(255) NOT NULL,
  `SH Over 2.5` varchar(255) NOT NULL,
  `SH Over 3.5` varchar(255) NOT NULL,
  `SH Under 0.5` varchar(255) NOT NULL,
  `SH Under 1.5` varchar(255) NOT NULL,
  `SH Under 2.5` varchar(255) NOT NULL,
  `SH Under 3.5` varchar(255) NOT NULL,
  `Equal` varchar(255) NOT NULL,
  `Home Win Under 1.5` varchar(255) NOT NULL,
  `Home Win Under 2.5` varchar(255) NOT NULL,
  `Home Win Under 3.5` varchar(255) NOT NULL,
  `Home Win Under 4.5` varchar(255) NOT NULL,
  `Away Win Under 1.5` varchar(255) NOT NULL,
  `Away Win Under 2.5` varchar(255) NOT NULL,
  `Away Win Under 3.5` varchar(255) NOT NULL,
  `Away Win Under 4.5` varchar(255) NOT NULL,
  `Draw Over 1.5` varchar(255) NOT NULL,
  `Draw Over 2.5` varchar(255) NOT NULL,
  `Draw Over 3.5` varchar(255) NOT NULL,
  `Draw Over 4.5` varchar(255) NOT NULL,
  `Draw Under 1.5` varchar(255) NOT NULL,
  `Draw Under 2.5` varchar(255) NOT NULL,
  `Draw Under 3.5` varchar(255) NOT NULL,
  `Draw Under 4.5` varchar(255) NOT NULL,
  `1/1` varchar(255) NOT NULL,
  `1/x` varchar(255) NOT NULL,
  `1/2` varchar(255) NOT NULL,
  `x/1` varchar(255) NOT NULL,
  `x/x` varchar(255) NOT NULL,
  `x/2` varchar(255) NOT NULL,
  `2/1` varchar(255) NOT NULL,
  `2/x` varchar(255) NOT NULL,
  `2/2` varchar(255) NOT NULL,
  `0-0` varchar(255) NOT NULL,
  `0-1` varchar(255) NOT NULL,
  `0-2` varchar(255) NOT NULL,
  `0-3` varchar(255) NOT NULL,
  `0-4` varchar(255) NOT NULL,
  `0-5` varchar(255) NOT NULL,
  `1-0` varchar(255) NOT NULL,
  `1-1` varchar(255) NOT NULL,
  `1-2` varchar(255) NOT NULL,
  `1-3` varchar(255) NOT NULL,
  `1-4` varchar(255) NOT NULL,
  `1-5` varchar(255) NOT NULL,
  `2-0` varchar(255) NOT NULL,
  `2-1` varchar(255) NOT NULL,
  `2-2` varchar(255) NOT NULL,
  `2-3` varchar(255) NOT NULL,
  `2-4` varchar(255) NOT NULL,
  `2-5` varchar(255) NOT NULL,
  `3-0` varchar(255) NOT NULL,
  `3-1` varchar(255) NOT NULL,
  `3-2` varchar(255) NOT NULL,
  `3-3` varchar(255) NOT NULL,
  `3-4` varchar(255) NOT NULL,
  `3-5` varchar(255) NOT NULL,
  `4-0` varchar(255) NOT NULL,
  `4-1` varchar(255) NOT NULL,
  `4-2` varchar(255) NOT NULL,
  `4-3` varchar(255) NOT NULL,
  `4-4` varchar(255) NOT NULL,
  `4-5` varchar(255) NOT NULL,
  `5-0` varchar(255) NOT NULL,
  `5-1` varchar(255) NOT NULL,
  `5-2` varchar(255) NOT NULL,
  `5-3` varchar(255) NOT NULL,
  `5-4` varchar(255) NOT NULL,
  `5-5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bet`
--

INSERT INTO `bet` (`Id`, `Home`, `Away`, `League`, `Date`, `Hidden`, `Home Win`, `Draw`, `Away Win`, `GG`, `No GG`, `FH Over 0.5`, `FH Over 1.5`, `FH Over 2.5`, `FH Under 0.5`, `FH Under 1.5`, `FH Under 2.5`, `Over 0.5`, `Over 1.5`, `Over 2.5`, `Over 3.5`, `Over 4.5`, `Under 0.5`, `Under 1.5`, `Under 2.5`, `Under 3.5`, `Under 4.5`, `Home Win Over 1.5`, `Home Win Over 2.5`, `Home Win Over 3.5`, `Home Win Over 4.5`, `Away Win Over 1.5`, `Away Win Over 2.5`, `Away Win Over 3.5`, `Away Win Over 4.5`, `FH Home Win`, `FH Draw`, `FH Away Win`, `SH Home Win`, `SH Draw`, `SH Away Win`, `Even`, `Odd`, `FH Most Goals`, `SH Most Goals`, `Home Win Or Draw`, `AwayWin Or Draw`, `GG Home`, `GG Draw`, `GG Away`, `VAR Yes`, `VAR No`, `Red Card Yes`, `Red Card No`, `15 Goal Yes`, `15 Goal No`, `FH Over 3.5`, `FH Under 3.5`, `Home Score First`, `Away Score First`, `1 Or 2`, `1 (0,1)`, `1 (0,2)`, `1 (0,3)`, `1 (0,4)`, `2 (1,0)`, `2 (2,0)`, `2 (3,0)`, `2 (4,0)`, `DNB Home`, `DNB Away`, `No GG Home`, `No GG Draw`, `No GG Away`, `SH Over 0.5`, `SH Over 1.5`, `SH Over 2.5`, `SH Over 3.5`, `SH Under 0.5`, `SH Under 1.5`, `SH Under 2.5`, `SH Under 3.5`, `Equal`, `Home Win Under 1.5`, `Home Win Under 2.5`, `Home Win Under 3.5`, `Home Win Under 4.5`, `Away Win Under 1.5`, `Away Win Under 2.5`, `Away Win Under 3.5`, `Away Win Under 4.5`, `Draw Over 1.5`, `Draw Over 2.5`, `Draw Over 3.5`, `Draw Over 4.5`, `Draw Under 1.5`, `Draw Under 2.5`, `Draw Under 3.5`, `Draw Under 4.5`, `1/1`, `1/x`, `1/2`, `x/1`, `x/x`, `x/2`, `2/1`, `2/x`, `2/2`, `0-0`, `0-1`, `0-2`, `0-3`, `0-4`, `0-5`, `1-0`, `1-1`, `1-2`, `1-3`, `1-4`, `1-5`, `2-0`, `2-1`, `2-2`, `2-3`, `2-4`, `2-5`, `3-0`, `3-1`, `3-2`, `3-3`, `3-4`, `3-5`, `4-0`, `4-1`, `4-2`, `4-3`, `4-4`, `4-5`, `5-0`, `5-1`, `5-2`, `5-3`, `5-4`, `5-5`) VALUES
(36, 'Spain A', 'Spain B', 'Champions League', '2022-09-20 At 17:56', 0, '1.45', '2.63', '1.92', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1.11', '1.34', '1.83', '1.65', '1.46', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1.98', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1.87', '1.45', '1.22', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(37, 'Liverpool', 'Manchester', 'Champions League', '2022-09-21 At 20:00', 0, '1.45', '1.54', '1.65', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(38, 'Juvenus', 'Roma', 'Champions League', '2022-09-22 At 22:00', 0, '1.45', '1.54', '1.65', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bet_all`
--

CREATE TABLE `bet_all` (
  `Id` int(11) NOT NULL,
  `Home` varchar(255) NOT NULL,
  `Away` varchar(255) NOT NULL,
  `League` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Home Win` varchar(255) NOT NULL,
  `Draw` varchar(255) NOT NULL,
  `Away Win` varchar(255) NOT NULL,
  `GG` varchar(255) NOT NULL,
  `No GG` varchar(255) NOT NULL,
  `FH Over 0.5` varchar(255) NOT NULL,
  `FH Over 1.5` varchar(255) NOT NULL,
  `FH Over 2.5` varchar(255) NOT NULL,
  `FH Under 0.5` varchar(255) NOT NULL,
  `FH Under 1.5` varchar(255) NOT NULL,
  `FH Under 2.5` varchar(255) NOT NULL,
  `Over 0.5` varchar(255) NOT NULL,
  `Over 1.5` varchar(255) NOT NULL,
  `Over 2.5` varchar(255) NOT NULL,
  `Over 3.5` varchar(255) NOT NULL,
  `Over 4.5` varchar(255) NOT NULL,
  `Under 0.5` varchar(255) NOT NULL,
  `Under 1.5` varchar(255) NOT NULL,
  `Under 2.5` varchar(255) NOT NULL,
  `Under 3.5` varchar(255) NOT NULL,
  `Under 4.5` varchar(255) NOT NULL,
  `Home Win Over 1.5` varchar(255) NOT NULL,
  `Home Win Over 2.5` varchar(255) NOT NULL,
  `Home Win Over 3.5` varchar(255) NOT NULL,
  `Home Win Over 4.5` varchar(255) NOT NULL,
  `Away Win Over 1.5` varchar(255) NOT NULL,
  `Away Win Over 2.5` varchar(255) NOT NULL,
  `Away Win Over 3.5` varchar(255) NOT NULL,
  `Away Win Over 4.5` varchar(255) NOT NULL,
  `FH Home Win` varchar(255) NOT NULL,
  `FH Draw` varchar(255) NOT NULL,
  `FH Away Win` varchar(255) NOT NULL,
  `SH Home Win` varchar(255) NOT NULL,
  `SH Draw` varchar(255) NOT NULL,
  `SH Away Win` varchar(255) NOT NULL,
  `Even` varchar(255) NOT NULL,
  `Odd` varchar(255) NOT NULL,
  `FH Most Goals` varchar(255) NOT NULL,
  `SH Most Goals` varchar(255) NOT NULL,
  `Home Win Or Draw` varchar(255) NOT NULL,
  `AwayWin Or Draw` varchar(255) NOT NULL,
  `GG Home` varchar(255) NOT NULL,
  `GG Draw` varchar(255) NOT NULL,
  `GG Away` varchar(255) NOT NULL,
  `VAR Yes` varchar(255) NOT NULL DEFAULT '1',
  `VAR No` varchar(255) NOT NULL DEFAULT '1',
  `Red Card Yes` varchar(255) NOT NULL,
  `Red Card No` varchar(255) NOT NULL,
  `15 Goal Yes` varchar(255) NOT NULL,
  `15 Goal No` varchar(255) NOT NULL,
  `FH Over 3.5` varchar(255) NOT NULL,
  `FH Under 3.5` varchar(255) NOT NULL,
  `Home Score First` varchar(255) NOT NULL,
  `Away Score First` varchar(255) NOT NULL,
  `1 Or 2` varchar(255) NOT NULL,
  `1 (0,1)` varchar(255) NOT NULL,
  `1 (0,2)` varchar(255) NOT NULL,
  `1 (0,3)` varchar(255) NOT NULL,
  `1 (0,4)` varchar(255) NOT NULL,
  `2 (1,0)` varchar(255) NOT NULL,
  `2 (2,0)` varchar(255) NOT NULL,
  `2 (3,0)` varchar(255) NOT NULL,
  `2 (4,0)` varchar(255) NOT NULL,
  `DNB Home` varchar(255) NOT NULL,
  `DNB Away` varchar(255) NOT NULL,
  `No GG Home` varchar(255) NOT NULL,
  `No GG Draw` varchar(255) NOT NULL,
  `No GG Away` varchar(255) NOT NULL,
  `SH Over 0.5` varchar(255) NOT NULL,
  `SH Over 1.5` varchar(255) NOT NULL,
  `SH Over 2.5` varchar(255) NOT NULL,
  `SH Over 3.5` varchar(255) NOT NULL,
  `SH Under 0.5` varchar(255) NOT NULL,
  `SH Under 1.5` varchar(255) NOT NULL,
  `SH Under 2.5` varchar(255) NOT NULL,
  `SH Under 3.5` varchar(255) NOT NULL,
  `Equal` varchar(255) NOT NULL,
  `Home Win Under 1.5` varchar(255) NOT NULL,
  `Home Win Under 2.5` varchar(255) NOT NULL,
  `Home Win Under 3.5` varchar(255) NOT NULL,
  `Home Win Under 4.5` varchar(255) NOT NULL,
  `Away Win Under 1.5` varchar(255) NOT NULL,
  `Away Win Under 2.5` varchar(255) NOT NULL,
  `Away Win Under 3.5` varchar(255) NOT NULL,
  `Away Win Under 4.5` varchar(255) NOT NULL,
  `Draw Over 1.5` varchar(255) NOT NULL,
  `Draw Over 2.5` varchar(255) NOT NULL,
  `Draw Over 3.5` varchar(255) NOT NULL,
  `Draw Over 4.5` varchar(255) NOT NULL,
  `Draw Under 1.5` varchar(255) NOT NULL,
  `Draw Under 2.5` varchar(255) NOT NULL,
  `Draw Under 3.5` varchar(255) NOT NULL,
  `Draw Under 4.5` varchar(255) NOT NULL,
  `1/1` varchar(255) NOT NULL,
  `1/x` varchar(255) NOT NULL,
  `1/2` varchar(255) NOT NULL,
  `x/1` varchar(255) NOT NULL,
  `x/x` varchar(255) NOT NULL,
  `x/2` varchar(255) NOT NULL,
  `2/1` varchar(255) NOT NULL,
  `2/x` varchar(255) NOT NULL,
  `2/2` varchar(255) NOT NULL,
  `0-0` varchar(255) NOT NULL,
  `0-1` varchar(255) NOT NULL,
  `0-2` varchar(255) NOT NULL,
  `0-3` varchar(255) NOT NULL,
  `0-4` varchar(255) NOT NULL,
  `0-5` varchar(255) NOT NULL,
  `1-0` varchar(255) NOT NULL,
  `1-1` varchar(255) NOT NULL,
  `1-2` varchar(255) NOT NULL,
  `1-3` varchar(255) NOT NULL,
  `1-4` varchar(255) NOT NULL,
  `1-5` varchar(255) NOT NULL,
  `2-0` varchar(255) NOT NULL,
  `2-1` varchar(255) NOT NULL,
  `2-2` varchar(255) NOT NULL,
  `2-3` varchar(255) NOT NULL,
  `2-4` varchar(255) NOT NULL,
  `2-5` varchar(255) NOT NULL,
  `3-0` varchar(255) NOT NULL,
  `3-1` varchar(255) NOT NULL,
  `3-2` varchar(255) NOT NULL,
  `3-3` varchar(255) NOT NULL,
  `3-4` varchar(255) NOT NULL,
  `3-5` varchar(255) NOT NULL,
  `4-0` varchar(255) NOT NULL,
  `4-1` varchar(255) NOT NULL,
  `4-2` varchar(255) NOT NULL,
  `4-3` varchar(255) NOT NULL,
  `4-4` varchar(255) NOT NULL,
  `4-5` varchar(255) NOT NULL,
  `5-0` varchar(255) NOT NULL,
  `5-1` varchar(255) NOT NULL,
  `5-2` varchar(255) NOT NULL,
  `5-3` varchar(255) NOT NULL,
  `5-4` varchar(255) NOT NULL,
  `5-5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bet_all`
--

INSERT INTO `bet_all` (`Id`, `Home`, `Away`, `League`, `Date`, `Home Win`, `Draw`, `Away Win`, `GG`, `No GG`, `FH Over 0.5`, `FH Over 1.5`, `FH Over 2.5`, `FH Under 0.5`, `FH Under 1.5`, `FH Under 2.5`, `Over 0.5`, `Over 1.5`, `Over 2.5`, `Over 3.5`, `Over 4.5`, `Under 0.5`, `Under 1.5`, `Under 2.5`, `Under 3.5`, `Under 4.5`, `Home Win Over 1.5`, `Home Win Over 2.5`, `Home Win Over 3.5`, `Home Win Over 4.5`, `Away Win Over 1.5`, `Away Win Over 2.5`, `Away Win Over 3.5`, `Away Win Over 4.5`, `FH Home Win`, `FH Draw`, `FH Away Win`, `SH Home Win`, `SH Draw`, `SH Away Win`, `Even`, `Odd`, `FH Most Goals`, `SH Most Goals`, `Home Win Or Draw`, `AwayWin Or Draw`, `GG Home`, `GG Draw`, `GG Away`, `VAR Yes`, `VAR No`, `Red Card Yes`, `Red Card No`, `15 Goal Yes`, `15 Goal No`, `FH Over 3.5`, `FH Under 3.5`, `Home Score First`, `Away Score First`, `1 Or 2`, `1 (0,1)`, `1 (0,2)`, `1 (0,3)`, `1 (0,4)`, `2 (1,0)`, `2 (2,0)`, `2 (3,0)`, `2 (4,0)`, `DNB Home`, `DNB Away`, `No GG Home`, `No GG Draw`, `No GG Away`, `SH Over 0.5`, `SH Over 1.5`, `SH Over 2.5`, `SH Over 3.5`, `SH Under 0.5`, `SH Under 1.5`, `SH Under 2.5`, `SH Under 3.5`, `Equal`, `Home Win Under 1.5`, `Home Win Under 2.5`, `Home Win Under 3.5`, `Home Win Under 4.5`, `Away Win Under 1.5`, `Away Win Under 2.5`, `Away Win Under 3.5`, `Away Win Under 4.5`, `Draw Over 1.5`, `Draw Over 2.5`, `Draw Over 3.5`, `Draw Over 4.5`, `Draw Under 1.5`, `Draw Under 2.5`, `Draw Under 3.5`, `Draw Under 4.5`, `1/1`, `1/x`, `1/2`, `x/1`, `x/x`, `x/2`, `2/1`, `2/x`, `2/2`, `0-0`, `0-1`, `0-2`, `0-3`, `0-4`, `0-5`, `1-0`, `1-1`, `1-2`, `1-3`, `1-4`, `1-5`, `2-0`, `2-1`, `2-2`, `2-3`, `2-4`, `2-5`, `3-0`, `3-1`, `3-2`, `3-3`, `3-4`, `3-5`, `4-0`, `4-1`, `4-2`, `4-3`, `4-4`, `4-5`, `5-0`, `5-1`, `5-2`, `5-3`, `5-4`, `5-5`) VALUES
(2, 'Real Madrid', 'Barcelona', 'La Liga', '2022-08-28 At 08:49', '1.2', '1.3', '1.6', '1.5', '2.1', '1.7', '1.5', '1.5', '1.4', '2.5', '3.9', '1.2', '1.3', '3.4', '1.5', '2.7', '1.4', '1.5', '1.8', '1.7', '1.9', '1.9', '1.5', '1.3', '1.7', '2.3', '3.1', '1.5', '2.3', '1.3', '1.4', '1.6', '1', '1.9', '1.4', '1.7', '2.1', '3.1', '2.7', '1.1', '1.9', '1.8', '1.6', '2.5', '1', '1', '3.2', '2.9', '1.6', '1.2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Spain A', 'Spain B', 'La Liga', '2022-09-03 At 18:41', '1.2', '2.3', '1.9', '1.5', '2.1', '2.3', '2.6', '2.5', '1.4', '2.5', '3.9', '1.2', '1.3', '3.4', '1.9', '2.7', '2.1', '1.5', '3.1', '1.7', '1.9', '2.3', '1.8', '1.3', '1.7', '1.4', '3.1', '1.8', '2.6', '1.3', '1.4', '1.6', '1.6', '1.9', '1.4', '1.7', '2.1', '3.1', '2.7', '1.1', '1.9', '1.8', '1.6', '2.5', '1', '1', '3.2', '2.9', '1.6', '1.2', '1.7', '5.8', '1.7', '1.3', '1.1', '1.1', '1.9', '1.8', '1.7', '1.6', '2.9', '1.9', '2.1', '8', '3.7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Spain A', 'Spain B', 'La Liga', '2022-09-03 At 20:37', '1.2', '1.5', '1.5', '1.5', '1.6', '2.3', '2.6', '2.5', '1.4', '2.5', '3.9', '1.2', '1.3', '3.4', '1.9', '2.7', '2.1', '1.6', '1.8', '1.7', '1.9', '1.9', '1.8', '2.0', '1.7', '2.3', '1.3', '1.8', '2.3', '1.3', '1.4', '1.6', '1.6', '1.9', '1.4', '1.7', '2.1', '3.1', '2.7', '1.1', '1.9', '1.8', '1.6', '2.5', '1', '1', '3.2', '2.9', '1.6', '1.2', '1.7', '5.8', '1.7', '1.3', '3.7', '1.1', '1.9', '1.8', '1.7', '1.6', '2.9', '1.9', '2.1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Intermillan', 'Roma', 'Seria A', '2022-09-17 At 09:40', '1.2', '1.3', '1.5', '1.5', '2.1', '2.3', '2.6', '1.7', '1.4', '2.5', '3.9', '1.2', '1.3', '3.4', '1.5', '2.7', '2.1', '1.6', '1.8', '1.7', '1.9', '2.3', '1.8', '2.0', '1.7', '1.4', '3.1', '1.5', '2.6', '1.3', '1.4', '1.6', '1', '1', '1', '1.7', '2.1', '3.1', '2.7', '1.1', '1.9', '1.8', '1.6', '2.5', '1', '1', '1', '1', '1', '1', '1.7', '5.8', '1.7', '1.3', '3.7', '1.1', '1.9', '1.8', '1.7', '1.6', '2.9', '1.9', '2.1', '1', '1', '2.1', '3.6', '2.5', '1.4', '1.6', '1.8', '1.2', '5.4', '1.4', '2.6', '3.4', '5.7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Europa 1', 'Europa 2', 'European League', '2022-09-13 At 20:02', '1.2', '1.5', '1.6', '1.5', '2.1', '2.3', '1.5', '2.5', '1.4', '2.5', '3.9', '1.2', '1.3', '3.4', '1.9', '2.7', '1.4', '1.6', '1.8', '1.7', '1.9', '1.9', '1.5', '2.0', '1.7', '2.3', '3.1', '1.8', '2.3', '1.3', '1.4', '1.6', '1', '1', '1', '1.7', '2.1', '3.1', '2.7', '1.1', '1.9', '1.8', '2', '2.5', '1', '1', '1', '1', '1', '1', '1.7', '5.8', '1.7', '1.3', '3.7', '1.1', '1.9', '1.8', '1.7', '1.6', '2.9', '1.9', '2.1', '1', '1', '2.1', '3.6', '2.5', '1.4', '1.6', '1.8', '1.2', '5.4', '1.4', '2.6', '3.4', '5.7', '1.5', '1.7', '1.9', '2.1', '4.5', '5.6', '6.7', '7.8', '2.3', '3.5', '2.7', '1.8', '5.3', '6.7', '1.7', '2.6', '2.5', '3.3', '3.1', '1.4', '2.5', '4.2', '1.3', '3.2', '4.3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(7, 'Spain A', 'Spain B', 'Champions League', '2022-09-20 At 17:56', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(8, 'Liverpool', 'Manchester', 'Champions League', '2022-09-21 At 20:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(9, 'Juvenus', 'Roma', 'Champions League', '2022-09-22 At 22:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `us_id` varchar(255) NOT NULL,
  `bet_id` varchar(255) NOT NULL,
  `Home Team` varchar(255) NOT NULL,
  `Away Team` varchar(255) NOT NULL,
  `Game Time` varchar(255) NOT NULL,
  `League` varchar(255) NOT NULL,
  `Odd` varchar(255) NOT NULL,
  `Described` longtext NOT NULL,
  `DNB` int(11) NOT NULL DEFAULT '0',
  `Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`us_id`, `bet_id`, `Home Team`, `Away Team`, `Game Time`, `League`, `Odd`, `Described`, `DNB`, `Code`) VALUES
('1', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1.45', 'Spain A Vs Spain B -- Home Wins', 0, '001'),
('1', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.54', 'Liverpool Vs Manchester -- Draw', 0, '002'),
('1', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.65', 'Juvenus Vs Roma -- Away Wins', 0, '003'),
('2', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '2.63', 'Spain A Vs Spain B -- Draw', 0, '002'),
('2', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.54', 'Liverpool Vs Manchester -- Draw', 0, '002'),
('2', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.54', 'Juvenus Vs Roma -- Draw', 0, '002'),
('Milkias', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1.92', 'Spain A Vs Spain B -- Away Wins', 0, '003'),
('Milkias', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.45', 'Liverpool Vs Manchester -- Home Wins', 0, '001'),
('Milkias', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.54', 'Juvenus Vs Roma -- Draw', 0, '002'),
('Waltom', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '2.63', 'Spain A Vs Spain B -- Draw', 0, '002'),
('Waltom', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.45', 'Liverpool Vs Manchester -- Home Wins', 0, '001'),
('Waltom', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.45', 'Juvenus Vs Roma -- Home Wins', 0, '001'),
('Milkias6', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.45', 'Liverpool Vs Manchester -- Home Wins', 0, '001'),
('Milkias6', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.54', 'Juvenus Vs Roma -- Draw', 0, '002'),
('8', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1', 'Spain A Vs Spain B -- No GG', 0, '005'),
('8', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1', 'Liverpool Vs Manchester -- GG', 0, '004'),
('8', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.45', 'Juvenus Vs Roma -- Home Wins', 0, '001'),
('111', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1.45', 'Spain A Vs Spain B -- Home Wins', 0, '001'),
('111', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.45', 'Liverpool Vs Manchester -- Home Wins', 0, '001'),
('111', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.45', 'Juvenus Vs Roma -- Home Wins', 0, '001'),
('24', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1.45', 'Spain A Vs Spain B -- Home Wins', 0, '001'),
('Banshee', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1.45', 'Spain A Vs Spain B -- Home Wins', 0, '001'),
('Banshee', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.54', 'Liverpool Vs Manchester -- Draw', 0, '002'),
('Banshee', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.45', 'Juvenus Vs Roma -- Home Wins', 0, '001'),
('2417', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '1.92', 'Spain A Vs Spain B -- Away Wins', 0, '003'),
('2417', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.45', 'Liverpool Vs Manchester -- Home Wins', 0, '001'),
('2417', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.54', 'Juvenus Vs Roma -- Draw', 0, '002'),
('mi', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '2.63', 'Spain A Vs Spain B -- Draw', 0, '002'),
('mi', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.54', 'Liverpool Vs Manchester -- Draw', 0, '002'),
('mi', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.45', 'Juvenus Vs Roma -- Home Wins', 0, '001'),
('21', '36', 'Spain A', 'Spain B', '2022-09-20 At 17:56', 'Champions League', '2.63', 'Spain A Vs Spain B -- Draw', 0, '002'),
('21', '37', 'Liverpool', 'Manchester', '2022-09-21 At 20:00', 'Champions League', '1.54', 'Liverpool Vs Manchester -- Draw', 0, '002'),
('21', '38', 'Juvenus', 'Roma', '2022-09-22 At 22:00', 'Champions League', '1.54', 'Juvenus Vs Roma -- Draw', 0, '002');

-- --------------------------------------------------------

--
-- Table structure for table `permanent`
--

CREATE TABLE `permanent` (
  `Id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent`
--

INSERT INTO `permanent` (`Id`, `User`, `Password`, `Amount`) VALUES
(27, 'Milkias', '1234', '200');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Date` varchar(255) NOT NULL,
  `League` varchar(255) NOT NULL,
  `Home Team` varchar(255) NOT NULL,
  `Away Team` varchar(255) NOT NULL,
  `Home Goal` varchar(255) NOT NULL,
  `Away Goal` varchar(255) NOT NULL,
  `FH Home Goal` varchar(255) NOT NULL,
  `SH Home Goal` varchar(255) NOT NULL,
  `FH Away Goal` varchar(255) NOT NULL,
  `SH Away Goal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Date`, `League`, `Home Team`, `Away Team`, `Home Goal`, `Away Goal`, `FH Home Goal`, `SH Home Goal`, `FH Away Goal`, `SH Away Goal`) VALUES
('2022-09-20 At 17:56', 'Champions League', 'Spain A', 'Spain B', '5', '4', '2', '3', '1', '3'),
('2022-09-21 At 20:00', 'Champions League', 'Liverpool', 'Manchester', '4', '6', '2', '2', '3', '3'),
('2022-09-22 At 22:00', 'Champions League', 'Juvenus', 'Roma', '3', '3', '1', '2', '0', '3'),
('2022-09-20 At 17:56', 'Champions League', 'Spain A', 'Spain B', '2', '4', '1', '1', '2', '2'),
('2022-09-20 At 17:56', 'Champions League', 'Spain A', 'Spain B', '9', '1', '9', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `result_chk`
--

CREATE TABLE `result_chk` (
  `Date` varchar(255) NOT NULL,
  `League` varchar(255) NOT NULL,
  `Home Team` varchar(255) NOT NULL,
  `Away Team` varchar(255) NOT NULL,
  `001` varchar(255) NOT NULL,
  `002` varchar(255) NOT NULL,
  `003` varchar(255) NOT NULL,
  `004` varchar(255) NOT NULL,
  `005` varchar(255) NOT NULL,
  `006` varchar(255) NOT NULL,
  `007` varchar(255) NOT NULL,
  `008` varchar(255) NOT NULL,
  `009` varchar(255) NOT NULL,
  `010` varchar(255) NOT NULL,
  `011` varchar(255) NOT NULL,
  `012` varchar(255) NOT NULL,
  `013` varchar(255) NOT NULL,
  `014` varchar(255) NOT NULL,
  `015` varchar(255) NOT NULL,
  `016` varchar(255) NOT NULL,
  `017` varchar(255) NOT NULL,
  `018` varchar(255) NOT NULL,
  `019` varchar(255) NOT NULL,
  `020` varchar(255) NOT NULL,
  `021` varchar(255) NOT NULL,
  `022` varchar(255) NOT NULL,
  `023` varchar(255) NOT NULL,
  `024` varchar(255) NOT NULL,
  `025` varchar(255) NOT NULL,
  `026` varchar(255) NOT NULL,
  `027` varchar(255) NOT NULL,
  `028` varchar(255) NOT NULL,
  `029` varchar(255) NOT NULL,
  `030` varchar(255) NOT NULL,
  `031` varchar(255) NOT NULL,
  `032` varchar(255) NOT NULL,
  `033` varchar(255) NOT NULL,
  `034` varchar(255) NOT NULL,
  `035` varchar(255) NOT NULL,
  `036` varchar(255) NOT NULL,
  `037` varchar(255) NOT NULL,
  `038` varchar(255) NOT NULL,
  `039` varchar(255) NOT NULL,
  `040` varchar(255) NOT NULL,
  `041` varchar(255) NOT NULL,
  `042` varchar(255) NOT NULL,
  `043` varchar(255) NOT NULL,
  `044` varchar(255) NOT NULL,
  `045` varchar(255) NOT NULL,
  `046` varchar(255) NOT NULL,
  `047` varchar(255) NOT NULL,
  `048` varchar(255) NOT NULL,
  `049` varchar(255) NOT NULL,
  `050` varchar(255) NOT NULL,
  `051` varchar(255) NOT NULL,
  `052` varchar(255) NOT NULL,
  `053` varchar(255) NOT NULL,
  `054` varchar(255) NOT NULL,
  `055` varchar(255) NOT NULL,
  `056` varchar(255) NOT NULL,
  `057` varchar(255) NOT NULL,
  `058` varchar(255) NOT NULL,
  `059` varchar(255) NOT NULL,
  `060` varchar(255) NOT NULL,
  `061` varchar(255) NOT NULL,
  `062` varchar(255) NOT NULL,
  `063` varchar(255) NOT NULL,
  `064` varchar(255) NOT NULL,
  `065` varchar(255) NOT NULL,
  `066` varchar(255) NOT NULL,
  `067` varchar(255) NOT NULL,
  `068` varchar(255) NOT NULL,
  `069` varchar(255) NOT NULL,
  `070` varchar(255) NOT NULL,
  `071` varchar(255) NOT NULL,
  `072` varchar(255) NOT NULL,
  `073` varchar(255) NOT NULL,
  `074` varchar(255) NOT NULL,
  `075` varchar(255) NOT NULL,
  `076` varchar(255) NOT NULL,
  `077` varchar(255) NOT NULL,
  `078` varchar(255) NOT NULL,
  `079` varchar(255) NOT NULL,
  `080` varchar(255) NOT NULL,
  `081` varchar(255) NOT NULL,
  `082` varchar(255) NOT NULL,
  `083` varchar(255) NOT NULL,
  `084` varchar(255) NOT NULL,
  `085` varchar(255) NOT NULL,
  `086` varchar(255) NOT NULL,
  `087` varchar(255) NOT NULL,
  `088` varchar(255) NOT NULL,
  `089` varchar(255) NOT NULL,
  `090` varchar(255) NOT NULL,
  `091` varchar(255) NOT NULL,
  `092` varchar(255) NOT NULL,
  `093` varchar(255) NOT NULL,
  `094` varchar(255) NOT NULL,
  `095` varchar(255) NOT NULL,
  `096` varchar(255) NOT NULL,
  `097` varchar(255) NOT NULL,
  `098` varchar(255) NOT NULL,
  `099` varchar(255) NOT NULL,
  `100` varchar(255) NOT NULL,
  `101` varchar(255) NOT NULL,
  `102` varchar(255) NOT NULL,
  `103` varchar(255) NOT NULL,
  `104` varchar(255) NOT NULL,
  `105` varchar(255) NOT NULL,
  `106` varchar(255) NOT NULL,
  `107` varchar(255) NOT NULL,
  `108` varchar(255) NOT NULL,
  `109` varchar(255) NOT NULL,
  `110` varchar(255) NOT NULL,
  `111` varchar(255) NOT NULL,
  `112` varchar(255) NOT NULL,
  `113` varchar(255) NOT NULL,
  `114` varchar(255) NOT NULL,
  `115` varchar(255) NOT NULL,
  `116` varchar(255) NOT NULL,
  `117` varchar(255) NOT NULL,
  `118` varchar(255) NOT NULL,
  `119` varchar(255) NOT NULL,
  `120` varchar(255) NOT NULL,
  `121` varchar(255) NOT NULL,
  `122` varchar(255) NOT NULL,
  `123` varchar(255) NOT NULL,
  `124` varchar(255) NOT NULL,
  `125` varchar(255) NOT NULL,
  `126` varchar(255) NOT NULL,
  `127` varchar(255) NOT NULL,
  `128` varchar(255) NOT NULL,
  `129` varchar(255) NOT NULL,
  `130` varchar(255) NOT NULL,
  `131` varchar(255) NOT NULL,
  `132` varchar(255) NOT NULL,
  `133` varchar(255) NOT NULL,
  `134` varchar(255) NOT NULL,
  `135` varchar(255) NOT NULL,
  `136` varchar(255) NOT NULL,
  `137` varchar(255) NOT NULL,
  `138` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_chk`
--

INSERT INTO `result_chk` (`Date`, `League`, `Home Team`, `Away Team`, `001`, `002`, `003`, `004`, `005`, `006`, `007`, `008`, `009`, `010`, `011`, `012`, `013`, `014`, `015`, `016`, `017`, `018`, `019`, `020`, `021`, `022`, `023`, `024`, `025`, `026`, `027`, `028`, `029`, `030`, `031`, `032`, `033`, `034`, `035`, `036`, `037`, `038`, `039`, `040`, `041`, `042`, `043`, `044`, `045`, `046`, `047`, `048`, `049`, `050`, `051`, `052`, `053`, `054`, `055`, `056`, `057`, `058`, `059`, `060`, `061`, `062`, `063`, `064`, `065`, `066`, `067`, `068`, `069`, `070`, `071`, `072`, `073`, `074`, `075`, `076`, `077`, `078`, `079`, `080`, `081`, `082`, `083`, `084`, `085`, `086`, `087`, `088`, `089`, `090`, `091`, `092`, `093`, `094`, `095`, `096`, `097`, `098`, `099`, `100`, `101`, `102`, `103`, `104`, `105`, `106`, `107`, `108`, `109`, `110`, `111`, `112`, `113`, `114`, `115`, `116`, `117`, `118`, `119`, `120`, `121`, `122`, `123`, `124`, `125`, `126`, `127`, `128`, `129`, `130`, `131`, `132`, `133`, `134`, `135`, `136`, `137`, `138`) VALUES
('2022-09-21 At 20:00', 'Champions League', 'Liverpool', 'Manchester', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('2022-09-22 At 22:00', 'Champions League', 'Juvenus', 'Roma', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('2022-09-20 At 17:56', 'Champions League', 'Spain A', 'Spain B', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sub_admins`
--

CREATE TABLE `sub_admins` (
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_admins`
--

INSERT INTO `sub_admins` (`User`, `Password`) VALUES
('Milkias', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL DEFAULT '1',
  `Odd` varchar(255) NOT NULL,
  `Access` int(11) NOT NULL DEFAULT '0',
  `Described` longtext,
  `Games` int(11) NOT NULL DEFAULT '0',
  `Click` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Amount`, `Odd`, `Access`, `Described`, `Games`, `Click`) VALUES
('1', 100, '3.68445', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Away Wins', 3, 1),
('111', 100, '3.048625', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins', 3, 1),
('12', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('2', 100, '6.237308', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Draw', 3, 1),
('21', 100, '6.237308', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Draw', 3, 1),
('24', 70, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('2417', 100, '4.28736', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw', 3, 1),
('8', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('90', 100, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('AllAmerican10', 500, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('Banshee', 100, '3.23785', 0, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Home Wins', 3, 1),
('Banshee19', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('BlindSpot20', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('er', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('mi', 100, '5.87279', 0, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Home Wins', 3, 1),
('Milkias', 80, '4.28736', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw', 3, 1),
('Milkias09', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('Milkias6', 100, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('Milkias7', 1, '1', 0, 'List Of Games and Bets<br>\n', 0, 0),
('Waltom', 20, '2.1025', 1, 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Hand Cape 1 (0,1)<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usr_tmp`
--

CREATE TABLE `usr_tmp` (
  `Date` varchar(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL DEFAULT '1',
  `Odd` varchar(255) NOT NULL,
  `Games` varchar(255) NOT NULL DEFAULT '0',
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_tmp`
--

INSERT INTO `usr_tmp` (`Date`, `User`, `Amount`, `Odd`, `Games`, `Description`) VALUES
('2022-08-29', 'User Milkias', '100', '2.145', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Home Wins Or Draw'),
('2022-08-29', 'User Milkias Amanuel Arefaine', '30', '15.5925', '4', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Most Goals 2nd Half<br>\nManchester City Vs Roma -- Odd<br>\nManchester City Vs Roma -- Home Wins Or Draw'),
('2022-08-29', 'User Trying', '70', '14655.386559215', '20', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins Over 1.5<br>\nManchester City Vs Roma -- GG Home<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Home Wins Or Draw<br>\nManchester City '),
('2022-08-31', 'User 4', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Home<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-08-31', 'User 4', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Home<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-08-31', 'User 4', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Home<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-02', 'User 14', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Draw'),
('2022-09-02', 'User 16', '20', '1.56', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Home'),
('2022-09-02', 'User 17', '100', '2.496', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw'),
('2022-09-02', 'User 18', '120', '2.964', '0', 'List Of Games<br>\n'),
('2022-09-02', 'User 19', '100', '5.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-02', 'User 20', '120', '3.12', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-06', 'User 21', '100', '1.98', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins Or Draw<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-07', 'User 24', '200', '6', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- No GG'),
('2022-09-07', 'User 25', '120', '4.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Home Or Away Wins<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-07', 'User 26', '100', '8.075', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nManchester City Vs Roma -- Full Game Under 3.5<br>\nManchester City Vs Roma -- GG Away'),
('2022-09-07', 'User 27', '100', '5.28', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Red Card Yes<br>\nManchester City Vs Roma -- Home Wins Or Draw'),
('2022-09-08', 'User 2', '100', '5.7', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- First Half Under 0.5<br>\nManchester City Vs Roma -- GG Away'),
('2022-09-08', 'User 3', '100', '2.16', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- GG'),
('2022-09-09', 'User 1', '100', '4.5', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 1', '100', '', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- No GG'),
('2022-09-09', 'User 2', '100', '12.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '12.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '12.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '12.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '12.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '12.8', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- GG Away<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '', '12.8', '0', 'List Of Games<br>\n'),
('2022-09-09', 'User 1', '100', '5.115', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Away Wins Over 2.5<br>\nManchester City Vs Roma -- Home Wins Or Draw'),
('2022-09-09', 'User 1', '100', '5.115', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Away Wins Over 2.5<br>\nManchester City Vs Roma -- Home Wins Or Draw'),
('2022-09-09', 'User 1', '100', '5.115', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Away Wins Over 2.5<br>\nManchester City Vs Roma -- Home Wins Or Draw'),
('2022-09-09', 'User 2', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG<br>\nManchester City Vs Roma -- Home Or Away Wins<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG<br>\nManchester City Vs Roma -- Home Or Away Wins<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-09', 'User 2', '100', '3.84', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG<br>\nManchester City Vs Roma -- Home Or Away Wins<br>\nManchester City Vs Roma -- Red Card Yes'),
('2022-09-10', 'User 1', '100', '5.568', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- Red Card No<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-10', 'User 1', '100', '5.568', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- GG Draw<br>\nManchester City Vs Roma -- Red Card No<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 4', '200', '7.068', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nReal Madrid Vs Barcelona -- Away Wins Over 2.5<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 4', '200', '7.068', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nReal Madrid Vs Barcelona -- Away Wins Over 2.5<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 7', '100', '4.332', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 7', '100', '4.332', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 7', '100', '4.332', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 7', '100', '4.332', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-11', 'User 7', '100', '4.332', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins Or Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-14', 'User 5', '20', '15.561', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nEuropa 1 Vs Europa 3 -- Score: 5-2<br>\nManchester City Vs Roma -- Draw'),
('2022-09-14', 'User 5', '20', '15.561', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nEuropa 1 Vs Europa 3 -- Score: 5-2<br>\nManchester City Vs Roma -- Draw'),
('2022-09-14', 'User 6', '30', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-14', 'User 7', '25', '14.82', '3', 'List Of Games<br>\n<br>\nEuropa 1 Vs Europa 3 -- Score: 4-1<br>\nManchester City Vs Roma -- No GG<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-14', 'User 9', '100', '2.736', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-14', 'User 9', '100', '2.736', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-18', 'User MilkiasAmanuelArefaine15', '100', '2.736', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Home Wins'),
('2022-09-19', 'User Milkias', '90', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1', '100', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_4037', '', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_8498', '', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User Banshee', '100', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_5792', '', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_5776', '', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_2352', '', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_7367', '', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_7946', '', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_7946', '', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_7946', '50', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_2769', '50', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User Banshee_8419', '500', '3.0381', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- Draw<br>\nEuropa 1 Vs Europa 3 -- Home Wins'),
('2022-09-19', 'User AllAmerican1_8924', '20', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_8924', '20', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_2068', '20', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_3849', '20', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_1289', '30', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_3609', '50', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-19', 'User AllAmerican1_4188', '50', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Home Wins<br>\nManchester City Vs Roma -- Away Wins'),
('2022-09-20', 'User Milkias', '100', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- GG'),
('2022-09-20', 'User Milkias', '100', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- GG'),
('2022-09-20', 'User Milkias', '100', '2.964', '3', 'List Of Games<br>\n<br>\nManchester City Vs Roma -- Draw<br>\nManchester City Vs Roma -- Away Wins<br>\nManchester City Vs Roma -- GG'),
('2022-09-20', 'User Milkias', '100', '4.5936', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Away Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-20', 'User Milkias2', '100', '6.237308', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-20', 'User Milkias_4943', '20', '4.5936', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Away Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-21', 'User 1', '100', '3.68445', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Away Wins'),
('2022-09-21', 'User 2', '100', '6.237308', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-21', 'User Milkias', '70', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-21', 'User Milkias', '70', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-21', 'User Milkias', '80', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-21', 'User Waltom', '20', '2.1025', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Hand Cape 1 (0,1)<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User 111', '100', '3.048625', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User 111', '100', '3.048625', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User 111', '100', '3.048625', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User 111', '100', '3.048625', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User 111', '100', '3.048625', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User 111', '100', '3.048625', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-22', 'User Banshee', '100', '3.23785', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Home Wins<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User 2417', '100', '4.28736', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Away Wins<br>\nLiverpool Vs Manchester -- Home Wins<br>\nJuvenus Vs Roma -- Draw'),
('2022-09-23', 'User mi', '100', '5.87279', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Home Wins'),
('2022-09-23', 'User 21', '100', '6.237308', '3', 'List Of Games<br>\n<br>\nSpain A Vs Spain B -- Draw<br>\nLiverpool Vs Manchester -- Draw<br>\nJuvenus Vs Roma -- Draw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bet`
--
ALTER TABLE `bet`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bet_all`
--
ALTER TABLE `bet_all`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `permanent`
--
ALTER TABLE `permanent`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `User` (`User`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bet`
--
ALTER TABLE `bet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `bet_all`
--
ALTER TABLE `bet_all`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permanent`
--
ALTER TABLE `permanent`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
