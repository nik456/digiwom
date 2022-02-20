-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 01:25 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `campaign` varchar(250) NOT NULL,
  `frequencyCap` int(11) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `timeZone` text NOT NULL,
  `dailyBudget` int(11) NOT NULL,
  `ageFrom` int(11) NOT NULL,
  `ageTo` int(11) NOT NULL,
  `GeoTargetingIncluded` text NOT NULL,
  `GeoTargetingExcluded` text NOT NULL,
  `videoSRC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `name`, `campaign`, `frequencyCap`, `dateFrom`, `dateTo`, `timeZone`, `dailyBudget`, `ageFrom`, `ageTo`, `GeoTargetingIncluded`, `GeoTargetingExcluded`, `videoSRC`) VALUES
(1, '123', 'wind', 1, '2020-06-16', '2020-06-17', 'Africa/Abidjan', 123, 12, 28, '', '', 'videos/small.1592169185.mp4'),
(2, '123', 'wind', 1, '2020-06-16', '2020-06-17', 'Africa/Abidjan', 123, 12, 28, '', '', 'videos/small.1592169353.mp4'),
(3, '123', 'wind', 1, '2020-06-16', '2020-06-17', 'Africa/Abidjan', 123, 12, 28, '', '', 'videos/small.1592169552.mp4'),
(4, '123', 'wind', 1, '2020-06-16', '2020-06-17', 'Africa/Abidjan', 123, 12, 28, '', '', 'videos/small.1592169571.mp4'),
(5, '123', 'test', 1, '2020-06-15', '2020-06-18', 'Africa/Djibouti', 123, 12, 33, '', '', 'videos/small.1592254356.mp4'),
(6, '123', 'test', 1, '2020-06-15', '2020-06-18', 'Africa/Djibouti', 123, 12, 33, '', '', 'videos/small.1592254601.mp4'),
(7, '123', 'test', 1, '2020-06-15', '2020-06-18', 'Africa/Djibouti', 123, 12, 33, '', '', 'videos/small.1592254665.mp4'),
(8, 'hshhnd', 'fire', 1, '2020-06-15', '2020-06-17', 'Africa/Abidjan', 3333, 123, 2, '', '', 'videos/small.1592254736.mp4'),
(9, 'hshhnd', 'fire', 1, '2020-06-15', '2020-06-17', 'Africa/Abidjan', 3333, 123, 2, '', '', 'videos/small.1592254973.mp4'),
(10, 'asssasdw', 'wind', 5, '2020-06-11', '2020-06-26', 'Africa/Abidjan', 43432, 123, 22, '', '', 'videos/small.1592255287.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `campaignName` text NOT NULL,
  `hoursToShow` text NOT NULL,
  `frequencyCap` int(11) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `timeZone` text NOT NULL,
  `dailyBudget` text NOT NULL,
  `ageFrom` int(11) NOT NULL,
  `ageTo` int(11) NOT NULL,
  `GeoTargetingIncluded` text NOT NULL,
  `GeoTargetingExcluded` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `campaignName`, `hoursToShow`, `frequencyCap`, `dateFrom`, `dateTo`, `timeZone`, `dailyBudget`, `ageFrom`, `ageTo`, `GeoTargetingIncluded`, `GeoTargetingExcluded`) VALUES
(1, 'test', '{\"mondayFrom\":\"23:57\",\"mondayTo\":\"00:57\",\"tuesdayFrom\":\"0\",\"tuesdayTo\":\"0\",\"wednesdayFrom\":\"0\",\"wednesdayTo\":\"0\",\"thursdayFrom\":\"0\",\"thursdayTo\":\"0\",\"fridayFrom\":\"0\",\"fridayTo\":\"0\",\"saturdayFrom\":\"0\",\"saturdayTo\":\"0\",\"sundayFrom\":\"0\",\"sundayTo\":\"0\"}', 8, '2020-06-25', '2020-06-16', 'Africa/Blantyre', '12312', 13, 123, 'sffsdf', 'sdfsd'),
(2, 'wind', '{\"mondayFrom\":\"23:57\",\"mondayTo\":\"00:57\",\"tuesdayFrom\":\"0\",\"tuesdayTo\":\"0\",\"wednesdayFrom\":\"0\",\"wednesdayTo\":\"0\",\"thursdayFrom\":\"0\",\"thursdayTo\":\"0\",\"fridayFrom\":\"0\",\"fridayTo\":\"0\",\"saturdayFrom\":\"0\",\"saturdayTo\":\"0\",\"sundayFrom\":\"0\",\"sundayTo\":\"0\"}', 8, '2020-06-25', '2020-06-16', 'Africa/Blantyre', '12312', 13, 123, 'sffsdf', 'sdfsd'),
(3, 'fire', '{\"mondayFrom\":\"0\",\"mondayTo\":\"0\",\"tuesdayFrom\":\"0\",\"tuesdayTo\":\"0\",\"wednesdayFrom\":\"0\",\"wednesdayTo\":\"0\",\"thursdayFrom\":\"0\",\"thursdayTo\":\"0\",\"fridayFrom\":\"0\",\"fridayTo\":\"0\",\"saturdayFrom\":\"0\",\"saturdayTo\":\"0\",\"sundayFrom\":\"0\",\"sundayTo\":\"0\"}', 1, '0000-00-00', '0000-00-00', 'Africa/Abidjan', '0', 0, 0, '0', '0'),
(4, '0', '{\"mondayFrom\":\"0\",\"mondayTo\":\"0\",\"tuesdayFrom\":\"0\",\"tuesdayTo\":\"0\",\"wednesdayFrom\":\"0\",\"wednesdayTo\":\"0\",\"thursdayFrom\":\"0\",\"thursdayTo\":\"0\",\"fridayFrom\":\"0\",\"fridayTo\":\"0\",\"saturdayFrom\":\"0\",\"saturdayTo\":\"0\",\"sundayFrom\":\"0\",\"sundayTo\":\"0\"}', 1, '2020-06-25', '2020-06-19', 'Africa/Cairo', '12', 1, 2, '0', '0'),
(5, 'test123', '{\"mondayFrom\":\"12:27\",\"mondayTo\":\"18:27\",\"tuesdayFrom\":\"17:27\",\"tuesdayTo\":\"18:27\",\"wednesdayFrom\":\"16:27\",\"wednesdayTo\":\"05:27\",\"thursdayFrom\":\"16:31\",\"thursdayTo\":\"18:31\",\"fridayFrom\":\"20:31\",\"fridayTo\":\"21:31\",\"saturdayFrom\":\"23:32\",\"saturdayTo\":\"23:32\",\"sundayFrom\":\"22:32\",\"sundayTo\":\"23:32\"}', 5, '2020-06-28', '2020-06-29', 'Europe/Berlin', '100.00', 16, 30, '0', 'Koln'),
(6, 'NewCampaing', '{\"mondayFrom\":\"11:21\",\"mondayTo\":\"11:21\",\"tuesdayFrom\":\"11:21\",\"tuesdayTo\":\"11:22\",\"wednesdayFrom\":\"11:22\",\"wednesdayTo\":\"11:23\",\"thursdayFrom\":\"11:22\",\"thursdayTo\":\"11:22\",\"fridayFrom\":\"11:22\",\"fridayTo\":\"13:20\",\"saturdayFrom\":\"11:22\",\"saturdayTo\":\"11:22\",\"sundayFrom\":\"11:22\",\"sundayTo\":\"11:22\"}', 1, '2020-07-17', '2020-07-29', 'Africa/Abidjan', '144', 14, 55, 'null', 'null'),
(7, 'NewCampaingtest', '{\"mondayFrom\":\"11:23\",\"mondayTo\":\"11:23\",\"tuesdayFrom\":\"11:23\",\"tuesdayTo\":\"11:24\",\"wednesdayFrom\":\"11:24\",\"wednesdayTo\":\"11:23\",\"thursdayFrom\":\"11:25\",\"thursdayTo\":\"11:24\",\"fridayFrom\":\"11:24\",\"fridayTo\":\"11:25\",\"saturdayFrom\":\"11:24\",\"saturdayTo\":\"11:23\",\"sundayFrom\":\"11:25\",\"sundayTo\":\"11:25\"}', 1, '2020-07-18', '2020-07-17', 'Africa/Abidjan', '888', 12, 33, '[\"Andorra\",\"Mongolia\",\"United Kingdom\",\"Yemen\"]', '[\"Algeria\",\"Anguilla\",\"Comoros\",\"Haiti\"]');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `campaign` text NOT NULL,
  `frequencyCap` int(11) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `timeZone` text NOT NULL,
  `dailyBudget` int(11) NOT NULL,
  `ageFrom` int(11) NOT NULL,
  `ageTo` int(11) NOT NULL,
  `GeoTargetingIncluded` text NOT NULL,
  `GeoTargetingExcluded` text NOT NULL,
  `surveySRC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `campaign`, `frequencyCap`, `dateFrom`, `dateTo`, `timeZone`, `dailyBudget`, `ageFrom`, `ageTo`, `GeoTargetingIncluded`, `GeoTargetingExcluded`, `surveySRC`) VALUES
