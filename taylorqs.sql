-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 10:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q和a`
--

-- --------------------------------------------------------

--
-- Table structure for table `taylorqs`
--

CREATE TABLE `taylorqs` (
  `问题` mediumtext DEFAULT NULL,
  `答案` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taylorqs`
--

INSERT INTO `taylorqs` (`问题`, `答案`) VALUES
('What was Taylor Swift&#39;s first Album?', 0x8decf8e54c23e11b9ca8a361),
('What was Taylor Swift&#39;s highest rated album?', 0xca92bbd6),
('What was Taylor Swift&#39;s most listened to song?', 0x12621409fad3843fa2edef9dbfbebe16e5fc7cbbb28374bda025),
('How old is Taylor Swift(As of November 2022)?', 0x1d1c),
('What is Taylor Swift&#39;s favorite animal?', 0x14fb964d),
('Where did Taylor Swift grow up most of her childhood?', 0xdec9a07c13262ef18fb6c8ae10dda53bc7bc691133c659e3e528),
('What is Taylor Swift&#39;s middle name?', 0x87ad2d5f5b2f),
('What NHL team was Taylor Swift the spokesperson for?', 0x8dd36e37af4dffc9adaa8dfda281f957a781c530ebdaed),
('How tall is Taylor Swift?', 0x6d08338b),
('When was Taylor Swift born?', 0x96daf099a39e418810af262333393b0b74611ed88e),
('Which of her albums is Taylor Swift&#39;s favorite?', 0xab8120b0ef24505b66),
('What is Taylor Swift&#39;s lucky number?', 0xca0b),
('What is Taylor Swift&#39;s favorite color?', 0x5447afc617),
('What song won Taylor Swift her first Grammy Award?', 0xded03f6bb1ae9325ea31ec),
('When did Taylor Swift release her first Album?', 0xba52987c2c09690249de6e4c295d6dc8),
('What is the name of Taylor Swift&#39;s childhood best friend?', 0x875723ae98423e09cdc0bd9387f6ba22),
('What is the name of Taylor Swift&#39;s brother?', 0x874da67af22d),
('What show did Taylor Swift appear on in 2009?', 0x142ee9),
('What are Taylor Swift&#39;s cats&#39; names?', 0xabd34a81fa55bdaa0174d48a3183bd0884ddccc66d0ed8bae5b01e5ef8a6012b1c7be1686ec050e90730b16d262333393bc6af2dc1),
('Who taught Taylor Swift how to play the guitar?', 0x142269b930fe599008abf8a296707b0de39a28420e5d53ebed0634f76d4f291564);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
