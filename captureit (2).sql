-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 09:33 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `captureit`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `booking_ID` int(11) NOT NULL,
  `eventType` varchar(50) NOT NULL,
  `numOfpeople` int(11) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Usernane` varchar(50) NOT NULL,
  `photographer_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`booking_ID`, `eventType`, `numOfpeople`, `Address`, `Date`, `Time`, `Usernane`, `photographer_Id`) VALUES
(83, 'Couple photoshoot', 2, 'Santa venera Garden', '2018-05-08', '11:16:00', 'MariMifsd', 2),
(84, 'Wedding', 0, 'dfggdfgdg', '2018-05-21', '05:06:00', 'MariMifsd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `photographerinfo`
--

CREATE TABLE `photographerinfo` (
  `photographer_Id` int(11) NOT NULL,
  `Usernane` varchar(60) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographerinfo`
--

INSERT INTO `photographerinfo` (`photographer_Id`, `Usernane`, `Password`, `Name`, `Surname`) VALUES
(2, 'marielMifs', 'mcast1234', 'Mariel', 'Mifsud');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(80) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `Quantity`, `Price`) VALUES
(7, 'Display Gallery Item 1 Canon EOS 800D Black Digital Camera with EF-S 18-55mm Len', 5, 889),
(8, 'Canon Custom Shoulder Gadget Bag 300EG for SLR Cameras', 7, 49.95),
(9, 'Velbon EX-630 Tripod ', 5, 72.5),
(10, '64GB Kingston SDXC 45MB/s Read 10MB/s Write Class 10 Flash Memory', 8, 31.5);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `productId` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Usernane` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Name`, `Surname`, `Email`, `Usernane`, `Password`) VALUES
('', '', '', '', ''),
('Gabriel', 'Micallef', 'gabrielmicallef@gmail.com', 'Gab', 'hello2'),
('Mariel', 'Mifsud', 'marielmifsud@gmail.com', 'MariMifsd', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `watch_list`
--

CREATE TABLE `watch_list` (
  `watch_Id` int(11) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch_list`
--

INSERT INTO `watch_list` (`watch_Id`, `userName`, `productId`) VALUES
(1, 'MariMifsd', 7),
(2, 'Gab', 7),
(3, 'MariMifsd', 8),
(4, 'MariMifsd', 9),
(5, 'MariMifsd', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`booking_ID`),
  ADD KEY `Username` (`Usernane`),
  ADD KEY `photographer_Id` (`photographer_Id`),
  ADD KEY `Usernane` (`Usernane`);
ALTER TABLE `events` ADD FULLTEXT KEY `Username_2` (`Usernane`);

--
-- Indexes for table `photographerinfo`
--
ALTER TABLE `photographerinfo`
  ADD PRIMARY KEY (`photographer_Id`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `Username` (`Username`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Usernane`),
  ADD KEY `Usernane` (`Usernane`);

--
-- Indexes for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD PRIMARY KEY (`watch_Id`),
  ADD KEY `userName` (`userName`),
  ADD KEY `productId` (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `photographerinfo`
--
ALTER TABLE `photographerinfo`
  MODIFY `photographer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `watch_list`
--
ALTER TABLE `watch_list`
  MODIFY `watch_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`photographer_Id`) REFERENCES `photographerinfo` (`photographer_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`Usernane`) REFERENCES `userinfo` (`Usernane`);

--
-- Constraints for table `photographerinfo`
--
ALTER TABLE `photographerinfo`
  ADD CONSTRAINT `photographerinfo_ibfk_1` FOREIGN KEY (`photographer_Id`) REFERENCES `events` (`photographer_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `photographerinfo_ibfk_2` FOREIGN KEY (`photographer_Id`) REFERENCES `events` (`photographer_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `userinfo` (`Usernane`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`);

--
-- Constraints for table `watch_list`
--
ALTER TABLE `watch_list`
  ADD CONSTRAINT `watch_list_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `userinfo` (`Usernane`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `watch_list_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
