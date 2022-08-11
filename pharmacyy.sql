-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 09:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8*/;

--
-- Database: `pharmacyy`
--
CREATE DATABASE IF NOT EXISTS `pharmacyy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pharmacyy`;
-- --------------------------------------------------------

--
-- Table structure for table `expired_drugs`
--

CREATE TABLE `expired_drugs` (
  `expire_drug_id` int(11) NOT NULL,
  `expire_drug_quantity` int(11) NOT NULL,
  `removed_date` date NOT NULL,
  `stock_id` int(11) NOT NULL,
  `removedby_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sold_drugs`
--

CREATE TABLE `sold_drugs` (
  `sold_drug_id` int(11) NOT NULL,
  `sold_drug_quantity` int(11) NOT NULL,
  `sold_date` date NOT NULL,
  `soldby_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `transfer_quantity` text NOT NULL,
  `transfered_date` date NOT NULL,
  `drugID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `drugID` int(11) NOT NULL,
  `drugName` varchar(100) NOT NULL,
  `drugType` varchar(100) NOT NULL,
  `manuDate` date NOT NULL,
  `expireDate` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitCost` float NOT NULL,
  `sellingPrice` float NOT NULL,
  `recordedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`drugID`, `drugName`, `drugType`, `manuDate`, `expireDate`, `quantity`, `unitCost`, `sellingPrice`, `recordedDate`) VALUES
(1, 'Parestemol', 'ABA', '2018-05-01', '2018-05-03', 33, 2, 3, '2018-05-10'),
(2, 'ABCD', 'ZZ', '2018-05-18', '2018-05-21', 44, 4, 7, '2018-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `sex` varchar(24) NOT NULL,
  `phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `Fname`, `Lname`, `sex`, `phoneNumber`) VALUES
(1, 'ZZ', 'AA', 'Male', 916464366),
(2, 'AB', 'CD', 'Female', 916464366);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `account_id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`account_id`, `userName`, `password`, `role`, `user_id`) VALUES
(1, 'sssss', 'wtdfr5ctd6 vttdxd', 'Storecoordinator', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expired_drugs`
--
ALTER TABLE `expired_drugs`
  ADD PRIMARY KEY (`expire_drug_id`),
  ADD KEY `removedby_id` (`removedby_id`),
  ADD KEY `expired_drugs_ibfk_1` (`stock_id`);

--
-- Indexes for table `sold_drugs`
--
ALTER TABLE `sold_drugs`
  ADD PRIMARY KEY (`sold_drug_id`),
  ADD KEY `soldby_id` (`soldby_id`),
  ADD KEY `sold_drugs_ibfk_1` (`stock_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `stock_ibfk_1` (`user_id`),
  ADD KEY `drugID` (`drugID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`drugID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expired_drugs`
--
ALTER TABLE `expired_drugs`
  MODIFY `expire_drug_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sold_drugs`
--
ALTER TABLE `sold_drugs`
  MODIFY `sold_drug_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `drugID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `expired_drugs`
--
ALTER TABLE `expired_drugs`
  ADD CONSTRAINT `expired_drugs_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`);

--
-- Constraints for table `sold_drugs`
--
ALTER TABLE `sold_drugs`
  ADD CONSTRAINT `sold_drugs_ibfk_1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`stock_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`drugID`) REFERENCES `store` (`drugID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
