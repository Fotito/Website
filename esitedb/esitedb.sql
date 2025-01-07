-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2025 at 09:55 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `domain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` int NOT NULL,
  `bookingDate` date DEFAULT NULL,
  `userID` int DEFAULT NULL,
  `Services` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `legacyusers`
--

CREATE TABLE `legacyusers` (
  `userID` int NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Company` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceName` varchar(255) NOT NULL,
  `serviceType` varchar(255) DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `ServDescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceName`, `serviceType`, `Price`, `ServDescription`) VALUES
('Collections', 'Finance', 29000, 'Collecting debts owed by companies or people to you'),
('Tele-Sales', 'Sales', 19000, 'Selling products of services via telephone');

-- --------------------------------------------------------

--
-- Table structure for table `servicetypes`
--

CREATE TABLE `servicetypes` (
  `typeOfServ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `servicetypes`
--

INSERT INTO `servicetypes` (`typeOfServ`) VALUES
('Finance'),
('Sales');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Company` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `UserName`, `Surname`, `Email`, `Company`, `Password`) VALUES
(1, 'Michel', 'Lechim', 'mllm@boi.com', 'boi', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`domain`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `Services` (`Services`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `legacyusers`
--
ALTER TABLE `legacyusers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceName`),
  ADD KEY `serviceType` (`serviceType`);

--
-- Indexes for table `servicetypes`
--
ALTER TABLE `servicetypes`
  ADD PRIMARY KEY (`typeOfServ`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`Services`) REFERENCES `service` (`serviceName`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`serviceType`) REFERENCES `servicetypes` (`typeOfServ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