(1, 'asssasdw', 'fire', 5, '2020-06-25', '2020-06-28', 'Africa/Banjul', 23, 23, 8, '', '', 'syrveys/table1.xlsx'),
(2, 'fdfg', 'test', 1, '2020-06-18', '2020-06-18', 'Africa/Abidjan', 3443, 34344, 0, '', '', 'syrveys/table1.1592348024.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `token` varchar(250) NOT NULL,
  `typeOfUser` int(11) NOT NULL,
  `affiliateNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `typeOfUser`, `affiliateNumber`) VALUES
(1, 'testt', 'axsel99@abv.bg', '123nikola', '123nikola', 1, 'restt1234'),
(2, 'testt', 'axsel97@abv.bg', '$2y$10$justcryptingstufforgoO93fGPzhSdy0Iw0c7egJ0OMTT7Tq6T/e', '', 2, 'testt2653'),
(3, 'root', 'root@abv.bg', '$2y$10$justcryptingstufforgoOjZm1Z2oyGv5uSjikcBDM/mrhAjfcp1q', '', 1, 'root76552'),
(4, 'Issa', 'issakamel_13@hotmail.com', '$2y$10$justcryptingstufforgoOGPr5ITw43/PPhg6ovdEL2LNDMPKVAxS', '', 1, 'issa6544'),
(5, 'Issa', 'issakamel_13@hotmail.com', '$2y$10$justcryptingstufforgoOWTw.2C12IXkVhOprmU/s5LJ5Pf0Rwfa', '', 1, 'issa8412'),
(6, 'Issa', 'issakamel_13@hotmail.com', '$2y$10$justcryptingstufforgoOWTw.2C12IXkVhOprmU/s5LJ5Pf0Rwfa', '', 2, 'issa7125'),
(7, 'Joanna', 'bateekh_shumam@hotmail.com', '$2y$10$justcryptingstufforgoOWTw.2C12IXkVhOprmU/s5LJ5Pf0Rwfa', '', 2, 'Joanna6244'),
(8, 'Shereen ', 'Shereenhourani@yahoo.com ', '$2y$10$justcryptingstufforgoO..hBGyUvXSqwHAsRHKDRN6HV.ZA1f7e', '', 1, 'Shereen5144'),
(9, 'Shereen ', 'Shereenhourani@yahoo.com ', '$2y$10$justcryptingstufforgoOEPfrvlDDmmDLuBcVERxbttFasCfsH1W', '', 2, 'Shereen8755'),
(11, '', '', '$2y$10$justcryptingstufforgoOGPr5ITw43/PPhg6ovdEL2LNDMPKVAxS', '', 2, '4392'),
(12, '', '', '$2y$10$justcryptingstufforgoOGPr5ITw43/PPhg6ovdEL2LNDMPKVAxS', '', 1, '4098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
