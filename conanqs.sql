-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 10:19 PM
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
-- Table structure for table `conanqs`
--

CREATE TABLE `conanqs` (
  `问题` mediumtext DEFAULT NULL,
  `答案` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conanqs`
--

INSERT INTO `conanqs` (`问题`, `答案`) VALUES
('How long did Conan Gray live in Hiroshima, Japan?', 0x081922909b2394),
('Who is Conan Gray&#39;s favorite music artist?', 0x8decf8e54c23e11b9ca8a361),
('When did Conan Gray win the Shorty Award for Best YouTube Musician?', 0x08a823d5),
('What pop rock band did Conan Gray tour with as a supporting act?', 0x54e848d626fca89f6917d8bd8dae140e47622d),
('How old is Conan Gray(As of December 5, 2022)?', 0x08e1),
('How tall is Conan Gray?', 0x6d087d),
('At what age did Conan Gray start writing music?', 0xca1e),
('What famous music artist was friends with Conan Gray before they both got famous?', 0x4f8e0beeea1efb5e8a9ab85fb4),
('What is Conan Gray&#39;s middle name?', 0x2cd27b),
('When was Conan Gray born?', 0x6de565872948235a),
('Where was Conan Gray born?', 0x2cd26c6093acb5e73586e43a458e4650aede49bd62e44c),
('During his 6th grade year, how many times did Conan Gray move?', 0x1d),
('What is Conan Gray&#39;s most streamed song?', 0x24d65971b20c6c),
('What is Conan Gray&#39;s most streamed album?', 0xd08726289c41c98d),
('What college did Conan Gray drop out of?', 0xc266d1bf),
('How old was Conan Gray when his parents divoriced', 0x1d),
('What track from <i>Kid Krow</i> was praised by Taylor Swift on her Instagram?', 0xde9bac8f033bca5469c29cd5d6f593ef45babf),
('What did Teen Vogue call Conan Gray?', 0x8dd36e37c9aa2c568fb5cbc74053836b1eab0c0d2eae9c8d8cff8f210c29bedf88fa6615d8),
('When was Conan Gray&#39;s EP <i>Sunset Season</i> released?', 0xca1d1bb4082d5ad61a),
('Who is Conan Gray&#39;s producer?', 0x96fc5c25bd2b1aee3c);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
