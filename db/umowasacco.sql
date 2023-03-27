-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2023 at 07:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umowasacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('emmutua', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dailyreport`
--

DROP TABLE IF EXISTS `dailyreport`;
CREATE TABLE IF NOT EXISTS `dailyreport` (
  `ReportId` int NOT NULL AUTO_INCREMENT,
  `DriverFirstName` varchar(20) NOT NULL,
  `DriverId` int NOT NULL,
  `FleetNo` int NOT NULL,
  `NoOfTrips` int NOT NULL,
  `PassengerCount` int NOT NULL,
  `TotalRevenue` int NOT NULL,
  `MaintenanceCosts` int NOT NULL,
  `FuelConsumption` int NOT NULL,
  `Incidents` varchar(250) NOT NULL,
  `DateReported` varchar(20) NOT NULL,
  PRIMARY KEY (`ReportId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dailyreport`
--

INSERT INTO `dailyreport` (`ReportId`, `DriverFirstName`, `DriverId`, `FleetNo`, `NoOfTrips`, `PassengerCount`, `TotalRevenue`, `MaintenanceCosts`, `FuelConsumption`, `Incidents`, `DateReported`) VALUES
(1, 'urbanus', 390392, 1, 4, 20, 2000, 2323, 444, '', '2023-03-16'),
(2, 'urbanus', 390392, 1, 3, 14, 12500, 200, 4000, '', '2023-03-16'),
(3, 'urbanus', 390392, 1, 4, 20, 30000, 349, 4000, '', '2023-03-16'),
(4, 'urbanus', 390392, 1, 4, 14, 8000, 1000, 2000, '', '2023-03-16'),
(5, 'urbanus', 390392, 1, 4, 14, 23233, 456, 1000, '', '2023-03-16'),
(6, 'urbanus', 390392, 1, 2, 10, 2000, 50, 1500, '', '2023-03-16'),
(7, 'urbanus', 390392, 1, 5, 28, 30000, 300, 300, '0', '2023-03-16'),
(8, 'urbanus', 390392, 1, 4, 4, 34, 34, 34, '0', '2023-03-16'),
(9, 'urbanus', 390392, 1, 5, 80, 230, 1000, 2323, '0', '2023-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `matatus`
--

DROP TABLE IF EXISTS `matatus`;
CREATE TABLE IF NOT EXISTS `matatus` (
  `FleetNo` int NOT NULL AUTO_INCREMENT,
  `OwnerId` int NOT NULL,
  `NumPlate` varchar(10) NOT NULL,
  `RouteFrom` varchar(20) NOT NULL,
  `RouteTo` varchar(20) NOT NULL,
  `DriverId` int NOT NULL,
  `MatatuCapacity` int NOT NULL,
  `RegistrationDate` varchar(20) NOT NULL,
  `InsurancePicture` varchar(30) NOT NULL,
  PRIMARY KEY (`FleetNo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matatus`
--

INSERT INTO `matatus` (`FleetNo`, `OwnerId`, `NumPlate`, `RouteFrom`, `RouteTo`, `DriverId`, `MatatuCapacity`, `RegistrationDate`, `InsurancePicture`) VALUES
(1, 390391, 'KCD 334R', 'Nairobi', 'Wote', 390392, 14, '2023-03-16', 'IMG-641310b2621ab6.52066574.pn'),
(2, 393939, 'KED 334R', 'Nairobi', 'Wote', 39044, 14, '2023-03-24', 'IMG-641d3e9dc19e85.34494715.pn'),
(3, 393939, 'KQD 334R', 'Nairobi', 'Machakos', 390222, 33, '2023-03-24', 'IMG-641d3fde88d538.45003600.jp'),
(4, 390391, 'KPD 434 M', 'Nairobi', 'Machakos', 39044, 14, '2023-03-24', 'IMG-641d402f7bb327.84258174.pn');

-- --------------------------------------------------------

--
-- Table structure for table `matatu_schedule`
--

DROP TABLE IF EXISTS `matatu_schedule`;
CREATE TABLE IF NOT EXISTS `matatu_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `matatu_id` int NOT NULL,
  `route` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `return_departure_time` time NOT NULL,
  `return_arrival_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matatu_schedule`
--

INSERT INTO `matatu_schedule` (`id`, `matatu_id`, `route`, `description`, `departure_time`, `arrival_time`, `return_departure_time`, `return_arrival_time`) VALUES
(1, 1, 'Nairobi to Machakos', 'Lorem ipsum dolor sit amet', '05:00:00', '09:00:00', '06:00:00', '10:00:00'),
(2, 2, 'Machakos to Nairobi', 'Consectetur adipiscing elit', '06:00:00', '10:00:00', '07:00:00', '11:00:00'),
(3, 3, 'Nairobi to Machakos', 'Sed do eiusmod tempor incididunt', '07:00:00', '11:00:00', '08:00:00', '12:00:00'),
(4, 4, 'Machakos to Nairobi', 'Ut labore et dolore magna aliqua', '08:00:00', '12:00:00', '09:00:00', '13:00:00'),
(5, 5, 'Nairobi to Machakos', 'Ut enim ad minim veniam', '09:00:00', '13:00:00', '10:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `IDNo` int NOT NULL,
  `Age` int NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int NOT NULL,
  `psw` varchar(30) NOT NULL,
  `task` varchar(20) NOT NULL,
  `Salary` int NOT NULL,
  `RegistrationDate` date NOT NULL,
  `ProfilePicture` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `FirstName`, `LastName`, `IDNo`, `Age`, `Sex`, `Email`, `PhoneNumber`, `psw`, `task`, `Salary`, `RegistrationDate`, `ProfilePicture`) VALUES
(1, 'Emmanuel', 'Mutua', 390391, 23, 'Male', 'emmamulwa2020@gmail.com', 2147483647, '123', 'Owner', 80000, '2023-03-16', 'IMG-64130478e58377.47495677.jp'),
(2, 'urbanus', 'wambua', 390392, 24, 'Male', 'emmamulwa2021@gmail.com', 2147483647, '123', 'Driver', 30000, '2023-03-16', 'IMG-64130eca4af593.37716186.pn'),
(3, 'Kithuma', 'Kimangu', 393939, 30, 'Male', 'erastomunyao1@gmail.com', 2147483647, '1111', 'Owner', 80000, '2023-03-24', 'IMG-641d3dea7c96f3.06341074.jp'),
(4, 'Kiko', 'Kinene', 39044, 40, 'Male', 'emmamulwa2023@gmail.com', 2147483647, '1111', 'Driver', 30000, '2023-03-24', 'IMG-641d3e2e9a3b42.09275795.pn'),
(5, 'Joyce', 'Matabari', 390222, 35, 'Female', 'joyce@gmail.com', 2147483647, '1111', 'Driver', 30000, '2023-03-24', 'IMG-641d3f5975b5a1.06577763.pn'),
(6, 'MUTUA', 'Jacob', 390396, 23, 'Male', 'mutua@dekut.ac.ke', 2147483647, '1111', 'Driver', 30000, '2023-03-24', 'IMG-641d3f8b96b937.85618716.jp');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_nai_macha`
--

DROP TABLE IF EXISTS `schedule_nai_macha`;
CREATE TABLE IF NOT EXISTS `schedule_nai_macha` (
  `schedule_id` int NOT NULL AUTO_INCREMENT,
  `matatu_numplate` varchar(20) DEFAULT NULL,
  `dep1_t1` time DEFAULT NULL,
  `arrival1_t1` time DEFAULT NULL,
  `dep2_t1` time DEFAULT NULL,
  `arrival2_t1` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `dep1_t2` time DEFAULT NULL,
  `arrival1_t2` time DEFAULT NULL,
  `dep2_t2` time DEFAULT NULL,
  `arrival2_t2` time DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule_nai_macha`
--

INSERT INTO `schedule_nai_macha` (`schedule_id`, `matatu_numplate`, `dep1_t1`, `arrival1_t1`, `dep2_t1`, `arrival2_t1`, `date`, `dep1_t2`, `arrival1_t2`, `dep2_t2`, `arrival2_t2`) VALUES
(1, 'KQD 334R', '05:00:00', '07:00:00', '08:00:00', '23:00:00', '2023-03-27', '12:00:00', '15:00:00', '16:00:00', '19:00:00'),
(2, 'KPD 434 M', '08:00:00', '09:00:00', '10:00:00', '11:00:00', '2023-03-27', '00:00:00', '14:00:00', '03:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_nai_wote`
--

DROP TABLE IF EXISTS `schedule_nai_wote`;
CREATE TABLE IF NOT EXISTS `schedule_nai_wote` (
  `schedule_id` int NOT NULL,
  `matatu_numplate` varchar(20) DEFAULT NULL,
  `dep1_t1` time DEFAULT NULL,
  `arrival1_t1` time DEFAULT NULL,
  `dep2_t1` time DEFAULT NULL,
  `arrival2_t1` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `dep1_t2` time DEFAULT NULL,
  `arrival1_t2` time DEFAULT NULL,
  `dep2_t2` time DEFAULT NULL,
  `arrival2_t2` time DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule_nai_wote`
--

INSERT INTO `schedule_nai_wote` (`schedule_id`, `matatu_numplate`, `dep1_t1`, `arrival1_t1`, `dep2_t1`, `arrival2_t1`, `date`, `dep1_t2`, `arrival1_t2`, `dep2_t2`, `arrival2_t2`) VALUES
(0, 'KCD 334R', '10:54:00', '11:54:00', '00:54:00', '13:54:00', '2023-03-27', '14:54:00', '15:54:00', '16:55:00', '17:55:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
