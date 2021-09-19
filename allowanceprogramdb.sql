-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 09:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allowanceprogramdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(1001, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `nid` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `dateofbirth` date NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `division` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `postoffice` varchar(45) NOT NULL,
  `upazilla` varchar(45) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `unnion` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL,
  `active` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`nid`, `firstname`, `lastname`, `dateofbirth`, `phonenumber`, `division`, `district`, `postoffice`, `upazilla`, `postcode`, `unnion`, `password`, `active`, `admin`) VALUES
(59135995, 'Shafin', 'Islam', '2021-09-16', '01705579550', 'Khulna', 'Kushtia', 'Kushtia Head Post Office', 'Kushtia Sadar', '7000', 'ohin', '234sdasd', 1, 0),
(423323445, 'Okaew', 'asd', '2021-09-16', '01705579550', 'Rangpur', 'Rangpur', 'Rangpur Head Post Office', 'Rangpur Sadar', '7000', 'aq23qea', '23qweasdasd', 0, 0),
(591123445, 'Rasin', 'islam', '2021-09-16', '01705579550', 'Rajshahi', 'Bogra', 'Fulbari Post Office', 'Bogra Sadar', '5800', 'aq23qea', '23q2qwe', 0, 0),
(2147483647, 'Shafin', 'Ohin', '2021-08-31', '01705579550', 'Khulna', 'Kushtia', 'Kushtia Head Post Office', 'Kushtia Sadar', '7000', 'ohin', 'ohin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `applicantreceiveallowance`
--

CREATE TABLE `applicantreceiveallowance` (
  `nid` int(11) NOT NULL,
  `pgID` int(11) NOT NULL,
  `START` date DEFAULT NULL,
  `END` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `orgID` int(11) NOT NULL,
  `orgName` varchar(100) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `dAmount` decimal(14,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orghasprogram`
--

CREATE TABLE `orghasprogram` (
  `pgID` int(11) NOT NULL,
  `orgID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `pgID` int(11) NOT NULL,
  `programName` varchar(45) DEFAULT NULL,
  `amount` decimal(14,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `applicantreceiveallowance`
--
ALTER TABLE `applicantreceiveallowance`
  ADD PRIMARY KEY (`nid`,`pgID`),
  ADD KEY `pgID` (`pgID`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`orgID`);

--
-- Indexes for table `orghasprogram`
--
ALTER TABLE `orghasprogram`
  ADD PRIMARY KEY (`pgID`,`orgID`),
  ADD KEY `orgID` (`orgID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`pgID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `orgID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `pgID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicantreceiveallowance`
--
ALTER TABLE `applicantreceiveallowance`
  ADD CONSTRAINT `applicantreceiveallowance_ibfk_1` FOREIGN KEY (`nid`) REFERENCES `applicant` (`nid`),
  ADD CONSTRAINT `applicantreceiveallowance_ibfk_2` FOREIGN KEY (`pgID`) REFERENCES `program` (`pgID`);

--
-- Constraints for table `orghasprogram`
--
ALTER TABLE `orghasprogram`
  ADD CONSTRAINT `orghasprogram_ibfk_1` FOREIGN KEY (`pgID`) REFERENCES `program` (`pgID`),
  ADD CONSTRAINT `orghasprogram_ibfk_2` FOREIGN KEY (`orgID`) REFERENCES `organization` (`orgID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
