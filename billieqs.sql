-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 10:02 PM
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
-- Table structure for table `billieqs`
--

CREATE TABLE `billieqs` (
  `问题` mediumtext DEFAULT NULL,
  `答案` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billieqs`
--

INSERT INTO `billieqs` (`问题`, `答案`) VALUES
('How old is Billie Eilish(As of December 18, 2022)?', 0x08df),
('When was Billie Eilish born?', 0x96daf099a39e418810af62007fa82f3cc9),
('What is Billie Eilish&#39;s middle name?', 0x549c5bb65f02),
('How old was Billie Eilish when she released her first song?', 0xcae2),
('Who helps Billie Eilish write all of her music?', 0x24d64f316471f913f7dfe41d6202e96d9123a47c),
('Who is Billie Eilish&#39;s favorite music artist?', 0xf646ad71f926e31c95f7748296),
('What is Billie Eilish&#39;s natural hair color?', 0x4fae83b1ea17),
('What is Billie Eilish&#39;s most streamed song?', 0xcb0d2baef1bf),
('What is Billie Eilish&#39;s most streamed album?', 0x24f058a1e81c7c17d9f9c0b001cb587790),
('What streaming service did Billie Eilish make a documentary with?', 0x9688bfaea39647),
('When did Billie Eilish release her first song?', 0xfc2f098cb68b549d05ba77156abd3a5e1c),
('How old was Billie Eilish when she started writing music?', 0xcadc),
('What song did Billie Eilish initially write for the dance company she used to be a part of?', 0xba527eb490afa349c03c),
('What nervous system disorder does Billie Eilish have?', 0x8d35fba5afe3a2ac0518700a744a597877e5cf),
('What is Billie Eilish&#39;s favorite TV show?', 0x8dd36e37e934679146ff),
('What TV show did Billie Eilish&#39;s song <i>Bored</i> get released on', 0xca0be596e36fdd0dd9056d83ebf6),
('How tall is Billie Eilish?', 0x6d08e4),
('Why does Billie Eilish wear long and baggy clothing?', 0x4f23290d168c13d8e796e88e),
('Around what year did Billie Eilish become vegan?', 0x08a823a5),
('Which of her music videos did Billie Eilish direct herself?', 0x31da0709ebeea3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
