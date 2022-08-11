-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 08:43 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `expired_drugs`
--

CREATE TABLE IF NOT EXISTS `expired_drugs` (
  `drugID` varchar(14) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `DrugType` varchar(30) DEFAULT NULL,
  `ManuDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UnitCost` float DEFAULT NULL,
  `SellingPrice` float DEFAULT NULL,
  PRIMARY KEY (`drugID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expired_drugs`
--


-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE IF NOT EXISTS `sold` (
  `drugID` varchar(14) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `DrugType` varchar(30) DEFAULT NULL,
  `ManuDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UnitCost` float DEFAULT NULL,
  `SellingPrice` float DEFAULT NULL,
  `Totalprice` float DEFAULT NULL,
  PRIMARY KEY (`drugID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`drugID`, `dname`, `DrugType`, `ManuDate`, `ExpireDate`, `Quantity`, `UnitCost`, `SellingPrice`, `Totalprice`) VALUES
('100', 'amx', 'cosmo', '2018-05-10', '2018-05-10', 0, 12, 15, 0),
('123', 'ORS', 'solid', '2018-05-05', '2018-05-03', 15, 21, 25, 375),
('1234', 'amx', 'cosmo', '2018-05-10', '2018-05-17', 0, 12, 15, 0),
('222', 'paracetamol', 'human', '2018-05-04', '2018-05-15', 45, 12, 20, 900),
('290', 'fdg', 'cosmo', '2018-05-17', '2018-05-10', 0, 12, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `drugID` varchar(14) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `DrugType` varchar(30) DEFAULT NULL,
  `ManuDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UnitCost` float DEFAULT NULL,
  `SellingPrice` float DEFAULT NULL,
  PRIMARY KEY (`drugID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`drugID`, `dname`, `DrugType`, `ManuDate`, `ExpireDate`, `Quantity`, `UnitCost`, `SellingPrice`) VALUES
('100', 'amx', 'cosmo', '2018-05-10', '2018-05-10', 0, 12, 15),
('123', 'ORS', 'solid', '2018-05-05', '2018-05-03', 60, 21, 25),
('1234', 'amx', 'cosmo', '2018-05-10', '2018-05-17', 0, 12, 15),
('222', 'paracetamol', 'human', '2018-05-04', '2018-05-15', 10, 12, 20),
('290', 'fdg', 'cosmo', '2018-05-17', '2018-05-10', 0, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `drugID` varchar(14) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `DrugType` varchar(30) DEFAULT NULL,
  `ManuDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UnitCost` float DEFAULT NULL,
  `SellingPrice` float DEFAULT NULL,
  PRIMARY KEY (`drugID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`drugID`, `dname`, `DrugType`, `ManuDate`, `ExpireDate`, `Quantity`, `UnitCost`, `SellingPrice`) VALUES
('100', 'amx', 'cosmo', '2018-05-10', '2018-05-10', 20, 12, 15),
('123', 'ORS', 'solid', '2018-05-06', '2018-05-03', 5, 12, 14),
('1234', 'amx', 'cosmo', '2018-05-10', '2018-05-17', 20, 12, 15),
('222', '  paracetamol', 'human', '2018-05-05', '2018-05-16', 72, 12, 15),
('290', 'fdg', 'cosmo', '2018-05-17', '2018-05-10', 25, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `userID` varchar(14) NOT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `Sex` varchar(8) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `Role` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`userID`, `FirstName`, `LastName`, `Sex`, `PhoneNumber`, `username`, `password`, `Role`) VALUES
('1', 'Zeni', 'Getachew', 'Female', '12345678', 'aaaaa', 'Ÿe´GA*Úpt5Õ[ÿ5¢', 'Admin'),
('2 ', 'Abebe', 'Samuel', 'male', '23456789', 'sssss', '-œ“kTÔ¤Í_³î³ò˜', 'Storecoordinat'),
('22', 'Gashaw', 'Alemu', 'male', '3456789', 'ppppp', '÷ô/ìäì-nv', 'pharmacist');
