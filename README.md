# AUPI
The Australian Pollutant Index

Replicate Environment
```sql
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2020 at 05:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `Air_Quality_Data`
--

CREATE TABLE `Air_Quality_Data` (
  `RID` int(3) NOT NULL,
  `Location` varchar(36) DEFAULT NULL,
  `Pollutant` varchar(32) DEFAULT NULL,
  `Air_Quality_Index` decimal(9,1) DEFAULT NULL,
  `Data-Rating` int(1) DEFAULT NULL,
  `Rating` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Air_Quality_Data`
--

INSERT INTO `Air_Quality_Data` (`RID`, `Location`, `Pollutant`, `Air_Quality_Index`, `Data-Rating`, `Rating`) VALUES
(1, 'Central-Queensland-Emerald', 'Particle PM10', '19.6', 1, 'Very Good'),
(2, 'Central-Queensland-Emerald', 'Particle PM2.5', '11.6', 1, 'Very Good'),
(3, 'Central-Queensland-Blackwater', 'Particle PM10', '70.5', 3, 'Fair'),
(4, 'Central-Queensland-Blackwater', 'Particle PM2.5', '6.4', 1, 'Very Good'),
(5, 'Central-Queensland-West-Mackay', 'Visibility', '0.0', 1, 'Very Good'),
(6, 'Central-Queensland-West-Mackay', 'Particle PM10', '25.6', 1, 'Very Good'),
(7, 'Central-Queensland-West-Mackay', 'Particle PM2.5', '81.4', 3, 'Fair'),
(8, 'Central-Queensland-Moranbah', 'Particle PM10', '18.6', 1, 'Very Good'),
(9, 'Central-Queensland-Moranbah', 'Particle PM2.5', '10.4', 1, 'Very Good'),
(10, 'Gladstone-Clinton', 'Visibility', '105.0', 4, 'Poor'),
(11, 'Gladstone-Clinton', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(12, 'Gladstone-Clinton', 'Nitrogen dioxide', '2.5', 1, 'Very Good'),
(13, 'Gladstone-Clinton', 'Particle PM10', '19.6', 1, 'Very Good'),
(14, 'Gladstone-Clinton', 'Particle PM2.5', '92.1', 3, 'Fair'),
(15, 'Gladstone-Fishermans-Landing', 'Visibility', '5.1', 1, 'Very Good'),
(16, 'Gladstone-Fishermans-Landing', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(17, 'Gladstone-Fishermans-Landing', 'Nitrogen dioxide', '0.0', 1, 'Very Good'),
(18, 'Gladstone-Fishermans-Landing', 'Particle PM10', '11.6', 1, 'Very Good'),
(19, 'Gladstone-Fishermans-Landing', 'Particle PM2.5', '120.7', 4, 'Poor'),
(20, 'Gladstone-South-Gladstone', 'Visibility', '3.4', 1, 'Very Good'),
(21, 'Gladstone-South-Gladstone', 'Sulfur dioxide', '0.5', 1, 'Very Good'),
(22, 'Gladstone-South-Gladstone', 'Nitrogen dioxide', '2.5', 1, 'Very Good'),
(23, 'Gladstone-South-Gladstone', 'Particle PM10', '10.8', 1, 'Very Good'),
(24, 'Gladstone-South-Gladstone', 'Particle PM2.5', '78.3', 3, 'Fair'),
(25, 'Gladstone-Boat-Creek', 'Visibility', '3.8', 1, 'Very Good'),
(26, 'Gladstone-Boat-Creek', 'Sulfur dioxide', '0.5', 1, 'Very Good'),
(27, 'Gladstone-Boat-Creek', 'Nitrogen dioxide', '0.0', 1, 'Very Good'),
(28, 'Gladstone-Boat-Creek', 'Particle PM10', '146.8', 4, 'Poor'),
(29, 'Gladstone-Boat-Creek', 'Particle PM2.5', '13.2', 1, 'Very Good'),
(30, 'Gladstone-Boyne-Island', 'Visibility', '4.3', 1, 'Very Good'),
(31, 'Gladstone-Boyne-Island', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(32, 'Gladstone-Boyne-Island', 'Carbon monoxide', '0.0', 1, 'Very Good'),
(33, 'Gladstone-Boyne-Island', 'Nitrogen dioxide', '0.0', 1, 'Very Good'),
(34, 'Gladstone-Boyne-Island', 'Particle PM10', '86.3', 3, 'Fair'),
(35, 'Gladstone-Boyne-Island', 'Particle PM2.5', '10.8', 1, 'Very Good'),
(36, 'Gladstone-Targinie', 'Visibility', '5.5', 1, 'Very Good'),
(37, 'Gladstone-Targinie', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(38, 'Gladstone-Targinie', 'Nitrogen dioxide', '0.0', 1, 'Very Good'),
(39, 'Gladstone-Targinie', 'Particle PM10', '148.6', 3, 'Fair'),
(40, 'Gladstone-Targinie', 'Particle PM2.5', '12.0', 1, 'Very Good'),
(41, 'Gladstone-Auckland Point', 'Particle PM10', '17.6', 1, 'Very Good'),
(42, 'Mount-Isa-The-Gap', 'Particle PM10', '78.6', 3, 'Fair'),
(43, 'Mount-Isa-The-Gap', 'Particle PM2.5', '15.2', 1, 'Very Good'),
(44, 'Mount-Isa-Menzies', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(45, 'South-East-Queensland-Flinders-View', 'Ozone', '10.0', 1, 'Very Good'),
(46, 'South-East-Queensland-Flinders-View', 'Visibility', '4.7', 1, 'Very Good'),
(47, 'South-East-Queensland-Flinders-View', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(48, 'South-East-Queensland-Flinders-View', 'Nitrogen dioxide', '5.0', 1, 'Very Good'),
(49, 'South-East-Queensland-Flinders-View', 'Particle PM10', '41.2', 2, 'Good'),
(50, 'South-East-Queensland-North-Maclean', 'Ozone', '11.0', 1, 'Very Good'),
(51, 'South-East-Queensland-North-Maclean', 'Nitrogen dioxide', '3.3', 1, 'Very Good'),
(52, 'South-East-Queensland-Wynnum-West', 'Sulfur dioxide', '0.5', 1, 'Very Good'),
(53, 'South-East-Queensland-Wynnum-West', 'Particle PM10', '93.7', 3, 'Fair'),
(54, 'South-East-Queensland-Wynnum-West', 'Particle PM2.5', '9.2', 1, 'Very Good'),
(55, 'South-East-Queensland-Southport', 'Ozone', '10.0', 1, 'Very Good'),
(56, 'South-East-Queensland-Southport', 'Nitrogen dioxide', '5.8', 1, 'Very Good'),
(57, 'South-East-Queensland-Southport', 'Particle PM10', '113.4', 4, 'Poor'),
(58, 'South-East-Queensland-Southport', 'Particle PM2.5', '19.2', 1, 'Very Good'),
(59, 'South-East-Queensland-Mutdapilly', 'Ozone', '11.0', 1, 'Very Good'),
(60, 'South-East-Queensland-Mutdapilly', 'Nitrogen dioxide', '1.7', 1, 'Very Good'),
(64, 'South-East-Queensland-Springwood', 'Particle PM10', '38.0', 2, 'Good'),
(65, 'South-East-Queensland-Springwood', 'Particle PM2.5', '11.2', 1, 'Very Good'),
(66, 'South-East-Queensland-South-Brisbane', 'Carbon monoxide', '0.0', 1, 'Very Good'),
(67, 'South-East-Queensland-South-Brisbane', 'Nitrogen dioxide', '14.2', 1, 'Very Good'),
(68, 'South-East-Queensland-South-Brisbane', 'Particle PM10', '40.6', 2, 'Good'),
(69, 'South-East-Queensland-South-Brisbane', 'Particle PM2.5', '24.0', 1, 'Very Good'),
(70, 'South-East-Queensland-Wynnum', 'Sulfur dioxide', '1.0', 1, 'Very Good'),
(71, 'South-East-Queensland-Wynnum', 'Nitrogen dioxide', '3.3', 1, 'Very Good'),
(72, 'South-East-Queensland-Wynnum', 'Particle PM10', '80.2', 3, 'Fair'),
(73, 'South-East-Queensland-Wynnum', 'Particle PM2.5', '15.2', 1, 'Very Good'),
(74, 'South-East-Queensland-Woolloongabba', 'Carbon monoxide', '1.1', 1, 'Very Good'),
(75, 'South-East-Queensland-Woolloongabba', 'Nitrogen dioxide', '10.0', 1, 'Very Good'),
(76, 'South-East-Queensland-Woolloongabba', 'Particle PM10', '33.8', 2, 'Good'),
(77, 'South-East-Queensland-Woolloongabba', 'Particle PM2.5', '5.5', 1, 'Very Good'),
(78, 'South-East-Queensland-Rocklea', 'Ozone', '175.0', 1, 'Very Good'),
(79, 'South-East-Queensland-Rocklea', 'Visibility', '4.7', 1, 'Very Good'),
(80, 'South-East-Queensland-Rocklea', 'Nitrogen dioxide', '4.2', 1, 'Very Good'),
(81, 'South-East-Queensland-Rocklea', 'Particle PM10', '135.4', 4, 'Poor'),
(82, 'South-East-Queensland-Rocklea', 'Particle PM2.5', '15.6', 1, 'Very Good'),
(83, 'South-East-Queensland-Deception-Bay', 'Ozone', '16.0', 1, 'Very Good'),
(84, 'South-East-Queensland-Deception-Bay', 'Nitrogen dioxide', '0.8', 1, 'Very Good'),
(85, 'South-East-Queensland-Brisbane-CBD', 'Visibility', '5.1', 1, 'Very Good'),
(86, 'South-East-Queensland-Brisbane-CBD', 'Particle PM10', '92.4', 3, 'Fair'),
(87, 'South-East-Queensland-Brisbane-CBD', 'Particle PM2.5', '22.0', 1, 'Very Good'),
(88, 'South-East-Queensland-Cannon Hill', 'Ozone', '11.0', 1, 'Very Good'),
(89, 'South-East-Queensland-Cannon-Hill', 'Particle PM10', '164.2', 5, 'Very Poor'),
(90, 'South-East-Queensland-Cannon Hill', 'Particle PM2.5', '14.0', 1, 'Very Good'),
(91, 'South-East-Queensland-Cannon Hill', 'Particles TSP', '34.4', 2, 'Good'),
(92, 'South-East-Queensland-Lytton', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(93, 'South-East-Queensland-Lytton', 'Particle PM10', '29.8', 1, 'Very Good'),
(94, 'South-East-Queensland-Lytton', 'Particle PM2.5', '68.8', 3, 'Fair'),
(95, 'South-East-Queensland-Mountain-Creek', 'Ozone', '11.0', 1, 'Very Good'),
(96, 'South-East-Queensland-Mountain-Creek', 'Visibility', '5.1', 1, 'Very Good'),
(97, 'South-East-Queensland-Mountain-Creek', 'Nitrogen dioxide', '2.5', 1, 'Very Good'),
(98, 'South-East-Queensland-Mountain-Creek', 'Particle PM10', '34.6', 2, 'Good'),
(99, 'South-West-Queensland-Hopeland', 'Ozone', '126.0', 4, 'Poor'),
(100, 'South-West-Queensland-Hopeland', 'Carbon monoxide', '2.2', 1, 'Very Good'),
(101, 'South-West-Queensland-Hopeland', 'Nitrogen dioxide', '0.8', 1, 'Very Good'),
(102, 'South-West-Queensland-Hopeland', 'Particle PM10', '10.0', 1, 'Very Good'),
(103, 'South-West-Queensland-Hopeland', 'Particle PM2.5', '114.0', 4, 'Poor'),
(104, 'South-West-Queensland-Hopeland', 'Particles TSP', '9.5', 1, 'Very Good'),
(105, 'South-West-Queensland-Miles-Airport', 'Ozone', '26.0', 1, 'Very Good'),
(107, 'South-West-Queensland-Miles-Airport', 'Nitrogen dioxide', '0.8', 1, 'Very Good'),
(108, 'South-West-Queensland-Miles-Airport', 'Particle PM10', '12.4', 1, 'Very Good'),
(109, 'South-West-Queensland-Miles-Airport', 'Particle PM2.5', '180.0', 5, 'Very Poor'),
(110, 'South-West-Queensland-Miles-Airport', 'Particles TSP', '12.9', 1, 'Very Good'),
(111, 'South-West-Queensland-Upper-Humbug', 'Ozone', '0.0', 1, 'Very Good'),
(112, 'South-West-Queensland-Upper-Humbug', 'Carbon monoxide', '3.3', 1, 'Very Good'),
(113, 'South-West-Queensland-Upper-Humbug', 'Nitrogen dioxide', '0.0', 1, 'Very Good'),
(114, 'South-West-Queensland-Upper-Humbug', 'Particle PM10', '11.4', 1, 'Very Good'),
(115, 'South-West-Queensland-Upper-Humbug', 'Particle PM2.5', '80.0', 3, 'Fair'),
(116, 'South-West-Queensland-Upper-Humbug', 'Particles TSP', '10.9', 1, 'Very Good'),
(117, 'Townsville-Lennon-Drive', 'Particle PM10', '175.2', 1, 'Very Good'),
(118, 'Townsville-Lennon-Drive', 'Particles TSP', '24.8', 1, 'Very Good'),
(119, 'Townsville-Coastguard', 'Particle PM10', '144.2', 4, 'Poor'),
(120, 'Townsville-Coastguard', 'Particles TSP', '16.0', 1, 'Very Good'),
(121, 'Townsville-North-Ward', 'Visibility', '1.7', 1, 'Very Good'),
(122, 'Townsville-North-Ward', 'Sulfur dioxide', '0.0', 1, 'Very Good'),
(123, 'Townsville-North-Ward', 'Nitrogen dioxide', '5.0', 1, 'Very Good'),
(124, 'Townsville-North-Ward', 'Particle PM10', '153.0', 5, 'Very Poor'),
(125, 'Townsville-North-Ward', 'Particle PM2.5', '16.4', 1, 'Very Good'),
(126, 'Central-Queensland-Test', 'Nuclear Particles', '99999999.0', 5, 'Very Poor'),
(127, 'Central-Queensland-Test1', 'PM10', '32.0', 3, 'fair');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UID` int(11) NOT NULL,
  `UserEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `UserEmail`, `UserPassword`, `priv`) VALUES
(1, 'admin@sa.m', '$2y$10$lgQZV7Sq51btyUM0M1/zxu6PM/G4bBh0iNDwBEZERIxnD3jkTo1Uu', 'admin'),
(6, 'guest@sa.m', '$2y$10$8asxqoI/XTja2pazEELDUu.4sJGhHVhRKs7ehzk7FiKc3l0KSpxH.', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `User_Alerts`
--

CREATE TABLE `User_Alerts` (
  `UID` int(11) NOT NULL,
  `Alert-1-StationName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alert-1-StationRating` int(10) NOT NULL,
  `Alert-2-StationName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alert-2-StationRating` int(10) NOT NULL,
  `Alert-3-StationName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alert-3-StationRating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `User_Alerts`
--

INSERT INTO `User_Alerts` (`UID`, `Alert-1-StationName`, `Alert-1-StationRating`, `Alert-2-StationName`, `Alert-2-StationRating`, `Alert-3-StationName`, `Alert-3-StationRating`) VALUES
(6, 'Central-Queensland-Emerald', 3, 'Central-Queensland-Blackwater', 4, 'Central-Queensland-West-Mackay', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Air_Quality_Data`
--
ALTER TABLE `Air_Quality_Data`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `User_Alerts`
--
ALTER TABLE `User_Alerts`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Air_Quality_Data`
--
ALTER TABLE `Air_Quality_Data`
  MODIFY `RID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `User_Alerts`
--
ALTER TABLE `User_Alerts`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```
