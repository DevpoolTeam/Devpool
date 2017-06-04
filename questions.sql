-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 03:33 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `ime_ankete` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `prvo_pitanje` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `prvo_pitanje_prvi_odgovor` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `prvo_pitanje_drugi_odgovor` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `prvo_pitanje_treci_odgovor` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `drugo_pitanje` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `drugo_pitanje_prvi_odgovor` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `drugo_pitanje_drugi_odgovor` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `drugo_pitanje_treci_odgovor` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `trece_pitanje` varchar(200) COLLATE cp1250_croatian_ci NOT NULL,
  `trece_pitanje_odgovor` text COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
