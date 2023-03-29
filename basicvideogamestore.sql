-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 11:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicvideogamestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CatID` int(3) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CatID`, `Name`) VALUES
(1, 'Action'),
(2, 'Shooter'),
(3, 'Adventure'),
(4, 'Family Games'),
(5, 'Single Player'),
(6, 'Multiplayer');

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

CREATE TABLE `creators` (
  `CreatorID` int(3) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creators`
--

INSERT INTO `creators` (`CreatorID`, `Firstname`, `Lastname`) VALUES
(1, 'Activision', 'Treyarch'),
(2, 'Epic', 'Games'),
(3, 'EpicGames', 'Blizzard');

-- --------------------------------------------------------

--
-- Table structure for table `gamecreators`
--

CREATE TABLE `gamecreators` (
  `GameCreatorID` int(3) NOT NULL,
  `GameID` int(3) NOT NULL,
  `CreatorID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamecreators`
--

INSERT INTO `gamecreators` (`GameCreatorID`, `GameID`, `CreatorID`) VALUES
(1, 4, 1),
(2, 5, 2),
(3, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GameID` int(3) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Year` varchar(5) NOT NULL,
  `Edition` int(2) NOT NULL,
  `Photo` blob NOT NULL,
  `Price` decimal(8,2) NOT NULL,
  `Review` text NOT NULL,
  `StaffID` int(3) NOT NULL,
  `PubID` int(3) NOT NULL,
  `CatID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`GameID`, `Title`, `Year`, `Edition`, `Photo`, `Price`, `Review`, `StaffID`, `PubID`, `CatID`) VALUES
(4, 'Call of Duty Modern Warfare 2', '2022', 2, '', '99.99', 'Very Good Game!!', 1, 1, 1),
(5, 'Fortnite', '2017', 1, '', '0.00', 'Best Game Ever!!', 1, 2, 2),
(6, 'Rocket Leauge', '2015', 1, '', '0.00', 'I love this game 10/10.', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(3) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(3) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Shipped` date NOT NULL,
  `GameID` int(3) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `PubID` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Web` varchar(40) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`PubID`, `Name`, `Web`, `Phone`) VALUES
(1, 'Activision', 'activision.com', '1801234567'),
(2, 'Epic Games', 'epicgames.com', '18004567890'),
(3, 'Blizzard', 'blizzard.com', '18881234567'),
(4, 'logan', 'logan.com', '978');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(3) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Address1` varchar(40) NOT NULL,
  `Address2` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `SecurityQuestion` varchar(40) NOT NULL,
  `SecurityAnswer` varchar(40) NOT NULL,
  `Verified` tinyint(1) NOT NULL,
  `Usertype` int(1) NOT NULL COMMENT '1.) Admin, 2.)Staff, 3.)Customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Firstname`, `Lastname`, `Address1`, `Address2`, `Email`, `Phone`, `SecurityQuestion`, `SecurityAnswer`, `Verified`, `Usertype`) VALUES
(1, 'ltamulen', 'ltamulen', 'Logan', 'Tamulen', '37 Redemption Rock Trail', '', 'latamulen@student.fitchburgstate.edu', '978', '0', '0', 0, 1),
(2, 'ltamulen', 'ltamulen1', 'Logan', 'Tamulen', '37 redemption rock trail', '', 'ltamulen@student.fitchburgsate.edu', '978', '0', '0', 0, 2),
(3, 'ltamulen12', 'ltamulen12', 'log', 'tam', '37', '', 'ltamulen12@gmail.com', '978', '0', '0', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `creators`
--
ALTER TABLE `creators`
  ADD PRIMARY KEY (`CreatorID`);

--
-- Indexes for table `gamecreators`
--
ALTER TABLE `gamecreators`
  ADD PRIMARY KEY (`GameCreatorID`),
  ADD KEY `GameID` (`GameID`),
  ADD KEY `CreatorID` (`CreatorID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GameID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `PubID` (`PubID`),
  ADD KEY `CatID` (`CatID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `GameID` (`GameID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`PubID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `SecurityQuestion` (`SecurityQuestion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CatID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `creators`
--
ALTER TABLE `creators`
  MODIFY `CreatorID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gamecreators`
--
ALTER TABLE `gamecreators`
  MODIFY `GameCreatorID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `GameID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `PubID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gamecreators`
--
ALTER TABLE `gamecreators`
  ADD CONSTRAINT `gamecreators_ibfk_1` FOREIGN KEY (`GameID`) REFERENCES `games` (`GameID`),
  ADD CONSTRAINT `gamecreators_ibfk_2` FOREIGN KEY (`CreatorID`) REFERENCES `creators` (`CreatorID`);

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`CatID`) REFERENCES `categories` (`CatID`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`PubID`) REFERENCES `publishers` (`PubID`),
  ADD CONSTRAINT `games_ibfk_3` FOREIGN KEY (`StaffID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`GameID`) REFERENCES `games` (`GameID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
