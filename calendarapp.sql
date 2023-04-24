-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 04:30 PM
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
-- Database: `calendarapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
-- naming convention is eg. word_word
-- updated on 04/24/2023 at 1:00 am EST

CREATE TABLE `calendar` (
  `calendar_ID` int(50) NOT NULL,
  `calendar_name` varchar(25) NOT NULL,
  `date_created` DATE NOT NULL,
  `date_current` DATE NOT NULL,
  `owner_ID` int(50) NOT NULL,
  `event_ID` int(50) NOT NULL,
  `registration_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `editors`
-- Since an editor is a user with permission to edit something, whether it's an event or a calendar
-- An editor belongs to an event or a calendar, but an event or a calendar may have many editors

CREATE TABLE `editor` (
  `editor_ID` int(50) NOT NULL,
  `user_ID` int(50) NOT NULL,
  `event_ID` int(50) NOT NULL,
  `calendar_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--
-- CHANGES MADE 04_23_2023
-- duration is in days, it is not a required parameter and defaults to 1

CREATE TABLE `event` (
  `event_ID` int(5) NOT NULL,
  `event_name` varchar(25) NOT NULL,
  `date_created` DATE NOT NULL,
  `date_scheduled` DATE NOT NULL,
  `duration` int(5) DEFAULT 1,
  `description` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- calendar has one owner
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_ID`),
  ADD KEY `owner_ID` (`owner_ID`),

--
-- Indexes for table `editors`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`editor_ID`),
  ADD KEY `owner_ID` (`owner_ID`),
  ADD KEY `event_ID` (`event_ID`);

--
-- An event has a primary key which is event_ID
-- An event also has a foreign key which is the calendar that the event belongs to, and that calendar table has a user ID
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_ID`);
  ADD KEY ( `calendar_ID`);
  

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `editor_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event` BUT WHY?
--
ALTER TABLE `event`
  MODIFY `event_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- Sets Constraints for table `calendar`
-- set up foreign keys here(?), in other words
-- TODO create association table between owners and calendars (many-to-many)
-- .. or decide on one-one relationship for owner and calendar
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`owner_ID`) REFERENCES `user` (`user_ID`);

--
-- Constraints for table `editors`
--
ALTER TABLE `editor`
  ADD CONSTRAINT `editors_ibfk_1` FOREIGN KEY (`event_ID`) REFERENCES `event` (`event_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
